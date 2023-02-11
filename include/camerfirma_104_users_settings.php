<?php
$tdatacamerfirma_104_users = array();
$tdatacamerfirma_104_users[".searchableFields"] = array();
$tdatacamerfirma_104_users[".ShortName"] = "camerfirma_104_users";
$tdatacamerfirma_104_users[".OwnerID"] = "";
$tdatacamerfirma_104_users[".OriginalTable"] = "camerfirma_104_users";


$tdatacamerfirma_104_users[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacamerfirma_104_users[".originalPagesByType"] = $tdatacamerfirma_104_users[".pagesByType"];
$tdatacamerfirma_104_users[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacamerfirma_104_users[".originalPages"] = $tdatacamerfirma_104_users[".pages"];
$tdatacamerfirma_104_users[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacamerfirma_104_users[".originalDefaultPages"] = $tdatacamerfirma_104_users[".defaultPages"];

//	field labels
$fieldLabelscamerfirma_104_users = array();
$fieldToolTipscamerfirma_104_users = array();
$pageTitlescamerfirma_104_users = array();
$placeHolderscamerfirma_104_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscamerfirma_104_users["Spanish"] = array();
	$fieldToolTipscamerfirma_104_users["Spanish"] = array();
	$placeHolderscamerfirma_104_users["Spanish"] = array();
	$pageTitlescamerfirma_104_users["Spanish"] = array();
	$fieldLabelscamerfirma_104_users["Spanish"]["ID"] = "ID";
	$fieldToolTipscamerfirma_104_users["Spanish"]["ID"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["ID"] = "";
	$fieldLabelscamerfirma_104_users["Spanish"]["username"] = "Username";
	$fieldToolTipscamerfirma_104_users["Spanish"]["username"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["username"] = "";
	$fieldLabelscamerfirma_104_users["Spanish"]["password"] = "Password";
	$fieldToolTipscamerfirma_104_users["Spanish"]["password"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["password"] = "";
	$fieldLabelscamerfirma_104_users["Spanish"]["email"] = "Email";
	$fieldToolTipscamerfirma_104_users["Spanish"]["email"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["email"] = "";
	$fieldLabelscamerfirma_104_users["Spanish"]["fullname"] = "Fullname";
	$fieldToolTipscamerfirma_104_users["Spanish"]["fullname"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["fullname"] = "";
	$fieldLabelscamerfirma_104_users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipscamerfirma_104_users["Spanish"]["groupid"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["groupid"] = "";
	$fieldLabelscamerfirma_104_users["Spanish"]["active"] = "Active";
	$fieldToolTipscamerfirma_104_users["Spanish"]["active"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["active"] = "";
	$fieldLabelscamerfirma_104_users["Spanish"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipscamerfirma_104_users["Spanish"]["ext_security_id"] = "";
	$placeHolderscamerfirma_104_users["Spanish"]["ext_security_id"] = "";
	if (count($fieldToolTipscamerfirma_104_users["Spanish"]))
		$tdatacamerfirma_104_users[".isUseToolTips"] = true;
}


	$tdatacamerfirma_104_users[".NCSearch"] = true;



$tdatacamerfirma_104_users[".shortTableName"] = "camerfirma_104_users";
$tdatacamerfirma_104_users[".nSecOptions"] = 0;

$tdatacamerfirma_104_users[".mainTableOwnerID"] = "";
$tdatacamerfirma_104_users[".entityType"] = 0;
$tdatacamerfirma_104_users[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacamerfirma_104_users[".strOriginalTableName"] = "camerfirma_104_users";

	



$tdatacamerfirma_104_users[".showAddInPopup"] = false;

$tdatacamerfirma_104_users[".showEditInPopup"] = false;

$tdatacamerfirma_104_users[".showViewInPopup"] = false;

$tdatacamerfirma_104_users[".listAjax"] = false;
//	temporary
//$tdatacamerfirma_104_users[".listAjax"] = false;

	$tdatacamerfirma_104_users[".audit"] = true;

	$tdatacamerfirma_104_users[".locking"] = true;


$pages = $tdatacamerfirma_104_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacamerfirma_104_users[".edit"] = true;
	$tdatacamerfirma_104_users[".afterEditAction"] = 1;
	$tdatacamerfirma_104_users[".closePopupAfterEdit"] = 1;
	$tdatacamerfirma_104_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacamerfirma_104_users[".add"] = true;
$tdatacamerfirma_104_users[".afterAddAction"] = 1;
$tdatacamerfirma_104_users[".closePopupAfterAdd"] = 1;
$tdatacamerfirma_104_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacamerfirma_104_users[".list"] = true;
}



$tdatacamerfirma_104_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacamerfirma_104_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacamerfirma_104_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacamerfirma_104_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacamerfirma_104_users[".printFriendly"] = true;
}



$tdatacamerfirma_104_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacamerfirma_104_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacamerfirma_104_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacamerfirma_104_users[".isUseAjaxSuggest"] = true;





$tdatacamerfirma_104_users[".ajaxCodeSnippetAdded"] = false;

$tdatacamerfirma_104_users[".buttonsAdded"] = false;

$tdatacamerfirma_104_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacamerfirma_104_users[".isUseTimeForSearch"] = false;


$tdatacamerfirma_104_users[".badgeColor"] = "E07878";


$tdatacamerfirma_104_users[".allSearchFields"] = array();
$tdatacamerfirma_104_users[".filterFields"] = array();
$tdatacamerfirma_104_users[".requiredSearchFields"] = array();

$tdatacamerfirma_104_users[".googleLikeFields"] = array();
$tdatacamerfirma_104_users[".googleLikeFields"][] = "ID";
$tdatacamerfirma_104_users[".googleLikeFields"][] = "username";
$tdatacamerfirma_104_users[".googleLikeFields"][] = "password";
$tdatacamerfirma_104_users[".googleLikeFields"][] = "email";
$tdatacamerfirma_104_users[".googleLikeFields"][] = "fullname";
$tdatacamerfirma_104_users[".googleLikeFields"][] = "groupid";
$tdatacamerfirma_104_users[".googleLikeFields"][] = "active";
$tdatacamerfirma_104_users[".googleLikeFields"][] = "ext_security_id";



$tdatacamerfirma_104_users[".tableType"] = "list";

$tdatacamerfirma_104_users[".printerPageOrientation"] = 0;
$tdatacamerfirma_104_users[".nPrinterPageScale"] = 100;

$tdatacamerfirma_104_users[".nPrinterSplitRecords"] = 40;

$tdatacamerfirma_104_users[".geocodingEnabled"] = false;










$tdatacamerfirma_104_users[".pageSize"] = 20;

$tdatacamerfirma_104_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacamerfirma_104_users[".strOrderBy"] = $tstrOrderBy;

$tdatacamerfirma_104_users[".orderindexes"] = array();


$tdatacamerfirma_104_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdatacamerfirma_104_users[".sqlFrom"] = "FROM camerfirma_104_users";
$tdatacamerfirma_104_users[".sqlWhereExpr"] = "";
$tdatacamerfirma_104_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacamerfirma_104_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacamerfirma_104_users[".arrGroupsPerPage"] = $arrGPP;

$tdatacamerfirma_104_users[".highlightSearchResults"] = true;

$tableKeyscamerfirma_104_users = array();
$tableKeyscamerfirma_104_users[] = "ID";
$tdatacamerfirma_104_users[".Keys"] = $tableKeyscamerfirma_104_users;


$tdatacamerfirma_104_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","ID");
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


	$tdatacamerfirma_104_users["ID"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","username");
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


	$tdatacamerfirma_104_users["username"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","password");
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


	$tdatacamerfirma_104_users["password"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","email");
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


	$tdatacamerfirma_104_users["email"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","fullname");
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


	$tdatacamerfirma_104_users["fullname"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","groupid");
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


	$tdatacamerfirma_104_users["groupid"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","active");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatacamerfirma_104_users["active"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "camerfirma_104_users";
	$fdata["Label"] = GetFieldLabel("camerfirma_104_users","ext_security_id");
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


	$tdatacamerfirma_104_users["ext_security_id"] = $fdata;
		$tdatacamerfirma_104_users[".searchableFields"][] = "ext_security_id";


$tables_data["camerfirma_104_users"]=&$tdatacamerfirma_104_users;
$field_labels["camerfirma_104_users"] = &$fieldLabelscamerfirma_104_users;
$fieldToolTips["camerfirma_104_users"] = &$fieldToolTipscamerfirma_104_users;
$placeHolders["camerfirma_104_users"] = &$placeHolderscamerfirma_104_users;
$page_titles["camerfirma_104_users"] = &$pageTitlescamerfirma_104_users;


changeTextControlsToDate( "camerfirma_104_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["camerfirma_104_users"] = array();
//	dependencia_tipo
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dependencia_tipo";
		$detailsParam["dOriginalTable"] = "dependencia_tipo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dependencia_tipo";
	$detailsParam["dCaptionTable"] = GetTableCaption("dependencia_tipo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["camerfirma_104_users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["camerfirma_104_users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["camerfirma_104_users"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["camerfirma_104_users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["camerfirma_104_users"][$dIndex]["detailKeys"][]="USER_ID_FK";
//	dependencia_tipo_user
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dependencia_tipo_user";
		$detailsParam["dOriginalTable"] = "dependencia_tipo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dependencia_tipo_user";
	$detailsParam["dCaptionTable"] = GetTableCaption("dependencia_tipo_user");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["camerfirma_104_users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["camerfirma_104_users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["camerfirma_104_users"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["camerfirma_104_users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["camerfirma_104_users"][$dIndex]["detailKeys"][]="USER_ID_FK";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["camerfirma_104_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_camerfirma_104_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
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
	"m_srcTableName" => "camerfirma_104_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "camerfirma_104_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "camerfirma_104_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "camerfirma_104_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "camerfirma_104_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "camerfirma_104_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "camerfirma_104_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "camerfirma_104_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "camerfirma_104_users",
	"m_srcTableName" => "camerfirma_104_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "camerfirma_104_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "camerfirma_104_users";
$proto23["m_srcTableName"] = "camerfirma_104_users";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$proto23["m_columns"][] = "reset_token";
$proto23["m_columns"][] = "reset_date";
$proto23["m_columns"][] = "reset_token1";
$proto23["m_columns"][] = "reset_date1";
$proto23["m_columns"][] = "cupo_a";
$proto23["m_columns"][] = "cupo_b";
$proto23["m_columns"][] = "periodo_i";
$proto23["m_columns"][] = "periodo_f";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "camerfirma_104_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "camerfirma_104_users";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="camerfirma_104_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_camerfirma_104_users = createSqlQuery_camerfirma_104_users();


	
		;

								

$tdatacamerfirma_104_users[".sqlquery"] = $queryData_camerfirma_104_users;



$tdatacamerfirma_104_users[".hasEvents"] = false;

?>