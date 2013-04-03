<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_SearchResultsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_SearchResults($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_SearchResults($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($search_key)
    {
        $strSql = 'SELECT * FROM phpbb_search_results WHERE search_key=?';
        $params = array($search_key);
        return Model_Data_Phpbb_SearchResultsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_search_results (
            search_key,
            search_time,
            search_keywords,
            search_authors
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getSearchKey(),
            $objRecord->getSearchTime(),
            $objRecord->getSearchKeywords(),
            $objRecord->getSearchAuthors()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_search_results SET 
            search_key=?,
            search_time=?,
            search_keywords=?,
            search_authors=?
        WHERE search_key=?';
        $arrSetParams = array(
            $objRecord->getSearchKey(),
            $objRecord->getSearchTime(),
            $objRecord->getSearchKeywords(),
            $objRecord->getSearchAuthors()
        );
        $arrKeyParams = array($objRecord->getOrigSearchKey());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_search_results WHERE search_key=?';
        $params = array($objRecord->getSearchKey());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
