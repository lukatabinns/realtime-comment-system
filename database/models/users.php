<?php

class Users{
	
	public static function getUser($userId){
	
		$sql = "select * from user where userId = $userId";
		$query = mysql_query ($sql);
		if ($query){
			if (mysql_num_rows($query) == 1){
			
				return mysql_fetch_object($query);
			
			}
		
		}
		
		return null;
	
	}



}