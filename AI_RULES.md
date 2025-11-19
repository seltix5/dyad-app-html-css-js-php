# AI Development Rules

This document outlines the technical stack and development guidelines for building and modifying this application.

## Tech Stack Overview

- Frontend Markup: HTML5
- Frontend Styling: CSS3
- Frontend Logic: Vanilla JavaScript (ES6+)
- Backend: PHP 8.x (or 7.4+)
- UI Framework: Bootstrap 5.x
- Icons: Font Awesome 7.x (or 6.7.2)

## Library Usage Guidelines

### HTML Requirements
- Use HTML5 for structure and semantics
- Ensure proper document structure with valid DOCTYPE and meta tags
- Use meaningful `id` and `class` names that describe purpose, not appearance
- Include accessibility attributes (`alt`, `aria-label`, `role`) where appropriate

### CSS Requirements
- Use CSS3 for styling, animations, and responsiveness.
- Use external stylesheets or `<style>` blocks—avoid inline styles
- Leverage Bootstrap classes first; write custom CSS only when necessary
- Use CSS custom properties (variables) for theming and consistency
- Follow mobile-first responsive design principles
- Organize CSS logically (layout, components, utilities, overrides)

### JavaScript Requirements
- Write vanilla JavaScript using ES6+ features (arrow functions, `const`/`let`, template literals, destructuring, modules)
- Use `async`/`await` for asynchronous operations
- Use `addEventListener` for event handling
- Validate user input on the client side (always validate server-side too)
- Handle errors gracefully with try-catch blocks
- Comment complex logic and use descriptive function/variable names
- Do not use any frontend frameworks (React, Vue, Angular, etc.) or TypeScript.

### PHP Requirements
- Use PHP 8.x or 7.4+ syntax and features
- Separate logic from presentation (use includes/templates)
- Validate and sanitize ALL user input server-side
- Use prepared statements for database queries to prevent SQL injection
- Handle errors with try-catch and proper logging
- Use meaningful variable and function names with consistent naming convention

### Bootstrap Usage
- Use Bootstrap 5.x grid system for layouts and components
- Leverage Bootstrap components (cards, modals, navbars, forms, buttons) before building custom ones
- Use Bootstrap utility classes for spacing, typography, colors, and display properties
- Customize via additional CSS or CSS custom properties — never modify Bootstrap source files
- Use Bootstrap's responsive utilities 

### Font Awesome Usage
- Use Font Awesome 7.x or 6.7.2 for icons to enhance UI clarity
- Use `aria-hidden="true"` on decorative icons
- Provide text alternatives or labels for meaningful icons

## Code Quality Standards

### Organization
- Keep files organized in logical directories (`/css`, `/js`, `/includes`, `/assets`, `/config`) unless instructed otherwise
- Separate concerns—don't mix CSS/JS/HTML in one file unless necessary
- Create reusable components/functions rather than duplicating code

### Naming Conventions
- HTML/CSS: Use kebab-case for classes and IDs (`user-profile`, `nav-menu`)
- JavaScript: Use camelCase (`getUserData`, `isValid`)
- PHP: Use camelCase or snake_case consistently (`getUserData` or `get_user_data`)
- Use descriptive names that convey purpose

### Comments and Documentation
- Comment complex logic, algorithms, or non-obvious code
- Use JSDoc-style comments for JavaScript functions
- Include PHPDoc blocks for PHP functions/classes
- Avoid obvious comments that restate what code already shows

### Accessibility (WCAG 2.1 AA Minimum)
- Ensure full keyboard navigation support
- Provide text alternatives for images and icons
- Use sufficient color contrast ratios
- Include proper heading hierarchy
- Test forms with assistive technologies

### Performance Optimization
- Minimize HTTP requests where possible
- Optimize and compress images where possible
- Load JavaScript at end of `<body>` or use `defer`/`async`
- Use appropriate caching strategies
- Minimize DOM manipulation operations

### Browser Compatibility
- Target modern browsers (Chrome, Firefox, Safari, Edge—latest 2 versions)
- Use feature detection, not browser detection
- Provide graceful degradation for unsupported features
- Test responsive behavior across device sizes

## Security Best Practices

- Input Validation: Validate and sanitize all user input on both client and server
- SQL Injection Prevention: Always use prepared statements/parameterized queries
- XSS Prevention: Escape output when displaying user-generated content
- HTTPS: Ensure all connections use HTTPS in production
- File Upload Security: Validate file types, sizes, and scan for threats
- Password Security: Use `password_hash()` and `password_verify()` in PHP (bcrypt/argon2)
- Session Security: Use secure session configuration and regenerate session IDs appropriately

## Strictly Forbidden

### Frontend Frameworks & Tools
- React, Vue, Angular, Svelte, or any other frontend JavaScript framework
- TypeScript or JSX syntax
- Any build tools like Webpack, Parcel, Rollup, or other bundlers
- NPM/Yarn for frontend dependencies

### Backend Technologies
- Node.js, Express, Deno, or any other backend framework besides PHP
- Python, Ruby, Go, or other backend languages

### CSS Frameworks
- Tailwind CSS or other utility-first frameworks
- Material UI, Bulma, Foundation, or alternative CSS frameworks

### Bad Practices
- Inline styles (`style="..."`)
- Inline JavaScript event handlers (`onclick="..."`)
- Mixing business logic with presentation
- Hardcoded credentials (use environment variables or config files)
- `eval()` or similar unsafe JavaScript functions
- Direct SQL queries without prepared statements

## General Behavior

- Use only the allowed tech stack defined in this document
- Never suggest forbidden technologies regardless of potential benefits
- Provide complete, working code that follows these guidelines
- Explain design choices when asked or when non-obvious
- Prioritize Bootstrap solutions before custom CSS
- Write semantic, accessible HTML by default
- Include error handling in JavaScript and PHP
- Add comments to complex sections
- Suggest improvements when reviewing existing code
- Respect project constraints without suggesting alternatives outside this stack
