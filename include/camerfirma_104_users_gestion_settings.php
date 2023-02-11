<?php
$tdatacamerfirma_104_users_gestion = array();
$tdatacamerfirma_104_users_gestion[".searchableFields"] = array();
$tdatacamerfirma_104_users_gestion[".ShortName"] = "camerfirma_104_users_gestion";
$tdatacamerfirma_104_users_gestion[".OwnerID"] = "ID";
$tdatacamerfirma_104_users_gestion[".OriginalTable"] = "camerfirma_104_users";


$tdatacamerfirma_104_users_gestion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacamerfirma_104_users_gestion[".originalPagesByType"] = $tdatacamerfirma_104_users_gestion[".pagesByType"];
$tdatacamerfirma_104_users_gestion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacamerfirma_104_users_gestion[".originalPages"] = $tdatacamerfirma_104_users_gestion[".pages"];
$tdatacamerfirma_104_users_gestion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacamerfirma_104_users_gestion[".originalDefaultPages"] = $tdatacamerfirma_104_users_gestion[".defaultPages"];

//	field labels
$fieldLabelscamerfirma_104_users_gestion = array();
$fieldToolTipscamerfirma_104_users_gestion = array();
$pageTitlescamerfirma_104_users_gestion = array();
$placeHolderscamerfirma_104_users_gestion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscamerfirma_104_users_gestion["Spanish"] = array();
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"] = array();
	$placeHolderscamerfirma_104_users_gestion["Spanish"] = array();
	$pageTitlescamerfirma_104_users_gestion["Spanish"] = array();
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["ID"] = "ID";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["ID"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["ID"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["username"] = "NIT | DOCUMENTO";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["username"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["username"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["password"] = "Password";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["password"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["password"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["email"] = "Correo autorizado";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["email"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["email"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["fullname"] = "Razón Social | Nombre";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["fullname"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["fullname"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["groupid"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["groupid"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["active"] = "Active";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["active"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["active"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["ext_security_id"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["ext_security_id"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["cupo_a"] = "Cupo token virtual";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["cupo_a"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["cupo_a"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["cupo_b"] = "Cupo token físico";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["cupo_b"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["cupo_b"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["periodo_i"] = "Fecha de inicio";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["periodo_i"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["periodo_i"] = "";
	$fieldLabelscamerfirma_104_users_gestion["Spanish"]["periodo_f"] = "Fecha de terminación";
	$fieldToolTipscamerfirma_104_users_gestion["Spanish"]["periodo_f"] = "";
	$placeHolderscamerfirma_104_users_gestion["Spanish"]["periodo_f"] = "";
	$pageTitlescamerfirma_104_users_gestion["Spanish"]["add"] = "Gestión de usuarios";
	if (count($fieldToolTipscamerfirma_104_users_gestion["Spanish"]))
		$tdatacamerfirma_104_users_gestion[".isUseToolTips"] = true;
}


	$tdatacamerfirma_104_users_gestion[".NCSearch"] = true;



$tdatacamerfirma_104_users_gestion[".shortTableName"] = "camerfirma_104_users_gestion";
$tdatacamerfirma_104_users_gestion[".nSecOptions"] = 1;

$tdatacamerfirma_104_users_gestion[".mainTableOwnerID"] = "ID";
$tdatacamerfirma_104_users_gestion[".entityType"] = 1;
$tdatacamerfirma_104_users_gestion[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacamerfirma_104_users_gestion[".strOriginalTableName"] = "camerfirma_104_users";

	



$tdatacamerfirma_104_users_gestion[".showAddInPopup"] = false;

$tdatacamerfirma_104_users_gestion[".showEditInPopup"] = false;

$tdatacamerfirma_104_users_gestion[".showViewInPopup"] = false;

$tdatacamerfirma_104_users_gestion[".listAjax"] = false;
//	temporary
//$tdatacamerfirma_104_users_gestion[".listAjax"] = false;

	$tdatacamerfirma_104_users_gestion[".audit"] = true;

	$tdatacamerfirma_104_users_gestion[".locking"] = true;


$pages = $tdatacamerfirma_104_users_gestion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacamerfirma_104_users_gestion[".edit"] = true;
	$tdatacamerfirma_104_users_gestion[".afterEditAction"] = 0;
	$tdatacamerfirma_104_users_gestion[".closePopupAfterEdit"] = 1;
	$tdatacamerfirma_104_users_gestion[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatacamerfirma_104_users_gestion[".add"] = true;
$tdatacamerfirma_104_users_gestion[".afterAddAction"] = 1;
$tdatacamerfirma_104_users_gestion[".closePopupAfterAdd"] = 1;
$tdatacamerfirma_104_users_gestion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacamerfirma_104_users_gestion[".list"] = true;
}



$tdatacamerfirma_104_users_gestion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacamerfirma_104_users_gestion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacamerfirma_104_users_gestion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacamerfirma_104_users_gestion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacamerfirma_104_users_gestion[".printFriendly"] = true;
}



$tdatacamerfirma_104_users_gestion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacamerfirma_104_users_gestion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacamerfirma_104_users_gestion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacamerfirma_104_users_gestion[".isUseAjaxSuggest"] = true;





$tdatacamerfirma_104_users_gestion[".ajaxCodeSnippetAdded"] = false;

$tdatacamerfirma_104_users_gestion[".buttonsAdded"] = false;

$tdatacamerfirma_104_users_gestion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacamerfirma_104_users_gestion[".isUseTimeForSearch"] = false;


$tdatacamerfirma_104_users_gestion[".badgeColor"] = "DC143C";


$tdatacamerfirma_104_users_gestion[".allSearchFields"] = array();
$tdatacamerfirma_104_users_gestion[".filterFields"] = array();
$tdatacamerfirma_104_users_gestion[".requiredSearchFields"] = array();

$tdatacamerfirma_104_users_gestion[".googleLikeFields"] = array();
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "ID";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "username";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "password";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "email";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "fullname";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "groupid";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "active";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "ext_security_id";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "cupo_a";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "cupo_b";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "periodo_i";
$tdatacamerfirma_104_users_gestion[".googleLikeFields"][] = "periodo_f";



$tdatacamerfirma_104_users_gestion[".tableType"] = "list";

$tdatacamerfirma_104_users_gestion[".printerPageOrientation"] = 0;
$tdatacamerfirma_104_users_gestion[".nPrinterPageScale"] = 100;

$tdatacamerfirma_104_users_gestion[".nPrinterSplitRecords"] = 40;

$tdatacamerfirma_104_users_gestion[".geocodingEnabled"] = false;




$tdatacamerfirma_104_users_gestion[".isDisplayLoading"] = true;






$tdatacamerfirma_104_users_gestion[".pageSize"] = 20;

$tdatacamerfirma_104_users_gestion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacamerfirma_104_users_gestion[".strOrderBy"] = $tstrOrderBy;

$tdatacamerfirma_104_users_gestion[".orderindexes"] = array();


$tdatacamerfirma_104_users_gestion[".sqlHead"] = "SELECT ID,  username,  password,  email,  fullname,  groupid,  active,  ext_security_id,  cupo_a,  cupo_b,  periodo_i,  periodo_f";
$tdatacamerfirma_104_users_gestion[".sqlFrom"] = "FROM camerfirma_104_users";
$tdatacamerfirma_104_users_gestion[".sqlWhereExpr"] = "";
$tdatacamerfirma_104_users_gestion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacamerfirma_104_users_gestion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacamerfirma_104_users_gestion[".arrGroupsPerPage"] = $arrGPP;

$tdatacamerfirma_104_users_gestion[".highlightSearchResults"] = true;

$tableKeyscamerfirma_104_users_gestion = array();
$tableKeyscamerfirma_104_users_gestion[] = "ID";
$tdatacamerfirma_104_users_gestion[".Keys"] = $tableKeyscamerfirma_104_users_gestion;


$tdatacamerfirma_104_users_gestion[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","ID");
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


	$tdatacamerfirma_104_users_gestion["ID"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","username");
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


	$tdatacamerfirma_104_users_gestion["username"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatacamerfirma_104_users_gestion["password"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","email");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdatacamerfirma_104_users_gestion["email"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","fullname");
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


	$tdatacamerfirma_104_users_gestion["fullname"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatacamerfirma_104_users_gestion["groupid"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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
							
		$edata["autoUpdatable"] = true;

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


	$tdatacamerfirma_104_users_gestion["active"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdatacamerfirma_104_users_gestion["ext_security_id"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "ext_security_id";
//	cupo_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cupo_a";
	$fdata["GoodName"] = "cupo_a";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","cupo_a");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cupo_a";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cupo_a";

	
	
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


	$tdatacamerfirma_104_users_gestion["cupo_a"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "cupo_a";
//	cupo_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cupo_b";
	$fdata["GoodName"] = "cupo_b";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","cupo_b");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cupo_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cupo_b";

	
	
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


	$tdatacamerfirma_104_users_gestion["cupo_b"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "cupo_b";
//	periodo_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "periodo_i";
	$fdata["GoodName"] = "periodo_i";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","periodo_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "periodo_i";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_i";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 5;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatacamerfirma_104_users_gestion["periodo_i"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "periodo_i";
//	periodo_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "periodo_f";
	$fdata["GoodName"] = "periodo_f";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users_gestion","periodo_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "periodo_f";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_f";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 5;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatacamerfirma_104_users_gestion["periodo_f"] = $fdata;
		$tdatacamerfirma_104_users_gestion[".searchableFields"][] = "periodo_f";


$tables_data["camerfirma_104_users_gestion"]=&$tdatacamerfirma_104_users_gestion;
$field_labels["camerfirma_104_users_gestion"] = &$fieldLabelscamerfirma_104_users_gestion;
$fieldToolTips["camerfirma_104_users_gestion"] = &$fieldToolTipscamerfirma_104_users_gestion;
$placeHolders["camerfirma_104_users_gestion"] = &$placeHolderscamerfirma_104_users_gestion;
$page_titles["camerfirma_104_users_gestion"] = &$pageTitlescamerfirma_104_users_gestion;


changeTextControlsToDate( "camerfirma_104_users_gestion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["camerfirma_104_users_gestion"] = array();
//	certificados_tipo
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="certificados_tipo";
		$detailsParam["dOriginalTable"] = "certificados_tipo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "certificados_tipo";
	$detailsParam["dCaptionTable"] = GetTableCaption("certificados_tipo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["detailKeys"][]="ID_FK";
//	token_tipo
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="token_tipo";
		$detailsParam["dOriginalTable"] = "token_tipo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "token_tipo";
	$detailsParam["dCaptionTable"] = GetTableCaption("token_tipo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["detailKeys"][]="ID_FK";
//	dependencia_tipo
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dependencia_tipo";
		$detailsParam["dOriginalTable"] = "dependencia_tipo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dependencia_tipo";
	$detailsParam["dCaptionTable"] = GetTableCaption("dependencia_tipo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["camerfirma_104_users_gestion"][$dIndex]["detailKeys"][]="USER_ID_FK";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["camerfirma_104_users_gestion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_camerfirma_104_users_gestion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  username,  password,  email,  fullname,  groupid,  active,  ext_security_id,  cupo_a,  cupo_b,  periodo_i,  periodo_f";
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
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cupo_a",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto22["m_sql"] = "cupo_a";
$proto22["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cupo_b",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto24["m_sql"] = "cupo_b";
$proto24["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_i",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto26["m_sql"] = "periodo_i";
$proto26["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_f",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users_gestion"
));

$proto28["m_sql"] = "periodo_f";
$proto28["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "camerfirma_104_users";
$proto31["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "username";
$proto31["m_columns"][] = "password";
$proto31["m_columns"][] = "email";
$proto31["m_columns"][] = "fullname";
$proto31["m_columns"][] = "groupid";
$proto31["m_columns"][] = "active";
$proto31["m_columns"][] = "ext_security_id";
$proto31["m_columns"][] = "reset_token";
$proto31["m_columns"][] = "reset_date";
$proto31["m_columns"][] = "reset_token1";
$proto31["m_columns"][] = "reset_date1";
$proto31["m_columns"][] = "cupo_a";
$proto31["m_columns"][] = "cupo_b";
$proto31["m_columns"][] = "periodo_i";
$proto31["m_columns"][] = "periodo_f";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "camerfirma_104_users";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "camerfirma_104_users_gestion";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="camerfirma_104_users_gestion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_camerfirma_104_users_gestion = createSqlQuery_camerfirma_104_users_gestion();


	
		;

												

$tdatacamerfirma_104_users_gestion[".sqlquery"] = $queryData_camerfirma_104_users_gestion;



$tdatacamerfirma_104_users_gestion[".hasEvents"] = false;

?>