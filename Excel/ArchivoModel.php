<?php
    require_once("Conexion.php");

    class ArchivoModel {
        
        public function getAllActividad() {
            $connection = new Conexion();
            $connect = $connection->get_conexion();

            try {
                $sql = "SELECT * FROM actividad,convenio,desembolso,localizacion,municipios,no_empleos_generados,recursos_naturales,responsable WHERE actividad.id_act=convenio.id_act_convenio AND actividad.id_act=desembolso.id_act_des AND actividad.id_act=localizacion.id_act_localizacion AND actividad.id_act=municipios.id_municipios AND actividad.id_act=no_empleos_generados.id_act_empleos AND actividad.id_act=recursos_naturales.id_act_recursos AND actividad.id_act=responsable.id_act_res ";
                $query = $connect->prepare($sql);
                $query->execute();
                $data = $query->fetchAll();
                $response = ['status' => 1, 'actividad' => $data];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }

        public function getAllDatas() {
            $connection = new Conexion();
            $connect = $connection->get_conexion();

            try {
                $sql = "SELECT programa.total_programa, proyecto.cod_proyecto, proyecto.presupuesto_proyecto,proyecto.nombre_pro,actividad.nombre, proyecto.participacion_proyecto, poai.participacion_actividad, actividad.aporte_cvs From poai, programa, proyecto, actividad  WHERE poai.id_act_poai=actividad.id_act AND poai.id_programa_poai=programa.id_programa AND poai.id_proyecto_poai=proyecto.id_proyecto";
                $query = $connect->prepare($sql);
                $query->execute();
                $data = $query->fetchAll();
                $response = ['status' => 1, 'datas' => $data];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }

    }

    
?>