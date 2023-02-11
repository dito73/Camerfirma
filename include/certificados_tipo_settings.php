<?php
$tdatacertificados_tipo = array();
$tdatacertificados_tipo[".searchableFields"] = array();
$tdatacertificados_tipo[".ShortName"] = "certificados_tipo";
$tdatacertificados_tipo[".OwnerID"] = "";
$tdatacertificados_tipo[".OriginalTable"] = "certificados_tipo";


$tdatacertificados_tipo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacertificados_tipo[".originalPagesByType"] = $tdatacertificados_tipo[".pagesByType"];
$tdatacertificados_tipo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacertificados_tipo[".originalPages"] = $tdatacertificados_tipo[".pages"];
$tdatacertificados_tipo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacertificados_tipo[".originalDefaultPages"] = $tdatacertificados_tipo[".defaultPages"];

//	field labels
$fieldLabelscertificados_tipo = array();
$fieldToolTipscertificados_tipo = array();
$pageTitlescertificados_tipo = array();
$placeHolderscertificados_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscertificados_tipo["Spanish"] = array();
	$fieldToolTipscertificados_tipo["Spanish"] = array();
	$placeHolderscertificados_tipo["Spanish"] = array();
	$pageTitlescertificados_tipo["Spanish"] = array();
	$fieldLabelscertificados_tipo["Spanish"]["cert_count_id"] = "Cert Count Id";
	$fieldToolTipscertificados_tipo["Spanish"]["cert_count_id"] = "";
	$placeHolderscertificados_tipo["Spanish"]["cert_count_id"] = "";
	$fieldLabelscertificados_tipo["Spanish"]["ID_FK"] = "Id";
	$fieldToolTipscertificados_tipo["Spanish"]["ID_FK"] = "";
	$placeHolderscertificados_tipo["Spanish"]["ID_FK"] = "";
	$fieldLabelscertificados_tipo["Spanish"]["certificado_id_fk"] = "Certificados autorizados";
	$fieldToolTipscertificados_tipo["Spanish"]["certificado_id_fk"] = "";
	$placeHolderscertificados_tipo["Spanish"]["certificado_id_fk"] = "";
	$fieldLabelscertificados_tipo["Spanish"]["certificado_nombre"] = "Nombre certificado";
	$fieldToolTipscertificados_tipo["Spanish"]["certificado_nombre"] = "";
	$placeHolderscertificados_tipo["Spanish"]["certificado_nombre"] = "";
	if (count($fieldToolTipscertificados_tipo["Spanish"]))
		$tdatacertificados_tipo[".isUseToolTips"] = true;
}


	$tdatacertificados_tipo[".NCSearch"] = true;



$tdatacertificados_tipo[".shortTableName"] = "certificados_tipo";
$tdatacertificados_tipo[".nSecOptions"] = 0;

$tdatacertificados_tipo[".mainTableOwnerID"] = "";
$tdatacertificados_tipo[".entityType"] = 0;
$tdatacertificados_tipo[".connId"] = "sgiysp_at_127_0_0_1";


$tdatacertificados_tipo[".strOriginalTableName"] = "certificados_tipo";

	



$tdatacertificados_tipo[".showAddInPopup"] = false;

$tdatacertificados_tipo[".showEditInPopup"] = false;

$tdatacertificados_tipo[".showViewInPopup"] = false;

$tdatacertificados_tipo[".listAjax"] = false;
//	temporary
//$tdatacertificados_tipo[".listAjax"] = false;

	$tdatacertificados_tipo[".audit"] = true;

	$tdatacertificados_tipo[".locking"] = true;


$pages = $tdatacertificados_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacertificados_tipo[".edit"] = true;
	$tdatacertificados_tipo[".afterEditAction"] = 1;
	$tdatacertificados_tipo[".closePopupAfterEdit"] = 1;
	$tdatacertificados_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacertificados_tipo[".add"] = true;
$tdatacertificados_tipo[".afterAddAction"] = 1;
$tdatacertificados_tipo[".closePopupAfterAdd"] = 1;
$tdatacertificados_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacertificados_tipo[".list"] = true;
}



$tdatacertificados_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacertificados_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacertificados_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacertificados_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacertificados_tipo[".printFriendly"] = true;
}



$tdatacertificados_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacertificados_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacertificados_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacertificados_tipo[".isUseAjaxSuggest"] = true;





$tdatacertificados_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatacertificados_tipo[".buttonsAdded"] = false;

$tdatacertificados_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacertificados_tipo[".isUseTimeForSearch"] = false;


$tdatacertificados_tipo[".badgeColor"] = "6493ea";


$tdatacertificados_tipo[".allSearchFields"] = array();
$tdatacertificados_tipo[".filterFields"] = array();
$tdatacertificados_tipo[".requiredSearchFields"] = array();

$tdatacertificados_tipo[".googleLikeFields"] = array();
$tdatacertificados_tipo[".googleLikeFields"][] = "cert_count_id";
$tdatacertificados_tipo[".googleLikeFields"][] = "ID_FK";
$tdatacertificados_tipo[".googleLikeFields"][] = "certificado_id_fk";
$tdatacertificados_tipo[".googleLikeFields"][] = "certificado_nombre";



$tdatacertificados_tipo[".tableType"] = "list";

$tdatacertificados_tipo[".printerPageOrientation"] = 0;
$tdatacertificados_tipo[".nPrinterPageScale"] = 100;

$tdatacertificados_tipo[".nPrinterSplitRecords"] = 40;

$tdatacertificados_tipo[".geocodingEnabled"] = false;










$tdatacertificados_tipo[".pageSize"] = 20;

$tdatacertificados_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacertificados_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatacertificados_tipo[".orderindexes"] = array();


$tdatacertificados_tipo[".sqlHead"] = "SELECT cert_count_id,  	ID_FK,  	certificado_id_fk,  	certificado_nombre";
$tdatacertificados_tipo[".sqlFrom"] = "FROM certificados_tipo";
$tdatacertificados_tipo[".sqlWhereExpr"] = "";
$tdatacertificados_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificados_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificados_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatacertificados_tipo[".highlightSearchResults"] = true;

$tableKeyscertificados_tipo = array();
$tableKeyscertificados_tipo[] = "cert_count_id";
$tdatacertificados_tipo[".Keys"] = $tableKeyscertificados_tipo;


$tdatacertificados_tipo[".hideMobileList"] = array();




//	cert_count_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cert_count_id";
	$fdata["GoodName"] = "cert_count_id";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo","cert_count_id");
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


	$tdatacertificados_tipo["cert_count_id"] = $fdata;
		$tdatacertificados_tipo[".searchableFields"][] = "cert_count_id";
//	ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_FK";
	$fdata["GoodName"] = "ID_FK";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo","ID_FK");
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


	$tdatacertificados_tipo["ID_FK"] = $fdata;
		$tdatacertificados_tipo[".searchableFields"][] = "ID_FK";
//	certificado_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "certificado_id_fk";
	$fdata["GoodName"] = "certificado_id_fk";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo","certificado_id_fk");
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


	$tdatacertificados_tipo["certificado_id_fk"] = $fdata;
		$tdatacertificados_tipo[".searchableFields"][] = "certificado_id_fk";
//	certificado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "certificado_nombre";
	$fdata["GoodName"] = "certificado_nombre";
	$fdata["ownerTable"] = "certificados_tipo";
	$fdata["Label"] = GetFieldLabel("certificados_tipo","certificado_nombre");
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


	$tdatacertificados_tipo["certificado_nombre"] = $fdata;
		$tdatacertificados_tipo[".searchableFields"][] = "certificado_nombre";


$tables_data["certificados_tipo"]=&$tdatacertificados_tipo;
$field_labels["certificados_tipo"] = &$fieldLabelscertificados_tipo;
$fieldToolTips["certificados_tipo"] = &$fieldToolTipscertificados_tipo;
$placeHolders["certificados_tipo"] = &$placeHolderscertificados_tipo;
$page_titles["certificados_tipo"] = &$pageTitlescertificados_tipo;


changeTextControlsToDate( "certificados_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["certificados_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["certificados_tipo"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="camerfirma_104_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="camerfirma_104_users_gestion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "camerfirma_104_users_gestion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["certificados_tipo"][0] = $masterParams;
				$masterTablesData["certificados_tipo"][0]["masterKeys"] = array();
	$masterTablesData["certificados_tipo"][0]["masterKeys"][]="ID";
				$masterTablesData["certificados_tipo"][0]["detailKeys"] = array();
	$masterTablesData["certificados_tipo"][0]["detailKeys"][]="ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_certificados_tipo()
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
	"m_srcTableName" => "certificados_tipo"
));

$proto6["m_sql"] = "cert_count_id";
$proto6["m_srcTableName"] = "certificados_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_FK",
	"m_strTable" => "certificados_tipo",
	"m_srcTableName" => "certificados_tipo"
));

$proto8["m_sql"] = "ID_FK";
$proto8["m_srcTableName"] = "certificados_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "certificado_id_fk",
	"m_strTable" => "certificados_tipo",
	"m_srcTableName" => "certificados_tipo"
));

$proto10["m_sql"] = "certificado_id_fk";
$proto10["m_srcTableName"] = "certificados_tipo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "certificado_nombre",
	"m_strTable" => "certificados_tipo",
	"m_srcTableName" => "certificados_tipo"
));

$proto12["m_sql"] = "certificado_nombre";
$proto12["m_srcTableName"] = "certificados_tipo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "certificados_tipo";
$proto15["m_srcTableName"] = "certificados_tipo";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "cert_count_id";
$proto15["m_columns"][] = "ID_FK";
$proto15["m_columns"][] = "certificado_id_fk";
$proto15["m_columns"][] = "certificado_nombre";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "certificados_tipo";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "certificados_tipo";
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
$proto0["m_srcTableName"]="certificados_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_certificados_tipo = createSqlQuery_certificados_tipo();


	
		;

				

$tdatacertificados_tipo[".sqlquery"] = $queryData_certificados_tipo;



$tdatacertificados_tipo[".hasEvents"] = false;

?>