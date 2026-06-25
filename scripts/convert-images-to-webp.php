<?php
$imgDir = __DIR__ . '/../assets/img';
$converted = 0; $skipped = 0; $saved = 0;

$iter = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($imgDir));
foreach ($iter as $file) {
    if (!$file->isFile()) continue;
    $ext = strtolower($file->getExtension());
    if ($ext !== 'jpg' && $ext !== 'jpeg') continue;
    $src  = $file->getPathname();
    $dest = preg_replace('/\.(jpe?g)$/i', '.webp', $src);
    if (file_exists($dest)) { $skipped++; continue; }
    $info = @getimagesize($src);
    if (!$info || ($info[2] !== IMAGETYPE_JPEG && $info[2] !== IMAGETYPE_PNG)) { $skipped++; continue; }
    $img = $info[2] === IMAGETYPE_PNG ? @imagecreatefrompng($src) : @imagecreatefromjpeg($src);
    if (!$img) { echo "SKIP (load failed): {$src}\n"; $skipped++; continue; }
    // Preserve PNG transparency
    if ($info[2] === IMAGETYPE_PNG) {
        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
    }
    $w = imagesx($img); $h = imagesy($img);
    // Resize to max 1920px wide while keeping aspect ratio
    if ($w > 1920) {
        $nh = (int)round($h * 1920 / $w);
        $r  = imagecreatetruecolor(1920, $nh);
        imagecopyresampled($r, $img, 0, 0, 0, 0, 1920, $nh, $w, $h);
        imagedestroy($img); $img = $r;
    }
    if (!imagewebp($img, $dest, 80)) { echo "FAIL: {$src}\n"; imagedestroy($img); continue; }
    imagedestroy($img);
    $orig = filesize($src); $webp = filesize($dest);
    $pct  = $orig > 0 ? round(($orig - $webp) / $orig * 100) : 0;
    $rel  = substr($dest, strlen($imgDir) + 1);
    echo "OK  {$rel}  {$pct}% smaller (" . round($orig/1024) . " KB -> " . round($webp/1024) . " KB)\n";
    $converted++; $saved += ($orig - $webp);
}
echo "\nConverted {$converted}, skipped {$skipped}. Saved " . round($saved/1024/1024, 1) . " MB.\n";
