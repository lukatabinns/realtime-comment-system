<?php

require_once MODELS_DIR . 'users.php';

class Chat{

	public static function getChat(){
		$output = array();
		$sql_select = "SELECT * FROM chat ORDER BY chat_id desc";
		$result = mysql_query($sql_select);
		if ($result){
		
			if(mysql_num_rows($result) > 0){
			
				while($row = mysql_fetch_object($result)){
				
					$output[] = $row;
				
				}
			
			}
		
		}

		return $output;
	}
	
	/*
	*insert chat with user details
	*/
	public static function insert($chatText, $userId){
		$chatText = nl2br($chatText);
		$sql_select = "insert into chat(text, userId) values( '" . mysql_real_escape_string(htmlentities($chatText)) ."' , '$userId')";
		$result = mysql_query($sql_select);
		if ($result){
		
			$insert_id = mysql_insert_id();
			$std = new stdClass();
			$std->chat_id = $insert_id;
			$std->text = $chatText;
			$std->userId = (int)$userId;
			return $std;
		
		}
		return null;
		
		
	}
	
	public static function update($data){
		
	}
	
	public static function delete($chat_id){
		$sql_select = "delete from chat where chat_id = $chat_id ";
		$result = mysql_query($sql_select);
		if($result){
		
			return true;
		}else{
		
			return null;
		}

	}


}