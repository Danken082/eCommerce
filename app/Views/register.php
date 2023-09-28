<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>
                <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors()?>
                    </div>
                    <?php endif;?>
                    <form action="/register" method = "post">
                        <div class="form-group mb-3">
                            <input type="text" name ="name" placeholder ="name"  class = "form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name ="username" placeholder ="email" class = "form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name ="password" placeholder ="password" class = "form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name ="confirmpassword" placeholder ="confirm password" class = "form-control">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">SignUp</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>