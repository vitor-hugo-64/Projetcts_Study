<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="mt-5">
				<h1>Correio</h1>
				<h3>Saiba o frete e o prazo de acordo com o serviço dos correios</h3>
			</div>
			<form method="POST" action="/PHP_MVC/courier/caculation-freight-deadline">
				<div class="form-group">
					<label>Tipo de serviço</label>
					<select class="form-control" name="service_code">
						<option value="40010">SEDEX Varejo</option>
						<option value="40045">SEDEX a Cobrar Varejo</option>
						<option value="40215">SEDEX 10 Varejo</option>
						<option value="40290">SEDEX Hoje Varejo</option>
						<option value="41106">PAC Varejo</option>
					</select>
				</div>
				<div class="form-group">
					<label>CEP de Origem</label>
					<input type="number" name="zip_code_origin" class="form-control">
				</div>
				<div class="form-group">
					<label>CEP de Destino</label>
					<input type="number" name="zip_code_destiny" class="form-control">
				</div>
				<h4>Informações do pacote</h4>
				<div class="form-group">
					<label>Peso</label>
					<input type="number" name="weight" class="form-control" step="0.01">
				</div>
				<div class="form-group">
					<label>Comprimento</label>
					<input type="number" name="length" class="form-control" step="0.01">
				</div>
				<div class="form-group">
					<label>Altura</label>
					<input type="number" name="height" class="form-control" step="0.01">
				</div>
				<div class="form-group">
					<label>Largura</label>
					<input type="number" name="width" class="form-control" step="0.01">
				</div>
				<div class="form-group">
					<label>Diâmetro</label>
					<input type="number" name="diameter" class="form-control" step="0.01">
				</div>
				<div class="form-group">
					<input type="submit" value="Calcular" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>