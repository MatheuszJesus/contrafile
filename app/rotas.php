<?php
use Contrafile\Controllers\CarController;
use Contrafile\Core\Router;

Router::get('/', 'HomeController', 'index');
Router::get('/login', 'LoginController', 'login');
Router::get('/cadastro', 'LoginController', 'cadastro');
Router::get('/admin', 'AdminController', 'admin');
Router::get('/produtos', 'ProdController', 'prod');
Router::get('/carrinho', 'CarController', 'carrinho');
Router::post('/cadastrarconta', 'LoginController', 'cadastrarconta');
Router::post('/logarconta', 'LoginController', 'logarconta');
Router::post('/cadastrarproduto', 'AdminController', 'cadastrarproduto');


