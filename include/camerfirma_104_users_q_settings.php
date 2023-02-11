<?php
$tdatacamerfirma_104_users_q = array();
$tdatacamerfirma_104_users_q[".searchableFields"] = array();
$tdatacamerfirma_104_users_q[".ShortName"] = "camerfirma_104_users_q";
$tdatacamerfirma_104_users_q[".OwnerID"] = "ID";
$tdatacamerfirma_104_users_q[".OriginalTable"] = "camerfirma_104_users";


$tdatacamerfirma_104_users_q[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacamerfirma_104_users_q[".originalPagesByType"] = $tdatacamerfirma_104_users_q[".pagesByType"];
$tdatacamerfirma_104_users_q[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacamerfirma_104_users_q[".originalPages"] = $tdatacamerfirma_104_users_q[".pages"];
$tdatacamerfirma_104_users_q[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacamerfirma_104_users_q[".originalDefaultPages"] = $tdatacamerfirma_104_users_q[".defaultPages"];

//	field labels
$fieldLabelscamerfirma_104_users_q = array();
$fieldToolTipscamerfirma_104_users_q = array();
$pageTitlescamerfirma_104_users_q = array();
$placeHolderscamerfirma_104_users_q = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscamerfirma_104_users_q["Spanish"] = array();
	$fieldToolTipscamerfirma_104_users_q["Spanish"] = array();
	$placeHolderscamerfirma_104_users_q["Spanish"] = array();
	$pageTitlescamerfirma_104_users_q["Spanish"] = array();
	$fieldLabelscamerfirma_104_users_q["Spanish"]["ID"] = "ID";
	$fieldToolTipscamerfirma_104_users_q["Spanish"]["ID"] = "";
	$placeHolderscamerfirma_104_users_q["Spanish"]["ID"] = "";
	$fieldLabelscamerfirma_104_users_q["Spanish"]["username"] = "Username";
	$fieldToolTipscamerfirma_104_users_q["Spanish"]["username"] = "";
	$placeHolderscamerfirma_104_users_q["Spanish"]["username"] = "";
	$fieldLabelscamerfirma_104_users_q["Spanish"]["email"] = "Email";
	$fieldToolTipscamerfirma_104_users_q["Spanish"]["email"] = "";
	$placeHolderscamerfirma_104_users_q["Spanish"]["email"] = "";
	$fieldLabelscamerfirma_104_users_q["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipscamerfirma_104_users_q["Spanish"]["fullname"] = "";
	$placeHolderscamerfirma_104_users_q["Spanish"]["fullname"] = "";
	if (count($fieldToolTipscamerfirma_104_users_q["Spanish"]))
		$tdatacamerfirma_104_users_q[".isUseToolTips"] = true;
}


	$tdatacamerfirma_104_users_q[".NCSearch"] = true;



$tdatacamerfirma_104_users_q[".shortTableName"] = "camerfirma_104_users_q";
$tdatacamerfirma_104_users_q[".nSecOptions"] = 1;

$tdatacamerfirma_104_users_q[".mainTableOwnerID"] = "ID";
$tdatacamerfirma_104_users_q[".entityType"] = 1;
$tdatacamerfirma_104_users_q[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacamerfirma_104_users_q[".strOriginalTableName"] = "camerfirma_104_users";

	



$tdatacamerfirma_104_users_q[".showAddInPopup"] = false;

$tdatacamerfirma_104_users_q[".showEditInPopup"] = false;

$tdatacamerfirma_104_users_q[".showViewInPopup"] = false;

$tdatacamerfirma_104_users_q[".listAjax"] = false;
//	temporary
//$tdatacamerfirma_104_users_q[".listAjax"] = false;

	$tdatacamerfirma_104_users_q[".audit"] = true;

	$tdatacamerfirma_104_users_q[".locking"] = true;


$pages = $tdatacamerfirma_104_users_q[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacamerfirma_104_users_q[".edit"] = true;
	$tdatacamerfirma_104_users_q[".afterEditAction"] = 1;
	$tdatacamerfirma_104_users_q[".closePopupAfterEdit"] = 1;
	$tdatacamerfirma_104_users_q[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacamerfirma_104_users_q[".add"] = true;
$tdatacamerfirma_104_users_q[".afterAddAction"] = 1;
$tdatacamerfirma_104_users_q[".closePopupAfterAdd"] = 1;
$tdatacamerfirma_104_users_q[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacamerfirma_104_users_q[".list"] = true;
}



$tdatacamerfirma_104_users_q[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacamerfirma_104_users_q[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacamerfirma_104_users_q[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacamerfirma_104_users_q[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacamerfirma_104_users_q[".printFriendly"] = true;
}



$tdatacamerfirma_104_users_q[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacamerfirma_104_users_q[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacamerfirma_104_users_q[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacamerfirma_104_users_q[".isUseAjaxSuggest"] = true;





$tdatacamerfirma_104_users_q[".ajaxCodeSnippetAdded"] = false;

$tdatacamerfirma_104_users_q[".buttonsAdded"] = false;

$tdatacamerfirma_104_users_q[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacamerfirma_104_users_q[".isUseTimeForSearch"] = false;


$tdatacamerfirma_104_users_q[".badgeColor"] = "6493EA";


$tdatacamerfirma_104_users_q[".allSearchFields"] = array();
$tdatacamerfirma_104_users_q[".filterFields"] = array();
$tdatacamerfirma_104_users_q[".requiredSearchFields"] = array();

$tdatacamerfirma_104_users_q[".googleLikeFields"] = array();
$tdatacamerfirma_104_users_q[".googleLikeFields"][] = "ID";
$tdatacamerfirma_104_users_q[".googleLikeFields"][] = "username";
$tdatacamerfirma_104_users_q[".googleLikeFields"][] = "email";
$tdatacamerfirma_104_users_q[".googleLikeFields"][] = "fullname";



$tdatacamerfirma_104_users_q[".tableType"] = "list";

$tdatacamerfirma_104_users_q[".printerPageOrientation"] = 0;
$tdatacamerfirma_104_users_q[".nPrinterPageScale"] = 100;

$tdatacamerfirma_104_users_q[".nPrinterSplitRecords"] = 40;

$tdatacamerfirma_104_users_q[".geocodingEnabled"] = false;










$tdatacamerfirma_104_users_q[".pageSize"] = 20;

$tdatacamerfirma_104_users_q[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacamerfirma_104_users_q[".strOrderBy"] = $tstrOrderBy;

$tdatacamerfirma_104_users_q[".orderindexes"] = array();


$tdatacamerfirma_104_users_q[".sqlHead"] = "SELECT ID,  username,  email,  fullname";
$tdatacamerfirma_104_users_q[".sqlFrom"] = "FROM camerfirma_104_users";
$tdatacamerfirma_104_users_q[".sqlWhereExpr"] = "";
$tdatacamerfirma_104_users_q[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacamerfirma_104_users_q[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacamerfirma_104_users_q[".arrGroupsPerPage"] = $arrGPP;

$tdatacamerfirma_104_users_q[".highlightSearchResults"] = true;

$tableKeyscamerfirma_104_users_q = array();
$tableKeyscamerfirma_104_users_q[] = "ID";
$tdatacamerfirma_104_users_q[".Keys"] = $tableKeyscamerfirma_104_users_q;


$tdatacamerfirma_104_users_q[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_q","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatacamerfirma_104_users_q["ID"] = $fdata;
		$tdatacamerfirma_104_users_q[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_q","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatacamerfirma_104_users_q["username"] = $fdata;
		$tdatacamerfirma_104_users_q[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_q","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatacamerfirma_104_users_q["email"] = $fdata;
		$tdatacamerfirma_104_users_q[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_q","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatacamerfirma_104_users_q["fullname"] = $fdata;
		$tdatacamerfirma_104_users_q[".searchableFields"][] = "fullname";


$tables_data["camerfirma_104_users_q"]=&$tdatacamerfirma_104_users_q;
$field_labels["camerfirma_104_users_q"] = &$fieldLabelscamerfirma_104_users_q;
$fieldToolTips["camerfirma_104_users_q"] = &$fieldToolTipscamerfirma_104_users_q;
$placeHolders["camerfirma_104_users_q"] = &$placeHolderscamerfirma_104_users_q;
$page_titles["camerfirma_104_users_q"] = &$pageTitlescamerfirma_104_users_q;


changeTextControlsToDate( "camerfirma_104_users_q" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["camerfirma_104_users_q"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["camerfirma_104_users_q"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_camerfirma_104_users_q()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  username,  email,  fullname";
$proto0["m_strFrom"] = "FROM camerfirma_104_users";
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
	"m_strName" => "ID",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_q"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "camerfirma_104_users_q";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_q"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "camerfirma_104_users_q";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_q"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "camerfirma_104_users_q";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_q"
));

$proto12["m_sql"] = "fullname";
$proto12["m_srcTableName"] = "camerfirma_104_users_q";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "camerfirma_104_users";
$proto15["m_srcTableName"] = "camerfirma_104_users_q";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "username";
$proto15["m_columns"][] = "password";
$proto15["m_columns"][] = "email";
$proto15["m_columns"][] = "fullname";
$proto15["m_columns"][] = "groupid";
$proto15["m_columns"][] = "active";
$proto15["m_columns"][] = "ext_security_id";
$proto15["m_columns"][] = "reset_token";
$proto15["m_columns"][] = "reset_date";
$proto15["m_columns"][] = "reset_token1";
$proto15["m_columns"][] = "reset_date1";
$proto15["m_columns"][] = "cupo_a";
$proto15["m_columns"][] = "cupo_b";
$proto15["m_columns"][] = "periodo_i";
$proto15["m_columns"][] = "periodo_f";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "camerfirma_104_users";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "camerfirma_104_users_q";
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
$proto0["m_srcTableName"]="camerfirma_104_users_q";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_camerfirma_104_users_q = createSqlQuery_camerfirma_104_users_q();


	
		;

				

$tdatacamerfirma_104_users_q[".sqlquery"] = $queryData_camerfirma_104_users_q;



$tdatacamerfirma_104_users_q[".hasEvents"] = false;

?>