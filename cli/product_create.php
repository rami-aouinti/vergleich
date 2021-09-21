<?php declare(strict_types=1);

use App\Storage\Writer;

(new Writer())->create($argv[1], "Product created: $argv[1] $argv[2] $argv[3]");