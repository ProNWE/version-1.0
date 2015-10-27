<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-17 22:40:52 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in file:line
2015-10-17 22:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 183, Array)
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'support@pronwe....')
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(137): Email::send('so@email.ru', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#5 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(143): Model_Register->sendConfirmation('MyLastname', 'MyName', 'so@email.ru')
#6 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#13 {main} in file:line