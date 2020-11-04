<!DOCTYPE html>
<html lang="en">
<html lang="en" class="no-ie">
<head>

	<!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>Linea P</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="<?php //echo base_url(); ?>47admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="<?php //echo base_url(); ?>47admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
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
   <link rel="stylesheet" href="<?php echo base_url(); ?>sweetAlert/dist/sweetalert2.min.css">
   
   <!-- Modernizr JS Script-->
   <script src="<?php echo base_url(); ?>47admin/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="<?php echo base_url(); ?>47admin/vendor/fastclick/fastclick.js" type="application/javascript"></script>
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
 
 


   <script>
  function soloNumeros(e) {
      key = e.keyCode || e.which;
      teclado = String.fromCharCode(key);
      numero = "0123456789";
      especiales = "8-37-39-46";
      teclado_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        teclado_especial = true;

      }
    }

    if (numero.indexOf(teclado) == -1 && !teclado_especial) {
      return false;
    }
  }
</script>
 <script>
  function soloLetras(e) {
      key = e.keyCode || e.which;
      teclado = String.fromCharCode(key).toLowerCase();
      letras="abcdefghijklmnñopqrstuvwxyz";
      //numero = "0123456789";
      especiales = "8-37-38-46-164";
      teclado_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        teclado_especial = true;
        break;
      }
    }

    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
      return false;
    }
  }

</script>

<script>
function validarContraseña(){
    if($("#pass").val() === $("#passC").val()){
         //Si son iguales
         console.log("Las contraseñas son iguales");
    }else if($("#pass").val() !== $("#passC").val()){
         //Si no son iguales
         console.log("Las contraseñas no son iguales");
    }
}
</script>
<script>
// Campos Nombres
function PasarValor()
{
document.getElementById("ci").value = document.getElementById("nombre").value;

};
</script>
<style>
  #map{
    height: 300px;
        width: 70%;
  }
  #coorLongitud{
    width: 400px;
  }
  #coorLatitud{
    width: 400px;
  }
  html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</style>
</head>
<body >
