<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/mindblow/path.php');
include_once(CONTROLLER_PATH . 'usuario_Controller.php');
include_once(VIEW_PATH . 'includes/dashboard_Head.php');
?>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form $estado action="" method="POST">
                        <h1>INICIE SESION</h1>
                        <div>
                            <label for="email_Usuario">Correo Electronico:</label>
                            <input type="email" class="form-control" placeholder="Ingrese su Correo Electronico" id="email_Usuario" name="email_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="password_Usuario" required="" />
                        </div>
                        <div>
                            <input type="submit" name="login" class="btn btn-primary" value="Iniciar Sesion">
                            <a class="reset_pass" href="#">Olvido su Contraseña?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />
                        </div>
                        <?php 
                        $login = new usuario_Controller();
                        $login -> sesion();
                        ?>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <?php include_once(VIEW_PATH . 'includes/dashboard_Footer.php'); ?>