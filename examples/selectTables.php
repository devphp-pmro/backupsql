<?php

use Source\BackupSql;

require_once __DIR__."/../ext_lib/autoload.php";

$fileName = 'backup'.date('Y-m-d'); //define a file name
$bk = new BackupSql($fileName); // new instance
$bk->createSelectTables(["tbexpositor_feiras","tbcadgeral_feiras"]); //insert the table numbers to be backed up
// compress = zip | gz | gzip