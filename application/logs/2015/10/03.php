<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-03 02:05:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Controller\App.php [ 54 ] in file:line
2015-10-03 02:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\app.php [ 98 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:98
2015-10-03 02:06:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 98, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:98
2015-10-03 02:07:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Controller\App.php [ 54 ] in file:line
2015-10-03 02:07:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:37:40 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-10-03 02:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Route.php(423): preg_match('#^events(?:/(?P...', 'events/144', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-10-03 02:44:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Miss ITMO University'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Events.php [ 22 ] in file:line
2015-10-03 02:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:45:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Miss ITMO University'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Events.php [ 22 ] in file:line
2015-10-03 02:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:45:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Miss ITMO University'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Events.php [ 22 ] in file:line
2015-10-03 02:45:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 03:29:22 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 51 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-10-03 03:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Route.php(423): preg_match('#^events(?:/(?P...', 'events/1/teams', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-10-03 03:29:32 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 58 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-10-03 03:29:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Route.php(423): preg_match('#^events(?:/(?P...', 'events/1/teams', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-10-03 20:10:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\events.php [ 111 ] in C:\OpenServer\domains\localhost\proNWE\application\views\events.php:111
2015-10-03 20:10:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\events.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 111, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\events.php:111
2015-10-03 20:10:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\events.php [ 111 ] in C:\OpenServer\domains\localhost\proNWE\application\views\events.php:111
2015-10-03 20:10:10 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\events.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 111, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\events.php:111
2015-10-03 20:10:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\events.php [ 111 ] in C:\OpenServer\domains\localhost\proNWE\application\views\events.php:111
2015-10-03 20:10:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\events.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 111, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\events.php:111
2015-10-03 20:12:41 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 85 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-10-03 20:12:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Route.php(423): preg_match('#^(?:/(?P<contr...', 'events/8/teams', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-10-03 20:16:28 --- CRITICAL: Database_Exception [ 1048 ]: Column 'org_name' cannot be null [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:16:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:16:43 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('gjvhcf', 'TTRD', 'trdq', NULL, 'trd', NULL, 'hbjh',
								'etdtrd', 'trdy', '6') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:16:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
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
2015-10-03 20:20:30 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('gjvhcf', 'TTRD', 'jnk', NULL, 'kjn', NULL, 'kjnkn',
								'jghv', 'ljnln', '7') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:20:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
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
2015-10-03 20:20:36 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('gjvhcf', 'TTRD', 'jnk', NULL, 'kjn', NULL, 'kjnkn',
								'jghv', 'ljnln', '8') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:20:36 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
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
2015-10-03 20:20:54 --- CRITICAL: Database_Exception [ 1048 ]: Column 'login' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('jhvjg', 'jhjhv', 'hbjhv', 'Spb', 'uyf', NULL, 'hgcjf',
								'jhkjh', 'fdhdx', '9') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:20:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
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
2015-10-03 20:21:22 --- CRITICAL: Database_Exception [ 1048 ]: Column 'org_name' cannot be null [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:21:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:21:59 --- CRITICAL: Database_Exception [ 1048 ]: Column 'email' cannot be null [ INSERT INTO organization(org_name, city, email)
						VALUES('hbjgv', 'fgcn', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:21:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(132): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-03 20:22:44 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [trdhd] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2015-10-03 20:22:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('trdhd')
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(97): Swift_Mime_SimpleMessage->setTo('trdhd')
#7 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(127): Email::send('trdhd', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#8 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(133): Model_Register->sendConfirmation('dfxgfdx', 'tjhmcf', 'trdhd')
#9 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#13 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249