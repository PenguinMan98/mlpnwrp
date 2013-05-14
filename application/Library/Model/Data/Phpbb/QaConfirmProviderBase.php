<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_QaConfirmProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_QaConfirm($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_QaConfirm($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($confirm_id)
    {
        $strSql = 'SELECT * FROM `phpbb_qa_confirm` WHERE confirm_id=?';
        $params = array($confirm_id);
        return Model_Data_Phpbb_QaConfirmProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_qa_confirm` (
            session_id,
            confirm_id,
            lang_iso,
            question_id,
            attempts,
            confirm_type
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getSessionId(),
            $objRecord->getConfirmId(),
            $objRecord->getLangIso(),
            $objRecord->getQuestionId(),
            $objRecord->getAttempts(),
            $objRecord->getConfirmType()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_qa_confirm` (
            session_id,
            confirm_id,
            lang_iso,
            question_id,
            attempts,
            confirm_type
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getSessionId(),
            $objRecord->getConfirmId(),
            $objRecord->getLangIso(),
            $objRecord->getQuestionId(),
            $objRecord->getAttempts(),
            $objRecord->getConfirmType()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_qa_confirm` SET 
            session_id=?,
            confirm_id=?,
            lang_iso=?,
            question_id=?,
            attempts=?,
            confirm_type=?
        WHERE confirm_id=?';
        $arrSetParams = array(
            $objRecord->getSessionId(),
            $objRecord->getConfirmId(),
            $objRecord->getLangIso(),
            $objRecord->getQuestionId(),
            $objRecord->getAttempts(),
            $objRecord->getConfirmType()
        );
        $arrKeyParams = array($objRecord->getOrigConfirmId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_qa_confirm` WHERE confirm_id=?';
        $params = array($objRecord->getConfirmId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
