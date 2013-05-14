<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_IconsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Icons($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Icons($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($icons_id)
    {
        $strSql = 'SELECT * FROM `phpbb_icons` WHERE icons_id=?';
        $params = array($icons_id);
        return Model_Data_Phpbb_IconsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_icons` (
            icons_id,
            icons_url,
            icons_width,
            icons_height,
            icons_order,
            display_on_posting
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getIconsUrl(),
            $objRecord->getIconsWidth(),
            $objRecord->getIconsHeight(),
            $objRecord->getIconsOrder(),
            $objRecord->getDisplayOnPosting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setIconsId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_icons` (
            icons_id,
            icons_url,
            icons_width,
            icons_height,
            icons_order,
            display_on_posting
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getIconsUrl(),
            $objRecord->getIconsWidth(),
            $objRecord->getIconsHeight(),
            $objRecord->getIconsOrder(),
            $objRecord->getDisplayOnPosting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setIconsId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_icons` SET 
            icons_id=?,
            icons_url=?,
            icons_width=?,
            icons_height=?,
            icons_order=?,
            display_on_posting=?
        WHERE icons_id=?';
        $arrSetParams = array(
            $objRecord->getIconsId(),
            $objRecord->getIconsUrl(),
            $objRecord->getIconsWidth(),
            $objRecord->getIconsHeight(),
            $objRecord->getIconsOrder(),
            $objRecord->getDisplayOnPosting()
        );
        $arrKeyParams = array($objRecord->getOrigIconsId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_icons` WHERE icons_id=?';
        $params = array($objRecord->getIconsId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
