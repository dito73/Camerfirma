<?php
$tdatatickets_prioridad = array();
$tdatatickets_prioridad[".searchableFields"] = array();
$tdatatickets_prioridad[".ShortName"] = "tickets_prioridad";
$tdatatickets_prioridad[".OwnerID"] = "";
$tdatatickets_prioridad[".OriginalTable"] = "tickets_prioridad";


$tdatatickets_prioridad[".pagesByType"] = my_json_decode( "{}" );
$tdatatickets_prioridad[".originalPagesByType"] = $tdatatickets_prioridad[".pagesByType"];
$tdatatickets_prioridad[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatickets_prioridad[".originalPages"] = $tdatatickets_prioridad[".pages"];
$tdatatickets_prioridad[".defaultPages"] = my_json_decode( "{}" );
$tdatatickets_prioridad[".originalDefaultPages"] = $tdatatickets_prioridad[".defaultPages"];

//	field labels
$fieldLabelstickets_prioridad = array();
$fieldToolTipstickets_prioridad = array();
$pageTitlestickets_prioridad = array();
$placeHolderstickets_prioridad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstickets_prioridad["Spanish"] = array();
	$fieldToolTipstickets_prioridad["Spanish"] = array();
	$placeHolderstickets_prioridad["Spanish"] = array();
	$pageTitlestickets_prioridad["Spanish"] = array();
	$fieldLabelstickets_prioridad["Spanish"]["prioridad_id"] = "Prioridad Id";
	$fieldToolTipstickets_prioridad["Spanish"]["prioridad_id"] = "";
	$placeHolderstickets_prioridad["Spanish"]["prioridad_id"] = "";
	$fieldLabelstickets_prioridad["Spanish"]["nombre_prioridad"] = "Nombre Prioridad";
	$fieldToolTipstickets_prioridad["Spanish"]["nombre_prioridad"] = "";
	$placeHolderstickets_prioridad["Spanish"]["nombre_prioridad"] = "";
	$fieldLabelstickets_prioridad["Spanish"]["tiempo_estimado"] = "Tiempo Estimado";
	$fieldToolTipstickets_prioridad["Spanish"]["tiempo_estimado"] = "";
	$placeHolderstickets_prioridad["Spanish"]["tiempo_estimado"] = "";
	if (count($fieldToolTipstickets_prioridad["Spanish"]))
		$tdatatickets_prioridad[".isUseToolTips"] = true;
}


	$tdatatickets_prioridad[".NCSearch"] = true;



$tdatatickets_prioridad[".shortTableName"] = "tickets_prioridad";
$tdatatickets_prioridad[".nSecOptions"] = 0;

$tdatatickets_prioridad[".mainTableOwnerID"] = "";
$tdatatickets_prioridad[".entityType"] = 0;
$tdatatickets_prioridad[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatickets_prioridad[".strOriginalTableName"] = "tickets_prioridad";

	



$tdatatickets_prioridad[".showAddInPopup"] = false;

$tdatatickets_prioridad[".showEditInPopup"] = false;

$tdatatickets_prioridad[".showViewInPopup"] = false;

$tdatatickets_prioridad[".listAjax"] = false;
//	temporary
//$tdatatickets_prioridad[".listAjax"] = false;

	$tdatatickets_prioridad[".audit"] = true;

	$tdatatickets_prioridad[".locking"] = true;


$pages = $tdatatickets_prioridad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatickets_prioridad[".edit"] = true;
	$tdatatickets_prioridad[".afterEditAction"] = 1;
	$tdatatickets_prioridad[".closePopupAfterEdit"] = 1;
	$tdatatickets_prioridad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatickets_prioridad[".add"] = true;
$tdatatickets_prioridad[".afterAddAction"] = 1;
$tdatatickets_prioridad[".closePopupAfterAdd"] = 1;
$tdatatickets_prioridad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatickets_prioridad[".list"] = true;
}



$tdatatickets_prioridad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatickets_prioridad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatickets_prioridad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatickets_prioridad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatickets_prioridad[".printFriendly"] = true;
}



$tdatatickets_prioridad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatickets_prioridad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatickets_prioridad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatickets_prioridad[".isUseAjaxSuggest"] = true;





$tdatatickets_prioridad[".ajaxCodeSnippetAdded"] = false;

$tdatatickets_prioridad[".buttonsAdded"] = false;

$tdatatickets_prioridad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatickets_prioridad[".isUseTimeForSearch"] = false;


$tdatatickets_prioridad[".badgeColor"] = "D2691E";


$tdatatickets_prioridad[".allSearchFields"] = array();
$tdatatickets_prioridad[".filterFields"] = array();
$tdatatickets_prioridad[".requiredSearchFields"] = array();

$tdatatickets_prioridad[".googleLikeFields"] = array();
$tdatatickets_prioridad[".googleLikeFields"][] = "prioridad_id";
$tdatatickets_prioridad[".googleLikeFields"][] = "nombre_prioridad";
$tdatatickets_prioridad[".googleLikeFields"][] = "tiempo_estimado";



$tdatatickets_prioridad[".tableType"] = "list";

$tdatatickets_prioridad[".printerPageOrientation"] = 0;
$tdatatickets_prioridad[".nPrinterPageScale"] = 100;

$tdatatickets_prioridad[".nPrinterSplitRecords"] = 40;

$tdatatickets_prioridad[".geocodingEnabled"] = false;










$tdatatickets_prioridad[".pageSize"] = 20;

$tdatatickets_prioridad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatickets_prioridad[".strOrderBy"] = $tstrOrderBy;

$tdatatickets_prioridad[".orderindexes"] = array();


$tdatatickets_prioridad[".sqlHead"] = "SELECT prioridad_id,  	nombre_prioridad,  	tiempo_estimado";
$tdatatickets_prioridad[".sqlFrom"] = "FROM tickets_prioridad";
$tdatatickets_prioridad[".sqlWhereExpr"] = "";
$tdatatickets_prioridad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatickets_prioridad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatickets_prioridad[".arrGroupsPerPage"] = $arrGPP;

$tdatatickets_prioridad[".highlightSearchResults"] = true;

$tableKeystickets_prioridad = array();
$tableKeystickets_prioridad[] = "prioridad_id";
$tdatatickets_prioridad[".Keys"] = $tableKeystickets_prioridad;


$tdatatickets_prioridad[".hideMobileList"] = array();




//	prioridad_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "prioridad_id";
	$fdata["GoodName"] = "prioridad_id";
	$fdata["ownerTable"] = "tickets_prioridad";
	$fdata["Label"] = GetFieldLabel("tickets_prioridad","prioridad_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "prioridad_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prioridad_id";

	
	
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


	$tdatatickets_prioridad["prioridad_id"] = $fdata;
		$tdatatickets_prioridad[".searchableFields"][] = "prioridad_id";
//	nombre_prioridad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_prioridad";
	$fdata["GoodName"] = "nombre_prioridad";
	$fdata["ownerTable"] = "tickets_prioridad";
	$fdata["Label"] = GetFieldLabel("tickets_prioridad","nombre_prioridad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_prioridad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_prioridad";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatatickets_prioridad["nombre_prioridad"] = $fdata;
		$tdatatickets_prioridad[".searchableFields"][] = "nombre_prioridad";
//	tiempo_estimado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tiempo_estimado";
	$fdata["GoodName"] = "tiempo_estimado";
	$fdata["ownerTable"] = "tickets_prioridad";
	$fdata["Label"] = GetFieldLabel("tickets_prioridad","tiempo_estimado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tiempo_estimado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tiempo_estimado";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatickets_prioridad["tiempo_estimado"] = $fdata;
		$tdatatickets_prioridad[".searchableFields"][] = "tiempo_estimado";


$tables_data["tickets_prioridad"]=&$tdatatickets_prioridad;
$field_labels["tickets_prioridad"] = &$fieldLabelstickets_prioridad;
$fieldToolTips["tickets_prioridad"] = &$fieldToolTipstickets_prioridad;
$placeHolders["tickets_prioridad"] = &$placeHolderstickets_prioridad;
$page_titles["tickets_prioridad"] = &$pageTitlestickets_prioridad;


changeTextControlsToDate( "tickets_prioridad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tickets_prioridad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tickets_prioridad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tickets_prioridad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "prioridad_id,  	nombre_prioridad,  	tiempo_estimado";
$proto0["m_strFrom"] = "FROM tickets_prioridad";
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
	"m_strName" => "prioridad_id",
	"m_strTable" => "tickets_prioridad",
	"m_srcTableName" => "tickets_prioridad"
));

$proto6["m_sql"] = "prioridad_id";
$proto6["m_srcTableName"] = "tickets_prioridad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_prioridad",
	"m_strTable" => "tickets_prioridad",
	"m_srcTableName" => "tickets_prioridad"
));

$proto8["m_sql"] = "nombre_prioridad";
$proto8["m_srcTableName"] = "tickets_prioridad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tiempo_estimado",
	"m_strTable" => "tickets_prioridad",
	"m_srcTableName" => "tickets_prioridad"
));

$proto10["m_sql"] = "tiempo_estimado";
$proto10["m_srcTableName"] = "tickets_prioridad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tickets_prioridad";
$proto13["m_srcTableName"] = "tickets_prioridad";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "prioridad_id";
$proto13["m_columns"][] = "nombre_prioridad";
$proto13["m_columns"][] = "tiempo_estimado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tickets_prioridad";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tickets_prioridad";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tickets_prioridad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tickets_prioridad = createSqlQuery_tickets_prioridad();


	
		;

			

$tdatatickets_prioridad[".sqlquery"] = $queryData_tickets_prioridad;



$tdatatickets_prioridad[".hasEvents"] = false;

?>