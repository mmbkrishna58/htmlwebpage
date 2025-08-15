<?php
// Display the current date and time
date_default_timezone_set('Asia/Kolkata');

// Simple HTML output
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Welcome to FooCourt</title>";
echo "<style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; padding: 50px; }
    h1 { color: #333; }
    p { color: #555; }
</style>";
echo "</head>";
echo "<body>";
echo "<h1>Welcome to FooCourt</h1>";
echo "<p>This is a sample PHP site running on Azure App Service.</p>";
echo "<p>Current Date & Time: " . date("Y-m-d H:i:s") . "</p>";
echo "</body>";
echo "</html>";
?>
