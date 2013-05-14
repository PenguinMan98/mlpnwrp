<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_SmiliesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Smilies($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Smilies($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($smiley_id)
    {
        $strSql = 'SELECT * FROM `phpbb_smilies` WHERE smiley_id=?';
        $params = array($smiley_id);
        return Model_Data_Phpbb_SmiliesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_smilies` (
            smiley_id,
            code,
            emotion,
            smiley_url,
            smiley_width,
            smiley_height,
            smiley_order,
            display_on_posting
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCode(),
            $objRecord->getEmotion(),
            $objRecord->getSmileyUrl(),
            $objRecord->getSmileyWidth(),
            $objRecord->getSmileyHeight(),
            $objRecord->getSmileyOrder(),
            $objRecord->getDisplayOnPosting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSmileyId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_smilies` (
            smiley_id,
            code,
            emotion,
            smiley_url,
            smiley_width,
            smiley_height,
            smiley_order,
            display_on_posting
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCode(),
            $objRecord->getEmotion(),
            $objRecord->getSmileyUrl(),
            $objRecord->getSmileyWidth(),
            $objRecord->getSmileyHeight(),
            $objRecord->getSmileyOrder(),
            $objRecord->getDisplayOnPosting()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setSmileyId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_smilies` SET 
            smiley_id=?,
            code=?,
            emotion=?,
            smiley_url=?,
            smiley_width=?,
            smiley_height=?,
            smiley_order=?,
            display_on_posting=?
        WHERE smiley_id=?';
        $arrSetParams = array(
            $objRecord->getSmileyId(),
            $objRecord->getCode(),
            $objRecord->getEmotion(),
            $objRecord->getSmileyUrl(),
            $objRecord->getSmileyWidth(),
            $objRecord->getSmileyHeight(),
            $objRecord->getSmileyOrder(),
            $objRecord->getDisplayOnPosting()
        );
        $arrKeyParams = array($objRecord->getOrigSmileyId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_smilies` WHERE smiley_id=?';
        $params = array($objRecord->getSmileyId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
