<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-10 14:04:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\Auth.php [ 14 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:14
2015-09-10 14:04:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 14, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:14
2015-09-10 14:06:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 14:06:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:06:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 14:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:09:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'instanse' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 14:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:09:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 14:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:10:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Auth_ORM::$logged_in ~ APPPATH\classes\Controller\Auth.php [ 21 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:21
2015-09-10 14:10:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\OpenServer\\d...', 21, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:21
2015-09-10 14:11:10 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:11:10 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\OpenServer\domains\localhost\proNWE\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('www', 'www', false)
#9 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Kohana_Auth->login('www', 'www')
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:11:28 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:11:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\OpenServer\domains\localhost\proNWE\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('123', '213', false)
#9 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Kohana_Auth->login('123', '213')
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:11:33 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:11:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\OpenServer\domains\localhost\proNWE\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('123', '423', false)
#9 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Kohana_Auth->login('123', '423')
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:12:13 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:12:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\OpenServer\domains\localhost\proNWE\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 C:\OpenServer\domains\localhost\proNWE\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('asd', 'das', false)
#9 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Kohana_Auth->login('asd', 'das')
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#13 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#16 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 14:59:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorization' not found ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 14:59:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:59:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorization' not found ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 14:59:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:59:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorization' not found ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 14:59:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:59:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorization' not found ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 14:59:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:00:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorization' not found ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 15:00:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:01:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorization' not found ~ APPPATH\classes\Controller\Auth.php [ 17 ] in file:line
2015-09-10 15:01:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:03:51 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Authorization ~ APPPATH\classes\Authorization.php [ 32 ] in file:line
2015-09-10 15:03:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:04:03 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Authorization ~ APPPATH\classes\Authorization.php [ 32 ] in file:line
2015-09-10 15:04:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:04:36 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Authorization ~ APPPATH\classes\Authorization.php [ 35 ] in file:line
2015-09-10 15:04:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:05:04 --- CRITICAL: ErrorException [ 1 ]: Cannot instantiate abstract class Authorization ~ APPPATH\classes\Authorization.php [ 31 ] in file:line
2015-09-10 15:05:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:29:31 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 15:29:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(26): Kohana_Database_Query->execute()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#4 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 15:30:17 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 15:30:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM u...', false, Array)
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(28): Kohana_Database_Query->execute()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#4 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\MySQL.php:171
2015-09-10 15:32:21 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Authorization.php [ 46 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 15:32:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\OpenServer\\d...', 46, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 15:41:08 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query::param(), called in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php on line 28 and defined ~ MODPATH\database\classes\Kohana\Database\Query.php [ 138 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:138
2015-09-10 15:41:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(138): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\OpenServer\\d...', 138, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(28): Kohana_Database_Query->param(Array)
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:138
2015-09-10 15:41:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Model\Auth.php [ 26 ] in file:line
2015-09-10 15:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:45:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\Model\Auth.php [ 30 ] in file:line
2015-09-10 15:45:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 15:46:38 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Authorization.php [ 46 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 15:46:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 46, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 15:47:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Model\Auth.php [ 30 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:30
2015-09-10 15:47:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(30): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 30, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:30
2015-09-10 16:00:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Auth.php [ 30 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:30
2015-09-10 16:00:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(30): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 30, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:30
2015-09-10 16:16:16 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Auth as array ~ APPPATH\classes\Authorization.php [ 50 ] in file:line
2015-09-10 16:16:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:16:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Authorization.php [ 50 ] in file:line
2015-09-10 16:16:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:17:47 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Auth as array ~ APPPATH\classes\Authorization.php [ 59 ] in file:line
2015-09-10 16:17:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:18:05 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Auth as array ~ APPPATH\classes\Authorization.php [ 59 ] in file:line
2015-09-10 16:18:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:18:27 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Auth as array ~ APPPATH\classes\Authorization.php [ 60 ] in file:line
2015-09-10 16:18:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:18:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Authorization.php [ 68 ] in file:line
2015-09-10 16:18:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:21:32 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Authorization.php [ 46 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 16:21:32 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\OpenServer\\d...', 46, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 16:21:41 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Authorization.php [ 46 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 16:21:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\OpenServer\\d...', 46, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:46
2015-09-10 16:23:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Authorization.php [ 46 ] in file:line
2015-09-10 16:23:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:23:40 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Auth.php [ 32 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:32
2015-09-10 16:23:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(32): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 32, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:32
2015-09-10 16:23:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Authorization.php [ 61 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:61
2015-09-10 16:23:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(61): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 61, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login('login', 'pass')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:61
2015-09-10 16:25:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Auth.php [ 19 ] in file:line
2015-09-10 16:25:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:25:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Auth.php [ 21 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:21
2015-09-10 16:25:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 21, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:21
2015-09-10 16:25:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Auth.php [ 21 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:21
2015-09-10 16:25:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\OpenServer\\d...', 21, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php:21
2015-09-10 16:25:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Auth.php [ 32 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:32
2015-09-10 16:25:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(32): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 32, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:32
2015-09-10 16:26:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY) ~ APPPATH\classes\Model\Auth.php [ 31 ] in file:line
2015-09-10 16:26:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:27:10 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Auth.php [ 33 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:27:10 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:27:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Auth.php [ 33 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:27:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:27:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Auth.php [ 33 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:27:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:28:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Auth.php [ 33 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:28:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 33, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(46): Model_Auth->login()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login(NULL, NULL)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Auth.php:33
2015-09-10 16:29:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Authorization.php [ 52 ] in file:line
2015-09-10 16:29:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:29:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Authorization.php [ 52 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:52
2015-09-10 16:29:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 52, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login('login', 'pass')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:52
2015-09-10 16:30:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Authorization.php [ 62 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:62
2015-09-10 16:30:17 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\OpenServer\\d...', 62, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Auth.php(19): Authorization->login('login', 'pass')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Authorization.php:62
2015-09-10 16:32:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Authorization.php [ 70 ] in file:line
2015-09-10 16:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:35:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Authorization.php [ 52 ] in file:line
2015-09-10 16:35:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:35:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'global' (T_GLOBAL), expecting function (T_FUNCTION) ~ APPPATH\classes\Authorization.php [ 12 ] in file:line
2015-09-10 16:35:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:35:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Authorization.php [ 52 ] in file:line
2015-09-10 16:35:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:37:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '==' (T_IS_EQUAL), expecting ')' ~ APPPATH\classes\Authorization.php [ 77 ] in file:line
2015-09-10 16:37:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:42:44 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php:137
2015-09-10 16:42:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Front.php(15): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(69): Front->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php:137
2015-09-10 16:44:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:44:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:44:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:44:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:44:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:44:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:44:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:45:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:45:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:45:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:45:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:45:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:45:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Front_Controller' not found ~ APPPATH\classes\Controller\App.php [ 3 ] in file:line
2015-09-10 16:45:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:45:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorizate' not found ~ APPPATH\classes\FrontController.php [ 12 ] in file:line
2015-09-10 16:45:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:45:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Authorizate' not found ~ APPPATH\classes\FrontController.php [ 12 ] in file:line
2015-09-10 16:45:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:46:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 16:46:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:46:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: auth ~ APPPATH\classes\FrontController.php [ 14 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\FrontController.php:14
2015-09-10 16:46:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\FrontController.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 14, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(69): FrontController->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\FrontController.php:14
2015-09-10 16:47:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 16:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:47:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 16:47:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:48:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 16:48:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:48:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 16:48:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:48:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 16:48:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 16:49:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-09-10 16:49:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 17:02:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\app.php [ 8 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:8
2015-09-10 17:02:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:8
2015-09-10 17:03:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\App.php [ 14 ] in file:line
2015-09-10 17:03:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 19:48:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Register.php [ 48 ] in file:line
2015-09-10 19:48:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 19:54:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Register.php [ 48 ] in file:line
2015-09-10 19:54:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 19:57:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Register.php [ 48 ] in file:line
2015-09-10 19:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 19:58:09 --- CRITICAL: Database_Exception [ 1048 ]: Column 'org_name' cannot be null [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 19:58:09 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(38): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(15): Model_Register->__construct(Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:00:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Register.php [ 48 ] in file:line
2015-09-10 20:00:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 20:00:57 --- CRITICAL: Database_Exception [ 1048 ]: Column 'org_name' cannot be null [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:00:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(38): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(15): Model_Register->__construct(Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:01:18 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO users(lastname, name, surname, address, city, login, password, 					phone, email, id_organization)
						VALUES('jnlk', 'nlkhv', 'jk', ';kjbh', 'jnlkn', 'nljhb', 'nk',
								'jnljbh', 'lnkkn') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:01:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(58): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(15): Model_Register->__construct(Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:03:01 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO users(lastname, name, surname, address, city, login, password, 					phone, email, id_organization)
						VALUES('jnlhgkvb', 'kljbgvi', 'jknbgoj', 'kjnuv', 'kjngv', 'kjnlgvvu', 'jnljgkv',
								'bjnhvu', 'kjbjhbv') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:03:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(58): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(15): Model_Register->__construct(Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:04:18 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO users(lastname, name, surname, address, city, login, password, 					phone, email, id_organization)
						VALUES('hjbkjgv', 'k;lm', 'lhvgbh', 'kjknboub', 'klmhbg', 'kjngv', 'jhbvg',
								'iuvhbb', 'gvu') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-10 20:04:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO use...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(58): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(15): Model_Register->__construct(Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251