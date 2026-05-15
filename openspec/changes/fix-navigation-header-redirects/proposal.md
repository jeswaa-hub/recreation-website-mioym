## Why

The navigation header component (`navigationHeader.blade.php`) has two bugs that degrade the user experience:

1. **Dropdown hover gap**: Desktop dropdowns use `@mouseenter`/`@mouseleave` with an `mt-2` gap between the trigger and the menu. When the user's mouse crosses this gap, the dropdown begins its leave animation (fading out and moving away), making it difficult or impossible to click dropdown items.

2. **Incorrect active-state detection**: The `request()->is()` checks use shortened path segments (e.g., `'about-us'`) that don't match the actual route paths (e.g., `/the-firm/about-us`). This means the active/highlighted state never appears on the correct nav item, confusing users about which page they're on.

## What Changes

- Replace `@mouseenter`/`@mouseleave` hover triggers with a stable hover zone that bridges the gap between trigger and dropdown panel
- Add `@click.prevent` handling on dropdown parent links so hovering opens the menu but clicking navigates to the parent page
- Fix all `request()->is()` active-state checks to match actual route paths defined in `routes/web.php`
- Remove redundant `<link>` tags (fonts, font-awesome) from the component — these belong in the layout, not a reusable component

## Capabilities

### New Capabilities
- `navigation-header`: Reliable dropdown hover behavior, correct active-state highlighting, and clean component structure for the site's main navigation header

### Modified Capabilities
<!-- No existing specs to modify -->

## Impact

- **Modified files**: `resources/views/components/navigationHeader.blade.php`
- **No breaking changes**: All routes and URLs remain the same; this is purely a UX fix
- **No dependencies added**: Uses existing Alpine.js already loaded by the app
