<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ProfileFieldsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_ProfileFields($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_ProfileFields($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($field_id)
    {
        $strSql = 'SELECT * FROM phpbb_profile_fields WHERE field_id=?';
        $params = array($field_id);
        return Model_Data_Phpbb_ProfileFieldsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_profile_fields (
            field_id,
            field_name,
            field_type,
            field_ident,
            field_length,
            field_minlen,
            field_maxlen,
            field_novalue,
            field_default_value,
            field_validation,
            field_required,
            field_show_novalue,
            field_show_on_reg,
            field_show_on_vt,
            field_show_profile,
            field_hide,
            field_no_view,
            field_active,
            field_order
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFieldName(),
            $objRecord->getFieldType(),
            $objRecord->getFieldIdent(),
            $objRecord->getFieldLength(),
            $objRecord->getFieldMinlen(),
            $objRecord->getFieldMaxlen(),
            $objRecord->getFieldNovalue(),
            $objRecord->getFieldDefaultValue(),
            $objRecord->getFieldValidation(),
            $objRecord->getFieldRequired(),
            $objRecord->getFieldShowNovalue(),
            $objRecord->getFieldShowOnReg(),
            $objRecord->getFieldShowOnVt(),
            $objRecord->getFieldShowProfile(),
            $objRecord->getFieldHide(),
            $objRecord->getFieldNoView(),
            $objRecord->getFieldActive(),
            $objRecord->getFieldOrder()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFieldId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_profile_fields SET 
            field_id=?,
            field_name=?,
            field_type=?,
            field_ident=?,
            field_length=?,
            field_minlen=?,
            field_maxlen=?,
            field_novalue=?,
            field_default_value=?,
            field_validation=?,
            field_required=?,
            field_show_novalue=?,
            field_show_on_reg=?,
            field_show_on_vt=?,
            field_show_profile=?,
            field_hide=?,
            field_no_view=?,
            field_active=?,
            field_order=?
        WHERE field_id=?';
        $arrSetParams = array(
            $objRecord->getFieldId(),
            $objRecord->getFieldName(),
            $objRecord->getFieldType(),
            $objRecord->getFieldIdent(),
            $objRecord->getFieldLength(),
            $objRecord->getFieldMinlen(),
            $objRecord->getFieldMaxlen(),
            $objRecord->getFieldNovalue(),
            $objRecord->getFieldDefaultValue(),
            $objRecord->getFieldValidation(),
            $objRecord->getFieldRequired(),
            $objRecord->getFieldShowNovalue(),
            $objRecord->getFieldShowOnReg(),
            $objRecord->getFieldShowOnVt(),
            $objRecord->getFieldShowProfile(),
            $objRecord->getFieldHide(),
            $objRecord->getFieldNoView(),
            $objRecord->getFieldActive(),
            $objRecord->getFieldOrder()
        );
        $arrKeyParams = array($objRecord->getOrigFieldId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_profile_fields WHERE field_id=?';
        $params = array($objRecord->getFieldId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
