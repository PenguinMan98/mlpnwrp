<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_CaptchaAnswersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_CaptchaAnswers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_CaptchaAnswers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($question_id, $answer_text)
    {
        $strSql = 'SELECT * FROM `phpbb_captcha_answers` WHERE question_id=? AND answer_text=?';
        $params = array($question_id, $answer_text);
        return Model_Data_Phpbb_CaptchaAnswersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_captcha_answers` (
            question_id,
            answer_text
        ) VALUES  (?, ?)';
        $params = array($objRecord->getQuestionId(),
            $objRecord->getAnswerText()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_captcha_answers` (
            question_id,
            answer_text
        ) VALUES  (?, ?)';
        $params = array($objRecord->getQuestionId(),
            $objRecord->getAnswerText()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_captcha_answers` SET 
            question_id=?,
            answer_text=?
        WHERE question_id=? AND answer_text=?';
        $arrSetParams = array(
            $objRecord->getQuestionId(),
            $objRecord->getAnswerText()
        );
        $arrKeyParams = array($objRecord->getOrigQuestionId(), $objRecord->getOrigAnswerText());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_captcha_answers` WHERE question_id=? AND answer_text=?';
        $params = array($objRecord->getQuestionId(), $objRecord->getAnswerText());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
