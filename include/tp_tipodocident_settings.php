<?php
$tdatatp_tipodocident = array();
$tdatatp_tipodocident[".searchableFields"] = array();
$tdatatp_tipodocident[".ShortName"] = "tp_tipodocident";
$tdatatp_tipodocident[".OwnerID"] = "";
$tdatatp_tipodocident[".OriginalTable"] = "tp_tipodocident";


$tdatatp_tipodocident[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatp_tipodocident[".originalPagesByType"] = $tdatatp_tipodocident[".pagesByType"];
$tdatatp_tipodocident[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatp_tipodocident[".originalPages"] = $tdatatp_tipodocident[".pages"];
$tdatatp_tipodocident[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatp_tipodocident[".originalDefaultPages"] = $tdatatp_tipodocident[".defaultPages"];

//	field labels
$fieldLabelstp_tipodocident = array();
$fieldToolTipstp_tipodocident = array();
$pageTitlestp_tipodocident = array();
$placeHolderstp_tipodocident = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstp_tipodocident["Spanish"] = array();
	$fieldToolTipstp_tipodocident["Spanish"] = array();
	$placeHolderstp_tipodocident["Spanish"] = array();
	$pageTitlestp_tipodocident["Spanish"] = array();
	$fieldLabelstp_tipodocident["Spanish"]["tdi_tpdoci_b"] = "Tdi Tpdoci B";
	$fieldToolTipstp_tipodocident["Spanish"]["tdi_tpdoci_b"] = "";
	$placeHolderstp_tipodocident["Spanish"]["tdi_tpdoci_b"] = "";
	$fieldLabelstp_tipodocident["Spanish"]["tdi_dstipdoc_b"] = "Tdi Dstipdoc B";
	$fieldToolTipstp_tipodocident["Spanish"]["tdi_dstipdoc_b"] = "";
	$placeHolderstp_tipodocident["Spanish"]["tdi_dstipdoc_b"] = "";
	if (count($fieldToolTipstp_tipodocident["Spanish"]))
		$tdatatp_tipodocident[".isUseToolTips"] = true;
}


	$tdatatp_tipodocident[".NCSearch"] = true;



$tdatatp_tipodocident[".shortTableName"] = "tp_tipodocident";
$tdatatp_tipodocident[".nSecOptions"] = 0;

$tdatatp_tipodocident[".mainTableOwnerID"] = "";
$tdatatp_tipodocident[".entityType"] = 0;
$tdatatp_tipodocident[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatp_tipodocident[".strOriginalTableName"] = "tp_tipodocident";

	



$tdatatp_tipodocident[".showAddInPopup"] = false;

$tdatatp_tipodocident[".showEditInPopup"] = false;

$tdatatp_tipodocident[".showViewInPopup"] = false;

$tdatatp_tipodocident[".listAjax"] = false;
//	temporary
//$tdatatp_tipodocident[".listAjax"] = false;

	$tdatatp_tipodocident[".audit"] = true;

	$tdatatp_tipodocident[".locking"] = true;


$pages = $tdatatp_tipodocident[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatp_tipodocident[".edit"] = true;
	$tdatatp_tipodocident[".afterEditAction"] = 1;
	$tdatatp_tipodocident[".closePopupAfterEdit"] = 1;
	$tdatatp_tipodocident[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatp_tipodocident[".add"] = true;
$tdatatp_tipodocident[".afterAddAction"] = 1;
$tdatatp_tipodocident[".closePopupAfterAdd"] = 1;
$tdatatp_tipodocident[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatp_tipodocident[".list"] = true;
}



$tdatatp_tipodocident[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatp_tipodocident[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatp_tipodocident[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatp_tipodocident[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatp_tipodocident[".printFriendly"] = true;
}



$tdatatp_tipodocident[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatp_tipodocident[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatp_tipodocident[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatp_tipodocident[".isUseAjaxSuggest"] = true;





$tdatatp_tipodocident[".ajaxCodeSnippetAdded"] = false;

$tdatatp_tipodocident[".buttonsAdded"] = false;

$tdatatp_tipodocident[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatp_tipodocident[".isUseTimeForSearch"] = false;


$tdatatp_tipodocident[".badgeColor"] = "DC143C";


$tdatatp_tipodocident[".allSearchFields"] = array();
$tdatatp_tipodocident[".filterFields"] = array();
$tdatatp_tipodocident[".requiredSearchFields"] = array();

$tdatatp_tipodocident[".googleLikeFields"] = array();
$tdatatp_tipodocident[".googleLikeFields"][] = "tdi_tpdoci_b";
$tdatatp_tipodocident[".googleLikeFields"][] = "tdi_dstipdoc_b";



$tdatatp_tipodocident[".tableType"] = "list";

$tdatatp_tipodocident[".printerPageOrientation"] = 0;
$tdatatp_tipodocident[".nPrinterPageScale"] = 100;

$tdatatp_tipodocident[".nPrinterSplitRecords"] = 40;

$tdatatp_tipodocident[".geocodingEnabled"] = false;










$tdatatp_tipodocident[".pageSize"] = 20;

$tdatatp_tipodocident[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatp_tipodocident[".strOrderBy"] = $tstrOrderBy;

$tdatatp_tipodocident[".orderindexes"] = array();


$tdatatp_tipodocident[".sqlHead"] = "SELECT tdi_tpdoci_b,  	tdi_dstipdoc_b";
$tdatatp_tipodocident[".sqlFrom"] = "FROM tp_tipodocident";
$tdatatp_tipodocident[".sqlWhereExpr"] = "";
$tdatatp_tipodocident[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatp_tipodocident[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatp_tipodocident[".arrGroupsPerPage"] = $arrGPP;

$tdatatp_tipodocident[".highlightSearchResults"] = true;

$tableKeystp_tipodocident = array();
$tableKeystp_tipodocident[] = "tdi_tpdoci_b";
$tdatatp_tipodocident[".Keys"] = $tableKeystp_tipodocident;


$tdatatp_tipodocident[".hideMobileList"] = array();




//	tdi_tpdoci_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tdi_tpdoci_b";
	$fdata["GoodName"] = "tdi_tpdoci_b";
	$fdata["ownerTable"] = "tp_tipodocident";
	$fdata["Label"] = GetFieldLabel("tp_tipodocident","tdi_tpdoci_b");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tdi_tpdoci_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tdi_tpdoci_b";

	
	
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


	$tdatatp_tipodocident["tdi_tpdoci_b"] = $fdata;
		$tdatatp_tipodocident[".searchableFields"][] = "tdi_tpdoci_b";
//	tdi_dstipdoc_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tdi_dstipdoc_b";
	$fdata["GoodName"] = "tdi_dstipdoc_b";
	$fdata["ownerTable"] = "tp_tipodocident";
	$fdata["Label"] = GetFieldLabel("tp_tipodocident","tdi_dstipdoc_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tdi_dstipdoc_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tdi_dstipdoc_b";

	
	
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


	$tdatatp_tipodocident["tdi_dstipdoc_b"] = $fdata;
		$tdatatp_tipodocident[".searchableFields"][] = "tdi_dstipdoc_b";


$tables_data["tp_tipodocident"]=&$tdatatp_tipodocident;
$field_labels["tp_tipodocident"] = &$fieldLabelstp_tipodocident;
$fieldToolTips["tp_tipodocident"] = &$fieldToolTipstp_tipodocident;
$placeHolders["tp_tipodocident"] = &$placeHolderstp_tipodocident;
$page_titles["tp_tipodocident"] = &$pageTitlestp_tipodocident;


changeTextControlsToDate( "tp_tipodocident" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tp_tipodocident"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tp_tipodocident"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tp_tipodocident()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tdi_tpdoci_b,  	tdi_dstipdoc_b";
$proto0["m_strFrom"] = "FROM tp_tipodocident";
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
	"m_strName" => "tdi_tpdoci_b",
	"m_strTable" => "tp_tipodocident",
	"m_srcTableName" => "tp_tipodocident"
));

$proto6["m_sql"] = "tdi_tpdoci_b";
$proto6["m_srcTableName"] = "tp_tipodocident";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tdi_dstipdoc_b",
	"m_strTable" => "tp_tipodocident",
	"m_srcTableName" => "tp_tipodocident"
));

$proto8["m_sql"] = "tdi_dstipdoc_b";
$proto8["m_srcTableName"] = "tp_tipodocident";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tp_tipodocident";
$proto11["m_srcTableName"] = "tp_tipodocident";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tdi_tpdoci_b";
$proto11["m_columns"][] = "tdi_dstipdoc_b";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tp_tipodocident";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tp_tipodocident";
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
$proto0["m_srcTableName"]="tp_tipodocident";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tp_tipodocident = createSqlQuery_tp_tipodocident();


	
		;

		

$tdatatp_tipodocident[".sqlquery"] = $queryData_tp_tipodocident;



$tdatatp_tipodocident[".hasEvents"] = false;

?>