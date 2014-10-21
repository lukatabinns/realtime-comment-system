<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/social/config/define.php'; ?>
<?php require_once MODELS_DIR . '/chat.php'; ?>

<!DOCTYPE html>
<html>
	<head><title>shuflemate</title>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
		<link href="css/chat-inserts.css" type="text/css" rel="stylesheet"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/chat-insert.js"></script>
		<script src="js/chat-delete.js"></script>
		<script src="js/chat.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="page-data">
			</div>
			<div class="chat-wrapper">
				<div class="chat-title"><strong>Say Something Interesting</strong></div>
				<div class="chat-insert"> 
					<div class="say"><strong>luke</strong></div>
					<div class="insert-text-container">
						<textarea id="chat-text" class="insert-text"></textarea>
					</div>
					<div id="insert-button" class="chat-button-insert">
						SEND
					
					</div>
				</div>
				<div class="chats-list">
					<ul class ="chats-holder-ul">
						<li class="chat-holder" id= "_1">
							<?php $chats = Chat::getChat(); ?>
							<?php require_once INCLUDES . 'chat_box.php';?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<input type="hidden" id="userId" value="2"/>
		<input type="hidden" id="userName" value="bill"/>
	<body>
</html>