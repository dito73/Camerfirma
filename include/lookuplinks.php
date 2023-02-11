<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tickets_proyectos"] ) ) {
			$lookupTableLinks["tickets_proyectos"] = array();
		}
		if( !isset( $lookupTableLinks["tickets_proyectos"]["tickets.producto"] )) {
			$lookupTableLinks["tickets_proyectos"]["tickets.producto"] = array();
		}
		$lookupTableLinks["tickets_proyectos"]["tickets.producto"]["edit"] = array("table" => "tickets", "field" => "producto", "page" => "edit");
		if( !isset( $lookupTableLinks["tickets_tipo"] ) ) {
			$lookupTableLinks["tickets_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["tickets_tipo"]["tickets.tipo"] )) {
			$lookupTableLinks["tickets_tipo"]["tickets.tipo"] = array();
		}
		$lookupTableLinks["tickets_tipo"]["tickets.tipo"]["edit"] = array("table" => "tickets", "field" => "tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["tickets_prioridad"] ) ) {
			$lookupTableLinks["tickets_prioridad"] = array();
		}
		if( !isset( $lookupTableLinks["tickets_prioridad"]["tickets.prioridad"] )) {
			$lookupTableLinks["tickets_prioridad"]["tickets.prioridad"] = array();
		}
		$lookupTableLinks["tickets_prioridad"]["tickets.prioridad"]["edit"] = array("table" => "tickets", "field" => "prioridad", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tickets_proyectos.CodSupJerarquico"] )) {
			$lookupTableLinks[""]["tickets_proyectos.CodSupJerarquico"] = array();
		}
		$lookupTableLinks[""]["tickets_proyectos.CodSupJerarquico"]["edit"] = array("table" => "tickets_proyectos", "field" => "CodSupJerarquico", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tickets_proyectos.CodDependencia"] )) {
			$lookupTableLinks[""]["tickets_proyectos.CodDependencia"] = array();
		}
		$lookupTableLinks[""]["tickets_proyectos.CodDependencia"]["edit"] = array("table" => "tickets_proyectos", "field" => "CodDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_certificados"] ) ) {
			$lookupTableLinks["tp_certificados"] = array();
		}
		if( !isset( $lookupTableLinks["tp_certificados"]["certificados_tipo.certificado_id_fk"] )) {
			$lookupTableLinks["tp_certificados"]["certificados_tipo.certificado_id_fk"] = array();
		}
		$lookupTableLinks["tp_certificados"]["certificados_tipo.certificado_id_fk"]["edit"] = array("table" => "certificados_tipo", "field" => "certificado_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users"] ) ) {
			$lookupTableLinks["camerfirma_104_users"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users"]["token_tipo.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users"]["token_tipo.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users"]["token_tipo.ID_FK"]["edit"] = array("table" => "token_tipo", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_token"] ) ) {
			$lookupTableLinks["tp_token"] = array();
		}
		if( !isset( $lookupTableLinks["tp_token"]["token_tipo.tk_id_fk"] )) {
			$lookupTableLinks["tp_token"]["token_tipo.tk_id_fk"] = array();
		}
		$lookupTableLinks["tp_token"]["token_tipo.tk_id_fk"]["edit"] = array("table" => "token_tipo", "field" => "tk_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud.ID_FK"]["edit"] = array("table" => "certificados_solicitud", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud.tipo_documento"]["edit"] = array("table" => "certificados_solicitud", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud.municipio"]["edit"] = array("table" => "certificados_solicitud", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud.token_id"]["edit"] = array("table" => "certificados_solicitud", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud.cert_id"]["edit"] = array("table" => "certificados_solicitud", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud.vigencia"]["edit"] = array("table" => "certificados_solicitud", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud.stage"]["edit"] = array("table" => "certificados_solicitud", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage_tk"] ) ) {
			$lookupTableLinks["tp_stage_tk"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage_tk"]["certificados_solicitud.stage_tk"] )) {
			$lookupTableLinks["tp_stage_tk"]["certificados_solicitud.stage_tk"] = array();
		}
		$lookupTableLinks["tp_stage_tk"]["certificados_solicitud.stage_tk"]["edit"] = array("table" => "certificados_solicitud", "field" => "stage_tk", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia_tipo_user"] ) ) {
			$lookupTableLinks["dependencia_tipo_user"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia_tipo_user"]["certificados_solicitud.dep"] )) {
			$lookupTableLinks["dependencia_tipo_user"]["certificados_solicitud.dep"] = array();
		}
		$lookupTableLinks["dependencia_tipo_user"]["certificados_solicitud.dep"]["edit"] = array("table" => "certificados_solicitud", "field" => "dep", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_certificados"] ) ) {
			$lookupTableLinks["tp_certificados"] = array();
		}
		if( !isset( $lookupTableLinks["tp_certificados"]["tp_certificados_anexos.certificado_id_fk"] )) {
			$lookupTableLinks["tp_certificados"]["tp_certificados_anexos.certificado_id_fk"] = array();
		}
		$lookupTableLinks["tp_certificados"]["tp_certificados_anexos.certificado_id_fk"]["edit"] = array("table" => "tp_certificados_anexos", "field" => "certificado_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_certificados"] ) ) {
			$lookupTableLinks["tp_certificados"] = array();
		}
		if( !isset( $lookupTableLinks["tp_certificados"]["certificados_tipo_q.certificado_id_fk"] )) {
			$lookupTableLinks["tp_certificados"]["certificados_tipo_q.certificado_id_fk"] = array();
		}
		$lookupTableLinks["tp_certificados"]["certificados_tipo_q.certificado_id_fk"]["edit"] = array("table" => "certificados_tipo_q", "field" => "certificado_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users"] ) ) {
			$lookupTableLinks["camerfirma_104_users"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users"]["token_tipo_q.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users"]["token_tipo_q.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users"]["token_tipo_q.ID_FK"]["edit"] = array("table" => "token_tipo_q", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_token"] ) ) {
			$lookupTableLinks["tp_token"] = array();
		}
		if( !isset( $lookupTableLinks["tp_token"]["token_tipo_q.tk_id_fk"] )) {
			$lookupTableLinks["tp_token"]["token_tipo_q.tk_id_fk"] = array();
		}
		$lookupTableLinks["tp_token"]["token_tipo_q.tk_id_fk"]["edit"] = array("table" => "token_tipo_q", "field" => "tk_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_0.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_0.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_0.ID_FK"]["edit"] = array("table" => "certificados_solicitud_tr_0", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_0.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_0.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_0.tipo_documento"]["edit"] = array("table" => "certificados_solicitud_tr_0", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_tr_0.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_0.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_0.municipio"]["edit"] = array("table" => "certificados_solicitud_tr_0", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_0.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_0.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_0.token_id"]["edit"] = array("table" => "certificados_solicitud_tr_0", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_0.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_0.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_0.cert_id"]["edit"] = array("table" => "certificados_solicitud_tr_0", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_0.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_0.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_0.vigencia"]["edit"] = array("table" => "certificados_solicitud_tr_0", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_tr_0.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_0.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_0.stage"]["edit"] = array("table" => "certificados_solicitud_tr_0", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_track.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_track.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_track.stage"]["edit"] = array("table" => "certificados_solicitud_track", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_1.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_1.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_1.ID_FK"]["edit"] = array("table" => "certificados_solicitud_tr_1", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_1.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_1.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_1.tipo_documento"]["edit"] = array("table" => "certificados_solicitud_tr_1", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_tr_1.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_1.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_1.municipio"]["edit"] = array("table" => "certificados_solicitud_tr_1", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_1.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_1.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_1.token_id"]["edit"] = array("table" => "certificados_solicitud_tr_1", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_1.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_1.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_1.cert_id"]["edit"] = array("table" => "certificados_solicitud_tr_1", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_1.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_1.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_1.vigencia"]["edit"] = array("table" => "certificados_solicitud_tr_1", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_tr_1.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_1.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_1.stage"]["edit"] = array("table" => "certificados_solicitud_tr_1", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_2.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_2.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_2.ID_FK"]["edit"] = array("table" => "certificados_solicitud_tr_2", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_2.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_2.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_2.tipo_documento"]["edit"] = array("table" => "certificados_solicitud_tr_2", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_tr_2.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_2.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_2.municipio"]["edit"] = array("table" => "certificados_solicitud_tr_2", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_2.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_2.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_2.token_id"]["edit"] = array("table" => "certificados_solicitud_tr_2", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_2.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_2.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_2.cert_id"]["edit"] = array("table" => "certificados_solicitud_tr_2", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_2.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_2.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_2.vigencia"]["edit"] = array("table" => "certificados_solicitud_tr_2", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_tr_2.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_2.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_2.stage"]["edit"] = array("table" => "certificados_solicitud_tr_2", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_3.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_3.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_3.ID_FK"]["edit"] = array("table" => "certificados_solicitud_tr_3", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_3.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_3.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_3.tipo_documento"]["edit"] = array("table" => "certificados_solicitud_tr_3", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_tr_3.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_3.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_3.municipio"]["edit"] = array("table" => "certificados_solicitud_tr_3", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_3.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_3.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_3.token_id"]["edit"] = array("table" => "certificados_solicitud_tr_3", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_3.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_3.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_3.cert_id"]["edit"] = array("table" => "certificados_solicitud_tr_3", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_3.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_3.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_3.vigencia"]["edit"] = array("table" => "certificados_solicitud_tr_3", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_tr_3.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_3.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_3.stage"]["edit"] = array("table" => "certificados_solicitud_tr_3", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_4.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_4.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_4.ID_FK"]["edit"] = array("table" => "certificados_solicitud_tr_4", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_4.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_4.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_4.tipo_documento"]["edit"] = array("table" => "certificados_solicitud_tr_4", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_tr_4.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_4.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_4.municipio"]["edit"] = array("table" => "certificados_solicitud_tr_4", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_4.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_4.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_4.token_id"]["edit"] = array("table" => "certificados_solicitud_tr_4", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_4.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_4.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_4.cert_id"]["edit"] = array("table" => "certificados_solicitud_tr_4", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_4.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_4.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_4.vigencia"]["edit"] = array("table" => "certificados_solicitud_tr_4", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_tr_4.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_4.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_4.stage"]["edit"] = array("table" => "certificados_solicitud_tr_4", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_5.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_5.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_5.ID_FK"]["edit"] = array("table" => "certificados_solicitud_tr_5", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_5.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_5.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_5.tipo_documento"]["edit"] = array("table" => "certificados_solicitud_tr_5", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_tr_5.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_5.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_5.municipio"]["edit"] = array("table" => "certificados_solicitud_tr_5", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_5.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_5.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_5.token_id"]["edit"] = array("table" => "certificados_solicitud_tr_5", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_5.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_5.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_5.cert_id"]["edit"] = array("table" => "certificados_solicitud_tr_5", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_5.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_5.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_5.vigencia"]["edit"] = array("table" => "certificados_solicitud_tr_5", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_tr_5.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_5.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_5.stage"]["edit"] = array("table" => "certificados_solicitud_tr_5", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_6.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_6.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_tr_6.ID_FK"]["edit"] = array("table" => "certificados_solicitud_tr_6", "field" => "ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_6.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_6.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_tr_6.tipo_documento"]["edit"] = array("table" => "certificados_solicitud_tr_6", "field" => "tipo_documento", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_tr_6.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_6.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_tr_6.municipio"]["edit"] = array("table" => "certificados_solicitud_tr_6", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_6.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_6.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_tr_6.token_id"]["edit"] = array("table" => "certificados_solicitud_tr_6", "field" => "token_id", "page" => "edit");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_6.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_6.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_tr_6.cert_id"]["edit"] = array("table" => "certificados_solicitud_tr_6", "field" => "cert_id", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_6.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_6.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_tr_6.vigencia"]["edit"] = array("table" => "certificados_solicitud_tr_6", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_tr_6.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_6.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_tr_6.stage"]["edit"] = array("table" => "certificados_solicitud_tr_6", "field" => "stage", "page" => "edit");
		if( !isset( $lookupTableLinks["tp_token"] ) ) {
			$lookupTableLinks["tp_token"] = array();
		}
		if( !isset( $lookupTableLinks["tp_token"]["q_group_tipotoken_chart.token_id"] )) {
			$lookupTableLinks["tp_token"]["q_group_tipotoken_chart.token_id"] = array();
		}
		$lookupTableLinks["tp_token"]["q_group_tipotoken_chart.token_id"]["search"] = array("table" => "q_group_tipotoken_chart", "field" => "token_id", "page" => "search");
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"] ) ) {
			$lookupTableLinks["camerfirma_104_users_q"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_report.ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_report.ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users_q"]["certificados_solicitud_report.ID_FK"]["search"] = array("table" => "certificados_solicitud Report", "field" => "ID_FK", "page" => "search");
		if( !isset( $lookupTableLinks["tp_tipodocident"] ) ) {
			$lookupTableLinks["tp_tipodocident"] = array();
		}
		if( !isset( $lookupTableLinks["tp_tipodocident"]["certificados_solicitud_report.tipo_documento"] )) {
			$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_report.tipo_documento"] = array();
		}
		$lookupTableLinks["tp_tipodocident"]["certificados_solicitud_report.tipo_documento"]["search"] = array("table" => "certificados_solicitud Report", "field" => "tipo_documento", "page" => "search");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_report.departamento"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_report.departamento"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_report.departamento"]["search"] = array("table" => "certificados_solicitud Report", "field" => "departamento", "page" => "search");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["certificados_solicitud_report.municipio"] )) {
			$lookupTableLinks["q_divipola"]["certificados_solicitud_report.municipio"] = array();
		}
		$lookupTableLinks["q_divipola"]["certificados_solicitud_report.municipio"]["search"] = array("table" => "certificados_solicitud Report", "field" => "municipio", "page" => "search");
		if( !isset( $lookupTableLinks["token_tipo_q"] ) ) {
			$lookupTableLinks["token_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["token_tipo_q"]["certificados_solicitud_report.token_id"] )) {
			$lookupTableLinks["token_tipo_q"]["certificados_solicitud_report.token_id"] = array();
		}
		$lookupTableLinks["token_tipo_q"]["certificados_solicitud_report.token_id"]["search"] = array("table" => "certificados_solicitud Report", "field" => "token_id", "page" => "search");
		if( !isset( $lookupTableLinks["certificados_tipo_q"] ) ) {
			$lookupTableLinks["certificados_tipo_q"] = array();
		}
		if( !isset( $lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_report.cert_id"] )) {
			$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_report.cert_id"] = array();
		}
		$lookupTableLinks["certificados_tipo_q"]["certificados_solicitud_report.cert_id"]["search"] = array("table" => "certificados_solicitud Report", "field" => "cert_id", "page" => "search");
		if( !isset( $lookupTableLinks["tp_vigencia"] ) ) {
			$lookupTableLinks["tp_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["tp_vigencia"]["certificados_solicitud_report.vigencia"] )) {
			$lookupTableLinks["tp_vigencia"]["certificados_solicitud_report.vigencia"] = array();
		}
		$lookupTableLinks["tp_vigencia"]["certificados_solicitud_report.vigencia"]["search"] = array("table" => "certificados_solicitud Report", "field" => "vigencia", "page" => "search");
		if( !isset( $lookupTableLinks["tp_stage"] ) ) {
			$lookupTableLinks["tp_stage"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage"]["certificados_solicitud_report.stage"] )) {
			$lookupTableLinks["tp_stage"]["certificados_solicitud_report.stage"] = array();
		}
		$lookupTableLinks["tp_stage"]["certificados_solicitud_report.stage"]["search"] = array("table" => "certificados_solicitud Report", "field" => "stage", "page" => "search");
		if( !isset( $lookupTableLinks["tp_stage_tk"] ) ) {
			$lookupTableLinks["tp_stage_tk"] = array();
		}
		if( !isset( $lookupTableLinks["tp_stage_tk"]["certificados_solicitud_report.stage_tk"] )) {
			$lookupTableLinks["tp_stage_tk"]["certificados_solicitud_report.stage_tk"] = array();
		}
		$lookupTableLinks["tp_stage_tk"]["certificados_solicitud_report.stage_tk"]["search"] = array("table" => "certificados_solicitud Report", "field" => "stage_tk", "page" => "search");
		if( !isset( $lookupTableLinks["camerfirma_104_users"] ) ) {
			$lookupTableLinks["camerfirma_104_users"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users"]["dependencia_tipo.USER_ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users"]["dependencia_tipo.USER_ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users"]["dependencia_tipo.USER_ID_FK"]["edit"] = array("table" => "dependencia_tipo", "field" => "USER_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["camerfirma_104_users"] ) ) {
			$lookupTableLinks["camerfirma_104_users"] = array();
		}
		if( !isset( $lookupTableLinks["camerfirma_104_users"]["dependencia_tipo_user.USER_ID_FK"] )) {
			$lookupTableLinks["camerfirma_104_users"]["dependencia_tipo_user.USER_ID_FK"] = array();
		}
		$lookupTableLinks["camerfirma_104_users"]["dependencia_tipo_user.USER_ID_FK"]["edit"] = array("table" => "dependencia_tipo_user", "field" => "USER_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["dependencia_tipo_user.DPTO"] )) {
			$lookupTableLinks["q_divipola"]["dependencia_tipo_user.DPTO"] = array();
		}
		$lookupTableLinks["q_divipola"]["dependencia_tipo_user.DPTO"]["edit"] = array("table" => "dependencia_tipo_user", "field" => "DPTO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["dependencia_tipo_user.MUN"] )) {
			$lookupTableLinks["q_divipola"]["dependencia_tipo_user.MUN"] = array();
		}
		$lookupTableLinks["q_divipola"]["dependencia_tipo_user.MUN"]["edit"] = array("table" => "dependencia_tipo_user", "field" => "MUN", "page" => "edit");
}

?>