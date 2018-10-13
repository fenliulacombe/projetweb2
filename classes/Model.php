<?php

abstract class Model
{
    protected $dbh;
    protected $stmt;

    public function __construct()
    {
        try
        {
            $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD);
        }
        catch (PDOException $e)
        {
            print $e->getMessage()."<br/>";
            die();
        }
        $this->dbh->query('SET NAMES UTF8');
    }

    public function changeDatabase($dbname, $dbuser=null, $dbpass=null)
    {
        if(!is_null($this->stmt))
        {
            $this->close();
        }
        $this->dbh = null;
        $user = is_null($dbuser) ? DB_USER : $dbuser;
        $pass = is_null($dbuser) ? DB_PWD : $dbpass;
        try
        {
            $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".$dbname, $user, $pass);
        }
        catch (PDOException $e)
        {
            print $e->getMessage()."<br/>";
            die();
        }
        $this->dbh->query('SET NAMES UTF8');
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type))
        {
            switch(true)
            {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lastIndexId()
    {
        return $this->dbh->lastInsertId();
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function startTransaction()
    {
        $this->dbh->beginTransaction();
    }
    public function rollBack()
    {
        $this->dbh->rollBack();
    }
    public function commit()
    {
        $this->dbh->commit();
    }
    public function close()
    {
        $this->stmt->closeCursor();
        $this->dbh = null;
    }

    protected function returnToPage($path)
    {
        header('Location: '.ROOT_MNGT.$path);
    }
}
?>