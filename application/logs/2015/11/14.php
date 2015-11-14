<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-14 18:01:53 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('dl', 'sl', 'dkf', NULL, 'dfk', 'dk', 'dkm',
								'65a', 'dk', '8') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-14 18:01:53 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(97): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-14 18:02:24 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('dl', 'sl', 'dkf', NULL, 'dfk', 'dk', 'dkm',
								'65a', 'dk', '9') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-14 18:02:24 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(97): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-14 18:02:54 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('skjfw', 'dkjgwk', 'gkbe,jv', NULL, 'dfgkj', 'fgdk', 'bke',
								'kjdgs', 'fgdk', '10') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-14 18:02:54 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(97): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-14 18:05:12 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [jk] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-11-14 18:05:12 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('jk')
#1 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 D:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(97): Swift_Mime_SimpleMessage->setTo('jk')
#7 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(137): Email::send('jk', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#8 D:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(143): Model_Register->sendConfirmation('fkjgqb', 'j', 'jk')
#9 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#10 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in D:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-11-14 22:17:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Events\Events.php [ 63 ] in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63
2015-11-14 22:17:04 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(63): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\OpenServer\\d...', 63, Array)
#1 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63
2015-11-14 22:18:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Events\Events.php [ 63 ] in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63
2015-11-14 22:18:07 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(63): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\OpenServer\\d...', 63, Array)
#1 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63