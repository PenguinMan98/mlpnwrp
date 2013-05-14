<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ConfirmProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Confirm($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Confirm($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($confirm_id, $session_id)
    {
        $strSql = 'SELECT * FROM `phpbb_confirm` WHERE confirm_id=? AND session_id=?';
        $params = array($confirm_id, $session_id);
        return Model_Data_Phpbb_ConfirmProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_confirm` (
            confirm_id,
            session_id,
            confirm_type,
            code,
            seed,
            attempts
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getConfirmId(),
            $objRecord->getSessionId(),
            $objRecord->getConfirmType(),
            $objRecord->getCode(),
            $objRecord->getSeed(),
            $objRecord->getAttempts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_confirm` (
            confirm_id,
            session_id,
            confirm_type,
            code,
            seed,
            attempts
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getConfirmId(),
            $objRecord->getSessionId(),
            $objRecord->getConfirmType(),
            $objRecord->getCode(),
            $objRecord->getSeed(),
            $objRecord->getAttempts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_confirm` SET 
            confirm_id=?,
            session_id=?,
            confirm_type=?,
            code=?,
            seed=?,
            attempts=?
        WHERE confirm_id=? AND session_id=?';
        $arrSetParams = array(
            $objRecord->getConfirmId(),
            $objRecord->getSessionId(),
            $objRecord->getConfirmType(),
            $objRecord->getCode(),
            $objRecord->getSeed(),
            $objRecord->getAttempts()
        );
        $arrKeyParams = array($objRecord->getOrigConfirmId(), $objRecord->getOrigSessionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_confirm` WHERE confirm_id=? AND session_id=?';
        $params = array($objRecord->getConfirmId(), $objRecord->getSessionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
