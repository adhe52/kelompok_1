<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/jpg" href="assetss/img/merbabu.jpg">
    <link href="assetss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assetss/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .img-logo {

            margin-bottom: 20px;
        }
    </style>

</head>

<body background="assetss/img/hutan.jpg" style="height : 100%">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <img src="assetss/img/merbabu.jpg" alt="logo merbabu" class="img-logo">
                                                    <h1 class="h4 text-gray-900">Dashboard Operational</h1>
                                                    <h1 class="h4 text-gray-900 mb-4"><b>Taman Nasional Gunung Merbabu</b></h1>
                                                </div>

                                                <form method="POST">
                                                    <div class="form-group">
                                                        <label for="inputEmailAddress" class="small mb-1"></label>
                                                        <input type="text" name="email" id="email" placeholder="Enter email address" class="form-control py-4" autocomplete="off" value="<?= set_value('email'); ?>">
                                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="small mb-1"></label>
                                                        <input type="password" name="password" id="password" placeholder="Enter password" class="form-control py-4" autocomplete="off">
                                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                        <button type="submit" class="btn btn-success w-100" name="login">Login</button>
                                                    </div>
                                                    <br>
                                                    <a href="<?php echo base_url('web'); ?>" class="btn btn-danger w-100">Kembali</a>
                                                </form>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>
</body>

</html>