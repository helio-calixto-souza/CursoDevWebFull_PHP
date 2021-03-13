<?php

$router->get('/teste/{teste}', function($teste){

	echo "Agora foi recebido da URI o parâmetro: " . $teste;

});

$router->get('teste2', function() use($router){
	
	echo '<a href="' . $router->translate('clientes.edit', 1) . '">Clique aqui para testar a rota clientes.edit</a>';
	
});