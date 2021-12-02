<div class="alert alert-warning alert-dismissible fade show" role="alert">
               <p>GET shi://host.com HTTP/1.1
                    Host: internet-vip.cf
                    Upgrade: websocket[crlf][crlf]</p>
               <?php if (isset($user) && isset($passwd) && isset($date)) {
                    echo "<p>Usuario: $user</p>";
                    echo "<p>Clave: $passwd</p>";
                    echo "<p>fecha de expiración: $date</p>";
               } ?>

          </div>