<?php
namespace myclasses;
class FirstClass 
{	
	static $counter=1;
	public function showAll($prlist)
	{	
		
		foreach ($prlist as $product) {
			echo "Товар №".self::$counter."<br/>";
			$product->show();
			self::$counter++;
			echo "<br/>";

		}
		
	
	}
}