<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-15 22:47:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Controller\Registration.php [ 17 ] in file:line
2015-09-15 22:47:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 22:59:21 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Register::sendConfirmation(), called in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php on line 17 and defined ~ APPPATH\classes\Model\Register.php [ 76 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:76
2015-09-15 22:59:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(76): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\OpenServer\\d...', 76, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->sendConfirmation('test')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:76
2015-09-15 23:14:17 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in file:line
2015-09-15 23:14:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 183, Array)
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'support@pronwe....')
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(127): Email::send('morgan-_-95@mai...', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#5 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(133): Model_Register->sendConfirmation('', '', 'morgan-_-95@mai...')
#6 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-09-15 23:15:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getFieldBody() on a non-object ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 143 ] in file:line
2015-09-15 23:15:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 23:15:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getFieldBody() on a non-object ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 143 ] in file:line
2015-09-15 23:15:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-15 23:29:19 --- CRITICAL: Database_Exception [ 1048 ]: Column 'org_name' cannot be null [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-15 23:29:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(131): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-15 23:29:24 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-09-15 23:29:24 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(97): Swift_Mime_SimpleMessage->setTo('')
#7 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(126): Email::send('', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#8 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->sendConfirmation('', '', '')
#9 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-09-15 23:29:31 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-09-15 23:29:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(97): Swift_Mime_SimpleMessage->setTo('')
#7 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(126): Email::send('', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#8 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->sendConfirmation('', '', '')
#9 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249