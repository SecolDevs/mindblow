<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/mindblow/path.php');
include_once(CONTROLLER_PATH . 'usuario_Controller.php');
include_once(VIEW_PATH . 'includes/dashboard_Head.php');

$insert_User = new usuario_Controller();
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
                            <label for="nombres_Usuario">Nombres:</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Nombres" id="nombres_Usuario" name="nombres_Usuario" required="" />
                        </div>
                        <div>
                            <label for="apellidos_Usuario">Apellidos:</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Apellidos" id="apellidos_Usuario" name="apellidos_Usuario" required="" />
                        </div>
                        <div>
                            <label for="email_Usuario">Email:</label>
                            <input type="mail" class="form-control" placeholder="Ingrese su Email" id="email_Usuario" name="email_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="password_Usuario" required="" />
                        </div>
                        <div>
                            <label for="telefono_Usuario">Telefono:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Telefono" id="telefono_Usuario" name="telefono_Usuario" required="" />
                        </div>
                        <div>
                            <label for="direccion_Usuario">Direccion:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Direccion" id="direccion_Usuario" name="direccion_Usuario" required="" />
                        </div>
                        <div>
                            <input type="submit" name="usuario" class="btn btn-primary" value="Crear Cuenta">
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
                        $insert_User -> insert_User();
                        ?>
                    </form>

                    <!-- CREAR REPARTIDOR -->
                    <form action="" method="POST">
                        <h1>CREAR REPARTIDOR</h1>
                        <div>
                            <label for="nombres_Usuario">Nombres:</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Nombres" id="nombres_Usuario" name="nombres_Usuario" required="" />
                        </div>
                        <div>
                            <label for="apellidos_Usuario">Apellidos:</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Apellidos" id="apellidos_Usuario" name="apellidos_Usuario" required="" />
                        </div>
                        <div>
                            <label for="email_Usuario">Email:</label>
                            <input type="mail" class="form-control" placeholder="Ingrese su Email" id="email_Usuario" name="email_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="password_Usuario" required="" />
                        </div>
                        <div>
                            <label for="rut_Usuario">RUT:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su RUT" id="rut_Usuario" name="rut_Usuario" required="" />
                        </div>
                        <div>
                            <label for="telefono_Usuario">Telefono:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Telefono" id="telefono_Usuario" name="telefono_Usuario" required="" />
                        </div>
                        <div>
                            <label for="direccion_Usuario">Direccion:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Direccion" id="direccion_Usuario" name="direccion_Usuario" required="" />
                        </div>
                        <div>
                            <input type="submit" name="repartidor" class="btn btn-primary" value="Crear Solicitud">
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
                        $insert_User -> insert_Repartidor();
                        ?>
                    </form>

                    <!-- CREAR REPARTIDOR -->
                    <form action="" method="POST">
                        <h1>CREAR EMPRESA</h1>
                        <div>
                            <label for="empresa_Usuario">Nombre de Empresa:</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre de su empresa" id="empresa_Usuario" name="empresa_Usuario" required="" />
                        </div>
                        <div>
                            <label for="nombres_Usuario">Nombres:</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Nombres" id="nombres_Usuario" name="nombres_Usuario" required="" />
                        </div>
                        <div>
                            <label for="apellidos_Usuario">Apellidos:</label>
                            <input type="text" class="form-control" placeholder="Ingrese sus Apellidos" id="apellidos_Usuario" name="apellidos_Usuario" required="" />
                        </div>
                        <div>
                            <label for="email_Usuario">Email:</label>
                            <input type="mail" class="form-control" placeholder="Ingrese su Email" id="email_Usuario" name="email_Usuario" required="" />
                        </div>
                        <div>
                            <label for="password_Usuario">Contraseña:</label>
                            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="password_Usuario" name="password_Usuario" required="" />
                        </div>
                        <div>
                            <label for="nit_Usuario">NIT:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su NIT" id="nit_Usuario" name="nit_Usuario" required="" />
                        </div>
                        <div>
                            <label for="telefono_Usuario">Telefono:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Telefono" id="telefono_Usuario" name="telefono_Usuario" required="" />
                        </div>
                        <div>
                            <label for="direccion_Usuario">Direccion:</label>
                            <input type="text" class="form-control" placeholder="Ingrese su Direccion" id="direccion_Usuario" name="direccion_Usuario" required="" />
                        </div>
                        <div>
                            <label for="img_Usuario">Imagen de Empresa:</label>
                            <input type="file" class="form-control" placeholder="Ingrese imagen de su empresa" id="img_Usuario" name="img_Usuario" required="" />
                        </div>
                        <div>
                            <label for="hora_Apertura">Hora de Apertura:</label>
                            <input type="text" class="form-control" placeholder="Ingrese la hora de Apertura de su empresa" id="hora_Apertura" name="hora_Apertura" required="" />
                        </div>
                        <div>
                            <label for="hora_Cierre">Hora de Cierre:</label>
                            <input type="text" class="form-control" placeholder="Ingrese la hora de Cierre de su empresa" id="hora_Cierre" name="hora_Cierre" required="" />
                        </div>
                        <div>
                            <input type="submit" name="empresa" class="btn btn-primary" value="Crear Solicitud">
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
                        $insert_User -> insert_Empresa();
                        ?>
                    </form>
                </section>
            </div>
        </div>
    </div>

    <?php include_once(VIEW_PATH . 'includes/dashboard_Footer.php'); ?>