<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>Inicio de sesion</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/animo/animate+animo.css">
   <!-- App CSS-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="<?php echo base_url(); ?>47admin/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <!--<script src="../vendor/fastclick/fastclick.js" type="application/javascript"></script>-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/animo/animate+animo.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/csspinner/csspinner.min.css">
   <!-- START Page Custom CSS-->
   <!-- Data Table styles-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/ColVis/css/dataTables.colVis.css">
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="<?php echo base_url(); ?>47admin/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="<?php echo base_url(); ?>47admin/vendor/fastclick/fastclick.js" type="application/javascript"></script>
   <style>
      .portada{
         background: url(<?php echo base_url(); ?>/img/fondoTrans2.jpg) no-repeat fixed center;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         height: 100%;
         width: 100% ;
         text-align: center;

      }
   </style>
</head>

<body>
   <!-- START wrapper-->
<!--style="background-image: url('<?php echo base_url(); ?>/img/1.png'); width: 100%; height: 100vh; "-->
   <div  class="row row-table" style="background-color:#2C7873">

      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" class="panel b0" style="background-color:#021C1E">
            <p class="text-center mb-lg">
               <br>
               <a href="#">
                  <img src="<?php echo base_url(); ?>47admin/app/img/LogoT.png" alt="Image" height="85px" class="block-center img-rounded">
               </a>
            </p>
            <div id="accordion" data-toggle="collapse-autoactive" class="panel-group">
               <!-- START panel-->
               <div class="panel panel-green" style="background-color:##E0FFFF">
                     <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="text-muted btn-block text-center" style="color:white">
                        <?php 
                        switch ($msg) {
                           case '1':
                           echo "<h4>Error de ingreso</h4>";
                           break;
                           case '2':
                           echo "<h4>Acceso no válido</h4>";
                           break;
                           case '3':
                           echo "<h4>Gracias por usar el sistema</h4>";
                           break;

                           default:
                           echo "<h4>Bienvenido al sistema</h4>";
                           break;
                        }
                        ?></a></div>
                     
                    
                  </div>
              
                     
               </div>

               <?php 
               echo form_open_multipart('usuarios/validarusuario');
               ?>
               <div id="collapseOne" class="panel-collapse collapse in">
                     <div class="panel-body">
                        <form role="form" class="mb-lg">
                           <div class="form-group has-feedback">
                              <label for="exampleInputEmail1" style="color:white">Ingrese su usuario:</label>
                              <input id="exampleInputEmail1" type="text" name="login" placeholder="Nombre de Usuario" class="form-control" maxlength="15" minlength="5">
                              <span class="fa fa-user form-control-feedback text-muted"></span>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="exampleInputPassword1" style="color:white">Contraseña</label>
                              <input id="exampleInputPassword1" type="password" name="password" placeholder="Contraseña" class="form-control" maxlength="20" >
                              <span class="fa fa-lock form-control-feedback text-muted"></span>
                           </div>
                           <!--<div class="clearfix">
                              <div class="checkbox c-checkbox pull-left mt0">
                                 <label>
                                    <input type="checkbox" value="">
                                    <span class="fa fa-check"></span>Remember Me</label>
                              </div>
                           </div>-->
                           <button type="submit" class="btn btn-block btn-green">Ingresar</button><?php 
               echo form_close();
               ?></form>
               <!-- <?php 
               echo form_open_multipart('usuarios/validarpersona');
               ?>
                            <br><center>o como Invitado</center>
                            <div class="form-group has-feedback">
                              <label for="exampleInputEmail1" style="color:white">Ingrese su CI:</label>
                              <input id="exampleInputEmail1" type="text" name="ci" placeholder="Ingrese su carnet de indentidad" class="form-control" maxlength="15" minlength="5">
                              <span class="fa fa-user form-control-feedback text-muted"></span>
                           </div>
                            <center><span class="item-text"></span><button type="submit" class="btn btn-green btn"> Ingresar como invitado</button>
                              </a></center>
                              <?php
                     echo form_close();
               ?>     -->      <br>
                           
                     </div> 
                        
                     </div>
                  </div>
                        
               </div>
               


               <!-- END panel-->
               <!-- START panel-->
              <!--  <div class="panel radius-clear b0 shadow-clear">
                  <div class="panel-heading radius-clear"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="text-muted btn-block text-center">Need to Signup?</a>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                     <div class="panel-body">
                        <form role="form" class="mb-lg">
                           <div class="form-group has-feedback">
                              <label for="signupInputEmail1">Email address</label>
                              <input id="signupInputEmail1" type="email" placeholder="Enter email" class="form-control">
                              <span class="fa fa-envelope form-control-feedback text-muted"></span>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="signupInputPassword1">Password</label>
                              <input id="signupInputPassword1" type="password" placeholder="Password" class="form-control">
                              <span class="fa fa-lock form-control-feedback text-muted"></span>
                           </div>
                           <div class="form-group has-feedback">
                              <label for="signupInputRePassword1">ReType Password</label>
                              <input id="signupInputRePassword1" type="password" placeholder="ReType Password" class="form-control">
                              <span class="fa fa-lock form-control-feedback text-muted"></span>
                           </div>
                           <div class="clearfix">
                              <div class="checkbox c-checkbox pull-left mt0">
                                 <label>
                                    <input type="checkbox" value="">
                                    <span class="fa fa-check"></span>I agree with the <a href="#">terms</a>
                                 </label>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-block btn-primary">Register</button>
                        </form>
                     </div>
                  </div>
               </div>-->
               <!-- END panel-->
               <!-- START panel-->
              <!-- <div class="panel radius-clear b0 shadow-clear">
                  <div class="panel-heading radius-clear"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="text-muted btn-block text-center">Forgot your password?</a>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                     <div class="panel-body">
                        <form role="form">
                           <p class="text-center">Fill with your mail to receive instructions on how to reset your password.</p>
                           <div class="form-group has-feedback">
                              <label for="resetInputEmail1">Email address</label>
                              <input id="resetInputEmail1" type="email" placeholder="Enter email" class="form-control">
                              <span class="fa fa-envelope form-control-feedback text-muted"></span>
                           </div>
                           <button type="submit" class="btn btn-danger btn-block">Reset</button>
                        </form>
                     </div>
                  </div>
               </div>-->
               <!-- END panel-->
            </div>
         </div>
      </div>
   </div>
   <!-- END wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="<?php echo base_url(); ?>47admin/vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Animo-->
   <script src="<?php echo base_url(); ?>47admin/vendor/animo/animo.min.js"></script>
   <!-- Custom script for pages-->
   <script src="<?php echo base_url(); ?>47admin/app/js/pages.js"></script>
   <!-- END Scripts-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="<?php echo base_url(); ?>47admin/vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="<?php echo base_url(); ?>47admin/vendor/chosen/chosen.jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/slider/js/bootstrap-slider.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/filestyle/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="<?php echo base_url(); ?>47admin/vendor/animo/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="<?php echo base_url(); ?>47admin/vendor/sparklines/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src="<?php echo base_url(); ?>47admin/vendor/slimscroll/jquery.slimscroll.min.js"></script>
   <!-- START Page Custom Script-->
   <!-- Data Table Scripts-->
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/media/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/ColVis/js/dataTables.colVis.min.js"></script>
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="<?php echo base_url(); ?>47admin/app/js/app.js"></script>
   <!-- END Scripts-->
</body>

</html>