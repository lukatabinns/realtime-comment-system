<?php if( isset($GLOBALS['chats']) && is_array($chats)):?>
<?php foreach($chats as $key => $chat): ?>
<?php $user = Users::getUser( $chat->userId ); ?>
<li class="chat-holder" id= "_<?php echo $chat->chat_id; ?>">
	<div class="user-img">
		<img src="<?php echo $user->user_image ;?>" class="user-img-pic"/>
	</div>
	<div class="chat-body">
		<div class="username-field">
				<strong><?php echo $user->userName; ?></strong>
		</div>
		<div class="chat-text">
				<?php echo $chat->text; ?>
		</div>
	</div>
	<div class="chats-button-holder">
		<ul>
			<li id="<?php echo $chat->chat_id; ?>" class="delete-button">x</li>
		</ul>
	</div>
</li>
<?php endforeach; ?>
<?php endif; ?>