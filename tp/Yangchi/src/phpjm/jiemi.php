<?php

$Code = ''; // base64编码

$File = 'decodedstr.php';//解码后保存的文件

$Temp = base64_decode($Code);

$temp = gzinflate($Temp);

$FP = fopen($File,"w");

fwrite($FP,$temp);

fclose($FP);

echo "解密成功！";

?>