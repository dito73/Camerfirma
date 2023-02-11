<?php
$tdatatoken_tipo_q = array();
$tdatatoken_tipo_q[".searchableFields"] = array();
$tdatatoken_tipo_q[".ShortName"] = "token_tipo_q";
$tdatatoken_tipo_q[".OwnerID"] = "";
$tdatatoken_tipo_q[".OriginalTable"] = "token_tipo";


$tdatatoken_tipo_q[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatoken_tipo_q[".originalPagesByType"] = $tdatatoken_tipo_q[".pagesByType"];
$tdatatoken_tipo_q[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatoken_tipo_q[".originalPages"] = $tdatatoken_tipo_q[".pages"];
$tdatatoken_tipo_q[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatoken_tipo_q[".originalDefaultPages"] = $tdatatoken_tipo_q[".defaultPages"];

//	field labels
$fieldLabelstoken_tipo_q = array();
$fieldToolTipstoken_tipo_q = array();
$pageTitlestoken_tipo_q = array();
$placeHolderstoken_tipo_q = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstoken_tipo_q["Spanish"] = array();
	$fieldToolTipstoken_tipo_q["Spanish"] = array();
	$placeHolderstoken_tipo_q["Spanish"] = array();
	$pageTitlestoken_tipo_q["Spanish"] = array();
	$fieldLabelstoken_tipo_q["Spanish"]["tk_count_id"] = "Tk Count Id";
	$fieldToolTipstoken_tipo_q["Spanish"]["tk_count_id"] = "";
	$placeHolderstoken_tipo_q["Spanish"]["tk_count_id"] = "";
	$fieldLabelstoken_tipo_q["Spanish"]["ID_FK"] = "ID FK";
	$fieldToolTipstoken_tipo_q["Spanish"]["ID_FK"] = "";
	$placeHolderstoken_tipo_q["Spanish"]["ID_FK"] = "";
	$fieldLabelstoken_tipo_q["Spanish"]["tk_id_fk"] = "Tipo";
	$fieldToolTipstoken_tipo_q["Spanish"]["tk_id_fk"] = "";
	$placeHolderstoken_tipo_q["Spanish"]["tk_id_fk"] = "";
	$fieldLabelstoken_tipo_q["Spanish"]["tk_qty"] = "Cantidad";
	$fieldToolTipstoken_tipo_q["Spanish"]["tk_qty"] = "";
	$placeHolderstoken_tipo_q["Spanish"]["tk_qty"] = "";
	$fieldLabelstoken_tipo_q["Spanish"]["tk_nombre"] = "Nombre";
	$fieldToolTipstoken_tipo_q["Spanish"]["tk_nombre"] = "";
	$placeHolderstoken_tipo_q["Spanish"]["tk_nombre"] = "";
	if (count($fieldToolTipstoken_tipo_q["Spanish"]))
		$tdatatoken_tipo_q[".isUseToolTips"] = true;
}


	$tdatatoken_tipo_q[".NCSearch"] = true;



$tdatatoken_tipo_q[".shortTableName"] = "token_tipo_q";
$tdatatoken_tipo_q[".nSecOptions"] = 0;

$tdatatoken_tipo_q[".mainTableOwnerID"] = "";
$tdatatoken_tipo_q[".entityType"] = 1;
$tdatatoken_tipo_q[".connId"] = "sgiysp_at_127_0_0_1";


$tdatatoken_tipo_q[".strOriginalTableName"] = "token_tipo";

	



$tdatatoken_tipo_q[".showAddInPopup"] = false;

$tdatatoken_tipo_q[".showEditInPopup"] = false;

$tdatatoken_tipo_q[".showViewInPopup"] = false;

$tdatatoken_tipo_q[".listAjax"] = false;
//	temporary
//$tdatatoken_tipo_q[".listAjax"] = false;

	$tdatatoken_tipo_q[".audit"] = true;

	$tdatatoken_tipo_q[".locking"] = true;


$pages = $tdatatoken_tipo_q[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatoken_tipo_q[".edit"] = true;
	$tdatatoken_tipo_q[".afterEditAction"] = 1;
	$tdatatoken_tipo_q[".closePopupAfterEdit"] = 1;
	$tdatatoken_tipo_q[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatoken_tipo_q[".add"] = true;
$tdatatoken_tipo_q[".afterAddAction"] = 1;
$tdatatoken_tipo_q[".closePopupAfterAdd"] = 1;
$tdatatoken_tipo_q[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatoken_tipo_q[".list"] = true;
}



$tdatatoken_tipo_q[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatoken_tipo_q[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatoken_tipo_q[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatoken_tipo_q[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatoken_tipo_q[".printFriendly"] = true;
}



$tdatatoken_tipo_q[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatoken_tipo_q[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatoken_tipo_q[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatoken_tipo_q[".isUseAjaxSuggest"] = true;





$tdatatoken_tipo_q[".ajaxCodeSnippetAdded"] = false;

$tdatatoken_tipo_q[".buttonsAdded"] = false;

$tdatatoken_tipo_q[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatoken_tipo_q[".isUseTimeForSearch"] = false;


$tdatatoken_tipo_q[".badgeColor"] = "008B8B";


$tdatatoken_tipo_q[".allSearchFields"] = array();
$tdatatoken_tipo_q[".filterFields"] = array();
$tdatatoken_tipo_q[".requiredSearchFields"] = array();

$tdatatoken_tipo_q[".googleLikeFields"] = array();
$tdatatoken_tipo_q[".googleLikeFields"][] = "tk_count_id";
$tdatatoken_tipo_q[".googleLikeFields"][] = "ID_FK";
$tdatatoken_tipo_q[".googleLikeFields"][] = "tk_id_fk";
$tdatatoken_tipo_q[".googleLikeFields"][] = "tk_nombre";
$tdatatoken_tipo_q[".googleLikeFields"][] = "tk_qty";



$tdatatoken_tipo_q[".tableType"] = "list";

$tdatatoken_tipo_q[".printerPageOrientation"] = 0;
$tdatatoken_tipo_q[".nPrinterPageScale"] = 100;

$tdatatoken_tipo_q[".nPrinterSplitRecords"] = 40;

$tdatatoken_tipo_q[".geocodingEnabled"] = false;










$tdatatoken_tipo_q[".pageSize"] = 20;

$tdatatoken_tipo_q[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatoken_tipo_q[".strOrderBy"] = $tstrOrderBy;

$tdatatoken_tipo_q[".orderindexes"] = array();


$tdatatoken_tipo_q[".sqlHead"] = "SELECT tk_count_id,  	ID_FK,  	tk_id_fk,  	tk_nombre,  	tk_qty";
$tdatatoken_tipo_q[".sqlFrom"] = "FROM token_tipo";
$tdatatoken_tipo_q[".sqlWhereExpr"] = "";
$tdatatoken_tipo_q[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatoken_tipo_q[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatoken_tipo_q[".arrGroupsPerPage"] = $arrGPP;

$tdatatoken_tipo_q[".highlightSearchResults"] = true;

$tableKeystoken_tipo_q = array();
$tableKeystoken_tipo_q[] = "tk_count_id";
$tdatatoken_tipo_q[".Keys"] = $tableKeystoken_tipo_q;


$tdatatoken_tipo_q[".hideMobileList"] = array();




//	tk_count_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tk_count_id";
	$fdata["GoodName"] = "tk_count_id";
	$fdata["ownerTable"] = "token_tipo";
	$fdata["Label"] = GetFieldLabel("token_tipo_q","tk_count_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tk_count_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tk_count_id";

	
	
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


	$tdatatoken_tipo_q["tk_count_id"] = $fdata;
		$tdatatoken_tipo_q[".searchableFields"][] = "tk_count_id";
//	ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_FK";
	$fdata["GoodName"] = "ID_FK";
	$fdata["ownerTable"] = "token_tipo";
	$fdata["Label"] = GetFieldLabel("token_tipo_q","ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_FK";

	
	
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
	$edata["LookupTable"] = "camerfirma_104_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "username";

	

	
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


	$tdatatoken_tipo_q["ID_FK"] = $fdata;
		$tdatatoken_tipo_q[".searchableFields"][] = "ID_FK";
//	tk_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tk_id_fk";
	$fdata["GoodName"] = "tk_id_fk";
	$fdata["ownerTable"] = "token_tipo";
	$fdata["Label"] = GetFieldLabel("token_tipo_q","tk_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tk_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tk_id_fk";

	
	
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
	$edata["LookupTable"] = "tp_token";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"tk_nombre", 'lookupF'=>"tk_tipo");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tk_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tk_id";

	

	
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


	$tdatatoken_tipo_q["tk_id_fk"] = $fdata;
		$tdatatoken_tipo_q[".searchableFields"][] = "tk_id_fk";
//	tk_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tk_nombre";
	$fdata["GoodName"] = "tk_nombre";
	$fdata["ownerTable"] = "token_tipo";
	$fdata["Label"] = GetFieldLabel("token_tipo_q","tk_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tk_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tk_nombre";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatatoken_tipo_q["tk_nombre"] = $fdata;
		$tdatatoken_tipo_q[".searchableFields"][] = "tk_nombre";
//	tk_qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tk_qty";
	$fdata["GoodName"] = "tk_qty";
	$fdata["ownerTable"] = "token_tipo";
	$fdata["Label"] = GetFieldLabel("token_tipo_q","tk_qty");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tk_qty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tk_qty";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatatoken_tipo_q["tk_qty"] = $fdata;
		$tdatatoken_tipo_q[".searchableFields"][] = "tk_qty";


$tables_data["token_tipo_q"]=&$tdatatoken_tipo_q;
$field_labels["token_tipo_q"] = &$fieldLabelstoken_tipo_q;
$fieldToolTips["token_tipo_q"] = &$fieldToolTipstoken_tipo_q;
$placeHolders["token_tipo_q"] = &$placeHolderstoken_tipo_q;
$page_titles["token_tipo_q"] = &$pageTitlestoken_tipo_q;


changeTextControlsToDate( "token_tipo_q" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["token_tipo_q"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["token_tipo_q"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_token_tipo_q()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tk_count_id,  	ID_FK,  	tk_id_fk,  	tk_nombre,  	tk_qty";
$proto0["m_strFrom"] = "FROM token_tipo";
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
	"m_strName" => "tk_count_id",
	"m_strTable" => "token_tipo",
	"m_srcTableName" => "token_tipo_q"
));

$proto6["m_sql"] = "tk_count_id";
$proto6["m_srcTableName"] = "token_tipo_q";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_FK",
	"m_strTable" => "token_tipo",
	"m_srcTableName" => "token_tipo_q"
));

$proto8["m_sql"] = "ID_FK";
$proto8["m_srcTableName"] = "token_tipo_q";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tk_id_fk",
	"m_strTable" => "token_tipo",
	"m_srcTableName" => "token_tipo_q"
));

$proto10["m_sql"] = "tk_id_fk";
$proto10["m_srcTableName"] = "token_tipo_q";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tk_nombre",
	"m_strTable" => "token_tipo",
	"m_srcTableName" => "token_tipo_q"
));

$proto12["m_sql"] = "tk_nombre";
$proto12["m_srcTableName"] = "token_tipo_q";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tk_qty",
	"m_strTable" => "token_tipo",
	"m_srcTableName" => "token_tipo_q"
));

$proto14["m_sql"] = "tk_qty";
$proto14["m_srcTableName"] = "token_tipo_q";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "token_tipo";
$proto17["m_srcTableName"] = "token_tipo_q";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "tk_count_id";
$proto17["m_columns"][] = "ID_FK";
$proto17["m_columns"][] = "tk_id_fk";
$proto17["m_columns"][] = "tk_nombre";
$proto17["m_columns"][] = "tk_qty";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "token_tipo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "token_tipo_q";
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
$proto0["m_srcTableName"]="token_tipo_q";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_token_tipo_q = createSqlQuery_token_tipo_q();


	
		;

					

$tdatatoken_tipo_q[".sqlquery"] = $queryData_token_tipo_q;



$tdatatoken_tipo_q[".hasEvents"] = false;

?>