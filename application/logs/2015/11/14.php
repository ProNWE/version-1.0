<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-14 16:14:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tables\allevents.php [ 14 ] in file:line
2015-11-14 16:14:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 16:14:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tables\allevents.php [ 14 ] in file:line
2015-11-14 16:14:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 16:14:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\tables\allevents.php [ 14 ] in file:line
2015-11-14 16:14:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 16:15:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\views\tables\allevents.php [ 3 ] in C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php:3
2015-11-14 16:15:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 3, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(105): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#11 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php:3
2015-11-14 16:19:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Events\Events.php [ 66 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:66
2015-11-14 16:19:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 66, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:66
2015-11-14 16:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Events\Events.php [ 66 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:66
2015-11-14 16:20:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 66, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:66
2015-11-14 16:31:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: judges ~ APPPATH\views\judge.php [ 139 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:139
2015-11-14 16:31:48 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(139): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 139, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:139
2015-11-14 17:59:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Teams.php [ 19 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 17:59:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(19): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 19, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 17:59:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Teams.php [ 19 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 17:59:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(19): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 19, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 17:59:49 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Teams.php [ 19 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 17:59:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(19): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 19, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 17:59:49 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Teams.php [ 19 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 17:59:49 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(19): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 19, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php:19
2015-11-14 18:17:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_team ~ APPPATH\classes\Model\Teams.php [ 145 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:17:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 145, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:17:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_team ~ APPPATH\classes\Model\Teams.php [ 145 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:17:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 145, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:17:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_team ~ APPPATH\classes\Model\Teams.php [ 145 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:17:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 145, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_team ~ APPPATH\classes\Model\Teams.php [ 145 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 145, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_team ~ APPPATH\classes\Model\Teams.php [ 145 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 145, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_team ~ APPPATH\classes\Model\Teams.php [ 145 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 145, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('12')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_team ~ APPPATH\classes\Model\Teams.php [ 145 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:18:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(145): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 145, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('12')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:145
2015-11-14 18:19:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:19:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:19:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:19:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:19:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:21:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:21:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:21:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:21:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:21:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:21:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:21:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:21:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:21:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:22:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:22:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:23:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:23:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:23:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:23:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:23:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:23:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:23:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:23:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:23:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:23:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:24:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:24:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:24:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:25:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:25:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:26:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:26:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:26:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:26:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:26:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:26:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:27:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:27:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:27:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 148 ] in file:line
2015-11-14 18:27:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:27:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 148 ] in file:line
2015-11-14 18:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:28:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 154 ] in file:line
2015-11-14 18:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:28:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 154 ] in file:line
2015-11-14 18:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:28:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 154 ] in file:line
2015-11-14 18:28:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:28:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 154 ] in file:line
2015-11-14 18:28:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:29:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:29:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:29:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 153 ] in file:line
2015-11-14 18:29:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:29:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 155 ] in file:line
2015-11-14 18:29:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:29:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 155 ] in file:line
2015-11-14 18:29:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:29:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 155 ] in file:line
2015-11-14 18:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:29:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 155 ] in file:line
2015-11-14 18:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:29:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Teams.php [ 155 ] in file:line
2015-11-14 18:29:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-11-14 18:38:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:38:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:01 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:05 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:05 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:13 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:15 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:39:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:40:01 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:40:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:40:02 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:40:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:40:02 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:40:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:48:14 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:48:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:49:15 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Teams.php [ 22 ] in file:line
2015-11-14 18:49:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): json_decode(Array)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-11-14 18:49:16 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Teams.php [ 22 ] in file:line
2015-11-14 18:49:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): json_decode(Array)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-11-14 18:49:37 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Teams.php [ 22 ] in file:line
2015-11-14 18:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): json_decode(Array)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-11-14 18:49:38 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Teams.php [ 22 ] in file:line
2015-11-14 18:49:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): json_decode(Array)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-11-14 18:49:39 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Teams.php [ 22 ] in file:line
2015-11-14 18:49:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): json_decode(Array)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-11-14 18:49:39 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Teams.php [ 22 ] in file:line
2015-11-14 18:49:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\\OpenServer\\d...', 22, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(22): json_decode(Array)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-11-14 18:55:20 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:55:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:56:36 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:56:36 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:56:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:56:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:20 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:20 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:39 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:39 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:40 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:40 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:40 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:40 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:57:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:39 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:45 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:58:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:59:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 18:59:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:33 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('23')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:46 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 19:00:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('23')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:54 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:55 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:59 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:10:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:14:05 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:14:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:14:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:14:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:18:33 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:18:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:22:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:22:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:23:50 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:23:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:24:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:24:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:25:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:25:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:27:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:27:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:59:38 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:59:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:59:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 20:59:57 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:38:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:38:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:38:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:38:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:38:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:38:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:39:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:39:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:39:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:39:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:42:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:42:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:44:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:44:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:44:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:44:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:46:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:46:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:47:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:47:08 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:47:25 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:47:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:47:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:47:41 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:52:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:52:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:53:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:53:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:16 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('16')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('17')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('15')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:58:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:59:52 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 21:59:52 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:01:19 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:01:19 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:01:38 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:01:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:02:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:02:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:03:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:03:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:04:29 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:04:29 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:05:24 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:05:24 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:05:46 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:05:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:06:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:06:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:07:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:07:23 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:07:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:07:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:08:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:08:56 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:09:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:09:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:09:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:09:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:02 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:18 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:10:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:11:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Teams.php [ 151 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:11:22 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php(151): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 151, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Teams.php(17): Model_Teams->getTeamInfoById('team')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Teams->action_editteam()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Teams))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Teams.php:151
2015-11-14 22:12:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Events\Events.php [ 59 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:59
2015-11-14 22:12:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(59): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 59, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:59
2015-11-14 22:14:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Events\Events.php [ 60 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:60
2015-11-14 22:14:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(60): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 60, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:60
2015-11-14 22:15:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Events\Events.php [ 61 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:61
2015-11-14 22:15:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(61): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 61, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:61
2015-11-14 22:15:05 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Events\Events.php [ 61 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:61
2015-11-14 22:15:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(61): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 61, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:61
2015-11-14 22:15:20 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Events\Events.php [ 62 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:62
2015-11-14 22:15:20 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 62, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:62
2015-11-14 22:16:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\judge.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:16:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:17:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\judge.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:17:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:18:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\judge.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:18:34 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:19:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\judge.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:19:04 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:19:24 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Events\Events.php [ 62 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:62
2015-11-14 22:19:24 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(62): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 62, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:62
2015-11-14 22:19:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\judge.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:19:44 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:20:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\judge.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:20:53 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:22:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logo ~ APPPATH\views\judge.php [ 54 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:22:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 54, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:54
2015-11-14 22:26:11 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Events\Events.php [ 69 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:69
2015-11-14 22:26:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(69): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 69, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:69