<?php
header('Content-type: text/cache-manifest');
echo "CACHE MANIFEST\n";

$dir = '.';

$hashes = '';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
foreach($iterator as $file) {
    if (!$file->IsFile() ||
        $file == './cache-manifest.php' ||
        strpos($file, '/.') !== false)
            continue;

    echo $file . "\n";
    $hashes .= md5_file($file);
}
// to reload the whole app when something has changed
echo "\n# Hash: ".md5($hashes) . "\n";


?>
