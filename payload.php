<?php

// Use ls command with shell_exec function
$output = shell_exec('id');

// Display the list of all files and directories
echo "<pre>$output</pre>";

?>
