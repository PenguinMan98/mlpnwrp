<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ExtensionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Extensions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Extensions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($extension_id)
    {
        $strSql = 'SELECT * FROM `phpbb_extensions` WHERE extension_id=?';
        $params = array($extension_id);
        return Model_Data_Phpbb_ExtensionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_extensions` (
            extension_id,
            group_id,
            extension
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroupId(),
            $objRecord->getExtension()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setExtensionId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_extensions` (
            extension_id,
            group_id,
            extension
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroupId(),
            $objRecord->getExtension()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setExtensionId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_extensions` SET 
            extension_id=?,
            group_id=?,
            extension=?
        WHERE extension_id=?';
        $arrSetParams = array(
            $objRecord->getExtensionId(),
            $objRecord->getGroupId(),
            $objRecord->getExtension()
        );
        $arrKeyParams = array($objRecord->getOrigExtensionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_extensions` WHERE extension_id=?';
        $params = array($objRecord->getExtensionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
