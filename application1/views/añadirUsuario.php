<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  ?>
   <!-- START wrapper-->
   <div style="height: 100%; padding: 20px 0; background-color: #2c3037" class="row row-table">
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" class="panel b0">
            <p class="text-center mb-lg">
               <br>
               <a href="#">
                  <img src="<?php echo base_url(); ?>47admin/app/img/LogoT.png" alt="Image" height="85px" class="block-center img-rounded">
               </a>
            </p>
            

              
            <div id="collapseOne" class="panel-collapse collapse in">
            	<div class="panel-body">
            		<?php
            		$atributos = array('class' => 'form-group');
            		echo form_open_multipart('usuarios/añadirU',$atributos);
            		foreach ($infopersonal->result() as $row)
            		{
            			?>
            			<div class="form-group has-feedback">
            				<input type="text" name="id" value="<?php echo $row->idpersonal; ?>">
            				<input type="text" name="tipo" value="<?php echo $row->cargo; ?>">
            				<fieldset>
            					<label for="exampleInputEmail1">Nombre de usuario:</label>
            					<input id="exampleInputEmail1" type="text" name="login" placeholder="Nombre de Usuario" class="form-control">
            					
            				</div>
            				<div class="form-group has-feedback">
            					<label for="exampleInputPassword1">Contraseña</label>
            					<input id="exampleInputPassword1" type="password" name="password" placeholder="Contraseña" class="form-control">
            					<input type="text" name="foto" value="<?php echo $row->foto; ?>">
            					<fieldset>
            						
            					</div>
                           <!--<div class="clearfix">
                              <div class="checkbox c-checkbox pull-left mt0">
                                 <label>
                                    <input type="checkbox" value="">
                                    <span class="fa fa-check"></span>Remember Me</label>
                              </div>
                          </div>-->
                          <button type="submit" class="btn btn-block btn-primary">Ingresar</button>
                      </div>
                  </div>
              </div>
              <?php 
              echo form_close();
              ?>
              <?php    
          }
          echo form_close();
          ?>

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
 
