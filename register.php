<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Apps</title>

    <!--  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <style>
        html,
        body {
            height: 100vh;
        }

        .card {
            width: 450px;
            height: 100%;
        }
    </style>

</head>

<body class="d-flex">

    <main class="m-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">username</label>
                                    <input type="text" name="username" id="" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password" id="" class="form-control" required>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit" name="submit">Sing In</button>

                                    <div class="d-block text-center mt-2">
                                        <small class="text-muted">already for sing In please <span><a href="index.php">Sing Up</a></span></small>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>