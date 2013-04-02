<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ZebraProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Zebra($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Zebra($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user_id, $zebra_id)
    {
        $strSql = 'SELECT * FROM phpbb_zebra WHERE user_id=? AND zebra_id=?';
        $params = array($user_id, $zebra_id);
        return Model_Data_Phpbb_ZebraProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_zebra (
            user_id,
            zebra_id,
            friend,
            foe
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getUserId(),
            $objRecord->getZebraId(),
            $objRecord->getFriend(),
            $objRecord->getFoe()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_zebra SET 
            user_id=?,
            zebra_id=?,
            friend=?,
            foe=?
        WHERE user_id=? AND zebra_id=?';
        $arrSetParams = array(
            $objRecord->getUserId(),
            $objRecord->getZebraId(),
            $objRecord->getFriend(),
            $objRecord->getFoe()
        );
        $arrKeyParams = array($objRecord->getOrigUserId(), $objRecord->getOrigZebraId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_zebra WHERE user_id=? AND zebra_id=?';
        $params = array($objRecord->getUserId(), $objRecord->getZebraId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
