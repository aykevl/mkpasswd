<?php
header('Content-type: text/cache-manifest');
echo "CACHE MANIFEST\n";

$dir = '.';

$hashes = '';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
foreach($iterator as $file) {
    if ($file->IsFile() &&
        $file != './cache-manifest.php' &&
        substr($file->getFilename(), 0, 1) != '.')
    {
        echo $file . "\n";
        $hashes .= md5_file($file);
    }
}
echo '# Hash: '.md5($hashes) . "\n";


?>
