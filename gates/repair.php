<?php 
if ((strpos($message, "/repair") === 0)||(strpos($message, "!repair") === 0)||(strpos($message, ".charge") === 0)){
  if ($role == "OWNER")
  {
$clenmsg = substr($message,7);
$msg = explode(".", $clenmsg);    
$j = trim($msg[1]);
$sk = trim($msg[2]);
$msgsnd = reply_to($chatId,urlencode("
➜ 𝗦𝗞 : $sk
"),$messageId);
   $respon = json_decode($msgsnd, TRUE);
$message_id_1 = $respon['result']['message_id'];
    /*
while($j>0)
{
  
}
    */
  }
}