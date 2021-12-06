<div class="card shadow-lg mb-3">
    <div class="card-header">
        <h3 class="text-center text-dark">New York</h3>
        <h5 class="text-center">1</h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-4">
                <div class="p-2 bg-white rounded shadow-sm mb-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item py-2">WS Domain : internet-vip.cf
                            <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i>
                        </li>
                        <li class="list-group-item py-2">Port: TLS 443, HTTP 80 <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i></li>
                        <li class="list-group-item py-2">Port SSH: 22
                            <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i>
                        </li>
                        <li class="list-group-item py-2">Limit Acc: 100</li>
                        <li class="list-group-item py-2">Active: 3 Dias</li>
                        <li class="list-group-item py-2">Port UDP: 7400
                            <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-2 bg-white rounded shadow-sm mb-2">
                    <div class="textad"></div>
                    <form action="#" method="post" id="login-ssh">

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">Hive VPN</span>
                                <input type="text" class="form-control" name="user" id="username" placeholder="username" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">Hive VPN</span>
                                <input type="text" class="form-control" name="passwd" id="password" placeholder="clave" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="hostname" class="form-label">Domain: </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hostname" value="0" checked="">
                                <label class="form-check-label" for="openv2ray.com">internet-vip.cf <span class="badge bg-success">Valid SSL</span></label>
                            </div>
                        </div>
                        <?php if(isset($_SESSION['auth'])): ?>
                            <button type="submit" class="btn btn-primary btn-sm w-100 subb">Create</button>
                        <?php else: ?>
                            <a href="?content=login" class="btn btn-primary btn-sm w-100 subb">Acceder</a>
                        <?php endif ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-lg mb-3">
    <div class="card-header">
        <h3 class="text-center text-dark">New York 31 días Premium</h3>
        <h5 class="text-center">1</h5>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-4">
                <div class="p-2 bg-white rounded shadow-sm mb-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item py-2">WS Domain : internet-vip.cf
                            <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i>
                        </li>
                        <li class="list-group-item py-2">Port: TLS 443, HTTP 80 <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i></li>
                        <li class="list-group-item py-2">Port SSH: 22
                            <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i>
                        </li>
                        <li class="list-group-item py-2">Limit Acc: limitado a 50</li>
                        <li class="list-group-item py-2">Active: 31 Dias</li>
                        <li class="list-group-item py-2">Port UDP: 7400
                            <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-2 bg-white rounded shadow-sm mb-2">
                    <div class="textad"></div>
                    <form action="./premium/pago.php" method="post">

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">Hive VPN</span>
                                <input type="text" class="form-control" name="user" id="username" placeholder="username" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">Hive VPN</span>
                                <input type="text" class="form-control" name="passwd" id="password" placeholder="clave" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="hostname" class="form-label">Domain: </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hostname" value="0" checked="">
                                <label class="form-check-label" for="openv2ray.com">internet-vip.cf <span class="badge bg-success">Valid SSL</span></label>
                            </div>
                        </div>
                        <?php if(isset($_SESSION['auth'])): ?>
                            <button type="submit" class="btn btn-primary btn-sm w-100 subb">Crear cuenta</button>
                        <?php else: ?>
                            <a href="?content=login" class="btn btn-primary btn-sm w-100 subb">Comprar</a>
                        <?php endif ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>