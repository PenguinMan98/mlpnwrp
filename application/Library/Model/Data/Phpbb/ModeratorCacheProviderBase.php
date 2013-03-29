<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ModeratorCacheProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ModeratorCache($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ModeratorCache($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($forum_id, $user_id, $username, $group_id, $group_name, $display_on_index)
    {
        $strSql = 'SELECT * FROM phpbb_moderator_cache WHERE forum_id=? AND user_id=? AND username=? AND group_id=? AND group_name=? AND display_on_index=?';
        $params = array($forum_id, $user_id, $username, $group_id, $group_name, $display_on_index);
        return Model_Data_Phpbb_ModeratorCacheProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_moderator_cache (
            forum_id,
            user_id,
            username,
            group_id,
            group_name,
            display_on_index
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getForumId(),
            $objRecord->getUserId(),
            $objRecord->getUsername(),
            $objRecord->getGroupId(),
            $objRecord->getGroupName(),
            $objRecord->getDisplayOnIndex()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_moderator_cache SET 
            forum_id=?,
            user_id=?,
            username=?,
            group_id=?,
            group_name=?,
            display_on_index=?
        WHERE forum_id=? AND user_id=? AND username=? AND group_id=? AND group_name=? AND display_on_index=?';
        $arrSetParams = array(
            $objRecord->getForumId(),
            $objRecord->getUserId(),
            $objRecord->getUsername(),
            $objRecord->getGroupId(),
            $objRecord->getGroupName(),
            $objRecord->getDisplayOnIndex()
        );
        $arrKeyParams = array($objRecord->getOrigForumId(), $objRecord->getOrigUserId(), $objRecord->getOrigUsername(), $objRecord->getOrigGroupId(), $objRecord->getOrigGroupName(), $objRecord->getOrigDisplayOnIndex());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_moderator_cache WHERE forum_id=? AND user_id=? AND username=? AND group_id=? AND group_name=? AND display_on_index=?';
        $params = array($objRecord->getForumId(), $objRecord->getUserId(), $objRecord->getUsername(), $objRecord->getGroupId(), $objRecord->getGroupName(), $objRecord->getDisplayOnIndex());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
