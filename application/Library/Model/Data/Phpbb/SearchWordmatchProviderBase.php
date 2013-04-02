<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_SearchWordmatchProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_SearchWordmatch($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_SearchWordmatch($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($post_id, $word_id, $title_match)
    {
        $strSql = 'SELECT * FROM phpbb_search_wordmatch WHERE post_id=? AND word_id=? AND title_match=?';
        $params = array($post_id, $word_id, $title_match);
        return Model_Data_Phpbb_SearchWordmatchProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_search_wordmatch (
            post_id,
            word_id,
            title_match
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getPostId(),
            $objRecord->getWordId(),
            $objRecord->getTitleMatch()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_search_wordmatch SET 
            post_id=?,
            word_id=?,
            title_match=?
        WHERE post_id=? AND word_id=? AND title_match=?';
        $arrSetParams = array(
            $objRecord->getPostId(),
            $objRecord->getWordId(),
            $objRecord->getTitleMatch()
        );
        $arrKeyParams = array($objRecord->getOrigPostId(), $objRecord->getOrigWordId(), $objRecord->getOrigTitleMatch());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_search_wordmatch WHERE post_id=? AND word_id=? AND title_match=?';
        $params = array($objRecord->getPostId(), $objRecord->getWordId(), $objRecord->getTitleMatch());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
