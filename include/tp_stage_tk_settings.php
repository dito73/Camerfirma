<?php
$tdatatp_stage_tk = array();
$tdatatp_stage_tk[".searchableFields"] = array();
$tdatatp_stage_tk[".ShortName"] = "tp_stage_tk";
$tdatatp_stage_tk[".OwnerID"] = "";
$tdatatp_stage_tk[".OriginalTable"] = "tp_stage_tk";


$tdatatp_stage_tk[".pagesByType"] = my_json_decode( "{}" );
$tdatatp_stage_tk[".originalPagesByType"] = $tdatatp_stage_tk[".pagesByType"];
$tdatatp_stage_tk[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatp_stage_tk[".originalPages"] = $tdatatp_stage_tk[".pages"];
$tdatatp_stage_tk[".defaultPages"] = my_json_decode( "{}" );
$tdatatp_stage_tk[".originalDefaultPages"] = $tdatatp_stage_tk[".defaultPages"];

//	field labels
$fieldLabelstp_stage_tk = array();
$fieldToolTipstp_stage_tk = array();
$pageTitlestp_stage_tk = array();
$placeHolderstp_stage_tk = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstp_stage_tk["Spanish"] = array();
	$fieldToolTipstp_stage_tk["Spanish"] = array();
	$placeHolderstp_stage_tk["Spanish"] = array();
	$pageTitlestp_stage_tk["Spanish"] = array();
	$fieldLabelstp_stage_tk["Spanish"]["stagetk_id"] = "Stagetk Id";
	$fieldToolTipstp_stage_tk["Spanish"]["stagetk_id"] = "";
	$placeHolderstp_stage_tk["Spanish"]["stagetk_id"] = "";
	$fieldLabelstp_stage_tk["Spanish"]["stagetk"] = "Stagetk";
	$fieldToolTipstp_stage_tk["Spanish"]["stagetk"] = "";
	$placeHolderstp_stage_tk["Spanish"]["stagetk"] = "";
	if (count($fieldToolTipstp_stage_tk["Spanish"]))
		$tdatatp_stage_tk[".isUseToolTips"] = true;
}


	$tdatatp_stage_tk[".NCSearch"] = true;



$tdatatp_stage_tk[".shortTableName"] = "tp_stage_tk";
$tdatatp_stage_tk[".nSecOptions"] = 0;

$tdatatp_stage_tk[".mainTableOwnerID"] = "";
$tdatatp_stage_tk[".entityType"] = 0;
$tdatatp_stage_tk[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatp_stage_tk[".strOriginalTableName"] = "tp_stage_tk";

	



$tdatatp_stage_tk[".showAddInPopup"] = false;

$tdatatp_stage_tk[".showEditInPopup"] = false;

$tdatatp_stage_tk[".showViewInPopup"] = false;

$tdatatp_stage_tk[".listAjax"] = false;
//	temporary
//$tdatatp_stage_tk[".listAjax"] = false;

	$tdatatp_stage_tk[".audit"] = true;

	$tdatatp_stage_tk[".locking"] = true;


$pages = $tdatatp_stage_tk[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatp_stage_tk[".edit"] = true;
	$tdatatp_stage_tk[".afterEditAction"] = 1;
	$tdatatp_stage_tk[".closePopupAfterEdit"] = 1;
	$tdatatp_stage_tk[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatp_stage_tk[".add"] = true;
$tdatatp_stage_tk[".afterAddAction"] = 1;
$tdatatp_stage_tk[".closePopupAfterAdd"] = 1;
$tdatatp_stage_tk[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatp_stage_tk[".list"] = true;
}



$tdatatp_stage_tk[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatp_stage_tk[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatp_stage_tk[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatp_stage_tk[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatp_stage_tk[".printFriendly"] = true;
}



$tdatatp_stage_tk[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatp_stage_tk[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatp_stage_tk[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatp_stage_tk[".isUseAjaxSuggest"] = true;





$tdatatp_stage_tk[".ajaxCodeSnippetAdded"] = false;

$tdatatp_stage_tk[".buttonsAdded"] = false;

$tdatatp_stage_tk[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatp_stage_tk[".isUseTimeForSearch"] = false;


$tdatatp_stage_tk[".badgeColor"] = "8FBC8B";


$tdatatp_stage_tk[".allSearchFields"] = array();
$tdatatp_stage_tk[".filterFields"] = array();
$tdatatp_stage_tk[".requiredSearchFields"] = array();

$tdatatp_stage_tk[".googleLikeFields"] = array();
$tdatatp_stage_tk[".googleLikeFields"][] = "stagetk_id";
$tdatatp_stage_tk[".googleLikeFields"][] = "stagetk";



$tdatatp_stage_tk[".tableType"] = "list";

$tdatatp_stage_tk[".printerPageOrientation"] = 0;
$tdatatp_stage_tk[".nPrinterPageScale"] = 100;

$tdatatp_stage_tk[".nPrinterSplitRecords"] = 40;

$tdatatp_stage_tk[".geocodingEnabled"] = false;










$tdatatp_stage_tk[".pageSize"] = 20;

$tdatatp_stage_tk[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatp_stage_tk[".strOrderBy"] = $tstrOrderBy;

$tdatatp_stage_tk[".orderindexes"] = array();


$tdatatp_stage_tk[".sqlHead"] = "SELECT stagetk_id,  	stagetk";
$tdatatp_stage_tk[".sqlFrom"] = "FROM tp_stage_tk";
$tdatatp_stage_tk[".sqlWhereExpr"] = "";
$tdatatp_stage_tk[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatp_stage_tk[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatp_stage_tk[".arrGroupsPerPage"] = $arrGPP;

$tdatatp_stage_tk[".highlightSearchResults"] = true;

$tableKeystp_stage_tk = array();
$tableKeystp_stage_tk[] = "stagetk_id";
$tdatatp_stage_tk[".Keys"] = $tableKeystp_stage_tk;


$tdatatp_stage_tk[".hideMobileList"] = array();




//	stagetk_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stagetk_id";
	$fdata["GoodName"] = "stagetk_id";
	$fdata["ownerTable"] = "tp_stage_tk";
	$fdata["Label"] = GetFieldLabel("tp_stage_tk","stagetk_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "stagetk_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stagetk_id";

	
	
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


	$tdatatp_stage_tk["stagetk_id"] = $fdata;
		$tdatatp_stage_tk[".searchableFields"][] = "stagetk_id";
//	stagetk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stagetk";
	$fdata["GoodName"] = "stagetk";
	$fdata["ownerTable"] = "tp_stage_tk";
	$fdata["Label"] = GetFieldLabel("tp_stage_tk","stagetk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stagetk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stagetk";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatp_stage_tk["stagetk"] = $fdata;
		$tdatatp_stage_tk[".searchableFields"][] = "stagetk";


$tables_data["tp_stage_tk"]=&$tdatatp_stage_tk;
$field_labels["tp_stage_tk"] = &$fieldLabelstp_stage_tk;
$fieldToolTips["tp_stage_tk"] = &$fieldToolTipstp_stage_tk;
$placeHolders["tp_stage_tk"] = &$placeHolderstp_stage_tk;
$page_titles["tp_stage_tk"] = &$pageTitlestp_stage_tk;


changeTextControlsToDate( "tp_stage_tk" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tp_stage_tk"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tp_stage_tk"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tp_stage_tk()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stagetk_id,  	stagetk";
$proto0["m_strFrom"] = "FROM tp_stage_tk";
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
	"m_strName" => "stagetk_id",
	"m_strTable" => "tp_stage_tk",
	"m_srcTableName" => "tp_stage_tk"
));

$proto6["m_sql"] = "stagetk_id";
$proto6["m_srcTableName"] = "tp_stage_tk";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "stagetk",
	"m_strTable" => "tp_stage_tk",
	"m_srcTableName" => "tp_stage_tk"
));

$proto8["m_sql"] = "stagetk";
$proto8["m_srcTableName"] = "tp_stage_tk";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tp_stage_tk";
$proto11["m_srcTableName"] = "tp_stage_tk";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "stagetk_id";
$proto11["m_columns"][] = "stagetk";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tp_stage_tk";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tp_stage_tk";
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
$proto0["m_srcTableName"]="tp_stage_tk";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tp_stage_tk = createSqlQuery_tp_stage_tk();


	
		;

		

$tdatatp_stage_tk[".sqlquery"] = $queryData_tp_stage_tk;



$tdatatp_stage_tk[".hasEvents"] = false;

?>