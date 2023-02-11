<?php
$tdataq_group_tipotoken_chart = array();
$tdataq_group_tipotoken_chart[".searchableFields"] = array();
$tdataq_group_tipotoken_chart[".ShortName"] = "q_group_tipotoken_chart";
$tdataq_group_tipotoken_chart[".OwnerID"] = "ID_FK";
$tdataq_group_tipotoken_chart[".OriginalTable"] = "q_group_tipotoken";


$tdataq_group_tipotoken_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataq_group_tipotoken_chart[".originalPagesByType"] = $tdataq_group_tipotoken_chart[".pagesByType"];
$tdataq_group_tipotoken_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataq_group_tipotoken_chart[".originalPages"] = $tdataq_group_tipotoken_chart[".pages"];
$tdataq_group_tipotoken_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataq_group_tipotoken_chart[".originalDefaultPages"] = $tdataq_group_tipotoken_chart[".defaultPages"];

//	field labels
$fieldLabelsq_group_tipotoken_chart = array();
$fieldToolTipsq_group_tipotoken_chart = array();
$pageTitlesq_group_tipotoken_chart = array();
$placeHoldersq_group_tipotoken_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_group_tipotoken_chart["Spanish"] = array();
	$fieldToolTipsq_group_tipotoken_chart["Spanish"] = array();
	$placeHoldersq_group_tipotoken_chart["Spanish"] = array();
	$pageTitlesq_group_tipotoken_chart["Spanish"] = array();
	$fieldLabelsq_group_tipotoken_chart["Spanish"]["ID_FK"] = "ID FK";
	$fieldToolTipsq_group_tipotoken_chart["Spanish"]["ID_FK"] = "";
	$placeHoldersq_group_tipotoken_chart["Spanish"]["ID_FK"] = "";
	$fieldLabelsq_group_tipotoken_chart["Spanish"]["qty"] = "Cantidad";
	$fieldToolTipsq_group_tipotoken_chart["Spanish"]["qty"] = "";
	$placeHoldersq_group_tipotoken_chart["Spanish"]["qty"] = "";
	$fieldLabelsq_group_tipotoken_chart["Spanish"]["token_id"] = "Tipo de token";
	$fieldToolTipsq_group_tipotoken_chart["Spanish"]["token_id"] = "";
	$placeHoldersq_group_tipotoken_chart["Spanish"]["token_id"] = "";
	if (count($fieldToolTipsq_group_tipotoken_chart["Spanish"]))
		$tdataq_group_tipotoken_chart[".isUseToolTips"] = true;
}


	$tdataq_group_tipotoken_chart[".NCSearch"] = true;

	$tdataq_group_tipotoken_chart[".ChartRefreshTime"] = 0;


$tdataq_group_tipotoken_chart[".shortTableName"] = "q_group_tipotoken_chart";
$tdataq_group_tipotoken_chart[".nSecOptions"] = 1;

$tdataq_group_tipotoken_chart[".mainTableOwnerID"] = "ID_FK";
$tdataq_group_tipotoken_chart[".entityType"] = 3;
$tdataq_group_tipotoken_chart[".connId"] = "sgiysp_at_127_0_0_1";


$tdataq_group_tipotoken_chart[".strOriginalTableName"] = "q_group_tipotoken";

	



$tdataq_group_tipotoken_chart[".showAddInPopup"] = false;

$tdataq_group_tipotoken_chart[".showEditInPopup"] = false;

$tdataq_group_tipotoken_chart[".showViewInPopup"] = false;

$tdataq_group_tipotoken_chart[".listAjax"] = false;
//	temporary
//$tdataq_group_tipotoken_chart[".listAjax"] = false;

	$tdataq_group_tipotoken_chart[".audit"] = false;

	$tdataq_group_tipotoken_chart[".locking"] = false;


$pages = $tdataq_group_tipotoken_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_group_tipotoken_chart[".edit"] = true;
	$tdataq_group_tipotoken_chart[".afterEditAction"] = 1;
	$tdataq_group_tipotoken_chart[".closePopupAfterEdit"] = 1;
	$tdataq_group_tipotoken_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_group_tipotoken_chart[".add"] = true;
$tdataq_group_tipotoken_chart[".afterAddAction"] = 1;
$tdataq_group_tipotoken_chart[".closePopupAfterAdd"] = 1;
$tdataq_group_tipotoken_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_group_tipotoken_chart[".list"] = true;
}



$tdataq_group_tipotoken_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_group_tipotoken_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_group_tipotoken_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_group_tipotoken_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_group_tipotoken_chart[".printFriendly"] = true;
}



$tdataq_group_tipotoken_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_group_tipotoken_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_group_tipotoken_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_group_tipotoken_chart[".isUseAjaxSuggest"] = true;





$tdataq_group_tipotoken_chart[".ajaxCodeSnippetAdded"] = false;

$tdataq_group_tipotoken_chart[".buttonsAdded"] = false;

$tdataq_group_tipotoken_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_group_tipotoken_chart[".isUseTimeForSearch"] = false;


$tdataq_group_tipotoken_chart[".badgeColor"] = "1E90FF";


$tdataq_group_tipotoken_chart[".allSearchFields"] = array();
$tdataq_group_tipotoken_chart[".filterFields"] = array();
$tdataq_group_tipotoken_chart[".requiredSearchFields"] = array();

$tdataq_group_tipotoken_chart[".googleLikeFields"] = array();
$tdataq_group_tipotoken_chart[".googleLikeFields"][] = "ID_FK";
$tdataq_group_tipotoken_chart[".googleLikeFields"][] = "qty";
$tdataq_group_tipotoken_chart[".googleLikeFields"][] = "token_id";



$tdataq_group_tipotoken_chart[".tableType"] = "chart";

$tdataq_group_tipotoken_chart[".printerPageOrientation"] = 0;
$tdataq_group_tipotoken_chart[".nPrinterPageScale"] = 100;

$tdataq_group_tipotoken_chart[".nPrinterSplitRecords"] = 40;

$tdataq_group_tipotoken_chart[".geocodingEnabled"] = false;



// chart settings
$tdataq_group_tipotoken_chart[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdataq_group_tipotoken_chart[".strOrderBy"] = $tstrOrderBy;

$tdataq_group_tipotoken_chart[".orderindexes"] = array();


$tdataq_group_tipotoken_chart[".sqlHead"] = "SELECT ID_FK,  	qty,  	token_id";
$tdataq_group_tipotoken_chart[".sqlFrom"] = "FROM q_group_tipotoken";
$tdataq_group_tipotoken_chart[".sqlWhereExpr"] = "";
$tdataq_group_tipotoken_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_group_tipotoken_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_group_tipotoken_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataq_group_tipotoken_chart[".highlightSearchResults"] = true;

$tableKeysq_group_tipotoken_chart = array();
$tdataq_group_tipotoken_chart[".Keys"] = $tableKeysq_group_tipotoken_chart;


$tdataq_group_tipotoken_chart[".hideMobileList"] = array();




//	ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_FK";
	$fdata["GoodName"] = "ID_FK";
	$fdata["ownerTable"] = "q_group_tipotoken";
	$fdata["Label"] = GetFieldLabel("q_group_tipotoken_chart","ID_FK");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_group_tipotoken_chart["ID_FK"] = $fdata;
		$tdataq_group_tipotoken_chart[".searchableFields"][] = "ID_FK";
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "q_group_tipotoken";
	$fdata["Label"] = GetFieldLabel("q_group_tipotoken_chart","qty");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "qty";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_group_tipotoken_chart["qty"] = $fdata;
		$tdataq_group_tipotoken_chart[".searchableFields"][] = "qty";
//	token_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "token_id";
	$fdata["GoodName"] = "token_id";
	$fdata["ownerTable"] = "q_group_tipotoken";
	$fdata["Label"] = GetFieldLabel("q_group_tipotoken_chart","token_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "token_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "token_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tp_token";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tk_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tk_tipo";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_group_tipotoken_chart["token_id"] = $fdata;
		$tdataq_group_tipotoken_chart[".searchableFields"][] = "token_id";

$tdataq_group_tipotoken_chart[".chartLabelField"] = "token_id";
$tdataq_group_tipotoken_chart[".chartSeries"] = array();
$tdataq_group_tipotoken_chart[".chartSeries"][] = array(
	"field" => "qty",
	"total" => ""
);
	$tdataq_group_tipotoken_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_group_tipotoken_chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_group_tipotoken_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">qty</attr>';
	$tdataq_group_tipotoken_chart[".chartXml"] .= '</attr>';
	$tdataq_group_tipotoken_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">token_id</attr>
	</attr>';
	$tdataq_group_tipotoken_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_group_tipotoken_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Presentación por Clase de certificado solicitado").'</attr>
<attr value="foot">'.xmlencode("Certificados").'</attr>
<attr value="y_axis_label">'.xmlencode("ID_FK").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataq_group_tipotoken_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_group_tipotoken_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">ID_FK</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_group_tipotoken_chart","ID_FK")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_group_tipotoken_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">qty</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_group_tipotoken_chart","qty")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_group_tipotoken_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">token_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_group_tipotoken_chart","token_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_group_tipotoken_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_group_tipotoken_chart</attr>
<attr value="short_table_name">q_group_tipotoken_chart</attr>
</attr>

</chart>';

$tables_data["q_group_tipotoken_chart"]=&$tdataq_group_tipotoken_chart;
$field_labels["q_group_tipotoken_chart"] = &$fieldLabelsq_group_tipotoken_chart;
$fieldToolTips["q_group_tipotoken_chart"] = &$fieldToolTipsq_group_tipotoken_chart;
$placeHolders["q_group_tipotoken_chart"] = &$placeHoldersq_group_tipotoken_chart;
$page_titles["q_group_tipotoken_chart"] = &$pageTitlesq_group_tipotoken_chart;


changeTextControlsToDate( "q_group_tipotoken_chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_group_tipotoken_chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_group_tipotoken_chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_group_tipotoken_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_FK,  	qty,  	token_id";
$proto0["m_strFrom"] = "FROM q_group_tipotoken";
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
	"m_strName" => "ID_FK",
	"m_strTable" => "q_group_tipotoken",
	"m_srcTableName" => "q_group_tipotoken_chart"
));

$proto6["m_sql"] = "ID_FK";
$proto6["m_srcTableName"] = "q_group_tipotoken_chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "q_group_tipotoken",
	"m_srcTableName" => "q_group_tipotoken_chart"
));

$proto8["m_sql"] = "qty";
$proto8["m_srcTableName"] = "q_group_tipotoken_chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "token_id",
	"m_strTable" => "q_group_tipotoken",
	"m_srcTableName" => "q_group_tipotoken_chart"
));

$proto10["m_sql"] = "token_id";
$proto10["m_srcTableName"] = "q_group_tipotoken_chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "q_group_tipotoken";
$proto13["m_srcTableName"] = "q_group_tipotoken_chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID_FK";
$proto13["m_columns"][] = "qty";
$proto13["m_columns"][] = "token_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "q_group_tipotoken";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "q_group_tipotoken_chart";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_group_tipotoken_chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_group_tipotoken_chart = createSqlQuery_q_group_tipotoken_chart();


	
		;

			

$tdataq_group_tipotoken_chart[".sqlquery"] = $queryData_q_group_tipotoken_chart;



$tdataq_group_tipotoken_chart[".hasEvents"] = false;

?>