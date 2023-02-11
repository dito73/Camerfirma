<?php
$tdatatickets_tipo = array();
$tdatatickets_tipo[".searchableFields"] = array();
$tdatatickets_tipo[".ShortName"] = "tickets_tipo";
$tdatatickets_tipo[".OwnerID"] = "";
$tdatatickets_tipo[".OriginalTable"] = "tickets_tipo";


$tdatatickets_tipo[".pagesByType"] = my_json_decode( "{}" );
$tdatatickets_tipo[".originalPagesByType"] = $tdatatickets_tipo[".pagesByType"];
$tdatatickets_tipo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatickets_tipo[".originalPages"] = $tdatatickets_tipo[".pages"];
$tdatatickets_tipo[".defaultPages"] = my_json_decode( "{}" );
$tdatatickets_tipo[".originalDefaultPages"] = $tdatatickets_tipo[".defaultPages"];

//	field labels
$fieldLabelstickets_tipo = array();
$fieldToolTipstickets_tipo = array();
$pageTitlestickets_tipo = array();
$placeHolderstickets_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstickets_tipo["Spanish"] = array();
	$fieldToolTipstickets_tipo["Spanish"] = array();
	$placeHolderstickets_tipo["Spanish"] = array();
	$pageTitlestickets_tipo["Spanish"] = array();
	$fieldLabelstickets_tipo["Spanish"]["ttipo_id"] = "Ttipo Id";
	$fieldToolTipstickets_tipo["Spanish"]["ttipo_id"] = "";
	$placeHolderstickets_tipo["Spanish"]["ttipo_id"] = "";
	$fieldLabelstickets_tipo["Spanish"]["ttipo"] = "Ttipo";
	$fieldToolTipstickets_tipo["Spanish"]["ttipo"] = "";
	$placeHolderstickets_tipo["Spanish"]["ttipo"] = "";
	$fieldLabelstickets_tipo["Spanish"]["ttipo_descripcion"] = "Ttipo Descripcion";
	$fieldToolTipstickets_tipo["Spanish"]["ttipo_descripcion"] = "";
	$placeHolderstickets_tipo["Spanish"]["ttipo_descripcion"] = "";
	if (count($fieldToolTipstickets_tipo["Spanish"]))
		$tdatatickets_tipo[".isUseToolTips"] = true;
}


	$tdatatickets_tipo[".NCSearch"] = true;



$tdatatickets_tipo[".shortTableName"] = "tickets_tipo";
$tdatatickets_tipo[".nSecOptions"] = 0;

$tdatatickets_tipo[".mainTableOwnerID"] = "";
$tdatatickets_tipo[".entityType"] = 0;
$tdatatickets_tipo[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatickets_tipo[".strOriginalTableName"] = "tickets_tipo";

	



$tdatatickets_tipo[".showAddInPopup"] = false;

$tdatatickets_tipo[".showEditInPopup"] = false;

$tdatatickets_tipo[".showViewInPopup"] = false;

$tdatatickets_tipo[".listAjax"] = false;
//	temporary
//$tdatatickets_tipo[".listAjax"] = false;

	$tdatatickets_tipo[".audit"] = true;

	$tdatatickets_tipo[".locking"] = true;


$pages = $tdatatickets_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatickets_tipo[".edit"] = true;
	$tdatatickets_tipo[".afterEditAction"] = 1;
	$tdatatickets_tipo[".closePopupAfterEdit"] = 1;
	$tdatatickets_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatickets_tipo[".add"] = true;
$tdatatickets_tipo[".afterAddAction"] = 1;
$tdatatickets_tipo[".closePopupAfterAdd"] = 1;
$tdatatickets_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatickets_tipo[".list"] = true;
}



$tdatatickets_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatickets_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatickets_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatickets_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatickets_tipo[".printFriendly"] = true;
}



$tdatatickets_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatickets_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatickets_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatickets_tipo[".isUseAjaxSuggest"] = true;





$tdatatickets_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatatickets_tipo[".buttonsAdded"] = false;

$tdatatickets_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatickets_tipo[".isUseTimeForSearch"] = false;


$tdatatickets_tipo[".badgeColor"] = "EDCA00";


$tdatatickets_tipo[".allSearchFields"] = array();
$tdatatickets_tipo[".filterFields"] = array();
$tdatatickets_tipo[".requiredSearchFields"] = array();

$tdatatickets_tipo[".googleLikeFields"] = array();
$tdatatickets_tipo[".googleLikeFields"][] = "ttipo_id";
$tdatatickets_tipo[".googleLikeFields"][] = "ttipo";
$tdatatickets_tipo[".googleLikeFields"][] = "ttipo_descripcion";



$tdatatickets_tipo[".tableType"] = "list";

$tdatatickets_tipo[".printerPageOrientation"] = 0;
$tdatatickets_tipo[".nPrinterPageScale"] = 100;

$tdatatickets_tipo[".nPrinterSplitRecords"] = 40;

$tdatatickets_tipo[".geocodingEnabled"] = false;










$tdatatickets_tipo[".pageSize"] = 20;

$tdatatickets_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatickets_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatatickets_tipo[".orderindexes"] = array();


$tdatatickets_tipo[".sqlHead"] = "SELECT ttipo_id,  	ttipo,  	ttipo_descripcion";
$tdatatickets_tipo[".sqlFrom"] = "FROM tickets_tipo";
$tdatatickets_tipo[".sqlWhereExpr"] = "";
$tdatatickets_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatickets_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatickets_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatatickets_tipo[".highlightSearchResults"] = true;

$tableKeystickets_tipo = array();
$tableKeystickets_tipo[] = "ttipo_id";
$tdatatickets_tipo[".Keys"] = $tableKeystickets_tipo;


$tdatatickets_tipo[".hideMobileList"] = array();




//	ttipo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ttipo_id";
	$fdata["GoodName"] = "ttipo_id";
	$fdata["ownerTable"] = "tickets_tipo";
	$fdata["Label"] = GetFieldLabel("tickets_tipo","ttipo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ttipo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ttipo_id";

	
	
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


	$tdatatickets_tipo["ttipo_id"] = $fdata;
		$tdatatickets_tipo[".searchableFields"][] = "ttipo_id";
//	ttipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ttipo";
	$fdata["GoodName"] = "ttipo";
	$fdata["ownerTable"] = "tickets_tipo";
	$fdata["Label"] = GetFieldLabel("tickets_tipo","ttipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ttipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ttipo";

	
	
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


	$tdatatickets_tipo["ttipo"] = $fdata;
		$tdatatickets_tipo[".searchableFields"][] = "ttipo";
//	ttipo_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ttipo_descripcion";
	$fdata["GoodName"] = "ttipo_descripcion";
	$fdata["ownerTable"] = "tickets_tipo";
	$fdata["Label"] = GetFieldLabel("tickets_tipo","ttipo_descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ttipo_descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ttipo_descripcion";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatatickets_tipo["ttipo_descripcion"] = $fdata;
		$tdatatickets_tipo[".searchableFields"][] = "ttipo_descripcion";


$tables_data["tickets_tipo"]=&$tdatatickets_tipo;
$field_labels["tickets_tipo"] = &$fieldLabelstickets_tipo;
$fieldToolTips["tickets_tipo"] = &$fieldToolTipstickets_tipo;
$placeHolders["tickets_tipo"] = &$placeHolderstickets_tipo;
$page_titles["tickets_tipo"] = &$pageTitlestickets_tipo;


changeTextControlsToDate( "tickets_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tickets_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tickets_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tickets_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ttipo_id,  	ttipo,  	ttipo_descripcion";
$proto0["m_strFrom"] = "FROM tickets_tipo";
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
	"m_strName" => "ttipo_id",
	"m_strTable" => "tickets_tipo",
	"m_srcTableName" => "tickets_tipo"
));

$proto6["m_sql"] = "ttipo_id";
$proto6["m_srcTableName"] = "tickets_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ttipo",
	"m_strTable" => "tickets_tipo",
	"m_srcTableName" => "tickets_tipo"
));

$proto8["m_sql"] = "ttipo";
$proto8["m_srcTableName"] = "tickets_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ttipo_descripcion",
	"m_strTable" => "tickets_tipo",
	"m_srcTableName" => "tickets_tipo"
));

$proto10["m_sql"] = "ttipo_descripcion";
$proto10["m_srcTableName"] = "tickets_tipo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tickets_tipo";
$proto13["m_srcTableName"] = "tickets_tipo";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ttipo_id";
$proto13["m_columns"][] = "ttipo";
$proto13["m_columns"][] = "ttipo_descripcion";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tickets_tipo";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tickets_tipo";
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
$proto0["m_srcTableName"]="tickets_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tickets_tipo = createSqlQuery_tickets_tipo();


	
		;

			

$tdatatickets_tipo[".sqlquery"] = $queryData_tickets_tipo;



$tdatatickets_tipo[".hasEvents"] = false;

?>