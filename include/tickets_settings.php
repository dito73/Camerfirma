<?php
$tdatatickets = array();
$tdatatickets[".searchableFields"] = array();
$tdatatickets[".ShortName"] = "tickets";
$tdatatickets[".OwnerID"] = "sys_user";
$tdatatickets[".OriginalTable"] = "tickets";


$tdatatickets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatickets[".originalPagesByType"] = $tdatatickets[".pagesByType"];
$tdatatickets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatickets[".originalPages"] = $tdatatickets[".pages"];
$tdatatickets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatickets[".originalDefaultPages"] = $tdatatickets[".defaultPages"];

//	field labels
$fieldLabelstickets = array();
$fieldToolTipstickets = array();
$pageTitlestickets = array();
$placeHolderstickets = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstickets["Spanish"] = array();
	$fieldToolTipstickets["Spanish"] = array();
	$placeHolderstickets["Spanish"] = array();
	$pageTitlestickets["Spanish"] = array();
	$fieldLabelstickets["Spanish"]["ticket_id"] = "Ticket Id";
	$fieldToolTipstickets["Spanish"]["ticket_id"] = "";
	$placeHolderstickets["Spanish"]["ticket_id"] = "";
	$fieldLabelstickets["Spanish"]["ticket"] = "Ticket";
	$fieldToolTipstickets["Spanish"]["ticket"] = "";
	$placeHolderstickets["Spanish"]["ticket"] = "";
	$fieldLabelstickets["Spanish"]["fecha_ticket"] = "Fecha Ticket";
	$fieldToolTipstickets["Spanish"]["fecha_ticket"] = "";
	$placeHolderstickets["Spanish"]["fecha_ticket"] = "";
	$fieldLabelstickets["Spanish"]["producto"] = "Módulo";
	$fieldToolTipstickets["Spanish"]["producto"] = "";
	$placeHolderstickets["Spanish"]["producto"] = "";
	$fieldLabelstickets["Spanish"]["asunto"] = "Asunto";
	$fieldToolTipstickets["Spanish"]["asunto"] = "";
	$placeHolderstickets["Spanish"]["asunto"] = "";
	$fieldLabelstickets["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipstickets["Spanish"]["tipo"] = "";
	$placeHolderstickets["Spanish"]["tipo"] = "";
	$fieldLabelstickets["Spanish"]["estado"] = "Estado";
	$fieldToolTipstickets["Spanish"]["estado"] = "";
	$placeHolderstickets["Spanish"]["estado"] = "";
	$fieldLabelstickets["Spanish"]["prioridad"] = "Prioridad";
	$fieldToolTipstickets["Spanish"]["prioridad"] = "";
	$placeHolderstickets["Spanish"]["prioridad"] = "";
	$fieldLabelstickets["Spanish"]["dias"] = "Dias";
	$fieldToolTipstickets["Spanish"]["dias"] = "";
	$placeHolderstickets["Spanish"]["dias"] = "";
	$fieldLabelstickets["Spanish"]["fecha_estim_respuesta"] = "Fecha Estim Respuesta";
	$fieldToolTipstickets["Spanish"]["fecha_estim_respuesta"] = "";
	$placeHolderstickets["Spanish"]["fecha_estim_respuesta"] = "";
	$fieldLabelstickets["Spanish"]["descripcion"] = "Descripción de la solicitud";
	$fieldToolTipstickets["Spanish"]["descripcion"] = "";
	$placeHolderstickets["Spanish"]["descripcion"] = "Escriba en detalle la descripción de su solicitud";
	$fieldLabelstickets["Spanish"]["imagenes"] = "Adjuntar Imágenes";
	$fieldToolTipstickets["Spanish"]["imagenes"] = "<p>Arraste o seleccione las imágenes que desea adjuntar que complementan su solicitud. </p><p>Formatos permitidos <strong>.png, .jpg, .jpeg</strong></p>";
	$placeHolderstickets["Spanish"]["imagenes"] = "Arraste o seleccione las imagenes que desea adjuntar que complementan su solicitud.
Formatos permitidos .png, .jpg, .jpeg";
	$fieldLabelstickets["Spanish"]["archivos"] = "Adjuntar documentos";
	$fieldToolTipstickets["Spanish"]["archivos"] = "<p>Arraste o seleccione los documentos que desea adjuntar que complementan su solicitud.</p><p>Formatos permitidos <strong><em>.docx,.msg,.pdf,.xlsx</em></strong></p>";
	$placeHolderstickets["Spanish"]["archivos"] = "";
	$fieldLabelstickets["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipstickets["Spanish"]["sys_user"] = "";
	$placeHolderstickets["Spanish"]["sys_user"] = "";
	$pageTitlestickets["Spanish"]["add"] = "Abrir un nuevo ticket";
	if (count($fieldToolTipstickets["Spanish"]))
		$tdatatickets[".isUseToolTips"] = true;
}


	$tdatatickets[".NCSearch"] = true;



$tdatatickets[".shortTableName"] = "tickets";
$tdatatickets[".nSecOptions"] = 1;

$tdatatickets[".mainTableOwnerID"] = "sys_user";
$tdatatickets[".entityType"] = 0;
$tdatatickets[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatickets[".strOriginalTableName"] = "tickets";

	



$tdatatickets[".showAddInPopup"] = false;

$tdatatickets[".showEditInPopup"] = false;

$tdatatickets[".showViewInPopup"] = false;

$tdatatickets[".listAjax"] = false;
//	temporary
//$tdatatickets[".listAjax"] = false;

	$tdatatickets[".audit"] = true;

	$tdatatickets[".locking"] = true;


$pages = $tdatatickets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatickets[".edit"] = true;
	$tdatatickets[".afterEditAction"] = 1;
	$tdatatickets[".closePopupAfterEdit"] = 1;
	$tdatatickets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatickets[".add"] = true;
$tdatatickets[".afterAddAction"] = 0;
$tdatatickets[".closePopupAfterAdd"] = 1;
$tdatatickets[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatickets[".list"] = true;
}



$tdatatickets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatickets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatickets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatickets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatickets[".printFriendly"] = true;
}



$tdatatickets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatickets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatickets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatickets[".isUseAjaxSuggest"] = true;





$tdatatickets[".ajaxCodeSnippetAdded"] = false;

$tdatatickets[".buttonsAdded"] = false;

$tdatatickets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatickets[".isUseTimeForSearch"] = false;


$tdatatickets[".badgeColor"] = "8FBC8B";


$tdatatickets[".allSearchFields"] = array();
$tdatatickets[".filterFields"] = array();
$tdatatickets[".requiredSearchFields"] = array();

$tdatatickets[".googleLikeFields"] = array();
$tdatatickets[".googleLikeFields"][] = "ticket_id";
$tdatatickets[".googleLikeFields"][] = "ticket";
$tdatatickets[".googleLikeFields"][] = "fecha_ticket";
$tdatatickets[".googleLikeFields"][] = "producto";
$tdatatickets[".googleLikeFields"][] = "asunto";
$tdatatickets[".googleLikeFields"][] = "tipo";
$tdatatickets[".googleLikeFields"][] = "estado";
$tdatatickets[".googleLikeFields"][] = "prioridad";
$tdatatickets[".googleLikeFields"][] = "dias";
$tdatatickets[".googleLikeFields"][] = "fecha_estim_respuesta";
$tdatatickets[".googleLikeFields"][] = "descripcion";
$tdatatickets[".googleLikeFields"][] = "imagenes";
$tdatatickets[".googleLikeFields"][] = "archivos";
$tdatatickets[".googleLikeFields"][] = "sys_user";



$tdatatickets[".tableType"] = "list";

$tdatatickets[".printerPageOrientation"] = 0;
$tdatatickets[".nPrinterPageScale"] = 100;

$tdatatickets[".nPrinterSplitRecords"] = 40;

$tdatatickets[".geocodingEnabled"] = false;










$tdatatickets[".pageSize"] = 20;

$tdatatickets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatickets[".strOrderBy"] = $tstrOrderBy;

$tdatatickets[".orderindexes"] = array();


$tdatatickets[".sqlHead"] = "SELECT ticket_id,  	ticket,  	fecha_ticket,  	producto,  	asunto,  	tipo,  	estado,  	prioridad,  	dias,  	fecha_estim_respuesta,  	descripcion,  	imagenes,  	archivos,  	sys_user";
$tdatatickets[".sqlFrom"] = "FROM tickets";
$tdatatickets[".sqlWhereExpr"] = "";
$tdatatickets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatickets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatickets[".arrGroupsPerPage"] = $arrGPP;

$tdatatickets[".highlightSearchResults"] = true;

$tableKeystickets = array();
$tableKeystickets[] = "ticket_id";
$tdatatickets[".Keys"] = $tableKeystickets;


$tdatatickets[".hideMobileList"] = array();




//	ticket_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ticket_id";
	$fdata["GoodName"] = "ticket_id";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","ticket_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ticket_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticket_id";

	
	
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


	$tdatatickets["ticket_id"] = $fdata;
		$tdatatickets[".searchableFields"][] = "ticket_id";
//	ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ticket";
	$fdata["GoodName"] = "ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","ticket");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ticket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticket";

	
	
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


	$tdatatickets["ticket"] = $fdata;
		$tdatatickets[".searchableFields"][] = "ticket";
//	fecha_ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_ticket";
	$fdata["GoodName"] = "fecha_ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","fecha_ticket");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_ticket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ticket";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdatatickets["fecha_ticket"] = $fdata;
		$tdatatickets[".searchableFields"][] = "fecha_ticket";
//	producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "producto";
	$fdata["GoodName"] = "producto";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","producto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producto";

	
	
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
	$edata["LookupTable"] = "tickets_proyectos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "grupo_a";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "grupo_a_nombre";

	

	
	$edata["LookupOrderBy"] = "grupo_a_nombre";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatatickets["producto"] = $fdata;
		$tdatatickets[".searchableFields"][] = "producto";
//	asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "asunto";
	$fdata["GoodName"] = "asunto";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","asunto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "asunto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asunto";

	
	
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


	$tdatatickets["asunto"] = $fdata;
		$tdatatickets[".searchableFields"][] = "asunto";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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
	$edata["LookupTable"] = "tickets_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ttipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ttipo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatickets["tipo"] = $fdata;
		$tdatatickets[".searchableFields"][] = "tipo";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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

	$edata = array("EditFormat" => "HiddenField");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatickets["estado"] = $fdata;
		$tdatatickets[".searchableFields"][] = "estado";
//	prioridad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "prioridad";
	$fdata["GoodName"] = "prioridad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","prioridad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "prioridad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prioridad";

	
	
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
	$edata["LookupTable"] = "tickets_prioridad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"dias", 'lookupF'=>"tiempo_estimado");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "prioridad_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre_prioridad";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatickets["prioridad"] = $fdata;
		$tdatatickets[".searchableFields"][] = "prioridad";
//	dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dias";
	$fdata["GoodName"] = "dias";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias";

	
	
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

	$edata = array("EditFormat" => "HiddenField");

	
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


	$tdatatickets["dias"] = $fdata;
		$tdatatickets[".searchableFields"][] = "dias";
//	fecha_estim_respuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_estim_respuesta";
	$fdata["GoodName"] = "fecha_estim_respuesta";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","fecha_estim_respuesta");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_estim_respuesta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_estim_respuesta";

	
	
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


	$tdatatickets["fecha_estim_respuesta"] = $fdata;
		$tdatatickets[".searchableFields"][] = "fecha_estim_respuesta";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatatickets["descripcion"] = $fdata;
		$tdatatickets[".searchableFields"][] = "descripcion";
//	imagenes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "imagenes";
	$fdata["GoodName"] = "imagenes";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","imagenes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "imagenes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagenes";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files/images/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 150;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("jpeg");
						$edata["acceptFileTypesHtml"] = ".jpeg";
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] .= ",.jpg";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 200;

			
	
	
	
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


	$tdatatickets["imagenes"] = $fdata;
		$tdatatickets[".searchableFields"][] = "imagenes";
//	archivos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "archivos";
	$fdata["GoodName"] = "archivos";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","archivos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "archivos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "archivos";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files/docs/";

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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("docx");
						$edata["acceptFileTypesHtml"] = ".docx";
			$edata["acceptFileTypes"][] = strtoupper("msg");
						$edata["acceptFileTypesHtml"] .= ",.msg";
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] .= ",.pdf";
			$edata["acceptFileTypes"][] = strtoupper("xlsx");
						$edata["acceptFileTypesHtml"] .= ",.xlsx";

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


	$tdatatickets["archivos"] = $fdata;
		$tdatatickets[".searchableFields"][] = "archivos";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatatickets["sys_user"] = $fdata;
		$tdatatickets[".searchableFields"][] = "sys_user";


$tables_data["tickets"]=&$tdatatickets;
$field_labels["tickets"] = &$fieldLabelstickets;
$fieldToolTips["tickets"] = &$fieldToolTipstickets;
$placeHolders["tickets"] = &$placeHolderstickets;
$page_titles["tickets"] = &$pageTitlestickets;


changeTextControlsToDate( "tickets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tickets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tickets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tickets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ticket_id,  	ticket,  	fecha_ticket,  	producto,  	asunto,  	tipo,  	estado,  	prioridad,  	dias,  	fecha_estim_respuesta,  	descripcion,  	imagenes,  	archivos,  	sys_user";
$proto0["m_strFrom"] = "FROM tickets";
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
	"m_strName" => "ticket_id",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto6["m_sql"] = "ticket_id";
$proto6["m_srcTableName"] = "tickets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto8["m_sql"] = "ticket";
$proto8["m_srcTableName"] = "tickets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto10["m_sql"] = "fecha_ticket";
$proto10["m_srcTableName"] = "tickets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "producto",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto12["m_sql"] = "producto";
$proto12["m_srcTableName"] = "tickets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "asunto",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto14["m_sql"] = "asunto";
$proto14["m_srcTableName"] = "tickets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto16["m_sql"] = "tipo";
$proto16["m_srcTableName"] = "tickets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto18["m_sql"] = "estado";
$proto18["m_srcTableName"] = "tickets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "prioridad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto20["m_sql"] = "prioridad";
$proto20["m_srcTableName"] = "tickets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dias",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto22["m_sql"] = "dias";
$proto22["m_srcTableName"] = "tickets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_estim_respuesta",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto24["m_sql"] = "fecha_estim_respuesta";
$proto24["m_srcTableName"] = "tickets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto26["m_sql"] = "descripcion";
$proto26["m_srcTableName"] = "tickets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "imagenes",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto28["m_sql"] = "imagenes";
$proto28["m_srcTableName"] = "tickets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "archivos",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto30["m_sql"] = "archivos";
$proto30["m_srcTableName"] = "tickets";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto32["m_sql"] = "sys_user";
$proto32["m_srcTableName"] = "tickets";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "tickets";
$proto35["m_srcTableName"] = "tickets";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ticket_id";
$proto35["m_columns"][] = "ticket";
$proto35["m_columns"][] = "fecha_ticket";
$proto35["m_columns"][] = "producto";
$proto35["m_columns"][] = "asunto";
$proto35["m_columns"][] = "tipo";
$proto35["m_columns"][] = "estado";
$proto35["m_columns"][] = "prioridad";
$proto35["m_columns"][] = "dias";
$proto35["m_columns"][] = "fecha_estim_respuesta";
$proto35["m_columns"][] = "descripcion";
$proto35["m_columns"][] = "imagenes";
$proto35["m_columns"][] = "archivos";
$proto35["m_columns"][] = "sys_user";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "tickets";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "tickets";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tickets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tickets = createSqlQuery_tickets();


	
		;

														

$tdatatickets[".sqlquery"] = $queryData_tickets;



include_once(getabspath("include/tickets_events.php"));
$tdatatickets[".hasEvents"] = true;

?>