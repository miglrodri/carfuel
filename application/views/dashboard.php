<?php if($user_email): ?>
	<h2>Hello <em><?php echo $user_email; ?></em>.</h2>
	<h2><?= anchor('logout', 'Logout'); ?></h2>
<?php else: ?>
	<h2>New Users: <?= anchor('signup', 'Create an Account'); ?>.</h2>
	<h2>Members: <?= anchor('login', 'Login'); ?>.</h2>
<?php endif; ?>

<!-- Quando tem carros! mostra lista de carros e ultimas 3 entradas para cada 1 -->
<h1>Os seus carros:</h1>
<p>VW cenas</p>
<p>BMW cenas</p>

<!-- Zero case! aparece formulário para colocar Carro e Entry e submit -->
<h1>Coloque informação sobre o abastecimento:</h1>

<p>Kilometragem quando abasteceu (obrigatório)</p>
<p>Quantidade de litros que abasteceu (obrigatório)</p>
<p>Data do abasteicmento</p>
<p>Preço que pagou pelo abastecimento</p>