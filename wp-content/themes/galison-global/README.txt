Galison Global WordPress Theme Notes

1) Theme files
   - header.php / footer.php: shared markup
   - functions.php: enqueues theme assets + ACF helpers
   - inc/acf-field-groups.php: registers ACF field groups (local JSON in code)
   - page-*.php: templates for Services, Projects, Contact, Home
   - assets/js/main.js: sets year + highlights active nav link
   - assets/css/style.css: placeholder for custom CSS (Tailwind is loaded via CDN in header)

2) Advanced Custom Fields (ACF)
   - Install and activate the free "Advanced Custom Fields" plugin from WordPress.org (or ACF Pro).
   - Field groups appear when you edit pages that use these templates:
     - Template "Home"        -> Home fields (hero, about, four asset cards)
     - Template "Services"    -> Services fields (hero + three service blocks)
     - Template "Projects"    -> Projects fields (hero, two sections, stats, images)
     - Template "Contact"     -> Contact fields (images, intro, person, email)
   - If ACF is not active, the theme falls back to the same default text/images as before.

3) Required WordPress page slugs for nav links
   - Services page slug:   services
   - Projects page slug:   projects
   - Contact page slug:    contact

   The nav links + active highlight logic rely on these slugs (see galison_global_page_url() and is_page()).

4) Setup
   - Activate this theme in WP Admin.
   - Create 4 pages:
     - Home (use template "Home")
     - Services (use template "Services"; slug "services")
     - Projects (use template "Projects"; slug "projects")
     - Contact (use template "Contact"; slug "contact")
   - Set the static Front Page if desired (WP Settings -> Reading).
