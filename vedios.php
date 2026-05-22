<?php
/**
 * Ayonion Studios - Videos Page
 */

// Include the header
include 'includes/head.php';

// Include the navbar
include 'includes/navbar.php';
?>
<main class="pt-28 lg:pt-20 bg-white">
    <!-- Videos section -->
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold text-center mb-12">Our Videos</h1>
        
        <!-- Video Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $video_dir = '"C:\xampp\htdocs\ayonion\assets\vedios\1"';
            // Get all mp4 files from the directory
            $videos = glob($video_dir . '*.{mp4,webm,ogg}', GLOB_BRACE);
            
            if (empty($videos)) {
                echo '<div class="col-span-full text-center text-gray-500 py-8">No videos found. Please add videos to the assets/vedios folder.</div>';
            } else {
                foreach ($videos as $index => $video) {
                    $filename = basename($video);
                    $title = pathinfo($filename, PATHINFO_FILENAME);
                    // Make title look nicer (e.g., replace dashes/underscores with spaces)
                    $display_title = ucwords(str_replace(['-', '_'], ' ', $title));
                    ?>
                    <!-- Video Item -->
                    <div class="bg-gray-100 rounded-xl overflow-hidden shadow-md transition duration-300 hover:shadow-xl">
                        <video class="w-full aspect-video object-cover" controls>
                            <source src="<?php echo htmlspecialchars($video); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="p-5">
                            <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($display_title); ?></h3>
                            <p class="text-gray-600">Video file: <?php echo htmlspecialchars($filename); ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</main>
<?php
// Include the footer
include 'includes/footer.php';
?>
