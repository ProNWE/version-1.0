<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-25 22:22:21 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\Evaluate.php [ 31 ] in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Evaluate.php:31
2015-11-25 22:22:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Evaluate.php(31): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\OpenServer\\d...', 31, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Evaluate->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Evaluate))
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Evaluate.php:31