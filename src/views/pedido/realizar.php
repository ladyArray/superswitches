<?php if (isset($_SESSION['identity'])): ?>
	<h1>Realizar pedido</h1>
	<p>
		<a href="<?= base_url ?>src/carrito/index">Ver los productos y el precio del pedido</a>
	</p>
	<br/>

	<h3>Dirección para el envio:</h3>
	<form action="<?=base_url.'src/pedido/add'?>" method="POST">
		<label for="provincia">Provincia</label>
		<input type="text" name="provincia" required />

		<label for="ciudad">Ciudad</label>
		<input type="text" name="localidad" required />

		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" required />

		<input type="submit" value="Confirmar pedido" />
	</form>

<?php else: ?>
	<h1>¡Necesitas estar identificado!</h1>
	<p>Necesitas estar logueado en nuestra web para poder realizar tu pedido. :(</p>
<?php endif; ?>