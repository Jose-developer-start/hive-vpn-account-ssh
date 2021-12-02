<?php
#apt install php7.4-ssh2
#apt install php-ssh2-all-dev
include_once "./conn_ssh2.php";

class Websocket extends SSH2{
    private $user;
    private $passwd;
    private $date;
    private $connection;
    public function __construct($user,$passwd,$date)
    {
        $this->connection = parent::__construct();
        $this->user = $user;
        $this->passwd = $passwd;
        $this->date = $date;
    }

    public function create(){
        //Verificar usuario
     /*
     grep $user /etc/passwd
     if(!){

    }*/
        $comand = 'useradd -e '.$this->date.' -p "$(mkpasswd --method=sha-512 '.$this->passwd.')" '.$this->user;
        
        if (!($exec = ssh2_exec($this->connection, $comand))) {
        die('No se pudo ejecutar el comando.'); 
        } else { 
            stream_set_blocking($exec, true); 
            $data = ''; 
            while ($fread = fread($exec, 1048576)) {
                $data .= $fread; 
            }
            return $data;
            fclose($exec); 
        }
    }
    public function verify_user(){

    }   
}
?>