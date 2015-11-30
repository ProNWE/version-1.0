<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-29 00:53:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model::Instance() ~ APPPATH\views\rating.php [ 43 ] in file:line
2015-11-29 00:53:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 00:53:20 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Scores::getScore(), called in C:\OpenServer\domains\localhost\proNWE\application\views\rating.php on line 45 and defined ~ APPPATH\classes\Model\Scores.php [ 62 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Scores.php:62
2015-11-29 00:53:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Scores.php(62): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\OpenServer\\d...', 62, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\views\rating.php(45): Model_Scores->getScore('24')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Scores.php:62
2015-11-29 00:53:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 00:53:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 00:53:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_criteria ~ APPPATH\classes\Model\Scores.php [ 65 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Scores.php:65
2015-11-29 00:53:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Scores.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 65, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\views\rating.php(45): Model_Scores->getScore('24', 1)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Scores.php:65
2015-11-29 00:53:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'SUM(score)' in 'field list' [ SELECT `SUM(score)` FROM `scores` WHERE `id_participant` = '24' AND `id_criteria` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-29 00:53:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `SUM(sco...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Scores.php(66): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\views\rating.php(45): Model_Scores->getScore('24', 1)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#9 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-11-29 00:54:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function SUM() ~ APPPATH\classes\Model\Scores.php [ 64 ] in file:line
2015-11-29 00:54:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 00:59:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\Scores.php [ 69 ] in file:line
2015-11-29 00:59:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 00:59:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH\classes\Model\Scores.php [ 69 ] in file:line
2015-11-29 00:59:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:10:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$' ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 01:10:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:10:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$i' (T_VARIABLE) ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 01:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:10:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$i' (T_VARIABLE) ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 01:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:10:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$i' (T_VARIABLE) ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 01:10:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:10:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$' ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 01:10:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:10:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$' ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 01:10:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:13:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''%'' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\rating.php [ 63 ] in file:line
2015-11-29 01:13:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:14:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"%"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\rating.php [ 63 ] in file:line
2015-11-29 01:14:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:14:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"%"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\rating.php [ 63 ] in file:line
2015-11-29 01:14:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:14:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getScore() ~ APPPATH\views\rating.php [ 45 ] in file:line
2015-11-29 01:14:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-29 01:19:25 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('42')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('43')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('42')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:59 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:19:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('43')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:49:28 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:49:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(125): Model_Teams->getTeamInfoById('42')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-29 01:54:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Rating.php [ 41 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:41
2015-11-29 01:54:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php(41): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 41, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Rating->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:41
2015-11-29 01:55:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Rating.php [ 42 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:42
2015-11-29 01:55:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 42, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Rating->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:42
2015-11-29 01:55:33 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Rating.php [ 42 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:42
2015-11-29 01:55:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 42, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Rating->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:42
2015-11-29 01:55:34 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Rating.php [ 42 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:42
2015-11-29 01:55:34 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 42, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Rating->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Rating))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Rating.php:42