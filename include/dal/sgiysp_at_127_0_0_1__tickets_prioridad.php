<?php
$dalTabletickets_prioridad = array();
$dalTabletickets_prioridad["prioridad_id"] = array("type"=>3,"varname"=>"prioridad_id", "name" => "prioridad_id", "autoInc" => "1");
$dalTabletickets_prioridad["nombre_prioridad"] = array("type"=>200,"varname"=>"nombre_prioridad", "name" => "nombre_prioridad", "autoInc" => "0");
$dalTabletickets_prioridad["tiempo_estimado"] = array("type"=>3,"varname"=>"tiempo_estimado", "name" => "tiempo_estimado", "autoInc" => "0");
$dalTabletickets_prioridad["prioridad_id"]["key"]=true;

$dal_info["sgiysp_at_127_0_0_1__tickets_prioridad"] = &$dalTabletickets_prioridad;
?>