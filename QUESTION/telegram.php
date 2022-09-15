<?php

CONST CHAT_ID = '1972437814';
CONST BOT = '5776023652:AAExpnZesNNeVKjEeFe_DI5sa80Rdq7XDrM';

CONST FILENAME = './result.xls';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot".BOT."/sendDocument?chat_id=" . CHAT_ID);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$finfo = finfo_file(finfo_open(FILEINFO_MIME_TYPE), FILENAME);
$cFile = new CURLFile(FILENAME, $finfo);

curl_setopt($ch, CURLOPT_POSTFIELDS, [
    "document" => $cFile
]);

$result = curl_exec($ch);

var_dump($result);
curl_close($ch);

?>