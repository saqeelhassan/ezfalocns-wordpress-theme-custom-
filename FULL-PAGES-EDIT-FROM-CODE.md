# Complete Pages – Edit from Code or Block Editor (Gutenberg)

All **complete Laravel page content** is in the theme. You can **edit from code** (PHP/HTML in theme files) or use the **built-in block editor (Gutenberg)**. Empty page content falls back to the default template (code).

## Where each full page lives

| Laravel page        | WordPress file | Used for (slug) |
|--------------------|----------------|------------------|
| **Home** (full)    | `template-parts/content-full-home.php` + Template **Full Home (Laravel)** | Assign to Home page |
| **About**          | `page-about.php` | Page with slug `about` |
| **Contact**        | `page-contact.php` | Page with slug `contact` |
| **FAQ**            | `page-faq.php` | Page with slug `faq` |
| **Service**        | `template-parts/content-service-layout.php` + Template **Page – Service Layout** | Page with slug `service` |
| **Pricing** (project-details) | `page-project-details.php` | Page with slug `project-details` |
| **404**            | `404.php` | Shown on not-found URLs |
| **Blog**           | `page-blog.php` (Template **Blog**) | Create a page (e.g. slug `blog`), assign template **Blog**. Posts are added via **Dashboard → Posts → Add New**. |
| **Roles** (each)   | One **page file** per role. Editable in **Gutenberg** or code. | Create page with exact slug, add to Menus |
| **Industries** (each) | One **page file** per industry. Editable in **Gutenberg** or code. | Create page with exact slug, add to Menus |

### Our Roles – create a page with this slug, then add to menu

**Edit in block editor:** Open the page and click **Edit**. If the page has no content, the theme shows the default from the template part (code). Once you add content in Gutenberg, that content is shown.

| Role | Page slug (use exactly) | Page file | Content to edit |
|------|-------------------------|-----------|------------------|
| Operation Manager | `operation-manager` | `page-operation-manager.php` | `template-parts/content-role-operation-manager.php` |
| Truck Dispatcher | `truck-dispatcher` | `page-truck-dispatcher.php` | `template-parts/content-role-dispatch-manager.php` |
| Account Manager | `account-manager` | `page-account-manager.php` | `template-parts/content-role-account-manager.php` |
| Documentation Specialist | `documentation-expert` | `page-documentation-expert.php` | `template-parts/content-role-documentation-expert.php` |
| Sales & Business Development | `sales-business-development` | `page-sales-business-development.php` | `template-parts/content-role-sales-business-development.php` |
| Customer & Carrier Relations | `customer-carrier-relations` | `page-customer-carrier-relations.php` | `template-parts/content-role-customer-carrier-relations.php` |
| Administrative Assistant | `administrative-assistant` | `page-administrative-assistant.php` | `template-parts/content-role-administrative-assistant.php` |
| Digital Marketing Expert | `digital-marketing-expert` | `page-digital-marketing-expert.php` | `template-parts/content-role-digital-marketing-expert.php` |

### Industries – create a page with this slug, then add to menu

**Edit in Gutenberg:** Same as Roles – edit the page in the block editor. Empty content falls back to the theme’s template part.

| Industry | Page slug (use exactly) | Page file | Content to edit |
|----------|-------------------------|-----------|------------------|
| Freight Forwarders | `freight-forwarders` | `page-freight-forwarders.php` | `template-parts/content-industry-freight-forwarders.php` |
| NVOCC | `nvocc` | `page-nvocc.php` | `template-parts/content-industry-nvocc.php` |
| Trucking Companies / Owner Operators | `trucking-companies-owner-operators` | `page-trucking-companies-owner-operators.php` | `template-parts/content-industry-trucking-companies-owner-operators.php` |
| Shipping Lines / Agents | `shipping-lines-agents` | `page-shipping-lines-agents.php` | `template-parts/content-industry-shipping-lines-agents.php` |
| Customs Brokers | `customs-brokers` | `page-customs-brokers.php` | `template-parts/content-industry-customs-brokers.php` |
| Warehousing & Distribution Companies | `warehousing-distribution-companies` | `page-warehousing-distribution-companies.php` | `template-parts/content-industry-warehousing-distribution-companies.php` |

## URL → template (automatic)

- **yoursite.com/about/** → `page-about.php` (full About content)
- **yoursite.com/contact/** → `page-contact.php` (full Contact content)
- **yoursite.com/faq/** → `page-faq.php` (full FAQ content)
- **yoursite.com/project-details/** → `page-project-details.php` (full Pricing content)
- **yoursite.com/blog/** → Page with template **Blog** (lists posts). Single post: **yoursite.com/blog/post-slug/**.
- **404** → `404.php` (full 404 content)

For **Home**: create a page with slug `home` (or use as front page), then set its **Template** to **Full Home (Laravel)** so it uses the full Laravel home content. You can also edit the home page in the block editor; that content is shown when present.

## Block editor (Gutenberg)

- The theme uses the standard WordPress content area. Edit any page via **Pages → Edit** (block editor).
- Pages that use the content area (About, Contact, FAQ, Pricing, Roles, Industries, Home) show your block editor content when it exists; otherwise the theme shows the default from the template part.

## Helpers (in code)

In any of these templates you can use:

- `fz_assets()` – theme assets URL (e.g. for `/assets/img/...`)
- `fz_home()` – homepage URL
- `fz_about()` – about URL
- `fz_contact()` – contact URL
- `fz_service()` – service URL
- `fz_faq()` – FAQ URL
- `fz_blog()` – blog listing URL (e.g. `/blog/`)
- `fz_pricing()` – project-details (pricing) URL

Defined in `inc/template-helpers.php`.

## Summary

- **About, Contact, FAQ, Pricing, 404**: full content is in the `page-*.php` and `404.php` files. Edit those files to change the page content.
- **Service**: full layout in `template-parts/content-service-layout.php`. Page template **Page – Service Layout**.
- **Each Role (8)** and **Industry (6)**: one page file each. Create a WordPress page with the exact slug and add to Menus. **Edit in Gutenberg** – whatever you add there is shown. If the page content is empty, the theme shows the default from `template-parts/content-role-*.php` or `content-industry-*.php` (editable in code).
- **Home**: use template **Full Home (Laravel)** and edit `template-parts/content-full-home.php` for the main home content, or edit the home page in the block editor.
- **Blog**: create a page (e.g. title **Blog**, slug **blog**), set its **Template** to **Blog**. The client adds posts from **Dashboard → Posts → Add New**; they appear on the blog page. Single post layout: `single.php`.

After copying `public/assets` into the theme’s `assets/` folder, these templates render the same as the Laravel project; you can then edit the PHP/HTML in the files above.
