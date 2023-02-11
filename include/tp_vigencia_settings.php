<?php
$tdatatp_vigencia = array();
$tdatatp_vigencia[".searchableFields"] = array();
$tdatatp_vigencia[".ShortName"] = "tp_vigencia";
$tdatatp_vigencia[".OwnerID"] = "";
$tdatatp_vigencia[".OriginalTable"] = "tp_vigencia";


$tdatatp_vigencia[".pagesByType"] = my_json_decode( "{}" );
$tdatatp_vigencia[".originalPagesByType"] = $tdatatp_vigencia[".pagesByType"];
$tdatatp_vigencia[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatp_vigencia[".originalPages"] = $tdatatp_vigencia[".pages"];
$tdatatp_vigencia[".defaultPages"] = my_json_decode( "{}" );
$tdatatp_vigencia[".originalDefaultPages"] = $tdatatp_vigencia[".defaultPages"];

//	field labels
$fieldLabelstp_vigencia = array();
$fieldToolTipstp_vigencia = array();
$pageTitlestp_vigencia = array();
$placeHolderstp_vigencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstp_vigencia["Spanish"] = array();
	$fieldToolTipstp_vigencia["Spanish"] = array();
	$placeHolderstp_vigencia["Spanish"] = array();
	$pageTitlestp_vigencia["Spanish"] = array();
	$fieldLabelstp_vigencia["Spanish"]["vigencia_id"] = "Vigencia Id";
	$fieldToolTipstp_vigencia["Spanish"]["vigencia_id"] = "";
	$placeHolderstp_vigencia["Spanish"]["vigencia_id"] = "";
	$fieldLabelstp_vigencia["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipstp_vigencia["Spanish"]["vigencia"] = "";
	$placeHolderstp_vigencia["Spanish"]["vigencia"] = "";
	if (count($fieldToolTipstp_vigencia["Spanish"]))
		$tdatatp_vigencia[".isUseToolTips"] = true;
}


	$tdatatp_vigencia[".NCSearch"] = true;



$tdatatp_vigencia[".shortTableName"] = "tp_vigencia";
$tdatatp_vigencia[".nSecOptions"] = 0;

$tdatatp_vigencia[".mainTableOwnerID"] = "";
$tdatatp_vigencia[".entityType"] = 0;
$tdatatp_vigencia[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatp_vigencia[".strOriginalTableName"] = "tp_vigencia";

	



$tdatatp_vigencia[".showAddInPopup"] = false;

$tdatatp_vigencia[".showEditInPopup"] = false;

$tdatatp_vigencia[".showViewInPopup"] = false;

$tdatatp_vigencia[".listAjax"] = false;
//	temporary
//$tdatatp_vigencia[".listAjax"] = false;

	$tdatatp_vigencia[".audit"] = true;

	$tdatatp_vigencia[".locking"] = true;


$pages = $tdatatp_vigencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatp_vigencia[".edit"] = true;
	$tdatatp_vigencia[".afterEditAction"] = 1;
	$tdatatp_vigencia[".closePopupAfterEdit"] = 1;
	$tdatatp_vigencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatp_vigencia[".add"] = true;
$tdatatp_vigencia[".afterAddAction"] = 1;
$tdatatp_vigencia[".closePopupAfterAdd"] = 1;
$tdatatp_vigencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatp_vigencia[".list"] = true;
}



$tdatatp_vigencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatp_vigencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatp_vigencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatp_vigencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatp_vigencia[".printFriendly"] = true;
}



$tdatatp_vigencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatp_vigencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatp_vigencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatp_vigencia[".isUseAjaxSuggest"] = true;





$tdatatp_vigencia[".ajaxCodeSnippetAdded"] = false;

$tdatatp_vigencia[".buttonsAdded"] = false;

$tdatatp_vigencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatp_vigencia[".isUseTimeForSearch"] = false;


$tdatatp_vigencia[".badgeColor"] = "D2691E";


$tdatatp_vigencia[".allSearchFields"] = array();
$tdatatp_vigencia[".filterFields"] = array();
$tdatatp_vigencia[".requiredSearchFields"] = array();

$tdatatp_vigencia[".googleLikeFields"] = array();
$tdatatp_vigencia[".googleLikeFields"][] = "vigencia_id";
$tdatatp_vigencia[".googleLikeFields"][] = "vigencia";



$tdatatp_vigencia[".tableType"] = "list";

$tdatatp_vigencia[".printerPageOrientation"] = 0;
$tdatatp_vigencia[".nPrinterPageScale"] = 100;

$tdatatp_vigencia[".nPrinterSplitRecords"] = 40;

$tdatatp_vigencia[".geocodingEnabled"] = false;










$tdatatp_vigencia[".pageSize"] = 20;

$tdatatp_vigencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatp_vigencia[".strOrderBy"] = $tstrOrderBy;

$tdatatp_vigencia[".orderindexes"] = array();


$tdatatp_vigencia[".sqlHead"] = "SELECT vigencia_id,  	vigencia";
$tdatatp_vigencia[".sqlFrom"] = "FROM tp_vigencia";
$tdatatp_vigencia[".sqlWhereExpr"] = "";
$tdatatp_vigencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatp_vigencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatp_vigencia[".arrGroupsPerPage"] = $arrGPP;

$tdatatp_vigencia[".highlightSearchResults"] = true;

$tableKeystp_vigencia = array();
$tableKeystp_vigencia[] = "vigencia_id";
$tdatatp_vigencia[".Keys"] = $tableKeystp_vigencia;


$tdatatp_vigencia[".hideMobileList"] = array();




//	vigencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigencia_id";
	$fdata["GoodName"] = "vigencia_id";
	$fdata["ownerTable"] = "tp_vigencia";
	$fdata["Label"] = GetFieldLabel("tp_vigencia","vigencia_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "vigencia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_id";

	
	
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


	$tdatatp_vigencia["vigencia_id"] = $fdata;
		$tdatatp_vigencia[".searchableFields"][] = "vigencia_id";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "tp_vigencia";
	$fdata["Label"] = GetFieldLabel("tp_vigencia","vigencia");
	$fdata["FieldType"] = 200;


	
	
			

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatp_vigencia["vigencia"] = $fdata;
		$tdatatp_vigencia[".searchableFields"][] = "vigencia";


$tables_data["tp_vigencia"]=&$tdatatp_vigencia;
$field_labels["tp_vigencia"] = &$fieldLabelstp_vigencia;
$fieldToolTips["tp_vigencia"] = &$fieldToolTipstp_vigencia;
$placeHolders["tp_vigencia"] = &$placeHolderstp_vigencia;
$page_titles["tp_vigencia"] = &$pageTitlestp_vigencia;


changeTextControlsToDate( "tp_vigencia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tp_vigencia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tp_vigencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tp_vigencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigencia_id,  	vigencia";
$proto0["m_strFrom"] = "FROM tp_vigencia";
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
	"m_strName" => "vigencia_id",
	"m_strTable" => "tp_vigencia",
	"m_srcTableName" => "tp_vigencia"
));

$proto6["m_sql"] = "vigencia_id";
$proto6["m_srcTableName"] = "tp_vigencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "tp_vigencia",
	"m_srcTableName" => "tp_vigencia"
));

$proto8["m_sql"] = "vigencia";
$proto8["m_srcTableName"] = "tp_vigencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tp_vigencia";
$proto11["m_srcTableName"] = "tp_vigencia";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "vigencia_id";
$proto11["m_columns"][] = "vigencia";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tp_vigencia";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tp_vigencia";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tp_vigencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tp_vigencia = createSqlQuery_tp_vigencia();


	
		;

		

$tdatatp_vigencia[".sqlquery"] = $queryData_tp_vigencia;



$tdatatp_vigencia[".hasEvents"] = false;

?>