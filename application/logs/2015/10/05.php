<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-05 21:19:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH\views\app.php [ 92 ] in file:line
2015-10-05 21:19:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 21:20:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH\views\app.php [ 92 ] in file:line
2015-10-05 21:20:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 21:50:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Organization' not found ~ APPPATH\classes\Controller\App.php [ 25 ] in file:line
2015-10-05 21:50:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 21:51:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Organization' not found ~ APPPATH\classes\Controller\App.php [ 25 ] in file:line
2015-10-05 21:51:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 21:51:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Organization.php [ 13 ] in file:line
2015-10-05 21:51:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 21:52:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Organization.php [ 13 ] in file:line
2015-10-05 21:52:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 21:52:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: org_name ~ APPPATH\views\app.php [ 44 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:44
2015-10-05 21:52:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 44, Array)
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
2015-10-05 21:54:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'_organization=organization.'1' AND 	users.'1'= :'1'' at line 1 [ SELECT * FROM organization JOIN users ON users.'1'_organization=organization.'1' AND 	users.'1'= :'1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 21:54:26 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM o...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php(14): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(19): Model_Organization->getOrgInfoFromUserId('1')
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 21:54:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\Controller\App.php [ 22 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:22
2015-10-05 21:54:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:22
2015-10-05 21:55:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: org_name ~ APPPATH\classes\Controller\App.php [ 22 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:22
2015-10-05 21:55:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:22
2015-10-05 21:55:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: org_name ~ APPPATH\classes\Controller\App.php [ 22 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:22
2015-10-05 21:55:34 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:22
2015-10-05 21:55:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: org_name ~ APPPATH\views\app.php [ 44 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:44
2015-10-05 21:55:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 44, Array)
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
2015-10-05 21:55:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: org_name ~ APPPATH\views\app.php [ 44 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:44
2015-10-05 21:55:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 44, Array)
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
2015-10-05 21:57:23 --- CRITICAL: Database_Exception [ 1052 ]: Column 'city' in field list is ambiguous [ SELECT org_name, organization.email, city FROM organization JOIN users ON users.id_organization=organization.id AND 	users.id= '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 21:57:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT org_name...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php(14): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(19): Model_Organization->getOrgInfoFromUserId('1')
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:26:16 --- CRITICAL: View_Exception [ 0 ]: The requested view registration could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php:137
2015-10-05 22:26:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(137): Kohana_View->set_filename('registration')
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(30): Kohana_View->__construct('registration', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('registration')
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Front.php(16): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(69): Front->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php:137
2015-10-05 22:27:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file_name ~ APPPATH\classes\Model\Register.php [ 75 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:75
2015-10-05 22:27:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 75, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:75
2015-10-05 22:28:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH\classes\Model\Register.php [ 172 ] in file:line
2015-10-05 22:28:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 22:29:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file_name ~ APPPATH\classes\Model\Register.php [ 75 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:75
2015-10-05 22:29:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 75, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:75
2015-10-05 22:30:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: filename ~ APPPATH\classes\Model\Register.php [ 44 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:44
2015-10-05 22:30:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(44): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 44, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php:44
2015-10-05 22:31:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'logo' in 'field list' [ INSERT INTO organization(org_name, city, logo, email)
						VALUES('lnln', 'kjhb', 'boroda_usi.jpg', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:31:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(77): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:31:54 --- CRITICAL: Database_Exception [ 1048 ]: Column 'email' cannot be null [ INSERT INTO organization(org_name, city, logo, email)
						VALUES('lnln', 'kjhb', 'boroda_usi.jpg', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:31:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(77): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:32:27 --- CRITICAL: Database_Exception [ 1048 ]: Column 'email' cannot be null [ INSERT INTO organization(org_name, city, logo, email)
						VALUES(',jnkhb', 'kjhb', '200H.jpg', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:32:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(77): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:35:45 --- CRITICAL: Database_Exception [ 1048 ]: Column 'address' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('kjnk', 'jn', 'kjn', NULL, 'kjn', NULL, '123123',
								'231231', 'test@test.ru', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:35:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(97): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:37:43 --- CRITICAL: Database_Exception [ 1048 ]: Column 'login' cannot be null [ INSERT INTO users(lastname, name, surname, address, city, login, password, phone, email, id_organization)
						VALUES('kjn', 'kjn', 'kj', 'spb', 'nkn', NULL, '123123',
								'123123', 'test@test.ru', '3') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:37:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(97): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(142): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 22:38:52 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in file:line
2015-10-05 22:38:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 183, Array)
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'support@pronwe....')
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(137): Email::send('test@test.ru', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#5 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(143): Model_Register->sendConfirmation('jhkbkh', 'bk', 'test@test.ru')
#6 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-10-05 22:41:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in file:line
2015-10-05 22:41:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 183, Array)
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'support@pronwe....')
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(137): Email::send('test@test.ru', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#5 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(143): Model_Register->sendConfirmation('Khaydarov', 'Murod', 'test@test.ru')
#6 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-10-05 22:49:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\App.php [ 25 ] in file:line
2015-10-05 22:49:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 22:50:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\App.php [ 25 ] in file:line
2015-10-05 22:50:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 22:54:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attempt ~ APPPATH\views\authorization.php [ 49 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 22:54:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 49, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 22:56:49 --- CRITICAL: ErrorException [ 1 ]: Cannot access parent:: when current class scope has no parent ~ APPPATH\classes\Authorization.php [ 46 ] in file:line
2015-10-05 22:56:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 22:58:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attempt ~ APPPATH\views\authorization.php [ 49 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 22:58:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 49, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 22:58:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attempt ~ APPPATH\views\authorization.php [ 49 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 22:58:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 49, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 23:00:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attempt ~ APPPATH\views\authorization.php [ 49 ] in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 23:00:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 49, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\authorization.php:49
2015-10-05 23:00:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Organization.php [ 19 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php:19
2015-10-05 23:00:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 19, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(20): Model_Organization->getOrgInfoFromUserId('5')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php:19
2015-10-05 23:01:05 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Organization.php [ 19 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php:19
2015-10-05 23:01:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 19, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(20): Model_Organization->getOrgInfoFromUserId('5')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Organization.php:19
2015-10-05 23:01:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: org_name ~ APPPATH\classes\Controller\App.php [ 23 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:23
2015-10-05 23:01:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 23, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:23
2015-10-05 23:01:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\App.php [ 23 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:23
2015-10-05 23:01:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(23): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 23, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:23
2015-10-05 23:01:50 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\App.php [ 24 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:01:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 24, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:02:01 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\App.php [ 24 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:02:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 24, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:02:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\App.php [ 24 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:02:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 24, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:02:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\App.php [ 24 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:02:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 24, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:03:26 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\App.php [ 24 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:03:26 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php(24): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 24, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_App->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\App.php:24
2015-10-05 23:08:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.username' in 'field list' [ SELECT users.id, users.lastname, users.surname, users.username,
						users.login, users.email, users_role.role, organization.logo, organization.city, organization.org_name
		FROM users JOIN users_role, organization 
				WHERE users.login = 'test@test.ru' AND users.password = '123321' AND users.id_organization = organization.id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 23:08:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT users.id...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(30): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(38): Authorization->login('test@test.ru', '123321')
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-10-05 23:11:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\FrontController.php [ 26 ] in file:line
2015-10-05 23:11:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 23:12:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uploads ~ APPPATH\views\app.php [ 38 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:38
2015-10-05 23:12:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 38, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:38
2015-10-05 23:16:37 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\email\vendor\swift\classes\Swift\Transport\MailTransport.php [ 183 ] in file:line
2015-10-05 23:16:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 183, Array)
#1 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Transport\MailTransport.php(183): sprintf('Array', 'support@pronwe....')
#2 C:\OpenServer\domains\localhost\proNWE\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 C:\OpenServer\domains\localhost\proNWE\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(137): Email::send('bill@gates.ru', 'support@pronwe....', '\xD0\x9F\xD0\xBE\xD0\xB4\xD1\x82\xD0\xB2\xD0\xB5\xD1\x80\xD0...', '<pre>\r\n\t\t\t\t\t\xD0\x97\xD0...', true)
#5 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(143): Model_Register->sendConfirmation('Gates', 'Bill', 'bill@gates.ru')
#6 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-10-05 23:22:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\App.php [ 31 ] in file:line
2015-10-05 23:22:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-05 23:22:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\App.php [ 31 ] in file:line
2015-10-05 23:22:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line