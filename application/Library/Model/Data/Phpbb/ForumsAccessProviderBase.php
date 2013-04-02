<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ForumsAccessProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ForumsAccess($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ForumsAccess($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($forum_id, $user_id, $session_id)
    {
        $strSql = 'SELECT * FROM phpbb_forums_access WHERE forum_id=? AND user_id=? AND session_id=?';
        $params = array($forum_id, $user_id, $session_id);
        return Model_Data_Phpbb_ForumsAccessProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_forums_access (
            forum_id,
            user_id,
            session_id
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getForumId(),
            $objRecord->getUserId(),
            $objRecord->getSessionId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_forums_access SET 
            forum_id=?,
            user_id=?,
            session_id=?
        WHERE forum_id=? AND user_id=? AND session_id=?';
        $arrSetParams = array(
            $objRecord->getForumId(),
            $objRecord->getUserId(),
            $objRecord->getSessionId()
        );
        $arrKeyParams = array($objRecord->getOrigForumId(), $objRecord->getOrigUserId(), $objRecord->getOrigSessionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_forums_access WHERE forum_id=? AND user_id=? AND session_id=?';
        $params = array($objRecord->getForumId(), $objRecord->getUserId(), $objRecord->getSessionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
