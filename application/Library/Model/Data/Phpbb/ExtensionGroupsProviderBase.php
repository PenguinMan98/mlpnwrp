<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ExtensionGroupsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ExtensionGroups($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ExtensionGroups($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($group_id)
    {
        $strSql = 'SELECT * FROM phpbb_extension_groups WHERE group_id=?';
        $params = array($group_id);
        return Model_Data_Phpbb_ExtensionGroupsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_extension_groups (
            group_id,
            group_name,
            cat_id,
            allow_group,
            download_mode,
            upload_icon,
            max_filesize,
            allowed_forums,
            allow_in_pm
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getGroupName(),
            $objRecord->getCatId(),
            $objRecord->getAllowGroup(),
            $objRecord->getDownloadMode(),
            $objRecord->getUploadIcon(),
            $objRecord->getMaxFilesize(),
            $objRecord->getAllowedForums(),
            $objRecord->getAllowInPm()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setGroupId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_extension_groups SET 
            group_id=?,
            group_name=?,
            cat_id=?,
            allow_group=?,
            download_mode=?,
            upload_icon=?,
            max_filesize=?,
            allowed_forums=?,
            allow_in_pm=?
        WHERE group_id=?';
        $arrSetParams = array(
            $objRecord->getGroupId(),
            $objRecord->getGroupName(),
            $objRecord->getCatId(),
            $objRecord->getAllowGroup(),
            $objRecord->getDownloadMode(),
            $objRecord->getUploadIcon(),
            $objRecord->getMaxFilesize(),
            $objRecord->getAllowedForums(),
            $objRecord->getAllowInPm()
        );
        $arrKeyParams = array($objRecord->getOrigGroupId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_extension_groups WHERE group_id=?';
        $params = array($objRecord->getGroupId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
