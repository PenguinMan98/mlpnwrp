<?php
class Model_Data_Phpbb_UsersProvider extends Model_Data_Phpbb_UsersProviderBase
{
	public function getOneByName($userName){
		$strSql = 'SELECT * FROM phpbb_users WHERE username_clean=?';
		$params = array(strtolower($userName));
		return Model_Data_Phpbb_UsersProvider::getOneFromQuery($strSql, $params);
	}
}
