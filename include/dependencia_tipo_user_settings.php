<?php
$tdatadependencia_tipo_user = array();
$tdatadependencia_tipo_user[".searchableFields"] = array();
$tdatadependencia_tipo_user[".ShortName"] = "dependencia_tipo_user";
$tdatadependencia_tipo_user[".OwnerID"] = "USER_ID_FK";
$tdatadependencia_tipo_user[".OriginalTable"] = "dependencia_tipo";


$tdatadependencia_tipo_user[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadependencia_tipo_user[".originalPagesByType"] = $tdatadependencia_tipo_user[".pagesByType"];
$tdatadependencia_tipo_user[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadependencia_tipo_user[".originalPages"] = $tdatadependencia_tipo_user[".pages"];
$tdatadependencia_tipo_user[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadependencia_tipo_user[".originalDefaultPages"] = $tdatadependencia_tipo_user[".defaultPages"];

//	field labels
$fieldLabelsdependencia_tipo_user = array();
$fieldToolTipsdependencia_tipo_user = array();
$pageTitlesdependencia_tipo_user = array();
$placeHoldersdependencia_tipo_user = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencia_tipo_user["Spanish"] = array();
	$fieldToolTipsdependencia_tipo_user["Spanish"] = array();
	$placeHoldersdependencia_tipo_user["Spanish"] = array();
	$pageTitlesdependencia_tipo_user["Spanish"] = array();
	$fieldLabelsdependencia_tipo_user["Spanish"]["DEP_ID"] = "ID";
	$fieldToolTipsdependencia_tipo_user["Spanish"]["DEP_ID"] = "";
	$placeHoldersdependencia_tipo_user["Spanish"]["DEP_ID"] = "";
	$fieldLabelsdependencia_tipo_user["Spanish"]["USER_ID_FK"] = "USER ID FK";
	$fieldToolTipsdependencia_tipo_user["Spanish"]["USER_ID_FK"] = "";
	$placeHoldersdependencia_tipo_user["Spanish"]["USER_ID_FK"] = "";
	$fieldLabelsdependencia_tipo_user["Spanish"]["DEPENDENCIA"] = "DEPENDENCIA";
	$fieldToolTipsdependencia_tipo_user["Spanish"]["DEPENDENCIA"] = "";
	$placeHoldersdependencia_tipo_user["Spanish"]["DEPENDENCIA"] = "";
	$fieldLabelsdependencia_tipo_user["Spanish"]["DPTO"] = "DEPARTAMENTO";
	$fieldToolTipsdependencia_tipo_user["Spanish"]["DPTO"] = "";
	$placeHoldersdependencia_tipo_user["Spanish"]["DPTO"] = "";
	$fieldLabelsdependencia_tipo_user["Spanish"]["MUN"] = "MUNICIPIO";
	$fieldToolTipsdependencia_tipo_user["Spanish"]["MUN"] = "";
	$placeHoldersdependencia_tipo_user["Spanish"]["MUN"] = "";
	if (count($fieldToolTipsdependencia_tipo_user["Spanish"]))
		$tdatadependencia_tipo_user[".isUseToolTips"] = true;
}


	$tdatadependencia_tipo_user[".NCSearch"] = true;



$tdatadependencia_tipo_user[".shortTableName"] = "dependencia_tipo_user";
$tdatadependencia_tipo_user[".nSecOptions"] = 1;

$tdatadependencia_tipo_user[".mainTableOwnerID"] = "USER_ID_FK";
$tdatadependencia_tipo_user[".entityType"] = 1;
$tdatadependencia_tipo_user[".connId"] = "sgiysp_at_127_0_0_1";


$tdatadependencia_tipo_user[".strOriginalTableName"] = "dependencia_tipo";

	



$tdatadependencia_tipo_user[".showAddInPopup"] = false;

$tdatadependencia_tipo_user[".showEditInPopup"] = false;

$tdatadependencia_tipo_user[".showViewInPopup"] = false;

$tdatadependencia_tipo_user[".listAjax"] = false;
//	temporary
//$tdatadependencia_tipo_user[".listAjax"] = false;

	$tdatadependencia_tipo_user[".audit"] = true;

	$tdatadependencia_tipo_user[".locking"] = true;


$pages = $tdatadependencia_tipo_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencia_tipo_user[".edit"] = true;
	$tdatadependencia_tipo_user[".afterEditAction"] = 1;
	$tdatadependencia_tipo_user[".closePopupAfterEdit"] = 1;
	$tdatadependencia_tipo_user[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencia_tipo_user[".add"] = true;
$tdatadependencia_tipo_user[".afterAddAction"] = 1;
$tdatadependencia_tipo_user[".closePopupAfterAdd"] = 1;
$tdatadependencia_tipo_user[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencia_tipo_user[".list"] = true;
}



$tdatadependencia_tipo_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencia_tipo_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencia_tipo_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencia_tipo_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencia_tipo_user[".printFriendly"] = true;
}



$tdatadependencia_tipo_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencia_tipo_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencia_tipo_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencia_tipo_user[".isUseAjaxSuggest"] = true;





$tdatadependencia_tipo_user[".ajaxCodeSnippetAdded"] = false;

$tdatadependencia_tipo_user[".buttonsAdded"] = false;

$tdatadependencia_tipo_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencia_tipo_user[".isUseTimeForSearch"] = false;


$tdatadependencia_tipo_user[".badgeColor"] = "B22222";


$tdatadependencia_tipo_user[".allSearchFields"] = array();
$tdatadependencia_tipo_user[".filterFields"] = array();
$tdatadependencia_tipo_user[".requiredSearchFields"] = array();

$tdatadependencia_tipo_user[".googleLikeFields"] = array();
$tdatadependencia_tipo_user[".googleLikeFields"][] = "DEP_ID";
$tdatadependencia_tipo_user[".googleLikeFields"][] = "USER_ID_FK";
$tdatadependencia_tipo_user[".googleLikeFields"][] = "DEPENDENCIA";
$tdatadependencia_tipo_user[".googleLikeFields"][] = "DPTO";
$tdatadependencia_tipo_user[".googleLikeFields"][] = "MUN";



$tdatadependencia_tipo_user[".tableType"] = "list";

$tdatadependencia_tipo_user[".printerPageOrientation"] = 0;
$tdatadependencia_tipo_user[".nPrinterPageScale"] = 100;

$tdatadependencia_tipo_user[".nPrinterSplitRecords"] = 40;

$tdatadependencia_tipo_user[".geocodingEnabled"] = false;




$tdatadependencia_tipo_user[".isDisplayLoading"] = true;






$tdatadependencia_tipo_user[".pageSize"] = 20;

$tdatadependencia_tipo_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencia_tipo_user[".strOrderBy"] = $tstrOrderBy;

$tdatadependencia_tipo_user[".orderindexes"] = array();


$tdatadependencia_tipo_user[".sqlHead"] = "SELECT DEP_ID,  	USER_ID_FK,  	DEPENDENCIA,  	DPTO,  	MUN";
$tdatadependencia_tipo_user[".sqlFrom"] = "FROM dependencia_tipo";
$tdatadependencia_tipo_user[".sqlWhereExpr"] = "";
$tdatadependencia_tipo_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencia_tipo_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencia_tipo_user[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencia_tipo_user[".highlightSearchResults"] = true;

$tableKeysdependencia_tipo_user = array();
$tableKeysdependencia_tipo_user[] = "DEP_ID";
$tdatadependencia_tipo_user[".Keys"] = $tableKeysdependencia_tipo_user;


$tdatadependencia_tipo_user[".hideMobileList"] = array();




//	DEP_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DEP_ID";
	$fdata["GoodName"] = "DEP_ID";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo_user","DEP_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "DEP_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEP_ID";

	
	
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


	$tdatadependencia_tipo_user["DEP_ID"] = $fdata;
		$tdatadependencia_tipo_user[".searchableFields"][] = "DEP_ID";
//	USER_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USER_ID_FK";
	$fdata["GoodName"] = "USER_ID_FK";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo_user","USER_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "USER_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USER_ID_FK";

	
	
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


	$tdatadependencia_tipo_user["USER_ID_FK"] = $fdata;
		$tdatadependencia_tipo_user[".searchableFields"][] = "USER_ID_FK";
//	DEPENDENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEPENDENCIA";
	$fdata["GoodName"] = "DEPENDENCIA";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo_user","DEPENDENCIA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DEPENDENCIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEPENDENCIA";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatadependencia_tipo_user["DEPENDENCIA"] = $fdata;
		$tdatadependencia_tipo_user[".searchableFields"][] = "DEPENDENCIA";
//	DPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DPTO";
	$fdata["GoodName"] = "DPTO";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo_user","DPTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DPTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DPTO";

	
	
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
	$edata["LookupTable"] = "q_divipola";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CODDPTO";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOMDPTO";

	

	
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


	$tdatadependencia_tipo_user["DPTO"] = $fdata;
		$tdatadependencia_tipo_user[".searchableFields"][] = "DPTO";
//	MUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MUN";
	$fdata["GoodName"] = "MUN";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo_user","MUN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MUN";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MUN";

	
	
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
	$edata["LookupTable"] = "q_divipola";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DPTO", 'lookupF'=>"CODDPTO");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatadependencia_tipo_user["MUN"] = $fdata;
		$tdatadependencia_tipo_user[".searchableFields"][] = "MUN";


$tables_data["dependencia_tipo_user"]=&$tdatadependencia_tipo_user;
$field_labels["dependencia_tipo_user"] = &$fieldLabelsdependencia_tipo_user;
$fieldToolTips["dependencia_tipo_user"] = &$fieldToolTipsdependencia_tipo_user;
$placeHolders["dependencia_tipo_user"] = &$placeHoldersdependencia_tipo_user;
$page_titles["dependencia_tipo_user"] = &$pageTitlesdependencia_tipo_user;


changeTextControlsToDate( "dependencia_tipo_user" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencia_tipo_user"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencia_tipo_user"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="camerfirma_104_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="camerfirma_104_users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "camerfirma_104_users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dependencia_tipo_user"][0] = $masterParams;
				$masterTablesData["dependencia_tipo_user"][0]["masterKeys"] = array();
	$masterTablesData["dependencia_tipo_user"][0]["masterKeys"][]="ID";
				$masterTablesData["dependencia_tipo_user"][0]["detailKeys"] = array();
	$masterTablesData["dependencia_tipo_user"][0]["detailKeys"][]="USER_ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencia_tipo_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DEP_ID,  	USER_ID_FK,  	DEPENDENCIA,  	DPTO,  	MUN";
$proto0["m_strFrom"] = "FROM dependencia_tipo";
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
	"m_strName" => "DEP_ID",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo_user"
));

$proto6["m_sql"] = "DEP_ID";
$proto6["m_srcTableName"] = "dependencia_tipo_user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_ID_FK",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo_user"
));

$proto8["m_sql"] = "USER_ID_FK";
$proto8["m_srcTableName"] = "dependencia_tipo_user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEPENDENCIA",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo_user"
));

$proto10["m_sql"] = "DEPENDENCIA";
$proto10["m_srcTableName"] = "dependencia_tipo_user";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DPTO",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo_user"
));

$proto12["m_sql"] = "DPTO";
$proto12["m_srcTableName"] = "dependencia_tipo_user";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MUN",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo_user"
));

$proto14["m_sql"] = "MUN";
$proto14["m_srcTableName"] = "dependencia_tipo_user";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dependencia_tipo";
$proto17["m_srcTableName"] = "dependencia_tipo_user";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "DEP_ID";
$proto17["m_columns"][] = "USER_ID_FK";
$proto17["m_columns"][] = "DEPENDENCIA";
$proto17["m_columns"][] = "DPTO";
$proto17["m_columns"][] = "MUN";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "dependencia_tipo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "dependencia_tipo_user";
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
$proto0["m_srcTableName"]="dependencia_tipo_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencia_tipo_user = createSqlQuery_dependencia_tipo_user();


	
		;

					

$tdatadependencia_tipo_user[".sqlquery"] = $queryData_dependencia_tipo_user;



$tdatadependencia_tipo_user[".hasEvents"] = false;

?>