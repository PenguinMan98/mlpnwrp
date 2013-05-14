<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_UserGroupProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_UserGroup($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_UserGroup($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($group_id, $user_id, $group_leader, $user_pending)
    {
        $strSql = 'SELECT * FROM `phpbb_user_group` WHERE group_id=? AND user_id=? AND group_leader=? AND user_pending=?';
        $params = array($group_id, $user_id, $group_leader, $user_pending);
        return Model_Data_Phpbb_UserGroupProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_user_group` (
            group_id,
            user_id,
            group_leader,
            user_pending
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getGroupId(),
            $objRecord->getUserId(),
            $objRecord->getGroupLeader(),
            $objRecord->getUserPending()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_user_group` (
            group_id,
            user_id,
            group_leader,
            user_pending
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getGroupId(),
            $objRecord->getUserId(),
            $objRecord->getGroupLeader(),
            $objRecord->getUserPending()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_user_group` SET 
            group_id=?,
            user_id=?,
            group_leader=?,
            user_pending=?
        WHERE group_id=? AND user_id=? AND group_leader=? AND user_pending=?';
        $arrSetParams = array(
            $objRecord->getGroupId(),
            $objRecord->getUserId(),
            $objRecord->getGroupLeader(),
            $objRecord->getUserPending()
        );
        $arrKeyParams = array($objRecord->getOrigGroupId(), $objRecord->getOrigUserId(), $objRecord->getOrigGroupLeader(), $objRecord->getOrigUserPending());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_user_group` WHERE group_id=? AND user_id=? AND group_leader=? AND user_pending=?';
        $params = array($objRecord->getGroupId(), $objRecord->getUserId(), $objRecord->getGroupLeader(), $objRecord->getUserPending());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
