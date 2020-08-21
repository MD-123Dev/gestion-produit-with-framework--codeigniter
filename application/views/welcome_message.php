<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

	<!--Navbar-->
	<nav class="navbar navbar-expand-sm navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>

			</ul>

		</div>
	</nav>


	<!--/.Navbar-->
	<div class="container">
		<div class="row m-5">
			<div class="col-md-10">
				<div class="form-group">
					<div class="input-group">

						<input type="text" name="search_text" id="search_text" placeholder="Search by Product Name" class="form-control d-flex justify-content-center" />
					</div>
				</div>
			</div>
		</div>



		<a href="" class="btn btn-info btn-rounded float-right mb-2">Add new Product</a>
		<table class="table" id="table">
			<thead class="black white-text">
				<tr>
					<th>#</th>
					<th>Nom Produit </th>
					<th>Prix : </th>
					<th>Category :</th>
					<th>Actions :</th>
				</tr>
			</thead>
			<tbody>
				<tr>




					<td></td>
					<td></td>
					<td></td>
					<td></td>

					<td>
						<a href="" class="btn btn-info">Edit</a>
						<a onclick="" href="" class='btn btn-danger'>Delete</a>
					</td>

				</tr>

			</tbody>
		</table>

	</div>




</body>

<footer class="page-footer font-small blue">


	<div class="footer-copyright text-center py-3">2020 coptright:

	</div>


</footer>


</html>