# Ayonion Studios - Modular PHP Structure

## Overview

The website has been refactored into a modular, maintainable PHP structure with enhanced animations and smooth scrolling functionality.

## Project Structure

```
ayonion/
├── index.php                 # Main entry point
├── config.php               # Configuration, form handler, and data arrays
├── includes/
│   ├── head.php            # Head section with styles and scripts
│   ├── navbar.php          # Navigation header
│   └── footer.php          # Footer component
├── sections/
│   ├── hero.php            # Hero section with animations
│   ├── services.php        # Services showcase
│   ├── blog.php            # Blog section
│   └── contact.php         # Contact form section
├── assets/
│   └── animations.css      # Additional CSS animations
├── image/
│   └── ayonionlogo.png     # Logo (used in navbar and footer)
└── index_old.php           # Backup of original single-file version
```

## Features

### 1. Modular Architecture

- **config.php**: Centralized configuration and form handling logic
- **includes/**: Reusable components (head, navbar, footer)
- **sections/**: Individual page sections for better organization

### 2. Enhanced Animations

All animations are smooth and optimized with:

- **Fade In (Up/Down)**: Elements smoothly fade in from top or bottom
- **Slide In (Left/Right)**: Directional slide animations
- **Scale In**: Bounce-in style scaling animations
- **Smooth Scroll**: HTML smooth scroll behavior throughout
- **Hover Effects**: Interactive transitions on buttons and links

### 3. Animation Utilities

The `assets/animations.css` file provides:

- `animate-fade-in-up`: Fade in from below
- `animate-fade-in-down`: Fade in from above
- `animate-slide-in-left`: Slide in from left
- `animate-slide-in-right`: Slide in from right
- `animate-bounce-in`: Bouncy entrance animation
- `animate-float`: Gentle floating motion
- Staggered delays (`.delay-100` to `.delay-500`)

### 4. Improved User Experience

- **Smooth Scrolling**: All anchor links use smooth scroll behavior
- **Interactive Feedback**: Buttons and links have hover animations
- **Loading States**: Smooth transitions and visual feedback
- **Mobile Responsive**: Full mobile support with animated menu
- **Performance**: CSS animations instead of JavaScript for better performance

## Usage

### Including Sections

To add more sections, create a file in `sections/` and include it in `index.php`:

```php
<?php include 'sections/your-section.php'; ?>
```

### Adding Animations

Apply animation classes to elements:

```html
<div class="animate-fade-in-up" style="animation-delay: 0.2s">Content here</div>
```

Available delays: `delay-100`, `delay-200`, `delay-300`, `delay-400`, `delay-500`

### Form Handling

Contact form submissions are handled in `config.php`. Update the email recipient:

```php
$recipient = "your-email@domain.com"; // Line 23 in config.php
```

## Customization

### Tailwind Colors

Theme colors are defined in `includes/head.php`:

```javascript
colors: {
    brand: {
        primary: '#ffffff',
        secondary: '#BDDFE8',
        tertiary: '#618698',
        accent: '#2E404C',
        deep: '#052C47',
        dark: '#1A364A',
        darkest: '#030B0D'
    }
}
```

### Animation Speed

Modify animation durations in `assets/animations.css`:

```css
animation: fadeInUp 0.8s ease-out forwards; /* Change 0.8s */
```

## Data Management

All static data (services, testimonials, blog posts, etc.) is stored in `config.php`:

- `$services_data` - Services list
- `$testimonials` - Client testimonials
- `$posts` - Blog posts
- `$work` - Case studies
- `$capabilities` - Company capabilities

## Migration from Old Version

The original single-file `index.php` is backed up as `index_old.php`. Both versions function identically; the new modular version is easier to maintain and extend. Old version is kept for reference and rollback if needed.

## Performance Tips

1. **Lazy Load Images**: Add loading="lazy" to img tags
2. **Optimize Videos**: Use compressed versions for production
3. **Cache**: Enable browser caching for static assets
4. **Minify**: Minify CSS and JavaScript in production

## Support

For animation issues or customization requests, refer to:

- Tailwind CSS Docs: https://tailwindcss.com
- Alpine.js Docs: https://alpinejs.dev
- Lucide Icons: https://lucide.dev
