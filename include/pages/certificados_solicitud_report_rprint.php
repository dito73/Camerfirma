<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'fields' => array( 'gridFields' => array( 'sol_id',
'nombre',
'primer_apellido',
'segundo_apellido',
'tipo_documento',
'numero_documento',
'telefono',
'departamento',
'municipio',
'direccion',
'cargo',
'email_contacto',
'token_id',
'cert_id',
'vigencia',
'stage_tk',
'tl_fecha_f',
'dep' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'sol_id' => array( 'report_grid_field' ),
'nombre' => array( 'report_grid_field3' ),
'primer_apellido' => array( 'report_grid_field4' ),
'segundo_apellido' => array( 'report_grid_field5' ),
'tipo_documento' => array( 'report_grid_field6' ),
'numero_documento' => array( 'report_grid_field7' ),
'telefono' => array( 'report_grid_field8' ),
'departamento' => array( 'report_grid_field9' ),
'municipio' => array( 'report_grid_field10' ),
'direccion' => array( 'report_grid_field11' ),
'cargo' => array( 'report_grid_field12' ),
'email_contacto' => array( 'report_grid_field13' ),
'token_id' => array( 'report_grid_field15' ),
'cert_id' => array( 'report_grid_field16' ),
'vigencia' => array( 'report_grid_field17' ),
'stage_tk' => array( 'report_grid_field19' ),
'tl_fecha_f' => array( 'report_grid_field31' ),
'ID_FK' => array( 'report_group_field' ),
'stage' => array( 'report_group_field1' ),
'dep' => array( 'report_grid_field2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'print_pdf' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'report_group_field',
'report_group_field1',
'report_grid_field',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12',
'report_grid_field13',
'report_grid_field15',
'report_grid_field16',
'report_grid_field17',
'report_grid_field19',
'report_grid_field31',
'report_grid_field2' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pdf' => 'top',
'print_pages' => 'above-grid',
'report_group_field' => 'grid',
'report_group_field1' => 'grid',
'report_grid_field' => 'grid',
'report_grid_field3' => 'grid',
'report_grid_field4' => 'grid',
'report_grid_field5' => 'grid',
'report_grid_field6' => 'grid',
'report_grid_field7' => 'grid',
'report_grid_field8' => 'grid',
'report_grid_field9' => 'grid',
'report_grid_field10' => 'grid',
'report_grid_field11' => 'grid',
'report_grid_field12' => 'grid',
'report_grid_field13' => 'grid',
'report_grid_field15' => 'grid',
'report_grid_field16' => 'grid',
'report_grid_field17' => 'grid',
'report_grid_field19' => 'grid',
'report_grid_field31' => 'grid',
'report_grid_field2' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'report_grid_field' => array( 'report_grid_field',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12',
'report_grid_field13',
'report_grid_field15',
'report_grid_field16',
'report_grid_field17',
'report_grid_field19',
'report_grid_field31',
'report_grid_field2' ),
'report_group_field' => array( 'report_group_field',
'report_group_field1' ),
'print_pdf' => array( 'print_pdf' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'rprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'newreport' => array( 'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '7ACA7A',
'summary' => '90EE90' ),
'field' => 'ID_FK' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '93B7C3',
'summary' => 'ADD8E6' ),
'field' => 'stage' ) ),
'fields' => array( array( 'field' => 'sol_id',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'nombre',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'primer_apellido',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'segundo_apellido',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'tipo_documento',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'numero_documento',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'telefono',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'departamento',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'municipio',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'direccion',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'cargo',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'email_contacto',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'token_id',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'cert_id',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'vigencia',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'stage_tk',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'tl_fecha_f',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'dep',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => false,
'colors' => array( array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ) ),
'horizSummary' => false,
'layout' => 'align',
'vertSummary' => false ) ) );
			$pageArray = array( 'id' => 'rprint',
'type' => 'rprint',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'report_group_field',
'report_group_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field',
'report_grid_field3',
'report_grid_field4',
'report_grid_field5',
'report_grid_field6',
'report_grid_field7',
'report_grid_field8',
'report_grid_field9',
'report_grid_field10',
'report_grid_field11',
'report_grid_field12',
'report_grid_field13',
'report_grid_field15',
'report_grid_field16',
'report_grid_field17',
'report_grid_field19',
'report_grid_field31',
'report_grid_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '7ACA7A',
'summary' => '90EE90' ),
'field' => 'ID_FK' ),
array( 'interval' => 0,
'summary' => true,
'axis' => 0,
'color' => array( 'header' => '93B7C3',
'summary' => 'ADD8E6' ),
'field' => 'stage' ) ),
'fields' => array( array( 'field' => 'sol_id',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'nombre',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'primer_apellido',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'segundo_apellido',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'tipo_documento',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'numero_documento',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'telefono',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'departamento',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'municipio',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'direccion',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'cargo',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'email_contacto',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'token_id',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'cert_id',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'vigencia',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'stage_tk',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'tl_fecha_f',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ),
array( 'field' => 'dep',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => false ) ),
'showData' => true,
'pageSummary' => true,
'globalSummary' => true,
'crosstab' => false,
'colors' => array( array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ),
array( 'header' => '',
'summary' => '' ) ),
'horizSummary' => false,
'layout' => 'align',
'vertSummary' => false ) ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'report_grid_field' => array( 'field' => 'sol_id',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field3' => array( 'field' => 'nombre',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field4' => array( 'field' => 'primer_apellido',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field5' => array( 'field' => 'segundo_apellido',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field6' => array( 'field' => 'tipo_documento',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field7' => array( 'field' => 'numero_documento',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field8' => array( 'field' => 'telefono',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field9' => array( 'field' => 'departamento',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field10' => array( 'field' => 'municipio',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field11' => array( 'field' => 'direccion',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field12' => array( 'field' => 'cargo',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field13' => array( 'field' => 'email_contacto',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field15' => array( 'field' => 'token_id',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field16' => array( 'field' => 'cert_id',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field17' => array( 'field' => 'vigencia',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field19' => array( 'field' => 'stage_tk',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_grid_field31' => array( 'field' => 'tl_fecha_f',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ),
'report_group_field' => array( 'field' => 'ID_FK',
'type' => 'report_group_field',
'axis' => 0,
'summary' => true,
'interval' => 0 ),
'report_group_field1' => array( 'field' => 'stage',
'type' => 'report_group_field',
'axis' => 0,
'summary' => true,
'interval' => 0 ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'report_grid_field2' => array( 'field' => 'dep',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => false ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>