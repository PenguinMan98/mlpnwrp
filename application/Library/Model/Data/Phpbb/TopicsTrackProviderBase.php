<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_TopicsTrackProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_TopicsTrack($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_TopicsTrack($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user_id, $topic_id)
    {
        $strSql = 'SELECT * FROM phpbb_topics_track WHERE user_id=? AND topic_id=?';
        $params = array($user_id, $topic_id);
        return Model_Data_Phpbb_TopicsTrackProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_topics_track (
            user_id,
            topic_id,
            forum_id,
            mark_time
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUserId(),
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getMarkTime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_topics_track SET 
            user_id=?,
            topic_id=?,
            forum_id=?,
            mark_time=?
        WHERE user_id=? AND topic_id=?';
        $arrSetParams = array(
            $objRecord->getUserId(),
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getMarkTime()
        );
        $arrKeyParams = array($objRecord->getOrigUserId(), $objRecord->getOrigTopicId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_topics_track WHERE user_id=? AND topic_id=?';
        $params = array($objRecord->getUserId(), $objRecord->getTopicId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
