<?php
/**
 * Ayonion Studios - Blog Page
 */

// Include the header
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';

// Include the blog section (wrapped in a div for top padding since it's a standalone page)
?>
<main class="pt-28 lg:pt-20 bg-white">
<?php
include 'sections/blog.php';
?>
</main>
<?php
// Include the footer
include 'includes/footer.php';
?>
