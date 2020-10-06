<?php

namespace Source;
use Phelium\Component\MySQLBackup;

require_once __DIR__."/bd.php";


class BackupSql
{
    private $backup = \stdClass::class;
    private $tables;

    function __construct($fileName,$compress = null,$download = null)
    {
        $this->backup = new MySQLBackup(CONFIG['host'], CONFIG['user'], CONFIG['password'], CONFIG['data_base'], CONFIG['port']);
        $this->backup->setCompress($compress);
        $this->backup->setDownload($download);
        $this->backup->setFilename($fileName);

    }

    public function createSelectTables($tables)
    {

        $this->tables = array();
        $this->backup->addTables($tables);
        $this->backup->dump();

    }

    public function createAllTables()
    {
        $this->backup->addAllTables();
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
