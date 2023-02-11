<?php
$tdatamail_messages = array();
$tdatamail_messages[".searchableFields"] = array();
$tdatamail_messages[".ShortName"] = "mail_messages";
$tdatamail_messages[".OwnerID"] = "";
$tdatamail_messages[".OriginalTable"] = "mail_messages";


$tdatamail_messages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamail_messages[".originalPagesByType"] = $tdatamail_messages[".pagesByType"];
$tdatamail_messages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamail_messages[".originalPages"] = $tdatamail_messages[".pages"];
$tdatamail_messages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamail_messages[".originalDefaultPages"] = $tdatamail_messages[".defaultPages"];

//	field labels
$fieldLabelsmail_messages = array();
$fieldToolTipsmail_messages = array();
$pageTitlesmail_messages = array();
$placeHoldersmail_messages = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmail_messages["Spanish"] = array();
	$fieldToolTipsmail_messages["Spanish"] = array();
	$placeHoldersmail_messages["Spanish"] = array();
	$pageTitlesmail_messages["Spanish"] = array();
	$fieldLabelsmail_messages["Spanish"]["id"] = "Id";
	$fieldToolTipsmail_messages["Spanish"]["id"] = "";
	$placeHoldersmail_messages["Spanish"]["id"] = "";
	$fieldLabelsmail_messages["Spanish"]["created"] = "Created";
	$fieldToolTipsmail_messages["Spanish"]["created"] = "";
	$placeHoldersmail_messages["Spanish"]["created"] = "";
	$fieldLabelsmail_messages["Spanish"]["body"] = "Body";
	$fieldToolTipsmail_messages["Spanish"]["body"] = "";
	$placeHoldersmail_messages["Spanish"]["body"] = "";
	$fieldLabelsmail_messages["Spanish"]["to_email"] = "To Email";
	$fieldToolTipsmail_messages["Spanish"]["to_email"] = "";
	$placeHoldersmail_messages["Spanish"]["to_email"] = "";
	$fieldLabelsmail_messages["Spanish"]["subject"] = "Subject";
	$fieldToolTipsmail_messages["Spanish"]["subject"] = "";
	$placeHoldersmail_messages["Spanish"]["subject"] = "";
	$fieldLabelsmail_messages["Spanish"]["message_id"] = "Message Id";
	$fieldToolTipsmail_messages["Spanish"]["message_id"] = "";
	$placeHoldersmail_messages["Spanish"]["message_id"] = "";
	$fieldLabelsmail_messages["Spanish"]["maildate"] = "Maildate";
	$fieldToolTipsmail_messages["Spanish"]["maildate"] = "";
	$placeHoldersmail_messages["Spanish"]["maildate"] = "";
	$fieldLabelsmail_messages["Spanish"]["from_email"] = "From Email";
	$fieldToolTipsmail_messages["Spanish"]["from_email"] = "";
	$placeHoldersmail_messages["Spanish"]["from_email"] = "";
	$fieldLabelsmail_messages["Spanish"]["to_name"] = "To Name";
	$fieldToolTipsmail_messages["Spanish"]["to_name"] = "";
	$placeHoldersmail_messages["Spanish"]["to_name"] = "";
	$fieldLabelsmail_messages["Spanish"]["from_name"] = "From Name";
	$fieldToolTipsmail_messages["Spanish"]["from_name"] = "";
	$placeHoldersmail_messages["Spanish"]["from_name"] = "";
	$fieldLabelsmail_messages["Spanish"]["attachment"] = "Attachment";
	$fieldToolTipsmail_messages["Spanish"]["attachment"] = "";
	$placeHoldersmail_messages["Spanish"]["attachment"] = "";
	$fieldLabelsmail_messages["Spanish"]["cc"] = "Cc";
	$fieldToolTipsmail_messages["Spanish"]["cc"] = "";
	$placeHoldersmail_messages["Spanish"]["cc"] = "";
	$fieldLabelsmail_messages["Spanish"]["bcc"] = "Bcc";
	$fieldToolTipsmail_messages["Spanish"]["bcc"] = "";
	$placeHoldersmail_messages["Spanish"]["bcc"] = "";
	$fieldLabelsmail_messages["Spanish"]["server_id"] = "Server Id";
	$fieldToolTipsmail_messages["Spanish"]["server_id"] = "";
	$placeHoldersmail_messages["Spanish"]["server_id"] = "";
	if (count($fieldToolTipsmail_messages["Spanish"]))
		$tdatamail_messages[".isUseToolTips"] = true;
}


	$tdatamail_messages[".NCSearch"] = true;



$tdatamail_messages[".shortTableName"] = "mail_messages";
$tdatamail_messages[".nSecOptions"] = 0;

$tdatamail_messages[".mainTableOwnerID"] = "";
$tdatamail_messages[".entityType"] = 0;
$tdatamail_messages[".connId"] = "sgiysp_at_127_0_0_1";


$tdatamail_messages[".strOriginalTableName"] = "mail_messages";

	



$tdatamail_messages[".showAddInPopup"] = false;

$tdatamail_messages[".showEditInPopup"] = false;

$tdatamail_messages[".showViewInPopup"] = false;

$tdatamail_messages[".listAjax"] = false;
//	temporary
//$tdatamail_messages[".listAjax"] = false;

	$tdatamail_messages[".audit"] = true;

	$tdatamail_messages[".locking"] = true;


$pages = $tdatamail_messages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamail_messages[".edit"] = true;
	$tdatamail_messages[".afterEditAction"] = 1;
	$tdatamail_messages[".closePopupAfterEdit"] = 1;
	$tdatamail_messages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamail_messages[".add"] = true;
$tdatamail_messages[".afterAddAction"] = 1;
$tdatamail_messages[".closePopupAfterAdd"] = 1;
$tdatamail_messages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamail_messages[".list"] = true;
}



$tdatamail_messages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamail_messages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamail_messages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamail_messages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamail_messages[".printFriendly"] = true;
}



$tdatamail_messages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamail_messages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamail_messages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamail_messages[".isUseAjaxSuggest"] = true;





$tdatamail_messages[".ajaxCodeSnippetAdded"] = false;

$tdatamail_messages[".buttonsAdded"] = false;

$tdatamail_messages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamail_messages[".isUseTimeForSearch"] = false;


$tdatamail_messages[".badgeColor"] = "CD853F";


$tdatamail_messages[".allSearchFields"] = array();
$tdatamail_messages[".filterFields"] = array();
$tdatamail_messages[".requiredSearchFields"] = array();

$tdatamail_messages[".googleLikeFields"] = array();
$tdatamail_messages[".googleLikeFields"][] = "id";
$tdatamail_messages[".googleLikeFields"][] = "created";
$tdatamail_messages[".googleLikeFields"][] = "body";
$tdatamail_messages[".googleLikeFields"][] = "to_email";
$tdatamail_messages[".googleLikeFields"][] = "subject";
$tdatamail_messages[".googleLikeFields"][] = "message_id";
$tdatamail_messages[".googleLikeFields"][] = "maildate";
$tdatamail_messages[".googleLikeFields"][] = "from_email";
$tdatamail_messages[".googleLikeFields"][] = "to_name";
$tdatamail_messages[".googleLikeFields"][] = "from_name";
$tdatamail_messages[".googleLikeFields"][] = "attachment";
$tdatamail_messages[".googleLikeFields"][] = "cc";
$tdatamail_messages[".googleLikeFields"][] = "bcc";
$tdatamail_messages[".googleLikeFields"][] = "server_id";



$tdatamail_messages[".tableType"] = "list";

$tdatamail_messages[".printerPageOrientation"] = 0;
$tdatamail_messages[".nPrinterPageScale"] = 100;

$tdatamail_messages[".nPrinterSplitRecords"] = 40;

$tdatamail_messages[".geocodingEnabled"] = false;




$tdatamail_messages[".isDisplayLoading"] = true;






$tdatamail_messages[".pageSize"] = 20;

$tdatamail_messages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamail_messages[".strOrderBy"] = $tstrOrderBy;

$tdatamail_messages[".orderindexes"] = array();


$tdatamail_messages[".sqlHead"] = "SELECT id,  	created,  	`body`,  	to_email,  	subject,  	message_id,  	maildate,  	from_email,  	to_name,  	from_name,  	attachment,  	cc,  	bcc,  	server_id";
$tdatamail_messages[".sqlFrom"] = "FROM mail_messages";
$tdatamail_messages[".sqlWhereExpr"] = "";
$tdatamail_messages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamail_messages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamail_messages[".arrGroupsPerPage"] = $arrGPP;

$tdatamail_messages[".highlightSearchResults"] = true;

$tableKeysmail_messages = array();
$tableKeysmail_messages[] = "id";
$tdatamail_messages[".Keys"] = $tableKeysmail_messages;


$tdatamail_messages[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatamail_messages["id"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "id";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatamail_messages["created"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "created";
//	body
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "body";
	$fdata["GoodName"] = "body";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","body");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "body";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`body`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatamail_messages["body"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "body";
//	to_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "to_email";
	$fdata["GoodName"] = "to_email";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","to_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "to_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "to_email";

	
	
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
			$edata["EditParams"].= " maxlength=1024";

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


	$tdatamail_messages["to_email"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "to_email";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","subject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subject";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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


	$tdatamail_messages["subject"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "subject";
//	message_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "message_id";
	$fdata["GoodName"] = "message_id";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","message_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "message_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "message_id";

	
	
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


	$tdatamail_messages["message_id"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "message_id";
//	maildate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "maildate";
	$fdata["GoodName"] = "maildate";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","maildate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "maildate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maildate";

	
	
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


	$tdatamail_messages["maildate"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "maildate";
//	from_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "from_email";
	$fdata["GoodName"] = "from_email";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","from_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "from_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "from_email";

	
	
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


	$tdatamail_messages["from_email"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "from_email";
//	to_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "to_name";
	$fdata["GoodName"] = "to_name";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","to_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "to_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "to_name";

	
	
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


	$tdatamail_messages["to_name"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "to_name";
//	from_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "from_name";
	$fdata["GoodName"] = "from_name";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","from_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "from_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "from_name";

	
	
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


	$tdatamail_messages["from_name"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "from_name";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","attachment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "attachment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attachment";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatamail_messages["attachment"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "attachment";
//	cc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cc";
	$fdata["GoodName"] = "cc";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","cc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cc";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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


	$tdatamail_messages["cc"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "cc";
//	bcc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "bcc";
	$fdata["GoodName"] = "bcc";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","bcc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bcc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bcc";

	
	
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
			$edata["EditParams"].= " maxlength=512";

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


	$tdatamail_messages["bcc"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "bcc";
//	server_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "server_id";
	$fdata["GoodName"] = "server_id";
	$fdata["ownerTable"] = "mail_messages";
	$fdata["Label"] = GetFieldLabel("mail_messages","server_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "server_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "server_id";

	
	
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


	$tdatamail_messages["server_id"] = $fdata;
		$tdatamail_messages[".searchableFields"][] = "server_id";


$tables_data["mail_messages"]=&$tdatamail_messages;
$field_labels["mail_messages"] = &$fieldLabelsmail_messages;
$fieldToolTips["mail_messages"] = &$fieldToolTipsmail_messages;
$placeHolders["mail_messages"] = &$placeHoldersmail_messages;
$page_titles["mail_messages"] = &$pageTitlesmail_messages;


changeTextControlsToDate( "mail_messages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mail_messages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mail_messages"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mail_messages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	created,  	`body`,  	to_email,  	subject,  	message_id,  	maildate,  	from_email,  	to_name,  	from_name,  	attachment,  	cc,  	bcc,  	server_id";
$proto0["m_strFrom"] = "FROM mail_messages";
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
	"m_strName" => "id",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mail_messages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "created",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto8["m_sql"] = "created";
$proto8["m_srcTableName"] = "mail_messages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "body",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto10["m_sql"] = "`body`";
$proto10["m_srcTableName"] = "mail_messages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "to_email",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto12["m_sql"] = "to_email";
$proto12["m_srcTableName"] = "mail_messages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto14["m_sql"] = "subject";
$proto14["m_srcTableName"] = "mail_messages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "message_id",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto16["m_sql"] = "message_id";
$proto16["m_srcTableName"] = "mail_messages";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "maildate",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto18["m_sql"] = "maildate";
$proto18["m_srcTableName"] = "mail_messages";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "from_email",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto20["m_sql"] = "from_email";
$proto20["m_srcTableName"] = "mail_messages";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "to_name",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto22["m_sql"] = "to_name";
$proto22["m_srcTableName"] = "mail_messages";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "from_name",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto24["m_sql"] = "from_name";
$proto24["m_srcTableName"] = "mail_messages";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto26["m_sql"] = "attachment";
$proto26["m_srcTableName"] = "mail_messages";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cc",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto28["m_sql"] = "cc";
$proto28["m_srcTableName"] = "mail_messages";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "bcc",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto30["m_sql"] = "bcc";
$proto30["m_srcTableName"] = "mail_messages";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "server_id",
	"m_strTable" => "mail_messages",
	"m_srcTableName" => "mail_messages"
));

$proto32["m_sql"] = "server_id";
$proto32["m_srcTableName"] = "mail_messages";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "mail_messages";
$proto35["m_srcTableName"] = "mail_messages";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "created";
$proto35["m_columns"][] = "body";
$proto35["m_columns"][] = "to_email";
$proto35["m_columns"][] = "subject";
$proto35["m_columns"][] = "message_id";
$proto35["m_columns"][] = "maildate";
$proto35["m_columns"][] = "from_email";
$proto35["m_columns"][] = "to_name";
$proto35["m_columns"][] = "from_name";
$proto35["m_columns"][] = "attachment";
$proto35["m_columns"][] = "cc";
$proto35["m_columns"][] = "bcc";
$proto35["m_columns"][] = "server_id";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "mail_messages";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "mail_messages";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mail_messages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mail_messages = createSqlQuery_mail_messages();


	
		;

														

$tdatamail_messages[".sqlquery"] = $queryData_mail_messages;



$tdatamail_messages[".hasEvents"] = false;

?>