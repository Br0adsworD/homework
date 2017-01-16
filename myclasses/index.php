<?php

require "autoload.php";

use myclasses\product;
use myclasses\PromotionalProduct;
use myclasses\PromotionalProduct1;
use myclasses\FirstClass;
use myclasses\sameORM;

$i=0;

$data1=new \DateTime();
$data1->setDate(2010,12,26);
$data2=new \DateTime();
$data2->setDate(2017,02,12);

$pr=[
	new product("MX ".$i++,2000,"s_d_".$i),
	new product("MX ".$i++,3000,"s_d_".$i),
	new product("MX ".$i++,4000,"s_d_".$i)
];

$frombase=new sameORM("mysql:dbname=product;host=127.0.0.1","root","");
$frombase->getProduct(1);

foreach ($pr as $key => $value) {
	$tobase=new sameORM("mysql:dbname=product;host=127.0.0.1","root","");
		$tobase->saveProduct($pr[$key]);
}
// foreach ($pr as $key => $i) {
// 		$tobase=new sameORM("mysql:dbname=product;host=127.0.0.1","root","");
// 		$tobase->saveAll("product",$pr[$key]);
	// }

$prom_pr=[
	new PromotionalProduct("GALAXI ".$i++,10000,"s_d_1",-12),
	new PromotionalProduct("GALAXI ".$i++,30000,"s_d_2",-12),
	new PromotionalProduct("GALAXI ".$i++,30000,"s_d_3",-12)
];
foreach ($prom_pr as $key => $value) {
	$tobase=new sameORM("mysql:dbname=product;host=127.0.0.1","root","");
		$tobase->savePromotionalProduct($prom_pr[$key]);
}


// foreach ($prom_pr as $key => $i) {
// 		$tobase=new sameORM("mysql:dbname=product;host=127.0.0.1","root","");
// 		 $tobase->saveAll(PromotionalProduct,$prom_pr[$key]);
// 	}
$prom_pr1=[
	new PromotionalProduct1("IPHONE ".$i++,1500,"s_d_".$i,-8,$data1,$data2),
	new PromotionalProduct1("IPHONE ".$i++,2500,"s_d_".$i,-8,$data1,$data2),
	new PromotionalProduct1("IPHONE ".$i++,3500,"s_d_".$i,-8,$data1,$data2)
	
];
foreach ($prom_pr1 as $key => $value) {
	$tobase=new sameORM("mysql:dbname=product;host=127.0.0.1","root","");
		$tobase->savePromotionalProduct1($prom_pr1[$key]);
}


// foreach ($prom_pr1 as $key => $i) {
// 		$tobase=new sameORM("mysql:dbname=product;host=127.0.0.1","root","");
// 		$tobase->saveAll(new PromotionalProduct1(),$prom_pr1[$key]);
// 	}

// $sh=new FirstClass;
// $sh->showAll($pr);
// $sh->showAll($prom_pr);
// $sh->showAll($prom_pr1);


