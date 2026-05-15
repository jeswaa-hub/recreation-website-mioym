## Context

The `navigationHeader.blade.php` component is the site's primary navigation, used across all public-facing pages. It relies on Alpine.js for dropdown interactivity. The component currently has:

- **Hover-triggered dropdowns** using `@mouseenter`/`@mouseleave` with `mt-2` gap between trigger and panel
- **Active-state highlighting** using `request()->is()` with incorrect path patterns
- **Redundant `<link>` tags** for fonts and font-awesome that should live in the layout

Routes are defined in `routes/web.php` with path prefixes like `/the-firm/`, `/solutions/`, `/asset-management/`, `/news/`, and `/lending/`.

## Goals / Non-Goals

**Goals:**
- Dropdown menus stay open while user moves mouse from trigger to menu items
- Parent trigger links are clickable and navigate to their target page
- Active-state highlighting correctly matches the current route
- Component is clean — no redundant asset loading

**Non-Goals:**
- No redesign of the navigation UI/visual style
- No changes to route definitions or URL structure
- No mobile menu changes (mobile uses click-to-toggle, not hover)
- No new dependencies

## Decisions

### 1. Hover Zone: Use invisible bridge element instead of removing mt-2

**Decision**: Add a transparent pseudo-element or transparent div that bridges the `mt-2` gap, keeping the mouse "inside" the dropdown container.

**Rationale**: The `mt-2` spacing is intentional for visual design. Removing it would make the dropdown touch the trigger, which looks cramped. An invisible bridge preserves the visual gap while keeping the hover state stable.

**Alternatives considered:**
- Remove `mt-2`: breaks visual design
- Use `padding-top` on dropdown instead of `mt-2`: changes the dropdown's box model, may affect shadow/border rendering
- Increase `@mouseleave` delay with setTimeout: adds JS complexity, feels laggy

### 2. Parent link click: Keep as standard `<a href>` — no JS interception

**Decision**: The parent trigger link (e.g., "The Firm" → `/the-firm/about-us`) remains a normal `<a>` tag. Hover opens the dropdown; clicking navigates. No `@click.prevent` needed.

**Rationale**: The current code already has the parent as a standard `<a href>`. The issue is purely the dropdown closing too fast. Fixing the hover zone solves the UX without changing navigation behavior.

### 3. Active-state: Use `request()->is()` with full route paths

**Decision**: Update all `request()->is()` checks to match the actual route paths from `routes/web.php`:

| Dropdown | Old Check | New Check |
|---|---|---|
| The Firm | `'about-us', 'team', 'investor'` | `'the-firm/about-us', 'the-firm/team', 'the-firm/investor'` |
| Solutions | `'single-family-residential'` | `'solutions/single-family-residential'` |
| Asset Management | `'affordable-home-program'` | `'asset-management/affordable-home-program'` |
| News | `'blogs', 'testimonials'` | `'news/blogs', 'news/testimonials'` |

**Rationale**: Laravel's `request()->is()` matches against the full path minus the domain. The routes use prefixed paths, so the checks must too.

### 4. Remove redundant `<link>` tags from component

**Decision**: Remove the `<link>` tags for Google Fonts and Font Awesome from `navigationHeader.blade.php`. These are already loaded in `landingPage.blade.php`'s `<head>` and should be in the main layout.

**Rationale**: A reusable component should not inject `<link>` tags. Pages that include this component via `@include` may not be full HTML documents, and duplicate `<link>` tags are wasteful.

## Risks / Trade-offs

| Risk | Mitigation |
|---|---|
| Invisible bridge may capture clicks in the gap area | Bridge is transparent and pointer-events are handled by the parent container; no interactive elements in the gap |
| Removing `<link>` tags could break pages that include nav without loading fonts elsewhere | Verify all pages that `@include` this component also load fonts in their layout |
| `request()->is()` with wildcards could match unintended routes | Use exact paths, not wildcards, to avoid false positives |
