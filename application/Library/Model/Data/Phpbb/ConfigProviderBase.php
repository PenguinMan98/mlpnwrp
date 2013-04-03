<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ConfigProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Config($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Config($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($config_name)
    {
        $strSql = 'SELECT * FROM phpbb_config WHERE config_name=?';
        $params = array($config_name);
        return Model_Data_Phpbb_ConfigProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_config (
            config_name,
            config_value,
            is_dynamic
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getConfigName(),
            $objRecord->getConfigValue(),
            $objRecord->getIsDynamic()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_config SET 
            config_name=?,
            config_value=?,
            is_dynamic=?
        WHERE config_name=?';
        $arrSetParams = array(
            $objRecord->getConfigName(),
            $objRecord->getConfigValue(),
            $objRecord->getIsDynamic()
        );
        $arrKeyParams = array($objRecord->getOrigConfigName());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_config WHERE config_name=?';
        $params = array($objRecord->getConfigName());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
