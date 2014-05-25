<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-19 21:22:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/views/_menu.php [ 4 ] in file:line
2014-05-19 21:22:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 21:26:36 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Cookie.php:67
2014-05-19 21:26:36 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /Volumes/DATA32/workspace/fantaparlamento/mainsite/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/system/classes/Kohana/Cookie.php:67
2014-05-19 21:33:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Auth_FantaDatabaseORM' not found ~ APPPATH/classes/Auth/FantaDatabaseORM.php [ 2 ] in file:line
2014-05-19 21:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 21:33:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Auth_FantaDatabaseORM' not found ~ APPPATH/classes/Auth/FantaDatabaseORM.php [ 2 ] in file:line
2014-05-19 21:33:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 21:33:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hattivita ~ APPPATH/views/_classifiche.php [ 16 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:33:50 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 16, Array)
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
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:36:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hattivita ~ APPPATH/views/_classifiche.php [ 16 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:36:06 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 16, Array)
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
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:42:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hattivita ~ APPPATH/views/_classifiche.php [ 16 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:42:15 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 16, Array)
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
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:44:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hattivita ~ APPPATH/views/_classifiche.php [ 16 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:44:44 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 16, Array)
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
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:45:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hattivita ~ APPPATH/views/_classifiche.php [ 16 ] in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16
2014-05-19 21:45:33 --- DEBUG: #0 /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/DATA32...', 16, Array)
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
#11 {main} in /Volumes/DATA32/workspace/fantaparlamento/mainsite/application/views/_classifiche.php:16