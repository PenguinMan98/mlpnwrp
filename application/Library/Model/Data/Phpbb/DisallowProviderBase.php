<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_DisallowProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Disallow($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Disallow($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($disallow_id)
    {
        $strSql = 'SELECT * FROM phpbb_disallow WHERE disallow_id=?';
        $params = array($disallow_id);
        return Model_Data_Phpbb_DisallowProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_disallow (
            disallow_id,
            disallow_username
        ) VALUES  (?, ?)';
        $params = array(
            0,
            $objRecord->getDisallowUsername()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setDisallowId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_disallow SET 
            disallow_id=?,
            disallow_username=?
        WHERE disallow_id=?';
        $arrSetParams = array(
            $objRecord->getDisallowId(),
            $objRecord->getDisallowUsername()
        );
        $arrKeyParams = array($objRecord->getOrigDisallowId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_disallow WHERE disallow_id=?';
        $params = array($objRecord->getDisallowId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
