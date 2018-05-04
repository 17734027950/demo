<?php
require_once __DIR__."/../vendor/autoload.php";

$cardNo = '6222020200068206016';
$bankcard = new Sco\Bankcard\Bankcard();
//$bankcard = new Sco\Bankcard\Bankcard(new Sco\Bankcard\Providers\RegexProvider());

// 返回一个Sco\Bankcard\Info实例
// 如果未识别 抛出异常 Sco\Bankcard\Exceptions\ValidationException
$info = $bankcard->info($cardNo);

// 银行卡信息（数组）
$getBankInfo = $info->getBankInfo();

// var_dump($getBankInfo);

// 所属银行代号
$info->getBankCode();

// 所属银行名称
echo $info->getBankName();

// 所属银行icon（如果有）
$info->getBankIcon();

// 卡类型代号
$info->getCardType();

// 卡类型名称
echo $info->getCardTypeName();


?>