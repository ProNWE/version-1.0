<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-16 20:36:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Events\Events.php [ 30 ] in file:line
2015-10-16 20:36:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-16 20:41:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\app.php [ 9 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:9
2015-10-16 20:41:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 9, Array)
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
2015-10-16 21:12:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assets ~ APPPATH\views\app.php [ 9 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:9
2015-10-16 21:12:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 9, Array)
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