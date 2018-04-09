<?php defined('BASEPATH') or die('Unauthorized Access');

class Mcr_Log_Model extends MY_Model {

	protected static $tablename = CREO_TABLE_LOG;

	function __construct()
	{
		parent::__construct();
	}

	public function createLog( $userId = '', $path = '', $status = '', $msg = '' )
	{
		$table 				= array();
		$table['user_id']	= $userId;
		$table['path']		= empty($path)?null:$path;
		$table['datetime']	= date('Y-m-d H:i:s');
		$table['unix']		= time();
		$table['status']	= empty($status)?null:$status;
		$table['msg']		= empty($msg)?null:$msg;
		$bool 				= $this->add( $table, true );		
		return $bool;
	}
}
