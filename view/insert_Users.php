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
                    <form action="" method="POST">
                        <h1>CREAR USUARIO</h1>
                        <div>
                            <label for="email_Usuario">Nombres:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Correo Electronico" id="email_Usuario" name="nombres_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Apellidos:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="apellidos_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Email:</label>
                            <input type="mail" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="email_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="password_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Telefono:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="telefono_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Direccion:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="direccion_Usuario" required="" />
                        </div>
                        <div>
                            <input type="submit" name="insert" class="btn btn-primary" value="Iniciar Sesion">
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
                        $insert_User = new usuario_Controller();
                        $insert_User -> insert_User();
                        ?>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <?php include_once(VIEW_PATH . 'includes/dashboard_Footer.php'); ?>