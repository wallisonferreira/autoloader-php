<?php

use app\library\File_Writer;

require '../vendor/autoload.php';

$fileWriter = new File_Writer();
echo $fileWriter->log();
echo $fileWriter->teste();

//$fileWriter->create();
