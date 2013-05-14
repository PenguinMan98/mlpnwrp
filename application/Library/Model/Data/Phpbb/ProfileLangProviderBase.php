<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ProfileLangProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ProfileLang($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ProfileLang($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($field_id, $lang_id)
    {
        $strSql = 'SELECT * FROM `phpbb_profile_lang` WHERE field_id=? AND lang_id=?';
        $params = array($field_id, $lang_id);
        return Model_Data_Phpbb_ProfileLangProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_profile_lang` (
            field_id,
            lang_id,
            lang_name,
            lang_explain,
            lang_default_value
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getFieldId(),
            $objRecord->getLangId(),
            $objRecord->getLangName(),
            $objRecord->getLangExplain(),
            $objRecord->getLangDefaultValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_profile_lang` (
            field_id,
            lang_id,
            lang_name,
            lang_explain,
            lang_default_value
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getFieldId(),
            $objRecord->getLangId(),
            $objRecord->getLangName(),
            $objRecord->getLangExplain(),
            $objRecord->getLangDefaultValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_profile_lang` SET 
            field_id=?,
            lang_id=?,
            lang_name=?,
            lang_explain=?,
            lang_default_value=?
        WHERE field_id=? AND lang_id=?';
        $arrSetParams = array(
            $objRecord->getFieldId(),
            $objRecord->getLangId(),
            $objRecord->getLangName(),
            $objRecord->getLangExplain(),
            $objRecord->getLangDefaultValue()
        );
        $arrKeyParams = array($objRecord->getOrigFieldId(), $objRecord->getOrigLangId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_profile_lang` WHERE field_id=? AND lang_id=?';
        $params = array($objRecord->getFieldId(), $objRecord->getLangId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
