<?php declare(strict_types=1);

use App\Storage\Writer;
use App\Storage\Reader;

$actualProduct = (new Reader())->read($argv[1]);
$fields = explode(" ", $actualProduct);

if (strcmp($argv[3], $fields[count($fields)-1]) !== 0) {
    (new Writer())->update($argv[1], "Product updated: $argv[2]");
}
else {
    (new Writer())->update($argv[1], "Product updated: $argv[3]");
}

