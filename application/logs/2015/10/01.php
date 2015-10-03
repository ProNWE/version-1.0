<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-01 00:34:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userinfo ~ APPPATH\views\app.php [ 60 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:60
2015-10-01 00:34:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 60, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:60
2015-10-01 00:35:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userinfo ~ APPPATH\views\app.php [ 60 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:60
2015-10-01 00:35:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 60, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:60
2015-10-01 00:35:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userinfo ~ APPPATH\views\app.php [ 60 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:60
2015-10-01 00:35:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 60, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:60
2015-10-01 01:40:11 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\App.php [ 51 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:51
2015-10-01 01:40:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(51): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\OpenServer\\d...', 51, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:51
2015-10-01 01:41:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\app.php [ 9 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:9
2015-10-01 01:41:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 9, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:9
2015-10-01 01:41:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\app.php [ 9 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:9
2015-10-01 01:41:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 9, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:9
2015-10-01 01:42:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: org_name ~ APPPATH\views\app.php [ 44 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:44
2015-10-01 01:42:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 44, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:44
2015-10-01 01:43:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\classes\Controller\App.php [ 53 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:53
2015-10-01 01:43:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 53, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:53
2015-10-01 01:43:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\app.php [ 96 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:96
2015-10-01 01:43:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 96, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:96
2015-10-01 01:45:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\authorization.php [ 7 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 01:45:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 7, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 01:45:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\authorization.php [ 7 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 01:45:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 7, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 01:46:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\authorization.php [ 7 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 01:46:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 7, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 01:46:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\authorization.php [ 7 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 01:46:10 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 7, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 12:49:47 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('', '', '', NULL, '', NULL, '',
								'', '', '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-01 12:49:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(87): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-01 12:50:25 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('', '', '', NULL, '', NULL, '',
								'', '', '5') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-01 12:50:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(87): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-01 12:52:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\authorization.php [ 7 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 12:52:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 7, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:7
2015-10-01 13:02:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attempt ~ APPPATH\views\authorization.php [ 15 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:15
2015-10-01 13:02:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 15, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:15
2015-10-01 13:08:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Auth.php [ 48 ] in file:line
2015-10-01 13:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-01 13:17:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH\views\authorization.php [ 14 ] in file:line
2015-10-01 13:17:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-01 13:18:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attempt ~ APPPATH\views\authorization.php [ 14 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:14
2015-10-01 13:18:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 14, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:14
2015-10-01 13:26:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attempt ~ APPPATH\views\authorization.php [ 14 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:14
2015-10-01 13:26:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 14, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:14
2015-10-01 13:26:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 48 ] in file:line
2015-10-01 13:26:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-01 13:30:51 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 23 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:23
2015-10-01 13:30:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(23): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\OpenServer\\d...', 23, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:23
2015-10-01 13:31:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Auth::http_redirect() ~ APPPATH\classes\Front.php [ 17 ] in file:line
2015-10-01 13:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line