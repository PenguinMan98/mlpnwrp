<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_LangProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Lang($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Lang($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($lang_id)
    {
        $strSql = 'SELECT * FROM phpbb_lang WHERE lang_id=?';
        $params = array($lang_id);
        return Model_Data_Phpbb_LangProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_lang (
            lang_id,
            lang_iso,
            lang_dir,
            lang_english_name,
            lang_local_name,
            lang_author
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getLangIso(),
            $objRecord->getLangDir(),
            $objRecord->getLangEnglishName(),
            $objRecord->getLangLocalName(),
            $objRecord->getLangAuthor()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setLangId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_lang SET 
            lang_id=?,
            lang_iso=?,
            lang_dir=?,
            lang_english_name=?,
            lang_local_name=?,
            lang_author=?
        WHERE lang_id=?';
        $arrSetParams = array(
            $objRecord->getLangId(),
            $objRecord->getLangIso(),
            $objRecord->getLangDir(),
            $objRecord->getLangEnglishName(),
            $objRecord->getLangLocalName(),
            $objRecord->getLangAuthor()
        );
        $arrKeyParams = array($objRecord->getOrigLangId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_lang WHERE lang_id=?';
        $params = array($objRecord->getLangId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
