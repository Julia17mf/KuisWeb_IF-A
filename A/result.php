<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KUIS WEB IF-A</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
	<center>
	<div class="container p-5">
		<h1 class="my-5 p-5">Here's Your Order</h1>
		<table class="table table-striped-columns table-dark my-5 p-5" style="width: auto;">
			<tr>
				<td>Menu</td>
				<td><?= $_POST['menu']; ?></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><?= $_POST['kategori']; ?></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><?= $_POST['harga']; ?></td>
			</tr>
			<tr>
				<td>Discount</td>
				<td><?= $_POST['diskon']; ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td><?= $_POST['harga']-$_POST['diskon']; ?></td>
			</tr>
			<tr>
				<td>Order</td>
				<td><?= $_POST['order']; ?></td>
			</tr>
			<tr>
				<td>Note</td>
				<td><?= $_POST['note']; ?></td>
			</tr>
		</table>
		</div></center>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	</body>
	</html>