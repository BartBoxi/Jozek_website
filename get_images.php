<?php
header('Content-Type: application/json');

$image_dir = '/Users/bartoszpudlo/Documents/Jozek_website/zdjecia/'; // Path to your images folder relative to this script
$images = [];

// Get all files from the directory
$files = scandir($image_dir);

foreach ($files as $file) {
    // Only include actual image files (you might want to add more extensions)
    if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        $images[] = $image_dir . $file;
    }
}

echo json_encode($images);
?>