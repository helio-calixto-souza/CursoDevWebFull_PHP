<?php

<<<<<<< HEAD
$router->get('/teste/{teste}', function($teste){

	echo "Agora foi recebido da URI o parâmetro: " . $teste;

});

$router->get('teste2', function() use($router){
	
	echo '<a href="' . $router->translate('clientes.edit', 1) . '">Clique aqui para testar a rota clientes.edit</a>';
	
});
=======
use Src\Route as Route;

Route::get(['set' => '/contato', 'as' => 'contato.listar'], 'Controller\ContatosController@listar');

Route::get(['set' => '/contato/criar', 'as' => 'contato.criar'], 'Controller\ContatosController@formulario');

Route::post(['set' => '/contato/salvar', 'as' => 'contato.salvar'], 'Controller\ContatosController@editarSalvar');

Route::get(['set' => '/contato/editar', 'as' => 'contato.editar'], 'Controller\ContatosController@editarSalvar');

Route::get(['set' => '/contato/excluir', 'as' => 'contato.excluir'], 'Controller\ContatosController@excluir');
>>>>>>> 05c1b2a74958ed8537afe0667872cab95725c04a
