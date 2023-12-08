<?php
// File to store the visit count
$counter_file = 'visit_count.txt';

// Check if the counter file exists
if (file_exists($counter_file)) {
    // Read the current count from the file
    $count = file_get_contents($counter_file);
    // Increment the count
    $count = intval($count) + 1;
} else {
    // If the counter file doesn't exist, create it and set count to 1
    $count = 1;
}

// Update the count in the file
file_put_contents($counter_file, $count);

// Output the count (for AJAX request)
echo $count;
?>
