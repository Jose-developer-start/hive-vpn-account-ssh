<?php
    class SSH2{
        public function __construct()
        {
            if (!function_exists('ssh2_connect')) {
                die('No existe la funcion ssh2_connect.'); 
            }
            //$con = ssh2_connect("143.198.170.229",22);
     
            if (!($connection = ssh2_connect('143.198.170.229', 22))) {
                die('No se puede conectar con el servidor VPS.'); 
            }
            
            if (!ssh2_auth_password($connection, 'root', 'vps_2021')) {
                die('No se puede autenticar con el usuario y clave suministrados.'); 
            }
            return $connection;
        }
    }