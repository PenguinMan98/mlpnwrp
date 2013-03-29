<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_TopicsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Topics($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Topics($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($topic_id)
    {
        $strSql = 'SELECT * FROM phpbb_topics WHERE topic_id=?';
        $params = array($topic_id);
        return Model_Data_Phpbb_TopicsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_topics (
            topic_id,
            forum_id,
            icon_id,
            topic_attachment,
            topic_approved,
            topic_reported,
            topic_title,
            topic_poster,
            topic_time,
            topic_time_limit,
            topic_views,
            topic_replies,
            topic_replies_real,
            topic_status,
            topic_type,
            topic_first_post_id,
            topic_first_poster_name,
            topic_first_poster_colour,
            topic_last_post_id,
            topic_last_poster_id,
            topic_last_poster_name,
            topic_last_poster_colour,
            topic_last_post_subject,
            topic_last_post_time,
            topic_last_view_time,
            topic_moved_id,
            topic_bumped,
            topic_bumper,
            poll_title,
            poll_start,
            poll_length,
            poll_max_options,
            poll_last_vote,
            poll_vote_change
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getForumId(),
            $objRecord->getIconId(),
            $objRecord->getTopicAttachment(),
            $objRecord->getTopicApproved(),
            $objRecord->getTopicReported(),
            $objRecord->getTopicTitle(),
            $objRecord->getTopicPoster(),
            $objRecord->getTopicTime(),
            $objRecord->getTopicTimeLimit(),
            $objRecord->getTopicViews(),
            $objRecord->getTopicReplies(),
            $objRecord->getTopicRepliesReal(),
            $objRecord->getTopicStatus(),
            $objRecord->getTopicType(),
            $objRecord->getTopicFirstPostId(),
            $objRecord->getTopicFirstPosterName(),
            $objRecord->getTopicFirstPosterColour(),
            $objRecord->getTopicLastPostId(),
            $objRecord->getTopicLastPosterId(),
            $objRecord->getTopicLastPosterName(),
            $objRecord->getTopicLastPosterColour(),
            $objRecord->getTopicLastPostSubject(),
            $objRecord->getTopicLastPostTime(),
            $objRecord->getTopicLastViewTime(),
            $objRecord->getTopicMovedId(),
            $objRecord->getTopicBumped(),
            $objRecord->getTopicBumper(),
            $objRecord->getPollTitle(),
            $objRecord->getPollStart(),
            $objRecord->getPollLength(),
            $objRecord->getPollMaxOptions(),
            $objRecord->getPollLastVote(),
            $objRecord->getPollVoteChange()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTopicId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_topics SET 
            topic_id=?,
            forum_id=?,
            icon_id=?,
            topic_attachment=?,
            topic_approved=?,
            topic_reported=?,
            topic_title=?,
            topic_poster=?,
            topic_time=?,
            topic_time_limit=?,
            topic_views=?,
            topic_replies=?,
            topic_replies_real=?,
            topic_status=?,
            topic_type=?,
            topic_first_post_id=?,
            topic_first_poster_name=?,
            topic_first_poster_colour=?,
            topic_last_post_id=?,
            topic_last_poster_id=?,
            topic_last_poster_name=?,
            topic_last_poster_colour=?,
            topic_last_post_subject=?,
            topic_last_post_time=?,
            topic_last_view_time=?,
            topic_moved_id=?,
            topic_bumped=?,
            topic_bumper=?,
            poll_title=?,
            poll_start=?,
            poll_length=?,
            poll_max_options=?,
            poll_last_vote=?,
            poll_vote_change=?
        WHERE topic_id=?';
        $arrSetParams = array(
            $objRecord->getTopicId(),
            $objRecord->getForumId(),
            $objRecord->getIconId(),
            $objRecord->getTopicAttachment(),
            $objRecord->getTopicApproved(),
            $objRecord->getTopicReported(),
            $objRecord->getTopicTitle(),
            $objRecord->getTopicPoster(),
            $objRecord->getTopicTime(),
            $objRecord->getTopicTimeLimit(),
            $objRecord->getTopicViews(),
            $objRecord->getTopicReplies(),
            $objRecord->getTopicRepliesReal(),
            $objRecord->getTopicStatus(),
            $objRecord->getTopicType(),
            $objRecord->getTopicFirstPostId(),
            $objRecord->getTopicFirstPosterName(),
            $objRecord->getTopicFirstPosterColour(),
            $objRecord->getTopicLastPostId(),
            $objRecord->getTopicLastPosterId(),
            $objRecord->getTopicLastPosterName(),
            $objRecord->getTopicLastPosterColour(),
            $objRecord->getTopicLastPostSubject(),
            $objRecord->getTopicLastPostTime(),
            $objRecord->getTopicLastViewTime(),
            $objRecord->getTopicMovedId(),
            $objRecord->getTopicBumped(),
            $objRecord->getTopicBumper(),
            $objRecord->getPollTitle(),
            $objRecord->getPollStart(),
            $objRecord->getPollLength(),
            $objRecord->getPollMaxOptions(),
            $objRecord->getPollLastVote(),
            $objRecord->getPollVoteChange()
        );
        $arrKeyParams = array($objRecord->getOrigTopicId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_topics WHERE topic_id=?';
        $params = array($objRecord->getTopicId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
