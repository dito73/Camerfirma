<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'created' => array( 'totalsType' => '' ),
'body' => array( 'totalsType' => '' ),
'to_email' => array( 'totalsType' => '' ),
'subject' => array( 'totalsType' => '' ),
'message_id' => array( 'totalsType' => '' ),
'maildate' => array( 'totalsType' => '' ),
'from_email' => array( 'totalsType' => '' ),
'to_name' => array( 'totalsType' => '' ),
'from_name' => array( 'totalsType' => '' ),
'attachment' => array( 'totalsType' => '' ),
'cc' => array( 'totalsType' => '' ),
'bcc' => array( 'totalsType' => '' ),
'server_id' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id',
'created',
'body',
'to_email',
'subject',
'message_id',
'maildate',
'from_email',
'to_name',
'from_name',
'attachment',
'cc',
'bcc',
'server_id' ),
'exportFields' => array( 'id',
'created',
'body',
'to_email',
'subject',
'message_id',
'maildate',
'from_email',
'to_name',
'from_name',
'attachment',
'cc',
'bcc',
'server_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'export_field' ),
'created' => array( 'export_field1' ),
'body' => array( 'export_field2' ),
'to_email' => array( 'export_field3' ),
'subject' => array( 'export_field4' ),
'message_id' => array( 'export_field5' ),
'maildate' => array( 'export_field6' ),
'from_email' => array( 'export_field7' ),
'to_name' => array( 'export_field8' ),
'from_name' => array( 'export_field9' ),
'attachment' => array( 'export_field10' ),
'cc' => array( 'export_field11' ),
'bcc' => array( 'export_field12' ),
'server_id' => array( 'export_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'created',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'body',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'to_email',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'subject',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'message_id',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'maildate',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'from_email',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'to_name',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'from_name',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'attachment',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'cc',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'bcc',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'server_id',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>