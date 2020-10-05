<?php

use Source\BackupSql;

require_once __DIR__."/../ext_lib/autoload.php";

$bk = new BackupSql(); // new instance
$fileName = 'backup'.date('d-m-Y'); //define a file name
$bk->createAllTables($fileName); //insert the table numbers to be backed up