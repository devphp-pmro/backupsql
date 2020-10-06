<?php

use Source\BackupSql;

require_once __DIR__."/../ext_lib/autoload.php";

$fileName = 'backup'.date('Y-m-d'); //define a file name
$bk = new BackupSql($fileName); // new instance

$bk->createAllTables(); //insert the table numbers to be backed up