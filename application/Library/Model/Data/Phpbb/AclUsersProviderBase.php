<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_AclUsersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_AclUsers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_AclUsers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user_id, $forum_id, $auth_option_id, $auth_role_id, $auth_setting)
    {
        $strSql = 'SELECT * FROM `phpbb_acl_users` WHERE user_id=? AND forum_id=? AND auth_option_id=? AND auth_role_id=? AND auth_setting=?';
        $params = array($user_id, $forum_id, $auth_option_id, $auth_role_id, $auth_setting);
        return Model_Data_Phpbb_AclUsersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_acl_users` (
            user_id,
            forum_id,
            auth_option_id,
            auth_role_id,
            auth_setting
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUserId(),
            $objRecord->getForumId(),
            $objRecord->getAuthOptionId(),
            $objRecord->getAuthRoleId(),
            $objRecord->getAuthSetting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_acl_users` (
            user_id,
            forum_id,
            auth_option_id,
            auth_role_id,
            auth_setting
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getUserId(),
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
        $strSql = 'UPDATE `phpbb_acl_users` SET 
            user_id=?,
            forum_id=?,
            auth_option_id=?,
            auth_role_id=?,
            auth_setting=?
        WHERE user_id=? AND forum_id=? AND auth_option_id=? AND auth_role_id=? AND auth_setting=?';
        $arrSetParams = array(
            $objRecord->getUserId(),
            $objRecord->getForumId(),
            $objRecord->getAuthOptionId(),
            $objRecord->getAuthRoleId(),
            $objRecord->getAuthSetting()
        );
        $arrKeyParams = array($objRecord->getOrigUserId(), $objRecord->getOrigForumId(), $objRecord->getOrigAuthOptionId(), $objRecord->getOrigAuthRoleId(), $objRecord->getOrigAuthSetting());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_acl_users` WHERE user_id=? AND forum_id=? AND auth_option_id=? AND auth_role_id=? AND auth_setting=?';
        $params = array($objRecord->getUserId(), $objRecord->getForumId(), $objRecord->getAuthOptionId(), $objRecord->getAuthRoleId(), $objRecord->getAuthSetting());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
