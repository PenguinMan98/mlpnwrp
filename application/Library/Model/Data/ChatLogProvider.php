<?php
class Model_Data_ChatLogProvider extends Model_Data_ChatLogProviderBase
{
	// search by date ** USE YYYY-MM-DD (Start + null end = single day search)
	// Search by text
	// search by character
	// search by player
	public function search( $startDate, $endDate = null, $text = null, Model_Structure_ChatRoom $room = null, $character = null, Model_Structure_Phpbb_Users $player = null){
		if(is_null($text) && is_null($character) && is_null($player)){
			return array();
		}
		$params = array();
		if(is_null($endDate)){
			$whereArr[] = 'timestamp LIKE ?';
			$params[] = $startDate . '%';
		}else{
			$whereArr[] = 'timestamp > ? AND timestamp <= ?';
			$params[] = $startDate;
			$params[] = $endDate;
		}
		if(!is_null($text)){
			$whereArr[] = 'text LIKE ?';
			$params[] = '%' . $text . '%';
		}
		if(!is_null($room)){
			$whereArr[] = 'chat_room_id = ?';
			$params[] = $room->getChatRoomId();
		}
		/*if(!is_null($character)){
			$whereArr[] = 'user_id = ?';
			$params[] = $character->getCharacterId();
		}*/
		if(!is_null($character) && $character != ""){
			$whereArr[] = 'handle like ?';
			$params[] = '%' . $character . '%';
		}
		
		if(!is_null($player)){
			$whereArr[] = 'user_id = ?';
			$params[] = $player->getUserId();
		}
		$strSql = 'SELECT * FROM `chat_log` 
WHERE recipient_user_id IS NULL AND recipient_username IS NULL AND ' . implode(' AND ', $whereArr);
		
		/*echo $strSql."<br>";
		echo "<pre>";
		print_r($params);
		echo "</pre>";*/
		return parent::getArrayFromQuery($strSql, $params);
	}
	
	function insertBlogPost(Model_Structure_ChatLog $chatLog){
		// handle/rand/text should be unique enough for a key
		$strSql = 'SELECT * FROM `chat_log`
WHERE `handle`= ? AND `chat_rand` = ? and `text` = ?';
		$params = array($chatLog->getHandle(), $chatLog->getChatRand(), $chatLog->getText());
		$result = parent::getOneFromQuery($strSql, $params);
		if(is_object($result)){
			return true; // it's already here.
		}else{
			$arrErrors = array();
			parent::insertOne($chatLog, $arrErrors);
			if(!empty($arrErrors)){
				throw new Exception("Error inserting new chat log! " . implode('|',$arrErrors));
			}else{
				return true; // it inserted correctly
			}
		}
		return false;
	}
}
