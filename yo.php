<?php
try {
    include_once 'zip://yo.zip#eval.php';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
