<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_AclRolesDataProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_AclRolesData($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_AclRolesData($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($role_id, $auth_option_id)
    {
        $strSql = 'SELECT * FROM phpbb_acl_roles_data WHERE role_id=? AND auth_option_id=?';
        $params = array($role_id, $auth_option_id);
        return Model_Data_Phpbb_AclRolesDataProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_acl_roles_data (
            role_id,
            auth_option_id,
            auth_setting
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getRoleId(),
            $objRecord->getAuthOptionId(),
            $objRecord->getAuthSetting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_acl_roles_data SET 
            role_id=?,
            auth_option_id=?,
            auth_setting=?
        WHERE role_id=? AND auth_option_id=?';
        $arrSetParams = array(
            $objRecord->getRoleId(),
            $objRecord->getAuthOptionId(),
            $objRecord->getAuthSetting()
        );
        $arrKeyParams = array($objRecord->getOrigRoleId(), $objRecord->getOrigAuthOptionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_acl_roles_data WHERE role_id=? AND auth_option_id=?';
        $params = array($objRecord->getRoleId(), $objRecord->getAuthOptionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
