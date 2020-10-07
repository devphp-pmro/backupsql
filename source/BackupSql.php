<?php

namespace Source;
use Phelium\Component\MySQLBackup;

require_once __DIR__."/bd.php";


class BackupSql
{
    private $backup = \stdClass::class;
    private $tables;
    
    
    /**
     * BackupSql constructor.
     * @param      $fileName
     * @param      $download
     * @param null $compress zip | gz | gzip (optional)
     * @param null $deleteFile
     */
    function __construct($fileName,$download = null,$compress = null,$deleteFile = null)
    {
        $this->backup = new MySQLBackup(CONFIG['host'], CONFIG['user'], CONFIG['password'], CONFIG['data_base'], CONFIG['port']);
        $this->backup->setCompress($compress);
        $this->backup->setDownload($download);
        $this->backup->setFilename($fileName);
        $this->backup->setDelete($deleteFile);
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
        return $this->$name;
        // TODO: Implement __get() method.
    }
}
