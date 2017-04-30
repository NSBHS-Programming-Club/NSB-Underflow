<?php
// File that describes db clients ==============================================================================================================================================================

class underflowDBClient{
    private $host = NULL;
    private $user = NULL;
    private $password = NULL;
    private $dataBase = NULL;

    public function __construct($details){
        $this->host = $details['host'];
        $this->user = $details['user'];
        $this->password = $details['password'];
        $this->$dataBase = $details['DB'];

        mysql_connect($this->host, $this->user, $this->password);
        mysql_select_db($this->$dataBase);
    }

    protected function sendQuery($query){
        return mysql_query($query);
    }

    protected function setter($setter, $value){
        try{
            $this->setter = $value;
        }catch(Exception $e){
            throw new InvalidArgumentException("Invalid Setter");
        }
    }

    protected function getter($getter){
          try{
            return $this->setter = $value;
        }catch(Exception $e){
            throw new InvalidArgumentException("Invalid Setter");
        }
    }
}

?>