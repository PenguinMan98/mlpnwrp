<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_AclRolesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_AclRoles($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_AclRoles($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($role_id)
    {
        $strSql = 'SELECT * FROM `phpbb_acl_roles` WHERE role_id=?';
        $params = array($role_id);
        return Model_Data_Phpbb_AclRolesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_acl_roles` (
            role_id,
            role_name,
            role_description,
            role_type,
            role_order
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRoleName(),
            $objRecord->getRoleDescription(),
            $objRecord->getRoleType(),
            $objRecord->getRoleOrder()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRoleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_acl_roles` (
            role_id,
            role_name,
            role_description,
            role_type,
            role_order
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRoleName(),
            $objRecord->getRoleDescription(),
            $objRecord->getRoleType(),
            $objRecord->getRoleOrder()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRoleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_acl_roles` SET 
            role_id=?,
            role_name=?,
            role_description=?,
            role_type=?,
            role_order=?
        WHERE role_id=?';
        $arrSetParams = array(
            $objRecord->getRoleId(),
            $objRecord->getRoleName(),
            $objRecord->getRoleDescription(),
            $objRecord->getRoleType(),
            $objRecord->getRoleOrder()
        );
        $arrKeyParams = array($objRecord->getOrigRoleId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_acl_roles` WHERE role_id=?';
        $params = array($objRecord->getRoleId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
