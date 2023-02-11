<?php
$tdatatp_token = array();
$tdatatp_token[".searchableFields"] = array();
$tdatatp_token[".ShortName"] = "tp_token";
$tdatatp_token[".OwnerID"] = "";
$tdatatp_token[".OriginalTable"] = "tp_token";


$tdatatp_token[".pagesByType"] = my_json_decode( "{}" );
$tdatatp_token[".originalPagesByType"] = $tdatatp_token[".pagesByType"];
$tdatatp_token[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatp_token[".originalPages"] = $tdatatp_token[".pages"];
$tdatatp_token[".defaultPages"] = my_json_decode( "{}" );
$tdatatp_token[".originalDefaultPages"] = $tdatatp_token[".defaultPages"];

//	field labels
$fieldLabelstp_token = array();
$fieldToolTipstp_token = array();
$pageTitlestp_token = array();
$placeHolderstp_token = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstp_token["Spanish"] = array();
	$fieldToolTipstp_token["Spanish"] = array();
	$placeHolderstp_token["Spanish"] = array();
	$pageTitlestp_token["Spanish"] = array();
	$fieldLabelstp_token["Spanish"]["tk_id"] = "Tk Id";
	$fieldToolTipstp_token["Spanish"]["tk_id"] = "";
	$placeHolderstp_token["Spanish"]["tk_id"] = "";
	$fieldLabelstp_token["Spanish"]["tk_tipo"] = "Tk Tipo";
	$fieldToolTipstp_token["Spanish"]["tk_tipo"] = "";
	$placeHolderstp_token["Spanish"]["tk_tipo"] = "";
	if (count($fieldToolTipstp_token["Spanish"]))
		$tdatatp_token[".isUseToolTips"] = true;
}


	$tdatatp_token[".NCSearch"] = true;



$tdatatp_token[".shortTableName"] = "tp_token";
$tdatatp_token[".nSecOptions"] = 0;

$tdatatp_token[".mainTableOwnerID"] = "";
$tdatatp_token[".entityType"] = 0;
$tdatatp_token[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatp_token[".strOriginalTableName"] = "tp_token";

	



$tdatatp_token[".showAddInPopup"] = false;

$tdatatp_token[".showEditInPopup"] = false;

$tdatatp_token[".showViewInPopup"] = false;

$tdatatp_token[".listAjax"] = false;
//	temporary
//$tdatatp_token[".listAjax"] = false;

	$tdatatp_token[".audit"] = true;

	$tdatatp_token[".locking"] = true;


$pages = $tdatatp_token[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatp_token[".edit"] = true;
	$tdatatp_token[".afterEditAction"] = 1;
	$tdatatp_token[".closePopupAfterEdit"] = 1;
	$tdatatp_token[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatp_token[".add"] = true;
$tdatatp_token[".afterAddAction"] = 1;
$tdatatp_token[".closePopupAfterAdd"] = 1;
$tdatatp_token[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatp_token[".list"] = true;
}



$tdatatp_token[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatp_token[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatp_token[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatp_token[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatp_token[".printFriendly"] = true;
}



$tdatatp_token[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatp_token[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatp_token[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatp_token[".isUseAjaxSuggest"] = true;





$tdatatp_token[".ajaxCodeSnippetAdded"] = false;

$tdatatp_token[".buttonsAdded"] = false;

$tdatatp_token[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatp_token[".isUseTimeForSearch"] = false;


$tdatatp_token[".badgeColor"] = "DC143C";


$tdatatp_token[".allSearchFields"] = array();
$tdatatp_token[".filterFields"] = array();
$tdatatp_token[".requiredSearchFields"] = array();

$tdatatp_token[".googleLikeFields"] = array();
$tdatatp_token[".googleLikeFields"][] = "tk_id";
$tdatatp_token[".googleLikeFields"][] = "tk_tipo";



$tdatatp_token[".tableType"] = "list";

$tdatatp_token[".printerPageOrientation"] = 0;
$tdatatp_token[".nPrinterPageScale"] = 100;

$tdatatp_token[".nPrinterSplitRecords"] = 40;

$tdatatp_token[".geocodingEnabled"] = false;










$tdatatp_token[".pageSize"] = 20;

$tdatatp_token[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatp_token[".strOrderBy"] = $tstrOrderBy;

$tdatatp_token[".orderindexes"] = array();


$tdatatp_token[".sqlHead"] = "SELECT tk_id,  	tk_tipo";
$tdatatp_token[".sqlFrom"] = "FROM tp_token";
$tdatatp_token[".sqlWhereExpr"] = "";
$tdatatp_token[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatp_token[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatp_token[".arrGroupsPerPage"] = $arrGPP;

$tdatatp_token[".highlightSearchResults"] = true;

$tableKeystp_token = array();
$tableKeystp_token[] = "tk_id";
$tdatatp_token[".Keys"] = $tableKeystp_token;


$tdatatp_token[".hideMobileList"] = array();




//	tk_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tk_id";
	$fdata["GoodName"] = "tk_id";
	$fdata["ownerTable"] = "tp_token";
	$fdata["Label"] = GetFieldLabel("tp_token","tk_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tk_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tk_id";

	
	
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


	$tdatatp_token["tk_id"] = $fdata;
		$tdatatp_token[".searchableFields"][] = "tk_id";
//	tk_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tk_tipo";
	$fdata["GoodName"] = "tk_tipo";
	$fdata["ownerTable"] = "tp_token";
	$fdata["Label"] = GetFieldLabel("tp_token","tk_tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tk_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tk_tipo";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatp_token["tk_tipo"] = $fdata;
		$tdatatp_token[".searchableFields"][] = "tk_tipo";


$tables_data["tp_token"]=&$tdatatp_token;
$field_labels["tp_token"] = &$fieldLabelstp_token;
$fieldToolTips["tp_token"] = &$fieldToolTipstp_token;
$placeHolders["tp_token"] = &$placeHolderstp_token;
$page_titles["tp_token"] = &$pageTitlestp_token;


changeTextControlsToDate( "tp_token" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tp_token"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tp_token"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tp_token()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tk_id,  	tk_tipo";
$proto0["m_strFrom"] = "FROM tp_token";
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
	"m_strName" => "tk_id",
	"m_strTable" => "tp_token",
	"m_srcTableName" => "tp_token"
));

$proto6["m_sql"] = "tk_id";
$proto6["m_srcTableName"] = "tp_token";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tk_tipo",
	"m_strTable" => "tp_token",
	"m_srcTableName" => "tp_token"
));

$proto8["m_sql"] = "tk_tipo";
$proto8["m_srcTableName"] = "tp_token";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tp_token";
$proto11["m_srcTableName"] = "tp_token";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tk_id";
$proto11["m_columns"][] = "tk_tipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tp_token";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tp_token";
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
$proto0["m_srcTableName"]="tp_token";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tp_token = createSqlQuery_tp_token();


	
		;

		

$tdatatp_token[".sqlquery"] = $queryData_tp_token;



$tdatatp_token[".hasEvents"] = false;

?>