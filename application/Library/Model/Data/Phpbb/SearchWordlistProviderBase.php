<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_SearchWordlistProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_SearchWordlist($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_SearchWordlist($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($word_id)
    {
        $strSql = 'SELECT * FROM phpbb_search_wordlist WHERE word_id=?';
        $params = array($word_id);
        return Model_Data_Phpbb_SearchWordlistProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_search_wordlist (
            word_id,
            word_text,
            word_common,
            word_count
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getWordText(),
            $objRecord->getWordCommon(),
            $objRecord->getWordCount()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWordId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_search_wordlist SET 
            word_id=?,
            word_text=?,
            word_common=?,
            word_count=?
        WHERE word_id=?';
        $arrSetParams = array(
            $objRecord->getWordId(),
            $objRecord->getWordText(),
            $objRecord->getWordCommon(),
            $objRecord->getWordCount()
        );
        $arrKeyParams = array($objRecord->getOrigWordId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_search_wordlist WHERE word_id=?';
        $params = array($objRecord->getWordId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
