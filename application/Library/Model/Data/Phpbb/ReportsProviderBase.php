<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ReportsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Reports($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Reports($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($report_id)
    {
        $strSql = 'SELECT * FROM `phpbb_reports` WHERE report_id=?';
        $params = array($report_id);
        return Model_Data_Phpbb_ReportsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_reports` (
            report_id,
            reason_id,
            post_id,
            pm_id,
            user_id,
            user_notify,
            report_closed,
            report_time,
            report_text
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReasonId(),
            $objRecord->getPostId(),
            $objRecord->getPmId(),
            $objRecord->getUserId(),
            $objRecord->getUserNotify(),
            $objRecord->getReportClosed(),
            $objRecord->getReportTime(),
            $objRecord->getReportText()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReportId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_reports` (
            report_id,
            reason_id,
            post_id,
            pm_id,
            user_id,
            user_notify,
            report_closed,
            report_time,
            report_text
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getReasonId(),
            $objRecord->getPostId(),
            $objRecord->getPmId(),
            $objRecord->getUserId(),
            $objRecord->getUserNotify(),
            $objRecord->getReportClosed(),
            $objRecord->getReportTime(),
            $objRecord->getReportText()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setReportId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_reports` SET 
            report_id=?,
            reason_id=?,
            post_id=?,
            pm_id=?,
            user_id=?,
            user_notify=?,
            report_closed=?,
            report_time=?,
            report_text=?
        WHERE report_id=?';
        $arrSetParams = array(
            $objRecord->getReportId(),
            $objRecord->getReasonId(),
            $objRecord->getPostId(),
            $objRecord->getPmId(),
            $objRecord->getUserId(),
            $objRecord->getUserNotify(),
            $objRecord->getReportClosed(),
            $objRecord->getReportTime(),
            $objRecord->getReportText()
        );
        $arrKeyParams = array($objRecord->getOrigReportId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_reports` WHERE report_id=?';
        $params = array($objRecord->getReportId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
