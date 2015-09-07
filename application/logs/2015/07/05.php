<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-05 01:55:14 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php:137
2015-07-05 01:55:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 C:\OpenServer\domains\localhost\kohana\application\classes\Controller\Welcome.php(7): Kohana_View::factory('welcome')
#3 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php:137
2015-07-05 01:55:31 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php:137
2015-07-05 01:55:31 --- DEBUG: #0 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 C:\OpenServer\domains\localhost\kohana\application\classes\Controller\Welcome.php(7): Kohana_View::factory('welcome')
#3 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\kohana\system\classes\Kohana\View.php:137