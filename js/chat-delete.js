$(document).ready(function(){

		addDeleteHandlers();
		
			
	});
	
function addDeleteHandlers(){

	$(".delete-button").each(function(){
	
		var button = this;
		$(button).click(function(){
		
			chatDelete(button.id);
			
						
		});
	});

}

function chatDelete(_chat_id){


	$.post("/ajax/chat-delete.php" , 
				{
					task: "chat-delete",
					chat_id: _chat_id
				
				}).success(function(data){
				
					$("#_" + _chat_id).detach();
				});
}