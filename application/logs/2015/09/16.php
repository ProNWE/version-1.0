<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-16 00:03:43 --- CRITICAL: Database_Exception [ 1048 ]: Column 'org_name' cannot be null [ INSERT INTO organization(org_name, city, email)
						VALUES(NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251
2015-09-16 00:03:43 --- DEBUG: #0 C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO org...', false, Array)
#1 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(67): Kohana_Database_Query->execute()
#2 C:\OpenServer\domains\localhost\proNWE\application\classes\Model\Register.php(131): Model_Register->AddOrganization()
#3 C:\OpenServer\domains\localhost\proNWE\application\classes\Controller\Registration.php(17): Model_Register->execute()
#4 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Controller.php(84): Controller_Registration->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#7 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\proNWE\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\proNWE\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\proNWE\modules\database\classes\Kohana\Database\Query.php:251