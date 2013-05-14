<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_PrivmsgsFolderProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_PrivmsgsFolder($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_PrivmsgsFolder($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($folder_id)
    {
        $strSql = 'SELECT * FROM `phpbb_privmsgs_folder` WHERE folder_id=?';
        $params = array($folder_id);
        return Model_Data_Phpbb_PrivmsgsFolderProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_privmsgs_folder` (
            folder_id,
            user_id,
            folder_name,
            pm_count
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserId(),
            $objRecord->getFolderName(),
            $objRecord->getPmCount()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFolderId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_privmsgs_folder` (
            folder_id,
            user_id,
            folder_name,
            pm_count
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserId(),
            $objRecord->getFolderName(),
            $objRecord->getPmCount()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFolderId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_privmsgs_folder` SET 
            folder_id=?,
            user_id=?,
            folder_name=?,
            pm_count=?
        WHERE folder_id=?';
        $arrSetParams = array(
            $objRecord->getFolderId(),
            $objRecord->getUserId(),
            $objRecord->getFolderName(),
            $objRecord->getPmCount()
        );
        $arrKeyParams = array($objRecord->getOrigFolderId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_privmsgs_folder` WHERE folder_id=?';
        $params = array($objRecord->getFolderId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
