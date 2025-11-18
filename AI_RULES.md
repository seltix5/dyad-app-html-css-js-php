# AI Development Rules

This document outlines the technical stack and development guidelines for building and modifying this application.

## Tech Stack Overview

*   **Frontend:** HTML5, CSS3, Vanilla JavaScript (ES6+)
*   **Backend:** PHP (7 or 8)
*   **UI Framework:** Bootstrap 5
*   **Icons:** Font Awesome

## Library Usage Guidelines

*   **HTML:** Use HTML5 for structure and semantics.
*   **CSS:** Use CSS3 for styling, animations, and responsiveness. Avoid inline styles.
*   **JavaScript:** Use vanilla JavaScript (ES6+) for all interactivity. Do not use any frontend frameworks (React, Vue, Angular, etc.) or TypeScript.
*   **PHP:** Use PHP (7 or 8) for server-side logic and templating. Do not use Node.js or any other backend frameworks.
*   **Bootstrap:** Utilize Bootstrap 5 for layout, grid systems, and pre-built components. Do not reinvent layout or grid systems with custom CSS where Bootstrap provides a solution.
*   **Font Awesome:** Include Font Awesome for all icons to enhance UI clarity.

## Coding Style

*   Code must be clean, modular, and well-commented.
*   Prioritize Bootstrap classes for layout and components.
*   Always ensure accessibility (semantic HTML, alt text, aria-labels).
*   All pages should be fully responsive and compatible with modern browsers.
*   Optimize for clarity, maintainability, and cross-browser support.

## Forbidden Technologies

*   React, Vue, Angular, or any other frontend JavaScript framework.
*   Node.js or any other backend framework besides PHP.
*   Tailwind CSS or any other utility-first CSS framework.
*   TypeScript or JSX.
*   Any build tools like Vite, Webpack, etc. (stick to direct HTML/CSS/JS/PHP).

## General Behavior

*   Explain design choices briefly if asked.
*   Never suggest or use forbidden technologies. Stick strictly to the allowed stack.