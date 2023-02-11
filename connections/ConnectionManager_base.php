<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "sgiysp_at_127_0_0_1" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "sgiysp_at_127_0_0_1";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "sgiysp_at_127_0_0_1" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "sgiysp_at_127_0_0_1" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "sgiysp_at_127_0_0_1";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "sgiysp_at_127_0_0_1";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "sgiysp_at_127_0_0_1";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["mail_messages"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tickets"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tickets_proyectos"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tickets_tipo"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tickets_prioridad"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["camerfirma_104_users"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["admin_rights"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["admin_members"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["admin_users"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["camerfirma_104_users_gestion"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_tipo"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tp_certificados"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["token_tipo"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tp_token"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["q_divipola"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tp_certificados_anexos"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["camerfirma_104_users_q"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_tipo_q"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tp_vigencia"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tp_stage"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["token_tipo_q"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tp_tipodocident"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_tr_0"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_track"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_tr_1"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_tr_2"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_tr_3"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_tr_4"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_tr_5"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud_tr_6"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["tp_stage_tk"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["q_group_tipotoken_chart"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["certificados_solicitud Report"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["dependencia_tipo"] = "sgiysp_at_127_0_0_1";
		$connectionsIds["dependencia_tipo_user"] = "sgiysp_at_127_0_0_1";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>