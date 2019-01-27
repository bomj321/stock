<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv = "cache-control" content = "no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistemas Monedas </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>public/build/css/custom.min.css" rel="stylesheet">
    <!--FUENTES DE LETRAS-->

    <link href="<?php echo base_url();?>public/app.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

    <?php echo form_open('login/login');  ?><!--FORMULARIO CIERRE Y APERTURA-->

              <h1>Sistema Interno</h1>
	              <?php if($this->session->flashdata("error")):?>
  	              <div class="alert alert-warning">
  	                <p><?php echo $this->session->flashdata("error")?></p>
  	              </div>
	            <?php endif; ?>              

              <div>
                    <?php
                    $nombre_cliente = array(
                        'class'        => form_error("nombre_cliente") != false ? "parsley-error form-control":"form-control ",
                        'placeholder'  => 'Nombre de Usuario',
                        'name'         => 'nombre_cliente',
                        'value'        =>  set_value("nombre_cliente")
                    );

                    echo form_input($nombre_cliente);
                    echo form_error("nombre_cliente","<span class='pull-left label label-primary'>","</span>")

                  ?>
              </div>



              <div style="margin-top: 40px;">
                     <?php
                    $dni_cliente = array(
                        'class'        => form_error("dni_cliente") != false ? "parsley-error form-control":" form-control",
                        'placeholder'  => 'Contraseña',
                        'name'         => 'dni_cliente',

                    );

                echo form_password($dni_cliente);
                echo form_error("dni_cliente","<span class='pull-left label label-primary'>","</span>");

                  ?>
              </div>


              <div style="margin-top: 45px;">
                   <?php
                  $boton = array(
                      'type'     => 'submit',
                      'class'    => 'btn btn-default',
                      'content'  => 'Iniciar Sesión'
                  );

                echo form_button($boton);

                ?>
              </div>

              <div class="clearfix"></div>

              <div class="separator">              

                  <div class="clearfix"></div>


                  <div >
                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                  </div>
              </div>
    <?php echo form_close();?><!--FORMULARIO CIERRE Y APERTURA-->
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
