<div id="wrapper">
    
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" width="48px;" class="img-circle" src="<?=base_url();?>img/foto_perfil/<?=$session["imagen"];?>" id="bar_foto_perfil" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold">
                                    <?=ucfirst($session["primer_nom"])." ".ucfirst($session["apellido_pat"])." ".ucfirst($session["apellido_mat"]);?>
                                    </strong>
                            </span> 
                            <span class="text-muted text-xs block">
                                <?=ucfirst($session["perfil"]);?> 
                                <b class="caret"></b>
                            </span> 
                            </span> 
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?=base_url();?>perfil_admin">Perfil</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal6">Contacto</a></li>
                            <li class="divider"></li>
                            <li><a href="<?=base_url();?>login_app/accion/logout">Cerrar sesión</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        SMC
                    </div>
                </li>
                <!-- menu medisis -->
                <?php switch ($session['id_perfil']) {
                    case '1':
                    case '2':
                    case '3':
                        ?> 
                <li class="<?=$active["inicio"];?>">
                    <a href="<?=base_url();?>dashboard_admin"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span></a>
                </li>
                <li class="<?=$active["perfil"];?>">
                    <a href="<?=base_url();?>perfil_admin"><i class="fa fa-user-md"></i> <span class="nav-label">Perfil</span></a>
                </li>   
                <li class="<?=$active["calendario"];?>">
                    <a href="<?=base_url();?>agenda"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span></a>
                </li>
                <li class="<?=$active["pacientes"];?>">
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Pacientes</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=base_url();?>paciente_admin/RegistrarPaciente">Crear Paciente</a></li>
                        <li><a href="<?=base_url();?>paciente_admin/listadoPacientes">Listado de Pacientes</a></li>
                    </ul>
                </li>
                <li class="<?=$active["consulta"];?>">
                    <a href="#"><i class="fa fa-stethoscope"></i> <span class="nav-label">Consulta Medica</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li ><a href="<?=base_url();?>consulta_medica/nueva_consulta">Nueva Consulta Médica</a></li>
                        <li ><a href="<?=base_url();?>consulta_medica">Listado de Consultas</a></li>
                    </ul>
                </li>
                <li class="<?=$active["gestion"];?>">
                    <a href="#"><i class="fa fa-gears"></i> <span class="nav-label">Gestion de datos</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li ><a href="<?=base_url();?>gestion" id="href_gestion">Gestión de datos</a></li>                        
                    </ul>
                </li>
                <li class="<?=$active["reportes"];?>">
                    <a href="<?=base_url();?>reportes"><i class="fa fa-clipboard"></i> <span class="nav-label">Reportes</span></a>
                </li>
                <li class="<?=$active["soporte"];?>">
                    <a href="#"><i class="fa fa-phone-square"></i> <span class="nav-label">Soporte</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li ><a href="#" data-toggle="modal" data-target="#myModal6">Contactenos</a>
                            <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Contacto</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-responsive" src="<?php echo base_url();?>img/logo.png" alt="SysMedCloud" title="SysMedCloud">
                                            
                                            0666 Antonio Varas, Providencia<br>
                                            Santiago de Chile<br>
                                            P: (+569) 8640-5645<br>
                                            Correo<br>
                                            <a href="">help@sysmedcloud.cl</a> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li >
                            <a href="#" data-toggle="modal" data-target="#myModal5">Acerca de Sysmedcloud</a>
                            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            
                                            <h4 class="modal-title">Acerca de SysMedCloud</h4>
                                            <small class="font-bold">
                                                Historias clínicas electrónicas 100% online
                                                
                                            </small>
                                        </div>
                                        <div class="modal-body">
                                             
                                            <strong>SysMedCloud</stronG> (Sistema de gestión  medica online), 
                                            es un sistema que le permite mantener una correcta gestión de los 
                                            pacientes que son atendidos por usted y sus colegas en los centros medicos 
                                            a lo largo del país.<br> 
                                            Con él, puede crear fichas medicas electrónicas, consultas medicas, 
                                            gestionar pacientes e incluso emitir Ordenes Medicas y Consentimientos Informados. 
                                            <strong>Olvídese de los papeles</strong> y sea bienvenido a SysMedCloud.
                                            <br><br>
                                            <strong>¡Bienvenido!</strong>
                                            <br><br>
                                            <img class="img-responsive" src="<?php echo base_url();?>img/logo.png" alt="SysMedCloud" title="SysMedCloud">
                                            
                                            0666 Antonio Varas, Providencia<br>
                                            Santiago de Chile<br>
                                            P: (+569) 8640-5645<br>
                                            Correo<br>
                                            <a href="">help@sysmedcloud.cl</a> 
                                            
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Salir</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                        <?php

                        break;
                    case '4':
                    ?> 
                <li class="<?=$active["inicio"];?>">
                    <a href="<?=base_url();?>dashboard_paciente"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span></a>
                </li>
                <li class="<?=$active["perfil"];?>">
                    <a href="<?=base_url();?>perfil_admin"><i class="fa fa-user-md"></i> <span class="nav-label">Perfil</span></a>
                </li>
                <li class="<?=$active["soporte"];?>">
                    <a href="#"><i class="fa fa-phone-square"></i> <span class="nav-label">Soporte</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li ><a href="#" data-toggle="modal" data-target="#myModal6">Contactenos</a>
                            <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Contacto</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-responsive" src="<?php echo base_url();?>img/logo.png" alt="SysMedCloud" title="SysMedCloud">
                                            
                                            0666 Antonio Varas, Providencia<br>
                                            Santiago de Chile<br>
                                            P: (+569) 8640-5645<br>
                                            Correo<br>
                                            <a href="">help@sysmedcloud.cl</a> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li >
                            <a href="#" data-toggle="modal" data-target="#myModal5">Acerca de Sysmedcloud</a>
                            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            
                                            <h4 class="modal-title">Acerca de SysMedCloud</h4>
                                            <small class="font-bold">
                                                Historias clínicas electrónicas 100% online
                                                
                                            </small>
                                        </div>
                                        <div class="modal-body">
                                             
                                            <strong>SysMedCloud</stronG> (Sistema de gestión  medica online), 
                                            es un sistema que le permite mantener una correcta gestión de los 
                                            pacientes que son atendidos por usted y sus colegas en los centros medicos 
                                            a lo largo del país.<br> 
                                            Con él, puede crear fichas medicas electrónicas, consultas medicas, 
                                            gestionar pacientes e incluso emitir Ordenes Medicas y Consentimientos Informados. 
                                            <strong>Olvídese de los papeles</strong> y sea bienvenido a SysMedCloud.
                                            <br><br>
                                            <strong>¡Bienvenido!</strong>
                                            <br><br>
                                            <img class="img-responsive" src="<?php echo base_url();?>img/logo.png" alt="SysMedCloud" title="SysMedCloud">
                                            
                                            0666 Antonio Varas, Providencia<br>
                                            Santiago de Chile<br>
                                            P: (+569) 8640-5645<br>
                                            Correo<br>
                                            <a href="">help@sysmedcloud.cl</a> 
                                            
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Salir</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <?php

                        break;
                } ?>
                
                <!-- fin menu medisis -->
            </ul>

        </div>
</nav>