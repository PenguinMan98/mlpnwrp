<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_StylesImagesetDataProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_StylesImagesetData($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_StylesImagesetData($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($image_id)
    {
        $strSql = 'SELECT * FROM phpbb_styles_imageset_data WHERE image_id=?';
        $params = array($image_id);
        return Model_Data_Phpbb_StylesImagesetDataProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_styles_imageset_data (
            image_id,
            image_name,
            image_filename,
            image_lang,
            image_height,
            image_width,
            imageset_id
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getImageName(),
            $objRecord->getImageFilename(),
            $objRecord->getImageLang(),
            $objRecord->getImageHeight(),
            $objRecord->getImageWidth(),
            $objRecord->getImagesetId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setImageId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_styles_imageset_data SET 
            image_id=?,
            image_name=?,
            image_filename=?,
            image_lang=?,
            image_height=?,
            image_width=?,
            imageset_id=?
        WHERE image_id=?';
        $arrSetParams = array(
            $objRecord->getImageId(),
            $objRecord->getImageName(),
            $objRecord->getImageFilename(),
            $objRecord->getImageLang(),
            $objRecord->getImageHeight(),
            $objRecord->getImageWidth(),
            $objRecord->getImagesetId()
        );
        $arrKeyParams = array($objRecord->getOrigImageId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_styles_imageset_data WHERE image_id=?';
        $params = array($objRecord->getImageId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
