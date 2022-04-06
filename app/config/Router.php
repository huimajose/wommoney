<?php

$this->get('/', 'PagesController@home');
$this->get('/quem-somos', 'PagesController@quemSomos');
$this->get('/contato', 'PagesController@contato');

$this->get('/produto', 'ProdutoController@index');

$this->get('/novo-produto', 'ProdutoController@novo');
$this->get('/editar-produto', 'ProdutoController@editar');
$this->post('/insert-produto', 'ProdutoController@insert');

$this->get('/pesquisa', 'ProdutoController@pesquisar');


//criando as rotas do usuario
$this->post('/account/home', 'AccountController@index');
$this->post('/account/login', 'AccountController@login');
$this->post('/account/register', 'AccountController@register');
$this->post('/insert-perfil', 'AccountController@insert');
$this->get('/account/completar-perfil', 'AccountController@editar');
$this->post('/completar-perfil', 'AccountController@completar');
$this->get('/account/profile', 'AccountController@profile');
$this->get('/account/dashboard', 'AccountController@dashboard');
$this->get('/account/settings', 'AccountController@settings');
$this->post('/save-settings', 'AccountController@updateSettings');