<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_DraftsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Drafts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Drafts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($draft_id)
    {
        $strSql = 'SELECT * FROM phpbb_drafts WHERE draft_id=?';
        $params = array($draft_id);
        return Model_Data_Phpbb_DraftsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_drafts (
            draft_id,
            user_id,
            topic_id,
            forum_id,
            save_time,
            draft_subject,
            draft_message
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserId(),
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getSaveTime(),
            $objRecord->getDraftSubject(),
            $objRecord->getDraftMessage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setDraftId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_drafts SET 
            draft_id=?,
            user_id=?,
            topic_id=?,
            forum_id=?,
            save_time=?,
            draft_subject=?,
            draft_message=?
        WHERE draft_id=?';
        $arrSetParams = array(
            $objRecord->getDraftId(),
            $objRecord->getUserId(),
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getSaveTime(),
            $objRecord->getDraftSubject(),
            $objRecord->getDraftMessage()
        );
        $arrKeyParams = array($objRecord->getOrigDraftId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_drafts WHERE draft_id=?';
        $params = array($objRecord->getDraftId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
