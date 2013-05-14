<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_SessionsKeysProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_SessionsKeys($arrResults[0]);
            }
        }
        return null;
    }

    protected function getArrayFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            $arrRecordList = array();
            foreach ($arrResults as $arrRecord) {
                $arrRecordList[] = new Model_Structure_Phpbb_SessionsKeys($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($key_id, $user_id)
    {
        $strSql = 'SELECT * FROM `phpbb_sessions_keys` WHERE key_id=? AND user_id=?';
        $params = array($key_id, $user_id);
        return Model_Data_Phpbb_SessionsKeysProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_sessions_keys` (
            key_id,
            user_id,
            last_ip,
            last_login
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getKeyId(),
            $objRecord->getUserId(),
            $objRecord->getLastIp(),
            $objRecord->getLastLogin()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_sessions_keys` (
            key_id,
            user_id,
            last_ip,
            last_login
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getKeyId(),
            $objRecord->getUserId(),
            $objRecord->getLastIp(),
            $objRecord->getLastLogin()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_sessions_keys` SET 
            key_id=?,
            user_id=?,
            last_ip=?,
            last_login=?
        WHERE key_id=? AND user_id=?';
        $arrSetParams = array(
            $objRecord->getKeyId(),
            $objRecord->getUserId(),
            $objRecord->getLastIp(),
            $objRecord->getLastLogin()
        );
        $arrKeyParams = array($objRecord->getOrigKeyId(), $objRecord->getOrigUserId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_sessions_keys` WHERE key_id=? AND user_id=?';
        $params = array($objRecord->getKeyId(), $objRecord->getUserId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
