<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_PostsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Posts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Posts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($post_id)
    {
        $strSql = 'SELECT * FROM `phpbb_posts` WHERE post_id=?';
        $params = array($post_id);
        return Model_Data_Phpbb_PostsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `phpbb_posts` (
            post_id,
            topic_id,
            forum_id,
            poster_id,
            icon_id,
            poster_ip,
            post_time,
            post_approved,
            post_reported,
            enable_bbcode,
            enable_smilies,
            enable_magic_url,
            enable_sig,
            post_username,
            post_subject,
            post_text,
            post_checksum,
            post_attachment,
            bbcode_bitfield,
            bbcode_uid,
            post_postcount,
            post_edit_time,
            post_edit_reason,
            post_edit_user,
            post_edit_count,
            post_edit_locked
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getPosterId(),
            $objRecord->getIconId(),
            $objRecord->getPosterIp(),
            $objRecord->getPostTime(),
            $objRecord->getPostApproved(),
            $objRecord->getPostReported(),
            $objRecord->getEnableBbcode(),
            $objRecord->getEnableSmilies(),
            $objRecord->getEnableMagicUrl(),
            $objRecord->getEnableSig(),
            $objRecord->getPostUsername(),
            $objRecord->getPostSubject(),
            $objRecord->getPostText(),
            $objRecord->getPostChecksum(),
            $objRecord->getPostAttachment(),
            $objRecord->getBbcodeBitfield(),
            $objRecord->getBbcodeUid(),
            $objRecord->getPostPostcount(),
            $objRecord->getPostEditTime(),
            $objRecord->getPostEditReason(),
            $objRecord->getPostEditUser(),
            $objRecord->getPostEditCount(),
            $objRecord->getPostEditLocked()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPostId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `phpbb_posts` (
            post_id,
            topic_id,
            forum_id,
            poster_id,
            icon_id,
            poster_ip,
            post_time,
            post_approved,
            post_reported,
            enable_bbcode,
            enable_smilies,
            enable_magic_url,
            enable_sig,
            post_username,
            post_subject,
            post_text,
            post_checksum,
            post_attachment,
            bbcode_bitfield,
            bbcode_uid,
            post_postcount,
            post_edit_time,
            post_edit_reason,
            post_edit_user,
            post_edit_count,
            post_edit_locked
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getPosterId(),
            $objRecord->getIconId(),
            $objRecord->getPosterIp(),
            $objRecord->getPostTime(),
            $objRecord->getPostApproved(),
            $objRecord->getPostReported(),
            $objRecord->getEnableBbcode(),
            $objRecord->getEnableSmilies(),
            $objRecord->getEnableMagicUrl(),
            $objRecord->getEnableSig(),
            $objRecord->getPostUsername(),
            $objRecord->getPostSubject(),
            $objRecord->getPostText(),
            $objRecord->getPostChecksum(),
            $objRecord->getPostAttachment(),
            $objRecord->getBbcodeBitfield(),
            $objRecord->getBbcodeUid(),
            $objRecord->getPostPostcount(),
            $objRecord->getPostEditTime(),
            $objRecord->getPostEditReason(),
            $objRecord->getPostEditUser(),
            $objRecord->getPostEditCount(),
            $objRecord->getPostEditLocked()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setPostId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `phpbb_posts` SET 
            post_id=?,
            topic_id=?,
            forum_id=?,
            poster_id=?,
            icon_id=?,
            poster_ip=?,
            post_time=?,
            post_approved=?,
            post_reported=?,
            enable_bbcode=?,
            enable_smilies=?,
            enable_magic_url=?,
            enable_sig=?,
            post_username=?,
            post_subject=?,
            post_text=?,
            post_checksum=?,
            post_attachment=?,
            bbcode_bitfield=?,
            bbcode_uid=?,
            post_postcount=?,
            post_edit_time=?,
            post_edit_reason=?,
            post_edit_user=?,
            post_edit_count=?,
            post_edit_locked=?
        WHERE post_id=?';
        $arrSetParams = array(
            $objRecord->getPostId(),
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getPosterId(),
            $objRecord->getIconId(),
            $objRecord->getPosterIp(),
            $objRecord->getPostTime(),
            $objRecord->getPostApproved(),
            $objRecord->getPostReported(),
            $objRecord->getEnableBbcode(),
            $objRecord->getEnableSmilies(),
            $objRecord->getEnableMagicUrl(),
            $objRecord->getEnableSig(),
            $objRecord->getPostUsername(),
            $objRecord->getPostSubject(),
            $objRecord->getPostText(),
            $objRecord->getPostChecksum(),
            $objRecord->getPostAttachment(),
            $objRecord->getBbcodeBitfield(),
            $objRecord->getBbcodeUid(),
            $objRecord->getPostPostcount(),
            $objRecord->getPostEditTime(),
            $objRecord->getPostEditReason(),
            $objRecord->getPostEditUser(),
            $objRecord->getPostEditCount(),
            $objRecord->getPostEditLocked()
        );
        $arrKeyParams = array($objRecord->getOrigPostId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `phpbb_posts` WHERE post_id=?';
        $params = array($objRecord->getPostId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
