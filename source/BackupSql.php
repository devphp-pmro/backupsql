<?php

namespace Source;
use Phelium\Component\MySQLBackup;

require_once __DIR__."/../ext_lib/autoload.php";


class BackupSql
{
    private $backup = \stdClass::class;
    private $tables;

    function __construct()
    {
        $this->backup = new MySQLBackup(CONFIG['host'], CONFIG['user'], CONFIG['password'], CONFIG['data_base'], CONFIG['port']);

    }

    public function createSelectTables($tables,$fileName,$compress)
    {
        $this->tables = array();
        $this->backup->addTables($tables);
        $this->backup->setFilename($fileName);
        $this->backup->setDownload(true);
        $this->backup->setCompress($compress);
        $this->backup->dump();

    }

    public function createAllTables($fileName,$compress)
    {
        $this->backup->addAllTables();
        $this->backup->setFilename($fileName);
        $this->backup->setDownload(true);
        $this->backup->setCompress($compress);
        $this->backup->dump();
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
    }
}
