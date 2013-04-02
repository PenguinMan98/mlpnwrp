<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_StylesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Styles($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Styles($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($style_id)
    {
        $strSql = 'SELECT * FROM phpbb_styles WHERE style_id=?';
        $params = array($style_id);
        return Model_Data_Phpbb_StylesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_styles (
            style_id,
            style_name,
            style_copyright,
            style_active,
            template_id,
            theme_id,
            imageset_id
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getStyleName(),
            $objRecord->getStyleCopyright(),
            $objRecord->getStyleActive(),
            $objRecord->getTemplateId(),
            $objRecord->getThemeId(),
            $objRecord->getImagesetId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setStyleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_styles SET 
            style_id=?,
            style_name=?,
            style_copyright=?,
            style_active=?,
            template_id=?,
            theme_id=?,
            imageset_id=?
        WHERE style_id=?';
        $arrSetParams = array(
            $objRecord->getStyleId(),
            $objRecord->getStyleName(),
            $objRecord->getStyleCopyright(),
            $objRecord->getStyleActive(),
            $objRecord->getTemplateId(),
            $objRecord->getThemeId(),
            $objRecord->getImagesetId()
        );
        $arrKeyParams = array($objRecord->getOrigStyleId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_styles WHERE style_id=?';
        $params = array($objRecord->getStyleId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
