<?php include '../../assets/konektor.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin - RS UIN Sunan Gunung Djati Bandung</title>
    <?php include '../../assets/cdn.php' ?>
</head>

<body>

    <?php include '../assets/navlogin.php' ?>

    <div class="container mt-4">
        <center>
            <h3>Login Admin</h3>
        </center>
        <Center>
            <p>Silahkan masukan email dan password</p>
            <hr>
        </Center>
        <p>
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <form method="post" action="cekLogin.php">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input class="form-control" required type="text" name="email" placeholder="Masukkan Email">
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                        </div>
                        <input class="form-control" required type="password" name="password" placeholder="Masukkan Password">
                    </div>
                    <br>
                    <input class="btn btn-success" type="submit" value="Login"></td>
                </form>
            </div>
        </div>
        </p>

    </div>



</body>

</html>