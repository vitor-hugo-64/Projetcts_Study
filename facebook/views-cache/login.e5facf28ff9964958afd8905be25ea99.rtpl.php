<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-sm-12 col-md-6 col-lg-4">
			<div class="bg-white border rounded px-4 py-2 mx-2 my-5">
				<form method="POST" action="#">
					<div class="form-group">
						<label>Login</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Senha: </label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<button type="input" class="btn btn-success btn-block">Logar</button>
						<a href="/PHP_MVC/facebook/login-with-facebook" class="btn btn-primary btn-block">
							<i class="fab fa-facebook mr-2"></i>
							Logar com o facebook
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>