<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-06 19:49:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'field list' [ INSERT INTO participants(id_team, username, role, email)
							VALUES('5', 'Khaydarov Murod', 'Admin', 'morgan-_-95@mail.ru') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:49:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO par...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(85): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): Model_Teams->queryString()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:53:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'field list' [ INSERT INTO participants(id_team, username, role, email)
							VALUES('5', 'Khaydarov Murod', 'admin', 'admin') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:53:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO par...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(85): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): Model_Teams->queryString()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:54:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'field list' [ INSERT INTO participants(id_team, username, role, email)
							VALUES('5', 'Khaydarov Murod', 'admin', 'admin') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:54:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO par...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(85): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): Model_Teams->queryString()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:54:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'field list' [ INSERT INTO participants(id_team, username, role, email)
							VALUES('5', 'dfjnsdkk', 'jkj', 'hkjh') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:54:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO par...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(85): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): Model_Teams->queryString()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-06 19:59:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 19:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 19:59:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 19:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 19:59:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 19:59:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 19:59:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 19:59:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:01:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:01:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:01:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:01:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:01:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:01:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:02:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 93 ] in file:line
2015-11-06 20:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:02:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 93 ] in file:line
2015-11-06 20:02:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:02:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 93 ] in file:line
2015-11-06 20:02:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:02:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 93 ] in file:line
2015-11-06 20:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:02:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 93 ] in file:line
2015-11-06 20:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:02:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 93 ] in file:line
2015-11-06 20:02:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:03:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 93 ] in file:line
2015-11-06 20:03:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:05:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:05:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:07:51 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Model\Teams.php [ 63 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:63
2015-11-06 20:07:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(63): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 63, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(100): Model_Teams->queryString()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:63
2015-11-06 20:08:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:08:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ APPPATH\classes\Model\Teams.php [ 95 ] in file:line
2015-11-06 20:08:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:09:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:09:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:09:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:09:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query::save() ~ APPPATH\classes\Model\Teams.php [ 63 ] in file:line
2015-11-06 20:09:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:20:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:20:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:21:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:21:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:21:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:22:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Teams.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(101): Model_Teams->queryString()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:36 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Teams.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:36 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(101): Model_Teams->queryString()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Teams.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(101): Model_Teams->queryString()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Teams.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(101): Model_Teams->queryString()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Teams.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:22:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(54): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(101): Model_Teams->queryString()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:54
2015-11-06 20:23:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Teams.php [ 101 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:101
2015-11-06 20:23:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(101): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 101, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:101
2015-11-06 20:23:32 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Teams.php [ 101 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:101
2015-11-06 20:23:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(101): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 101, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(21): Model_Teams->execute()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:101
2015-11-06 20:25:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:25:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:30:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:30:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:31:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:31:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:31:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:31:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:31:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:31:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:31:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:31:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:31:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:31:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:31:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:31:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:32:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:32:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:32:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:32:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:32:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:32:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:33:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:33:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:34:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:34:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:34:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:34:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:34:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:34:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:35:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:35:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:35:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:35:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:36:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:36:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:36:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:36:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:37:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Teams.php [ 29 ] in file:line
2015-11-06 20:37:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:38:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: t_data ~ APPPATH\classes\Controller\Teams.php [ 13 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:13
2015-11-06 20:38:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 13, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_addteam()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:13
2015-11-06 20:38:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Teams.php [ 58 ] in file:line
2015-11-06 20:38:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:48:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Event::getTeamsByIdEvent() ~ APPPATH\classes\Controller\Events\Events.php [ 75 ] in file:line
2015-11-06 20:48:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:48:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Event.php [ 170 ] in file:line
2015-11-06 20:48:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 20:49:07 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'Select' ~ APPPATH\classes\Model\Event.php [ 168 ] in file:line
2015-11-06 20:49:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 21:56:58 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Teams does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php:94
2015-11-06 21:56:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#4 {main} in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php:94
2015-11-06 21:57:18 --- CRITICAL: ReflectionException [ 0 ]: Method execute does not exist ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ] in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php:97
2015-11-06 21:57:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionClass->getMethod('execute')
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#4 {main} in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php:97
2015-11-06 21:57:44 --- CRITICAL: ReflectionException [ 0 ]: Method execute does not exist ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ] in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php:97
2015-11-06 21:57:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionClass->getMethod('execute')
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#4 {main} in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php:97
2015-11-06 22:08:01 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 5 ~ APPPATH\classes\Model\Teams.php [ 107 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:107
2015-11-06 22:08:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(107): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 107, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:107
2015-11-06 22:08:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 110 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:08:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(110): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 110, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:08:58 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 110 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:08:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(110): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 110, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:09:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 110 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:09:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(110): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 110, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:09:25 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 110 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:09:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(110): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 110, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:10:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 110 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:10:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(110): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 110, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:10:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 110 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:10:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(110): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 110, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:110
2015-11-06 22:13:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:13:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:15:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:15:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:15:05 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:15:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:15:17 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:15:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:16:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:16:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:17:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:17:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:17:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:17:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:17:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 112 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:17:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(112): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 112, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:112
2015-11-06 22:18:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 114 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:114
2015-11-06 22:18:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(114): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 114, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:114
2015-11-06 22:18:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 114 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:114
2015-11-06 22:18:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(114): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 114, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:114
2015-11-06 22:18:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Teams.php [ 114 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:114
2015-11-06 22:18:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(114): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 114, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(37): Model_Teams->sort()
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_sort()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:114
2015-11-06 22:23:30 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\judge.php [ 122 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:122
2015-11-06 22:23:30 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(122): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 122, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:122
2015-11-06 22:31:46 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'UPDATE' ~ APPPATH\classes\Model\Teams.php [ 123 ] in file:line
2015-11-06 22:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 22:31:54 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'UPDATE' ~ APPPATH\classes\Model\Teams.php [ 123 ] in file:line
2015-11-06 22:31:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-06 22:31:57 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'UPDATE' ~ APPPATH\classes\Model\Teams.php [ 123 ] in file:line
2015-11-06 22:31:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line