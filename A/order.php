<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KUIS WEB IF-A</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<div class="container p-5">
		<div class="row">
			<div class="col-3 my-3">
				<img src="order.png" width="100%">
			</div>
			<div class="col-9 my-3 px-5">
				<form method="POST" action="result.php">
					<div class="mb-3">
						<label for="menu">Menu</label>
						<input type="text" class="form-control" id="menu" name="menu">
					</div>
					<div class="mb-3">
						<label for="kategori">Category</label>
						<select class="form-select" id="kategori" name="kategori">
							<option selected value="Drink">Drink</option>
							<option value="Food">Food</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="harga">Price</label>
						<input type="number" class="form-control" id="harga" name="harga">
					</div>
					<div class="mb-3">
						<label for="diskon">Discount</label>
						<input type="number" class="form-control" id="diskon" name="diskon">
					</div>
					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="order" value="Dine in" id="flexRadioDefault1" checked>
							<label class="form-check-label" for="flexRadioDefault1">
								Dine in
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="order" value="Take Away" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Take away
							</label>
						</div>
					</div>
					<div class="mb-3">
						<label for="note">Note</label>
						<textarea class="form-control" name="note"></textarea>
					</div>
					<div class="d-grid mt-5">
						<button type="submit" class="btn btn-block btn-outline-dark">Submit</button>		
					</div>
				</form>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	</body>
	</html>