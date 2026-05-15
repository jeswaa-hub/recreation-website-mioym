## ADDED Requirements

### Requirement: Dropdown hover zone bridges visual gap
The navigation header dropdown containers SHALL maintain an invisible hover bridge between the trigger element and the dropdown panel so that moving the mouse across the `mt-2` gap does not trigger the dropdown close animation.

#### Scenario: Mouse moves from trigger to dropdown item
- **WHEN** user hovers over a dropdown trigger (e.g., "The Firm")
- **AND** user moves mouse downward across the visual gap toward a dropdown item
- **THEN** the dropdown remains open and visible

#### Scenario: Mouse leaves dropdown area entirely
- **WHEN** user moves mouse away from both the trigger and the dropdown panel
- **THEN** the dropdown closes with its leave animation

### Requirement: Active navigation state matches current route
Each dropdown parent link SHALL display an active/highlighted style when the current page's URL matches any route within that dropdown's group, using the full route path as defined in `routes/web.php`.

#### Scenario: User is on About Us page
- **WHEN** the current URL is `/the-firm/about-us`
- **THEN** "The Firm" dropdown trigger shows the active highlight style

#### Scenario: User is on Single Family Residential page
- **WHEN** the current URL is `/solutions/single-family-residential`
- **THEN** "Solutions" dropdown trigger shows the active highlight style

#### Scenario: User is on Blogs page
- **WHEN** the current URL is `/news/blogs`
- **THEN** "News" dropdown trigger shows the active highlight style

#### Scenario: User is on homepage
- **WHEN** the current URL is `/`
- **THEN** only "Home" shows the active highlight style; no dropdown triggers are highlighted

### Requirement: Navigation header component does not inject asset links
The `navigationHeader.blade.php` component SHALL NOT contain `<link>` tags for external stylesheets (fonts, icon libraries). Asset loading is the responsibility of the page layout.

#### Scenario: Component is included in a page
- **WHEN** `navigationHeader.blade.php` is rendered via `@include`
- **THEN** no `<link>` tags for Google Fonts or Font Awesome are output by the component
