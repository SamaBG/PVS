<?php

   
   require_once 'inc/conexion.php';
   require_once 'inc/session.php';
   include 'menu.php';
   include 'pie.php';
   
   $valor = $_GET["val"];
   $nombre=$_GET["nombre"];
   
   $sql= "SELECT * FROM planes";
   $plan= $db->query($sql);
   
   
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Plan Vehícular</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/log_barra.jpg" type="image/x-icon"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estils.css" >
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	
</head>

<body class="body">
    
             <?=menu(); ?>
    
    <div class="container" id="contenedor">
        <?php echo crear_barra(); ?>
        <a  id="boton_volver" style="margin-right: -55px" href="galeria.php" title="volver" class="btn btn-primary rounded" >&laquo</a> 
        <div style="text-align:right" id="cons_print">
			<a href="javascript:window.print();" title="Imprimir Plan">
				<img src='img/print.png' title="Imprimir Plan" alt="icono imprimir." style="border:0;width:32px;height:32px;margin-right: 4px"></a>
				&nbsp;&nbsp;
                                <a href="plan_exel.php?valor=<?php echo $valor;?>&nombre=<?php echo $nombre;?>" title='Excel del listado.'>
				<img src='img/excel.png' title='Excel del Plan.' alt="icono Excel." style="border:0;width:28px;height:28px;margin-right: 8px"> 
                                </a><br><br>
     </div>
        <br><br>
        <div id="detalles_vehiculo">
            <h3>Plan Vehícular</h3>
            <p>Un plan para todas las variantes:</p>   
            <h2><?php echo $nombre?></h2>
        </div>  
            
            <div class="table-responsive-sm">
            
                
            <table id="tabla_plan "class="table table-striped">
                <thead>
                <tr>
                <th>Valor Inicial</th>
                <th>N°Cuotas</th>
                <th>Interés Anual</th>
                <th>Cuota Mensual</th>
                <th>Interés Mensual</th>
                <th>Cuota Final</th>
              </tr>
            </thead>
            <tbody>
               <?php
                  foreach ($plan as $row){
                  ?>
                <tr>
                <?php
               
                 $n_cuotas = $row["cant_cuotas"];
                 $interes=$row["interes_valor"];
                 $c_mensual= $valor/$n_cuotas;
                 $i_mensual=$c_mensual*$interes ;
                 $c_final=$c_mensual+$i_mensual;
                ?>
                 
                <td><?php echo ($valor);?></td>
                <td><?php echo ($n_cuotas);?></td>
                <td><?php echo ($row["interes_detalle"]);?></td>
                <td><?php echo(round($c_mensual,2));?></td>
                <td><?php echo (round($i_mensual,2));?></td>
                <td><?php echo (round($c_final,2));?></td>
              </tr>
              <?php
                  }
              ?>
              
            </tbody>
          </table>
        </div>
      </div>
     <footer>
		      <?=pie()?>
     </footer>
 
  </body>
  </html>

