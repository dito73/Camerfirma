<?php
$dalTablecertificados_tipo = array();
$dalTablecertificados_tipo["cert_count_id"] = array("type"=>3,"varname"=>"cert_count_id", "name" => "cert_count_id", "autoInc" => "1");
$dalTablecertificados_tipo["ID_FK"] = array("type"=>3,"varname"=>"ID_FK", "name" => "ID_FK", "autoInc" => "0");
$dalTablecertificados_tipo["certificado_id_fk"] = array("type"=>3,"varname"=>"certificado_id_fk", "name" => "certificado_id_fk", "autoInc" => "0");
$dalTablecertificados_tipo["certificado_nombre"] = array("type"=>200,"varname"=>"certificado_nombre", "name" => "certificado_nombre", "autoInc" => "0");
$dalTablecertificados_tipo["cert_count_id"]["key"]=true;

$dal_info["sgiysp_at_127_0_0_1__certificados_tipo"] = &$dalTablecertificados_tipo;
?>