<?php

#apt install php7.4-ssh2
#apt install php-ssh2-all-dev

class Websocket{
    private $user;
    private $passwd;
    private $date;
    public function __construct($user,$passwd,$date)
    {
        $this->user = $user;
        $this->passwd = $passwd;
        $this->date = $date;
    }

    public function create(){
        if (!function_exists('ssh2_connect')) { die('No existe la funcion ssh2_connect.'); }
     
     //$con = ssh2_connect("143.198.170.229",22);
     
     if (!($connection = ssh2_connect('143.198.170.229', 22))) { die('No se puede conectar con el servidor VPS.'); }
     
     if (!ssh2_auth_password($connection, 'root', 'vps_2021')) { die('No se puede autenticar con el usuario y clave suministrados.'); }
     $comand = 'useradd -e '.$this->date.' -p "$(mkpasswd --method=sha-512 '.$this->passwd.')" '.$this->user;
     if (!($exec = ssh2_exec($connection, $comand))) {
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
}
?>