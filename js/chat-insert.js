$(document).ready(function(){
	
	/*
	* click after writing chat will echo the message
	*/
	$('#insert-button').click(function(){
		chatonClick();
		
	});

});

function chatonClick(){


/*
* user enter text in text area
*/
	var _userId = $('#userId').val();
	var _userName = $('#userName').val();
	var _text = $('#chat-text').val();
	
	if (_text.length > 0 && _userId != null){
		$('.insert-text-container').css('border', '1px solid #e1e1e1');
		$.post("/ajax/chat-insert.php",
				{
					task : "chat-insert",
					userId : _userId,
					text : _text
				}			
			).error(function(data){
					console.log("error:");
				})
			 .success(function(data){
					chatInsert(jQuery.parseJSON(data));
					console.log("responseText:" + data);
				});
				
			console.log(_text + "userName: " + _userName + "userId: " + _userId);

	
	}
	else{
		$('.insert-text-container').css('border', '1px solid #ff0000');
		console.log("emty chat");
	
	}
	
/*
* the chat box will refresh after user click send
*/
	$('#chat-text').val("");

}

function chatInsert(data){
	var c = '';
	c += '<li class="chat-holder" id= "_'+data.chat.chat_id+'">';
	c += '<div class="user-img">';
	c += '<img src="'+data.user.user_image+'" class="user-img-pic"/>';
	c += '</div>';
	c += '<div class="chat-body">';
	c += '<div class="username-field"><strong>'+data.user.userName+'</strong></div>';
	c += '<div class="chat-text">'+data.chat.text+'</div>';
	c += '</div>';
	c += '<div class="chats-button-holder">';
	c += '<ul>';
	c += '<li id="'+data.chat.chat_id+'" class="delete-button">x</li>';
	c += '</ul>';
	c += '</div>';
	c += '</li>';

	$('.chats-holder-ul').prepend(c);
	addDeleteHandlers();
}


