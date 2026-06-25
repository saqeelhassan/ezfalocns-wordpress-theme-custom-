# EZ Falcons Theme – Performance Optimizations

Summary of changes applied to improve Lighthouse scores and page speed.

---

## 1. functions.php

### Script/style versioning
- **Change:** Added `fz_falcans_asset_version()` and use it for all enqueued CSS/JS. In production uses theme version; with `WP_DEBUG` uses `filemtime()` for `main.css` and `main.js` so cache busting works during development.
- **Lighthouse impact:** Proper cache headers and versioned URLs improve repeat-visit metrics (e.g. FCP, LCP) and avoid stale assets.

### Defer non-critical JavaScript
- **Change:** `script_loader_tag` filter adds `defer` to all theme and vendor scripts except `jquery-core` and `jquery-migrate`. Scripts remain in the footer and keep their dependency order.
- **Lighthouse impact:** Reduces main-thread work during initial parse, improves TBT and FCP. Deferred scripts run after HTML is parsed, so LCP and CLS are less affected by JS.

### Resource hints (preconnect, dns-prefetch, preload)
- **Change:** New `fz_falcans_resource_hints()` runs early in `wp_head` and outputs:
  - **Preconnect:** `fonts.googleapis.com`, `fonts.gstatic.com` (crossorigin).
  - **DNS prefetch:** Same origins as fallback.
  - **Preload:** `main.css` (as `style`) so critical CSS is requested earlier.
  - **Preload (front page only):** First hero image `hero-bg-1.webp` (as `image`) for LCP.
- **Lighthouse impact:** Preconnect/prefetch reduce connection latency for fonts and improve LCP. Preloading the hero image helps LCP on the homepage; preloading main CSS can improve FCP.

---

## 2. footer.php

### Scroll-to-top script
- **Change:** Removed the inline `<script>` block for the scroll-to-top button. The same behavior is implemented in `assets/js/main.js` (inside the existing document-ready block) and runs when the deferred main bundle loads.
- **Lighthouse impact:** One less blocking inline script; all behavior is in a single deferred script, which is easier for the browser to optimize and aligns with “Avoid legacy JavaScript” and “Reduce unused JavaScript” audits.

---

## 3. header.php

- No code changes. All resource hints and preloads are centralized in `fz_falcans_resource_hints()` in `functions.php`, so the header stays clean and hints are consistent.

---

## 4. TTFB / server-side bottlenecks

Reviewed files: `functions.php`, `header.php`, `footer.php`, `inc/template-helpers.php`, `inc/import-theme-assets-to-media.php`, `front-page.php`.

- **template-helpers.php:** Light helpers; `fz_get_breadcrumb()` uses `get_queried_object()`, `get_post_meta`, `get_post` — no heavy loops.
- **import-theme-assets-to-media.php:** Loaded only in admin; no front-end impact.
- **front-page.php:** Simple loop and `get_template_part()`; no extra queries in this file.
- **Virtual page / the_posts filter:** Creates one fake post; minimal cost.
- **Inline CSS in functions.php:** Large block appended via `wp_add_inline_style( 'main', ... )`. Built on every request but no DB; if needed later, the concatenated string could be cached (e.g. transient keyed by theme version).
- **header.php:** Uses `file_exists()` for logo paths; cost is negligible.

**Further TTFB improvements (outside theme code):**
- Use object caching (Redis/Memcached) if the host supports it.
- Use a full-page or edge cache (e.g. Cloudflare, Varnish, or a hosting cache) for anonymous traffic.
- Ensure PHP opcode cache (OPcache) is enabled and consider tuning for WordPress.

---

## Quick reference

| Change | File(s) | Lighthouse / benefit |
|--------|--------|------------------------|
| Asset versioning | functions.php | Cache busting, better repeat-visit FCP/LCP |
| Defer scripts | functions.php | Lower TBT, less render-blocking, better FCP |
| Preconnect + dns-prefetch (fonts) | functions.php | Faster font load, better LCP/CLS |
| Preload main.css | functions.php | Sooner first paint, better FCP |
| Preload hero image (front page) | functions.php | Sooner LCP on homepage |
| Scroll-to-top in main.js | footer.php, main.js | No inline script, single deferred bundle |

After deploying, re-run Lighthouse (Performance) and “Reduce unused JavaScript” / “Eliminate render-blocking resources” to confirm improvements.
