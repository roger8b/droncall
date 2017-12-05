<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */
$route['default_controller'] = 'Inicio_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Usuário
$route['painel_controle/usuarios'] = 'painel/usuario/Lista';
$route['painel_controle/cadastro/usuario'] = 'painel/usuario/Cadastro';
$route['painel_controle/cadastrar/usuario'] = 'painel/usuario/Cadastro/novo';
$route['painel_controle/usuario/(:num)'] = 'painel/usuario/Alterar/index/$1';
$route['painel_controle/usuario/alterar/(:num)'] = 'painel/usuario/Alterar/usuario/$1';
$route['painel_controle/usuario/alterar/senha/(:num)'] = 'painel/usuario/Alterar_senha/usuario/$1';

// Grupo
$route['painel_controle/grupos'] = 'painel/grupo/Lista';
$route['painel_controle/cadastro/grupo'] = 'painel/grupo/Cadastro';
$route['painel_controle/cadastro/grupo/novo'] = 'painel/grupo/Cadastro/novo';
$route['painel_controle/grupo/(:num)'] = 'painel/grupo/Alterar/index/$1';
$route['painel_controle/grupo/alterar/(:num)'] = 'painel/grupo/Alterar/grupo/$1';
$route['painel_controle/grupo/entrar/(:num)'] = 'painel/grupo/Lista/entrar/$1';

// Inicio
$route['inicio'] = 'inicio/acesso/Login';
$route['login'] = 'inicio/acesso/Login/entrar';
$route['logout'] = 'inicio/acesso/Login/sair';
$route['usuario'] = 'inicio/cadastro/Usuario';
$route['usuario/novo'] = 'inicio/cadastro/Usuario/novo';

// Painel de controle
$route['painel_controle'] = 'painel/Main';














