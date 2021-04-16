<?php

//Class for handle MySQL connection and DB interactions
class mySQL
{

    public $dbh; //Public variable - stores connection

    //Executes DB connection
    public function connect()
    {
        //Connection parameters
        $this->host = '127.0.0.1';
        $this->username = 'root'; //Default username is 'root'
        $this->password = ''; //Default password is blank
        $this->database = 'week12';

        //Object receives connection parameters
        $this->dbh = new mysqli($this->host, $this->username, $this->password, $this->database)or die("cannot connect"); 

    }

     //Returns result of a given query
    public function query($sql)
    {
        return $this->dbh->query($sql);  //Specify connection handler when doing query
    }    
}