<?php

require '../vendor/autoload.php';

use Acme\Log\Writer\File_Writer;

$fileWriter = new File_Writer();
echo $fileWriter->log();
