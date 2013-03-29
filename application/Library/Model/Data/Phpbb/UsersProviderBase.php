<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_Phpbb_UsersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Phpbb_Users($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_Phpbb_Users($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user_id)
    {
        $strSql = 'SELECT * FROM phpbb_users WHERE user_id=?';
        $params = array($user_id);
        return Model_Data_Phpbb_UsersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO phpbb_users (
            user_id,
            user_type,
            group_id,
            user_permissions,
            user_perm_from,
            user_ip,
            user_regdate,
            username,
            username_clean,
            user_password,
            user_passchg,
            user_pass_convert,
            user_email,
            user_email_hash,
            user_birthday,
            user_lastvisit,
            user_lastmark,
            user_lastpost_time,
            user_lastpage,
            user_last_confirm_key,
            user_last_search,
            user_warnings,
            user_last_warning,
            user_login_attempts,
            user_inactive_reason,
            user_inactive_time,
            user_posts,
            user_lang,
            user_timezone,
            user_dst,
            user_dateformat,
            user_style,
            user_rank,
            user_colour,
            user_new_privmsg,
            user_unread_privmsg,
            user_last_privmsg,
            user_message_rules,
            user_full_folder,
            user_emailtime,
            user_topic_show_days,
            user_topic_sortby_type,
            user_topic_sortby_dir,
            user_post_show_days,
            user_post_sortby_type,
            user_post_sortby_dir,
            user_notify,
            user_notify_pm,
            user_notify_type,
            user_allow_pm,
            user_allow_viewonline,
            user_allow_viewemail,
            user_allow_massemail,
            user_options,
            user_avatar,
            user_avatar_type,
            user_avatar_width,
            user_avatar_height,
            user_sig,
            user_sig_bbcode_uid,
            user_sig_bbcode_bitfield,
            user_from,
            user_icq,
            user_aim,
            user_yim,
            user_msnm,
            user_jabber,
            user_website,
            user_occ,
            user_interests,
            user_actkey,
            user_newpasswd,
            user_form_salt,
            user_new,
            user_reminded,
            user_reminded_time
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUserType(),
            $objRecord->getGroupId(),
            $objRecord->getUserPermissions(),
            $objRecord->getUserPermFrom(),
            $objRecord->getUserIp(),
            $objRecord->getUserRegdate(),
            $objRecord->getUsername(),
            $objRecord->getUsernameClean(),
            $objRecord->getUserPassword(),
            $objRecord->getUserPasschg(),
            $objRecord->getUserPassConvert(),
            $objRecord->getUserEmail(),
            $objRecord->getUserEmailHash(),
            $objRecord->getUserBirthday(),
            $objRecord->getUserLastvisit(),
            $objRecord->getUserLastmark(),
            $objRecord->getUserLastpostTime(),
            $objRecord->getUserLastpage(),
            $objRecord->getUserLastConfirmKey(),
            $objRecord->getUserLastSearch(),
            $objRecord->getUserWarnings(),
            $objRecord->getUserLastWarning(),
            $objRecord->getUserLoginAttempts(),
            $objRecord->getUserInactiveReason(),
            $objRecord->getUserInactiveTime(),
            $objRecord->getUserPosts(),
            $objRecord->getUserLang(),
            $objRecord->getUserTimezone(),
            $objRecord->getUserDst(),
            $objRecord->getUserDateformat(),
            $objRecord->getUserStyle(),
            $objRecord->getUserRank(),
            $objRecord->getUserColour(),
            $objRecord->getUserNewPrivmsg(),
            $objRecord->getUserUnreadPrivmsg(),
            $objRecord->getUserLastPrivmsg(),
            $objRecord->getUserMessageRules(),
            $objRecord->getUserFullFolder(),
            $objRecord->getUserEmailtime(),
            $objRecord->getUserTopicShowDays(),
            $objRecord->getUserTopicSortbyType(),
            $objRecord->getUserTopicSortbyDir(),
            $objRecord->getUserPostShowDays(),
            $objRecord->getUserPostSortbyType(),
            $objRecord->getUserPostSortbyDir(),
            $objRecord->getUserNotify(),
            $objRecord->getUserNotifyPm(),
            $objRecord->getUserNotifyType(),
            $objRecord->getUserAllowPm(),
            $objRecord->getUserAllowViewonline(),
            $objRecord->getUserAllowViewemail(),
            $objRecord->getUserAllowMassemail(),
            $objRecord->getUserOptions(),
            $objRecord->getUserAvatar(),
            $objRecord->getUserAvatarType(),
            $objRecord->getUserAvatarWidth(),
            $objRecord->getUserAvatarHeight(),
            $objRecord->getUserSig(),
            $objRecord->getUserSigBbcodeUid(),
            $objRecord->getUserSigBbcodeBitfield(),
            $objRecord->getUserFrom(),
            $objRecord->getUserIcq(),
            $objRecord->getUserAim(),
            $objRecord->getUserYim(),
            $objRecord->getUserMsnm(),
            $objRecord->getUserJabber(),
            $objRecord->getUserWebsite(),
            $objRecord->getUserOcc(),
            $objRecord->getUserInterests(),
            $objRecord->getUserActkey(),
            $objRecord->getUserNewpasswd(),
            $objRecord->getUserFormSalt(),
            $objRecord->getUserNew(),
            $objRecord->getUserReminded(),
            $objRecord->getUserRemindedTime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUserId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE phpbb_users SET 
            user_id=?,
            user_type=?,
            group_id=?,
            user_permissions=?,
            user_perm_from=?,
            user_ip=?,
            user_regdate=?,
            username=?,
            username_clean=?,
            user_password=?,
            user_passchg=?,
            user_pass_convert=?,
            user_email=?,
            user_email_hash=?,
            user_birthday=?,
            user_lastvisit=?,
            user_lastmark=?,
            user_lastpost_time=?,
            user_lastpage=?,
            user_last_confirm_key=?,
            user_last_search=?,
            user_warnings=?,
            user_last_warning=?,
            user_login_attempts=?,
            user_inactive_reason=?,
            user_inactive_time=?,
            user_posts=?,
            user_lang=?,
            user_timezone=?,
            user_dst=?,
            user_dateformat=?,
            user_style=?,
            user_rank=?,
            user_colour=?,
            user_new_privmsg=?,
            user_unread_privmsg=?,
            user_last_privmsg=?,
            user_message_rules=?,
            user_full_folder=?,
            user_emailtime=?,
            user_topic_show_days=?,
            user_topic_sortby_type=?,
            user_topic_sortby_dir=?,
            user_post_show_days=?,
            user_post_sortby_type=?,
            user_post_sortby_dir=?,
            user_notify=?,
            user_notify_pm=?,
            user_notify_type=?,
            user_allow_pm=?,
            user_allow_viewonline=?,
            user_allow_viewemail=?,
            user_allow_massemail=?,
            user_options=?,
            user_avatar=?,
            user_avatar_type=?,
            user_avatar_width=?,
            user_avatar_height=?,
            user_sig=?,
            user_sig_bbcode_uid=?,
            user_sig_bbcode_bitfield=?,
            user_from=?,
            user_icq=?,
            user_aim=?,
            user_yim=?,
            user_msnm=?,
            user_jabber=?,
            user_website=?,
            user_occ=?,
            user_interests=?,
            user_actkey=?,
            user_newpasswd=?,
            user_form_salt=?,
            user_new=?,
            user_reminded=?,
            user_reminded_time=?
        WHERE user_id=?';
        $arrSetParams = array(
            $objRecord->getUserId(),
            $objRecord->getUserType(),
            $objRecord->getGroupId(),
            $objRecord->getUserPermissions(),
            $objRecord->getUserPermFrom(),
            $objRecord->getUserIp(),
            $objRecord->getUserRegdate(),
            $objRecord->getUsername(),
            $objRecord->getUsernameClean(),
            $objRecord->getUserPassword(),
            $objRecord->getUserPasschg(),
            $objRecord->getUserPassConvert(),
            $objRecord->getUserEmail(),
            $objRecord->getUserEmailHash(),
            $objRecord->getUserBirthday(),
            $objRecord->getUserLastvisit(),
            $objRecord->getUserLastmark(),
            $objRecord->getUserLastpostTime(),
            $objRecord->getUserLastpage(),
            $objRecord->getUserLastConfirmKey(),
            $objRecord->getUserLastSearch(),
            $objRecord->getUserWarnings(),
            $objRecord->getUserLastWarning(),
            $objRecord->getUserLoginAttempts(),
            $objRecord->getUserInactiveReason(),
            $objRecord->getUserInactiveTime(),
            $objRecord->getUserPosts(),
            $objRecord->getUserLang(),
            $objRecord->getUserTimezone(),
            $objRecord->getUserDst(),
            $objRecord->getUserDateformat(),
            $objRecord->getUserStyle(),
            $objRecord->getUserRank(),
            $objRecord->getUserColour(),
            $objRecord->getUserNewPrivmsg(),
            $objRecord->getUserUnreadPrivmsg(),
            $objRecord->getUserLastPrivmsg(),
            $objRecord->getUserMessageRules(),
            $objRecord->getUserFullFolder(),
            $objRecord->getUserEmailtime(),
            $objRecord->getUserTopicShowDays(),
            $objRecord->getUserTopicSortbyType(),
            $objRecord->getUserTopicSortbyDir(),
            $objRecord->getUserPostShowDays(),
            $objRecord->getUserPostSortbyType(),
            $objRecord->getUserPostSortbyDir(),
            $objRecord->getUserNotify(),
            $objRecord->getUserNotifyPm(),
            $objRecord->getUserNotifyType(),
            $objRecord->getUserAllowPm(),
            $objRecord->getUserAllowViewonline(),
            $objRecord->getUserAllowViewemail(),
            $objRecord->getUserAllowMassemail(),
            $objRecord->getUserOptions(),
            $objRecord->getUserAvatar(),
            $objRecord->getUserAvatarType(),
            $objRecord->getUserAvatarWidth(),
            $objRecord->getUserAvatarHeight(),
            $objRecord->getUserSig(),
            $objRecord->getUserSigBbcodeUid(),
            $objRecord->getUserSigBbcodeBitfield(),
            $objRecord->getUserFrom(),
            $objRecord->getUserIcq(),
            $objRecord->getUserAim(),
            $objRecord->getUserYim(),
            $objRecord->getUserMsnm(),
            $objRecord->getUserJabber(),
            $objRecord->getUserWebsite(),
            $objRecord->getUserOcc(),
            $objRecord->getUserInterests(),
            $objRecord->getUserActkey(),
            $objRecord->getUserNewpasswd(),
            $objRecord->getUserFormSalt(),
            $objRecord->getUserNew(),
            $objRecord->getUserReminded(),
            $objRecord->getUserRemindedTime()
        );
        $arrKeyParams = array($objRecord->getOrigUserId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM phpbb_users WHERE user_id=?';
        $params = array($objRecord->getUserId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
