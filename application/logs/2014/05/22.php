<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-22 21:12:28 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'fantaparlamento.fantapartito' doesn't exist [ SHOW FULL COLUMNS FROM `fantapartito` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/database/classes/Kohana/Database/MySQL.php:359
2014-05-22 21:12:28 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('fantapartito')
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Utils/ORMDB/FantaBusinessReadFacadeImpl.php(19): Kohana_ORM->__construct()
#6 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Controller/Classifiche.php(11): Utils_ORMDB_FantaBusinessReadFacadeImpl->selezionaFantaPartiti(NULL)
#7 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller.php(84): Controller_Classifiche->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(118): Kohana_Request->execute()
#13 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/database/classes/Kohana/Database/MySQL.php:359
2014-05-22 21:13:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_FantaPartito class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/orm/classes/Kohana/ORM.php:603
2014-05-22 21:13:25 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Utils/ORMDB/FantaBusinessReadFacadeImpl.php(40): Kohana_ORM->__get('name')
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Controller/Classifiche.php(11): Utils_ORMDB_FantaBusinessReadFacadeImpl->selezionaFantaPartiti(NULL)
#3 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller.php(84): Controller_Classifiche->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(118): Kohana_Request->execute()
#9 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/modules/orm/classes/Kohana/ORM.php:603
2014-05-22 21:14:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: deputati_model ~ APPPATH/classes/Utils/ORMDB/FantaBusinessReadFacadeImpl.php [ 111 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Utils/ORMDB/FantaBusinessReadFacadeImpl.php:111
2014-05-22 21:14:01 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Utils/ORMDB/FantaBusinessReadFacadeImpl.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 111, Array)
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Controller/Classifiche.php(12): Utils_ORMDB_FantaBusinessReadFacadeImpl->selezionaFantaDeputati()
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller.php(84): Controller_Classifiche->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(118): Kohana_Request->execute()
#8 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/classes/Utils/ORMDB/FantaBusinessReadFacadeImpl.php:111
2014-05-22 21:17:43 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/_classifiche.php [ 21 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:21
2014-05-22 21:17:43 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(21): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Volumes/DATA32...', 21, Array)
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/login.php(60): include('/Volumes/DATA32...')
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(61): include('/Volumes/DATA32...')
#3 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/DATA32...', Array)
#4 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(118): Kohana_Request->execute()
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:21
2014-05-22 21:29:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: uri ~ APPPATH/views/_classifiche.php [ 24 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:24
2014-05-22 21:29:43 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 24, Array)
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/login.php(60): include('/Volumes/DATA32...')
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(61): include('/Volumes/DATA32...')
#3 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/DATA32...', Array)
#4 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(118): Kohana_Request->execute()
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:24
2014-05-22 21:30:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: uri ~ APPPATH/views/_classifiche.php [ 24 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:24
2014-05-22 21:30:12 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/DATA32...', 24, Array)
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/login.php(60): include('/Volumes/DATA32...')
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(61): include('/Volumes/DATA32...')
#3 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/DATA32...', Array)
#4 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(118): Kohana_Request->execute()
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:24
2014-05-22 21:32:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hattivita ~ APPPATH/views/classifiche.php [ 68 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/classifiche.php:68
2014-05-22 21:32:12 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/classifiche.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 68, Array)
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(61): include('/Volumes/DATA32...')
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/View.php(348): Kohana_View::capture('/Volumes/DATA32...', Array)
#3 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Classifiche))
#7 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(118): Kohana_Request->execute()
#10 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/classifiche.php:68