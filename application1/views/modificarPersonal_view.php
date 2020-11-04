 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  ?>
 <section class="wrapper">
      <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START navbar header-->
         <div class="navbar-header" style="background-color:#2C7873">
            <a href="<?php echo base_url(); ?>47admin/#" class="navbar-brand">
               <div class="brand-logo">LINEA P</div>
               <div class="brand-logo-collapsed">P</div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper" style="background-color:#6FB98F">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
               <li>
                  <a href="<?php echo base_url(); ?>47admin/#" data-toggle="aside">
                     <em class="fa fa-align-left"></em>
                  </a>
               </li>
              <!-- <li>
                  <a href="<?php echo base_url(); ?>47admin/#" data-toggle="navbar-search">
                     <em class="fa fa-search"></em>
                  </a>
               </li>-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
               <!-- START Messages menu (dropdown-list)-->
              <!-- <li class="dropdown dropdown-list">
                  <a href="<?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-envelope"></em>
                     <div class="label label-danger">300</div>
                  </a>-->
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li class="dropdown-menu-header">You have 5 new messages</li>
                     <li>
                        <div class="scroll-viewport">
                           <!-- START list group-->
                           <div class="list-group scroll-content">
                              <!-- START list group item-->
                              <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src="<?php echo base_url(); ?>47admin/app/img/user/01.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">2h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-success point-lg"></div>Sheila Carter</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src="<?php echo base_url(); ?>47admin/app/img/user/04.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-success point-lg"></div>Rich Reynolds</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src="<?php echo base_url(); ?>47admin/app/img/user/03.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-danger point-lg"></div>Beverley Pierce</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src="<?php echo base_url(); ?>47admin/app/img/user/05.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-danger point-lg"></div>Perry Cole</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src="<?php echo base_url(); ?>47admin/app/img/user/06.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-danger point-lg"></div>Carolyn Carpenter</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                        </div>
                     </li>
                     <!-- START dropdown footer-->
                     <li class="p">
                        <a href="<?php echo base_url(); ?>47admin/#" class="text-center">
                           <small class="text-primary">READ ALL</small>
                        </a>
                     </li>
                     <!-- END dropdown footer-->
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Messages menu (dropdown-list)-->
               <!-- START Alert menu-->
               <!--<li class="dropdown dropdown-list">
                  <a href="<?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-bell"></em>
                     <div class="label label-info">120</div>
                  </a>-->
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-envelope-o fa-2x text-success"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">Unread messages</div>
                                    <p class="m0">
                                       <small>You have 10 unread messages</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-cog fa-2x"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">New settings</div>
                                    <p class="m0">
                                       <small>There are new settings available</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-fire fa-2x"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">Updates</div>
                                    <p class="m0">
                                       <small>There are
                                          <span class="text-primary">2</span>new updates available</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- last list item -->
                           <a href="<?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <small>Unread notifications</small>
                              <span class="badge">14</span>
                           </a>
                        </div>
                        <!-- END list group-->
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Alert menu-->
               <!-- START User menu-->
               <li class="dropdown">
                  <a href="<?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-user"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <div class="p">
                           <p>Progreso general</p>
                           <div class="progress progress-striped progress-xs m0">
                              <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                                 <span class="sr-only">80% Completo</span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="divider"></li>
                     <li><a href="<?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <!-- <li><a href="<?php echo base_url(); ?>47admin/#">Settings</a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>47admin/#">Notifications<div class="label label-info pull-right">5</div></a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>47admin/#">Messages<div class="label label-danger pull-right">10</div></a>
                     </li>-->
                     <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar session</a>
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END User menu-->
               <!-- START Contacts button-->
              <!-- <li>
                  <a href="<?php echo base_url(); ?>47admin/#" data-toggle="offsidebar">
                     <em class="fa fa-align-right"></em>
                  </a>
               </li>-->
               <!-- END Contacts menu-->
            </ul>
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
         <!-- START Search form-->
         <form role="search" class="navbar-form">
            <div class="form-group has-feedback">
               <input type="text" placeholder="Type and hit Enter.." class="form-control">
               <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
         </form>
         <!-- END Search form-->
      </nav>
      <!-- END Top Navbar-->
      <!-- START aside-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <nav class="sidebar" style="background-color:#021C1E;" >
            <ul class="nav">
               <!-- START user info-->
               <li>
                  <div data-toggle="collapse-next" class="item user-block has-submenu" >
                     <!-- User picture-->
                     <div class="user-block-picture">
                        <img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('foto') ?>" alt="Avatar" class="img-thumbnail img-circle">
                        <!-- Status when collapsed-->
                        <div class="user-block-status">
                           <div class="point point-success point-lg"></div>
                        </div>
                     </div>
                     <!-- Name and Role-->
                     <div class="user-block-info">
                        <input type="hidden" name="idusu" value="<?php echo $this->session->userdata('idEmpleado') ?>">
                        <span class="user-block-name item-text"><?php echo $this->session->userdata('login') ?></span>
                        <span class="user-block-role"><?php echo $this->session->userdata('tipo') ?></span>
                        <!-- START Dropdown to change status-->
                        <div class="btn-group user-block-status">
                           <button type="button" data-toggle="dropdown" data-play="fadeIn" data-duration="0.2" class="btn btn-xs dropdown-toggle">
                              <div class="point point-success"></div>En Linea</button>
                           <!--<ul class="dropdown-menu text-left pull-right">
                              <li>
                                 <a href="<?php echo base_url(); ?>47admin/#">
                                    <div class="point point-success"></div>Online</a>
                              </li>
                              <li>
                                 <a href="<?php echo base_url(); ?>47admin/#">
                                    <div class="point point-warning"></div>Away</a>
                              </li>
                              <li>
                                 <a href="<?php echo base_url(); ?>47admin/#">
                                    <div class="point point-danger"></div>Busy</a>
                              </li>
                           </ul>-->
                        </div>
                        <!-- END Dropdown to change status-->
                     </div>
                  </div>
                  <!-- START User links collapse-->
                  <ul class="nav collapse" >
                     <li><a href="<?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                    <!-- <li><a href="<?php echo base_url(); ?>47admin/#">Settings</a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>47admin/#">Notifications<div class="label label-danger pull-right">120</div></a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>47admin/#">Messages<div class="label label-success pull-right">300</div></a>
                     </li>-->
                     <li class="divider"></li>
                     <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar sesion</a>
                     </li>
                  </ul>
                  <!-- END User links collapse-->
               </li>
               <!-- END user info-->
               <!-- START Menu-->
               <li class="active" >
                  <a href="<?php echo base_url(); ?>47admin/dashboard.html" title="Dashboard" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-home"></em>
                     <div class="label label-primary pull-right"></div>
                     <span class="item-text">Principal</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse in">
                     <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/usuarios/panel" title="Default" data-toggle="" class="no-submenu">
                           <span class="item-text">Estas en principal</span>
                        </a>
                     </li>
                  <!--<li>
                        <a href="<?php echo base_url(); ?>47admin/dashboard-nosidebar.html" title="No Sidebar" data-toggle="" class="no-submenu">
                           <div class="label label-primary pull-right">new</div>
                           <span class="item-text">No Sidebar</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/dashboard-noprofile.html" title="No Profile" data-toggle="" class="no-submenu">
                           <div class="label label-primary pull-right">new</div>
                           <span class="item-text">No Profile</span>
                        </a>
                     </li>-->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <!--<li>
                  <a href="<?php echo base_url(); ?>47admin/#" title="Charts" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-bar-chart-o"></em>
                     <span class="item-text">Charts</span>
                  </a>-->
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/chart-flot.html" title="Flot" data-toggle="" class="no-submenu">
                           <span class="item-text">Flot</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/chart-radial.html" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Radial</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="<?php echo base_url(); ?>47admin/#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-table"></em>
                     <span class="item-text">Listado</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/listaSocio" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Socios</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/listaPersonal" title="Data Table" data-toggle="" class="no-submenu">
                           <span class="item-text">Personal</span>
                        </a>
                     </li>
                    <!-- <li>
                        <a href="<?php echo base_url(); ?>47admin/table-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Extended</span>
                        </a>
                     </li>-->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="<?php echo base_url(); ?>47admin/#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-edit"></em>
                     <span class="item-text">Formulario</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/formSocio" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Socio</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/formPersonal" title="Extended" data-toggle="" class="no-submenu">
                           <div class="label label-primary pull-right"></div>
                           <span class="item-text">Personal</span>
                        </a>
                     </li>
                     <!--<li>
                        <a href="<?php echo base_url(); ?>47admin/form-validation.html" title="Validation" data-toggle="" class="no-submenu">
                           <span class="item-text">Validation</span>
                        </a>
                     </li>-->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
              <!-- <li>
                  <a href="<?php echo base_url(); ?>47admin/#" title="Elements" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-wrench"></em>
                     <span class="item-text">Elements</span>
                  </a>-->
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/panels.html" title="Panels" data-toggle="" class="no-submenu">
                           <div class="label label-primary pull-right">new</div>
                           <span class="item-text">Panels</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/portlets.html" title="Portlets" data-toggle="" class="no-submenu">
                           <span class="item-text">Portlets</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/button.html" title="Buttons" data-toggle="" class="no-submenu">
                           <span class="item-text">Buttons</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/icons.html" title="Icons" data-toggle="" class="no-submenu">
                           <div class="label label-primary pull-right">+400</div>
                           <span class="item-text">Icons</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/notifications.html" title="Notifications" data-toggle="" class="no-submenu">
                           <span class="item-text">Notifications</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/typo.html" title="Typography" data-toggle="" class="no-submenu">
                           <span class="item-text">Typography</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/grid.html" title="Grid" data-toggle="" class="no-submenu">
                           <span class="item-text">Grid</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/grid-masonry.html" title="Grid Masonry" data-toggle="" class="no-submenu">
                           <span class="item-text">Grid Masonry</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/animations.html" title="Animations" data-toggle="" class="no-submenu">
                           <span class="item-text">Animations</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/dropdown-animations.html" title="Dropdown" data-toggle="" class="no-submenu">
                           <span class="item-text">Dropdown</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/widgets.html" title="Widgets" data-toggle="" class="no-submenu">
                           <span class="item-text">Widgets</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/maps.html" title="Maps" data-toggle="" class="no-submenu">
                           <span class="item-text">Maps</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/calendar.html" title="Calendar" data-toggle="" class="no-submenu">
                           <span class="item-text">Calendar</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/spinners.html" title="Spinners" data-toggle="" class="no-submenu">
                           <div class="label label-primary pull-right">new</div>
                           <span class="item-text">Spinners</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
             <!--</li>-->
              <!-- <li>
                  <a href="<?php echo base_url(); ?>47admin/#" title="Pages" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-file-text"></em>
                     <div class="label label-primary pull-right">new</div>
                     <span class="item-text">Pages</span>
                  </a>-->
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/pages/landing.html" title="Landing" data-toggle="" class="no-submenu">
                           <span class="item-text">Landing</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/pages/login.html" title="Login" data-toggle="" class="no-submenu">
                           <span class="item-text">Login</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/pages/login-multi.html" title="Login Multi" data-toggle="" class="no-submenu">
                           <span class="item-text">Login Multi</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/pages/signup.html" title="Sign up" data-toggle="" class="no-submenu">
                           <span class="item-text">Sign up</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/pages/lock.html" title="Lock" data-toggle="" class="no-submenu">
                           <span class="item-text">Lock</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/pages/recover.html" title="Recover Password" data-toggle="" class="no-submenu">
                           <span class="item-text">Recover Password</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/template.html" title="Empty Template" data-toggle="" class="no-submenu">
                           <span class="item-text">Empty Template</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>47admin/timeline.html" title="Timeline" data-toggle="" class="no-submenu">
                           <span class="item-text">Timeline</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               <!--</li>-->
               <!-- END Menu-->
               <!-- Sidebar footer    -->
               <li class="nav-footer">
                  <div class="nav-footer-divider"></div>
                  <!-- START button group-->
                  <div class="btn-group text-center">
                     <button type="button" data-toggle="tooltip" data-title="Add Contact" class="btn btn-link">
                        <em class="fa fa-user text-muted"><sup class="fa fa-plus"></sup>
                        </em>
                     </button>
                     <button type="button" data-toggle="tooltip" data-title="Settings" class="btn btn-link">
                        <em class="fa fa-cog text-muted"></em>
                     </button>
                     <button type="button" data-toggle="tooltip" data-title="Logout" class="btn btn-link">
                        <em class="fa fa-sign-out text-muted"></em>
                     </button>
                  </div>
                  <!-- END button group-->
               </li>
            </ul>
         </nav>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- End aside-->
      <!-- START aside-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <ul class="nav">
               <!-- START user info-->
               <li>
                  <div class="item">
                     <div style="background-image: url('app/img/offsidebar-bg.jpg')" class="p-lg">
                        <div class="text-center">
                           <p>
                              <img src="<?php echo base_url(); ?>47admin/app/img/user/02.jpg" style="width: 64px; height: 64px" alt="Image" class="img-circle img-thumbnail">
                           </p>
                           <p class="text-white">
                              <strong>Alex</strong>
                           </p>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- END user info-->
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">ONLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/05.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Tommy Sam</strong>
                           <br>
                           <small class="text-muted">tommy39</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/06.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Beverley Pierce</strong>
                           <br>
                           <small class="text-muted">be40210</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-danger point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/07.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Victor Long</strong>
                           <br>
                           <small class="text-muted">longlong</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-warning point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/08.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Danielle Berry</strong>
                           <br>
                           <small class="text-muted">hunter49</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">OFFLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/09.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Bertha Cooper</strong>
                           <br>
                           <small class="text-muted">ber123</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/10.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Anne Curtis</strong>
                           <br>
                           <small class="text-muted">anni</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <li>
                  <!-- Optional link to list more users-->
                  <a href="<?php echo base_url(); ?>47admin/#" title="See more contacts" class="p">
                     <strong>
                        <small class="text-muted">&hellip;</small>
                     </strong>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- End aside-->
      <!-- START aside-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <ul class="nav">
               <!-- START user info-->
               <li>
                  <div class="item">
                     <div style="background-image: url('app/img/offsidebar-bg.jpg')" class="p-lg">
                        <div class="text-center">
                           <p>
                              <img src="<?php echo base_url(); ?>47admin/app/img/user/02.jpg" style="width: 64px; height: 64px" alt="Image" class="img-circle img-thumbnail">
                           </p>
                           <p class="text-white">
                              <strong>Alex</strong>
                           </p>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- END user info-->
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">ONLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/05.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Tommy Sam</strong>
                           <br>
                           <small class="text-muted">tommy39</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/06.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Beverley Pierce</strong>
                           <br>
                           <small class="text-muted">be40210</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-danger point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/07.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Victor Long</strong>
                           <br>
                           <small class="text-muted">longlong</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-warning point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/08.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Danielle Berry</strong>
                           <br>
                           <small class="text-muted">hunter49</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">OFFLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/09.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Bertha Cooper</strong>
                           <br>
                           <small class="text-muted">ber123</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="<?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="<?php echo base_url(); ?>47admin/app/img/user/10.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Anne Curtis</strong>
                           <br>
                           <small class="text-muted">anni</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <li>
                  <!-- Optional link to list more users-->
                  <a href="<?php echo base_url(); ?>47admin/#" title="See more contacts" class="p">
                     <strong>
                        <small class="text-muted">&hellip;</small>
                     </strong>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>

      <section>
         <!-- START Page content-->
         <section class="main-content">
            <h3>Formulario de actualizacion
               <br>
               <small>Ingrese los nuevos datos personales del personal.</small>
            </h3>
            <!-- START row-->
             <!-- <div class="row">
               <div class="col-lg-6">
                  <form method="post" data-parsley-validate="" novalidate="">
                     <!-- START panel-->
                     <!--  <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title">Form Register</div>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <label class="control-label">Email Address *</label>
                              <input type="text" name="email" required class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-label">Password *</label>
                              <input id="id-password" type="password" name="password" required class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-label">Confirm Password *</label>
                              <input type="password" name="confirmPassword" required data-parsley-equalto="#id-password" class="form-control">
                           </div>
                           <div class="required">* Required fields</div>
                        </div>
                        <div class="panel-footer">
                           <div class="clearfix">
                              <div class="pull-left">
                                 <div class="checkbox c-checkbox">
                                    <label>
                                       <input type="checkbox" name="agreements" required data-parsley-error-message="Please read and agree the terms">
                                       <span class="fa fa-check"></span>I agree with the <a href="#">terms</a>
                                    </label>
                                 </div>
                              </div>
                              <div class="pull-right">
                                 <button type="submit" class="btn btn-primary">Register</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END panel-->
                  <!--  </form>
               </div>
                <!-- <div class="col-lg-6">
                  <form method="post" data-parsley-validate="" novalidate="">
                     <!-- START panel-->
                     <!--  <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title">Form Login</div>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <label class="control-label">Email Address *</label>
                              <input type="text" name="email" required class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-label">Password *</label>
                              <input type="password" name="password" required class="form-control">
                           </div>
                           <div class="required">* Required fields</div>
                        </div>
                        <div class="panel-footer">
                           <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                     </div>
                     <!-- END panel-->
                 <!--   </form>
               </div>
            <!--  </div>
            <!-- END row-->
            <!-- START row-->
            <div class="row">
               <?php
               $atributos = array('class' => 'form-group', 'id' => 'myform');
               echo form_open_multipart('usuarios/modificarbd',$atributos);
              foreach ($infopersonal->result() as $row)
				{
               ?>
               <div class="col-md-12">
                 
                     <!-- START panel-->
                     <div action="" class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title"><code>Campos obligatorios (*)</code></div>
                        </div>
                        <div class="panel-body">
                           <legend>Formulario</legend>
                           <input type="hidden" name="id" value="<?php echo $row->idPersona; ?>">
                           <fieldset>
                           <div class="form-group">
                              <div class="col-sm-4">
                                 <label for="formGroupExampleInput">Carnet de Identidad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>*</code></label>
                                 <input type="text" class="form-control bg-light" id="formGroupExampleInput" name="ci" value="<?php echo $row->ci; ?>"placeholder="Ingresar el carnet de identidad" required>
                              </div>
                              <div class="col-sm-4">
                              </div>
                              <div class="col-sm-4">
                                 
                              </div>   
                           </div>
                           </fieldset>
                           <fieldset>
                           <div class="form-row">
                              <div class="col-sm-4">
                                 <label for="formGroupExampleInput">Apellido Paterno:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>*</code></label>
                                 <input type="text" class="form-control bg-light" name="apellidoPaterno" value="<?php echo $row->apellidoPaterno; ?>" placeholder="Ingrese el Apellido paterno" required>
                              </div>
                              <div class="col-sm-4">
                                 <label for="formGroupExampleInput">Apellidos Materno:</label>
                                 <input type="text" class="form-control bg-light" name="apellidoMaterno" value="<?php echo $row->apellidoMaterno; ?>" placeholder="Ingrese el Apellido materno" required>
                              </div>
                              <div class="col-sm-4">
                                 <label for="formGroupExampleInput">Nombres:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>*</code></label>
                                 <input type="text" class="form-control bg-light" name="nombres"  value="<?php echo $row->nombres; ?>" placeholder="Ingrese sus nombres" required>
                              </div>
                           </div> 
                           </fieldset>  
                           <br>
                           <fieldset>
                           <div class="form-row">
                              <div class="col-sm-3">
                                 <label for="exampleFormControlSelect1">Sexo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>*</code></label>
                                 <select class="form-control bg-light" id="exampleFormControlSelect1" name="sexo" value="<?php echo $row->sexo; ?>" required>
                                    <option value="FEMENINO">Femenino</option>
                                    <option value="MASCULINO">Masculino</option>
                                    <option value="OTRO">Otros</option>
                                 </select>
                              </div>
                              <div class="col-sm-3">
                                <label for="exampleFormControlSelect1">Cargo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>*</code></label>
                                 <select class="form-control bg-light" id="exampleFormControlSelect1" name="cargo" value="<?php echo $row->cargo; ?>" required>
                                    <option value="ADMINISTRACION">Administración</option>
                                    <option value="SECRETARIA">Secretaria</option>
                                    <option value="CONTROL_PARADAS">Control de Paradas</option> 
                                    <option value="SUPERVISOR">Supervisor</option>
                                 </select>
                              </div>
                              <div class="col-sm-6">
                                 <label for="formGroupExampleInput">Dirección:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>*</code></label>
                                 <input type="text" class="form-control bg-light" name="direccion" value="<?php echo $row->direccion; ?>" placeholder="Ingrese la direccion">
                              </div>
                           </div>
                           </fieldset>
                           <fieldset>
                           <div class="form-row">
                              <div class="col-sm-5">
                                 <label for="formGroupExampleInput">Celular o Telefono:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>*</code></label>
                                 <input type="text" class="form-control bg-light" name="celular" value="<?php echo $row->celular; ?>" placeholder="Ingrese su celular o telefono" required>
                              </div>
                              <div class="col-sm-7">
                                 <label for="exampleInputEmail1">Correo Electrónico:</label>
                                 
                                    <!--<div class="input-group-prepend">
                                       <span class="input-group-text">@</span>
                                    </div>-->
                                    <input type="text" class="form-control bg-light" name="correo" value="<?php echo $row->correo; ?>" placeholder="Ingrese su correo electronico">
                                 
                              </div>
                           </div>
                           </fieldset>
                           
                           <hr/>
                           <button type="submit" class="btn btn-info btn-lg btn-block">Actualizar Personal</button>

                       </div>
                       <?php
                   echo form_close();
                   ?>
                     </div>
                     <!-- END panel-->
                  </form>
                  </div>
               <?php
               echo form_close();
               ?>
               <?php
               $atributos = array('class' => 'form-group', 'id' => 'myform');
               echo form_open_multipart('usuarios/listaPersonal',$atributos);
               echo "<button type='submit' class='btn btn-danger btn-lg btn-block'>Cancelar</button>";
               echo form_close();
               ?>
            </div>
               </div>
               <?php
           }
               echo form_close();
               ?>
            </div>
            <!-- END row-->
         </section>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   
    
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="vendor/chosen/chosen.jquery.min.js"></script>
   <script src="vendor/slider/js/bootstrap-slider.js"></script>
   <script src="vendor/filestyle/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="vendor/animo/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="vendor/sparklines/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src="vendor/slimscroll/jquery.slimscroll.min.js"></script>
   <!-- START Page Custom Script-->
   <!-- Form Validation-->
   <script src="vendor/parsley/parsley.min.js"></script>
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="app/js/app.js"></script>
   <!-- END Scripts-->
</body>

</html>
