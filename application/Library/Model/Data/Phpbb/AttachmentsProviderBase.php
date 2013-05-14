<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_AttachmentsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Attachments($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Attachments($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($attach_id)
    {
        $strSql = 'SELECT * FROM `phpbb_attachments` WHERE attach_id=?';
        $params = array($attach_id);
        return Model_Data_Phpbb_AttachmentsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_attachments` (
            attach_id,
            post_msg_id,
            topic_id,
            in_message,
            poster_id,
            is_orphan,
            physical_filename,
            real_filename,
            download_count,
            attach_comment,
            extension,
            mimetype,
            filesize,
            filetime,
            thumbnail
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPostMsgId(),
            $objRecord->getTopicId(),
            $objRecord->getInMessage(),
            $objRecord->getPosterId(),
            $objRecord->getIsOrphan(),
            $objRecord->getPhysicalFilename(),
            $objRecord->getRealFilename(),
            $objRecord->getDownloadCount(),
            $objRecord->getAttachComment(),
            $objRecord->getExtension(),
            $objRecord->getMimetype(),
            $objRecord->getFilesize(),
            $objRecord->getFiletime(),
            $objRecord->getThumbnail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAttachId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_attachments` (
            attach_id,
            post_msg_id,
            topic_id,
            in_message,
            poster_id,
            is_orphan,
            physical_filename,
            real_filename,
            download_count,
            attach_comment,
            extension,
            mimetype,
            filesize,
            filetime,
            thumbnail
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getPostMsgId(),
            $objRecord->getTopicId(),
            $objRecord->getInMessage(),
            $objRecord->getPosterId(),
            $objRecord->getIsOrphan(),
            $objRecord->getPhysicalFilename(),
            $objRecord->getRealFilename(),
            $objRecord->getDownloadCount(),
            $objRecord->getAttachComment(),
            $objRecord->getExtension(),
            $objRecord->getMimetype(),
            $objRecord->getFilesize(),
            $objRecord->getFiletime(),
            $objRecord->getThumbnail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setAttachId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_attachments` SET 
            attach_id=?,
            post_msg_id=?,
            topic_id=?,
            in_message=?,
            poster_id=?,
            is_orphan=?,
            physical_filename=?,
            real_filename=?,
            download_count=?,
            attach_comment=?,
            extension=?,
            mimetype=?,
            filesize=?,
            filetime=?,
            thumbnail=?
        WHERE attach_id=?';
        $arrSetParams = array(
            $objRecord->getAttachId(),
            $objRecord->getPostMsgId(),
            $objRecord->getTopicId(),
            $objRecord->getInMessage(),
            $objRecord->getPosterId(),
            $objRecord->getIsOrphan(),
            $objRecord->getPhysicalFilename(),
            $objRecord->getRealFilename(),
            $objRecord->getDownloadCount(),
            $objRecord->getAttachComment(),
            $objRecord->getExtension(),
            $objRecord->getMimetype(),
            $objRecord->getFilesize(),
            $objRecord->getFiletime(),
            $objRecord->getThumbnail()
        );
        $arrKeyParams = array($objRecord->getOrigAttachId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_attachments` WHERE attach_id=?';
        $params = array($objRecord->getAttachId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
