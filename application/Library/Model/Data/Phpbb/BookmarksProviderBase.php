<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_BookmarksProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Bookmarks($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Bookmarks($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($topic_id, $user_id)
    {
        $strSql = 'SELECT * FROM phpbb_bookmarks WHERE topic_id=? AND user_id=?';
        $params = array($topic_id, $user_id);
        return Model_Data_Phpbb_BookmarksProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_bookmarks (
            topic_id,
            user_id
        ) VALUES  (?, ?)';
        $params = array($objRecord->getTopicId(),
            $objRecord->getUserId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_bookmarks SET 
            topic_id=?,
            user_id=?
        WHERE topic_id=? AND user_id=?';
        $arrSetParams = array(
            $objRecord->getTopicId(),
            $objRecord->getUserId()
        );
        $arrKeyParams = array($objRecord->getOrigTopicId(), $objRecord->getOrigUserId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_bookmarks WHERE topic_id=? AND user_id=?';
        $params = array($objRecord->getTopicId(), $objRecord->getUserId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
