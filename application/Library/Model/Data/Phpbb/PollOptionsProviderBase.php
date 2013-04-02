<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_PollOptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_PollOptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_PollOptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($poll_option_id, $topic_id, $poll_option_text, $poll_option_total)
    {
        $strSql = 'SELECT * FROM phpbb_poll_options WHERE poll_option_id=? AND topic_id=? AND poll_option_text=? AND poll_option_total=?';
        $params = array($poll_option_id, $topic_id, $poll_option_text, $poll_option_total);
        return Model_Data_Phpbb_PollOptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_poll_options (
            poll_option_id,
            topic_id,
            poll_option_text,
            poll_option_total
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getPollOptionId(),
            $objRecord->getTopicId(),
            $objRecord->getPollOptionText(),
            $objRecord->getPollOptionTotal()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_poll_options SET 
            poll_option_id=?,
            topic_id=?,
            poll_option_text=?,
            poll_option_total=?
        WHERE poll_option_id=? AND topic_id=? AND poll_option_text=? AND poll_option_total=?';
        $arrSetParams = array(
            $objRecord->getPollOptionId(),
            $objRecord->getTopicId(),
            $objRecord->getPollOptionText(),
            $objRecord->getPollOptionTotal()
        );
        $arrKeyParams = array($objRecord->getOrigPollOptionId(), $objRecord->getOrigTopicId(), $objRecord->getOrigPollOptionText(), $objRecord->getOrigPollOptionTotal());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_poll_options WHERE poll_option_id=? AND topic_id=? AND poll_option_text=? AND poll_option_total=?';
        $params = array($objRecord->getPollOptionId(), $objRecord->getTopicId(), $objRecord->getPollOptionText(), $objRecord->getPollOptionTotal());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
