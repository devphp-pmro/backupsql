# BackupBd library backup using MySQLBackup



To install the library, run the following command:

``` sh
composer require devphp-pmro/backupsql
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh

<? php
//define the connection settings to the database for backup

file bd.php

define("CONFIG",["host" => "host,
                "user" => "user",
                "password" => "password",
                "data_base" => "data_base",
                "port"=> "port"]);



require __DIR__. '/ext_lib/autoload.php';

use Source\BackupSql;

$bk = new BackupSql(); // new instance

$fileName = 'backup'.date('d-m-Y'); //define a file name

$bk->createSelectTables(["table_name","table_name1"],$fileName,"zip"); //insert the table numbers to be backed up

// compress = zip | gz | gzip

$bk = new BackupSql(); // new instance

$fileName = 'backup'.date('d-m-Y'); //define a file name

$bk->createAllTables($fileName,"zip"); //insert the table numbers to be backed up

// compress = zip | gz | gzip

```

Note that the entire configuration of sending the email is using the magic method builder! Once the builder method has been invoked within your application, your system will be able to take the shots.

### Developers
* [Leonardo] - Developer of this library!
* [devphp] - Official website: <https://devphp-pmro.github.io/>
* [MySQLBackup] - Lib to backup mysql

License
----

MIT

