<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_BbcodesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Bbcodes($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Bbcodes($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($bbcode_id)
    {
        $strSql = 'SELECT * FROM `phpbb_bbcodes` WHERE bbcode_id=?';
        $params = array($bbcode_id);
        return Model_Data_Phpbb_BbcodesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_bbcodes` (
            bbcode_id,
            bbcode_tag,
            bbcode_helpline,
            display_on_posting,
            bbcode_match,
            bbcode_tpl,
            first_pass_match,
            first_pass_replace,
            second_pass_match,
            second_pass_replace
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getBbcodeId(),
            $objRecord->getBbcodeTag(),
            $objRecord->getBbcodeHelpline(),
            $objRecord->getDisplayOnPosting(),
            $objRecord->getBbcodeMatch(),
            $objRecord->getBbcodeTpl(),
            $objRecord->getFirstPassMatch(),
            $objRecord->getFirstPassReplace(),
            $objRecord->getSecondPassMatch(),
            $objRecord->getSecondPassReplace()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_bbcodes` (
            bbcode_id,
            bbcode_tag,
            bbcode_helpline,
            display_on_posting,
            bbcode_match,
            bbcode_tpl,
            first_pass_match,
            first_pass_replace,
            second_pass_match,
            second_pass_replace
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getBbcodeId(),
            $objRecord->getBbcodeTag(),
            $objRecord->getBbcodeHelpline(),
            $objRecord->getDisplayOnPosting(),
            $objRecord->getBbcodeMatch(),
            $objRecord->getBbcodeTpl(),
            $objRecord->getFirstPassMatch(),
            $objRecord->getFirstPassReplace(),
            $objRecord->getSecondPassMatch(),
            $objRecord->getSecondPassReplace()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_bbcodes` SET 
            bbcode_id=?,
            bbcode_tag=?,
            bbcode_helpline=?,
            display_on_posting=?,
            bbcode_match=?,
            bbcode_tpl=?,
            first_pass_match=?,
            first_pass_replace=?,
            second_pass_match=?,
            second_pass_replace=?
        WHERE bbcode_id=?';
        $arrSetParams = array(
            $objRecord->getBbcodeId(),
            $objRecord->getBbcodeTag(),
            $objRecord->getBbcodeHelpline(),
            $objRecord->getDisplayOnPosting(),
            $objRecord->getBbcodeMatch(),
            $objRecord->getBbcodeTpl(),
            $objRecord->getFirstPassMatch(),
            $objRecord->getFirstPassReplace(),
            $objRecord->getSecondPassMatch(),
            $objRecord->getSecondPassReplace()
        );
        $arrKeyParams = array($objRecord->getOrigBbcodeId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_bbcodes` WHERE bbcode_id=?';
        $params = array($objRecord->getBbcodeId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
