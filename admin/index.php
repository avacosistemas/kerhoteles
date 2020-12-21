<!DOCTYPE html>
<html class="bootstrap-admin-vertical-centered">
    <head>
        <title>kerhistoric</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="https://kerhistoric.com.ar/favicon.png">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

        <!-- Bootstrap Admin Theme -->
        <link href="css/bootstrap-admin-theme.css" rel="stylesheet" media="screen">

        <!-- Custom styles -->
        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-without-padding"  onload="document.formlog.user.focus();">
        <div class="container">
            <div class="row">
            <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-info">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    Usuario/Password incorrectos
                </div>
            <?php } ?>    
                <form method="post" name="formlog" action="log.php" class="bootstrap-admin-login-form">
                    <h1>Login</h1>
                    <div class="form-group">
                        <input class="form-control" type="text" name="user" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                       <!-- <label>
                            <input type="checkbox" name="remember_me">
                            Remember me
                        </label>-->
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
                </form>
            </div>
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
                // Setting focus
                $('input[name="email"]').focus();

                // Setting width of the alert box
                var formWidth = $('.bootstrap-admin-login-form').innerWidth();
                var alertPadding = parseInt($('.alert').css('padding'));
                $('.alert').width(formWidth - 2 * alertPadding);
            });
        </script>
        <link rel="stylesheet" href="responsive-sidebar-navigation-master/css/style.css"> <!-- Resource style -->
    </body>
</html>
