<?php
$tdatatp_certificados = array();
$tdatatp_certificados[".searchableFields"] = array();
$tdatatp_certificados[".ShortName"] = "tp_certificados";
$tdatatp_certificados[".OwnerID"] = "";
$tdatatp_certificados[".OriginalTable"] = "tp_certificados";


$tdatatp_certificados[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatatp_certificados[".originalPagesByType"] = $tdatatp_certificados[".pagesByType"];
$tdatatp_certificados[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatatp_certificados[".originalPages"] = $tdatatp_certificados[".pages"];
$tdatatp_certificados[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatatp_certificados[".originalDefaultPages"] = $tdatatp_certificados[".defaultPages"];

//	field labels
$fieldLabelstp_certificados = array();
$fieldToolTipstp_certificados = array();
$pageTitlestp_certificados = array();
$placeHolderstp_certificados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstp_certificados["Spanish"] = array();
	$fieldToolTipstp_certificados["Spanish"] = array();
	$placeHolderstp_certificados["Spanish"] = array();
	$pageTitlestp_certificados["Spanish"] = array();
	$fieldLabelstp_certificados["Spanish"]["certificado_id"] = "Certificado Id";
	$fieldToolTipstp_certificados["Spanish"]["certificado_id"] = "";
	$placeHolderstp_certificados["Spanish"]["certificado_id"] = "";
	$fieldLabelstp_certificados["Spanish"]["certificado_tipo"] = "Certificado Tipo";
	$fieldToolTipstp_certificados["Spanish"]["certificado_tipo"] = "";
	$placeHolderstp_certificados["Spanish"]["certificado_tipo"] = "";
	if (count($fieldToolTipstp_certificados["Spanish"]))
		$tdatatp_certificados[".isUseToolTips"] = true;
}


	$tdatatp_certificados[".NCSearch"] = true;



$tdatatp_certificados[".shortTableName"] = "tp_certificados";
$tdatatp_certificados[".nSecOptions"] = 0;

$tdatatp_certificados[".mainTableOwnerID"] = "";
$tdatatp_certificados[".entityType"] = 0;
$tdatatp_certificados[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatp_certificados[".strOriginalTableName"] = "tp_certificados";

	



$tdatatp_certificados[".showAddInPopup"] = false;

$tdatatp_certificados[".showEditInPopup"] = false;

$tdatatp_certificados[".showViewInPopup"] = false;

$tdatatp_certificados[".listAjax"] = false;
//	temporary
//$tdatatp_certificados[".listAjax"] = false;

	$tdatatp_certificados[".audit"] = true;

	$tdatatp_certificados[".locking"] = true;


$pages = $tdatatp_certificados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatp_certificados[".edit"] = true;
	$tdatatp_certificados[".afterEditAction"] = 1;
	$tdatatp_certificados[".closePopupAfterEdit"] = 1;
	$tdatatp_certificados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatp_certificados[".add"] = true;
$tdatatp_certificados[".afterAddAction"] = 1;
$tdatatp_certificados[".closePopupAfterAdd"] = 1;
$tdatatp_certificados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatp_certificados[".list"] = true;
}



$tdatatp_certificados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatp_certificados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatp_certificados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatp_certificados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatp_certificados[".printFriendly"] = true;
}



$tdatatp_certificados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatp_certificados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatp_certificados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatp_certificados[".isUseAjaxSuggest"] = true;





$tdatatp_certificados[".ajaxCodeSnippetAdded"] = false;

$tdatatp_certificados[".buttonsAdded"] = false;

$tdatatp_certificados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatp_certificados[".isUseTimeForSearch"] = false;


$tdatatp_certificados[".badgeColor"] = "CD5C5C";


$tdatatp_certificados[".allSearchFields"] = array();
$tdatatp_certificados[".filterFields"] = array();
$tdatatp_certificados[".requiredSearchFields"] = array();

$tdatatp_certificados[".googleLikeFields"] = array();
$tdatatp_certificados[".googleLikeFields"][] = "certificado_id";
$tdatatp_certificados[".googleLikeFields"][] = "certificado_tipo";



$tdatatp_certificados[".tableType"] = "list";

$tdatatp_certificados[".printerPageOrientation"] = 0;
$tdatatp_certificados[".nPrinterPageScale"] = 100;

$tdatatp_certificados[".nPrinterSplitRecords"] = 40;

$tdatatp_certificados[".geocodingEnabled"] = false;










$tdatatp_certificados[".pageSize"] = 20;

$tdatatp_certificados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatp_certificados[".strOrderBy"] = $tstrOrderBy;

$tdatatp_certificados[".orderindexes"] = array();


$tdatatp_certificados[".sqlHead"] = "SELECT certificado_id,  	certificado_tipo";
$tdatatp_certificados[".sqlFrom"] = "FROM tp_certificados";
$tdatatp_certificados[".sqlWhereExpr"] = "";
$tdatatp_certificados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatp_certificados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatp_certificados[".arrGroupsPerPage"] = $arrGPP;

$tdatatp_certificados[".highlightSearchResults"] = true;

$tableKeystp_certificados = array();
$tableKeystp_certificados[] = "certificado_id";
$tdatatp_certificados[".Keys"] = $tableKeystp_certificados;


$tdatatp_certificados[".hideMobileList"] = array();




//	certificado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "certificado_id";
	$fdata["GoodName"] = "certificado_id";
	$fdata["ownerTable"] = "tp_certificados";
	$fdata["Label"] = GetFieldLabel("tp_certificados","certificado_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "certificado_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "certificado_id";

	
	
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


	$tdatatp_certificados["certificado_id"] = $fdata;
		$tdatatp_certificados[".searchableFields"][] = "certificado_id";
//	certificado_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "certificado_tipo";
	$fdata["GoodName"] = "certificado_tipo";
	$fdata["ownerTable"] = "tp_certificados";
	$fdata["Label"] = GetFieldLabel("tp_certificados","certificado_tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "certificado_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "certificado_tipo";

	
	
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


	$tdatatp_certificados["certificado_tipo"] = $fdata;
		$tdatatp_certificados[".searchableFields"][] = "certificado_tipo";


$tables_data["tp_certificados"]=&$tdatatp_certificados;
$field_labels["tp_certificados"] = &$fieldLabelstp_certificados;
$fieldToolTips["tp_certificados"] = &$fieldToolTipstp_certificados;
$placeHolders["tp_certificados"] = &$placeHolderstp_certificados;
$page_titles["tp_certificados"] = &$pageTitlestp_certificados;


changeTextControlsToDate( "tp_certificados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tp_certificados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tp_certificados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tp_certificados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "certificado_id,  	certificado_tipo";
$proto0["m_strFrom"] = "FROM tp_certificados";
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
	"m_strName" => "certificado_id",
	"m_strTable" => "tp_certificados",
	"m_srcTableName" => "tp_certificados"
));

$proto6["m_sql"] = "certificado_id";
$proto6["m_srcTableName"] = "tp_certificados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "certificado_tipo",
	"m_strTable" => "tp_certificados",
	"m_srcTableName" => "tp_certificados"
));

$proto8["m_sql"] = "certificado_tipo";
$proto8["m_srcTableName"] = "tp_certificados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tp_certificados";
$proto11["m_srcTableName"] = "tp_certificados";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "certificado_id";
$proto11["m_columns"][] = "certificado_tipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tp_certificados";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tp_certificados";
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
$proto0["m_srcTableName"]="tp_certificados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tp_certificados = createSqlQuery_tp_certificados();


	
		;

		

$tdatatp_certificados[".sqlquery"] = $queryData_tp_certificados;



$tdatatp_certificados[".hasEvents"] = false;

?>