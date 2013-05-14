<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ReportsReasonsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ReportsReasons($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ReportsReasons($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($reason_id)
    {
        $strSql = 'SELECT * FROM `phpbb_reports_reasons` WHERE reason_id=?';
        $params = array($reason_id);
        return Model_Data_Phpbb_ReportsReasonsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_reports_reasons` (
            reason_id,
            reason_title,
            reason_description,
            reason_order
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReasonTitle(),
            $objRecord->getReasonDescription(),
            $objRecord->getReasonOrder()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReasonId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_reports_reasons` (
            reason_id,
            reason_title,
            reason_description,
            reason_order
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReasonTitle(),
            $objRecord->getReasonDescription(),
            $objRecord->getReasonOrder()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReasonId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_reports_reasons` SET 
            reason_id=?,
            reason_title=?,
            reason_description=?,
            reason_order=?
        WHERE reason_id=?';
        $arrSetParams = array(
            $objRecord->getReasonId(),
            $objRecord->getReasonTitle(),
            $objRecord->getReasonDescription(),
            $objRecord->getReasonOrder()
        );
        $arrKeyParams = array($objRecord->getOrigReasonId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_reports_reasons` WHERE reason_id=?';
        $params = array($objRecord->getReasonId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
