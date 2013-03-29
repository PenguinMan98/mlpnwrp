<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_AclGroupsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_AclGroups($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_AclGroups($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($group_id, $forum_id, $auth_option_id, $auth_role_id, $auth_setting)
    {
        $strSql = 'SELECT * FROM phpbb_acl_groups WHERE group_id=? AND forum_id=? AND auth_option_id=? AND auth_role_id=? AND auth_setting=?';
        $params = array($group_id, $forum_id, $auth_option_id, $auth_role_id, $auth_setting);
        return Model_Data_Phpbb_AclGroupsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_acl_groups (
            group_id,
            forum_id,
            auth_option_id,
            auth_role_id,
            auth_setting
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getGroupId(),
            $objRecord->getForumId(),
            $objRecord->getAuthOptionId(),
            $objRecord->getAuthRoleId(),
            $objRecord->getAuthSetting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_acl_groups SET 
            group_id=?,
            forum_id=?,
            auth_option_id=?,
            auth_role_id=?,
            auth_setting=?
        WHERE group_id=? AND forum_id=? AND auth_option_id=? AND auth_role_id=? AND auth_setting=?';
        $arrSetParams = array(
            $objRecord->getGroupId(),
            $objRecord->getForumId(),
            $objRecord->getAuthOptionId(),
            $objRecord->getAuthRoleId(),
            $objRecord->getAuthSetting()
        );
        $arrKeyParams = array($objRecord->getOrigGroupId(), $objRecord->getOrigForumId(), $objRecord->getOrigAuthOptionId(), $objRecord->getOrigAuthRoleId(), $objRecord->getOrigAuthSetting());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_acl_groups WHERE group_id=? AND forum_id=? AND auth_option_id=? AND auth_role_id=? AND auth_setting=?';
        $params = array($objRecord->getGroupId(), $objRecord->getForumId(), $objRecord->getAuthOptionId(), $objRecord->getAuthRoleId(), $objRecord->getAuthSetting());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
