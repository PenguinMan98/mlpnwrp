<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_AclOptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_AclOptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_AclOptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($auth_option_id)
    {
        $strSql = 'SELECT * FROM phpbb_acl_options WHERE auth_option_id=?';
        $params = array($auth_option_id);
        return Model_Data_Phpbb_AclOptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_acl_options (
            auth_option_id,
            auth_option,
            is_global,
            is_local,
            founder_only
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAuthOption(),
            $objRecord->getIsGlobal(),
            $objRecord->getIsLocal(),
            $objRecord->getFounderOnly()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAuthOptionId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_acl_options SET 
            auth_option_id=?,
            auth_option=?,
            is_global=?,
            is_local=?,
            founder_only=?
        WHERE auth_option_id=?';
        $arrSetParams = array(
            $objRecord->getAuthOptionId(),
            $objRecord->getAuthOption(),
            $objRecord->getIsGlobal(),
            $objRecord->getIsLocal(),
            $objRecord->getFounderOnly()
        );
        $arrKeyParams = array($objRecord->getOrigAuthOptionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_acl_options WHERE auth_option_id=?';
        $params = array($objRecord->getAuthOptionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
