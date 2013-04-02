<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ForumsWatchProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ForumsWatch($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ForumsWatch($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($forum_id, $user_id, $notify_status)
    {
        $strSql = 'SELECT * FROM phpbb_forums_watch WHERE forum_id=? AND user_id=? AND notify_status=?';
        $params = array($forum_id, $user_id, $notify_status);
        return Model_Data_Phpbb_ForumsWatchProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_forums_watch (
            forum_id,
            user_id,
            notify_status
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getForumId(),
            $objRecord->getUserId(),
            $objRecord->getNotifyStatus()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_forums_watch SET 
            forum_id=?,
            user_id=?,
            notify_status=?
        WHERE forum_id=? AND user_id=? AND notify_status=?';
        $arrSetParams = array(
            $objRecord->getForumId(),
            $objRecord->getUserId(),
            $objRecord->getNotifyStatus()
        );
        $arrKeyParams = array($objRecord->getOrigForumId(), $objRecord->getOrigUserId(), $objRecord->getOrigNotifyStatus());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_forums_watch WHERE forum_id=? AND user_id=? AND notify_status=?';
        $params = array($objRecord->getForumId(), $objRecord->getUserId(), $objRecord->getNotifyStatus());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
