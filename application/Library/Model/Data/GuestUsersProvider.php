<?php
class Model_Data_GuestUsersProvider extends Model_Data_GuestUsersProviderBase
{
	public function getAll(){
		$strSql = '
SELECT * FROM `guest_users`';
		$params = array( $userId );
		return Model_Data_GuestUsersProvider::getArrayFromQuery($strSql, $params);
	}
}
