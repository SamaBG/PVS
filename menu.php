<?php

	#genera barra superior
	function crear_barra() {
	global $user;
	
		if ($user=="") {
			$links = "<a href='login.php?error=false' title='iniciar session'> Login</a>";
		} else {
			$links = "<span> {$_SESSION['nombre']} </span> &nbsp;".
                                 "<a  href='cerrar_session.php' class='btn btn-secondary rounded' style='height: 37px' title='cerrar sessión de usuario'>Cerrar Sesión</a>".
                                        "<a href='abm.php'title='Alta Baja Modificación' class='btn btn-primary rounded' style='background-color: #20B2AA;height: 37px;margin-right: 2px'>ABM</a>";
					
		}
					 
		$barra_sup ="<div id='divisor1'>
                                   $links 
                                </div>";

		return  $barra_sup;
	}
	
   
   function menu(){
       global $menu1,$perfil;
       $menu='<div class="container"> 
                 <nav style="margin-left: 0px" class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                
                
                   <img id=link_logo src="img/logo.jpg" alt="logo del sitio" class="rounded-circle">
                
                  
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                   </button>
                
                
                 <div class="collapse navbar-collapse" id="barra">
                    <ul class="nav navbar-nav" id="nav-link">
                        <li>
                            <a href="index.php" id=link1 title="Inicio del Sitio" class="btn btn-sm btn-outline-secondary">Plan Vehículo Solidario</a>
                        </li>
                        <li>
                            <a href="leyenda.php" title="Leyenda" class="btn btn-sm btn-outline-secondary">Leyenda</a>
                        </li>
                        <li>
                            <a href="caracteristicas.php" title="Caracteristicas" class="btn btn-sm btn-outline-secondary">Características</a>
                        </li>
                        <li>
                            <a href="beneficiarios.php" title="Beneficiarios" class="btn btn-sm btn-outline-secondary">Beneficiarios</a>
                        </li>
                        <li>
                            <a href="consultas.php" title="Consultas" class="btn btn-sm btn-outline-secondary">Consultas</a>
                        </li>
                        <li>
                            <a href="galeria.php" title="Galería" class="btn btn-sm btn-outline-secondary">Galería</a>
                        </li>
                        
                    </ul>
                 </div>
            </nav>';
   return $menu;
   }
?>
