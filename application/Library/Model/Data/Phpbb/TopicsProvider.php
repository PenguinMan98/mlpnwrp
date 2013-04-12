<?php
class Model_Data_Phpbb_TopicsProvider extends Model_Data_Phpbb_TopicsProviderBase
{
	public function getHotTopics($count){
		$strSql = "
SELECT *
FROM `phpbb_topics`
ORDER BY `topic_last_post_time` DESC
LIMIT " . intval($count) . " ";
		$params = array();
		return parent::getArrayFromQuery($strSql, $params);
	}
}
