<?php
$tdatacertificados_solicitud = array();
$tdatacertificados_solicitud[".searchableFields"] = array();
$tdatacertificados_solicitud[".ShortName"] = "certificados_solicitud";
$tdatacertificados_solicitud[".OwnerID"] = "ID_FK";
$tdatacertificados_solicitud[".OriginalTable"] = "certificados_solicitud";


$tdatacertificados_solicitud[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacertificados_solicitud[".originalPagesByType"] = $tdatacertificados_solicitud[".pagesByType"];
$tdatacertificados_solicitud[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacertificados_solicitud[".originalPages"] = $tdatacertificados_solicitud[".pages"];
$tdatacertificados_solicitud[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacertificados_solicitud[".originalDefaultPages"] = $tdatacertificados_solicitud[".defaultPages"];

//	field labels
$fieldLabelscertificados_solicitud = array();
$fieldToolTipscertificados_solicitud = array();
$pageTitlescertificados_solicitud = array();
$placeHolderscertificados_solicitud = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscertificados_solicitud["Spanish"] = array();
	$fieldToolTipscertificados_solicitud["Spanish"] = array();
	$placeHolderscertificados_solicitud["Spanish"] = array();
	$pageTitlescertificados_solicitud["Spanish"] = array();
	$fieldLabelscertificados_solicitud["Spanish"]["sol_id"] = "Radicado";
	$fieldToolTipscertificados_solicitud["Spanish"]["sol_id"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["sol_id"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["ID_FK"] = "C??digo de usuario";
	$fieldToolTipscertificados_solicitud["Spanish"]["ID_FK"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["ID_FK"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscertificados_solicitud["Spanish"]["nombre"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["nombre"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["primer_apellido"] = "Primer Apellido";
	$fieldToolTipscertificados_solicitud["Spanish"]["primer_apellido"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["primer_apellido"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["segundo_apellido"] = "Segundo Apellido";
	$fieldToolTipscertificados_solicitud["Spanish"]["segundo_apellido"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["segundo_apellido"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["tipo_documento"] = "Tipo Documento";
	$fieldToolTipscertificados_solicitud["Spanish"]["tipo_documento"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["tipo_documento"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["numero_documento"] = "N??mero Documento";
	$fieldToolTipscertificados_solicitud["Spanish"]["numero_documento"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["numero_documento"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["telefono"] = "Tel??fono";
	$fieldToolTipscertificados_solicitud["Spanish"]["telefono"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["telefono"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipscertificados_solicitud["Spanish"]["departamento"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["departamento"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipscertificados_solicitud["Spanish"]["municipio"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["municipio"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["direccion"] = "Direcci??n";
	$fieldToolTipscertificados_solicitud["Spanish"]["direccion"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["direccion"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipscertificados_solicitud["Spanish"]["cargo"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["cargo"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["email_contacto"] = "Email Contacto";
	$fieldToolTipscertificados_solicitud["Spanish"]["email_contacto"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["email_contacto"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["email_contacto_c"] = "Email Contacto";
	$fieldToolTipscertificados_solicitud["Spanish"]["email_contacto_c"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["email_contacto_c"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["token_id"] = "Token solicitado";
	$fieldToolTipscertificados_solicitud["Spanish"]["token_id"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["token_id"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["sol_ticket"] = "NIT";
	$fieldToolTipscertificados_solicitud["Spanish"]["sol_ticket"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["sol_ticket"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["cert_id"] = "Clase de certificado";
	$fieldToolTipscertificados_solicitud["Spanish"]["cert_id"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["cert_id"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["vigencia"] = "Vigencia del token";
	$fieldToolTipscertificados_solicitud["Spanish"]["vigencia"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["vigencia"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["stage"] = "Estado de solicitud";
	$fieldToolTipscertificados_solicitud["Spanish"]["stage"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["stage"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["stage_tk"] = "Estado de certificado";
	$fieldToolTipscertificados_solicitud["Spanish"]["stage_tk"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["stage_tk"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["doc_acta"] = "Acta";
	$fieldToolTipscertificados_solicitud["Spanish"]["doc_acta"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["doc_acta"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["doc_carta"] = "Carta";
	$fieldToolTipscertificados_solicitud["Spanish"]["doc_carta"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["doc_carta"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["doc_certificado"] = "Certificado";
	$fieldToolTipscertificados_solicitud["Spanish"]["doc_certificado"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["doc_certificado"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["doc_poder"] = "Poder";
	$fieldToolTipscertificados_solicitud["Spanish"]["doc_poder"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["doc_poder"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["doc_rut"] = "Rut";
	$fieldToolTipscertificados_solicitud["Spanish"]["doc_rut"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["doc_rut"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["doc_cedula"] = "Cedula";
	$fieldToolTipscertificados_solicitud["Spanish"]["doc_cedula"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["doc_cedula"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["doc_escritura"] = "Escritura";
	$fieldToolTipscertificados_solicitud["Spanish"]["doc_escritura"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["doc_escritura"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["tk_fecha_i"] = "Fecha de incio";
	$fieldToolTipscertificados_solicitud["Spanish"]["tk_fecha_i"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["tk_fecha_i"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["tl_fecha_f"] = "Fecha vencimiento";
	$fieldToolTipscertificados_solicitud["Spanish"]["tl_fecha_f"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["tl_fecha_f"] = "";
	$fieldLabelscertificados_solicitud["Spanish"]["dep"] = "Sede | Dependencia";
	$fieldToolTipscertificados_solicitud["Spanish"]["dep"] = "";
	$placeHolderscertificados_solicitud["Spanish"]["dep"] = "";
	$pageTitlescertificados_solicitud["Spanish"]["add"] = "Solicitar nuevo certificado";
	if (count($fieldToolTipscertificados_solicitud["Spanish"]))
		$tdatacertificados_solicitud[".isUseToolTips"] = true;
}


	$tdatacertificados_solicitud[".NCSearch"] = true;



$tdatacertificados_solicitud[".shortTableName"] = "certificados_solicitud";
$tdatacertificados_solicitud[".nSecOptions"] = 1;

$tdatacertificados_solicitud[".mainTableOwnerID"] = "ID_FK";
$tdatacertificados_solicitud[".entityType"] = 0;
$tdatacertificados_solicitud[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacertificados_solicitud[".strOriginalTableName"] = "certificados_solicitud";

	



$tdatacertificados_solicitud[".showAddInPopup"] = false;

$tdatacertificados_solicitud[".showEditInPopup"] = false;

$tdatacertificados_solicitud[".showViewInPopup"] = false;

$tdatacertificados_solicitud[".listAjax"] = false;
//	temporary
//$tdatacertificados_solicitud[".listAjax"] = false;

	$tdatacertificados_solicitud[".audit"] = true;

	$tdatacertificados_solicitud[".locking"] = true;


$pages = $tdatacertificados_solicitud[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacertificados_solicitud[".edit"] = true;
	$tdatacertificados_solicitud[".afterEditAction"] = 1;
	$tdatacertificados_solicitud[".closePopupAfterEdit"] = 1;
	$tdatacertificados_solicitud[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacertificados_solicitud[".add"] = true;
$tdatacertificados_solicitud[".afterAddAction"] = 0;
$tdatacertificados_solicitud[".closePopupAfterAdd"] = 1;
$tdatacertificados_solicitud[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatacertificados_solicitud[".list"] = true;
}



$tdatacertificados_solicitud[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacertificados_solicitud[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacertificados_solicitud[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacertificados_solicitud[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacertificados_solicitud[".printFriendly"] = true;
}



$tdatacertificados_solicitud[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacertificados_solicitud[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacertificados_solicitud[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacertificados_solicitud[".isUseAjaxSuggest"] = true;





$tdatacertificados_solicitud[".ajaxCodeSnippetAdded"] = false;

$tdatacertificados_solicitud[".buttonsAdded"] = false;

$tdatacertificados_solicitud[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacertificados_solicitud[".isUseTimeForSearch"] = false;


$tdatacertificados_solicitud[".badgeColor"] = "6B8E23";


$tdatacertificados_solicitud[".allSearchFields"] = array();
$tdatacertificados_solicitud[".filterFields"] = array();
$tdatacertificados_solicitud[".requiredSearchFields"] = array();

$tdatacertificados_solicitud[".googleLikeFields"] = array();
$tdatacertificados_solicitud[".googleLikeFields"][] = "sol_id";
$tdatacertificados_solicitud[".googleLikeFields"][] = "ID_FK";
$tdatacertificados_solicitud[".googleLikeFields"][] = "sol_ticket";
$tdatacertificados_solicitud[".googleLikeFields"][] = "nombre";
$tdatacertificados_solicitud[".googleLikeFields"][] = "primer_apellido";
$tdatacertificados_solicitud[".googleLikeFields"][] = "segundo_apellido";
$tdatacertificados_solicitud[".googleLikeFields"][] = "tipo_documento";
$tdatacertificados_solicitud[".googleLikeFields"][] = "numero_documento";
$tdatacertificados_solicitud[".googleLikeFields"][] = "telefono";
$tdatacertificados_solicitud[".googleLikeFields"][] = "departamento";
$tdatacertificados_solicitud[".googleLikeFields"][] = "municipio";
$tdatacertificados_solicitud[".googleLikeFields"][] = "direccion";
$tdatacertificados_solicitud[".googleLikeFields"][] = "cargo";
$tdatacertificados_solicitud[".googleLikeFields"][] = "email_contacto";
$tdatacertificados_solicitud[".googleLikeFields"][] = "email_contacto_c";
$tdatacertificados_solicitud[".googleLikeFields"][] = "token_id";
$tdatacertificados_solicitud[".googleLikeFields"][] = "cert_id";
$tdatacertificados_solicitud[".googleLikeFields"][] = "vigencia";
$tdatacertificados_solicitud[".googleLikeFields"][] = "stage";
$tdatacertificados_solicitud[".googleLikeFields"][] = "stage_tk";
$tdatacertificados_solicitud[".googleLikeFields"][] = "doc_acta";
$tdatacertificados_solicitud[".googleLikeFields"][] = "doc_carta";
$tdatacertificados_solicitud[".googleLikeFields"][] = "doc_certificado";
$tdatacertificados_solicitud[".googleLikeFields"][] = "doc_poder";
$tdatacertificados_solicitud[".googleLikeFields"][] = "doc_rut";
$tdatacertificados_solicitud[".googleLikeFields"][] = "doc_cedula";
$tdatacertificados_solicitud[".googleLikeFields"][] = "doc_escritura";
$tdatacertificados_solicitud[".googleLikeFields"][] = "tk_fecha_i";
$tdatacertificados_solicitud[".googleLikeFields"][] = "tl_fecha_f";
$tdatacertificados_solicitud[".googleLikeFields"][] = "dep";



$tdatacertificados_solicitud[".tableType"] = "list";

$tdatacertificados_solicitud[".printerPageOrientation"] = 0;
$tdatacertificados_solicitud[".nPrinterPageScale"] = 100;

$tdatacertificados_solicitud[".nPrinterSplitRecords"] = 40;

$tdatacertificados_solicitud[".geocodingEnabled"] = false;







$tdatacertificados_solicitud[".noRecordsFirstPage"] = true;



$tdatacertificados_solicitud[".pageSize"] = 20;

$tdatacertificados_solicitud[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacertificados_solicitud[".strOrderBy"] = $tstrOrderBy;

$tdatacertificados_solicitud[".orderindexes"] = array();


$tdatacertificados_solicitud[".sqlHead"] = "SELECT sol_id,  ID_FK,  sol_ticket,  nombre,  primer_apellido,  segundo_apellido,  tipo_documento,  numero_documento,  telefono,  departamento,  municipio,  direccion,  cargo,  email_contacto,  email_contacto_c,  token_id,  cert_id,  vigencia,  stage,  stage_tk,  doc_acta,  doc_carta,  doc_certificado,  doc_poder,  doc_rut,  doc_cedula,  doc_escritura,  tk_fecha_i,  tl_fecha_f,  dep";
$tdatacertificados_solicitud[".sqlFrom"] = "FROM certificados_solicitud";
$tdatacertificados_solicitud[".sqlWhereExpr"] = "";
$tdatacertificados_solicitud[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificados_solicitud[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificados_solicitud[".arrGroupsPerPage"] = $arrGPP;

$tdatacertificados_solicitud[".highlightSearchResults"] = true;

$tableKeyscertificados_solicitud = array();
$tableKeyscertificados_solicitud[] = "sol_id";
$tdatacertificados_solicitud[".Keys"] = $tableKeyscertificados_solicitud;


$tdatacertificados_solicitud[".hideMobileList"] = array();




//	sol_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sol_id";
	$fdata["GoodName"] = "sol_id";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","sol_id");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["sol_id"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "sol_id";
//	ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_FK";
	$fdata["GoodName"] = "ID_FK";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","ID_FK");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "dep";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["ID_FK"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "ID_FK";
//	sol_ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sol_ticket";
	$fdata["GoodName"] = "sol_ticket";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","sol_ticket");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["sol_ticket"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "sol_ticket";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","nombre");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["nombre"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "nombre";
//	primer_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "primer_apellido";
	$fdata["GoodName"] = "primer_apellido";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","primer_apellido");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["primer_apellido"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "primer_apellido";
//	segundo_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "segundo_apellido";
	$fdata["GoodName"] = "segundo_apellido";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","segundo_apellido");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["segundo_apellido"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "segundo_apellido";
//	tipo_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_documento";
	$fdata["GoodName"] = "tipo_documento";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","tipo_documento");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["tipo_documento"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "tipo_documento";
//	numero_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "numero_documento";
	$fdata["GoodName"] = "numero_documento";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","numero_documento");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["numero_documento"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "numero_documento";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","telefono");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["telefono"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "telefono";
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","departamento");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["departamento"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "departamento";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","municipio");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["municipio"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "municipio";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","direccion");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["direccion"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "direccion";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","cargo");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["cargo"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "cargo";
//	email_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "email_contacto";
	$fdata["GoodName"] = "email_contacto";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","email_contacto");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["email_contacto"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "email_contacto";
//	email_contacto_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "email_contacto_c";
	$fdata["GoodName"] = "email_contacto_c";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","email_contacto_c");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["email_contacto_c"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "email_contacto_c";
//	token_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "token_id";
	$fdata["GoodName"] = "token_id";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","token_id");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["token_id"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "token_id";
//	cert_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cert_id";
	$fdata["GoodName"] = "cert_id";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","cert_id");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "sol_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud["cert_id"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "cert_id";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","vigencia");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["vigencia"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "vigencia";
//	stage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "stage";
	$fdata["GoodName"] = "stage";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","stage");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["stage"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "stage";
//	stage_tk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "stage_tk";
	$fdata["GoodName"] = "stage_tk";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","stage_tk");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "sol_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacertificados_solicitud["stage_tk"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "stage_tk";
//	doc_acta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "doc_acta";
	$fdata["GoodName"] = "doc_acta";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","doc_acta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_acta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_acta";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["doc_acta"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "doc_acta";
//	doc_carta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "doc_carta";
	$fdata["GoodName"] = "doc_carta";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","doc_carta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_carta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_carta";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["doc_carta"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "doc_carta";
//	doc_certificado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "doc_certificado";
	$fdata["GoodName"] = "doc_certificado";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","doc_certificado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_certificado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_certificado";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["doc_certificado"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "doc_certificado";
//	doc_poder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "doc_poder";
	$fdata["GoodName"] = "doc_poder";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","doc_poder");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_poder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_poder";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["doc_poder"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "doc_poder";
//	doc_rut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "doc_rut";
	$fdata["GoodName"] = "doc_rut";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","doc_rut");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_rut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_rut";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["doc_rut"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "doc_rut";
//	doc_cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "doc_cedula";
	$fdata["GoodName"] = "doc_cedula";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","doc_cedula");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_cedula";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["doc_cedula"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "doc_cedula";
//	doc_escritura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "doc_escritura";
	$fdata["GoodName"] = "doc_escritura";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","doc_escritura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_escritura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_escritura";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["doc_escritura"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "doc_escritura";
//	tk_fecha_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "tk_fecha_i";
	$fdata["GoodName"] = "tk_fecha_i";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","tk_fecha_i");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["tk_fecha_i"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "tk_fecha_i";
//	tl_fecha_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "tl_fecha_f";
	$fdata["GoodName"] = "tl_fecha_f";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","tl_fecha_f");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["tl_fecha_f"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "tl_fecha_f";
//	dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "dep";
	$fdata["GoodName"] = "dep";
	$fdata["ownerTable"] = "certificados_solicitud";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud","dep");
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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia_tipo_user";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "DEP_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DEPENDENCIA";

	

	
	$edata["LookupOrderBy"] = "DEPENDENCIA";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ID_FK", "lookup" => "USER_ID_FK" );

		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatacertificados_solicitud["dep"] = $fdata;
		$tdatacertificados_solicitud[".searchableFields"][] = "dep";


$tables_data["certificados_solicitud"]=&$tdatacertificados_solicitud;
$field_labels["certificados_solicitud"] = &$fieldLabelscertificados_solicitud;
$fieldToolTips["certificados_solicitud"] = &$fieldToolTipscertificados_solicitud;
$placeHolders["certificados_solicitud"] = &$placeHolderscertificados_solicitud;
$page_titles["certificados_solicitud"] = &$pageTitlescertificados_solicitud;


changeTextControlsToDate( "certificados_solicitud" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["certificados_solicitud"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["certificados_solicitud"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_certificados_solicitud()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sol_id,  ID_FK,  sol_ticket,  nombre,  primer_apellido,  segundo_apellido,  tipo_documento,  numero_documento,  telefono,  departamento,  municipio,  direccion,  cargo,  email_contacto,  email_contacto_c,  token_id,  cert_id,  vigencia,  stage,  stage_tk,  doc_acta,  doc_carta,  doc_certificado,  doc_poder,  doc_rut,  doc_cedula,  doc_escritura,  tk_fecha_i,  tl_fecha_f,  dep";
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
	"m_srcTableName" => "certificados_solicitud"
));

$proto6["m_sql"] = "sol_id";
$proto6["m_srcTableName"] = "certificados_solicitud";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_FK",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto8["m_sql"] = "ID_FK";
$proto8["m_srcTableName"] = "certificados_solicitud";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_ticket",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto10["m_sql"] = "sol_ticket";
$proto10["m_srcTableName"] = "certificados_solicitud";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto12["m_sql"] = "nombre";
$proto12["m_srcTableName"] = "certificados_solicitud";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_apellido",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto14["m_sql"] = "primer_apellido";
$proto14["m_srcTableName"] = "certificados_solicitud";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "segundo_apellido",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto16["m_sql"] = "segundo_apellido";
$proto16["m_srcTableName"] = "certificados_solicitud";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_documento",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto18["m_sql"] = "tipo_documento";
$proto18["m_srcTableName"] = "certificados_solicitud";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_documento",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto20["m_sql"] = "numero_documento";
$proto20["m_srcTableName"] = "certificados_solicitud";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto22["m_sql"] = "telefono";
$proto22["m_srcTableName"] = "certificados_solicitud";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto24["m_sql"] = "departamento";
$proto24["m_srcTableName"] = "certificados_solicitud";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto26["m_sql"] = "municipio";
$proto26["m_srcTableName"] = "certificados_solicitud";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto28["m_sql"] = "direccion";
$proto28["m_srcTableName"] = "certificados_solicitud";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto30["m_sql"] = "cargo";
$proto30["m_srcTableName"] = "certificados_solicitud";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "email_contacto",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto32["m_sql"] = "email_contacto";
$proto32["m_srcTableName"] = "certificados_solicitud";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "email_contacto_c",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto34["m_sql"] = "email_contacto_c";
$proto34["m_srcTableName"] = "certificados_solicitud";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "token_id",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto36["m_sql"] = "token_id";
$proto36["m_srcTableName"] = "certificados_solicitud";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_id",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto38["m_sql"] = "cert_id";
$proto38["m_srcTableName"] = "certificados_solicitud";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto40["m_sql"] = "vigencia";
$proto40["m_srcTableName"] = "certificados_solicitud";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "stage",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto42["m_sql"] = "stage";
$proto42["m_srcTableName"] = "certificados_solicitud";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "stage_tk",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto44["m_sql"] = "stage_tk";
$proto44["m_srcTableName"] = "certificados_solicitud";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_acta",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto46["m_sql"] = "doc_acta";
$proto46["m_srcTableName"] = "certificados_solicitud";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_carta",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto48["m_sql"] = "doc_carta";
$proto48["m_srcTableName"] = "certificados_solicitud";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_certificado",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto50["m_sql"] = "doc_certificado";
$proto50["m_srcTableName"] = "certificados_solicitud";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_poder",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto52["m_sql"] = "doc_poder";
$proto52["m_srcTableName"] = "certificados_solicitud";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_rut",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto54["m_sql"] = "doc_rut";
$proto54["m_srcTableName"] = "certificados_solicitud";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_cedula",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto56["m_sql"] = "doc_cedula";
$proto56["m_srcTableName"] = "certificados_solicitud";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_escritura",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto58["m_sql"] = "doc_escritura";
$proto58["m_srcTableName"] = "certificados_solicitud";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "tk_fecha_i",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto60["m_sql"] = "tk_fecha_i";
$proto60["m_srcTableName"] = "certificados_solicitud";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "tl_fecha_f",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto62["m_sql"] = "tl_fecha_f";
$proto62["m_srcTableName"] = "certificados_solicitud";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "dep",
	"m_strTable" => "certificados_solicitud",
	"m_srcTableName" => "certificados_solicitud"
));

$proto64["m_sql"] = "dep";
$proto64["m_srcTableName"] = "certificados_solicitud";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "certificados_solicitud";
$proto67["m_srcTableName"] = "certificados_solicitud";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "sol_id";
$proto67["m_columns"][] = "sol_ticket";
$proto67["m_columns"][] = "ID_FK";
$proto67["m_columns"][] = "nombre";
$proto67["m_columns"][] = "primer_apellido";
$proto67["m_columns"][] = "segundo_apellido";
$proto67["m_columns"][] = "tipo_documento";
$proto67["m_columns"][] = "numero_documento";
$proto67["m_columns"][] = "telefono";
$proto67["m_columns"][] = "departamento";
$proto67["m_columns"][] = "municipio";
$proto67["m_columns"][] = "direccion";
$proto67["m_columns"][] = "cargo";
$proto67["m_columns"][] = "dep";
$proto67["m_columns"][] = "email_contacto";
$proto67["m_columns"][] = "email_contacto_c";
$proto67["m_columns"][] = "token_id";
$proto67["m_columns"][] = "cert_id";
$proto67["m_columns"][] = "vigencia";
$proto67["m_columns"][] = "stage";
$proto67["m_columns"][] = "stage_tk";
$proto67["m_columns"][] = "doc_acta";
$proto67["m_columns"][] = "doc_carta";
$proto67["m_columns"][] = "doc_certificado";
$proto67["m_columns"][] = "doc_poder";
$proto67["m_columns"][] = "doc_rut";
$proto67["m_columns"][] = "doc_cedula";
$proto67["m_columns"][] = "doc_escritura";
$proto67["m_columns"][] = "track_msj";
$proto67["m_columns"][] = "track_usr";
$proto67["m_columns"][] = "track_date";
$proto67["m_columns"][] = "tk_fecha_i";
$proto67["m_columns"][] = "tl_fecha_f";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "certificados_solicitud";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "certificados_solicitud";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="certificados_solicitud";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_certificados_solicitud = createSqlQuery_certificados_solicitud();


	
		;

																														

$tdatacertificados_solicitud[".sqlquery"] = $queryData_certificados_solicitud;



include_once(getabspath("include/certificados_solicitud_events.php"));
$tdatacertificados_solicitud[".hasEvents"] = true;

?>