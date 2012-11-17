<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT.'Dao.php';
class Data_PlayerProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (Dao::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Structure_Player($arrResults[0]);
            }
        }
        return null;
    }

    protected function getArrayFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (Dao::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            $arrRecordList = array();
            foreach ($arrResults as $arrRecord) {
                $arrRecordList[] = new Structure_Player($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($player_id)
    {
        $strSql = 'SELECT * FROM player WHERE player_id=?';
        $params = array($player_id);
        return Data_PlayerProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO player (
            player_id,
            account_name,
            email,
            first_name,
            last_name,
            dob,
            password
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getAccountName(),
            $objRecord->getEmail(),
            $objRecord->getFirstName(),
            $objRecord->getLastName(),
            $objRecord->getDob(),
            $objRecord->getPassword()
        );
        $arrErrors = array();
        $blnResult = Dao::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPlayerId(Dao::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE player SET 
            player_id=?,
            account_name=?,
            email=?,
            first_name=?,
            last_name=?,
            dob=?,
            password=?
        WHERE player_id=?';
        $arrSetParams = array(
            $objRecord->getPlayerId(),
            $objRecord->getAccountName(),
            $objRecord->getEmail(),
            $objRecord->getFirstName(),
            $objRecord->getLastName(),
            $objRecord->getDob(),
            $objRecord->getPassword()
        );
        $arrKeyParams = array($objRecord->getOrigPlayerId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = Dao::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM player WHERE player_id=?';
        $params = array($objRecord->getPlayerId());
        $arrErrors = array();
        $blnResult = Dao::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
