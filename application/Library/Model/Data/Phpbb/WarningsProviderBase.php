<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_WarningsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Warnings($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Warnings($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($warning_id)
    {
        $strSql = 'SELECT * FROM phpbb_warnings WHERE warning_id=?';
        $params = array($warning_id);
        return Model_Data_Phpbb_WarningsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_warnings (
            warning_id,
            user_id,
            post_id,
            log_id,
            warning_time
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserId(),
            $objRecord->getPostId(),
            $objRecord->getLogId(),
            $objRecord->getWarningTime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWarningId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_warnings SET 
            warning_id=?,
            user_id=?,
            post_id=?,
            log_id=?,
            warning_time=?
        WHERE warning_id=?';
        $arrSetParams = array(
            $objRecord->getWarningId(),
            $objRecord->getUserId(),
            $objRecord->getPostId(),
            $objRecord->getLogId(),
            $objRecord->getWarningTime()
        );
        $arrKeyParams = array($objRecord->getOrigWarningId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_warnings WHERE warning_id=?';
        $params = array($objRecord->getWarningId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
