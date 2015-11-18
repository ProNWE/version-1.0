<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-18 19:19:49 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 19:19:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(108): Model_Teams->getTeamInfoById('36')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 19:20:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sql ~ APPPATH\classes\Model\Teams.php [ 233 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:233
2015-11-18 19:20:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(233): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 233, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(32): Model_Teams->updateparticipants('editable', 'name', 'Sundor company')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_updateparticipants()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:233
2015-11-18 19:20:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sql ~ APPPATH\classes\Model\Teams.php [ 233 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:233
2015-11-18 19:20:10 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(233): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 233, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(32): Model_Teams->updateparticipants('editable', 'desc', 'Comp')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_updateparticipants()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:233
2015-11-18 19:20:52 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 19:20:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(108): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 20:26:18 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':id_team, 'undefined', 'undefined', 'undefined')' at line 2 [ INSERT INTO participants(id_team, username, email, role)
						VALUES(:id_team, 'undefined', 'undefined', 'undefined') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-18 20:26:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO par...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(259): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-18 20:27:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function select() on a non-object ~ APPPATH\classes\Model\Teams.php [ 263 ] in file:line
2015-11-18 20:27:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 20:35:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::select() ~ APPPATH\classes\Model\Teams.php [ 265 ] in file:line
2015-11-18 20:35:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 20:38:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Teams.php [ 262 ] in file:line
2015-11-18 20:38:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 20:38:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Model\Teams.php [ 262 ] in file:line
2015-11-18 20:38:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 20:48:41 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Teams::newparticipant(), called in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php on line 16 and defined ~ APPPATH\classes\Model\Teams.php [ 254 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:254
2015-11-18 20:48:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(254): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\OpenServer\\d...', 254, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:254
2015-11-18 20:50:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'max(id)' in 'field list' [ SELECT `max(id)` FROM `participants` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-18 20:50:35 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `max(id)...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(259): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant(5)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-18 20:50:44 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\classes\Model\Teams.php [ 259 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:259
2015-11-18 20:50:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(259): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\OpenServer\\d...', 259, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant(5)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:259
2015-11-18 20:50:53 --- CRITICAL: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH\classes\Model\Teams.php [ 259 ] in file:line
2015-11-18 20:50:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', 'C:\\OpenServer\\d...', 259, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(259): max('id')
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant(5)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-11-18 20:51:02 --- CRITICAL: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH\classes\Model\Teams.php [ 259 ] in file:line
2015-11-18 20:51:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', 'C:\\OpenServer\\d...', 259, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(259): max('id')
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant(5)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-11-18 20:51:39 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\Teams.php [ 261 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:261
2015-11-18 20:51:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(261): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\OpenServer\\d...', 261, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant(5)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:261
2015-11-18 20:54:33 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\Teams.php [ 262 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:262
2015-11-18 20:54:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(262): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\OpenServer\\d...', 262, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(16): Model_Teams->newparticipant(5)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_newparticipants()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:262
2015-11-18 20:57:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Teams.php [ 23 ] in file:line
2015-11-18 20:57:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 21:19:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:19:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:20:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:20:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:20:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:20:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('39')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:20:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:20:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('39')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:45:52 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:45:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:29 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:46:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 21:53:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tables\allevents.php [ 17 ] in file:line
2015-11-18 21:53:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 21:53:50 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\tables\allevents.php [ 17 ] in C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php:17
2015-11-18 21:53:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php(17): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 17, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(107): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php:17
2015-11-18 21:54:16 --- CRITICAL: ErrorException [ 4096 ]: Object of class Model_Teams could not be converted to string ~ APPPATH\views\tables\allevents.php [ 14 ] in C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php:14
2015-11-18 21:54:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php(14): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\OpenServer\\d...', 14, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(107): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php:14
2015-11-18 21:59:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\Model\Teams.php [ 177 ] in file:line
2015-11-18 21:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 22:01:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\Model\Teams.php [ 177 ] in file:line
2015-11-18 22:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-18 22:16:14 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-18 22:16:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('23')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151