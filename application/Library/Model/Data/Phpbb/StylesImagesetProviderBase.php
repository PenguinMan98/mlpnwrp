<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_StylesImagesetProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_StylesImageset($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_StylesImageset($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($imageset_id)
    {
        $strSql = 'SELECT * FROM phpbb_styles_imageset WHERE imageset_id=?';
        $params = array($imageset_id);
        return Model_Data_Phpbb_StylesImagesetProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_styles_imageset (
            imageset_id,
            imageset_name,
            imageset_copyright,
            imageset_path
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getImagesetName(),
            $objRecord->getImagesetCopyright(),
            $objRecord->getImagesetPath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setImagesetId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_styles_imageset SET 
            imageset_id=?,
            imageset_name=?,
            imageset_copyright=?,
            imageset_path=?
        WHERE imageset_id=?';
        $arrSetParams = array(
            $objRecord->getImagesetId(),
            $objRecord->getImagesetName(),
            $objRecord->getImagesetCopyright(),
            $objRecord->getImagesetPath()
        );
        $arrKeyParams = array($objRecord->getOrigImagesetId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_styles_imageset WHERE imageset_id=?';
        $params = array($objRecord->getImagesetId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
