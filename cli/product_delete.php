<?php declare(strict_types=1);

use App\Storage\Writer;

(new Writer())->delete($argv[1]);
(new Writer())->create($argv[1], "Product deleted: $argv[1]");