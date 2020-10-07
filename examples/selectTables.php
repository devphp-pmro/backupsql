<?php

use Source\BackupSql;

require_once __DIR__."/../ext_lib/autoload.php";

$fileName = 'backup'.date('Y-m-d'); //define a file name
$bk = new BackupSql($fileName,true,false,true); // new instance
$bk->createSelectTables(["table1","table2"]); //insert the table numbers to be backed up