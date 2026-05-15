## Context

The `mioymRealtyPartners.blade.php` page displays two service cards (Voucher Leasing Services and Broker Division) with inner button links. Currently, clicking these buttons requires two clicks to navigate. The page uses Tailwind CSS for styling and AOS for scroll animations.

Current structure:
```
<div class="card group hover:bg-[#222]">
  <h3>Title</h3>
  <p>Description</p>
  <a href="route()" class="button group">
    <span>Text</span>
    <svg>Arrow</svg>
  </a>
</div>
```

## Goals / Non-Goals

**Goals:**
- Single click navigates to the correct page from anywhere on the card
- Visual appearance remains identical to current design
- Hover effects work on both desktop and touch devices
- Accessible to screen readers and keyboard navigation

**Non-Goals:**
- No changes to other pages or components
- No changes to routes or URL structure
- No JavaScript additions
- No changes to mobile navigation or other UI elements

## Decisions

### 1. Convert card `<div>` to `<a>` element

**Decision**: Replace the outer `<div class="...">` with `<a href="..." class="...">` to make the entire card a native link.

**Rationale**: Native `<a>` elements handle all click/touch behavior correctly across all browsers and devices. No JavaScript needed. Screen readers announce it as a link. Keyboard users can tab to it.

**Alternatives considered:**
- Add `onclick="window.location.href='...'"` to the div: Not accessible, breaks keyboard navigation
- Wrap entire card in `<a>`: Invalid HTML (can't nest `<a>` inside `<a>`)
- Use JavaScript click handler: Unnecessary complexity, accessibility concerns

### 2. Replace inner `<a>` button with `<span>` styled identically

**Decision**: The inner button becomes a `<span>` with the same classes, since the outer element is now the link.

**Rationale**: Nested `<a>` tags are invalid HTML and cause unpredictable browser behavior. The `<span>` inherits the link context from the parent `<a>`.

### 3. Remove `group` class from inner element

**Decision**: The `group` class moves from the inner button to the outer `<a>` card element. The inner element keeps `group-hover:` related classes if any.

**Rationale**: Tailwind's `group` modifier requires the parent to have the `group` class. Since the card is now the link, it becomes the group parent.

## Risks / Trade-offs

| Risk | Mitigation |
|---|---|
| Entire card becomes one large link, reducing granularity | Acceptable UX pattern; users expect full-card clickability on modern websites |
| Screen readers may announce entire card content as link text | Add `aria-label` to the `<a>` for clear link description |
| SEO impact of large link areas | Minimal; internal links with descriptive text are SEO-friendly |
