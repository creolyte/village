<?php defined('BASEPATH') or die('Unauthorized Access');

class Log_Helper
{
	public  function createLog( $apiKey = '', $userId = '', $type = '', $path = '', $status = '', $msg = '' )
	{
		$apiModel = CREO::getModel( CREO_TABLE_API );
		$logModel = CREO::getModel( CREO_TABLE_LOG );

		$api = $apiModel->getApiByKey( $apiKey );
		if( empty($api) )
		{
			return 'Invalid api key';
		}
		
		$table 				= array();
		$table['api_key']	= $api['key'];
		$table['user_id']	= $userId;
		$table['type']		= $type;
		$table['path']		= empty($path)?null:$path;
		$table['datetime']	= date('Y-m-d H:i:s');
		$table['unix']		= time();
		$table['status']	= empty($status)?null:$status;
		$table['msg']		= empty($msg)?null:$msg;
		$bool 				= $logModel->add( $table, true );		
		return $bool;
	}
}
