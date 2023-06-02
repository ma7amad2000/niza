<?php 
ob_start();
$marcus = '5783956334:AAGbcpSKDOYivR4y-Dh5u1carz4_uJSuQlU';
define('API_KEY',$marcus);
echo file_get_contents("https:##api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$marcus4 = http_build_query($datas);
$url = "https:##api.telegram.org/bot".API_KEY."/".$method."?$marcus4";
$marcus4 = file_get_contents($url);
return json_decode($marcus4);
}
$Dev = array("6275847466","",""); ##ID ADMIN NUMBER 1 HE CHAT
@$usernamebot = "HAYAMASBOT"; ##UserName Bot
@$channel = "HL_BG"; ## UserName Channel don't @
@$token = API_KEY;
$update = json_decode(file_get_contents('php:##input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @bp_bp =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
/*===== dev ~ @bp_bp =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
$chatid3=$update->message->chat->id;
$fromid3=$update->message->from->id;
$text=$update->message->text;
$mid=$update->message->message_id;
/*===== dev ~ @bp_bp =====*/
@$statjson = json_decode(file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https:##api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
$title =$message->chat->title;
$rep = $message->reply_to_message;
/*===== dev ~ @bp_bp =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];

/*===== فاكشن =====*/
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function  getUserProfilePhotos($token,$from_id) {
  @$url = 'https:##api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}
function check_filter($str){
global $filterget;
foreach($filterget as $d){
	if (mb_strpos($str, $d) !== false) {
		return true;
}
}
}
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$re         = $update->message->reply_to_message;


mkdir("data/member");
mkdir("data/member/$chat_id");

$Cmember = file_get_contents("data/member/$chat_id/Cmember.txt");
$CCmember = file_get_contents("data/member/$chat_id/member.txt");
$getCCmember = explode("\n",$CCmember);

if ($tc == 'group' | $tc == 'supergroup'){  
if($status == "creator" ||  in_array($from_id,$Dev) ) {

if($re and $text == "رفع مدير"  and !in_array($re_id,$getCCmember)){
file_put_contents("data/member/$chat_id/member.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/member/$chat_id/Cmember.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مدير 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع مدير" and in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مدير مسبقا
✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل مدير"  and in_array($re_id,$getCCmember)){
$str = str_replace($re_id,"",$getCCmember);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cmember);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/member/$chat_id/member.txt",$ex);
file_put_contents("data/member/$chat_id/Cmember.txt",$ex2);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله ليصبح عضو 👶🏻
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل مدير"  and !in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله مسبقا 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "المدراء" || $text == "قائمه المدراء" and $Cmember != null || $Cmember != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليك المدراء عزيزي

$Cmember ",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "مسح المدراء" || $text == "مسح قائمه المدراء"){
file_put_contents("data/member/$chat_id/member.txt","");
file_put_contents("data/member/$chat_id/Cmember.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع المدراء",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
mkdir("data/admins");
mkdir("data/admins/$chat_id");

$Cadmins = file_get_contents("data/admins/$chat_id/Cadmins.txt");
$CCadmins = file_get_contents("data/admins/$chat_id/admins.txt");
$useradmin = explode("\n",$CCadmins);

if ($tc == 'group' | $tc == 'supergroup'){  
if($status == "creator" || $status == "administrator" ||  in_array($from_id,$Dev)  ||  in_array($from_id,$getCCadmins)  ) {

if($re and $text == "رفع ادمن"  and !in_array($re_id,$useradmin)){
file_put_contents("data/admins/$chat_id/admins.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/admins/$chat_id/Cadmins.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح ادمن 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع ادمن" and in_array($re_id,$useradmin)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح ادمن مسبقا
✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل ادمن"  and in_array($re_id,$useradmin)){
$str = str_replace($re_id,"",$CCadmins);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cadmins);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/admins/$chat_id/admins.txt",$ex);
file_put_contents("data/admins/$chat_id/Cadmins.txt",$ex2);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله ليصبح عضو 👶🏻
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$useradmin)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله مسبقا 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

/*
if($text == "الادمنية" || $text == "قائمه الادمنية" and $Cadmins != null || $Cadmins != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليك الادمنية عزيزي

$Cadmins ",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}*/


if($text == "مسح الادمنية" || $text == "مسح قائمه الادمنية"){
file_put_contents("data/admins/$chat_id/admins.txt","");
file_put_contents("data/admins/$chat_id/Cadmins.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع الادمنية",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
mkdir("data/mmyaz74");
mkdir("data/mmyaz74/$chat_id");

$mmyaz7= file_get_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt");
$mmyaz77 = file_get_contents("data/mmyaz74/$chat_id/mmyaz74.txt");
$mmyaz = explode("\n",$mmyaz77);

if ($tc == 'group' | $tc == 'supergroup'){  
if($status == "creator" || $status == "administrator" ||  in_array($from_id,$Dev)  ||  in_array($from_id,$getCCmember)  ||  in_array($from_id,$useradmin)  ) {

if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz74/$chat_id/mmyaz74.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مميز 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع مميز" and in_array($re_id,$mmyaz)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح عضو مميز مسبقا
✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل مميز"  and in_array($re_id,$mmyaz)){
$str = str_replace($re_id,"",$mmyaz77);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cmmyaz74);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/mmyaz74/$chat_id/mmyaz74.txt",$ex);
file_put_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt",$ex2);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله ليصبح عضو 👶🏻
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل مميز"  and !in_array($re_id,$mmyaz)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg:##user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله مسبقا 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "المميزين" || $text == "قائمه المميزين" and $mmyaz7!= null || $mmyaz7!= ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليك المميزين عزيزي

$mmyaz7",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "مسح المميزين" || $text == "مسح قائمه المميزين"){
file_put_contents("data/mmyaz74/$chat_id/mmyaz74.txt","");
file_put_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع المميزين",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
if( $text=="الادمنيه" or $text=="الادمنية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https:##api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
  $owner = $result[$key]['user']['id'];
  $owner2 = $result[$key]['user']['username'];
}
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."√┇"."[{$innames}](tg:##user?id={$result[$key]['user']['id']})";
}
  }
	 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مقفول┇المالك  ~
$owner | @$owner2 🙎‍♂
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
👮🏻┇قائمة الادمنية بالمجموعة  ~
$msg
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
$Cadmins
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
'parse_mode'=>"MarkDown",
 ]);
}
}

##link 
if($settings["lock"]["link"] == "مقفول️"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember) && !in_array($from_id,$mmyaz) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https:##") == true or strstr($text,":##") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
}
}
}
if($settings["lock"]["linkr"] == "مقفول️"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember) && !in_array($from_id,$mmyaz)  ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https:##") == true or strstr($text,":##") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
}
}
}
##farse ♥
if($settings["lock"]["farse"] == "مقفول️"){
	if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
$uo=json_decode(file_get_contents("https:##api.telegram.org/bot$token/getchat?chat_id=$fromid3"))->result;
$io=$uo->first_name;
$word = json_decode(file_get_contents("https:##translate.yandex.net/api/v1.5/tr.json/detect?key=trnsl.1.1.20170725T151635Z.31fe7a5603917164.915fed1f5a9aaebef43860694075516e7af7aa47&text=".urlencode($io)))->lang;
$new = $update->message->new_chat_member; 
if($new and $word !="ar" and $word !="en"){
bot('SendMessage', [
'chat_id'=>$chatid3,
'text'=>"⚠️┇ ممنوع دخول الفارسية هنا  [$io](tg:##user?id=$fromid3)"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('kickChatMember',[
'chat_id'=>$chatid3,
'user_id'=>$fromid3,
]);
}
}
}
## lock photo
if($settings["lock"]["photo"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->photo){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
## lock photo r
if($settings["lock"]["photor"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->photo){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
}
}
}
## gif
if($settings["lock"]["gif"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->document){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
##gif r
if($settings["lock"]["gifr"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->document){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
}
}
}
## document
if($settings["lock"]["document"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->document){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}

## video
if($settings["lock"]["video"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->video){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
  }
}
}
## video r
if($settings["lock"]["videor"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->video){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
  }
}
}
## edit 
if($editgetsettings["lock"]["edit"] == "مقفول️"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $getCCmember && $edit_for_id != $useradmin && $edit_for_id != $mmyaz){
if ($update->edited_message->text){  
bot('deletemessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id
]);
}
}
}
## contact
if ($settings["lock"]["contact"] == "مقفول️"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}

## tag
if ($settings["lock"]["tag"] == "مقفول️"){
if (strstr($text,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
## username 
if ($settings["lock"]["username"] == "مقفول️"){
if (strstr($text,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
## audio
if ($settings["lock"]["audio"] == "مقفول️"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
## voice 
if ($settings["lock"]["voice"] == "مقفول️"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
if($settings["lock"]["bot"] == "مقفول️"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}
}
## kick bots and user
if($settings["lock"]["botk"] == "مقفول️"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}
## sticker
if ($settings["lock"]["sticker"] == "مقفول️"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
## forward
if ($settings["lock"]["forward"] == "مقفول️"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}

##forward restrict
if ($settings["lock"]["forwardr"] == "مقفول️"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
 }
}
}
}


## fosh 
if ($settings["lock"]["fosh"] == "مقفول️"){
if (strstr($text,"كس") == true  or strstr($text,"ذب") == true or strstr($text,"اير") == true  or  strstr($text,"شرموطة") == true   or strstr($text,"الاسد") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+1800,
]);
}
}
}
}
##arabic
if ($settings["lock"]["ar"] == "مقفول️"){
if (strstr($text,"ض") == true  or strstr($text,"ص") == true or strstr($text,"ق") == true  or  strstr($text,"ف") == true   or strstr($text,"غ") == true or  strstr($text,"ع") == true  or strstr($text,"ه") == true or strstr($text,"خ") == true  or  strstr($text,"ح") == true   or strstr($text,"ج") == true or strstr($text,"ش") == true  or strstr($text,"س") == true or strstr($text,"ي") == true  or  strstr($text,"ب") == true   or strstr($text,"ل") == true or  strstr($text,"ا") == true  or strstr($text,"ت") == true or strstr($text,"ن") == true  or  strstr($text,"م") == true   or strstr($text,"ك") == true or strstr($text,"ظ") == true or strstr($text,"ط") == true  or  strstr($text,"ذ") == true   or strstr($text,"د") == true or  strstr($text,"ز") == true  or strstr($text,"ر") == true or strstr($text,"و") == true  or  strstr($text,"ة") == true   or strstr($text,"ث") == true or strstr($text,"ؤ") == true  or strstr($text,"ء") == true or strstr($text,"ى") == true  or  strstr($text,"ئ") == true   or strstr($text,"آ") == true or  strstr($text,"إ") == true  or strstr($text,"أ") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
##English
if ($settings["lock"]["en"] == "مقفول️"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
##iduser

if(!$rep && $text=="ايدي"){
 	$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
  $result=json_decode(file_get_contents("https:##api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
  $file_id=$result["result"]["photos"][0][0]["file_id"];
  $count=$result["result"]["total_count"];
  var_dump(
bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"
👤┇اسمك ↫ $first_name 
❕┇معرفك ↫ ﹙@$username ﹚
🔰┇ايديك ↫ ﹙ `$from_id` ﹚
🔢┇عدد صورك ↫﹙ $count ﹚
®┇اسم المجموعه ↫ ﹙$title ﹚
",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]));
  }
}


## muteall
if ($settings["lock"]["mute_all"] == "مقفول️"){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
##tsmet ♥
if ($settings["lock"]["tsmet"] == "مقفول️"){
if($update->message){
if ( $status != 'creator' &&  !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
##markdown
if ($settings["lock"]["markdowns"] == "مقفول️"){
if($update->message->entities){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
## muteall time
if ($settings["lock"]["mute_all_time"] == "مقفول️"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/Damascus');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
else
{
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
## replay
if ($settings["lock"]["reply"] == "مقفول️"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}
## tg
if ($settings["lock"]["tgservic"] == "مقفول️"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}
## text
if ($settings["lock"]["text"] == "مقفول️"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}
## video note
if ($settings["lock"]["video_msg"] == "مقفول️"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz)) {
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}



if($settings["information"]["add"] == "مقفول️") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

if($settings["information"]["add"] == "مقفول️"){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
if($youadding < $setadd){
if($addtext == false){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┊عزيزي العضو [$first_name](https:##t.me/$username)
🚸┊لتستطيع التكلم اضف $setadd من الاعضاء
",
]);
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
    bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$msg
]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
  }
  else
  {
      bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
 ]);
   }
}
  }
}
}
##  game
if($settings["lock"]["game"] == "مقفول️"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
## location
if ($settings["lock"]["location"] == "مقفول️"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
##spam
 date_default_timezone_set('Asia/Damascus');
$as = date('i')+15;
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
  if(strpos($text,"وضع تكرار") !== false){
mkdir("data/$chat_id");
mkdir("spam");
$spamx = str_replace("وضع تكرار ","",$text);
if(is_numeric($spamx)){
 if($spamx > 0){
file_put_contents("data/$chat_id/spamxe.txt",$spamx);
file_put_contents("spam/tim.txt",$as); 
var_dump(bot('sendMessage',[ 
'chat_id' => $chat_id,
'text' =>"
💬┇بواسطه ~⪼ [$first_name](t.me/$username)
☑┇تم وضع تكرار $spamx",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id' => $message->message_id,
]));
}}}}
$weplus = 1 ;
$timex = date("Y-m-d-h-i-A");
$timex = str_replace("am", "", $timex);
@$NBots = file_get_contents("spam/$from_id/$timex.txt");
$timex_spam = $NBots + 1;
mkdir("spam/$from_id");
file_put_contents("spam/$from_id/$timex.txt",$timex_spam);
$NBots2 = file_get_contents("spam/$from_id/$timex.txt");
$NBX = file_get_contents("data/$chat_id/spamxe.txt");
if($NBots2 >=$NBX) {
if ($settings["lock"]["spam"] == "مقفول️"){
var_dump(bot('restrictChatMember',[
'user_id'=>$from_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*1600,
]));
}}
$timer = file_get_contents("spam/tim.txt"); 
if($message and $timer<date('h')){
$dir = "spam";
$all = scandir($dir);
if($all != null){
   foreach($all as $file){
      if($file == '.' or $file == '..') continue;
      if(is_file($dir.'/'.$file)){
         unlink($dir.'/'.$file);
      } elseif(is_dir($dir.'/'.$file)){
          $sc = scandir($dir.'/'.$file);
foreach($sc as $sn){
             if($sn == '.' or $sn == '..') continue;
             unlink($dir.'/'.$file.'/'.$sn);
             rmdir($dir.'/'.$file);
          }
      } 
   }
} else {
   die('not found dir');
}
rmdir($dir);
mkdir($dir);
file_put_contents("spam/tim.txt",$as); 
}
## filter
if($text=="/filterlist" or $text=="filterlist" or $text=="قائمة الفلتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠┊قائمة الكلمات الممنوعه ،
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ 
|🔘|~⪼($result)
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "/filter ") !== false or strpos($text , "فلترة كلمة") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = str_replace(['/filter ','فلترة كلمة'],'',$text);
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
☑┇تم اضافتها لقائمه المنع
🔘┇{$text}
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
elseif (strpos($text , "/unfilter " ) !== false or strpos($text , "الغاء فلترة") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$text = str_replace(['/unfilter ','الغاء فلترة'],'',$text);
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
☑┇تم ازالتها من لقائمه المنع
🔘┇{$text}
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($text== "/clean filterlist" or $text=="clean filterlist" or $text=="مسح الفلاتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☑┇تم مسح قائمه المنع
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$text");
if ($check == true) {
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
## setrules
if($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text");
if($plus < 500) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقفول┇تم وضع القوانين للمجموعه",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["rules"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❕┇لا تستطيع وضع اكثر من 500 حرف
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
## lock channel 
/*
if($settings["information"]["lockchannel"] == "مقفول️"){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https:##api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
		if($channeltext == false){
        bot('SendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"
            👤┇العضو ~⪼ [$first_name](t.me/$username)
⚠️┇يجب ان تشترك بالقناة لتكلم هنا
$usernamechannel
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]);
        bot('deletemessage',[
            'chat_id'=>$chat_id,
        'message_id'=>$message_id
        ]);
		            bot('deletemessage',[
            'chat_id'=>$chat_id,
        'message_id'=>$msg
        ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
      }
	  else
	  {
		              bot('deletemessage',[
            'chat_id'=>$chat_id,
        'message_id'=>$message_id
		 ]);
   }
	}
	  }
	}
	}
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text , '@') !== false) {
$plus = mb_strlen("$text");
if($plus < 25) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
💬┇بواسطه ~⪼ [$first_name](t.me/$username)
☑┇تم وضع قناة $text
‼️┇انتبه يجب ان يكون بوت ادمن بالقناة
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️┇خطا المعرف غير مسموح به",
  'reply_to_message_id'=>$message_id,
  
                 
           
 ]);
}
}
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️┇خطأ يجب ان تضع @ للمعرف  
🔰┇مثال • @$channel •√
",
  'reply_to_message_id'=>$message_id,
           
 ]);
}
}
}
} 
*/


mkdir("SA3ED");
$SAEED0= file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$SAEED1= json_decode($SAEED0, true);
$SAEED2 = $SAEED1['result']['status'];
$ch = file_get_contents("SA3ED/$chat_id.txt");
$join = file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$ch&user_id=".$from_id);


if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
if($status != "creator" and $status != "administrator"){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
$get =bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"👤┇العضو ~⪼ [$first_name](t.me/$username)
⚠️┇يجب ان تشترك بالقناة لتكلم هنا
@$ch
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
sleep(10);
bot("deleteMessage",[
"chat_id"=>$chat_id,
"message_id"=>$get->result->message_id
]);return false;}}

if($status == "creator" or $status == "administrator" ){
$S = file_get_contents("SA3ED/S$chat_id $from_id.txt");
if($text == "تفعيل الاشتراك الاجباري"){
file_put_contents("SA3ED/S$chat_id $from_id.txt", "1");
file_put_contents("SA3ED/$chat_id.txt", "");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$first_name](tg:##user?id=$from_id) ؛ ❤️
- الان ارسل معرف قناة المجموعة التي لايمكن للاعضاء التكلم فيها الى بعد الاشتراك فيها ؛ ✅
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
if($text and $S == "1"){
file_put_contents("SA3ED/$chat_id.txt", "$text");
file_put_contents("SA3ED/S$chat_id $from_id.txt", "");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"- [$first_name](tg:##user?id=$from_id) ؛ ❤️

- تم حفظ قناة المجموعة بنجاح ؛ ✅

- الان تأكد من ان البوت ادمن في القناة لاعمل بالشكل الصحيح ؛ 👨‍✈️",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
if($text == "تعطيل الاشتراك الاجباري"){
file_put_contents("SA3ED/$chat_id.txt", "");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- [$first_name](tg:##user?id=$from_id) ؛ ❤️

- تم تعطيل البوت بنجاح ؛ ✅",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
]);
}
}

##♥





## setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text");
if($plus < 200) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
مقفول┇تم وضع ترحيب للمجموعه
",'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❕┇لا تستطيع وضع اكثر من 200 حرف",
  'reply_to_message_id'=>$message_id,
 
 ]);
}
}
}
}
## banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💯 لقد تم حظرك من البوت ♨️",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
	bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
  ]);
}
}
## sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($text != "🔙 رجوع") {	
bot('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
		bot('sendmessage',[       
		'chat_id'=>$chat_id,
		'text'=>"مقفول️ تم ارسال اقتراحك شكرا لك",
]);	
}
}

if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){  
if( $status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشىء](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
}
}
if($text == "تفعيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
}
}
if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"markdown"
,	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
}
}
if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"markdown"
,	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
}
}
if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){
if( in_array($from_id,$useradmin) and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"markdown"
,	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( in_array($from_id,$getCCmember) and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( in_array($from_id,$useradmin) and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
elseif ( strpos($text , 'وضع اعضاء') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['وضع اعضاء'],'',$text);
if($code <= 20 && $code >= 1){
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [$first_name](tg:##user?id=$from_id) 👷🏽
📡¦ تم وضع العدد *$code*
✓
",
'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⁉️┇يجب ان يكون العدد بين 1 إلى 20",
'reply_to_message_id'=>$message_id,
]);  
}
}
}
}
if($text== "قفل الروابط" or $text=="قفل روابط"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text=="قفل الروابط" or $text=="قفل روابط"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text=="قفل الروابط" or $text=="قفل روابط"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text=="قفل الروابط" or $text=="قفل روابط"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط" or $text=="قفل روابط"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط" or $text=="قفل روابط"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل البصمات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البصمات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البصمات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البصمات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البصمات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البصمات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البصمات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البصمات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البصمات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البصمات" ){if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البصمات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البصمات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البصمات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الصور" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل االصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الصور" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تفعيل الردود" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل االصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تعطيل الردود" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الملصقات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الملصقات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المتحركه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المتحركه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الدردشه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الدردشه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التاك" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التاك" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل البوتات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البوتات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الكلايش" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الكلايش" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التكرار" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التكرار" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التوجيه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التوجيه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الماركدوان" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الماركدوان" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الجهات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الجهات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الصور بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الصور بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تفعيل الترحيب" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تعطيل الترحيب" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل االصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تفعيل الايدي" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تعطيل الايدي" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الانجليزية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الانجليزية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل العربية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح العربية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المواقع" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المواقع" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الملفات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الملفات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الموسيقى" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الموسيقى" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الاشعارات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الاشعارات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل بصمة الفيديو" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح بصمة الفيديو" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الكل" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);

}
}
}
if($text== "قفل الكل" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الكل" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);

$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg:##user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);}
}
}
if($text== "فتح الكل" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if( $text == "تقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$useradmin) && !in_array($re_id,$getCCmember)) {
$add = $settings["information"]["added"];
if ($add == true){
  bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
     ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg:##user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم تقييد آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ لا يمكنك تقييد المنشئ , الادمن , المطور
🛠",
  'reply_to_message_id'=>$message_id,
 ]);
}
}
}
if ( strpos($text , "تقييد مدة") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
$we = str_replace(['تقييد مدة'],'',$text);
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg:##user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم تقييد آلعضـو بنجآح  لمدة $we دقيقة
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
     ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📛¦ حدود التقييد ,  يجب ان تكون ما بين  [1-1000]
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"👤¦ لا يمكنك تقييد المنشئ , الادمن , المطور
🛠",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
if( $text == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
     ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg:##user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم الغاء تقييد آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if( $text == "المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg:##user?id=$silent[$z])"."\n";
}
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [$first_name](tg:##user?id=$from_id) 👷🏽
📡¦ المقيدين
$result
✓
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif( $text == "مسح المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
     ]);
}
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
🙋🏼‍♂️¦ أهلا عزيزي [$first_name](tg:##user?id=$from_id) 👷🏽
📡¦ تم مسح المقيدين
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if( $rt && $text=="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
 bot('pinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$replyid
  ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"📌¦ تم تثبيت الرساله 
✓",
'reply_to_message_id'=>$message_id,
 ]);
 }
}
if(  $text=="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
 bot('unpinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$replyid
  ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"📌¦ تم الغاء تثبيت الرساله 
✓",
'reply_to_message_id'=>$message_id,
 ]);
 }
}
if ( strpos($text , 'وضع قوانين') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['وضع قوانين'],'',$text);
$plus = mb_strlen("$code");
if($plus < 600) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"مقفول┇تم وضع القوانين للمجموعه",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"مفتوح┇لايمكن وضع اكثر من 600 محرف",
  'reply_to_message_id'=>$message_id,
 ]);
}
}
}
}
if( $text=="القوانين"){
if ($tc == 'group' | $tc == 'supergroup'){  
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 
	 'reply_to_message_id'=>$message_id,
   ]);
   }   
else
{
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	 
	 'reply_to_message_id'=>$message_id,
   ]);
}
}
if (strpos($text , "وضع ترحيب ") !== false ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['وضع ترحيب'],'',$text);
$plus = mb_strlen("$we");
if($plus < 600) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☑┇تم وضع ترحيب للمجموعة
$we
",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
if( $rt && $text== "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$getCCmember) && !in_array($re_id,$useradmin)) {
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
  ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg:##user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم حـظـر آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
   ]);
   } 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ لا يمكنك حظر المنشئ , الادمن , المطور
🛠",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 if( $rt && $text== "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$getCCmember) && !in_array($re_id,$useradmin)) {
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
  ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg:##user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم الغاء حـظـر آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
   ]);
   } 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ لا يمكنك حظر المنشئ , الادمن , المطور
🛠",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 if( $rt && $text == "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$re_msgid
]);
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
 }
}
if (  strpos($text , 'تنظيف') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
$num = str_replace(['/rmsg ','تنظيف'],'',$text);
if ($num <= 100 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
          ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
⛑¦ تـم مسح ~⪼ { *$num* } من الرسائل  
✓
",'parse_mode'=>"markdown",
   ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
❕┇لا تستطيع حذف اكثر من 100 رساله
",
   ]);
}
}
}
if( $text=="الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "مفتوح") {
$getlink = file_get_contents("https:##api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
📮┇رابط المجموعه
$getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
 }
else
{
$getlink = file_get_contents("https:##api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
📮┇رابط المجموعه
$getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
 if( $text=="تحذير" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$useradmin) && !in_array($re_id,$getCCmember)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "بالتقييد"){
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
 }
else
{
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
     ]);
	 	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 }
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️┇خطأ لا يمكن تحذير الادمن  , المدير  , المطور ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
if($text=="مسح التحذير" && $rt ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم مسح تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 }
}
}
if ( strpos($text , 'وضع تحذير') !== false  ) {
$newdec = str_replace(['وضع تحذير'],'',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 👤┇تم تعيين عدد التحذيرات {*$newdec*}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
❕┇لا تستطيع وضع اكثر من 20 تحذير  
",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
}
}
elseif( $text=="تحذيراتي"){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸┇تحذيراتك *$warn* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }

elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$add = $settings["information"]["added"];
if ($add == true) {
	$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text

",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if($text == " $namebot غادر"){
if (in_array($from_id,$Dev)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
تم حظر المجموعة 
",
  'reply_to_message_id'=>$message_id,
   ]);
bot('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  }
}
  elseif(  $text == 'تعطيل' ){
  if (in_array($from_id,$Dev)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
📮¦ تـم تـعطيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم حذف جمـيع اوامر آلگروب بآلبوت 
 ✓
",
'reply_to_message_id'=>$message_id,
   ]);
unlink("data/$chat_id.json");
   }  
  }   
  elseif ( strpos($text , "وضع كلايش") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
$num = str_replace(['وضع كلايش '],'',$text);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
		  bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        💬┇بواسطه ~⪼ [$first_name](t.me/$username)
☑┇تم وضع عدد الكلايش $startlock
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}

}
}
  elseif($text=="الحماية" or $text=="الاعدادات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
$locklink = $settings["lock"]["link"];
$linkr = $settings["lock"]["linkr"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$en = $settings["lock"]["en"];
$ar = $settings["lock"]["ar"];
$spam = $settings["lock"]["spam"];
$rdodsg = $settings["lock"]["rdodsg"];
$photor = $settings["lock"]["photor"];
$markdowns = $settings["lock"]["markdowns"];
$farse = $settings["lock"]["farse"];
$tsmet = $settings["lock"]["tsmet"];
$lockbots = $settings["lock"]["bot"];
$lockbotsk = $settings["lock"]["botk"];
$lockforward = $settings["lock"]["forward"];
$lockforwardk = $settings["lock"]["forwardr"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$iduser = $settings["lock"]["iduser"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$gifr = $settings["lock"]["gifr"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$videor = $settings["lock"]["videor"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$text = str_replace("| فعال |","","⭕️اعدادات المجموعة
➖
👮🏾¦ اعدادات المجموعه : 

️⃣¦ التاك » { $locktag }
©¦ المعرفات » { $lockusername }
📝¦ التعديل » { $lockedit }
🔗¦ الروابط » { $locklink }
📹¦ المتحركه » { $lockgif }
📷¦ الصور » { $lockphoto }
🆔¦ الايدي » { $iduser }
💱¦ التكرار » { $spam }
🔊¦ الموسيقى » { $lockaudio }
🔈¦ البصمة » { $lockvoice }
📑¦ الكلايش » { $lockcharacter }
🕹¦ الالعاب » { $lockgame }
🔂¦ التوجيه » { $lockforward }
®¦ السيئات » { $lockfosh }
↩️¦ الرد » { $lockreply }
👤¦ الاشعارات » { $locktg }
📽¦ بصمة الفيديو » { $lockvideo_note }
🚩¦ الموقع » { $locklocation }
👁‍🗨¦ الجهات » { $lockcontact }
⚜️¦ الماركدوان » { $markdowns }
🔖¦ الردود { $rdodsg }
🎑¦ الملصقات » { $locksticker }
🅰¦ العربية » { $ar }
🈵¦ الاتجليزية » { $en }
💤¦ الدردشة » { $locktext }
🏌🏻¦ البوتات بالطرد » { $lockbotsk }
🤖¦ البوتات » { $lockbots }

💱¦ اعدادات التقـييد :

💢¦ التقييد بالتوجيه » { $lockforwardk }
📸¦ التقييد بالصور » { $photor }
🔗¦ التقييد بالروابط » { $linkr }
🎉¦ التقييد بالمتحركه » { $gifr }
🎥¦ التقييد الفيديو » { $videor }
");
$text2 = str_replace("| غیر فعال |","","$text");
bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
   ]);
}
}

if($text == "تفعيل" ) {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https:##api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
 ✓
",'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"",'url'=>"https:##t.me/bots_Syria"],['text'=>"$dataadd",'callback_data'=>"text"]
],
]
])
]); 
}
else
{
if($howmember >= 20){
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	
 ]); 
 bot('sendmessage',[
        'chat_id'=>$Dev[0],
        'text'=>" تم اضافة المجموعة إلى قائمة المجموعات ✅
➖➖➖➖➖
🚩معلومات المجموعة :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

", 
    ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
    $settings = '{"lock": {
            "text": "مفتوح",
            "photo": "مفتوح",
            "link": "مفتوح",
            "tag": "مفتوح",
			"username": "مفتوح",
            "sticker": "مفتوح",
            "video": "مفتوح",
            "voice": "مفتوح",
            "audio": "مفتوح",
            "gif": "مفتوح",
            "bot": "مفتوح",
            "forward": "مفتوح",
            "document": "مفتوح",
            "tgservic": "مفتوح",
			"edit": "مفتوح",
			"reply": "مفتوح",
			"contact": "مفتوح",
			"location": "مفتوح",
			"game": "مفتوح",
			"cmd": "مفتوح",
			"spam": "مفتوح",
			"mute_all": "مفتوح",
			"mute_all_time": "مفتوح",
			"markdowns": "مفتوح", 
            "fosh": "مفتوح",
            "farse": "مفتوح",
			"lockauto": "مفتوح",
			"lockcharacter": "مفتوح",
			"video_msg": "مفتوح"
		},
		"information": {
        "added": "true",
		"welcome": "مفتوح",
		"add": "مفتوح",
		"ar": "مفتوح",
		"en": "مفتوح",
		"tsmet": "مفتوح",
            "iduser": "مقفول",
		"rdodsg": "مفتوح",
		"lockchannel": "مفتوح",
		"hardmodebot": "مفتوح",
		"hardmodewarn": "بالتقييد",
		"charge": "999 يوم",
		"setadd": "3",
		"dataadded": "",
		"expire": "",
		"textwelcome": "اهلا بك عزيزي",
		"rules": "⚜┇لم يتم حفظ قوانين للمجموعه",
		"msg": "",
		"timelock": "00:00",
		"timeunlock": "00:00",
		"pluscharacter": "300",
		"downcharacter": "0",
		"setwarn": "3"
		}
}';
    $settings = json_decode($settings,true);
	$settings["information"]["expire"]="$next_date";
	$settings["information"]["dataadded"]="$dateadd";
	$settings["information"]["msg_id"]="$message_id";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
if ($add != true) {
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
🚸¦ لآ يمـگنني تفعيل آلبوت في آلمـجمـوعهہ‏ يجب آن يگون آگثر مـن 【*20*】 عضـو 👤
",
  'reply_to_message_id'=>$message_id,
	  	  'reply_markup'=>json_encode([
'inline_keyboard'=>[
 	[
['text'=>"📢 تابع جديدنا 📢",'url'=>"https:##t.me/HL_BG"]
  ],
   ]
   ])
 ]); 
}
}
}
}
}
##add
if ( $text == "تفعيل") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	
 ]);  
 		        bot('sendmessage',[
        'chat_id'=>$Dev[0],
        'text'=>"تم اضافة مجموعة جديدة بواسطة المشرف ✅
➖➖➖➖➖
🚩معلومات المجموعة  :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

بواسطة : [ @$username ] 
", 
    ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
    $settings = '{"lock": {
            "text": "مفتوح",
            "photo": "مفتوح",
            "link": "مفتوح",
            "tag": "مفتوح",
			"username": "مفتوح",
            "sticker": "مفتوح",
            "video": "مفتوح",
            "voice": "مفتوح",
            "audio": "مفتوح",
            "tsmet": "مفتوح",
            "iduser": "مفتوح",
            "gif": "مفتوح",
            "bot": "مفتوح",
            "forward": "مفتوح",
            "document": "مفتوح",
            "tgservic": "مفتوح",
			"edit": "مفتوح",
			"reply": "مفتوح",
			"contact": "مفتوح",
			"location": "مفتوح",
			"game": "مفتوح",
			"cmd": "مفتوح",
			"en": "مفتوح",
			"ar": "مفتوح",
			"rdodsg": "مقفول",
			"spam": "مفتوح",
			"mute_all": "مفتوح",
			"mute_all_time": "مفتوح",
			"markdowns": "مفتوح", 
            "fosh": "مفتوح",
            "farse": "مفتوح",
			"lockauto": "مفتوح",
			"lockcharacter": "مفتوح",
			"video_msg": "مفتوح"
		},
		"information": {
        "added": "true",
		"welcome": "مفتوح",
		"add": "مفتوح",
		"lockchannel": "مفتوح",
		"hardmodebot": "مفتوح",
		"hardmodewarn": "بالتقييد",
		"charge": "999 يوم",
		"setadd": "3",
		"spamx": "5",
		"dataadded": "",
		"expire": "",
		"msg": "",
		"timelock": "00:00",
		"timeunlock": "00:00",
		"pluscharacter": "300",
		"downcharacter": "0",
		"textwelcome": "اهلا بك عزيزي",
		"rules": "⚜┇لم يتم حفظ قوانين للمجموعه",
		"setwarn": "3"
		}
}';
    $settings = json_decode($settings,true);
	$settings["information"]["expire"]="$next_date";
	$settings["information"]["dataadded"]="$dateadd";
	$settings["information"]["msg_id"]="$message_id";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"",'reply_to_message_id'=>$message_id,
 ]); 
}
}
}
}
if($text=="/start" &&  $tc == "private"){
if (!in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💯¦ مـرحبآ آنآ بوت آسـمـي $namebot 🎖
💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
🚸¦ البوت خدمي ومتاح للكل 
👷🏽¦ فقط اضف البوت لمجموعتك وارفعه مشرف  
  ثم ارسل تفعيل

⚖️¦ مـعرف آلمـطـور  : @$userbot
👨🏽‍🔧
",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"آلـمـطـور ™",'url'=>"t.me/$userbot"]],
]])
]);
}}
if( $text=="/start" &&  $tc == "private" or $text=="🔙  رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🤖 تعيين اسم للبوت 🤖"],['text'=>"👮‍♂ تعيين كليشة مطور"]
],
[
['text'=>"🚷 حظر عام 🚷"],['text'=>"🚷 الغاء حظر عام 🚷"]
],
[
['text'=>"🔊 اضف رد عام 🔊"],['text'=>"🔊 حذف رد عام 🔊♂"]
],
[
['text'=>"🔉 الردود العامة 🔉"]
],
[
['text'=>"🔉 مسح الردود 🔉"]
],
[
['text'=>"❗️حظر مجموعة❗️"],['text'=>"📊 الاحصائيات 📊"]
],
[
['text'=>"🔈 اذاعة بالمجموعات🔈"],['text'=>"🔈 اذاعة بالخاص🔈"]
],
[
['text'=>"🔊 توجيه بالمجموعات"],['text'=>"توجيه بالخاص 🔊"]                            
],
],
  'resize_keyboard'=>true
])
]);
}
}
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "🤖 تعيين اسم للبوت 🤖" and in_array($from_id,$Dev)){
file_put_contents("setname.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل الاسم  للبوت 
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $setnamebot =="nam" and in_array($from_id,$Dev)){
file_put_contents("namebot.txt",$text); 
file_put_contents("setname.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "✓ تم اضافت اسم للبوت 🚀 
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

if($text == "بوت" || $text == "شسمك"){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اسمي $namebot 🌚🌸"
,'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
]);}}

$message = $update->message;
$arr = array('اجيت اجيت كافي لتصيح 🌚👌',
'اسويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑',
);
$arr1 = array_rand($arr,true);
if($message){

$get = file_get_contents("msg.txt")+1; 
file_put_contents("msg.txt",$get); 
if ($settings["lock"]["rdodsg"] == "مقفول️"){
if($get == "5" or $text == $namebot ){
if ($tc == 'group' | $tc == 'supergroup'){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>$arr[$arr1],
 'reply_to_message_id'=>$message_id,
]);
} 
}
}
}
$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "👮‍♂ تعيين كليشة مطور" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل كليشة المطور
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "✓ تم اضافت كليشة المطور 🚀 
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" ){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}

if($text=="🚷 حظر عام 🚷" && $tc == "private" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل حظر عام + الايدي
√
",
]);}
elseif( strpos($text , "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['حظر عام'],'',$text);
$stat = file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if($text=="🚷 الغاء حظر عام 🚷" && $tc == "private" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل الغاء حظر عام + الايدي
√
",
]);}
elseif ( strpos($text , "الغاء حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['الغاء حظر عام'],'',$text);
$stat = file_get_contents("https:##api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم الغاء حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text == "المحظورين عام" or $text == "🚫 المحظورين عام 🚫") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
☑┇قائمة المحظورين

$result
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif($text=="❗️حظر مجموعة❗️" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل غادر + ايدي مجموعة
√
",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($text , "غادر" ) !== false ) {
$text = str_replace(['غادر'],'',$text);
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ تم مغادرة المجموعة بنجاح
√
",
  ]);
bot('LeaveChat',[
  'chat_id'=>$text,
  ]);
unlink("data/$text.json");
}
}
}
elseif($text=="📊 الاحصائيات 📊"){
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
			bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🤖 الاحصائيات هي :

👥 عدد المجموعات: $group

👤 عدد المستخدمين: $users
",
            'hide_keyboard'=>true,
	]);
	}
elseif ($text == '🔈 اذاعة بالخاص🔈' && in_array($from_id,$Dev)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
  'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text == '🔈 اذاعة بالمجموعات🔈' && in_array($from_id,$Dev)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
  'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text == '🔊 توجيه بالمجموعات' && in_array($from_id,$Dev)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"🔊 توجيه بالمجموعات",
  'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text == 'توجيه بالخاص 🔊' && in_array($from_id,$Dev)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
			  'reply_to_message_id'=>$message_id,
			   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}


elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"تم ارسال الرسالة بنجاح مقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>" تم ارسال الرسالة بنجاحمقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"تم ارسال رسالتك بنجاح مقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
 bot('sendmessage',[
      'chat_id'=>$numbers[$z],        
	  'text'=>"$text",
    ]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"تم ارسال رسالتك بنجاح مقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
 bot('sendmessage',[
      'chat_id'=>$numbers[$z],        
	  'text'=>"$text",
    ]);
}
}
}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;

/*
الاوامر كتٱلي : 
- اضف رد ، مسح رد ، الردود ، مسح الردود 
- اضف رد عام ، مسح رد عام ، الردود العامه ، مسح الردود العامه
*/

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);



if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد"){
	
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	$str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💬¦ هذا الرد ليس مضاف في قائمه الردود 📛*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}


if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🚸¦ لا يوجد ردود مضافه حاليا 
❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if(in_array($from_id,$Dev)){
if($text == "اضف رد عام" || $text == "🔊 اضف رد عام 🔊"){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");

 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 	file_put_contents("data/addrd/opption.txt","I_BADLZ");
     file_put_contents("data/addrd/mod.txt",$text);
     file_put_contents("data/addrd/media/media.txt",$text);
     file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 
 if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
  file_put_contents("data/addrd/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/mod.txt","");
   file_put_contents("data/addrd/media/media.txt","");
   file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد عام" || $text == "🔊 حذف رد عام 🔊♂" ){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	$str = str_replace("- $text","",$I_get_rd);
     file_put_contents("data/addrd/getrd.txt",$str);
      file_put_contents("data/addrd/from_id.txt","");
      file_put_contents("data/addrd/opption.txt","");
 	unlink("data/addrd/$text.txt");
     unlink("data/addrd/media/$text.txt");
     unlink("data/addrd/media/sticker/$text.txt");
     unlink("data/addrd/media/video/$text.txt");
     unlink("data/addrd/media/videonote/$text.txt");
     unlink("data/addrd/media/document/$text.txt");
     unlink("data/addrd/media/photo/$text.txt");
     unlink("data/addrd/media/audio/$text.txt");
     unlink("data/addrd/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
	file_put_contents("data/addrd/from_id.txt","");
    file_put_contents("data/addrd/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*🚸¦ لا يوجد ردود مضافه حاليا *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح الردود العامه" || $text == "🔉 مسح الردود 🔉"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}


if($text == "الردود العامه" || $text == "🔉 الردود العامة 🔉" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ الردود العامه في البوت :

$I_get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود العامه" || $text == "🔉 الردود العامة 🔉"and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🚸¦ لا يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}


if($message->text and file_exists("data/addrd/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }

$betr = str_replace("كشف","$betr",$text); 
if($text == "كشف $betr"){
$dets = json_decode(file_get_contents("http:##api.telegram.org/bot$token/getChat?chat_id=$betr"));
$name =$dets->result->first_name;
$id =$dets->result->id;
$user =$dets->result->username;
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"•*المعلومات*•~⪼
الاسم: $name 
المعرف: @$user
 الايدي: `$id`
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
]);
}
if($rt && $text == "كشف"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"•*المعلومات*•~⪼
الاسم: $re_name 
المعرف: @$re_user
 الايدي: `$re_id`
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
]);
}

if($text == " مـَسّـِآء الـخّـيًــر" || $text == " مَـــسُأُء أَلَــوّورّد " || $text == "مساء الخير" || $text == "مسا الخير"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>"https:##t.me/shehad2/8036",
 'reply_to_message_id'=>$message_id,
]);}}}
$rand = array('مزاج 🚶','في مانع 😒','صنافه','مدري لَيــِْ♡̷̴̬̩̃̊ـِْش😹😔','خلاص دامك ماتعرف اسكت لٱ تسئل 😹🐸');
$ra = array_rand($rand, 1);
if($text ==  "ليش"or $text =="لَيــِْ♡̷̴̬̩̃̊ـِْش "){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('انَـَY̷ ̜̩̐̌̋O̷ ̜̩̐̌̋U̷ ̜̩̐̌̋ـَتَ الاجمل👍🌷','كـ جمالك حب 😘','مثلك 😍');
$ra = array_rand($rand, 1);
if($text == 'جميل'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('شو تسويها🙁','يله خلينا نشوف');
$ra = array_rand($rand, 1);
if($text == 'اسويها'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if(preg_match('/^(.*)(م̷ـــِْن امس|من امس|امس |قبل يومين )(.*)/',$text) ){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
حاول الان حب لاتيئس ☹",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "ضابح" or $text == "ضايج"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"روح انتحر🌚🌷",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "🚶‍♂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ع وين😉",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "😂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لف اسنانك😚فضحتنا بين الأجانب😢",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "طمام"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي زحاوق😋لرجع وماهي جاهزه😒😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if(preg_match('/^(.*)(ملف ردود|بوت ردود|ردود|ملف بوت ردود)(.*)/',$text) ){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ها حب تريد ملفي 😔رح اعطيك تَعاّإاّإلّ خاص 🚶
بس ارسل الملف", 
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$rand = array('احسن 😌مو لآزٍمٍ تدري بكل جديد','كلشي انت متعرفه اصلا 😴','م̷ـــِْن مِِـتــ ؟؟! ـى عرفت شي انت بدون ماعلمك 😔😹','عمرك لادريت ☹');
$ra = array_rand($rand, 1);

if($text == 'مدري'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
if($text == "مالك"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مدري🤷‍♂سئل نفسك",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "وش"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي الدقل. خل نسمع الاخبار📻😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "فهمت"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اكييد😌",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "ممكن طلب"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اتفظل بس لاتطلب حسابات🙂",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "😏"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وش فْيَگ روح اقرب عياده استلم علاجك😬",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array('بويش تفكر شاركنا 🚶','لٱ تروح بعيد خلك معنا 🐸','شو مافهمت 🙄');
$ra = array_rand($rand, 1);

if($text == '🤔'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('معك حب شو تريد🙂','موجود ماتشوفني يعني 😕','مشغولين حب 😔بقي انت ماعندك شغل');
$ra = array_rand($rand, 1);

if($text == 'وينكم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}}}
if($text == "تعال"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجيك خاص😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "تعال خاص"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🤭😐😑",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array(' دِْۈۈۈۈم/يّارٌب ماتفارقك العافيه 😘ْ','يستاهل الحمد🙌','❤️');
$ra = array_rand($rand, 1);

if($text == 'الحمد لله'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('ع الجميع 🌹','علينا وعليكم 
اكثرو م̷ـــِْن الصلاة ع النبي واله 💐','اغنم حبي ودعي ليـّۓ معاك 🌺');
$ra = array_rand($rand, 1);

if($text == 'جمعه مباركه'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('هاا گـّيَفْ الـّحـّال ٱن شـْاءِ اللـٌہ بَخـّيَرٌ 🙂','وينك مغيب غلا 😉');
$ra = array_rand($rand, 1);

if($text == 'وعليكم السلام'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('🌺⌣{يـّـٌدِْۈۈ/عّزٌگ-ۈنَبْضّ قَلبْگ/ۈۈمْ}⌣ 🍂','تدوم العافيه عليك غلا 🤓');
$ra = array_rand($rand, 1);

if($text == 'دووم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}}}
$rand = array('الْحٍمَدٍ للـّہ🌹
     وانت😘','بخيـــ😃ــر دامـّگ بـْخـّيرٌ يـّٱلـّغـٌالـّے 🌾');
$ra = array_rand($rand, 1);

if($text == 'كيفك'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
if($text=="م1"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
⚡️ اوامر حماية المجموعه ⚡️
🗯¦ـ➖➖➖➖
🗯¦ قفل «» فتح •⊱ التعديل  ⊰•
🗯¦️ قفل «» فتح •⊱ البصمات ⊰•
🗯¦ قفل «» فتح •⊱ الــفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الماركدوان ⊰•
🗯¦ قفل «» فتح •⊱ الـصــور ⊰•
🗯¦ قفل «» فتح •⊱ الملصقات ⊰•

🗯¦ قفل «» فتح •⊱ المتحركه ⊰•
🗯¦ قفل «» فتح •⊱ الدردشه ⊰•

🗯¦ قفل «» فتح •⊱ الروابط ⊰•
🗯¦ قفل «» فتح •⊱ التاك ⊰•
🗯¦ قفل «» فتح •⊱ البوتات ⊰•
🗯¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ قفل «» فتح •⊱ البوتات بالطرد ⊰•
🗯¦ قفل «» فتح •⊱ الكلايش ⊰•
🗯¦️ قفل «» فتح •⊱ التكرار ⊰•
🗯¦ قفل «» فتح •⊱ التوجيه ⊰•
🗯¦ قفل «» فتح •⊱ العربية ⊰•
🗯¦ قفل «» فتح •⊱ الاجنبية ⊰•
🗯¦ قفل «» فتح •⊱ الرد ⊰•
🗯¦ قفل «» فتح •⊱ المواقع ⊰•
🗯¦ قفل «» فتح •⊱ العربية ⊰•
🗯¦ قفل «» فتح •⊱ الاشعارات ⊰•
🗯¦ قفل «» فتح •⊱ الجهات ⊰•
🗯¦ قفل «» فتح •⊱ الموسيقى ⊰•
🗯¦ قفل «» فتح •⊱ بصمة الفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الــكـــل ⊰•
🔅¦ـ➖➖➖➖➖
📲¦ قفل «» فتح •⊱ التوجيه بالتقييد ⊰•
🔗¦ قفل «» فتح •⊱ الروابط بالتقييد ⊰•
📀¦ قفل «» فتح •⊱ المتحركه بالتقييد ⊰•
📸¦ قفل «» فتح •⊱ الصور بالتقييد ⊰•
📽¦ قفل «» فتح •⊱ الفيديو بالتقييد ⊰•
🔅¦ـ➖➖➖➖➖
📌¦ تفعيل «» تعطيل •⊱  الترحيب ⊰•

🗯¦ تفعيل «» تعطيل •⊱  الاعضاء ⊰
🗯¦ تفعيل «» تعطيل •⊱  الردود ⊰•
📢¦ تفعيل «» تعطيل •⊱  الاشتراك الاحباري ⊰•
🗨¦ تفعيل «» تعطيل •⊱  الايدي ⊰•
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ @XTXTB
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
if($text=="م2"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
•⊱ {  آوآمر الرفع والتنزيل  } ⊰•


⚗¦ رفع مدير ‿ تنزيل مدير
📿¦ رفع ادمن ‿ تنزيل ادمن 
💈¦ رفع مميز ‿ تنزيل مميز 

⦅ ꯭آو꯭آم꯭ـر آ꯭لم꯭ـس꯭ـح꯭ للم꯭ـنش꯭ـى꯭ ⦆

🗑¦ مسح الادمنيه •⊱ لمسح الادمنيه 
🗑¦ مسح المميزين •⊱ لمسح الاعضاء المميزين 
🗑¦ مسح المدراء •⊱ لمسح المدراء 

⦅آوآمـر آلحظـر وآلطــرد وآلتقييـد  ⦆
      
💢¦ حظر بالمعرف •⊱ لحظر العضو
🔱¦ حظر (بالرد) •⊱ لحظر العضو  
🌀¦ تقييد (بالرد) •⊱ لتقييد العضو
🚸¦ الغاء الحظر (بالرد) •⊱ لالغاء الحظر 
📵¦ كتم بالرد •⊱ لكتم العضو 
♨️¦ الغاء كتم بالرد •⊱ لالغاء الكتم 
〰¦  
 التقييد (بالرد) •⊱ لالغاء تقييد العضو 
 🚫¦ فلترة + الكلمه •⊱ لمنع كلمه داخل المجموعه
⭕️¦ الغاء فلترة •⊱ لالغاء منع الكلمه بالمجموعه
⭕️¦ قائمة الفلتر •⊱ لعرض الكلمات الممنوعة
🗑¦ مسح الفلاتر •⊱ لمسح الفلاتر الممنوعة

🗯┇ راسلني للاستفسار 💡↭ @XTXTB
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
if($text=="م3"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖
💭¦ وضع ترحيب + الترحيب ↜ لوضع ترحيب  
💭¦ وضع تكرار + العدد ↜ لوضع تكرار
💭¦ وضع تحذيز + العدد ↜ لوضع تحذيرات
💭¦ وضع اعضاء + العدد ↜ لتحديد العدد الاضافة  
💭¦ وضع قوانين + القوانين :↜ لوضع القوانين 
💭¦ الـرابـط :↜  لعرض الرابط  
💭¦ تحذيراتي ↜ لعرض تحذيراتك
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ القوانين : لعرض  القوانين 
🗯¦ الادمنية : لعرض  الادمنيه 
🗯¦ المدراء : لعرض  الاداريين 
🗯¦ المحظورين •⊱ لعرض القائمة
🗯¦ المقيدين :↜لعرض  المقيدين 
🗯¦ المطور : لعرض معلومات المطور 
🗯¦ ايدي :↜لعرض معلوماتك  
🗯¦ الاعدادات : لعرض اعدادات المجموعه 
🗯¦ اضف رد  : لاضافة الرد
🗯¦ مسح رد  : لحذف الرد
🗯¦ الردود  : للعرض الردود
🗯¦ مسح الردود  : للمسح الردود
➖➖➖➖➖➖➖
🗯¦ راسلني للاستفسار 💡↭ @XTXTB
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}

if($text=="م4"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"📮¦ الاوامر الإضافية للسورس
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
📛¦ حذف + العدد •⊱ لحذف الرسائل
⛓¦ معلوماتي ↭ لُْعرض معلوماتك

➖➖➖➖➖
 ‌‌‏❋¦ رآسـلني للآسـتفسـآر ☜ { @XTXTB } ✓
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}

if($text=="م5"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
📛¦ اوامر التقييد بالقفل والفتح
➖➖➖➖➖

💢¦ قفل ↭ فتح  الروابط بالتقييد
💢¦ قفل ↭ فتح  المعرفات بالتقييد
💢¦ قفل ↭ فتح  التوجيه بالتقييد
💢¦ قفل ↭ فتح  البوتات بالتقييد
💢¦ قفل ↭ فتح  التعديل بالتقييد
💢¦ قفل ↭ فتح  الماركدون بالتقييد
💢¦ قفل ↭ فتح  الصوت بالتقييد
💢¦ قفل ↭ فتح  البصمات بالتقييد
💢¦ قفل ↭ فتح  الملفات بالتقييد
💢¦ قفل ↭ فتح  الجهات بالتقييد
💢¦ قفل ↭ فتح  الملصقات بالتقييد
💢¦ قفل ↭ فتح  الصور بالتقييد

➖➖➖➖➖
 ‌‌‏❋¦ رآسـلني للآسـتفسـآر ☜ { @XTXTB } ✓",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}

if($text=="م المطور"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
🔘¦ اوامر المطور الاساسي
➖➖➖➖➖
🔅¦ وضع اسم: البوت للتغيير
🔅¦ تحديث: لتحديث ملفات البوت
🔅¦ رفع او تنزيل : مطور { بالرد }
🔅¦ حظر عام: لحظر العضو
🔅¦ المطورين: لعرض المطورين ، 
🔅¦ الادمنيه : لعرض الُادمنيه
🔅¦ تعين الايدي:للتعيين والضبط
🔅¦ مسح الايدي : للاستعادة 

🔅¦ تعيين كلايش المطور:للعرض
🔅¦ الاحصائيات : لعرض الاحصائيات
🔅¦ مسح المطورين:لمسح المطورين ،! 

➖➖➖➖➖
 ‌‌‏❋¦ رآسـلني للآسـتفسـآر ☜ { @XTXTB } ✓",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}

if($text=="الاوامر"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
❂

 ‌‌‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‌‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلحمـآيهہ‌‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‌‏
🛡¦ م3 » آوآمـر آلآدآرهہ‌‏
📮¦ م4 الاوامر الاضافية
🔅¦ م5 ↭ اوامر التقيد
🕹¦ م المطور »  آوآمـر آلمـطـور
⚡️¦ اوامر الرد » لآضـآفهہ‌‏ رد مـعين
⚙¦ الاعدادات » لآدآرهہ‌‏ حماية آلبوت

 ‌‌‏❋¦ رآسـلني للآسـتفسـآر ☜ { @XTXTB } ✓
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$buyy          = "@XTXTB"; ## معرفك
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ## ايدي بوتك .
$from_id     = $message->from->id;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user      = $update->message->reply_to_message->from->username;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$s = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];

mkdir("banduser");
$get_Busers = file_get_contents("banduser/$chat_id.txt");
$get_Buser = explode("\n",$get_Busers);

$kick = explode(" " ,$text);
if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($kick[0] == "طرد" || $kick[0] == "حظر" and isset($kick[1])){
$text = str_replace(['حظر ','طرد '],'',$text);
$stat = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($text != $sudo && $text != $buyy && !in_array($text,$dev) and !in_array($text,$manger) and !in_array($text,$getCCmember) and !in_array($text,$dev_) and !in_array($text,$manges) and !in_array($text,$getCmember)){
if(strpos($text ,"@") !== false and !in_array($text,$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . $text ."\n" , FILE_APPEND);}
if($stat !== false and !in_array("@$username",$get_Buser)){
file_put_contents("banduser/$chat_id.txt","\n" . "@$username" ."\n" , FILE_APPEND);}

bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>"
💬┇العضو ~⪼ *$text*
☑┇تم حظره بنجاح
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
}
}
}

if(in_array("@$user",$get_Buser)){
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}

if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
$text = str_replace('الغاء حظر ','',$text);

$stat = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];

if($stat != false and in_array("@$username",$get_Buser)){
$str2 = str_replace("@$username",'',$get_Busers);
$ex2 = explode("\n",$str2);
file_put_contents("banduser/$chat_id.txt",$ex2);}

if(strpos($text ,"@") !== false and in_array($text,$get_Buser)){
$str = str_replace("$text",'',$get_Busers);
$ex = explode("\n",$str);
file_put_contents("banduser/$chat_id.txt",$ex);}

bot('promoteChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'can_send_messages'=>true,
  ]);
bot('sendmessage', [
 'chat_id' => $chat_id,
 'text'=>"
💬┇العضو ~⪼ *$text*
☑┇تم الغاء حظره بنجاح
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
}
if($text == "مسح المحظورين"){
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌤¦ تم مسحّ قائمه المحظورين ،🦄'",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
}

if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"☑️¦ قائمه الاعضاء المحظورين :
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🔰¦ لٱيوجد محظورين ،💘💘''",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}


if($type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($kick[0] == "طرد" || $kick[0] == "حظر" and isset($kick[1])){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍟¦ ليس لديك صلاحيٱت ، حظر او الغاء حظر .",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍟¦ ليس لديك صلاحيٱت ، حظر او الغاء حظر .",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}
}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ##ايدي بوتك .
$from_id     = $message->from->id;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$from_user = $message->from->username;
$first_name = $update->message->from->first_name;
$mid = $message->message_id;
$type       = $update->message->chat->type;

$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$get_l = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info_l = json_decode($get_l, true);
$re_rou = $info_l['result']['status'];
$s = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];

$i_Badlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
mkdir("miss");
mkdir("miss/$chat_id");

$reply = $update->message->reply_to_message;
$get_miss = file_get_contents("miss/$chat_id/miss.txt");
$miss = explode("\n",$get_miss);

if($type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
if($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين"){
$str = str_replace(" ", $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم مسح المكتومين بواسطةه »$first_name *
*📎¦ معرفه » *[@$user] ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($reply and $text=="كتم"){
if($re_id == $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المطور الاساسي ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المطورين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المدراء ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم المنشئ ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني كتم الادمن ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($i_Badlz,$miss)){
file_put_contents("miss/$chat_id/miss.txt",$i_Badlz ."\n",FILE_APPEND);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $i_Badlz )
🕎¦ تم كتمه من المجموعه ، مشاهدةهہ ممتعه٬
",'reply_to_message_id'=>$message->message_id,]);
 }
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and in_array($i_Badlz,$miss)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*⚜¦ العضو الذي تحاول كتمه ،
❗️¦ تم كتمه بالفعل ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,]);
}
}

if($reply and $text=="الغاء الكتم" || $text == "الغاء كتم"){
if($re_id == $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المطور الاساسي ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المطورين ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if(in_array($re_id,$manger) and !in_array($re_id,$dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المدراء ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم المنشئ ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌤¦ انٱ لايمكنني الغاء كتم الادمنيه ،🖤.
➖",'reply_to_message_id'=>$message->message_id,]);}
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and in_array($i_Badlz,$miss)){
$str = str_replace($i_Badlz,"",$get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⚜¦ العضو » @$TlllllT
▪️¦ الايدي » ( $i_Badlz )
🕎¦ تم الغاء كتمه من المجموعه ،!",'reply_to_message_id'=>$message->message_id,]);
}
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($i_Badlz,$miss) ){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*⚜¦ العضو الذي تحاول الغاء كتمه ،
❗️¦ تم الغاء كتمه بالفعل ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,]);
}
}
}
} 
  
  
if ($type == "supergroup" and $bot == "administrator"){ 
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if($reply and $text == "الغاء كتم" || $text == "الغاء االكتم"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات الغاء الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($reply and $text == "كتم"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text and in_array($from_id, $miss)){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
if($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜¦ المعذرهہ ، ليس لديك صلاحيات مسح المكتومين ∅*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
}
}
  
$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ##ايدي بوتك .
$from_id     = $message->from->id;
$from_user = $message->from->username;
$type       = $update->message->chat->type;

$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];

$GG_1_ZZ = $message->message_id;
$del = explode(" " ,$text);

if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {

if($del[0] == "حذف" and isset($del[1]) and $del[1] < 101){

for($i = $GG_1_ZZ - $del[1] ; $i < $GG_1_ZZ ;$i++){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id' =>$i,
]);
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"📬¦ تم حذف $del[1] رسالةه من المجموعه،🖤'",
'reply_to_message_id'=>$message->message_id,
]);
}
if($del[0] == "حذف" and isset($del[1]) and $del[1] > 101){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🔰¦ المعذرهہ ، لا استطيع حذف اكثر من 100 رسالةه !",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" and $JJ117 != "administrator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger)) {

if($del[0] == "حذف" and isset($del[1]) and $del[1]){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌤¦ المعذرهہ ، انت لاتمتلك صلاحيات مسح الرسائل !",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ##ايدي بوتك .
$from_id     = $message->from->id;
$user_ibadlz = $message->from->username;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$fwdbadlz = $message->forward_from->id;
$fwdibadlz = $message->forward_from->username;
$type       = $update->message->chat->type;

$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$s = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];

mkdir("data");
mkdir("data/bans");

$getbansibadlz = file_get_contents("data/bans/bans.txt");
$getmohamed = file_get_contents("data/bans/ban.txt");
$bansiBadlz = explode("\n",$getbansibadlz);
$MoHaMMedBaNd = file_get_contents("data/bans/band.txt");

if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $from_id == $sudo || in_array($from_id,$dev)) {

if($re and $text == "حظر عام" and !in_array($re_id,$bansiBadlz)){
	file_put_contents("data/bans/bans.txt","\n".$re_id , FILE_APPEND);
	file_put_contents("data/bans/band.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"💘¦ العضو » [@$re_user]
📚¦ الايدي » { $re_id }
🔰¦ تمہ حظره عٱم'",
'reply_to_message_id'=>$message->message_id,
    ]);
    }
    if($re and $text == "حظر عام" and in_array($re_id,$bansiBadlz)){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"💘¦ العضو » [@$re_user]
📚¦ الايدي » { $re_id }
🔰¦ تمہ حظره عٱم مسبقٱ'",
'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
    if($re and $text == "الغاء العام"){
	$iBadlz = file_get_contents("data/bans/bans.txt");
	$iiBadlz = file_get_contents("data/bans/band.txt");
	$striBadlz = str_replace($re_id,"",$iBadlz);
	$no = explode("             \n",$iiBadlz);
	$striiBadlz = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$no);
	file_put_contents("data/bans/bans.txt",$striBadlz);
	file_put_contents("data/bans/band.txt",$striiBadlz);
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"تم الغاء حظر العضو واخيرا صار مؤدب",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
if(!$re and $text == "الغاء العام"){
    file_put_contents("data/bans/ban.txt","MoHaMMedSAMI");	
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"قم بعمل توجيه من رسٱئل العضو",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
if($text and $getmohamed == "MoHaMMedSAMI"){
    $iBadlzz = file_get_contents("data/bans/bans.txt");
    $iiBadlz = file_get_contents("data/bans/band.txt");
    $no = explode("             \n",$iiBadlz);
	$striBadlzz = str_replace($fwdbadlz,"",$iBadlzz);
	$striiBadlz = str_replace(" *𓆩* [" . "@". $fwdibadlz ."] *𓆪* " . "»" . " *𓆩* `". $fwdbadlz ."` *𓆪* ","",$no);
	file_put_contents("data/bans/bans.txt",$striBadlzz);
	file_put_contents("data/bans/band.txt",$striiBadlz);
	file_put_contents("data/bans/ban.txt","");
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"تم الغاء حظر العضو واخيرا صار مؤدب",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
	
  if( !$re and $text == "حظر عام"){
	file_put_contents("data/bans/ban.txt","MoHaMMed");
	bot("SendMessage",[
	'chat_id'=>$chat_id,
    'text'=>"- فقط قم بٱرسال ايدي هذا الشخص ،💘'",
    'reply_to_message_id'=>$message->message_id,
    ]);
    }
    
if($text and $getmohamed == "MoHaMMed" and !in_array($text,$bansiBadlz)){
	file_put_contents("data/bans/bans.txt" , "\n" . $text , FILE_APPEND);
	file_put_contents("data/bans/band.txt" , " *𓆩* [" . "@"." بدون معرف "."] *𓆪* " . "»" . " *𓆩* `". $text ."` *𓆪* ". "\n" , FILE_APPEND);
	file_put_contents("data/bans/ban.txt","");
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📚¦ الايدي تم حظره عام من القروبات ،🖤'",'reply_to_message_id'=>$message->message_id,]);
  }
  if($text and $getmohamed == "MoHaMMed" and in_array($text,$bansiBadlz)){
	file_put_contents("data/bans/ban.txt","");
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📚¦ الايدي تم حظره عام من القروبات مسبقٱ،🖤'",'reply_to_message_id'=>$message->message_id,]);
  }
    
  if($text == "مسح العام" || $text == "مسح قائمه العام" || $text == "مسح المحظورين عام"){
  	file_put_contents("data/bans/bans.txt","");
  file_put_contents("data/bans/band.txt","");
  	bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🌈¦ تم مسح قٱئمةه المحظورين عام ،🌤'",'reply_to_message_id'=>$message->message_id,]);
  }
  
  if($text == "المحظورين عام" || $text == "قائمه العام" and $getbansibadlz != null and $getbansibadlz != "" and $getbansibadlz != " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📋¦ قائمه العام :*

$MoHaMMedBaNd\n",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المحظورين عام" || $text == "قائمه العام" and $getbansibadlz == null || $getbansibadlz == "" || $getbansibadlz == " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📋¦ قائمه العام :*

*📛| Not pands ~⪼ لا يوجد محظورين !*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}
}
if ($type == "supergroup" and $bot == "administrator"){
if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev) and !in_array($from_id,$manger)){
if(in_array($from_id,$bansiBadlz)){
    	bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
      ]);
      bot('sendmessage',['chat_id'=>$chat_id,'text'=>"💘¦ العضو » [@$user_ibadlz]
📚¦ الايدي » { $from_id }
🔰¦ متبند عٱم ، تمہ حظره ،📻'
",'reply_to_message_id'=>$message->message_id,]);
  }
  }
  }
  
$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ##ايدي بوتك .
$from_id     = $message->from->id;
$from_user = $message->from->username;
$video3      = $update->edited_message->video;
$voice3      = $update->edited_message->voice;
$photo3     = $update->edited_message->photo;
$doc3        = $update->edited_message->document;
$type       = $update->message->chat->type;
$audio3      = $update->edited_message->audio;
$location3   = $update->edited_message->location;
$first_name = $message->from->first_name;
$edit_ibadlz = $update->edited_message->message_id;
$editchat_ibadlz = $update->edited_message->chat->id;
$edituser_ibadlz = $update->edited_message->from->id;
$editibadlz = $update->edited_message->text;
$_edited = file_get_contents("data/edited.txt"); 
$edited1 = explode("\n", $_edited);
$_edited1 = file_get_contents("data/edited2.txt"); 
$edited2 = explode("\n", $_edited1);

$s = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];

mkdir("data");

if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev) || in_array($from_id,$manger)) {
  
 if($text == "قفل التعديلات" and !in_array($chat_id, $edited1)){
file_put_contents("data/edited.txt", $chat_id);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التعديل
✓",
]);
}
if($text == "قفل التعديلات" and in_array($chat_id, $edited1)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التعديل مسبقاً
✓",
]);
}
if($text == "فتح التعديلات" and in_array($chat_id, $edited1)){
file_put_contents("data/edited.txt","");
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التعديل
✓",]);}
if($text == "فتح التعديلات" and !in_array($chat_id, $edited1)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التعديل مسبقاً
✓",]);}

if($text == "قفل التعديل بالتقيد" and !in_array($chat_id, $edited2)){
file_put_contents("data/edited2.txt", $chat_id);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التعديل بالتقيد
✓",
]);
}
if($text == "قفل التعديل بالتقيد" and in_array($chat_id, $edited2)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التعديل بالتقيد مسبقاً
✓",
]);
}
if($text == "فتح التعديل بالتقيد" and in_array($chat_id, $edited2)){
file_put_contents("data/edited2.txt","");
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التعديل بالتقيد
✓",]);}
if($text == "فتح التعديل بالتقيد" and !in_array($chat_id, $edited2)){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التعديل بالتقيد مسبقاً
✓",]);
}
}
}

if($photo3 || $doc3 || $video3 || $voice3 || $audio3 || $location3 || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$editibadlz) and !in_array($chat_id,$edited1)){
bot('deleteMessage',[
'chat_id'=>$editchat_ibadlz,
'message_id'=>$edit_ibadlz,
]);
}
if($photo3 || $doc3 || $video3 || $voice3 || $audio3 || $location3 || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$editibadlz) and !in_array($chat_id,$edited2)){
bot('deleteMessage',[
'chat_id'=>$editchat_ibadlz,
'message_id'=>$edit_ibadlz,
]);
bot('restrictChatMember',[
         'chat_id'=>$editchat_ibadlz,
         'user_id'=>$edituser_ibadlz,
      ]);
}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ##ايدي بوتك .
$from_id     = $message->from->id;
$from_user = $message->from->username;
$video      = $update->message->video;
$photo_      = $update->message->photo;
$voice      = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$type       = $update->message->chat->type;
$audio      = $update->message->audio;
$location   = $update->message->location;
$sticker    = $update->message->sticker;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$first_name = $message->from->first_name;

$s = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];

$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;

$onlyibadlz       = file_get_contents("data/restrictChatMember/$chat_id.txt");
$_ex         = explode("\n", $onlyibadlz);
$photo2     = $_ex[مفتوح];
$sticker2   = $_ex[مقفول];
$contact2   = $_ex[2];
$doc2       = $_ex[3];
$fwd2       = $_ex[4];
$voice2     = $_ex[5];
$link2      = $_ex[6];
$audio2     = $_ex[7];
$video2     = $_ex[8];
$tag2       = $_ex[9];
$mark2      = $_ex[10];
$bots2      = $_ex[11];

mkdir("data");
mkdir("data/restrictChatMember");

if ($type == "supergroup" and $bot == "administrator"){
  if($JJ117 != "creator" && $JJ117 != "administrator" && $from_id != $sudo && !in_array($from_id,$dev)){

    if($photo_ && $photo2 == "مقفول"){
        bot('deleteMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message->message_id,
        ]);
bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }

    if($voice and $voice2 == "مقفول"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    } 
  
    if($audio && $audio2 == "مقفول"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($video && $video2 == "مقفول"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($link2 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
       bot('deleteMessage',[
         'chat_id'=>$chat_id,
         'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    } 
    if($tag2 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
       ]);
       bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($doc and $doc2 == "مقفول"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($sticker and $sticker2 == "مقفول"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($update->message->forward_from && $fwd2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id,
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
 
    if($message->entities and $mark2 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
      bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
    }
    if($new and $bots2 =="مقفول"){
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('restrictChatMember',[
         'chat_id'=>$chat_id,
         'user_id'=>$from_id,
      ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ آلعضـو : [@$user]
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت وتقيدك ايضٱ ،
✘",
'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
      }
      }
      }
      }
if( $type == "supergroup" and $bot == "administrator"){
if($JJ117 == "creator" || $JJ117 == "administrator" || $from_id == $sudo || in_array($from_id,$dev)) {

   if($text == "/lock photo restrict" or $text == "قفل الصور بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "l\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo restrict" or $text == "فتح الصور بالتقيد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "o\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور بالتقيد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker restrict" or $text == "قفل الملصقات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\nl\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/open sticker restrict" or $text == "فتح الملصقات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\no\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
       if($text == "/lock contact restrict" or $text == "قفل الجهات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\nl\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل جهات الاتصال بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact restrict" or $text == "فتح الجهات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\no\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح جهات الاتصال بالتقييد
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc restrict" or $text == "قفل الملفات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\nl\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc restrict" or $text == "فتح الملفات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\no\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/lock voice restrict" or $text == "قفل البصمات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\nl\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice restrict" or $text == "فتح البصمات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\no\n$link2\n$audio2\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   } 
 
   if($text == "/lock audio restrict" or $text == "قفل الصوت بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\nl\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio restrict" or $text == "فتح الصوت بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\no\n$video2\n$tag2\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  
   if($text == "/lock user restrict" or $text == "قفل المعرفات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\nl\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user restrict" or $text == "فتح المعرفات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\no\n$mark2\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark restrict" or $text == "قفل الماركدون بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\nl\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الماركدون بالتقييد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark restrict" or $text == "فتح الماركدون بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\no\n$bots2");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الماركدون بالتقييد  
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots restrict" or $text == "قفل البوتات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots restrict" or $text == "فتح البوتات بالتقييد"){
    file_put_contents("data/restrictChatMember/$chat_id.txt", "$photo2\n$sticker2\n$contact2\n$doc2\n$fwd2\n$voice2\n$link2\n$audio2\n$video2\n$tag2\n$mark2\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات بالتقييد 
✓",
  'reply_to_message_id'=>$message->message_id,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "قفل الكل بالتقييد" || $text == "/lock all"){
   file_put_contents("data/restrictChatMember/$chat_id.txt", "l\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl\nl");
   bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم قفل اوامر المجموعه بالتقييد بواسطةه »$first_name *
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح بالمحادثه فقط !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "فتح الكل بالتقييد" || $text == "/open all"){
   file_put_contents("data/restrictChatMember/$chat_id.txt", "o\no\no\no\no\no\no\no\no\no\no\no");
   bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم فتح اوامر المجموعه بالتقييد بواسطةه »$first_name *
*📎¦ معرفه » *[@$user]
*🕎¦ » سيتم الان السماح بـجميع الميديا !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
   if($text=="/setting restrict" or $text=="الاعدادات بالتقييد" || $text == "اعدادات التقييد"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"➖➖➖
👮🏾¦ اعدادات المجموعه : 


✔️¦ مقفول » مقفول 
✖️¦ مفتوح » مفتوح

➖➖➖

💱¦ اعدادات التقـييد :

💢¦ التقييد بالتوجيه » { $lockforwardk }
📸¦ التقييد بالصور » { $photor }
🔗¦ التقييد بالروابط » { $linkr }
🎉¦ التقييد بالمتحركه » { $gifr }
🎥¦ التقييد الفيديو » { $videor }

🀄️¦ التقييد بالملصقات : $sticker2
☎️¦ التقييد بالجهات : $contact2
🗂¦ التقييد بالملفات :  $doc2
🎙¦ التقييد بالبصمات : $voice2
🔊¦ التقييد بالصوت : $audio2

Ⓜ️¦ التقييد بالمعرف : $tag2
🔖¦ التقييد بالماركدون : $mark2
📟¦ التقييد بالبوتات : $bots2


➖➖➖
",
]);
}
}
}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك .
$bot_id       = 5783956334; ## ايدي بوتك . 
$from_id     = $message->from->id;
$from_user = $message->from->username;

$_MoHaMMed = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$MoHaMMed = json_decode($_MoHaMMed, true);
$bot = $MoHaMMed['result']['status'];
if($bot == "member"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🖇┇البوت ليس ادمن في المجموعة ، 🖤🖤*",
      'reply_to_message_id'=>$message->message_id,
    ]);
} 

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك .
$buyy         = "[@XTXTB]"; ## حط معرفك
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$id   = $message->from->id; 
$_user = $message->from->username; 
$user = "[$_user]";
$name = $message->from->first_name; 
$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php:##input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);}
if($text == "موقعي" || $text =="معلوماتي" and $from_id == $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ مطور اساسي 👨🏻‍✈️  ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موقعي" || $text =="معلوماتي" and in_array($from_id,$dev)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ مطور البوت 👨🏻‍  ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($from_id != $sudo and !in_array($from_id,$dev)){
if($text=="موقعي" || $text =="معلوماتي" and $JJ117 == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ المنشئ 🏌🏾‍♂ ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موقعي" || $text =="معلوماتي" and  $JJ117 == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ ادمن البوت 🤺 ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موقعي" || $text =="معلوماتي" and  $JJ117 == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{ $name }⊰•
💠¦ المعرف •⊱* @$user *⊰•
⚜️¦ الايـدي •⊱ {* `$from_id` *} ⊰•
🚸¦ رتبتــك •⊱ عضو فقط 👶🏻 ⊰•
🔰¦ ــ •⊱ {* `$chat_id` *} ⊰•
ـ.——————————
 •⊱ { الاحـصـائـيـات الـرسـائـل } ⊰•
💬¦ رسائلك ~ {* ".$msgs['msgs'][$chat_id][$from_id]." *}

ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱* $buyy *⊰•*",
"parse_mode"=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك .
$bot_id       = 5783956334; ## ايدي بوتك .
$from_id     = $message->from->id;
$from_user = $message->from->username;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
mkdir("data");
mkdir("data/devloper");
$devlopers = file_get_contents("data/devloper/devlop.txt");
$dev = explode ("\n",$devlopers);
$_devlopers = file_get_contents("data/devloper/devloper.txt");
$dev_ = explode("\n",$_devlopers);
$space ="";
$space = $space."*➺*".$_devlopers."\n➖➖➖➖➖➖➖\n📨¦ الٱيـديـٱت :\n" ."*➺*`".$devlopers . "`";
if($re and $text == "رفع مطور" || $text =="/p" and $re_id !=$bot_id and $from_id == $sudo and $re_id != $sudo and !in_array($re_id,$dev)){
	file_put_contents("data/devloper/devlop.txt",$re_id ."\n " , FILE_APPEND);
	file_put_contents("data/devloper/devloper.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ تم ترقيته ليصبح مطور *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
elseif($re and $text == "رفع مطور" || $text =="/p" and $re_id !=$bot_id and $from_id == $sudo and $re_id != $sudo and in_array($re_id,$dev)){
bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ العضو » *[@$re_user]
*🎫¦ الايدي » *`$re_id`
*🛠¦ انه مسبقٱ مطور في البوت *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "مسح المطورين" || $text == "/n"){
	file_put_contents("data/devloper/devlop.txt"," ");
	file_put_contents("data/devloper/devloper.txt"," ");
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📛¦ تم مسح المطورين ☔️*",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المطورين" || $text == "/d" and $devlopers != NULL and $devlopers != " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* ❲* معرفك باليز *❳ *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ الـمعرفـٱت :\n$space\n",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "المطورين" || $text == "/d" and $devlopers == NULL || $devlopers == " "){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* ❲* معرفك باليز *❳ *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ لٱ يـوجد مطورين حٱليا",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($text == "رتبتي" and in_array($from_id,$dev)){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎫¦ رتبتك » مطور البوت 👨🏻‍
➖",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "رفع مطور" || $text =="/p" and $from_id == $sudo and $re_id == $bot_id){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ عذرا لا يمكنني رفع نفسي *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "رفع مطور" || $text =="/p" and $from_id == $sudo and $re_id == $sudo){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*👤¦ هل انت احمق ،؟ انت الاساسي هنا ،! *",
    'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466;         ##ايديك هنا 
$from_id     = $message->from->id;
$from_user = $message->from->username;
mkdir("LONELY");
$link1      = $ex[6];
$update = json_decode(file_get_contents('php:##input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$name= $update->message->from->first_name;
$user= $update->message->from->username;
$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$get_kick     = file_get_contents("LONELY/kick.txt");
$kick            = explode("\n",$get_kick);
if($text == "تفعيل اطردني" and $JJ117 !="member"){
 file_put_contents("LONELY/kick.txt",$chat_id);
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡⁞ تم تفعيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($text == "تعطيل اطردني" and $JJ117 !="member"){
 file_put_contents("LONELY/kick.txt", " ");
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡⁞ تم تعطيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }

if($text =="اطردني" and  $JJ117 == "member" and $from_id != $sudo and in_array($chat_id,$kick)){
 $export = json_decode(file_get_contents("https:##api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('KickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
        ]);
        bot('UnbanChatmember',[
            'chat_id'=>$chat_id,
            'user_id'=>$from_id,
            ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*لقد تم طردك بنجاح بأمر منك , ارسلت لك رابط المجموعه في الخاص اذا وصلت لك تستطيع الرجوع متى شئت ،🖤🖤*",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"
*🌟| اهلا عزيزي , لقد تم طردك من المجموعه بامر منك ،
🔖| اذا كان هذا بالخطأ او اردت الرجوع للمجموعه : *
*-*$l *.🖤*",
'parse_mode'=>"MARKDOWN",
]);
}

if($JJ117 == "creator" or $JJ117 == "administrator" or $from_id == $sudo)
if($text == "اطردني"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡⁞ لا استطيع طرد المشرفين ، المنشئين ، المطورين . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="اطردني" and  $JJ117 == "member" and $from_id != $sudo and !in_array($chat_id,$kick)){
 bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡⁞ امر اطردني معطَل . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
        ]);
        }

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ##ايدي بوتك .
$from_id     = $message->from->id;
$user_ibadlz = $message->from->username;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$from_user = $message->from->username;

mkdir("data");
mkdir("data/ids");

$get_myid = file_get_contents("data/ids/idset.txt");
$_get_ = file_get_contents("data/ids/id.txt");
$get_ALONE = file_get_contents("data/ids/id_.txt");
$GETGG1ZZ = file_get_contents("data/ids/iBadlz.txt");
$_GG1ZZ_ = explode("\n",$GETGG1ZZ);

if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php:##input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}




$get             = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$bot_id = $json_info['result']['id'];
$s = file_get_contents("https:##api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
$get_progile = file_get_contents("https:##api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$from_id&limit=1");
$json = json_decode($get_progile);
$photo = $json->result->photos[0][0]->file_id;

if(in_array("GG1ZZ",$_GG1ZZ_)){
if($from_id != $sudo and !in_array($from_id,$dev)){
if($text=="ايدي" || $text == "/id" || $text == "id" || $text == "/id" || $text == "id" and in_array($from_id,$manger)and $msgs['msgs'][$chat_id][$from_id] > 3000){
$RTBGET = "مدير البوت";
$iBadlz = array(
"ههبل العوواامي 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" || $text == "/id" || $text == "id" and in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] >500){
$RTBGET = "مدير البوت";
$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" || $text == "/id" || $text == "id" and in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] >1){
$RTBGET = "مدير البوت";
$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" and in_array($from_id,$manger)){
$RTBGET = "مدير البوت";
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
 bot("sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"$_iBadlz_
• لاتمتلك صوره لحسابك ،🌈ء
*",
"parse_mode"=>"MARKDOWN",
 ]);
 file_put_contents("data/ids/idset.txt",$_get_);
 }
 }

if($text=="ايدي" || $text == "/id" || $text == "id" || $text == "/id" || $text == "id" and $from_id == $sudo || in_array($from_id,$dev) and $msgs['msgs'][$chat_id][$from_id] > 3000){
$RTBGET = "مطور البوت";
$iBadlz = array(
"ههبل العوواامي 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" || $text == "/id" || $text == "id" and $from_id == $sudo || in_array($from_id,$dev) and $msgs['msgs'][$chat_id][$from_id] >500){
$RTBGET = "مطور البوت";
$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" || $text == "/id" || $text == "id" and $from_id == $sudo || in_array($from_id,$dev) and $msgs['msgs'][$chat_id][$from_id] >1){
$RTBGET = "مطور البوت";
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" and $from_id == $sudo || in_array($from_id,$dev)){
$RTBGET = "مطور البوت";
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
 bot("sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"$_iBadlz_
• لاتمتلك صوره لحسابك ،🌈ء
",
"parse_mode"=>"MARKDOWN",
 ]);
 file_put_contents("data/ids/idset.txt",$_get_);
 }
 
 
if($text=="ايدي" || $text == "/id" || $text == "id" || $text == "/id" || $text == "id" and $JJ117 == "creator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 3000){
$RTBGET = "منشئ القروب";
$iBadlz = array(
"ههبل العوواامي 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" and $JJ117 == "creator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 500){
$RTBGET = "منشئ القروب";
$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" and $JJ117 == "creator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 1){
$RTBGET = "منشئ القروب";
$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}if($text=="ايدي" || $text == "/id" || $text == "id"and $JJ117 == "administrator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 3000){
$RTBGET = "ادمن القروب";
$iBadlz = array(
"ههبل العوواامي 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id"and $JJ117 == "administrator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 500){
$RTBGET = "ادمن القروب";
$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id" and $JJ117 == "administrator" and $from_id != $sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 1){
$RTBGET = "ادمن القروب";
$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}if($text=="ايدي" || $text == "/id" || $text == "id"and $JJ117 == "member" and $from_id !=$sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 3000){
$RTBGET = "عضو فقط";
$iBadlz = array(
"ههبل العوواامي 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id"and $JJ117 == "member" and $from_id !=$sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 500){
$RTBGET = "عضو فقط";
$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}elseif($text=="ايدي" || $text == "/id" || $text == "id"and $JJ117 == "member" and $from_id !=$sudo and !in_array($from_id,$dev) and !in_array($from_id,$manger) and $msgs['msgs'][$chat_id][$from_id] > 1){
$RTBGET = "عضو فقط";
$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
$JJ115 = array("IDGET","USERGET","NKOGET","MSGGET","TFGET","RTBGET");
$JJ118 = array($from_id ,$user_ibadlz,$game['game'][$chat_id][$from_id],$msgs['msgs'][$chat_id][$from_id],$iBadlz[$JJ119],$RTBGET);
$_iBadlz_ = str_replace($JJ115, $JJ118 , $get_myid);
file_put_contents("data/ids/idset.txt",$_iBadlz_);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"$_iBadlz_",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
file_put_contents("data/ids/idset.txt",$_get_);
}
}




$loran22 = "*📮¦ اهلا عزيزي المطور 
📬¦ يمكنك استخدام الدوال الاتيه ↓
 ٴ━━━━━━━━━━
1• دالة طبع الايدي »* `IDGET`
*2• دالة طبع المعرف »* `[@USERGET]`
*3• دالة طبع رتبة البوت »* `RTBGET`
*4• دالة طبع تفاعلك »* `TFGET`
*5• دالة طبع رسائلك »* `MSGGET`
*6• دالة طبع نقودك »* `NKOGET`";
if($from_id == $sudo){
if($text == "تعين الايدي" || $text == "تغير الايدي" || $text == "تعيين الايدي"){
    file_put_contents("data/ids/iBadlz.txt","GG1ZZ");
	file_put_contents("data/ids/id_.txt","MOHAMMED");
	bot("sendMessage",[
	'chat_id'=>$chat_id,
	'text'=>$loran22,
	'parse_mode'=>"MARKDOWN",
    'reply_to_message_id' =>$message->message_id, 
	]);
	}
	if($text and $get_ALONE == "MOHAMMED"){
	file_put_contents("data/ids/idset.txt",$text);
	file_put_contents("data/ids/id.txt",$text);
	file_put_contents("data/ids/id_.txt","");
	bot("sendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🚸¦ تم تغغَير كود الٱيدي .",
	'parse_mode'=>"MARKDOWN",
    'reply_to_message_id' =>$message->message_id, 
	]);
	}
	if($text == "مسح الايدي" || $text == "حذف الايدي" || $text == "ازاله الايدي"){
    file_put_contents("data/ids/iBadlz.txt","");
	bot("sendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🚸¦ تم مسح كود الٱيدي المَعدل .",
	'parse_mode'=>"MARKDOWN",
    'reply_to_message_id' =>$message->message_id, 
	]);
	}
	}

$update     = json_decode(file_get_contents('php:##input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 6275847466; ## ايديك.
$bot_id       = 5783956334; ## ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 

if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📤¦ اذاعه عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "اذاعه خاص بالتوجيه" || $text == "⚫️¦ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
}

if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "/co"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 

▪️¦ عدد المجموعات المفعله : $MoHaMMedd 
📮¦ عدد المشتركين في البوت : $MOhaMMed",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
]);
}
}

$freee = file_get_contents("freee.txt");
if ($text == "زخرفه" or $text == "زخرفة" or $text == "زخرفلي"){
file_put_contents("freee.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال اسمك الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $freee =="nam"){
file_put_contents("freee.txt","");
$get = json_decode(file_get_contents("https:##api-bots.000webhostapp.com/api/ZH.php?text=$text"));
$z = $get->result->z;
$z1 = $get->result->z1;
$z2 = $get->result->z2;
$z3 = $get->result->z3;
$z4 = $get->result->z4;
$z5 = $get->result->z5;
$z6 = $get->result->z6;
$z7 = $get->result->z7;
$z8 = $get->result->z8;
$z9 = $get->result->z9;
$z10 = $get->result->z10;
$z11 = $get->result->z11;
$z12 = $get->result->z12;
$z13 = $get->result->z13;
$z14 = $get->result->z14;
$z15 = $get->result->z15;
$z16 = $get->result->z16;
$z17 = $get->result->z17;
$z18 = $get->result->z18;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
$z 
$z1 
$z2 
$z3 
$z4 
$z5 
$z6 
$z7 
$z8
$z9 
$z10 
$z11 
$z12 
$z13 
$z14 
$z15 
$z16 
$z17 
$z18 
*-------------*
🚸✣ تم زخرفة الاسم بنجاح ✓
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
