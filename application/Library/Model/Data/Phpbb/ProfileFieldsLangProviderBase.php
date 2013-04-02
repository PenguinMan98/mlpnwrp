<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ProfileFieldsLangProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ProfileFieldsLang($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ProfileFieldsLang($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($field_id, $lang_id, $option_id)
    {
        $strSql = 'SELECT * FROM phpbb_profile_fields_lang WHERE field_id=? AND lang_id=? AND option_id=?';
        $params = array($field_id, $lang_id, $option_id);
        return Model_Data_Phpbb_ProfileFieldsLangProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_profile_fields_lang (
            field_id,
            lang_id,
            option_id,
            field_type,
            lang_value
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getFieldId(),
            $objRecord->getLangId(),
            $objRecord->getOptionId(),
            $objRecord->getFieldType(),
            $objRecord->getLangValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_profile_fields_lang SET 
            field_id=?,
            lang_id=?,
            option_id=?,
            field_type=?,
            lang_value=?
        WHERE field_id=? AND lang_id=? AND option_id=?';
        $arrSetParams = array(
            $objRecord->getFieldId(),
            $objRecord->getLangId(),
            $objRecord->getOptionId(),
            $objRecord->getFieldType(),
            $objRecord->getLangValue()
        );
        $arrKeyParams = array($objRecord->getOrigFieldId(), $objRecord->getOrigLangId(), $objRecord->getOrigOptionId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_profile_fields_lang WHERE field_id=? AND lang_id=? AND option_id=?';
        $params = array($objRecord->getFieldId(), $objRecord->getLangId(), $objRecord->getOptionId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
