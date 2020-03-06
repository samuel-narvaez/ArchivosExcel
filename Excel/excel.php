<?php     

    header('Content-type:application/xls');
    header('Content-Disposition: attachment; filename=Registro.xls');
    
    require_once ('../../Models/ArchivoModel.php');
    require_once ('../../Models/PoaiModel.php');

    $archivo = new ArchivoModel();
    $poai = new PoaiModel();
    $Actividad = $archivo->getAllActividad();
    $data = $poai->getAllDatas();
?>
<div>

<h1>Actividades</h1>
    <?php
        if (sizeof($Actividad['actividad']) > 0) {
    ?>
    
    <table width="80%" border="1" align="center">
        <tr style="background-color:green;" align="center">
            <th>Nombre Actividad</th>
            <th>Objetivo de la Actividad</th>
            <th>Justificacion</th>
            <th>Definicion Necesidad</th>
            <th>Presupuesto</th>
            <th>Aporte Cvs</th>
            <th>Sice</th>
            <th>Inversion Total</th>
            <th>Origen Actividad</th>

            <th>cuenca</th>
            <th>Subcuenca</th>
            <th>Urbano o Rural</th>
            <th>Municipio</th>
            
            <th>Aporte CVS Especies</th>
            <th>Aporte CVS Dinero</th>
            <th>Subtotal CVS</th>
            <th>Aporte otra Entidad Especies</th>
            <th>Aporte otra Entidad Dinero</th>
            <th>Subtotal Otra Entidad</th>
            <th>Valor total</th>
            <th>Nombre Conveniente</th>

            <th>anticipo</th>
            <th>desembolso</th>
            <th>producto</th>
            <th>fecha</th>
            <th>observaciones</th>

            <th>Directos</th>
            <th>Indirectos</th>
        </tr>
        <?php         
            foreach ($Actividad['actividad'] as $actividad) {
        ?>
        <tr>        
          <td><?php echo utf8_decode ($actividad['nombre']) ?></td>
          <td><?php echo utf8_decode ($actividad['objetivo_act']) ?></td>
          <td><?php echo utf8_decode ($actividad['justificacion']) ?></td>
          <td><?php echo utf8_decode ($actividad['def_necesidad']) ?></td>
          <td><?php echo utf8_decode ($actividad['presupuesto']) ?></td>
          <td><?php echo utf8_decode ($actividad['aporte_cvs']) ?></td>
          <td><?php echo utf8_decode ($actividad['since']) ?></td>
          <td><?php echo utf8_decode ($actividad['inversion_total']) ?></td>
          <td><?php echo utf8_decode ($actividad['origen_act']) ?></td>
          <td><?php echo utf8_decode ($actividad['cuenca']) ?></td>
          <td><?php echo utf8_decode ($actividad['subcuenca']) ?></td>
          <td><?php echo utf8_decode ($actividad['urbano_rural']) ?></td>
          <td><?php echo utf8_decode ($actividad['municipio']) ?></td>
          <td><?php echo utf8_decode ($actividad['aporte_cvs_especie']) ?></td>
          <td><?php echo utf8_decode ($actividad['aporte_cvs_dinero']) ?></td>
          <td><?php echo utf8_decode ($actividad['subtotal_cvs']) ?></td>
          <td><?php echo utf8_decode ($actividad['aporte_otra_entidad_especie']) ?></td>
          <td><?php echo utf8_decode ($actividad['aporte_otra_entidad_dinero']) ?></td>
          <td><?php echo utf8_decode ($actividad['subtotal_otra_entidad']) ?></td>
          <td><?php echo utf8_decode ($actividad['valor_total']) ?></td>
          <td><?php echo utf8_decode ($actividad['nombre_conveniante']) ?></td>
          <td><?php echo utf8_decode ($actividad['anticipo']) ?></td>
          <td><?php echo utf8_decode ($actividad['desembolso']) ?></td>
          <td><?php echo utf8_decode ($actividad['producto']) ?></td>
          <td><?php echo utf8_decode ($actividad['fecha']) ?></td>
          <td><?php echo utf8_decode ($actividad['observaciones']) ?></td>
          <td><?php echo utf8_decode ($actividad['directos']) ?></td>
          <td><?php echo utf8_decode ($actividad['indirectos']) ?></td>
          
        </tr> 
          <?php            
          }
        ?>
    </table>  
    </div>  
      <?php
        }
    ?>
</div>

<div>
    <h1>Poai</h1>
    <?php
        if (sizeof($data['datas']) > 0 ){
    ?>
    <table width="80%" border="1" align="center">
        <tr style="background-color:green;" align="center">
          <th>Codigo Proyecto</th>
          <th>Proyecto</th>
          <th>Presupuesto Proyecto</th>
          <th>Participacion Proyecto</th>
          <th>Actividades</th>
          <th>Presupuesto Actividad</th>
          <th>Participacion Actividad</th>
        </tr>
        <?php
        foreach ($data['datas'] as $data){
        ?>
        <tr>
          <td><?php echo utf8_decode ($data['cod_proyecto']) ?></td>
          <td><?php echo utf8_decode ($data['nombre_pro']) ?></td>
          <td><?php echo utf8_decode ($data['presupuesto_proyecto']) ?></td>
          <td><?php echo utf8_decode ($data['participacion_proyecto']) ?>%</td>
          <td><?php echo utf8_decode ($data['nombre']) ?></td>
          <td><?php echo utf8_decode ($data['aporte_cvs']) ?></td>
          <td><?php echo utf8_decode ($data['participacion_actividad']) ?>%</td>
        </tr> 
          <?php        
            }
        ?>
    </table>  
      <?php
        }
    ?>
    </div>  


