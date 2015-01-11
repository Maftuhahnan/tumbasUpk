<?php 
	class konek extends dbConf{
	
		protected static function db(){
			$cn = mysqli_connect(parent::$host,parent::$user,parent::$pass,parent::$db);
			return $cn;
			if($cn){
				echo "ga konek";
			}
		}
	
	}
	
	class tm extends konek{
	
		public static function masuk($param){
			$dbp = mysqli_query(self::db(),$param);
			return $dbp;
		}
	
	}
	
	
	
	
	
?>