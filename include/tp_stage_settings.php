<?php
$tdatatp_stage = array();
$tdatatp_stage[".searchableFields"] = array();
$tdatatp_stage[".ShortName"] = "tp_stage";
$tdatatp_stage[".OwnerID"] = "";
$tdatatp_stage[".OriginalTable"] = "tp_stage";


$tdatatp_stage[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatp_stage[".originalPagesByType"] = $tdatatp_stage[".pagesByType"];
$tdatatp_stage[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatp_stage[".originalPages"] = $tdatatp_stage[".pages"];
$tdatatp_stage[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatp_stage[".originalDefaultPages"] = $tdatatp_stage[".defaultPages"];

//	field labels
$fieldLabelstp_stage = array();
$fieldToolTipstp_stage = array();
$pageTitlestp_stage = array();
$placeHolderstp_stage = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstp_stage["Spanish"] = array();
	$fieldToolTipstp_stage["Spanish"] = array();
	$placeHolderstp_stage["Spanish"] = array();
	$pageTitlestp_stage["Spanish"] = array();
	$fieldLabelstp_stage["Spanish"]["stage_id"] = "Stage Id";
	$fieldToolTipstp_stage["Spanish"]["stage_id"] = "";
	$placeHolderstp_stage["Spanish"]["stage_id"] = "";
	$fieldLabelstp_stage["Spanish"]["stage"] = "Stage";
	$fieldToolTipstp_stage["Spanish"]["stage"] = "";
	$placeHolderstp_stage["Spanish"]["stage"] = "";
	$fieldLabelstp_stage["Spanish"]["stage_desc"] = "Stage Desc";
	$fieldToolTipstp_stage["Spanish"]["stage_desc"] = "";
	$placeHolderstp_stage["Spanish"]["stage_desc"] = "";
	$fieldLabelstp_stage["Spanish"]["stage_group"] = "Stage Group";
	$fieldToolTipstp_stage["Spanish"]["stage_group"] = "";
	$placeHolderstp_stage["Spanish"]["stage_group"] = "";
	if (count($fieldToolTipstp_stage["Spanish"]))
		$tdatatp_stage[".isUseToolTips"] = true;
}


	$tdatatp_stage[".NCSearch"] = true;



$tdatatp_stage[".shortTableName"] = "tp_stage";
$tdatatp_stage[".nSecOptions"] = 0;

$tdatatp_stage[".mainTableOwnerID"] = "";
$tdatatp_stage[".entityType"] = 0;
$tdatatp_stage[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatp_stage[".strOriginalTableName"] = "tp_stage";

	



$tdatatp_stage[".showAddInPopup"] = false;

$tdatatp_stage[".showEditInPopup"] = false;

$tdatatp_stage[".showViewInPopup"] = false;

$tdatatp_stage[".listAjax"] = false;
//	temporary
//$tdatatp_stage[".listAjax"] = false;

	$tdatatp_stage[".audit"] = true;

	$tdatatp_stage[".locking"] = true;


$pages = $tdatatp_stage[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatp_stage[".edit"] = true;
	$tdatatp_stage[".afterEditAction"] = 1;
	$tdatatp_stage[".closePopupAfterEdit"] = 1;
	$tdatatp_stage[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatp_stage[".add"] = true;
$tdatatp_stage[".afterAddAction"] = 1;
$tdatatp_stage[".closePopupAfterAdd"] = 1;
$tdatatp_stage[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatp_stage[".list"] = true;
}



$tdatatp_stage[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatp_stage[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatp_stage[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatp_stage[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatp_stage[".printFriendly"] = true;
}



$tdatatp_stage[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatp_stage[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatp_stage[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatp_stage[".isUseAjaxSuggest"] = true;





$tdatatp_stage[".ajaxCodeSnippetAdded"] = false;

$tdatatp_stage[".buttonsAdded"] = false;

$tdatatp_stage[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatp_stage[".isUseTimeForSearch"] = false;


$tdatatp_stage[".badgeColor"] = "6DA5C8";


$tdatatp_stage[".allSearchFields"] = array();
$tdatatp_stage[".filterFields"] = array();
$tdatatp_stage[".requiredSearchFields"] = array();

$tdatatp_stage[".googleLikeFields"] = array();
$tdatatp_stage[".googleLikeFields"][] = "stage_id";
$tdatatp_stage[".googleLikeFields"][] = "stage";
$tdatatp_stage[".googleLikeFields"][] = "stage_desc";
$tdatatp_stage[".googleLikeFields"][] = "stage_group";



$tdatatp_stage[".tableType"] = "list";

$tdatatp_stage[".printerPageOrientation"] = 0;
$tdatatp_stage[".nPrinterPageScale"] = 100;

$tdatatp_stage[".nPrinterSplitRecords"] = 40;

$tdatatp_stage[".geocodingEnabled"] = false;










$tdatatp_stage[".pageSize"] = 20;

$tdatatp_stage[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatp_stage[".strOrderBy"] = $tstrOrderBy;

$tdatatp_stage[".orderindexes"] = array();


$tdatatp_stage[".sqlHead"] = "SELECT stage_id,  	stage,  	stage_desc,  	stage_group";
$tdatatp_stage[".sqlFrom"] = "FROM tp_stage";
$tdatatp_stage[".sqlWhereExpr"] = "";
$tdatatp_stage[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatp_stage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatp_stage[".arrGroupsPerPage"] = $arrGPP;

$tdatatp_stage[".highlightSearchResults"] = true;

$tableKeystp_stage = array();
$tableKeystp_stage[] = "stage_id";
$tdatatp_stage[".Keys"] = $tableKeystp_stage;


$tdatatp_stage[".hideMobileList"] = array();




//	stage_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stage_id";
	$fdata["GoodName"] = "stage_id";
	$fdata["ownerTable"] = "tp_stage";
	$fdata["Label"] = GetFieldLabel("tp_stage","stage_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "stage_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stage_id";

	
	
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


	$tdatatp_stage["stage_id"] = $fdata;
		$tdatatp_stage[".searchableFields"][] = "stage_id";
//	stage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stage";
	$fdata["GoodName"] = "stage";
	$fdata["ownerTable"] = "tp_stage";
	$fdata["Label"] = GetFieldLabel("tp_stage","stage");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatatp_stage["stage"] = $fdata;
		$tdatatp_stage[".searchableFields"][] = "stage";
//	stage_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stage_desc";
	$fdata["GoodName"] = "stage_desc";
	$fdata["ownerTable"] = "tp_stage";
	$fdata["Label"] = GetFieldLabel("tp_stage","stage_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stage_desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stage_desc";

	
	
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


	$tdatatp_stage["stage_desc"] = $fdata;
		$tdatatp_stage[".searchableFields"][] = "stage_desc";
//	stage_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stage_group";
	$fdata["GoodName"] = "stage_group";
	$fdata["ownerTable"] = "tp_stage";
	$fdata["Label"] = GetFieldLabel("tp_stage","stage_group");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "stage_group";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stage_group";

	
	
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


	$tdatatp_stage["stage_group"] = $fdata;
		$tdatatp_stage[".searchableFields"][] = "stage_group";


$tables_data["tp_stage"]=&$tdatatp_stage;
$field_labels["tp_stage"] = &$fieldLabelstp_stage;
$fieldToolTips["tp_stage"] = &$fieldToolTipstp_stage;
$placeHolders["tp_stage"] = &$placeHolderstp_stage;
$page_titles["tp_stage"] = &$pageTitlestp_stage;


changeTextControlsToDate( "tp_stage" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tp_stage"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tp_stage"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tp_stage()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "stage_id,  	stage,  	stage_desc,  	stage_group";
$proto0["m_strFrom"] = "FROM tp_stage";
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
	"m_strName" => "stage_id",
	"m_strTable" => "tp_stage",
	"m_srcTableName" => "tp_stage"
));

$proto6["m_sql"] = "stage_id";
$proto6["m_srcTableName"] = "tp_stage";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "stage",
	"m_strTable" => "tp_stage",
	"m_srcTableName" => "tp_stage"
));

$proto8["m_sql"] = "stage";
$proto8["m_srcTableName"] = "tp_stage";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stage_desc",
	"m_strTable" => "tp_stage",
	"m_srcTableName" => "tp_stage"
));

$proto10["m_sql"] = "stage_desc";
$proto10["m_srcTableName"] = "tp_stage";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stage_group",
	"m_strTable" => "tp_stage",
	"m_srcTableName" => "tp_stage"
));

$proto12["m_sql"] = "stage_group";
$proto12["m_srcTableName"] = "tp_stage";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tp_stage";
$proto15["m_srcTableName"] = "tp_stage";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "stage_id";
$proto15["m_columns"][] = "stage";
$proto15["m_columns"][] = "stage_desc";
$proto15["m_columns"][] = "stage_group";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tp_stage";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tp_stage";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tp_stage";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tp_stage = createSqlQuery_tp_stage();


	
		;

				

$tdatatp_stage[".sqlquery"] = $queryData_tp_stage;



$tdatatp_stage[".hasEvents"] = false;

?>