<?php

/**
* Эл. почта получателя
* @var string
*/
$to = isset($to) ? $to: null;

/**
* Тема письма
* @var string
*/
$subject = isset($subject) ? $subject: 'Сообщение с сайта: ' . Setting::get('admin_title');

if( !empty($_POST['contacts']) )
{
	$data = array_map('htmlspecialchars', $_POST['contacts']);
	
	$error = null;
	$success = null;
	
	use_helper('Email');
	
	$sendmail = new Email();
	
	if( empty($data['name']) || empty($data['sername']) || empty($data['address']) || empty($data['email']) || empty($data['message']) )
	{
		$error = 'Все поля обязательно должны быть заполнены!';
	}
	elseif( !$sendmail->validEmail( $data['email'] ) )
	{
		$error = 'Проверьте адрес электронной почты!';
	}
	else
	{
		if ($to !== null)
		{
			$to_email = $to;
		}
		elseif( $user = Record::findByIdFrom('User', 1) )
		{
			$to_email = $user->email;
		}
		
		
		$message = 'ДАННЫЕ ОТПРАВИТЕЛЯ:' . "\n"
				 . 'Фамилия:' . $data['sername'] . "\n"
				 . 'Имя: ' . $data['name'] . "\n"
				 . 'Адрес проживания: ' . $data['address'] . "\n"
				 . 'Номер телефона: ' . $data['phone'] . "\n"
				 . 'Електронная почта: ' . $data['email'] . "\n\n"
				 . 'СООБЩЕНИЕ: ' . "\n"
				 . $data['message'];
		
		$sendmail->to( $to_email );
		$sendmail->from( $data['email'], $data['sername'] . ' ' . $data['name'] );
		$sendmail->subject( $subject );
		$sendmail->message( $message );
		
		if( $sendmail->send() )
		{
			$success = 'Сообщение успешно отправлено!';
			
			unset($data);
		}
		else
		{
			$error = "Техническая ошибка. Обратитесь к администратору по адресу эл. почты: {$to_email}.";
		}
	}
	
	if( $error )
	{
		echo '<p id="message-error" class="message">'. $error .'</p>';
	}
	elseif( $success )
	{
		echo '<p id="message-success" class="message">'. $success .'</p>';
	}
}

?>
<form id="contactsForm" action="<?php echo $this->url(); ?>" method="post">
	<p id="contactsSername">
		<label for="contactsSername">Фамилия</label>
		<span><input id="contactsSernameField" class="input-text" type="text" name="contacts[sername]" value="<?php if(isset($data['sername'])) echo $data['sername']; ?>" /></span>
	</p>
	<p id="contactName">
		<label for="contactName">Имя</label>
		<span><input id="contactsNameField" class="input-text" type="text" name="contacts[name]" value="<?php if(isset($data['name'])) echo $data['name']; ?>" /></span>
	</p>
	<p id="contactsAddress">
		<label for="contactsAddress">Адрес проживания</label>
		<span><input id="contactsAddressField" class="input-text" type="text" name="contacts[address]" value="<?php if(isset($data['address'])) echo $data['address']; ?>" /></span>
	</p>
	<p id="contactsPhone">
		<label for="contactsPhone">Номер телефона</label>
		<span><input id="contactsPhoneField" class="input-text" type="text" name="contacts[phone]" value="<?php if(isset($data['phone'])) echo $data['phone']; ?>" /></span>
	</p>
	<p id="contactsEmail">
		<label for="contactsEmail">Электронная почта</label>
		<span><input id="contactsEmailField" class="input-text" type="text" name="contacts[email]" value="<?php if(isset($data['email'])) echo $data['email']; ?>" /></span>
	</p>
	<p id="contactsMessage">
		<label for="contactsMessage">Текст сообщения</label>
		<span><textarea id="contactsMessageField" class="textarea" name="contacts[message]"><?php if(isset($data['message'])) echo $data['message']; ?></textarea></span>
	</p>
	<p id="contactsSubmit">
		<input id="contactsSubmitButton" type="submit" value="Отправить" />
	</p>
</form>