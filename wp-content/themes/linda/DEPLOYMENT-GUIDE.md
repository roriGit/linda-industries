# WORDPRESS THEME DEPLOYMENT GUIDE

## 📦 Package Contents

You have received all the files needed to convert your HTML website to WordPress with Elementor support.

## 🎯 Quick Overview

This package contains:
1. **Parent Theme Files** - The main theme (linda-industries)
2. **Child Theme Files** - For your customizations (linda-industries-child)
3. **Documentation** - Complete guides and references

## 📁 FOLDER STRUCTURE YOU NEED TO CREATE

### On Your WordPress Server

```
wp-content/
└── themes/
    ├── linda-industries/                  ← PARENT THEME FOLDER
    │   ├── style.css                      ← Copy from package
    │   ├── functions.php                  ← Copy from package
    │   ├── index.php                      ← Copy from package
    │   ├── header.php                     ← Copy from package
    │   ├── footer.php                     ← Copy from package
    │   ├── page.php                       ← Copy from package
    │   ├── single.php                     ← Copy from package
    │   ├── sidebar.php                    ← Copy from package
    │   ├── inc/                           ← Copy entire folder from package
    │   │   ├── template-tags.php
    │   │   └── customizer.php
    │   ├── template-parts/                ← Copy entire folder from package
    │   │   ├── content.php
    │   │   └── content-none.php
    │   └── assets/                        ← CREATE THIS, then add your files
    │       ├── css/                       ← Move all your CSS files here
    │       │   ├── bootstrap.min.css
    │       │   ├── animate.min.css
    │       │   ├── swiper-bundle.min.css
    │       │   ├── all.min.css
    │       │   ├── nice-select.css
    │       │   ├── magnific-popup.css
    │       │   ├── metisMenu.css
    │       │   ├── aos.css
    │       │   ├── spacing.css
    │       │   └── main.css
    │       ├── js/                        ← Move all your JS files here
    │       │   ├── vendor/
    │       │   │   ├── jquery-2.2.4.min.js
    │       │   │   ├── popper.min.js
    │       │   │   └── bootstrap.min.js
    │       │   ├── jquery.meanmenu.js
    │       │   ├── swiper-bundle.min.js
    │       │   ├── jquery.easypiechart.min.js
    │       │   ├── jquery.counterup.min.js
    │       │   ├── jquery.magnific-popup.min.js
    │       │   ├── metisMenu.min.js
    │       │   ├── wow.min.js
    │       │   ├── jquery.waypoints.min.js
    │       │   ├── aos.js
    │       │   ├── jquery.nice-select.min.js
    │       │   ├── jquery-ui.js
    │       │   ├── jquery.scrollUp.min.js
    │       │   ├── plugins.js
    │       │   └── main.js
    │       ├── images/                    ← ⚠️ IMPORTANT: Move images HERE (not in js!)
    │       │   └── (all your website images)
    │       └── fonts/                     ← Move your fonts here
    │           └── bootstrap-icons/
    │               └── font-css.css
    │
    └── linda-industries-child/            ← CHILD THEME FOLDER
        ├── style.css                      ← RENAME child-style.css to style.css
        └── functions.php                  ← RENAME child-functions.php to functions.php
```

## 🚀 DEPLOYMENT STEPS

### Step 1: Prepare Parent Theme

1. **On your computer**, create a folder named `linda-industries`
2. **Copy these files from the package** into it:
   - style.css
   - functions.php
   - index.php
   - header.php
   - footer.php
   - page.php
   - single.php
   - sidebar.php
3. **Copy these folders from the package** into it:
   - inc/
   - template-parts/
4. **Create assets folder structure**:
   ```
   linda-industries/
   └── assets/
       ├── css/
       ├── js/
       │   └── vendor/
       ├── images/
       └── fonts/
           └── bootstrap-icons/
   ```
5. **Move your HTML assets**:
   - All CSS files → `assets/css/`
   - All JS files → `assets/js/` (create vendor subfolder if needed)
   - All images → `assets/images/` (**NOT** in js folder!)
   - All fonts → `assets/fonts/`

### Step 2: Prepare Child Theme

1. **On your computer**, create a folder named `linda-industries-child`
2. **Copy and rename files**:
   - Copy `child-style.css` from package → Rename to `style.css`
   - Copy `child-functions.php` from package → Rename to `functions.php`

Your child theme folder should contain:
```
linda-industries-child/
├── style.css
└── functions.php
```

### Step 3: Upload to WordPress

**Using FTP (FileZilla, etc.):**

1. Connect to your WordPress server
2. Navigate to: `wp-content/themes/`
3. Upload the `linda-industries` folder
4. Upload the `linda-industries-child` folder

**Using cPanel File Manager:**

1. Log into cPanel
2. Open File Manager
3. Navigate to: `public_html/wp-content/themes/`
4. Click "Upload"
5. Upload both folders (you may need to zip them first)

### Step 4: Install Plugins

1. Log into WordPress Admin (`yoursite.com/wp-admin`)
2. Go to: **Plugins → Add New**
3. Search for and install:
   - **Elementor** (by Elementor.com)
   - **Elementor Header & Footer Builder** (by Brainstorm Force)
4. Click **Activate** on both

### Step 5: Activate Theme

1. Go to: **Appearance → Themes**
2. Find **Linda Industries Child**
3. Click **Activate**

✅ Done! Your theme is now active.

## 📝 FILE CHECKLIST

Before uploading, verify you have:

**Parent Theme (linda-industries/):**
- [ ] style.css
- [ ] functions.php
- [ ] index.php
- [ ] header.php
- [ ] footer.php
- [ ] page.php
- [ ] single.php
- [ ] sidebar.php
- [ ] inc/template-tags.php
- [ ] inc/customizer.php
- [ ] template-parts/content.php
- [ ] template-parts/content-none.php
- [ ] assets/css/ (with all CSS files)
- [ ] assets/js/ (with all JS files)
- [ ] assets/images/ (with all images)
- [ ] assets/fonts/ (with fonts)

**Child Theme (linda-industries-child/):**
- [ ] style.css (renamed from child-style.css)
- [ ] functions.php (renamed from child-functions.php)

## 🎨 Next Steps After Activation

1. **Create Header with Elementor** (optional):
   - Elementor → Theme Builder → Add New → Header
   - Design your header
   - Set to "Entire Site"
   - Publish

2. **Create Footer with Elementor** (optional):
   - Elementor → Theme Builder → Add New → Footer
   - Design your footer
   - Set to "Entire Site"
   - Publish

3. **Create Your First Page**:
   - Pages → Add New
   - Click "Edit with Elementor"
   - Build your page
   - Publish

4. **Set Up Menu**:
   - Appearance → Menus
   - Create menu
   - Assign to "Primary Menu"
   - Save

5. **Configure Permalinks**:
   - Settings → Permalinks
   - Select "Post name"
   - Save

## 📚 Documentation Files Included

- **README.md** - Quick start and overview
- **INSTALLATION-INSTRUCTIONS.md** - Detailed step-by-step guide
- **QUICK-REFERENCE.md** - WordPress code snippets and paths
- **wordpress-conversion-guide.md** - Conversion strategy overview

## ⚠️ CRITICAL NOTES

### 1. Image Location Issue
Your HTML had images in `assets/js/` - this is incorrect.
**You MUST move them to** `assets/images/`

The theme is configured to look for images at:
```
/assets/images/your-image.jpg
```

### 2. Child Theme is Essential
**ALWAYS make customizations in the child theme**, never the parent theme.

Why? Updates to the parent theme will overwrite your changes.

### 3. File Names Matter
The child theme files MUST be renamed:
- `child-style.css` → `style.css`
- `child-functions.php` → `functions.php`

Otherwise WordPress won't recognize them.

### 4. Folder Names are Exact
Use these exact folder names:
- `linda-industries` (parent)
- `linda-industries-child` (child)

Any other names will break the theme.

## 🔧 Troubleshooting

**Theme doesn't appear in WordPress:**
- Check folder names are exact
- Verify style.css has correct headers
- Check file permissions (644 for files, 755 for folders)

**Styles not loading:**
- Clear browser cache (Ctrl+F5)
- Elementor → Tools → Regenerate CSS
- Check that CSS files are in assets/css/

**Images not showing:**
- Verify images are in assets/images/ (not assets/js/)
- Check file paths in your code
- Verify file permissions

**Elementor button missing:**
- Install and activate Elementor plugin
- Go to Elementor → Settings
- Enable required features

## 💡 Pro Tips

1. **Test Locally First** - Use Local by Flywheel or XAMPP
2. **Backup Before Upload** - Save your current site
3. **Upload via FTP** - More reliable than browser uploads
4. **Use Child Theme** - All customizations go here
5. **Keep Documentation** - Save all .md files for reference

## 📞 Support Resources

- **WordPress Codex**: https://codex.wordpress.org/
- **Elementor Docs**: https://elementor.com/help/
- **WordPress Support**: https://wordpress.org/support/

## ✅ Final Verification

After deployment, check:

- [ ] Theme activated successfully
- [ ] Elementor installed and working
- [ ] Navigation menu displays
- [ ] Images load correctly
- [ ] CSS styles applied
- [ ] JavaScript working
- [ ] Can create pages with Elementor
- [ ] Mobile responsive
- [ ] No console errors (F12)

## 🎉 Success!

Once everything is verified, you're ready to:
- Build pages with Elementor
- Add content
- Customize styles
- Launch your site!

---

**Need Help?** 
Refer to INSTALLATION-INSTRUCTIONS.md for detailed troubleshooting.

**Quick Questions?**
Check QUICK-REFERENCE.md for common code snippets.

Good luck with your WordPress site! 🚀
