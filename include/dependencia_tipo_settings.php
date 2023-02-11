<?php
$tdatadependencia_tipo = array();
$tdatadependencia_tipo[".searchableFields"] = array();
$tdatadependencia_tipo[".ShortName"] = "dependencia_tipo";
$tdatadependencia_tipo[".OwnerID"] = "";
$tdatadependencia_tipo[".OriginalTable"] = "dependencia_tipo";


$tdatadependencia_tipo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadependencia_tipo[".originalPagesByType"] = $tdatadependencia_tipo[".pagesByType"];
$tdatadependencia_tipo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadependencia_tipo[".originalPages"] = $tdatadependencia_tipo[".pages"];
$tdatadependencia_tipo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadependencia_tipo[".originalDefaultPages"] = $tdatadependencia_tipo[".defaultPages"];

//	field labels
$fieldLabelsdependencia_tipo = array();
$fieldToolTipsdependencia_tipo = array();
$pageTitlesdependencia_tipo = array();
$placeHoldersdependencia_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencia_tipo["Spanish"] = array();
	$fieldToolTipsdependencia_tipo["Spanish"] = array();
	$placeHoldersdependencia_tipo["Spanish"] = array();
	$pageTitlesdependencia_tipo["Spanish"] = array();
	$fieldLabelsdependencia_tipo["Spanish"]["DEP_ID"] = "DEP ID";
	$fieldToolTipsdependencia_tipo["Spanish"]["DEP_ID"] = "";
	$placeHoldersdependencia_tipo["Spanish"]["DEP_ID"] = "";
	$fieldLabelsdependencia_tipo["Spanish"]["USER_ID_FK"] = "USER ID FK";
	$fieldToolTipsdependencia_tipo["Spanish"]["USER_ID_FK"] = "";
	$placeHoldersdependencia_tipo["Spanish"]["USER_ID_FK"] = "";
	$fieldLabelsdependencia_tipo["Spanish"]["DEPENDENCIA"] = "DEPENDENCIA";
	$fieldToolTipsdependencia_tipo["Spanish"]["DEPENDENCIA"] = "";
	$placeHoldersdependencia_tipo["Spanish"]["DEPENDENCIA"] = "";
	$fieldLabelsdependencia_tipo["Spanish"]["DPTO"] = "DPTO";
	$fieldToolTipsdependencia_tipo["Spanish"]["DPTO"] = "";
	$placeHoldersdependencia_tipo["Spanish"]["DPTO"] = "";
	$fieldLabelsdependencia_tipo["Spanish"]["MUN"] = "MUN";
	$fieldToolTipsdependencia_tipo["Spanish"]["MUN"] = "";
	$placeHoldersdependencia_tipo["Spanish"]["MUN"] = "";
	if (count($fieldToolTipsdependencia_tipo["Spanish"]))
		$tdatadependencia_tipo[".isUseToolTips"] = true;
}


	$tdatadependencia_tipo[".NCSearch"] = true;



$tdatadependencia_tipo[".shortTableName"] = "dependencia_tipo";
$tdatadependencia_tipo[".nSecOptions"] = 0;

$tdatadependencia_tipo[".mainTableOwnerID"] = "";
$tdatadependencia_tipo[".entityType"] = 0;
$tdatadependencia_tipo[".connId"] = "sgiysp_at_127_0_0_1";


$tdatadependencia_tipo[".strOriginalTableName"] = "dependencia_tipo";

	



$tdatadependencia_tipo[".showAddInPopup"] = false;

$tdatadependencia_tipo[".showEditInPopup"] = false;

$tdatadependencia_tipo[".showViewInPopup"] = false;

$tdatadependencia_tipo[".listAjax"] = false;
//	temporary
//$tdatadependencia_tipo[".listAjax"] = false;

	$tdatadependencia_tipo[".audit"] = true;

	$tdatadependencia_tipo[".locking"] = true;


$pages = $tdatadependencia_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencia_tipo[".edit"] = true;
	$tdatadependencia_tipo[".afterEditAction"] = 1;
	$tdatadependencia_tipo[".closePopupAfterEdit"] = 1;
	$tdatadependencia_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencia_tipo[".add"] = true;
$tdatadependencia_tipo[".afterAddAction"] = 1;
$tdatadependencia_tipo[".closePopupAfterAdd"] = 1;
$tdatadependencia_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencia_tipo[".list"] = true;
}



$tdatadependencia_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencia_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencia_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencia_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencia_tipo[".printFriendly"] = true;
}



$tdatadependencia_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencia_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencia_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencia_tipo[".isUseAjaxSuggest"] = true;





$tdatadependencia_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatadependencia_tipo[".buttonsAdded"] = false;

$tdatadependencia_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencia_tipo[".isUseTimeForSearch"] = false;


$tdatadependencia_tipo[".badgeColor"] = "ff8000";


$tdatadependencia_tipo[".allSearchFields"] = array();
$tdatadependencia_tipo[".filterFields"] = array();
$tdatadependencia_tipo[".requiredSearchFields"] = array();

$tdatadependencia_tipo[".googleLikeFields"] = array();
$tdatadependencia_tipo[".googleLikeFields"][] = "DEP_ID";
$tdatadependencia_tipo[".googleLikeFields"][] = "USER_ID_FK";
$tdatadependencia_tipo[".googleLikeFields"][] = "DEPENDENCIA";
$tdatadependencia_tipo[".googleLikeFields"][] = "DPTO";
$tdatadependencia_tipo[".googleLikeFields"][] = "MUN";



$tdatadependencia_tipo[".tableType"] = "list";

$tdatadependencia_tipo[".printerPageOrientation"] = 0;
$tdatadependencia_tipo[".nPrinterPageScale"] = 100;

$tdatadependencia_tipo[".nPrinterSplitRecords"] = 40;

$tdatadependencia_tipo[".geocodingEnabled"] = false;




$tdatadependencia_tipo[".isDisplayLoading"] = true;






$tdatadependencia_tipo[".pageSize"] = 20;

$tdatadependencia_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencia_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatadependencia_tipo[".orderindexes"] = array();


$tdatadependencia_tipo[".sqlHead"] = "SELECT DEP_ID,  	USER_ID_FK,  	DEPENDENCIA,  	DPTO,  	MUN";
$tdatadependencia_tipo[".sqlFrom"] = "FROM dependencia_tipo";
$tdatadependencia_tipo[".sqlWhereExpr"] = "";
$tdatadependencia_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencia_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencia_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencia_tipo[".highlightSearchResults"] = true;

$tableKeysdependencia_tipo = array();
$tableKeysdependencia_tipo[] = "DEP_ID";
$tdatadependencia_tipo[".Keys"] = $tableKeysdependencia_tipo;


$tdatadependencia_tipo[".hideMobileList"] = array();




//	DEP_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DEP_ID";
	$fdata["GoodName"] = "DEP_ID";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo","DEP_ID");
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


	$tdatadependencia_tipo["DEP_ID"] = $fdata;
		$tdatadependencia_tipo[".searchableFields"][] = "DEP_ID";
//	USER_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USER_ID_FK";
	$fdata["GoodName"] = "USER_ID_FK";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo","USER_ID_FK");
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


	$tdatadependencia_tipo["USER_ID_FK"] = $fdata;
		$tdatadependencia_tipo[".searchableFields"][] = "USER_ID_FK";
//	DEPENDENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DEPENDENCIA";
	$fdata["GoodName"] = "DEPENDENCIA";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo","DEPENDENCIA");
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


	$tdatadependencia_tipo["DEPENDENCIA"] = $fdata;
		$tdatadependencia_tipo[".searchableFields"][] = "DEPENDENCIA";
//	DPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DPTO";
	$fdata["GoodName"] = "DPTO";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo","DPTO");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

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


	$tdatadependencia_tipo["DPTO"] = $fdata;
		$tdatadependencia_tipo[".searchableFields"][] = "DPTO";
//	MUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MUN";
	$fdata["GoodName"] = "MUN";
	$fdata["ownerTable"] = "dependencia_tipo";
	$fdata["Label"] = GetFieldLabel("dependencia_tipo","MUN");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

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


	$tdatadependencia_tipo["MUN"] = $fdata;
		$tdatadependencia_tipo[".searchableFields"][] = "MUN";


$tables_data["dependencia_tipo"]=&$tdatadependencia_tipo;
$field_labels["dependencia_tipo"] = &$fieldLabelsdependencia_tipo;
$fieldToolTips["dependencia_tipo"] = &$fieldToolTipsdependencia_tipo;
$placeHolders["dependencia_tipo"] = &$placeHoldersdependencia_tipo;
$page_titles["dependencia_tipo"] = &$pageTitlesdependencia_tipo;


changeTextControlsToDate( "dependencia_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencia_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencia_tipo"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="camerfirma_104_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="camerfirma_104_users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "camerfirma_104_users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dependencia_tipo"][0] = $masterParams;
				$masterTablesData["dependencia_tipo"][0]["masterKeys"] = array();
	$masterTablesData["dependencia_tipo"][0]["masterKeys"][]="ID";
				$masterTablesData["dependencia_tipo"][0]["detailKeys"] = array();
	$masterTablesData["dependencia_tipo"][0]["detailKeys"][]="USER_ID_FK";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="camerfirma_104_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="camerfirma_104_users_gestion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "camerfirma_104_users_gestion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dependencia_tipo"][1] = $masterParams;
				$masterTablesData["dependencia_tipo"][1]["masterKeys"] = array();
	$masterTablesData["dependencia_tipo"][1]["masterKeys"][]="ID";
				$masterTablesData["dependencia_tipo"][1]["detailKeys"] = array();
	$masterTablesData["dependencia_tipo"][1]["detailKeys"][]="USER_ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencia_tipo()
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
	"m_srcTableName" => "dependencia_tipo"
));

$proto6["m_sql"] = "DEP_ID";
$proto6["m_srcTableName"] = "dependencia_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_ID_FK",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo"
));

$proto8["m_sql"] = "USER_ID_FK";
$proto8["m_srcTableName"] = "dependencia_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DEPENDENCIA",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo"
));

$proto10["m_sql"] = "DEPENDENCIA";
$proto10["m_srcTableName"] = "dependencia_tipo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DPTO",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo"
));

$proto12["m_sql"] = "DPTO";
$proto12["m_srcTableName"] = "dependencia_tipo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MUN",
	"m_strTable" => "dependencia_tipo",
	"m_srcTableName" => "dependencia_tipo"
));

$proto14["m_sql"] = "MUN";
$proto14["m_srcTableName"] = "dependencia_tipo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "dependencia_tipo";
$proto17["m_srcTableName"] = "dependencia_tipo";
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
$proto16["m_srcTableName"] = "dependencia_tipo";
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
$proto0["m_srcTableName"]="dependencia_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencia_tipo = createSqlQuery_dependencia_tipo();


	
		;

					

$tdatadependencia_tipo[".sqlquery"] = $queryData_dependencia_tipo;



$tdatadependencia_tipo[".hasEvents"] = false;

?>