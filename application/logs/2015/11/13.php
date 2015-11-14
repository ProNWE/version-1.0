<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-13 20:30:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Events\Events.php [ 63 ] in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63
2015-11-13 20:30:48 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(63): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\OpenServer\\d...', 63, Array)
#1 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63
2015-11-13 20:30:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Events\Events.php [ 63 ] in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63
2015-11-13 20:30:51 --- DEBUG: #0 D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php(63): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\OpenServer\\d...', 63, Array)
#1 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Events_Events->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Events_Events))
#4 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Events\Events.php:63