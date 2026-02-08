# Linda Industries WordPress Theme

A custom WordPress theme with full Elementor support, converted from HTML.

## Quick Start

1. Upload parent theme to: `wp-content/themes/linda-industries/`
2. Upload child theme to: `wp-content/themes/linda-industries-child/`
3. Upload your assets (CSS, JS, images) to: `linda-industries/assets/`
4. Install and activate Elementor plugin
5. Activate child theme from Appearance → Themes

## File Mapping

### Rename Files:
- `child-style.css` → Place in child theme folder as `style.css`
- `child-functions.php` → Place in child theme folder as `functions.php`

### Parent Theme Files (linda-industries/):
```
style.css
functions.php
index.php
header.php
footer.php
page.php
single.php
sidebar.php
inc/
  ├── template-tags.php
  └── customizer.php
template-parts/
  ├── content.php
  └── content-none.php
assets/
  ├── css/
  ├── js/
  ├── images/
  └── fonts/
```

### Child Theme Files (linda-industries-child/):
```
style.css
functions.php
```

## Important Notes

⚠️ **Move images from `assets/js/` to `assets/images/`**

✅ **Always customize in child theme**

✅ **Install Elementor plugin for page building**

## Asset Paths in Code

Use WordPress functions for asset URLs:

```php
// For images
<?php echo get_template_directory_uri(); ?>/assets/images/logo.png

// For CSS (already enqueued in functions.php)
// No need to manually add - automatically loaded

// For JS (already enqueued in functions.php)
// No need to manually add - automatically loaded
```

## Google Fonts

Urbanist font is automatically loaded via functions.php. No need to add manually.

## Required Plugins

1. **Elementor** (Free) - Page builder
2. **Elementor Header & Footer Builder** (Free) - Custom headers/footers

## Recommended Plugins

- Contact Form 7 - Contact forms
- Yoast SEO - SEO optimization
- WP Super Cache - Performance
- Wordfence - Security

## Creating Pages

### With Elementor:
1. Pages → Add New
2. Click "Edit with Elementor"
3. Drag and drop widgets
4. Publish

### Without Elementor:
1. Pages → Add New
2. Add content in classic editor
3. Theme styles apply automatically
4. Publish

## Customization

### Add Custom CSS:
Edit `linda-industries-child/style.css`

### Add Custom Functions:
Edit `linda-industries-child/functions.php`

### Create Custom Header:
1. Elementor → Theme Builder
2. Add New → Header
3. Design and publish

## Support

📖 Full documentation: See INSTALLATION-INSTRUCTIONS.md
🌐 WordPress: https://wordpress.org/support/
🎨 Elementor: https://elementor.com/help/

## Theme Info

- **Version:** 1.0.0
- **Requires:** WordPress 5.0+
- **Tested up to:** WordPress 6.4
- **License:** GPL v2 or later

## File Structure Reference

```
wp-content/
└── themes/
    ├── linda-industries/          (Parent - DO NOT EDIT)
    │   ├── style.css
    │   ├── functions.php
    │   ├── index.php
    │   ├── header.php
    │   ├── footer.php
    │   ├── page.php
    │   ├── single.php
    │   ├── sidebar.php
    │   ├── inc/
    │   ├── template-parts/
    │   └── assets/
    │       ├── css/
    │       ├── js/
    │       ├── images/         ← Move your images here!
    │       └── fonts/
    └── linda-industries-child/    (Child - CUSTOMIZE HERE)
        ├── style.css
        └── functions.php
```

## Common Tasks

### Change Logo:
Appearance → Customize → Site Identity → Logo

### Update Menu:
Appearance → Menus

### Add Widgets:
Appearance → Widgets

### Change Permalink Structure:
Settings → Permalinks → Post name

## Troubleshooting Quick Fixes

**Styles not loading?**
- Clear cache (Ctrl+F5)
- Elementor → Tools → Regenerate CSS

**Elementor not working?**
- Check plugin is activated
- Switch to default WordPress theme, then back

**Images not showing?**
- Verify images are in `assets/images/`
- Check file permissions (644)

## Updates

Always keep updated:
- WordPress core
- Themes (via child theme)
- Plugins

## Backup

Before any changes:
1. Backup files (via FTP/cPanel)
2. Backup database (phpMyAdmin)
3. Or use backup plugin (UpdraftPlus)

---

Made with ❤️ for WordPress + Elementor
