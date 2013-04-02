<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_BanlistProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Banlist($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Banlist($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($ban_id)
    {
        $strSql = 'SELECT * FROM phpbb_banlist WHERE ban_id=?';
        $params = array($ban_id);
        return Model_Data_Phpbb_BanlistProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_banlist (
            ban_id,
            ban_userid,
            ban_ip,
            ban_email,
            ban_start,
            ban_end,
            ban_exclude,
            ban_reason,
            ban_give_reason
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getBanUserid(),
            $objRecord->getBanIp(),
            $objRecord->getBanEmail(),
            $objRecord->getBanStart(),
            $objRecord->getBanEnd(),
            $objRecord->getBanExclude(),
            $objRecord->getBanReason(),
            $objRecord->getBanGiveReason()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setBanId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_banlist SET 
            ban_id=?,
            ban_userid=?,
            ban_ip=?,
            ban_email=?,
            ban_start=?,
            ban_end=?,
            ban_exclude=?,
            ban_reason=?,
            ban_give_reason=?
        WHERE ban_id=?';
        $arrSetParams = array(
            $objRecord->getBanId(),
            $objRecord->getBanUserid(),
            $objRecord->getBanIp(),
            $objRecord->getBanEmail(),
            $objRecord->getBanStart(),
            $objRecord->getBanEnd(),
            $objRecord->getBanExclude(),
            $objRecord->getBanReason(),
            $objRecord->getBanGiveReason()
        );
        $arrKeyParams = array($objRecord->getOrigBanId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_banlist WHERE ban_id=?';
        $params = array($objRecord->getBanId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
