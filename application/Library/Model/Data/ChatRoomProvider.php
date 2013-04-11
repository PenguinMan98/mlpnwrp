<?php
class Model_Data_ChatRoomProvider extends Model_Data_ChatRoomProviderBase
{
	
	public function getChatList(){
		$strSql = 'SELECT * FROM `chat_room` cr WHERE cr.`is_active` = 1';
		$params = array();
		return Model_Data_ChatRoomProvider::getArrayFromQuery($strSql, $params);
	}
	
	public function getOneByName($roomName){
		$strSql = 'SELECT * FROM chat_room where room_name = ?';
		$params = array($roomName);
		return Model_Data_ChatRoomProvider::getOneFromQuery($strSql, $params);
	}
}
