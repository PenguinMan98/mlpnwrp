<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_CaptchaQuestionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_CaptchaQuestions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_CaptchaQuestions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($question_id)
    {
        $strSql = 'SELECT * FROM `phpbb_captcha_questions` WHERE question_id=?';
        $params = array($question_id);
        return Model_Data_Phpbb_CaptchaQuestionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_captcha_questions` (
            question_id,
            strict,
            lang_id,
            lang_iso,
            question_text
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getStrict(),
            $objRecord->getLangId(),
            $objRecord->getLangIso(),
            $objRecord->getQuestionText()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuestionId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_captcha_questions` (
            question_id,
            strict,
            lang_id,
            lang_iso,
            question_text
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getStrict(),
            $objRecord->getLangId(),
            $objRecord->getLangIso(),
            $objRecord->getQuestionText()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setQuestionId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_captcha_questions` SET 
            question_id=?,
            strict=?,
            lang_id=?,
            lang_iso=?,
            question_text=?
        WHERE question_id=?';
        $arrSetParams = array(
            $objRecord->getQuestionId(),
            $objRecord->getStrict(),
            $objRecord->getLangId(),
            $objRecord->getLangIso(),
            $objRecord->getQuestionText()
        );
        $arrKeyParams = array($objRecord->getOrigQuestionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_captcha_questions` WHERE question_id=?';
        $params = array($objRecord->getQuestionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
