<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'sol_id',
'ID_FK',
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
'email_contacto_c',
'token_id',
'cert_id',
'vigencia',
'stage',
'sol_ticket',
'doc_acta',
'doc_carta',
'doc_certificado',
'doc_poder',
'doc_rut',
'doc_cedula',
'doc_escritura',
'tl_fecha_f',
'dep' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'sol_id' => array( 'import_field' ),
'sol_ticket' => array( 'import_field1' ),
'ID_FK' => array( 'import_field2' ),
'nombre' => array( 'import_field3' ),
'primer_apellido' => array( 'import_field4' ),
'segundo_apellido' => array( 'import_field5' ),
'tipo_documento' => array( 'import_field6' ),
'numero_documento' => array( 'import_field7' ),
'telefono' => array( 'import_field8' ),
'departamento' => array( 'import_field9' ),
'municipio' => array( 'import_field10' ),
'direccion' => array( 'import_field11' ),
'cargo' => array( 'import_field12' ),
'email_contacto' => array( 'import_field13' ),
'email_contacto_c' => array( 'import_field14' ),
'token_id' => array( 'import_field15' ),
'cert_id' => array( 'import_field16' ),
'vigencia' => array( 'import_field17' ),
'stage' => array( 'import_field18' ),
'doc_acta' => array( 'import_field19' ),
'doc_carta' => array( 'import_field20' ),
'doc_certificado' => array( 'import_field21' ),
'doc_poder' => array( 'import_field22' ),
'doc_rut' => array( 'import_field23' ),
'doc_cedula' => array( 'import_field24' ),
'doc_escritura' => array( 'import_field25' ),
'tl_fecha_f' => array( 'import_field27' ),
'dep' => array( 'import_field26' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field1',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field27',
'import_field26' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field1' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid',
'import_field23' => 'grid',
'import_field24' => 'grid',
'import_field25' => 'grid',
'import_field27' => 'grid',
'import_field26' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field27',
'import_field26' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field1',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field27',
'import_field26' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'sol_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'sol_ticket',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'ID_FK',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'nombre',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'primer_apellido',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'segundo_apellido',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'tipo_documento',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'numero_documento',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'telefono',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'departamento',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'municipio',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'direccion',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'cargo',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'email_contacto',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'email_contacto_c',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'token_id',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'cert_id',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'vigencia',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'stage',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'doc_acta',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'doc_carta',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'doc_certificado',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'doc_poder',
'type' => 'import_field' ),
'import_field23' => array( 'field' => 'doc_rut',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'doc_cedula',
'type' => 'import_field' ),
'import_field25' => array( 'field' => 'doc_escritura',
'type' => 'import_field' ),
'import_field27' => array( 'field' => 'tl_fecha_f',
'type' => 'import_field' ),
'import_field26' => array( 'field' => 'dep',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>