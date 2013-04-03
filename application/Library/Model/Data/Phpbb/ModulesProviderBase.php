<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ModulesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Modules($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Modules($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($module_id)
    {
        $strSql = 'SELECT * FROM phpbb_modules WHERE module_id=?';
        $params = array($module_id);
        return Model_Data_Phpbb_ModulesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_modules (
            module_id,
            module_enabled,
            module_display,
            module_basename,
            module_class,
            parent_id,
            left_id,
            right_id,
            module_langname,
            module_mode,
            module_auth
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getModuleEnabled(),
            $objRecord->getModuleDisplay(),
            $objRecord->getModuleBasename(),
            $objRecord->getModuleClass(),
            $objRecord->getParentId(),
            $objRecord->getLeftId(),
            $objRecord->getRightId(),
            $objRecord->getModuleLangname(),
            $objRecord->getModuleMode(),
            $objRecord->getModuleAuth()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setModuleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_modules SET 
            module_id=?,
            module_enabled=?,
            module_display=?,
            module_basename=?,
            module_class=?,
            parent_id=?,
            left_id=?,
            right_id=?,
            module_langname=?,
            module_mode=?,
            module_auth=?
        WHERE module_id=?';
        $arrSetParams = array(
            $objRecord->getModuleId(),
            $objRecord->getModuleEnabled(),
            $objRecord->getModuleDisplay(),
            $objRecord->getModuleBasename(),
            $objRecord->getModuleClass(),
            $objRecord->getParentId(),
            $objRecord->getLeftId(),
            $objRecord->getRightId(),
            $objRecord->getModuleLangname(),
            $objRecord->getModuleMode(),
            $objRecord->getModuleAuth()
        );
        $arrKeyParams = array($objRecord->getOrigModuleId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_modules WHERE module_id=?';
        $params = array($objRecord->getModuleId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
