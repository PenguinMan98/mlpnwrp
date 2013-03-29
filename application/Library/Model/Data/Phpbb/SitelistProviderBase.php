<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_SitelistProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Sitelist($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Sitelist($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($site_id)
    {
        $strSql = 'SELECT * FROM phpbb_sitelist WHERE site_id=?';
        $params = array($site_id);
        return Model_Data_Phpbb_SitelistProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_sitelist (
            site_id,
            site_ip,
            site_hostname,
            ip_exclude
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getSiteIp(),
            $objRecord->getSiteHostname(),
            $objRecord->getIpExclude()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSiteId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_sitelist SET 
            site_id=?,
            site_ip=?,
            site_hostname=?,
            ip_exclude=?
        WHERE site_id=?';
        $arrSetParams = array(
            $objRecord->getSiteId(),
            $objRecord->getSiteIp(),
            $objRecord->getSiteHostname(),
            $objRecord->getIpExclude()
        );
        $arrKeyParams = array($objRecord->getOrigSiteId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_sitelist WHERE site_id=?';
        $params = array($objRecord->getSiteId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
