<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_WordsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Words($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Words($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($word_id)
    {
        $strSql = 'SELECT * FROM phpbb_words WHERE word_id=?';
        $params = array($word_id);
        return Model_Data_Phpbb_WordsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_words (
            word_id,
            word,
            replacement
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getWord(),
            $objRecord->getReplacement()
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
        $strSql = 'UPDATE phpbb_words SET 
            word_id=?,
            word=?,
            replacement=?
        WHERE word_id=?';
        $arrSetParams = array(
            $objRecord->getWordId(),
            $objRecord->getWord(),
            $objRecord->getReplacement()
        );
        $arrKeyParams = array($objRecord->getOrigWordId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_words WHERE word_id=?';
        $params = array($objRecord->getWordId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
