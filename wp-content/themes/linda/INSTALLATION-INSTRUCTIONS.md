# Linda Industries WordPress Theme - Installation Instructions

## IMPORTANT: Read Before Starting

This guide will walk you through converting your HTML website to WordPress with Elementor support.

## What You'll Need

1. WordPress installation (5.0 or higher)
2. FTP access or cPanel File Manager
3. All your HTML assets (CSS, JS, images)
4. Basic knowledge of WordPress

## File Structure Setup

### Parent Theme Structure
Create this folder structure on your server:

```
wp-content/themes/linda-industries/
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── page.php
├── single.php
├── sidebar.php
├── screenshot.png (optional - 1200x900px)
├── inc/
│   ├── template-tags.php
│   └── customizer.php
├── template-parts/
│   ├── content.php
│   └── content-none.php
└── assets/
    ├── css/
    │   ├── bootstrap.min.css
    │   ├── animate.min.css
    │   ├── swiper-bundle.min.css
    │   ├── all.min.css
    │   ├── nice-select.css
    │   ├── magnific-popup.css
    │   ├── metisMenu.css
    │   ├── aos.css
    │   ├── spacing.css
    │   └── main.css
    ├── js/
    │   ├── vendor/
    │   │   ├── jquery-2.2.4.min.js
    │   │   ├── popper.min.js
    │   │   └── bootstrap.min.js
    │   ├── jquery.meanmenu.js
    │   ├── swiper-bundle.min.js
    │   ├── jquery.easypiechart.min.js
    │   ├── jquery.counterup.min.js
    │   ├── jquery.magnific-popup.min.js
    │   ├── metisMenu.min.js
    │   ├── wow.min.js
    │   ├── jquery.waypoints.min.js
    │   ├── aos.js
    │   ├── jquery.nice-select.min.js
    │   ├── jquery-ui.js
    │   ├── jquery.scrollUp.min.js
    │   ├── plugins.js
    │   └── main.js
    ├── images/
    │   └── (all your images go here - NOT in js folder!)
    └── fonts/
        └── bootstrap-icons/
            └── font-css.css
```

### Child Theme Structure
Create this folder structure:

```
wp-content/themes/linda-industries-child/
├── style.css
└── functions.php
```

## Step-by-Step Installation

### STEP 1: Prepare Your Files

1. **Download all files from this package**
   - Main theme files (style.css, functions.php, etc.)
   - Child theme files (style.css, functions.php)

2. **Organize Your HTML Assets**
   - Move all CSS files to `assets/css/`
   - Move all JS files to `assets/js/`
   - **IMPORTANT**: Move images from `assets/js/` to `assets/images/`
   - Move fonts to `assets/fonts/`

### STEP 2: Upload Parent Theme

Using FTP or cPanel File Manager:

1. Connect to your server
2. Navigate to: `wp-content/themes/`
3. Create folder: `linda-industries`
4. Upload all parent theme files to this folder:
   ```
   - style.css
   - functions.php
   - index.php
   - header.php
   - footer.php
   - page.php
   - single.php
   - sidebar.php
   - inc/ (entire folder)
   - template-parts/ (entire folder)
   - assets/ (entire folder with all your CSS, JS, images)
   ```

5. Verify the file structure matches the diagram above

### STEP 3: Upload Child Theme

1. In `wp-content/themes/`, create folder: `linda-industries-child`
2. Upload child theme files:
   ```
   - style.css (rename from child-style.css)
   - functions.php (rename from child-functions.php)
   ```

### STEP 4: Install Required Plugins

1. Log into WordPress Admin (yoursite.com/wp-admin)
2. Go to: **Plugins → Add New**
3. Search and install these plugins:
   - **Elementor** (by Elementor.com)
   - **Elementor Header & Footer Builder** (by Brainstorm Force)
4. Click **Activate** for both plugins

### STEP 5: Activate Theme

1. Go to: **Appearance → Themes**
2. You should see both themes:
   - Linda Industries (parent)
   - Linda Industries Child
3. Click **Activate** on **Linda Industries Child**
4. The parent theme will be used automatically

### STEP 6: Configure Elementor

1. Go to: **Elementor → Settings**
2. Check these settings:
   - **General**: Set your preferences
   - **Style**: Choose color scheme
   - **Advanced**: Enable required features
3. Click **Save Changes**

### STEP 7: Create Your First Page

**Option A: Using Elementor (Recommended)**

1. Go to: **Pages → Add New**
2. Enter page title
3. Click **Edit with Elementor** button
4. Build your page using Elementor's drag-and-drop interface
5. Click **Publish**

**Option B: Using Classic Editor**

1. Go to: **Pages → Add New**
2. Enter page title and content
3. The page will use your theme's styling
4. Click **Publish**

### STEP 8: Set Up Navigation Menu

1. Go to: **Appearance → Menus**
2. Create a new menu
3. Add pages/links to your menu
4. Under **Menu Settings**, check **Primary Menu**
5. Click **Save Menu**

### STEP 9: Configure Permalinks

1. Go to: **Settings → Permalinks**
2. Select: **Post name** (recommended)
3. Click **Save Changes**

### STEP 10: Create Header & Footer with Elementor (Optional)

1. Go to: **Elementor → Theme Builder**
2. Click **Add New** → **Header**
3. Design your header using Elementor
4. Set display conditions (e.g., Entire Site)
5. Click **Publish**
6. Repeat for Footer

## Migrating HTML Content to WordPress

### For Each HTML Page:

1. **Create New Page in WordPress**
   - Go to: **Pages → Add New**
   - Enter the page title

2. **Copy Content**
   - If using Elementor: Use widgets to recreate layout
   - If using classic editor: Copy HTML content

3. **Update Image Paths**
   - Old: `assets/js/image.jpg`
   - New: `<?php echo get_template_directory_uri(); ?>/assets/images/image.jpg`
   - Or upload images to Media Library and insert

4. **Publish Page**

### For Blog Posts:

1. Go to: **Posts → Add New**
2. Enter title and content
3. Set category and tags
4. Add featured image
5. Click **Publish**

## Customization Guide

### Making Style Changes

**ALWAYS USE THE CHILD THEME for customizations!**

1. Open: `linda-industries-child/style.css`
2. Add your custom CSS:
   ```css
   /* Custom Header Styles */
   .site-header {
       background-color: #your-color;
   }
   
   /* Custom Button Styles */
   .custom-button {
       padding: 10px 20px;
       background: #your-color;
   }
   ```
3. Save file and upload via FTP
4. Clear WordPress cache

### Adding Custom Functions

1. Open: `linda-industries-child/functions.php`
2. Add your PHP code:
   ```php
   function my_custom_function() {
       // Your code here
   }
   add_action('init', 'my_custom_function');
   ```
3. Save and upload

### Customizing Elementor Templates

1. Go to: **Elementor → Theme Builder**
2. Create templates for:
   - Header
   - Footer
   - Single Post
   - Archive
3. Set display conditions
4. Publish templates

## Troubleshooting

### Issue: Styles Not Loading

**Solution:**
1. Check file paths in functions.php
2. Verify assets are in correct folders
3. Clear browser cache (Ctrl+F5)
4. Clear WordPress cache
5. Check for JavaScript errors in browser console (F12)

### Issue: Elementor Not Working

**Solution:**
1. Verify Elementor is activated
2. Go to: **Elementor → Settings → Advanced**
3. Enable "Switch Editor Loader Method"
4. Clear Elementor cache: **Elementor → Tools → Regenerate CSS**

### Issue: Broken Layout

**Solution:**
1. Check if parent theme is present
2. Verify child theme has correct Template header in style.css
3. Deactivate all plugins except Elementor
4. Test each plugin one by one

### Issue: Images Not Displaying

**Solution:**
1. Verify images are in `assets/images/` folder
2. Check file permissions (644 for files, 755 for folders)
3. Use WordPress Media Library instead
4. Check image paths in code

### Issue: Menu Not Showing

**Solution:**
1. Go to: **Appearance → Menus**
2. Verify menu is assigned to "Primary Menu" location
3. Check if header.php has wp_nav_menu() function
4. Try creating new menu

## Performance Optimization

### After Installation:

1. **Install Caching Plugin**
   - WP Super Cache or W3 Total Cache

2. **Optimize Images**
   - Use Smush or EWWW Image Optimizer

3. **Minify CSS/JS**
   - Use Autoptimize plugin

4. **Use CDN**
   - Cloudflare (free option)

5. **Database Optimization**
   - WP-Optimize plugin

## Security Best Practices

1. **Keep Everything Updated**
   - WordPress core
   - Themes
   - Plugins

2. **Use Security Plugin**
   - Wordfence or Sucuri

3. **Strong Passwords**
   - Admin account
   - Database
   - FTP/cPanel

4. **Regular Backups**
   - UpdraftPlus or BackupBuddy
   - Schedule daily backups

5. **Limit Login Attempts**
   - Limit Login Attempts Reloaded plugin

## Need Help?

### Resources:
- WordPress Codex: https://codex.wordpress.org/
- Elementor Documentation: https://elementor.com/help/
- WordPress Support Forums: https://wordpress.org/support/

### Common Issues:
- Check error logs: `wp-content/debug.log`
- Enable WordPress debugging (in wp-config.php):
  ```php
  define('WP_DEBUG', true);
  define('WP_DEBUG_LOG', true);
  ```

## Maintenance Checklist

### Weekly:
- [ ] Check for updates
- [ ] Review backups
- [ ] Check website speed

### Monthly:
- [ ] Update all plugins and themes
- [ ] Review security logs
- [ ] Optimize database
- [ ] Test all forms and functionality

### Quarterly:
- [ ] Review and update content
- [ ] Check for broken links
- [ ] Review analytics
- [ ] Test mobile responsiveness

## Additional Notes

- **Never edit parent theme files directly** - use child theme
- **Test changes on staging site first** if possible
- **Back up before making major changes**
- **Document your customizations** for future reference
- **Keep a list of installed plugins** and their settings

## Success! What's Next?

After successful installation:

1. ✅ Create all your pages
2. ✅ Set up blog (if needed)
3. ✅ Configure widgets
4. ✅ Add social media links
5. ✅ Set up contact forms (Contact Form 7)
6. ✅ Install Google Analytics
7. ✅ Submit sitemap to Google Search Console
8. ✅ Test on all devices
9. ✅ Launch! 🚀

Congratulations on your new WordPress site!
