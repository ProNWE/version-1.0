<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-04 01:50:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pronwe.users' doesn't exist [ SELECT * FROM users JOIN users_role, organization 
				WHERE users.login = 'login' AND users.password = 'pass' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 01:50:33 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#1 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(28): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#3 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(38): Authorization->login('login', 'pass')
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 01:54:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pronwe.organization' doesn't exist [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 01:54:26 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 01:54:49 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pronwe.organization' doesn't exist [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 01:54:49 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 01:56:30 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pronwe.organization' doesn't exist [ INSERT INTO organization(org_name, city, email)
						VALUES('ИТМО', 'Санкт-Петербург', 'turov96@yandex.ru') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 01:56:30 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-04 15:28:25 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in file:line
2015-10-04 15:28:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 183, Array)
#1 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'support@pronwe....')
#2 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 D:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(127): Email::send('turov96@yandex....', 'support@pronwe....', '???????????????...', '<pre>??????????...', true)
#5 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(133): Model_Register->sendConfirmation('??????????', '??????????????', 'turov96@yandex....')
#6 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-10-04 15:33:07 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [pronwe] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-10-04 15:33:07 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('pronwe')
#1 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 D:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(97): Swift_Mime_SimpleMessage->setTo('pronwe')
#7 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(127): Email::send('pronwe', 'support@pronwe....', '???????????????...', '<pre>??????????...', true)
#8 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(133): Model_Register->sendConfirmation('dfld', 'kfd', 'pronwe')
#9 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#10 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-10-04 15:37:49 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in file:line
2015-10-04 15:37:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'D:\OpenServer\d...', 183, Array)
#1 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'support@pronwe....')
#2 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 D:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(127): Email::send('turov96@yandex....', 'support@pronwe....', '???????????????...', '<pre>??????????...', true)
#5 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(133): Model_Register->sendConfirmation('??????????', '??????????????', 'turov96@yandex....')
#6 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-10-04 15:48:17 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [login] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-10-04 15:48:17 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('login')
#1 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 D:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(97): Swift_Mime_SimpleMessage->setTo('login')
#7 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(127): Email::send('login', 'support@pronwe....', '???????????????...', '<pre>??????????...', true)
#8 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(133): Model_Register->sendConfirmation('dfld', '??????????????', 'login')
#9 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#10 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249