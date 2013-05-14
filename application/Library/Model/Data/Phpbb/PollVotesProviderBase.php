<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_PollVotesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_PollVotes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_PollVotes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($topic_id, $poll_option_id, $vote_user_id, $vote_user_ip)
    {
        $strSql = 'SELECT * FROM `phpbb_poll_votes` WHERE topic_id=? AND poll_option_id=? AND vote_user_id=? AND vote_user_ip=?';
        $params = array($topic_id, $poll_option_id, $vote_user_id, $vote_user_ip);
        return Model_Data_Phpbb_PollVotesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_poll_votes` (
            topic_id,
            poll_option_id,
            vote_user_id,
            vote_user_ip
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getTopicId(),
            $objRecord->getPollOptionId(),
            $objRecord->getVoteUserId(),
            $objRecord->getVoteUserIp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_poll_votes` (
            topic_id,
            poll_option_id,
            vote_user_id,
            vote_user_ip
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getTopicId(),
            $objRecord->getPollOptionId(),
            $objRecord->getVoteUserId(),
            $objRecord->getVoteUserIp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_poll_votes` SET 
            topic_id=?,
            poll_option_id=?,
            vote_user_id=?,
            vote_user_ip=?
        WHERE topic_id=? AND poll_option_id=? AND vote_user_id=? AND vote_user_ip=?';
        $arrSetParams = array(
            $objRecord->getTopicId(),
            $objRecord->getPollOptionId(),
            $objRecord->getVoteUserId(),
            $objRecord->getVoteUserIp()
        );
        $arrKeyParams = array($objRecord->getOrigTopicId(), $objRecord->getOrigPollOptionId(), $objRecord->getOrigVoteUserId(), $objRecord->getOrigVoteUserIp());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_poll_votes` WHERE topic_id=? AND poll_option_id=? AND vote_user_id=? AND vote_user_ip=?';
        $params = array($objRecord->getTopicId(), $objRecord->getPollOptionId(), $objRecord->getVoteUserId(), $objRecord->getVoteUserIp());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
