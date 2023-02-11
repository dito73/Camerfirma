<?php
$tdatacertificados_solicitud_report = array();
$tdatacertificados_solicitud_report[".searchableFields"] = array();
$tdatacertificados_solicitud_report[".ShortName"] = "certificados_solicitud_report";
$tdatacertificados_solicitud_report[".OwnerID"] = "ID_FK";
$tdatacertificados_solicitud_report[".OriginalTable"] = "certificados_solicitud";


$tdatacertificados_solicitud_report[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatacertificados_solicitud_report[".originalPagesByType"] = $tdatacertificados_solicitud_report[".pagesByType"];
$tdatacertificados_solicitud_report[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatacertificados_solicitud_report[".originalPages"] = $tdatacertificados_solicitud_report[".pages"];
$tdatacertificados_solicitud_report[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatacertificados_solicitud_report[".originalDefaultPages"] = $tdatacertificados_solicitud_report[".defaultPages"];

//	field labels
$fieldLabelscertificados_solicitud_report = array();
$fieldToolTipscertificados_solicitud_report = array();
$pageTitlescertificados_solicitud_report = array();
$placeHolderscertificados_solicitud_report = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscertificados_solicitud_report["Spanish"] = array();
	$fieldToolTipscertificados_solicitud_report["Spanish"] = array();
	$placeHolderscertificados_solicitud_report["Spanish"] = array();
	$pageTitlescertificados_solicitud_report["Spanish"] = array();
	$fieldLabelscertificados_solicitud_report["Spanish"]["sol_id"] = "Sol Id";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["sol_id"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["sol_id"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["sol_ticket"] = "Sol Ticket";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["sol_ticket"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["sol_ticket"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["ID_FK"] = "ID FK";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["ID_FK"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["ID_FK"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["nombre"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["nombre"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["primer_apellido"] = "Primer Apellido";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["primer_apellido"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["primer_apellido"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["segundo_apellido"] = "Segundo Apellido";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["segundo_apellido"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["segundo_apellido"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["tipo_documento"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["tipo_documento"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["numero_documento"] = "Número Documento";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["numero_documento"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["numero_documento"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["telefono"] = "Teléfono";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["telefono"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["telefono"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["departamento"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["departamento"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["municipio"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["municipio"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["direccion"] = "Dirección postal";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["direccion"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["direccion"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["cargo"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["cargo"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["email_contacto"] = "Email Contacto";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["email_contacto"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["email_contacto"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["email_contacto_c"] = "Email Contacto C";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["email_contacto_c"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["email_contacto_c"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["token_id"] = "Tipo de token";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["token_id"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["token_id"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["cert_id"] = "Tipo certificado";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["cert_id"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["cert_id"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["vigencia"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["vigencia"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["stage"] = "Stage";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["stage"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["stage"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["stage_tk"] = "Estado token";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["stage_tk"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["stage_tk"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["doc_acta"] = "Doc Acta";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["doc_acta"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["doc_acta"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["doc_carta"] = "Doc Carta";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["doc_carta"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["doc_carta"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["doc_certificado"] = "Doc Certificado";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["doc_certificado"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["doc_certificado"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["doc_poder"] = "Doc Poder";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["doc_poder"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["doc_poder"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["doc_rut"] = "Doc Rut";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["doc_rut"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["doc_rut"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["doc_cedula"] = "Doc Cedula";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["doc_cedula"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["doc_cedula"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["doc_escritura"] = "Doc Escritura";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["doc_escritura"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["doc_escritura"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["track_msj"] = "Track Msj";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["track_msj"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["track_msj"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["track_usr"] = "Track Usr";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["track_usr"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["track_usr"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["track_date"] = "Track Date";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["track_date"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["track_date"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["tk_fecha_i"] = "Tk Fecha I";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["tk_fecha_i"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["tk_fecha_i"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["tl_fecha_f"] = "Fecha vencimineto";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["tl_fecha_f"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["tl_fecha_f"] = "";
	$fieldLabelscertificados_solicitud_report["Spanish"]["dep"] = "Dep";
	$fieldToolTipscertificados_solicitud_report["Spanish"]["dep"] = "";
	$placeHolderscertificados_solicitud_report["Spanish"]["dep"] = "";
	if (count($fieldToolTipscertificados_solicitud_report["Spanish"]))
		$tdatacertificados_solicitud_report[".isUseToolTips"] = true;
}


	$tdatacertificados_solicitud_report[".NCSearch"] = true;



$tdatacertificados_solicitud_report[".shortTableName"] = "certificados_solicitud_report";
$tdatacertificados_solicitud_report[".nSecOptions"] = 1;

$tdatacertificados_solicitud_report[".mainTableOwnerID"] = "ID_FK";
$tdatacertificados_solicitud_report[".entityType"] = 2;
$tdatacertificados_solicitud_report[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacertificados_solicitud_report[".strOriginalTableName"] = "certificados_solicitud";

	



$tdatacertificados_solicitud_report[".showAddInPopup"] = false;

$tdatacertificados_solicitud_report[".showEditInPopup"] = false;

$tdatacertificados_solicitud_report[".showViewInPopup"] = false;

$tdatacertificados_solicitud_report[".listAjax"] = false;
//	temporary
//$tdatacertificados_solicitud_report[".listAjax"] = false;

	$tdatacertificados_solicitud_report[".audit"] = false;

	$tdatacertificados_solicitud_report[".locking"] = false;


$pages = $tdatacertificados_solicitud_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacertificados_solicitud_report[".edit"] = true;
	$tdatacertificados_solicitud_report[".afterEditAction"] = 1;
	$tdatacertificados_solicitud_report[".closePopupAfterEdit"] = 1;
	$tdatacertificados_solicitud_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacertificados_solicitud_report[".add"] = true;
$tdatacertificados_solicitud_report[".afterAddAction"] = 1;
$tdatacertificados_solicitud_report[".closePopupAfterAdd"] = 1;
$tdatacertificados_solicitud_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacertificados_solicitud_report[".list"] = true;
}



$tdatacertificados_solicitud_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacertificados_solicitud_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacertificados_solicitud_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacertificados_solicitud_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacertificados_solicitud_report[".printFriendly"] = true;
}



$tdatacertificados_solicitud_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacertificados_solicitud_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacertificados_solicitud_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacertificados_solicitud_report[".isUseAjaxSuggest"] = true;





$tdatacertificados_solicitud_report[".ajaxCodeSnippetAdded"] = false;

$tdatacertificados_solicitud_report[".buttonsAdded"] = false;

$tdatacertificados_solicitud_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacertificados_solicitud_report[".isUseTimeForSearch"] = false;


$tdatacertificados_solicitud_report[".badgeColor"] = "DAA520";


$tdatacertificados_solicitud_report[".allSearchFields"] = array();
$tdatacertificados_solicitud_report[".filterFields"] = array();
$tdatacertificados_solicitud_report[".requiredSearchFields"] = array();

$tdatacertificados_solicitud_report[".googleLikeFields"] = array();
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "sol_id";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "sol_ticket";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "ID_FK";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "nombre";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "primer_apellido";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "segundo_apellido";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "tipo_documento";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "numero_documento";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "telefono";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "departamento";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "municipio";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "direccion";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "cargo";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "dep";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "email_contacto";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "email_contacto_c";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "token_id";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "cert_id";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "vigencia";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "stage";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "stage_tk";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "doc_acta";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "doc_carta";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "doc_certificado";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "doc_poder";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "doc_rut";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "doc_cedula";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "doc_escritura";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "track_msj";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "track_usr";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "track_date";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "tk_fecha_i";
$tdatacertificados_solicitud_report[".googleLikeFields"][] = "tl_fecha_f";



$tdatacertificados_solicitud_report[".tableType"] = "report";

$tdatacertificados_solicitud_report[".printerPageOrientation"] = 0;
$tdatacertificados_solicitud_report[".nPrinterPageScale"] = 100;

$tdatacertificados_solicitud_report[".nPrinterSplitRecords"] = 40;

$tdatacertificados_solicitud_report[".geocodingEnabled"] = false;

//report settings

$tdatacertificados_solicitud_report[".reportPrintGroupsPerPage"] = 3;
$tdatacertificados_solicitud_report[".reportPrintRecordsPerPage"] = 40;

$tdatacertificados_solicitud_report[".pageSizeGroups"] = 5;
$tdatacertificados_solicitud_report[".pageSizeRecords"] = 20;


//end of report settings



$tdatacertificados_solicitud_report[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatacertificados_solicitud_report[".strOrderBy"] = $tstrOrderBy;

$tdatacertificados_solicitud_report[".orderindexes"] = array();


$tdatacertificados_solicitud_report[".sqlHead"] = "SELECT sol_id,  	sol_ticket,  	ID_FK,  	nombre,  	primer_apellido,  	segundo_apellido,  	tipo_documento,  	numero_documento,  	telefono,  	departamento,  	municipio,  	direccion,  	cargo,  	dep,  	email_contacto,  	email_contacto_c,  	token_id,  	cert_id,  	vigencia,  	stage,  	stage_tk,  	doc_acta,  	doc_carta,  	doc_certificado,  	doc_poder,  	doc_rut,  	doc_cedula,  	doc_escritura,  	track_msj,  	track_usr,  	track_date,  	tk_fecha_i,  	tl_fecha_f";
$tdatacertificados_solicitud_report[".sqlFrom"] = "FROM certificados_solicitud";
$tdatacertificados_solicitud_report[".sqlWhereExpr"] = "";
$tdatacertificados_solicitud_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificados_solicitud_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificados_solicitud_report[".arrGroupsPerPage"] = $arrGPP;

$tdatacertificados_solicitud_report[".highlightSearchResults"] = true;

$tableKeyscertificados_solicitud_report = array();
$tableKeyscertificados_solicitud_report[] = "sol_id";
$tdatacertificados_solicitud_report[".Keys"] = $tableKeyscertificados_solicitud_report;


$tdatacertificados_solicitud_report[".hideMobileList"] = array();




//	sol_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sol_id";
	$fdata["GoodName"] = "sol_id";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","sol_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "sol_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["sol_id"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "sol_id";
//	sol_ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sol_ticket";
	$fdata["GoodName"] = "sol_ticket";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","sol_ticket");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_ticket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_ticket";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["sol_ticket"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "sol_ticket";
//	ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ID_FK";
	$fdata["GoodName"] = "ID_FK";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_FK";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "camerfirma_104_users_q";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"sol_ticket", 'lookupF'=>"username");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "token_id";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cert_id";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["ID_FK"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "ID_FK";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["nombre"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "nombre";
//	primer_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "primer_apellido";
	$fdata["GoodName"] = "primer_apellido";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","primer_apellido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "primer_apellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "primer_apellido";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["primer_apellido"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "primer_apellido";
//	segundo_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "segundo_apellido";
	$fdata["GoodName"] = "segundo_apellido";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","segundo_apellido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "segundo_apellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "segundo_apellido";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["segundo_apellido"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "segundo_apellido";
//	tipo_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_documento";
	$fdata["GoodName"] = "tipo_documento";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","tipo_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_documento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tp_tipodocident";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tdi_dstipdoc_b";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "tdi_dstipdoc_b";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["tipo_documento"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "tipo_documento";
//	numero_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "numero_documento";
	$fdata["GoodName"] = "numero_documento";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","numero_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_documento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["numero_documento"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "numero_documento";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["telefono"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "telefono";
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "departamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_divipola";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CODDPTO";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOMDPTO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "municipio";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "sol_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["departamento"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "departamento";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_divipola";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"departamento", 'lookupF'=>"NOMDPTO");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "departamento", "lookup" => "CODDPTO" );

	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "sol_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

		$fdata["parentFilterField"] = "departamento";


	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["municipio"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "municipio";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["direccion"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "direccion";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["cargo"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "cargo";
//	dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "dep";
	$fdata["GoodName"] = "dep";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["dep"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "dep";
//	email_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "email_contacto";
	$fdata["GoodName"] = "email_contacto";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","email_contacto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_contacto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_contacto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["email_contacto"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "email_contacto";
//	email_contacto_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "email_contacto_c";
	$fdata["GoodName"] = "email_contacto_c";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","email_contacto_c");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_contacto_c";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_contacto_c";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["email_contacto_c"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "email_contacto_c";
//	token_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "token_id";
	$fdata["GoodName"] = "token_id";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","token_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "token_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "token_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "token_tipo_q";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tk_id_fk";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tk_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ID_FK", "lookup" => "ID_FK" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "sol_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["token_id"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "token_id";
//	cert_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cert_id";
	$fdata["GoodName"] = "cert_id";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","cert_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cert_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "certificados_tipo_q";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "certificado_id_fk";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "certificado_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ID_FK", "lookup" => "ID_FK" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "sol_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["cert_id"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "cert_id";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","vigencia");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tp_vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "vigencia_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "vigencia";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["vigencia"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "vigencia";
//	stage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "stage";
	$fdata["GoodName"] = "stage";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","stage");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "stage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stage";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tp_stage";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stage_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "stage";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["stage"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "stage";
//	stage_tk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "stage_tk";
	$fdata["GoodName"] = "stage_tk";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","stage_tk");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "stage_tk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stage_tk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tp_stage_tk";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stagetk_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "stagetk";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["stage_tk"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "stage_tk";
//	doc_acta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "doc_acta";
	$fdata["GoodName"] = "doc_acta";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","doc_acta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_acta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_acta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["doc_acta"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "doc_acta";
//	doc_carta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "doc_carta";
	$fdata["GoodName"] = "doc_carta";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","doc_carta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_carta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_carta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["doc_carta"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "doc_carta";
//	doc_certificado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "doc_certificado";
	$fdata["GoodName"] = "doc_certificado";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","doc_certificado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_certificado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_certificado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["doc_certificado"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "doc_certificado";
//	doc_poder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "doc_poder";
	$fdata["GoodName"] = "doc_poder";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","doc_poder");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_poder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_poder";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["doc_poder"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "doc_poder";
//	doc_rut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "doc_rut";
	$fdata["GoodName"] = "doc_rut";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","doc_rut");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_rut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_rut";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["doc_rut"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "doc_rut";
//	doc_cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "doc_cedula";
	$fdata["GoodName"] = "doc_cedula";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","doc_cedula");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_cedula";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["doc_cedula"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "doc_cedula";
//	doc_escritura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "doc_escritura";
	$fdata["GoodName"] = "doc_escritura";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","doc_escritura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_escritura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_escritura";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["doc_escritura"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "doc_escritura";
//	track_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "track_msj";
	$fdata["GoodName"] = "track_msj";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","track_msj");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "track_msj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_msj";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["track_msj"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "track_msj";
//	track_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "track_usr";
	$fdata["GoodName"] = "track_usr";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","track_usr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "track_usr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["track_usr"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "track_usr";
//	track_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "track_date";
	$fdata["GoodName"] = "track_date";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","track_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "track_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["track_date"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "track_date";
//	tk_fecha_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "tk_fecha_i";
	$fdata["GoodName"] = "tk_fecha_i";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","tk_fecha_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "tk_fecha_i";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tk_fecha_i";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["tk_fecha_i"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "tk_fecha_i";
//	tl_fecha_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "tl_fecha_f";
	$fdata["GoodName"] = "tl_fecha_f";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_Report","tl_fecha_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "tl_fecha_f";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tl_fecha_f";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "sol_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud_report["tl_fecha_f"] = $fdata;
		$tdatacertificados_solicitud_report[".searchableFields"][] = "tl_fecha_f";


$tables_data["certificados_solicitud Report"]=&$tdatacertificados_solicitud_report;
$field_labels["certificados_solicitud_Report"] = &$fieldLabelscertificados_solicitud_report;
$fieldToolTips["certificados_solicitud_Report"] = &$fieldToolTipscertificados_solicitud_report;
$placeHolders["certificados_solicitud_Report"] = &$placeHolderscertificados_solicitud_report;
$page_titles["certificados_solicitud_Report"] = &$pageTitlescertificados_solicitud_report;


changeTextControlsToDate( "certificados_solicitud Report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["certificados_solicitud Report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["certificados_solicitud Report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_certificados_solicitud_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sol_id,  	sol_ticket,  	ID_FK,  	nombre,  	primer_apellido,  	segundo_apellido,  	tipo_documento,  	numero_documento,  	telefono,  	departamento,  	municipio,  	direccion,  	cargo,  	dep,  	email_contacto,  	email_contacto_c,  	token_id,  	cert_id,  	vigencia,  	stage,  	stage_tk,  	doc_acta,  	doc_carta,  	doc_certificado,  	doc_poder,  	doc_rut,  	doc_cedula,  	doc_escritura,  	track_msj,  	track_usr,  	track_date,  	tk_fecha_i,  	tl_fecha_f";
$proto0["m_strFrom"] = "FROM certificados_solicitud";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_id",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto6["m_sql"] = "sol_id";
$proto6["m_srcTableName"] = "certificados_solicitud Report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_ticket",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto8["m_sql"] = "sol_ticket";
$proto8["m_srcTableName"] = "certificados_solicitud Report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_FK",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto10["m_sql"] = "ID_FK";
$proto10["m_srcTableName"] = "certificados_solicitud Report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto12["m_sql"] = "nombre";
$proto12["m_srcTableName"] = "certificados_solicitud Report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_apellido",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto14["m_sql"] = "primer_apellido";
$proto14["m_srcTableName"] = "certificados_solicitud Report";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "segundo_apellido",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto16["m_sql"] = "segundo_apellido";
$proto16["m_srcTableName"] = "certificados_solicitud Report";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_documento",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto18["m_sql"] = "tipo_documento";
$proto18["m_srcTableName"] = "certificados_solicitud Report";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_documento",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto20["m_sql"] = "numero_documento";
$proto20["m_srcTableName"] = "certificados_solicitud Report";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto22["m_sql"] = "telefono";
$proto22["m_srcTableName"] = "certificados_solicitud Report";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto24["m_sql"] = "departamento";
$proto24["m_srcTableName"] = "certificados_solicitud Report";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto26["m_sql"] = "municipio";
$proto26["m_srcTableName"] = "certificados_solicitud Report";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto28["m_sql"] = "direccion";
$proto28["m_srcTableName"] = "certificados_solicitud Report";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto30["m_sql"] = "cargo";
$proto30["m_srcTableName"] = "certificados_solicitud Report";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "dep",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto32["m_sql"] = "dep";
$proto32["m_srcTableName"] = "certificados_solicitud Report";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "email_contacto",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto34["m_sql"] = "email_contacto";
$proto34["m_srcTableName"] = "certificados_solicitud Report";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "email_contacto_c",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto36["m_sql"] = "email_contacto_c";
$proto36["m_srcTableName"] = "certificados_solicitud Report";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "token_id",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto38["m_sql"] = "token_id";
$proto38["m_srcTableName"] = "certificados_solicitud Report";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_id",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto40["m_sql"] = "cert_id";
$proto40["m_srcTableName"] = "certificados_solicitud Report";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto42["m_sql"] = "vigencia";
$proto42["m_srcTableName"] = "certificados_solicitud Report";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "stage",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto44["m_sql"] = "stage";
$proto44["m_srcTableName"] = "certificados_solicitud Report";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "stage_tk",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto46["m_sql"] = "stage_tk";
$proto46["m_srcTableName"] = "certificados_solicitud Report";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_acta",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto48["m_sql"] = "doc_acta";
$proto48["m_srcTableName"] = "certificados_solicitud Report";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_carta",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto50["m_sql"] = "doc_carta";
$proto50["m_srcTableName"] = "certificados_solicitud Report";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_certificado",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto52["m_sql"] = "doc_certificado";
$proto52["m_srcTableName"] = "certificados_solicitud Report";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_poder",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto54["m_sql"] = "doc_poder";
$proto54["m_srcTableName"] = "certificados_solicitud Report";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_rut",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto56["m_sql"] = "doc_rut";
$proto56["m_srcTableName"] = "certificados_solicitud Report";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_cedula",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto58["m_sql"] = "doc_cedula";
$proto58["m_srcTableName"] = "certificados_solicitud Report";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_escritura",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto60["m_sql"] = "doc_escritura";
$proto60["m_srcTableName"] = "certificados_solicitud Report";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "track_msj",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto62["m_sql"] = "track_msj";
$proto62["m_srcTableName"] = "certificados_solicitud Report";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "track_usr",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto64["m_sql"] = "track_usr";
$proto64["m_srcTableName"] = "certificados_solicitud Report";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "track_date",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto66["m_sql"] = "track_date";
$proto66["m_srcTableName"] = "certificados_solicitud Report";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "tk_fecha_i",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto68["m_sql"] = "tk_fecha_i";
$proto68["m_srcTableName"] = "certificados_solicitud Report";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "tl_fecha_f",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud Report"
));

$proto70["m_sql"] = "tl_fecha_f";
$proto70["m_srcTableName"] = "certificados_solicitud Report";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "certificados_solicitud";
$proto73["m_srcTableName"] = "certificados_solicitud Report";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "sol_id";
$proto73["m_columns"][] = "sol_ticket";
$proto73["m_columns"][] = "ID_FK";
$proto73["m_columns"][] = "nombre";
$proto73["m_columns"][] = "primer_apellido";
$proto73["m_columns"][] = "segundo_apellido";
$proto73["m_columns"][] = "tipo_documento";
$proto73["m_columns"][] = "numero_documento";
$proto73["m_columns"][] = "telefono";
$proto73["m_columns"][] = "departamento";
$proto73["m_columns"][] = "municipio";
$proto73["m_columns"][] = "direccion";
$proto73["m_columns"][] = "cargo";
$proto73["m_columns"][] = "dep";
$proto73["m_columns"][] = "email_contacto";
$proto73["m_columns"][] = "email_contacto_c";
$proto73["m_columns"][] = "token_id";
$proto73["m_columns"][] = "cert_id";
$proto73["m_columns"][] = "vigencia";
$proto73["m_columns"][] = "stage";
$proto73["m_columns"][] = "stage_tk";
$proto73["m_columns"][] = "doc_acta";
$proto73["m_columns"][] = "doc_carta";
$proto73["m_columns"][] = "doc_certificado";
$proto73["m_columns"][] = "doc_poder";
$proto73["m_columns"][] = "doc_rut";
$proto73["m_columns"][] = "doc_cedula";
$proto73["m_columns"][] = "doc_escritura";
$proto73["m_columns"][] = "track_msj";
$proto73["m_columns"][] = "track_usr";
$proto73["m_columns"][] = "track_date";
$proto73["m_columns"][] = "tk_fecha_i";
$proto73["m_columns"][] = "tl_fecha_f";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "certificados_solicitud";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "certificados_solicitud Report";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="certificados_solicitud Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_certificados_solicitud_report = createSqlQuery_certificados_solicitud_report();


	
		;

																																	

$tdatacertificados_solicitud_report[".sqlquery"] = $queryData_certificados_solicitud_report;



$tdatacertificados_solicitud_report[".hasEvents"] = false;

?>