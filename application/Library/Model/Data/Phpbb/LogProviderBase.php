<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_LogProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Log($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Log($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($log_id)
    {
        $strSql = 'SELECT * FROM phpbb_log WHERE log_id=?';
        $params = array($log_id);
        return Model_Data_Phpbb_LogProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_log (
            log_id,
            log_type,
            user_id,
            forum_id,
            topic_id,
            reportee_id,
            log_ip,
            log_time,
            log_operation,
            log_data
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getLogType(),
            $objRecord->getUserId(),
            $objRecord->getForumId(),
            $objRecord->getTopicId(),
            $objRecord->getReporteeId(),
            $objRecord->getLogIp(),
            $objRecord->getLogTime(),
            $objRecord->getLogOperation(),
            $objRecord->getLogData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setLogId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_log SET 
            log_id=?,
            log_type=?,
            user_id=?,
            forum_id=?,
            topic_id=?,
            reportee_id=?,
            log_ip=?,
            log_time=?,
            log_operation=?,
            log_data=?
        WHERE log_id=?';
        $arrSetParams = array(
            $objRecord->getLogId(),
            $objRecord->getLogType(),
            $objRecord->getUserId(),
            $objRecord->getForumId(),
            $objRecord->getTopicId(),
            $objRecord->getReporteeId(),
            $objRecord->getLogIp(),
            $objRecord->getLogTime(),
            $objRecord->getLogOperation(),
            $objRecord->getLogData()
        );
        $arrKeyParams = array($objRecord->getOrigLogId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_log WHERE log_id=?';
        $params = array($objRecord->getLogId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
