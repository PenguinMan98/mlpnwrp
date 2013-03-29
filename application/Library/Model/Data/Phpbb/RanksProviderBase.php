<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_RanksProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Ranks($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Ranks($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($rank_id)
    {
        $strSql = 'SELECT * FROM phpbb_ranks WHERE rank_id=?';
        $params = array($rank_id);
        return Model_Data_Phpbb_RanksProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_ranks (
            rank_id,
            rank_title,
            rank_min,
            rank_special,
            rank_image
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRankTitle(),
            $objRecord->getRankMin(),
            $objRecord->getRankSpecial(),
            $objRecord->getRankImage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRankId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_ranks SET 
            rank_id=?,
            rank_title=?,
            rank_min=?,
            rank_special=?,
            rank_image=?
        WHERE rank_id=?';
        $arrSetParams = array(
            $objRecord->getRankId(),
            $objRecord->getRankTitle(),
            $objRecord->getRankMin(),
            $objRecord->getRankSpecial(),
            $objRecord->getRankImage()
        );
        $arrKeyParams = array($objRecord->getOrigRankId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_ranks WHERE rank_id=?';
        $params = array($objRecord->getRankId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
