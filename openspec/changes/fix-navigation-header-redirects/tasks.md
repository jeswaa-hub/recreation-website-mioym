## 1. Fix Dropdown Hover Zone

- [x] 1.1 Add 100ms debounce on @mouseleave to each desktop dropdown container so the menu stays open while mouse crosses the gap to dropdown items

## 2. Fix Active-State Route Matching

- [x] 2.1 Update "The Firm" `request()->is()` check from `'about-us', 'team', 'investor'` to `'the-firm/about-us', 'the-firm/team', 'the-firm/investor'`
- [x] 2.2 Update "Solutions" `request()->is()` check from `'single-family-residential'` to `'solutions/*'` to cover all solution routes
- [x] 2.3 Update "Asset Management" `request()->is()` check from `'affordable-home-program'` to `'asset-management/*'`
- [x] 2.4 Update "News" `request()->is()` check from `'blogs', 'testimonials'` to `'news/blogs', 'news/testimonials'`

## 3. Clean Up Component

- [x] 3.1 Remove redundant `<link>` tags for Google Fonts and Font Awesome from `navigationHeader.blade.php`
