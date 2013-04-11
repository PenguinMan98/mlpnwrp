<?php
class Model_Data_CharacterProvider extends Model_Data_CharacterProviderBase
{
	public function getAll(){
        $strSql = 'SELECT DISTINCT username
FROM chat_log
ORDER BY username ASC';
        $arrParams = array();
        $arrResults = array();
        $arrErrors = array();
        dao::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
        
        if(!empty($arrErrors)){
        	throw new Exception("Error getting character names!" . implode('|', $arrErrors));
        }
        return $arrResults;
	}
	
	public function getOneByCharacterName( $charName ) {
		$strSql = 'SELECT * FROM `character` WHERE name=?';
		$params = array($charName);
		return Model_Data_CharacterProvider::getOneFromQuery($strSql, $params);
	}
	
	public function getDetailsByCharacterName( $charName ) {
		$strSql = '
SELECT c.*, ca.name as \'age\' , cr.name as \'race\'
FROM `character` c 
JOIN `character_age` ca
	ON c.character_age_id = ca.character_age_id
JOIN `character_race` cr
	ON c.character_race_id = cr.character_race_id
WHERE c.name=?';
		$arrParams = array($charName);
		$arrErrors = array();
		$arrResults = array();
		dao::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
		return $arrResults[0];
	}
	
	public function getAllByUserId( $userId ) {
		$strSql = '
SELECT * FROM `character` c
LEFT_JOIN `character_user` cu
	ON c.`character_id` = cu.`character_id`
WHERE cu.`user_id`=?';
		$params = array( $userId );
		return Model_Data_CharacterProvider::getArrayFromQuery($strSql, $params);
	}
	
}
