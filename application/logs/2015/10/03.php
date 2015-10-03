<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-03 02:05:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Controller\App.php [ 54 ] in file:line
2015-10-03 02:05:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\app.php [ 98 ] in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:98
2015-10-03 02:06:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\application\views\app.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\OpenServer\\d...', 98, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_App))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\application\views\app.php:98
2015-10-03 02:07:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\Controller\App.php [ 54 ] in file:line
2015-10-03 02:07:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:37:40 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 18 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-10-03 02:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Route.php(423): preg_match('#^events(?:/(?P...', 'events/144', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-10-03 02:44:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Miss ITMO University'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Events.php [ 22 ] in file:line
2015-10-03 02:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:45:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Miss ITMO University'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Events.php [ 22 ] in file:line
2015-10-03 02:45:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 02:45:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Miss ITMO University'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Events.php [ 22 ] in file:line
2015-10-03 02:45:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-10-03 03:29:22 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 51 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-10-03 03:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Route.php(423): preg_match('#^events(?:/(?P...', 'events/1/teams', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-10-03 03:29:32 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 58 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-10-03 03:29:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\OpenServer\\d...', 423, Array)
#1 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Route.php(423): preg_match('#^events(?:/(?P...', 'events/1/teams', NULL)
#2 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#5 {main} in file:line