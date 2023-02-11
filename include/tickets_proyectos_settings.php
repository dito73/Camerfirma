<?php
$tdatatickets_proyectos = array();
$tdatatickets_proyectos[".searchableFields"] = array();
$tdatatickets_proyectos[".ShortName"] = "tickets_proyectos";
$tdatatickets_proyectos[".OwnerID"] = "";
$tdatatickets_proyectos[".OriginalTable"] = "tickets_proyectos";


$tdatatickets_proyectos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"view\":[\"view\"]}" );
$tdatatickets_proyectos[".originalPagesByType"] = $tdatatickets_proyectos[".pagesByType"];
$tdatatickets_proyectos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"view\":[\"view\"]}" ) );
$tdatatickets_proyectos[".originalPages"] = $tdatatickets_proyectos[".pages"];
$tdatatickets_proyectos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"view\":\"view\"}" );
$tdatatickets_proyectos[".originalDefaultPages"] = $tdatatickets_proyectos[".defaultPages"];

//	field labels
$fieldLabelstickets_proyectos = array();
$fieldToolTipstickets_proyectos = array();
$pageTitlestickets_proyectos = array();
$placeHolderstickets_proyectos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstickets_proyectos["Spanish"] = array();
	$fieldToolTipstickets_proyectos["Spanish"] = array();
	$placeHolderstickets_proyectos["Spanish"] = array();
	$pageTitlestickets_proyectos["Spanish"] = array();
	$fieldLabelstickets_proyectos["Spanish"]["grupo_a"] = "Código";
	$fieldToolTipstickets_proyectos["Spanish"]["grupo_a"] = "";
	$placeHolderstickets_proyectos["Spanish"]["grupo_a"] = "";
	$fieldLabelstickets_proyectos["Spanish"]["grupo_a_nombre"] = "Nombre del módulo";
	$fieldToolTipstickets_proyectos["Spanish"]["grupo_a_nombre"] = "";
	$placeHolderstickets_proyectos["Spanish"]["grupo_a_nombre"] = "";
	$fieldLabelstickets_proyectos["Spanish"]["grupo_a_descripcion"] = "Descripción";
	$fieldToolTipstickets_proyectos["Spanish"]["grupo_a_descripcion"] = "";
	$placeHolderstickets_proyectos["Spanish"]["grupo_a_descripcion"] = "";
	$fieldLabelstickets_proyectos["Spanish"]["CodSupJerarquico"] = "Dirección";
	$fieldToolTipstickets_proyectos["Spanish"]["CodSupJerarquico"] = "";
	$placeHolderstickets_proyectos["Spanish"]["CodSupJerarquico"] = "";
	$fieldLabelstickets_proyectos["Spanish"]["CodDependencia"] = "Dependencia responsable";
	$fieldToolTipstickets_proyectos["Spanish"]["CodDependencia"] = "";
	$placeHolderstickets_proyectos["Spanish"]["CodDependencia"] = "";
	if (count($fieldToolTipstickets_proyectos["Spanish"]))
		$tdatatickets_proyectos[".isUseToolTips"] = true;
}


	$tdatatickets_proyectos[".NCSearch"] = true;



$tdatatickets_proyectos[".shortTableName"] = "tickets_proyectos";
$tdatatickets_proyectos[".nSecOptions"] = 0;

$tdatatickets_proyectos[".mainTableOwnerID"] = "";
$tdatatickets_proyectos[".entityType"] = 0;
$tdatatickets_proyectos[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatickets_proyectos[".strOriginalTableName"] = "tickets_proyectos";

	



$tdatatickets_proyectos[".showAddInPopup"] = false;

$tdatatickets_proyectos[".showEditInPopup"] = false;

$tdatatickets_proyectos[".showViewInPopup"] = false;

$tdatatickets_proyectos[".listAjax"] = false;
//	temporary
//$tdatatickets_proyectos[".listAjax"] = false;

	$tdatatickets_proyectos[".audit"] = true;

	$tdatatickets_proyectos[".locking"] = true;


$pages = $tdatatickets_proyectos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatickets_proyectos[".edit"] = true;
	$tdatatickets_proyectos[".afterEditAction"] = 1;
	$tdatatickets_proyectos[".closePopupAfterEdit"] = 1;
	$tdatatickets_proyectos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatickets_proyectos[".add"] = true;
$tdatatickets_proyectos[".afterAddAction"] = 1;
$tdatatickets_proyectos[".closePopupAfterAdd"] = 1;
$tdatatickets_proyectos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatickets_proyectos[".list"] = true;
}



$tdatatickets_proyectos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatickets_proyectos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatickets_proyectos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatickets_proyectos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatickets_proyectos[".printFriendly"] = true;
}



$tdatatickets_proyectos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatickets_proyectos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatickets_proyectos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatickets_proyectos[".isUseAjaxSuggest"] = true;





$tdatatickets_proyectos[".ajaxCodeSnippetAdded"] = false;

$tdatatickets_proyectos[".buttonsAdded"] = false;

$tdatatickets_proyectos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatickets_proyectos[".isUseTimeForSearch"] = false;


$tdatatickets_proyectos[".badgeColor"] = "CFAE83";


$tdatatickets_proyectos[".allSearchFields"] = array();
$tdatatickets_proyectos[".filterFields"] = array();
$tdatatickets_proyectos[".requiredSearchFields"] = array();

$tdatatickets_proyectos[".googleLikeFields"] = array();
$tdatatickets_proyectos[".googleLikeFields"][] = "grupo_a";
$tdatatickets_proyectos[".googleLikeFields"][] = "grupo_a_nombre";
$tdatatickets_proyectos[".googleLikeFields"][] = "grupo_a_descripcion";
$tdatatickets_proyectos[".googleLikeFields"][] = "CodSupJerarquico";
$tdatatickets_proyectos[".googleLikeFields"][] = "CodDependencia";



$tdatatickets_proyectos[".tableType"] = "list";

$tdatatickets_proyectos[".printerPageOrientation"] = 0;
$tdatatickets_proyectos[".nPrinterPageScale"] = 100;

$tdatatickets_proyectos[".nPrinterSplitRecords"] = 40;

$tdatatickets_proyectos[".geocodingEnabled"] = false;










$tdatatickets_proyectos[".pageSize"] = 20;

$tdatatickets_proyectos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatickets_proyectos[".strOrderBy"] = $tstrOrderBy;

$tdatatickets_proyectos[".orderindexes"] = array();


$tdatatickets_proyectos[".sqlHead"] = "SELECT grupo_a,  	grupo_a_nombre,  	grupo_a_descripcion,  	CodSupJerarquico,  	CodDependencia";
$tdatatickets_proyectos[".sqlFrom"] = "FROM tickets_proyectos";
$tdatatickets_proyectos[".sqlWhereExpr"] = "";
$tdatatickets_proyectos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatickets_proyectos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatickets_proyectos[".arrGroupsPerPage"] = $arrGPP;

$tdatatickets_proyectos[".highlightSearchResults"] = true;

$tableKeystickets_proyectos = array();
$tableKeystickets_proyectos[] = "grupo_a";
$tdatatickets_proyectos[".Keys"] = $tableKeystickets_proyectos;


$tdatatickets_proyectos[".hideMobileList"] = array();




//	grupo_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "grupo_a";
	$fdata["GoodName"] = "grupo_a";
	$fdata["ownerTable"] = "tickets_proyectos";
	$fdata["Label"] = GetFieldLabel("tickets_proyectos","grupo_a");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "grupo_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grupo_a";

	
	
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


	$tdatatickets_proyectos["grupo_a"] = $fdata;
		$tdatatickets_proyectos[".searchableFields"][] = "grupo_a";
//	grupo_a_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "grupo_a_nombre";
	$fdata["GoodName"] = "grupo_a_nombre";
	$fdata["ownerTable"] = "tickets_proyectos";
	$fdata["Label"] = GetFieldLabel("tickets_proyectos","grupo_a_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "grupo_a_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grupo_a_nombre";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatatickets_proyectos["grupo_a_nombre"] = $fdata;
		$tdatatickets_proyectos[".searchableFields"][] = "grupo_a_nombre";
//	grupo_a_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "grupo_a_descripcion";
	$fdata["GoodName"] = "grupo_a_descripcion";
	$fdata["ownerTable"] = "tickets_proyectos";
	$fdata["Label"] = GetFieldLabel("tickets_proyectos","grupo_a_descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "grupo_a_descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grupo_a_descripcion";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatatickets_proyectos["grupo_a_descripcion"] = $fdata;
		$tdatatickets_proyectos[".searchableFields"][] = "grupo_a_descripcion";
//	CodSupJerarquico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CodSupJerarquico";
	$fdata["GoodName"] = "CodSupJerarquico";
	$fdata["ownerTable"] = "tickets_proyectos";
	$fdata["Label"] = GetFieldLabel("tickets_proyectos","CodSupJerarquico");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CodSupJerarquico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodSupJerarquico";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "Departamento_superior";

	
	
	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CodDependencia";

	
	
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


	$tdatatickets_proyectos["CodSupJerarquico"] = $fdata;
		$tdatatickets_proyectos[".searchableFields"][] = "CodSupJerarquico";
//	CodDependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CodDependencia";
	$fdata["GoodName"] = "CodDependencia";
	$fdata["ownerTable"] = "tickets_proyectos";
	$fdata["Label"] = GetFieldLabel("tickets_proyectos","CodDependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CodDependencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodDependencia";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CodSupJerarquico", "lookup" => "id_depto_superior" );

	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatatickets_proyectos["CodDependencia"] = $fdata;
		$tdatatickets_proyectos[".searchableFields"][] = "CodDependencia";


$tables_data["tickets_proyectos"]=&$tdatatickets_proyectos;
$field_labels["tickets_proyectos"] = &$fieldLabelstickets_proyectos;
$fieldToolTips["tickets_proyectos"] = &$fieldToolTipstickets_proyectos;
$placeHolders["tickets_proyectos"] = &$placeHolderstickets_proyectos;
$page_titles["tickets_proyectos"] = &$pageTitlestickets_proyectos;


changeTextControlsToDate( "tickets_proyectos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tickets_proyectos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tickets_proyectos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tickets_proyectos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "grupo_a,  	grupo_a_nombre,  	grupo_a_descripcion,  	CodSupJerarquico,  	CodDependencia";
$proto0["m_strFrom"] = "FROM tickets_proyectos";
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
	"m_strName" => "grupo_a",
	"m_strTable" => "tickets_proyectos",
	"m_srcTableName" => "tickets_proyectos"
));

$proto6["m_sql"] = "grupo_a";
$proto6["m_srcTableName"] = "tickets_proyectos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "grupo_a_nombre",
	"m_strTable" => "tickets_proyectos",
	"m_srcTableName" => "tickets_proyectos"
));

$proto8["m_sql"] = "grupo_a_nombre";
$proto8["m_srcTableName"] = "tickets_proyectos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "grupo_a_descripcion",
	"m_strTable" => "tickets_proyectos",
	"m_srcTableName" => "tickets_proyectos"
));

$proto10["m_sql"] = "grupo_a_descripcion";
$proto10["m_srcTableName"] = "tickets_proyectos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CodSupJerarquico",
	"m_strTable" => "tickets_proyectos",
	"m_srcTableName" => "tickets_proyectos"
));

$proto12["m_sql"] = "CodSupJerarquico";
$proto12["m_srcTableName"] = "tickets_proyectos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CodDependencia",
	"m_strTable" => "tickets_proyectos",
	"m_srcTableName" => "tickets_proyectos"
));

$proto14["m_sql"] = "CodDependencia";
$proto14["m_srcTableName"] = "tickets_proyectos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tickets_proyectos";
$proto17["m_srcTableName"] = "tickets_proyectos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "grupo_a";
$proto17["m_columns"][] = "grupo_a_nombre";
$proto17["m_columns"][] = "grupo_a_descripcion";
$proto17["m_columns"][] = "CodSupJerarquico";
$proto17["m_columns"][] = "CodDependencia";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tickets_proyectos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tickets_proyectos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tickets_proyectos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tickets_proyectos = createSqlQuery_tickets_proyectos();


	
		;

					

$tdatatickets_proyectos[".sqlquery"] = $queryData_tickets_proyectos;



$tdatatickets_proyectos[".hasEvents"] = false;

?>