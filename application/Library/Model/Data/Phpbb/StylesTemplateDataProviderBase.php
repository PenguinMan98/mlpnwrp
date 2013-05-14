<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_StylesTemplateDataProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_StylesTemplateData($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_StylesTemplateData($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($template_id, $template_filename, $template_included, $template_mtime, $template_data)
    {
        $strSql = 'SELECT * FROM `phpbb_styles_template_data` WHERE template_id=? AND template_filename=? AND template_included=? AND template_mtime=? AND template_data=?';
        $params = array($template_id, $template_filename, $template_included, $template_mtime, $template_data);
        return Model_Data_Phpbb_StylesTemplateDataProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_styles_template_data` (
            template_id,
            template_filename,
            template_included,
            template_mtime,
            template_data
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getTemplateId(),
            $objRecord->getTemplateFilename(),
            $objRecord->getTemplateIncluded(),
            $objRecord->getTemplateMtime(),
            $objRecord->getTemplateData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_styles_template_data` (
            template_id,
            template_filename,
            template_included,
            template_mtime,
            template_data
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getTemplateId(),
            $objRecord->getTemplateFilename(),
            $objRecord->getTemplateIncluded(),
            $objRecord->getTemplateMtime(),
            $objRecord->getTemplateData()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_styles_template_data` SET 
            template_id=?,
            template_filename=?,
            template_included=?,
            template_mtime=?,
            template_data=?
        WHERE template_id=? AND template_filename=? AND template_included=? AND template_mtime=? AND template_data=?';
        $arrSetParams = array(
            $objRecord->getTemplateId(),
            $objRecord->getTemplateFilename(),
            $objRecord->getTemplateIncluded(),
            $objRecord->getTemplateMtime(),
            $objRecord->getTemplateData()
        );
        $arrKeyParams = array($objRecord->getOrigTemplateId(), $objRecord->getOrigTemplateFilename(), $objRecord->getOrigTemplateIncluded(), $objRecord->getOrigTemplateMtime(), $objRecord->getOrigTemplateData());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_styles_template_data` WHERE template_id=? AND template_filename=? AND template_included=? AND template_mtime=? AND template_data=?';
        $params = array($objRecord->getTemplateId(), $objRecord->getTemplateFilename(), $objRecord->getTemplateIncluded(), $objRecord->getTemplateMtime(), $objRecord->getTemplateData());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
