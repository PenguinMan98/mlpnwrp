<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_BotsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Bots($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Bots($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($bot_id)
    {
        $strSql = 'SELECT * FROM `phpbb_bots` WHERE bot_id=?';
        $params = array($bot_id);
        return Model_Data_Phpbb_BotsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_bots` (
            bot_id,
            bot_active,
            bot_name,
            user_id,
            bot_agent,
            bot_ip
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBotActive(),
            $objRecord->getBotName(),
            $objRecord->getUserId(),
            $objRecord->getBotAgent(),
            $objRecord->getBotIp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBotId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_bots` (
            bot_id,
            bot_active,
            bot_name,
            user_id,
            bot_agent,
            bot_ip
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBotActive(),
            $objRecord->getBotName(),
            $objRecord->getUserId(),
            $objRecord->getBotAgent(),
            $objRecord->getBotIp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBotId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_bots` SET 
            bot_id=?,
            bot_active=?,
            bot_name=?,
            user_id=?,
            bot_agent=?,
            bot_ip=?
        WHERE bot_id=?';
        $arrSetParams = array(
            $objRecord->getBotId(),
            $objRecord->getBotActive(),
            $objRecord->getBotName(),
            $objRecord->getUserId(),
            $objRecord->getBotAgent(),
            $objRecord->getBotIp()
        );
        $arrKeyParams = array($objRecord->getOrigBotId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_bots` WHERE bot_id=?';
        $params = array($objRecord->getBotId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
