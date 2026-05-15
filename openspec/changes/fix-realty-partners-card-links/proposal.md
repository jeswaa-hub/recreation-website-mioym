## Why

On the `mioymRealtyPartners.blade.php` page, the "Explore Leasing Service" and "Join our brokerage" buttons inside the service cards require two clicks to navigate to their target pages. The first click either triggers a hover state (on touch devices) or hits an overlapping element, and only the second click actually follows the link. This creates a frustrating user experience where users must click twice to reach the voucher assistance program or join brokerage pages.

## What Changes

- Convert the service card wrapper `<div>` elements into `<a>` tags so the entire card is clickable
- Move the `href` attribute from the inner button to the card wrapper
- Remove the inner `<a>` button element and replace with a `<span>` styled identically
- Ensure hover effects and transitions remain visually unchanged
- Maintain all existing ARIA accessibility attributes

## Capabilities

### New Capabilities
- `clickable-service-cards`: Entire service cards on the realty partners page are clickable and navigate to their target pages on a single click

### Modified Capabilities
<!-- No existing specs to modify -->

## Impact

- **Modified files**: `resources/views/mioymRealtyPartners.blade.php`
- **No breaking changes**: URLs and routes remain the same; only the clickable area expands
- **No dependencies added**: Pure HTML/CSS change using existing Tailwind classes
- **Accessibility**: Cards will need proper `role="link"` or use native `<a>` element for screen readers
