<?php include "header.php" ?>
<div class="container my-5">
    <div class="row">
        <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h1>Signin Page</h1>
                </div>
                <form action="" id="login-form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Enter Email</label>
                            <input type="text" name="email" id="email" placeholder="Email" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="card-footer bg-dark text-white d-flex justify-content-between">
                        <button id="signin" class="btn btn-success">Login</button>
                        <a class="nav-link" href="register.php">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>