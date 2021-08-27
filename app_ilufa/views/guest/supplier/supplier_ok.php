<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>iLuFA | Registrasi Suplier Sukses</title>
    <link rel="icon" type="image/png" href="<?php echo GUEST ?>img/favicons.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">

    <link href="<?php echo BACK ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BACK ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BACK ?>assets/css/pages/privacy/privacy.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="headerWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center mb-5">
                    <a href="<?php echo base_url() ?>" class="">
                        <img src="<?php echo GUEST ?>img/logo_ilufa.png" class="img-fluid" width="300" alt="logo">
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2 class="main-heading">REGISTRASI BERHASIL</h2>
                    <h2 class="main-heading">TERIMA KASIH</h2>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo BACK ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo BACK ?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo BACK ?>bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).on('click', '.arrow', function(event) {
            event.preventDefault();
            var body = $("html, body");
            body.stop().animate({
                scrollTop: 0
            }, 500, 'swing');
        });
    </script>

</body>

</html>