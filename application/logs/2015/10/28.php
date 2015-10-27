<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-28 00:02:14 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\tables\allevents.php [ 14 ] in C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php:14
2015-10-28 00:02:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\tables\allevents.php(14): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\OpenServer\\d...', 14, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(108): Kohana_View->__toString()
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
2015-10-28 00:13:47 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Events\Events.php [ 51 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:51
2015-10-28 00:13:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(51): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 51, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:51
2015-10-28 00:14:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Events\Events.php [ 51 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:51
2015-10-28 00:14:51 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(51): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 51, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:51
2015-10-28 00:24:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tart_data ~ APPPATH\views\judge.php [ 44 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:44
2015-10-28 00:24:25 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 44, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:44
2015-10-28 00:24:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tart ~ APPPATH\views\judge.php [ 44 ] in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:44
2015-10-28 00:24:33 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\judge.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 44, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\judge.php:44