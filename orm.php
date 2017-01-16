<?php
class orm
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
    public function saveRes(answers $val)
    {
    	$sql="insert into answers(id_question,answer) values(1,:ans)";
    	$s=$this->pdo->prepare($sql);
    	if($val==null){
    		throw new \Exception("nullllll");
    		
    	}
    	$ans=$val->getAns();
    	$s->bindParam(":ans",$ans);
    	$s->execute();

    }	
    public function getAns($ans)
    {
        $sql="select count(answer) from answers where answer=:ans";
    	$s=$this->pdo->prepare($sql);
        if ($ans==null) {
                $ex=new Exception("Error ", 1);
                throw $ex;
            }
    	$s->bindParam(":ans",$ans,\PDO::PARAM_STR);
    	
    	$s->execute();
    	$data=$s->fetchAll();;
    	return intval($data[0][0]);
    }
}