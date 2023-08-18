<?php
// Function to increment the visitor count
function incrementVisitorCount() {
 $countFile = 'visitor_count.txt';
 if (file_exists($countFile)) {
 // Read the current count from the file
 $count = file_get_contents($countFile);
 $count = intval($count); // Convert to integer
 $count++; // Increment the count
 } else {
 // File doesn't exist, start count from 1
 $count = 1;
 }
 // Save the updated count to the file
 file_put_contents($countFile, $count);
}
// Call the function to increment the count
incrementVisitorCount();
// Function to get the visitor count
function getVisitorCount() {
 $countFile = 'visitor_count.txt';
 if (file_exists($countFile)) {
 // Read the count from the file
 $count = file_get_contents($countFile);
 return intval($count); // Convert to integer and return
 }
 return 0; // If the file doesn't exist, return 0
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Visitor Count Example</title>
</head>
<body>
 <h1>Welcome to My Web Page</h1>
 <h2>Visitor Count</h2>
 <p>Number of visitors: <?php echo getVisitorCount(); ?></p>
</body>
</html>