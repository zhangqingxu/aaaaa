<?php
/*
Description: 测试自动加载.
Version: 1.0
Author: lx159
*/
require_once __DIR__ . '/vendor/autoload.php';

use Tencent\SayTencent;

echo 1111;

echo SayTencent::Tencent(3333);
echo 2222;
