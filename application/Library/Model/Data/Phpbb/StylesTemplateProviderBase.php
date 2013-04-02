<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_StylesTemplateProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_StylesTemplate($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_StylesTemplate($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($template_id)
    {
        $strSql = 'SELECT * FROM phpbb_styles_template WHERE template_id=?';
        $params = array($template_id);
        return Model_Data_Phpbb_StylesTemplateProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_styles_template (
            template_id,
            template_name,
            template_copyright,
            template_path,
            bbcode_bitfield,
            template_storedb,
            template_inherits_id,
            template_inherit_path
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTemplateName(),
            $objRecord->getTemplateCopyright(),
            $objRecord->getTemplatePath(),
            $objRecord->getBbcodeBitfield(),
            $objRecord->getTemplateStoredb(),
            $objRecord->getTemplateInheritsId(),
            $objRecord->getTemplateInheritPath()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTemplateId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_styles_template SET 
            template_id=?,
            template_name=?,
            template_copyright=?,
            template_path=?,
            bbcode_bitfield=?,
            template_storedb=?,
            template_inherits_id=?,
            template_inherit_path=?
        WHERE template_id=?';
        $arrSetParams = array(
            $objRecord->getTemplateId(),
            $objRecord->getTemplateName(),
            $objRecord->getTemplateCopyright(),
            $objRecord->getTemplatePath(),
            $objRecord->getBbcodeBitfield(),
            $objRecord->getTemplateStoredb(),
            $objRecord->getTemplateInheritsId(),
            $objRecord->getTemplateInheritPath()
        );
        $arrKeyParams = array($objRecord->getOrigTemplateId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_styles_template WHERE template_id=?';
        $params = array($objRecord->getTemplateId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
