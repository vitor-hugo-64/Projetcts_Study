<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<div class="row">
		<div class="col-12 pt-5">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">First</th>
						<th scope="col">Last</th>
						<th scope="col">Handle</th>
					</tr>
				</thead>
				<tbody data-js="table">
					<?php $counter1=-1;  if( isset($pagination["registers"]) && ( is_array($pagination["registers"]) || $pagination["registers"] instanceof Traversable ) && sizeof($pagination["registers"]) ) foreach( $pagination["registers"] as $key1 => $value1 ){ $counter1++; ?>
					<tr>
						<td><?php echo htmlspecialchars( $value1["person_id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
						<td><?php echo htmlspecialchars( $value1["first_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
						<td><?php echo htmlspecialchars( $value1["last_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
						<td><?php echo htmlspecialchars( $value1["handle"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<br><br>
			<nav aria-label="Page navigation example">
				<ul class="pagination">

					<?php if( $pagination["currentPage"] > 1 ){ ?>
					<li class="page-item"><a class="page-link" href="http://local.com/PHP_MVC/pagination?page=<?php echo htmlspecialchars( $pagination["previous"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Previous</a></li>
					<?php } ?>
					
					<?php $counter1=-1;  if( isset($pagination["all_pages"]) && ( is_array($pagination["all_pages"]) || $pagination["all_pages"] instanceof Traversable ) && sizeof($pagination["all_pages"]) ) foreach( $pagination["all_pages"] as $key1 => $value1 ){ $counter1++; ?>
					<?php if( $value1["page"] == $pagination["currentPage"] ){ ?>
					<li class="page-item active"><a class="page-link" href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
					<?php }else{ ?>
					<li class="page-item"><a class="page-link" href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
					<?php } ?>
					<?php } ?>

					<?php if( $pagination["currentPage"] < $pagination["max"] ){ ?>
					<li class="page-item"><a class="page-link" href="http://local.com/PHP_MVC/pagination?page=<?php echo htmlspecialchars( $pagination["next"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Next</a></li>
					<?php } ?>
					
				</ul>
			</nav>
		</div>
	</div>
</div>

<script type="text/javascript" src="/vendor/structure/res/js/script.js"></script>