<?php
$tdatacertificados_solicitud_track = array();
$tdatacertificados_solicitud_track[".searchableFields"] = array();
$tdatacertificados_solicitud_track[".ShortName"] = "certificados_solicitud_track";
$tdatacertificados_solicitud_track[".OwnerID"] = "";
$tdatacertificados_solicitud_track[".OriginalTable"] = "certificados_solicitud_track";


$tdatacertificados_solicitud_track[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacertificados_solicitud_track[".originalPagesByType"] = $tdatacertificados_solicitud_track[".pagesByType"];
$tdatacertificados_solicitud_track[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacertificados_solicitud_track[".originalPages"] = $tdatacertificados_solicitud_track[".pages"];
$tdatacertificados_solicitud_track[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacertificados_solicitud_track[".originalDefaultPages"] = $tdatacertificados_solicitud_track[".defaultPages"];

//	field labels
$fieldLabelscertificados_solicitud_track = array();
$fieldToolTipscertificados_solicitud_track = array();
$pageTitlescertificados_solicitud_track = array();
$placeHolderscertificados_solicitud_track = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscertificados_solicitud_track["Spanish"] = array();
	$fieldToolTipscertificados_solicitud_track["Spanish"] = array();
	$placeHolderscertificados_solicitud_track["Spanish"] = array();
	$pageTitlescertificados_solicitud_track["Spanish"] = array();
	$fieldLabelscertificados_solicitud_track["Spanish"]["track_id"] = "Track Id";
	$fieldToolTipscertificados_solicitud_track["Spanish"]["track_id"] = "";
	$placeHolderscertificados_solicitud_track["Spanish"]["track_id"] = "";
	$fieldLabelscertificados_solicitud_track["Spanish"]["sol_id_fk"] = "Sol Id Fk";
	$fieldToolTipscertificados_solicitud_track["Spanish"]["sol_id_fk"] = "";
	$placeHolderscertificados_solicitud_track["Spanish"]["sol_id_fk"] = "";
	$fieldLabelscertificados_solicitud_track["Spanish"]["track_msj"] = "Actividad";
	$fieldToolTipscertificados_solicitud_track["Spanish"]["track_msj"] = "";
	$placeHolderscertificados_solicitud_track["Spanish"]["track_msj"] = "";
	$fieldLabelscertificados_solicitud_track["Spanish"]["track_date"] = "Fecha";
	$fieldToolTipscertificados_solicitud_track["Spanish"]["track_date"] = "";
	$placeHolderscertificados_solicitud_track["Spanish"]["track_date"] = "";
	$fieldLabelscertificados_solicitud_track["Spanish"]["track_usr"] = "Usuario";
	$fieldToolTipscertificados_solicitud_track["Spanish"]["track_usr"] = "";
	$placeHolderscertificados_solicitud_track["Spanish"]["track_usr"] = "";
	$fieldLabelscertificados_solicitud_track["Spanish"]["stage"] = "Estado";
	$fieldToolTipscertificados_solicitud_track["Spanish"]["stage"] = "";
	$placeHolderscertificados_solicitud_track["Spanish"]["stage"] = "";
	$fieldLabelscertificados_solicitud_track["Spanish"]["SysDate"] = "Sys Date";
	$fieldToolTipscertificados_solicitud_track["Spanish"]["SysDate"] = "";
	$placeHolderscertificados_solicitud_track["Spanish"]["SysDate"] = "";
	if (count($fieldToolTipscertificados_solicitud_track["Spanish"]))
		$tdatacertificados_solicitud_track[".isUseToolTips"] = true;
}


	$tdatacertificados_solicitud_track[".NCSearch"] = true;



$tdatacertificados_solicitud_track[".shortTableName"] = "certificados_solicitud_track";
$tdatacertificados_solicitud_track[".nSecOptions"] = 0;

$tdatacertificados_solicitud_track[".mainTableOwnerID"] = "";
$tdatacertificados_solicitud_track[".entityType"] = 0;
$tdatacertificados_solicitud_track[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacertificados_solicitud_track[".strOriginalTableName"] = "certificados_solicitud_track";

	



$tdatacertificados_solicitud_track[".showAddInPopup"] = false;

$tdatacertificados_solicitud_track[".showEditInPopup"] = false;

$tdatacertificados_solicitud_track[".showViewInPopup"] = false;

$tdatacertificados_solicitud_track[".listAjax"] = false;
//	temporary
//$tdatacertificados_solicitud_track[".listAjax"] = false;

	$tdatacertificados_solicitud_track[".audit"] = true;

	$tdatacertificados_solicitud_track[".locking"] = true;


$pages = $tdatacertificados_solicitud_track[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacertificados_solicitud_track[".edit"] = true;
	$tdatacertificados_solicitud_track[".afterEditAction"] = 1;
	$tdatacertificados_solicitud_track[".closePopupAfterEdit"] = 1;
	$tdatacertificados_solicitud_track[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacertificados_solicitud_track[".add"] = true;
$tdatacertificados_solicitud_track[".afterAddAction"] = 1;
$tdatacertificados_solicitud_track[".closePopupAfterAdd"] = 1;
$tdatacertificados_solicitud_track[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacertificados_solicitud_track[".list"] = true;
}



$tdatacertificados_solicitud_track[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacertificados_solicitud_track[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacertificados_solicitud_track[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacertificados_solicitud_track[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacertificados_solicitud_track[".printFriendly"] = true;
}



$tdatacertificados_solicitud_track[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacertificados_solicitud_track[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacertificados_solicitud_track[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacertificados_solicitud_track[".isUseAjaxSuggest"] = true;





$tdatacertificados_solicitud_track[".ajaxCodeSnippetAdded"] = false;

$tdatacertificados_solicitud_track[".buttonsAdded"] = false;

$tdatacertificados_solicitud_track[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacertificados_solicitud_track[".isUseTimeForSearch"] = false;


$tdatacertificados_solicitud_track[".badgeColor"] = "008080";


$tdatacertificados_solicitud_track[".allSearchFields"] = array();
$tdatacertificados_solicitud_track[".filterFields"] = array();
$tdatacertificados_solicitud_track[".requiredSearchFields"] = array();

$tdatacertificados_solicitud_track[".googleLikeFields"] = array();
$tdatacertificados_solicitud_track[".googleLikeFields"][] = "track_id";
$tdatacertificados_solicitud_track[".googleLikeFields"][] = "sol_id_fk";
$tdatacertificados_solicitud_track[".googleLikeFields"][] = "stage";
$tdatacertificados_solicitud_track[".googleLikeFields"][] = "track_msj";
$tdatacertificados_solicitud_track[".googleLikeFields"][] = "track_usr";
$tdatacertificados_solicitud_track[".googleLikeFields"][] = "track_date";
$tdatacertificados_solicitud_track[".googleLikeFields"][] = "SysDate";



$tdatacertificados_solicitud_track[".tableType"] = "list";

$tdatacertificados_solicitud_track[".printerPageOrientation"] = 0;
$tdatacertificados_solicitud_track[".nPrinterPageScale"] = 100;

$tdatacertificados_solicitud_track[".nPrinterSplitRecords"] = 40;

$tdatacertificados_solicitud_track[".geocodingEnabled"] = false;










$tdatacertificados_solicitud_track[".pageSize"] = 20;

$tdatacertificados_solicitud_track[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacertificados_solicitud_track[".strOrderBy"] = $tstrOrderBy;

$tdatacertificados_solicitud_track[".orderindexes"] = array();


$tdatacertificados_solicitud_track[".sqlHead"] = "SELECT track_id,  	sol_id_fk,  	stage,  	track_msj,  	track_usr,  	track_date,  	`SysDate`";
$tdatacertificados_solicitud_track[".sqlFrom"] = "FROM certificados_solicitud_track";
$tdatacertificados_solicitud_track[".sqlWhereExpr"] = "";
$tdatacertificados_solicitud_track[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificados_solicitud_track[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificados_solicitud_track[".arrGroupsPerPage"] = $arrGPP;

$tdatacertificados_solicitud_track[".highlightSearchResults"] = true;

$tableKeyscertificados_solicitud_track = array();
$tableKeyscertificados_solicitud_track[] = "track_id";
$tdatacertificados_solicitud_track[".Keys"] = $tableKeyscertificados_solicitud_track;


$tdatacertificados_solicitud_track[".hideMobileList"] = array();




//	track_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "track_id";
	$fdata["GoodName"] = "track_id";
	$fdata["ownerTable"] = "certificados_solicitud_track";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_track","track_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "track_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_id";

	
	
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


	$tdatacertificados_solicitud_track["track_id"] = $fdata;
		$tdatacertificados_solicitud_track[".searchableFields"][] = "track_id";
//	sol_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sol_id_fk";
	$fdata["GoodName"] = "sol_id_fk";
	$fdata["ownerTable"] = "certificados_solicitud_track";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_track","sol_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sol_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_id_fk";

	
	
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


	$tdatacertificados_solicitud_track["sol_id_fk"] = $fdata;
		$tdatacertificados_solicitud_track[".searchableFields"][] = "sol_id_fk";
//	stage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "stage";
	$fdata["GoodName"] = "stage";
	$fdata["ownerTable"] = "certificados_solicitud_track";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_track","stage");
	$fdata["FieldType"] = 16;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tp_stage";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stage_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stage";

	

	
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


	$tdatacertificados_solicitud_track["stage"] = $fdata;
		$tdatacertificados_solicitud_track[".searchableFields"][] = "stage";
//	track_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "track_msj";
	$fdata["GoodName"] = "track_msj";
	$fdata["ownerTable"] = "certificados_solicitud_track";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_track","track_msj");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "track_msj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_msj";

	
	
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


	$tdatacertificados_solicitud_track["track_msj"] = $fdata;
		$tdatacertificados_solicitud_track[".searchableFields"][] = "track_msj";
//	track_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "track_usr";
	$fdata["GoodName"] = "track_usr";
	$fdata["ownerTable"] = "certificados_solicitud_track";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_track","track_usr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "track_usr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_usr";

	
	
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


	$tdatacertificados_solicitud_track["track_usr"] = $fdata;
		$tdatacertificados_solicitud_track[".searchableFields"][] = "track_usr";
//	track_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "track_date";
	$fdata["GoodName"] = "track_date";
	$fdata["ownerTable"] = "certificados_solicitud_track";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_track","track_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "track_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "track_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacertificados_solicitud_track["track_date"] = $fdata;
		$tdatacertificados_solicitud_track[".searchableFields"][] = "track_date";
//	SysDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SysDate";
	$fdata["GoodName"] = "SysDate";
	$fdata["ownerTable"] = "certificados_solicitud_track";
	$fdata["Label"] = GetFieldLabel("certificados_solicitud_track","SysDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "SysDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SysDate`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacertificados_solicitud_track["SysDate"] = $fdata;
		$tdatacertificados_solicitud_track[".searchableFields"][] = "SysDate";


$tables_data["certificados_solicitud_track"]=&$tdatacertificados_solicitud_track;
$field_labels["certificados_solicitud_track"] = &$fieldLabelscertificados_solicitud_track;
$fieldToolTips["certificados_solicitud_track"] = &$fieldToolTipscertificados_solicitud_track;
$placeHolders["certificados_solicitud_track"] = &$placeHolderscertificados_solicitud_track;
$page_titles["certificados_solicitud_track"] = &$pageTitlescertificados_solicitud_track;


changeTextControlsToDate( "certificados_solicitud_track" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["certificados_solicitud_track"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["certificados_solicitud_track"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="certificados_solicitud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="certificados_solicitud_tr_0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "certificados_solicitud_tr_0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_solicitud_track"][0] = $masterParams;
				$masterTablesData["certificados_solicitud_track"][0]["masterKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][0]["masterKeys"][]="sol_id";
				$masterTablesData["certificados_solicitud_track"][0]["detailKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][0]["detailKeys"][]="sol_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="certificados_solicitud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="certificados_solicitud_tr_1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "certificados_solicitud_tr_1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_solicitud_track"][1] = $masterParams;
				$masterTablesData["certificados_solicitud_track"][1]["masterKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][1]["masterKeys"][]="sol_id";
				$masterTablesData["certificados_solicitud_track"][1]["detailKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][1]["detailKeys"][]="sol_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="certificados_solicitud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="certificados_solicitud_tr_2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "certificados_solicitud_tr_2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_solicitud_track"][2] = $masterParams;
				$masterTablesData["certificados_solicitud_track"][2]["masterKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][2]["masterKeys"][]="sol_id";
				$masterTablesData["certificados_solicitud_track"][2]["detailKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][2]["detailKeys"][]="sol_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="certificados_solicitud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="certificados_solicitud_tr_3";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "certificados_solicitud_tr_3";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_solicitud_track"][3] = $masterParams;
				$masterTablesData["certificados_solicitud_track"][3]["masterKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][3]["masterKeys"][]="sol_id";
				$masterTablesData["certificados_solicitud_track"][3]["detailKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][3]["detailKeys"][]="sol_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="certificados_solicitud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="certificados_solicitud_tr_4";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "certificados_solicitud_tr_4";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_solicitud_track"][4] = $masterParams;
				$masterTablesData["certificados_solicitud_track"][4]["masterKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][4]["masterKeys"][]="sol_id";
				$masterTablesData["certificados_solicitud_track"][4]["detailKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][4]["detailKeys"][]="sol_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="certificados_solicitud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="certificados_solicitud_tr_5";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "certificados_solicitud_tr_5";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_solicitud_track"][5] = $masterParams;
				$masterTablesData["certificados_solicitud_track"][5]["masterKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][5]["masterKeys"][]="sol_id";
				$masterTablesData["certificados_solicitud_track"][5]["detailKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][5]["detailKeys"][]="sol_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="certificados_solicitud";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="certificados_solicitud_tr_6";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "certificados_solicitud_tr_6";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_solicitud_track"][6] = $masterParams;
				$masterTablesData["certificados_solicitud_track"][6]["masterKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][6]["masterKeys"][]="sol_id";
				$masterTablesData["certificados_solicitud_track"][6]["detailKeys"] = array();
	$masterTablesData["certificados_solicitud_track"][6]["detailKeys"][]="sol_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_certificados_solicitud_track()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "track_id,  	sol_id_fk,  	stage,  	track_msj,  	track_usr,  	track_date,  	`SysDate`";
$proto0["m_strFrom"] = "FROM certificados_solicitud_track";
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
	"m_strName" => "track_id",
	"m_strTable" => "certificados_solicitud_track",
	"m_srcTableName" => "certificados_solicitud_track"
));

$proto6["m_sql"] = "track_id";
$proto6["m_srcTableName"] = "certificados_solicitud_track";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_id_fk",
	"m_strTable" => "certificados_solicitud_track",
	"m_srcTableName" => "certificados_solicitud_track"
));

$proto8["m_sql"] = "sol_id_fk";
$proto8["m_srcTableName"] = "certificados_solicitud_track";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "stage",
	"m_strTable" => "certificados_solicitud_track",
	"m_srcTableName" => "certificados_solicitud_track"
));

$proto10["m_sql"] = "stage";
$proto10["m_srcTableName"] = "certificados_solicitud_track";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "track_msj",
	"m_strTable" => "certificados_solicitud_track",
	"m_srcTableName" => "certificados_solicitud_track"
));

$proto12["m_sql"] = "track_msj";
$proto12["m_srcTableName"] = "certificados_solicitud_track";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "track_usr",
	"m_strTable" => "certificados_solicitud_track",
	"m_srcTableName" => "certificados_solicitud_track"
));

$proto14["m_sql"] = "track_usr";
$proto14["m_srcTableName"] = "certificados_solicitud_track";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "track_date",
	"m_strTable" => "certificados_solicitud_track",
	"m_srcTableName" => "certificados_solicitud_track"
));

$proto16["m_sql"] = "track_date";
$proto16["m_srcTableName"] = "certificados_solicitud_track";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SysDate",
	"m_strTable" => "certificados_solicitud_track",
	"m_srcTableName" => "certificados_solicitud_track"
));

$proto18["m_sql"] = "`SysDate`";
$proto18["m_srcTableName"] = "certificados_solicitud_track";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "certificados_solicitud_track";
$proto21["m_srcTableName"] = "certificados_solicitud_track";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "track_id";
$proto21["m_columns"][] = "sol_id_fk";
$proto21["m_columns"][] = "stage";
$proto21["m_columns"][] = "track_msj";
$proto21["m_columns"][] = "track_usr";
$proto21["m_columns"][] = "track_date";
$proto21["m_columns"][] = "SysDate";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "certificados_solicitud_track";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "certificados_solicitud_track";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="certificados_solicitud_track";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_certificados_solicitud_track = createSqlQuery_certificados_solicitud_track();


	
		;

							

$tdatacertificados_solicitud_track[".sqlquery"] = $queryData_certificados_solicitud_track;



$tdatacertificados_solicitud_track[".hasEvents"] = false;

?>