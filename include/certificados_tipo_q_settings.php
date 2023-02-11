<?php
$tdatacertificados_tipo_q = array();
$tdatacertificados_tipo_q[".searchableFields"] = array();
$tdatacertificados_tipo_q[".ShortName"] = "certificados_tipo_q";
$tdatacertificados_tipo_q[".OwnerID"] = "";
$tdatacertificados_tipo_q[".OriginalTable"] = "certificados_tipo";


$tdatacertificados_tipo_q[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacertificados_tipo_q[".originalPagesByType"] = $tdatacertificados_tipo_q[".pagesByType"];
$tdatacertificados_tipo_q[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacertificados_tipo_q[".originalPages"] = $tdatacertificados_tipo_q[".pages"];
$tdatacertificados_tipo_q[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacertificados_tipo_q[".originalDefaultPages"] = $tdatacertificados_tipo_q[".defaultPages"];

//	field labels
$fieldLabelscertificados_tipo_q = array();
$fieldToolTipscertificados_tipo_q = array();
$pageTitlescertificados_tipo_q = array();
$placeHolderscertificados_tipo_q = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscertificados_tipo_q["Spanish"] = array();
	$fieldToolTipscertificados_tipo_q["Spanish"] = array();
	$placeHolderscertificados_tipo_q["Spanish"] = array();
	$pageTitlescertificados_tipo_q["Spanish"] = array();
	$fieldLabelscertificados_tipo_q["Spanish"]["cert_count_id"] = "Cert Count Id";
	$fieldToolTipscertificados_tipo_q["Spanish"]["cert_count_id"] = "";
	$placeHolderscertificados_tipo_q["Spanish"]["cert_count_id"] = "";
	$fieldLabelscertificados_tipo_q["Spanish"]["ID_FK"] = "Id";
	$fieldToolTipscertificados_tipo_q["Spanish"]["ID_FK"] = "";
	$placeHolderscertificados_tipo_q["Spanish"]["ID_FK"] = "";
	$fieldLabelscertificados_tipo_q["Spanish"]["certificado_id_fk"] = "Certificados autorizados";
	$fieldToolTipscertificados_tipo_q["Spanish"]["certificado_id_fk"] = "";
	$placeHolderscertificados_tipo_q["Spanish"]["certificado_id_fk"] = "";
	$fieldLabelscertificados_tipo_q["Spanish"]["certificado_nombre"] = "Nombre certificado";
	$fieldToolTipscertificados_tipo_q["Spanish"]["certificado_nombre"] = "";
	$placeHolderscertificados_tipo_q["Spanish"]["certificado_nombre"] = "";
	if (count($fieldToolTipscertificados_tipo_q["Spanish"]))
		$tdatacertificados_tipo_q[".isUseToolTips"] = true;
}


	$tdatacertificados_tipo_q[".NCSearch"] = true;



$tdatacertificados_tipo_q[".shortTableName"] = "certificados_tipo_q";
$tdatacertificados_tipo_q[".nSecOptions"] = 0;

$tdatacertificados_tipo_q[".mainTableOwnerID"] = "";
$tdatacertificados_tipo_q[".entityType"] = 1;
$tdatacertificados_tipo_q[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacertificados_tipo_q[".strOriginalTableName"] = "certificados_tipo";

	



$tdatacertificados_tipo_q[".showAddInPopup"] = false;

$tdatacertificados_tipo_q[".showEditInPopup"] = false;

$tdatacertificados_tipo_q[".showViewInPopup"] = false;

$tdatacertificados_tipo_q[".listAjax"] = false;
//	temporary
//$tdatacertificados_tipo_q[".listAjax"] = false;

	$tdatacertificados_tipo_q[".audit"] = true;

	$tdatacertificados_tipo_q[".locking"] = true;


$pages = $tdatacertificados_tipo_q[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacertificados_tipo_q[".edit"] = true;
	$tdatacertificados_tipo_q[".afterEditAction"] = 1;
	$tdatacertificados_tipo_q[".closePopupAfterEdit"] = 1;
	$tdatacertificados_tipo_q[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacertificados_tipo_q[".add"] = true;
$tdatacertificados_tipo_q[".afterAddAction"] = 1;
$tdatacertificados_tipo_q[".closePopupAfterAdd"] = 1;
$tdatacertificados_tipo_q[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacertificados_tipo_q[".list"] = true;
}



$tdatacertificados_tipo_q[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacertificados_tipo_q[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacertificados_tipo_q[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacertificados_tipo_q[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacertificados_tipo_q[".printFriendly"] = true;
}



$tdatacertificados_tipo_q[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacertificados_tipo_q[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacertificados_tipo_q[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacertificados_tipo_q[".isUseAjaxSuggest"] = true;





$tdatacertificados_tipo_q[".ajaxCodeSnippetAdded"] = false;

$tdatacertificados_tipo_q[".buttonsAdded"] = false;

$tdatacertificados_tipo_q[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacertificados_tipo_q[".isUseTimeForSearch"] = false;


$tdatacertificados_tipo_q[".badgeColor"] = "8FBC8B";


$tdatacertificados_tipo_q[".allSearchFields"] = array();
$tdatacertificados_tipo_q[".filterFields"] = array();
$tdatacertificados_tipo_q[".requiredSearchFields"] = array();

$tdatacertificados_tipo_q[".googleLikeFields"] = array();
$tdatacertificados_tipo_q[".googleLikeFields"][] = "cert_count_id";
$tdatacertificados_tipo_q[".googleLikeFields"][] = "ID_FK";
$tdatacertificados_tipo_q[".googleLikeFields"][] = "certificado_id_fk";
$tdatacertificados_tipo_q[".googleLikeFields"][] = "certificado_nombre";



$tdatacertificados_tipo_q[".tableType"] = "list";

$tdatacertificados_tipo_q[".printerPageOrientation"] = 0;
$tdatacertificados_tipo_q[".nPrinterPageScale"] = 100;

$tdatacertificados_tipo_q[".nPrinterSplitRecords"] = 40;

$tdatacertificados_tipo_q[".geocodingEnabled"] = false;










$tdatacertificados_tipo_q[".pageSize"] = 20;

$tdatacertificados_tipo_q[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacertificados_tipo_q[".strOrderBy"] = $tstrOrderBy;

$tdatacertificados_tipo_q[".orderindexes"] = array();


$tdatacertificados_tipo_q[".sqlHead"] = "SELECT cert_count_id,  	ID_FK,  	certificado_id_fk,  	certificado_nombre";
$tdatacertificados_tipo_q[".sqlFrom"] = "FROM certificados_tipo";
$tdatacertificados_tipo_q[".sqlWhereExpr"] = "";
$tdatacertificados_tipo_q[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificados_tipo_q[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificados_tipo_q[".arrGroupsPerPage"] = $arrGPP;

$tdatacertificados_tipo_q[".highlightSearchResults"] = true;

$tableKeyscertificados_tipo_q = array();
$tableKeyscertificados_tipo_q[] = "cert_count_id";
$tdatacertificados_tipo_q[".Keys"] = $tableKeyscertificados_tipo_q;


$tdatacertificados_tipo_q[".hideMobileList"] = array();




//	cert_count_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cert_count_id";
	$fdata["GoodName"] = "cert_count_id";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo_q","cert_count_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cert_count_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_count_id";

	
	
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


	$tdatacertificados_tipo_q["cert_count_id"] = $fdata;
		$tdatacertificados_tipo_q[".searchableFields"][] = "cert_count_id";
//	ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_FK";
	$fdata["GoodName"] = "ID_FK";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo_q","ID_FK");
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


	$tdatacertificados_tipo_q["ID_FK"] = $fdata;
		$tdatacertificados_tipo_q[".searchableFields"][] = "ID_FK";
//	certificado_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "certificado_id_fk";
	$fdata["GoodName"] = "certificado_id_fk";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo_q","certificado_id_fk");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"certificado_nombre", 'lookupF'=>"certificado_tipo");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "certificado_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "certificado_id";

	

	
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


	$tdatacertificados_tipo_q["certificado_id_fk"] = $fdata;
		$tdatacertificados_tipo_q[".searchableFields"][] = "certificado_id_fk";
//	certificado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "certificado_nombre";
	$fdata["GoodName"] = "certificado_nombre";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo_q","certificado_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "certificado_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "certificado_nombre";

	
	
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


	$tdatacertificados_tipo_q["certificado_nombre"] = $fdata;
		$tdatacertificados_tipo_q[".searchableFields"][] = "certificado_nombre";


$tables_data["certificados_tipo_q"]=&$tdatacertificados_tipo_q;
$field_labels["certificados_tipo_q"] = &$fieldLabelscertificados_tipo_q;
$fieldToolTips["certificados_tipo_q"] = &$fieldToolTipscertificados_tipo_q;
$placeHolders["certificados_tipo_q"] = &$placeHolderscertificados_tipo_q;
$page_titles["certificados_tipo_q"] = &$pageTitlescertificados_tipo_q;


changeTextControlsToDate( "certificados_tipo_q" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["certificados_tipo_q"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["certificados_tipo_q"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_certificados_tipo_q()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cert_count_id,  	ID_FK,  	certificado_id_fk,  	certificado_nombre";
$proto0["m_strFrom"] = "FROM certificados_tipo";
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
	"m_strName" => "cert_count_id",
	"m_strTable" => "certificados_tipo",
	"m_srcTableName" => "certificados_tipo_q"
));

$proto6["m_sql"] = "cert_count_id";
$proto6["m_srcTableName"] = "certificados_tipo_q";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_FK",
	"m_strTable" => "certificados_tipo",
	"m_srcTableName" => "certificados_tipo_q"
));

$proto8["m_sql"] = "ID_FK";
$proto8["m_srcTableName"] = "certificados_tipo_q";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "certificado_id_fk",
	"m_strTable" => "certificados_tipo",
	"m_srcTableName" => "certificados_tipo_q"
));

$proto10["m_sql"] = "certificado_id_fk";
$proto10["m_srcTableName"] = "certificados_tipo_q";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "certificado_nombre",
	"m_strTable" => "certificados_tipo",
	"m_srcTableName" => "certificados_tipo_q"
));

$proto12["m_sql"] = "certificado_nombre";
$proto12["m_srcTableName"] = "certificados_tipo_q";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "certificados_tipo";
$proto15["m_srcTableName"] = "certificados_tipo_q";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "cert_count_id";
$proto15["m_columns"][] = "ID_FK";
$proto15["m_columns"][] = "certificado_id_fk";
$proto15["m_columns"][] = "certificado_nombre";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "certificados_tipo";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "certificados_tipo_q";
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
$proto0["m_srcTableName"]="certificados_tipo_q";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_certificados_tipo_q = createSqlQuery_certificados_tipo_q();


	
		;

				

$tdatacertificados_tipo_q[".sqlquery"] = $queryData_certificados_tipo_q;



$tdatacertificados_tipo_q[".hasEvents"] = false;

?>