<?php
namespace myclasses;

class sameORM 
{

    private $pdo;
    public function __construct($dsn,$usname="",$pass="")
    {
    	try
    	{
    		$this->pdo=new \PDO($dsn,$usname,$pass);
    		$this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    	}
    	catch (\PDOExeption $ex)
    	{
    		echo "ERROR"."<br/>";
    	}
    }
    public function saveProduct(product $product)
    {
    	$sql="insert into product (name,price,short_description) values (:name,:price,:s_d)";
    	$s=$this->pdo->prepare($sql);
    	$name=$product->getName();
    	$s->bindParam(":name",$name);
    	$price=$product->getPrice();
    	$s->bindParam(":price",$price);
    	$short_description=$product->getShort_description();
    	$s->bindParam(":s_d",$short_description);
    	$s->execute();
    }

    public function savePromotionalProduct(PromotionalProduct $prod)
    {
    	$sql="insert into PromotionalProduct(name,price,short_description,discount) values(:name,:price,:s_d,:dis)";
    	$s=$this->pdo->prepare($sql);
    	$name=$prod->getName();
    	$s->bindParam(":name",$name);
    	$price=$prod->getPrice();
    	$s->bindParam(":price",$price);
    	$short_description=$prod->getShort_description();
    	$s->bindParam(":s_d",$short_description);
    	$dis=$prod->getDiscount();
    	$s->bindParam(":dis",$dis);
    	$s->execute();
    }

        public function savePromotionalProduct1(PromotionalProduct1 $prod)
    {
    	$sql="insert into PromotionalProduct1(name,price,short_description,discount,from_,to_) values(:name,:price,:s_d,:dis,:from,:to)";
    	$s=$this->pdo->prepare($sql);
    	$name=$prod->getName();
    	$s->bindParam(":name",$name);
    	$price=$prod->getPrice();
    	$s->bindParam(":price",$price);
    	$short_description=$prod->getShort_description();
    	$s->bindParam(":s_d",$short_description);
    	$dis=$prod->getDiscount();
    	$s->bindParam(":dis",$dis);
    	$from=$prod->getFrom();
    	$fromstr=$from->format("Y.m.d");
    	$s->bindParam(":from",$fromstr);
    	$to=$prod->getTo();
    	$tostr=$to->format("Y.m.d");
    	$s->bindParam(":to",$tostr);
    	$s->execute();
    }


    	public function saveAll($class,$prod)
    	{
    		if ($class=="product")
    		{
    			$sql="insert into product (name,price,short_description) values (:name,:price,:s_d)";
		    	$s=$this->pdo->prepare($sql);
		    	$name=$prod->getName();
		    	$s->bindParam(":name",$name);
		    	$price=$prod->getPrice();
		    	$s->bindParam(":price",$price);
		    	$short_description=$prod->getShort_description();
		    	$s->bindParam(":s_d",$short_description);
		    	$s->execute();
    		}
    		else if($class=="PromotionalProduct"){
    			$sql="insert into PromotionalProduct(name,price,short_description,discount) values(:name,:price,:s_d,:dis)";
		    	$s=$this->pdo->prepare($sql);
		    	$name=$prod->getName();
		    	$s->bindParam(":name",$name);
		    	$price=$prod->getPrice();
		    	$s->bindParam(":price",$price);
		    	$short_description=$prod->getShort_description();
		    	$s->bindParam(":s_d",$short_description);
		    	$dis=$prod->getDiscount();
		    	$s->bindParam(":dis",$dis);
		    	$s->execute();
    		}
    		else if($class=="PromotionalProduct1"){
    			$sql="insert into PromotionalProduct1(name,price,short_description,discount,from_,to_) values(:name,:price,:s_d,:dis,:from,:to)";
		    	$s=$this->pdo->prepare($sql);
		    	$name=$prod->getName();
		    	$s->bindParam(":name",$name);
		    	$price=$prod->getPrice();
		    	$s->bindParam(":price",$price);
		    	$short_description=$prod->getShort_description();
		    	$s->bindParam(":s_d",$short_description);
		    	$dis=$prod->getDiscount();
		    	$s->bindParam(":dis",$dis);
		    	$from=$prod->getFrom();
		    	$fromstr=$from->format("Y.m.d");
		    	$s->bindParam(":from",$fromstr);
		    	$to=$prod->getTo();
		    	$tostr=$to->format("Y.m.d");
		    	$s->bindParam(":to",$tostr);
		    	$s->execute();
    		}
    		else{
    			echo "aaaaaaaaaaaaaaaa";
    		}
    	}


    public function getProduct($id)
    {
    	$sql="select * from product where id > :id";
    	$s=$this->pdo->prepare($sql);
    	$s->bindParam(":id", $id, \PDO::PARAM_INT);
        $s->execute();
        $asd=$s->fetchAll(\PDO::FETCH_ASSOC);
        $product=new product($asd[0]["name"],$asd[0][ "price"],$asd[0]["short_description"]);
        return $product;
    }
}