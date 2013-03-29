<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_ForumsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Forums($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Forums($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($forum_id)
    {
        $strSql = 'SELECT * FROM phpbb_forums WHERE forum_id=?';
        $params = array($forum_id);
        return Model_Data_Phpbb_ForumsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_forums (
            forum_id,
            parent_id,
            left_id,
            right_id,
            forum_parents,
            forum_name,
            forum_desc,
            forum_desc_bitfield,
            forum_desc_options,
            forum_desc_uid,
            forum_link,
            forum_password,
            forum_style,
            forum_image,
            forum_rules,
            forum_rules_link,
            forum_rules_bitfield,
            forum_rules_options,
            forum_rules_uid,
            forum_topics_per_page,
            forum_type,
            forum_status,
            forum_posts,
            forum_topics,
            forum_topics_real,
            forum_last_post_id,
            forum_last_poster_id,
            forum_last_post_subject,
            forum_last_post_time,
            forum_last_poster_name,
            forum_last_poster_colour,
            forum_flags,
            forum_options,
            display_subforum_list,
            display_on_index,
            enable_indexing,
            enable_icons,
            enable_prune,
            prune_next,
            prune_days,
            prune_viewed,
            prune_freq
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getParentId(),
            $objRecord->getLeftId(),
            $objRecord->getRightId(),
            $objRecord->getForumParents(),
            $objRecord->getForumName(),
            $objRecord->getForumDesc(),
            $objRecord->getForumDescBitfield(),
            $objRecord->getForumDescOptions(),
            $objRecord->getForumDescUid(),
            $objRecord->getForumLink(),
            $objRecord->getForumPassword(),
            $objRecord->getForumStyle(),
            $objRecord->getForumImage(),
            $objRecord->getForumRules(),
            $objRecord->getForumRulesLink(),
            $objRecord->getForumRulesBitfield(),
            $objRecord->getForumRulesOptions(),
            $objRecord->getForumRulesUid(),
            $objRecord->getForumTopicsPerPage(),
            $objRecord->getForumType(),
            $objRecord->getForumStatus(),
            $objRecord->getForumPosts(),
            $objRecord->getForumTopics(),
            $objRecord->getForumTopicsReal(),
            $objRecord->getForumLastPostId(),
            $objRecord->getForumLastPosterId(),
            $objRecord->getForumLastPostSubject(),
            $objRecord->getForumLastPostTime(),
            $objRecord->getForumLastPosterName(),
            $objRecord->getForumLastPosterColour(),
            $objRecord->getForumFlags(),
            $objRecord->getForumOptions(),
            $objRecord->getDisplaySubforumList(),
            $objRecord->getDisplayOnIndex(),
            $objRecord->getEnableIndexing(),
            $objRecord->getEnableIcons(),
            $objRecord->getEnablePrune(),
            $objRecord->getPruneNext(),
            $objRecord->getPruneDays(),
            $objRecord->getPruneViewed(),
            $objRecord->getPruneFreq()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setForumId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_forums SET 
            forum_id=?,
            parent_id=?,
            left_id=?,
            right_id=?,
            forum_parents=?,
            forum_name=?,
            forum_desc=?,
            forum_desc_bitfield=?,
            forum_desc_options=?,
            forum_desc_uid=?,
            forum_link=?,
            forum_password=?,
            forum_style=?,
            forum_image=?,
            forum_rules=?,
            forum_rules_link=?,
            forum_rules_bitfield=?,
            forum_rules_options=?,
            forum_rules_uid=?,
            forum_topics_per_page=?,
            forum_type=?,
            forum_status=?,
            forum_posts=?,
            forum_topics=?,
            forum_topics_real=?,
            forum_last_post_id=?,
            forum_last_poster_id=?,
            forum_last_post_subject=?,
            forum_last_post_time=?,
            forum_last_poster_name=?,
            forum_last_poster_colour=?,
            forum_flags=?,
            forum_options=?,
            display_subforum_list=?,
            display_on_index=?,
            enable_indexing=?,
            enable_icons=?,
            enable_prune=?,
            prune_next=?,
            prune_days=?,
            prune_viewed=?,
            prune_freq=?
        WHERE forum_id=?';
        $arrSetParams = array(
            $objRecord->getForumId(),
            $objRecord->getParentId(),
            $objRecord->getLeftId(),
            $objRecord->getRightId(),
            $objRecord->getForumParents(),
            $objRecord->getForumName(),
            $objRecord->getForumDesc(),
            $objRecord->getForumDescBitfield(),
            $objRecord->getForumDescOptions(),
            $objRecord->getForumDescUid(),
            $objRecord->getForumLink(),
            $objRecord->getForumPassword(),
            $objRecord->getForumStyle(),
            $objRecord->getForumImage(),
            $objRecord->getForumRules(),
            $objRecord->getForumRulesLink(),
            $objRecord->getForumRulesBitfield(),
            $objRecord->getForumRulesOptions(),
            $objRecord->getForumRulesUid(),
            $objRecord->getForumTopicsPerPage(),
            $objRecord->getForumType(),
            $objRecord->getForumStatus(),
            $objRecord->getForumPosts(),
            $objRecord->getForumTopics(),
            $objRecord->getForumTopicsReal(),
            $objRecord->getForumLastPostId(),
            $objRecord->getForumLastPosterId(),
            $objRecord->getForumLastPostSubject(),
            $objRecord->getForumLastPostTime(),
            $objRecord->getForumLastPosterName(),
            $objRecord->getForumLastPosterColour(),
            $objRecord->getForumFlags(),
            $objRecord->getForumOptions(),
            $objRecord->getDisplaySubforumList(),
            $objRecord->getDisplayOnIndex(),
            $objRecord->getEnableIndexing(),
            $objRecord->getEnableIcons(),
            $objRecord->getEnablePrune(),
            $objRecord->getPruneNext(),
            $objRecord->getPruneDays(),
            $objRecord->getPruneViewed(),
            $objRecord->getPruneFreq()
        );
        $arrKeyParams = array($objRecord->getOrigForumId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_forums WHERE forum_id=?';
        $params = array($objRecord->getForumId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
