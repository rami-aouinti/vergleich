<?php declare(strict_types=1);

use App\Storage\Reader;

$fileList = glob('../storage/*');

foreach($fileList as $filename){
    echo $filename;
    $reader = new Reader();
    if(is_file($filename)){
       echo $reader->read($filename);
    }
}
