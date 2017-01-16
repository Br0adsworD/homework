<?php
require "orm.php";
require "answers.php";

 $ans=new answers($_POST["answer"]);
$to=new orm("mysql:dbname=product;host=127.0.0.1","root","");
$to->saveRes($ans);

$tea=$to->getAns("tea");
$coffee=$to->getAns("coffee");
$refrain=$to->getAns("refrain");
echo "за чай-".$tea."<br/>";
echo "зы кофе-".$coffee."<br/>";
echo "воздержались-".$refrain."<br/>";
