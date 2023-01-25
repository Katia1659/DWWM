<?php
require_once '..\modele\function.php';
$filePath = './save/Backup.json';
$filePath = extractJsonToCsv($filePath);

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: utf-8");
header("Content-disposition: attachment; filename=\"" . basename($filePath) . "\"");
readfile($filePath);


