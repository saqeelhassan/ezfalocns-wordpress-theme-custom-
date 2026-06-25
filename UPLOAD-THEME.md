# Theme Upload – If It Keeps Loading

This theme is **about 90+ MB** (assets, images, CSS/JS). Many servers **limit upload size** (e.g. 32–64 MB) or **time out** during upload/extract. That’s why the browser can “just keep loading” when you upload the zip in **Appearance → Themes → Add New**.

Use one of these methods instead.

---

## Option 1: Upload via FTP or File Manager (recommended)

1. **Zip the theme folder**  
   Zip the folder **wordpress-theme-fz-falcans** (so the zip contains that folder with all files inside).

2. **Upload the zip to the server**  
   - **FTP:** Connect with FileZilla (or similar), go to `wp-content/themes/`, upload the zip there.  
   - **cPanel / File Manager:** Open `wp-content/themes/`, click **Upload**, upload the zip.

3. **Extract on the server**  
   - In File Manager: right‑click the zip → **Extract**.  
   - Or use SSH: `unzip wordpress-theme-fz-falcans.zip` inside `wp-content/themes/`.

4. **Activate in WordPress**  
   In **Appearance → Themes**, you should see **wordpress-theme-fz-falcans**. Click **Activate**.  
   (Activation will create the default pages.)

---

## Option 2: Increase PHP limits, then upload in WordPress

If you have access to **PHP settings** (e.g. in hosting panel or via `php.ini`), increase:

- `upload_max_filesize` = 128M (or at least 100M)  
- `post_max_size` = 128M  
- `max_execution_time` = 300  

Then try again: **Appearance → Themes → Add New → Upload Theme** and choose your zip.

---

## After activation

- Go to **Settings → Reading** and set:
  - **Homepage:** A static page (create/choose a “Home” page).
  - **Posts page:** Blog (so `/blog/` shows posts).
- The theme will have created the default pages (About, Contact, FAQ, Services, Price, Blog, roles, industries). Check **Pages** in the admin.
