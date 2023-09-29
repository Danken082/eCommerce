<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-5">
                    <h2>Log in</h2>
                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg')?>
                        </div>
                        <?php endif;?>
                        <form action="" method="post">
                            <div class ="form-group mb-3">
                                <input type="email" name ="username" placeholder="email" class = "form-control">
                            </div>
                            <div class ="form-group mb-3">
                                <input type="password" name ="password" placeholder="password" class = "form-control">
                            </div>
                            <div class="d-grid">
                                <button type = "submit" class ="btn btn-success">SignIn</button>
                            </div>
                        </form>
                        <div class="d-grid">
                           <p>don't have an account? <a href="/signup">Create New One</a></p>
                        </div>
                </div>
            </div>
        </div>
</body>
</html>