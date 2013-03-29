<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_TopicsWatchProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_TopicsWatch($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_TopicsWatch($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($topic_id, $user_id, $notify_status)
    {
        $strSql = 'SELECT * FROM phpbb_topics_watch WHERE topic_id=? AND user_id=? AND notify_status=?';
        $params = array($topic_id, $user_id, $notify_status);
        return Model_Data_Phpbb_TopicsWatchProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_topics_watch (
            topic_id,
            user_id,
            notify_status
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getTopicId(),
            $objRecord->getUserId(),
            $objRecord->getNotifyStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_topics_watch SET 
            topic_id=?,
            user_id=?,
            notify_status=?
        WHERE topic_id=? AND user_id=? AND notify_status=?';
        $arrSetParams = array(
            $objRecord->getTopicId(),
            $objRecord->getUserId(),
            $objRecord->getNotifyStatus()
        );
        $arrKeyParams = array($objRecord->getOrigTopicId(), $objRecord->getOrigUserId(), $objRecord->getOrigNotifyStatus());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_topics_watch WHERE topic_id=? AND user_id=? AND notify_status=?';
        $params = array($objRecord->getTopicId(), $objRecord->getUserId(), $objRecord->getNotifyStatus());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
