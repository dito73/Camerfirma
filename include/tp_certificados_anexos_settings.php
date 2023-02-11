<?php
$tdatatp_certificados_anexos = array();
$tdatatp_certificados_anexos[".searchableFields"] = array();
$tdatatp_certificados_anexos[".ShortName"] = "tp_certificados_anexos";
$tdatatp_certificados_anexos[".OwnerID"] = "";
$tdatatp_certificados_anexos[".OriginalTable"] = "tp_certificados_anexos";


$tdatatp_certificados_anexos[".pagesByType"] = my_json_decode( "{}" );
$tdatatp_certificados_anexos[".originalPagesByType"] = $tdatatp_certificados_anexos[".pagesByType"];
$tdatatp_certificados_anexos[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatp_certificados_anexos[".originalPages"] = $tdatatp_certificados_anexos[".pages"];
$tdatatp_certificados_anexos[".defaultPages"] = my_json_decode( "{}" );
$tdatatp_certificados_anexos[".originalDefaultPages"] = $tdatatp_certificados_anexos[".defaultPages"];

//	field labels
$fieldLabelstp_certificados_anexos = array();
$fieldToolTipstp_certificados_anexos = array();
$pageTitlestp_certificados_anexos = array();
$placeHolderstp_certificados_anexos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstp_certificados_anexos["Spanish"] = array();
	$fieldToolTipstp_certificados_anexos["Spanish"] = array();
	$placeHolderstp_certificados_anexos["Spanish"] = array();
	$pageTitlestp_certificados_anexos["Spanish"] = array();
	$fieldLabelstp_certificados_anexos["Spanish"]["anexo_tipo"] = "Anexo Tipo";
	$fieldToolTipstp_certificados_anexos["Spanish"]["anexo_tipo"] = "";
	$placeHolderstp_certificados_anexos["Spanish"]["anexo_tipo"] = "";
	$fieldLabelstp_certificados_anexos["Spanish"]["certificado_id_fk"] = "Certificado Id Fk";
	$fieldToolTipstp_certificados_anexos["Spanish"]["certificado_id_fk"] = "";
	$placeHolderstp_certificados_anexos["Spanish"]["certificado_id_fk"] = "";
	$fieldLabelstp_certificados_anexos["Spanish"]["anexo"] = "Anexo";
	$fieldToolTipstp_certificados_anexos["Spanish"]["anexo"] = "";
	$placeHolderstp_certificados_anexos["Spanish"]["anexo"] = "";
	if (count($fieldToolTipstp_certificados_anexos["Spanish"]))
		$tdatatp_certificados_anexos[".isUseToolTips"] = true;
}


	$tdatatp_certificados_anexos[".NCSearch"] = true;



$tdatatp_certificados_anexos[".shortTableName"] = "tp_certificados_anexos";
$tdatatp_certificados_anexos[".nSecOptions"] = 0;

$tdatatp_certificados_anexos[".mainTableOwnerID"] = "";
$tdatatp_certificados_anexos[".entityType"] = 0;
$tdatatp_certificados_anexos[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatp_certificados_anexos[".strOriginalTableName"] = "tp_certificados_anexos";

	



$tdatatp_certificados_anexos[".showAddInPopup"] = false;

$tdatatp_certificados_anexos[".showEditInPopup"] = false;

$tdatatp_certificados_anexos[".showViewInPopup"] = false;

$tdatatp_certificados_anexos[".listAjax"] = false;
//	temporary
//$tdatatp_certificados_anexos[".listAjax"] = false;

	$tdatatp_certificados_anexos[".audit"] = true;

	$tdatatp_certificados_anexos[".locking"] = true;


$pages = $tdatatp_certificados_anexos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatp_certificados_anexos[".edit"] = true;
	$tdatatp_certificados_anexos[".afterEditAction"] = 1;
	$tdatatp_certificados_anexos[".closePopupAfterEdit"] = 1;
	$tdatatp_certificados_anexos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatp_certificados_anexos[".add"] = true;
$tdatatp_certificados_anexos[".afterAddAction"] = 1;
$tdatatp_certificados_anexos[".closePopupAfterAdd"] = 1;
$tdatatp_certificados_anexos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatp_certificados_anexos[".list"] = true;
}



$tdatatp_certificados_anexos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatp_certificados_anexos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatp_certificados_anexos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatp_certificados_anexos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatp_certificados_anexos[".printFriendly"] = true;
}



$tdatatp_certificados_anexos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatp_certificados_anexos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatp_certificados_anexos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatp_certificados_anexos[".isUseAjaxSuggest"] = true;





$tdatatp_certificados_anexos[".ajaxCodeSnippetAdded"] = false;

$tdatatp_certificados_anexos[".buttonsAdded"] = false;

$tdatatp_certificados_anexos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatp_certificados_anexos[".isUseTimeForSearch"] = false;


$tdatatp_certificados_anexos[".badgeColor"] = "E8926F";


$tdatatp_certificados_anexos[".allSearchFields"] = array();
$tdatatp_certificados_anexos[".filterFields"] = array();
$tdatatp_certificados_anexos[".requiredSearchFields"] = array();

$tdatatp_certificados_anexos[".googleLikeFields"] = array();
$tdatatp_certificados_anexos[".googleLikeFields"][] = "anexo_tipo";
$tdatatp_certificados_anexos[".googleLikeFields"][] = "certificado_id_fk";
$tdatatp_certificados_anexos[".googleLikeFields"][] = "anexo";



$tdatatp_certificados_anexos[".tableType"] = "list";

$tdatatp_certificados_anexos[".printerPageOrientation"] = 0;
$tdatatp_certificados_anexos[".nPrinterPageScale"] = 100;

$tdatatp_certificados_anexos[".nPrinterSplitRecords"] = 40;

$tdatatp_certificados_anexos[".geocodingEnabled"] = false;










$tdatatp_certificados_anexos[".pageSize"] = 20;

$tdatatp_certificados_anexos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatp_certificados_anexos[".strOrderBy"] = $tstrOrderBy;

$tdatatp_certificados_anexos[".orderindexes"] = array();


$tdatatp_certificados_anexos[".sqlHead"] = "SELECT anexo_tipo,  	certificado_id_fk,  	anexo";
$tdatatp_certificados_anexos[".sqlFrom"] = "FROM tp_certificados_anexos";
$tdatatp_certificados_anexos[".sqlWhereExpr"] = "";
$tdatatp_certificados_anexos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatp_certificados_anexos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatp_certificados_anexos[".arrGroupsPerPage"] = $arrGPP;

$tdatatp_certificados_anexos[".highlightSearchResults"] = true;

$tableKeystp_certificados_anexos = array();
$tableKeystp_certificados_anexos[] = "anexo_tipo";
$tdatatp_certificados_anexos[".Keys"] = $tableKeystp_certificados_anexos;


$tdatatp_certificados_anexos[".hideMobileList"] = array();




//	anexo_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "anexo_tipo";
	$fdata["GoodName"] = "anexo_tipo";
	$fdata["ownerTable"] = "tp_certificados_anexos";
	$fdata["Label"] = GetFieldLabel("tp_certificados_anexos","anexo_tipo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "anexo_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_tipo";

	
	
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


	$tdatatp_certificados_anexos["anexo_tipo"] = $fdata;
		$tdatatp_certificados_anexos[".searchableFields"][] = "anexo_tipo";
//	certificado_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "certificado_id_fk";
	$fdata["GoodName"] = "certificado_id_fk";
	$fdata["ownerTable"] = "tp_certificados_anexos";
	$fdata["Label"] = GetFieldLabel("tp_certificados_anexos","certificado_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "certificado_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "certificado_id_fk";

	
	
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
	$edata["LookupTable"] = "tp_certificados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "certificado_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "certificado_tipo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatatp_certificados_anexos["certificado_id_fk"] = $fdata;
		$tdatatp_certificados_anexos[".searchableFields"][] = "certificado_id_fk";
//	anexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "anexo";
	$fdata["GoodName"] = "anexo";
	$fdata["ownerTable"] = "tp_certificados_anexos";
	$fdata["Label"] = GetFieldLabel("tp_certificados_anexos","anexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "anexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatatp_certificados_anexos["anexo"] = $fdata;
		$tdatatp_certificados_anexos[".searchableFields"][] = "anexo";


$tables_data["tp_certificados_anexos"]=&$tdatatp_certificados_anexos;
$field_labels["tp_certificados_anexos"] = &$fieldLabelstp_certificados_anexos;
$fieldToolTips["tp_certificados_anexos"] = &$fieldToolTipstp_certificados_anexos;
$placeHolders["tp_certificados_anexos"] = &$placeHolderstp_certificados_anexos;
$page_titles["tp_certificados_anexos"] = &$pageTitlestp_certificados_anexos;


changeTextControlsToDate( "tp_certificados_anexos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tp_certificados_anexos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tp_certificados_anexos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tp_certificados_anexos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "anexo_tipo,  	certificado_id_fk,  	anexo";
$proto0["m_strFrom"] = "FROM tp_certificados_anexos";
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
	"m_strName" => "anexo_tipo",
	"m_strTable" => "tp_certificados_anexos",
	"m_srcTableName" => "tp_certificados_anexos"
));

$proto6["m_sql"] = "anexo_tipo";
$proto6["m_srcTableName"] = "tp_certificados_anexos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "certificado_id_fk",
	"m_strTable" => "tp_certificados_anexos",
	"m_srcTableName" => "tp_certificados_anexos"
));

$proto8["m_sql"] = "certificado_id_fk";
$proto8["m_srcTableName"] = "tp_certificados_anexos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo",
	"m_strTable" => "tp_certificados_anexos",
	"m_srcTableName" => "tp_certificados_anexos"
));

$proto10["m_sql"] = "anexo";
$proto10["m_srcTableName"] = "tp_certificados_anexos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tp_certificados_anexos";
$proto13["m_srcTableName"] = "tp_certificados_anexos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "anexo_tipo";
$proto13["m_columns"][] = "certificado_id_fk";
$proto13["m_columns"][] = "anexo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tp_certificados_anexos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tp_certificados_anexos";
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
$proto0["m_srcTableName"]="tp_certificados_anexos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tp_certificados_anexos = createSqlQuery_tp_certificados_anexos();


	
		;

			

$tdatatp_certificados_anexos[".sqlquery"] = $queryData_tp_certificados_anexos;



$tdatatp_certificados_anexos[".hasEvents"] = false;

?>