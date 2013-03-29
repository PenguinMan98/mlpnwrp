/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

// Overriding client side functionality:

/*
// Example - Overriding the replaceCustomCommands method:
ajaxChat.replaceCustomCommands = function(text, textParts) {
	return text;
}
 */

/*I want to keep this as sparse as possible.*/
ajaxChat.replaceCustomText = function (text) {
	text=text.replace(/body/gi, 'pony');
	text=text.replace(/fuck/gi, '****');
	text=text.replace(/penis/gi, '****');
	text=text.replace(/vagina/gi, '****');
	text=text.replace(/gods/gi, 'Princesses');
	text=text.replace(/god/gi, 'Princess');
	/*text=text.replace(/(\s)?god$/gi, '$1Princess');
	text=text.replace(/(\s)?god([^s][^\s]*)/gi, '$1Princess$2');
	text=text.replace(/(\s)?gods([^\s]*)?/gi, '$1Princesses$2');*/
	text=text.replace(/omg/gi, 'OMP');
	text=text.replace(/wtf/gi, 'WTB');
	return text;
}

ajaxChat.customInitialize = function() {
	ajaxChat.addChatBotMessageToChatList('Welcome to our chat! Please follow the <a href="#">rules</a>.');
}