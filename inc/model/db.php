<?php 
	class konek extends dbConf{
	
		protected static function db(){
			$cn = mysqli_connect(parent::$host,parent::$user,parent::$pass,parent::$db);
			return $cn;
			if($cn){
				die("Error".mysqli_error($query));
			}
		}
	
	}
	
	class tm extends konek{
	
		public static function masuk($param){
			$dbp = mysqli_query(self::db(),"INSERT INTO ".$param."")or die("Error".mysqli_error($query));
			return $dbp;
		}
		
		public static function pilih($param){
			$dbp = mysqli_query(self::db(),"SELECT * FROM ".$param."")or die("Error".mysqli_error($query));;
			return $dbp;
		}
		
		public static function bebas($param){
			$dbp = mysqli_query(self::db(),$param)or die("Error".mysqli_error($query));;
			return $dbp;
		}
	
	}
	
	
	
	
	
?>