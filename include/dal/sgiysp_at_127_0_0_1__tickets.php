<?php
$dalTabletickets = array();
$dalTabletickets["ticket_id"] = array("type"=>3,"varname"=>"ticket_id", "name" => "ticket_id", "autoInc" => "1");
$dalTabletickets["ticket"] = array("type"=>200,"varname"=>"ticket", "name" => "ticket", "autoInc" => "0");
$dalTabletickets["fecha_ticket"] = array("type"=>135,"varname"=>"fecha_ticket", "name" => "fecha_ticket", "autoInc" => "0");
$dalTabletickets["producto"] = array("type"=>3,"varname"=>"producto", "name" => "producto", "autoInc" => "0");
$dalTabletickets["asunto"] = array("type"=>200,"varname"=>"asunto", "name" => "asunto", "autoInc" => "0");
$dalTabletickets["tipo"] = array("type"=>3,"varname"=>"tipo", "name" => "tipo", "autoInc" => "0");
$dalTabletickets["estado"] = array("type"=>3,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTabletickets["prioridad"] = array("type"=>3,"varname"=>"prioridad", "name" => "prioridad", "autoInc" => "0");
$dalTabletickets["dias"] = array("type"=>3,"varname"=>"dias", "name" => "dias", "autoInc" => "0");
$dalTabletickets["fecha_estim_respuesta"] = array("type"=>135,"varname"=>"fecha_estim_respuesta", "name" => "fecha_estim_respuesta", "autoInc" => "0");
$dalTabletickets["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion", "autoInc" => "0");
$dalTabletickets["imagenes"] = array("type"=>201,"varname"=>"imagenes", "name" => "imagenes", "autoInc" => "0");
$dalTabletickets["archivos"] = array("type"=>200,"varname"=>"archivos", "name" => "archivos", "autoInc" => "0");
$dalTabletickets["sys_user"] = array("type"=>200,"varname"=>"sys_user", "name" => "sys_user", "autoInc" => "0");
$dalTabletickets["ticket_id"]["key"]=true;

$dal_info["sgiysp_at_127_0_0_1__tickets"] = &$dalTabletickets;
?>