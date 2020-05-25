<?php

class DBController
{
  protected $host = '127.0.0.1';
  protected $user = 'root';
  protected $password = '';
  protected $db_name = 'shopee';

  public $con = null;

  public function __construct()
  {
    $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
    if(mysqli_connect_errno()){
      echo 'Fail'.$this->con->connect_error;
    }
  }
}
