<!doctype html>
<html lang="en">
<head>
	<title>GH+O</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<style>
		h1{
			font-weight:bold;
			margin-top:50px;
		}

		h2{
			margin-top:30px;
		}

		.form-check{
			margin-left:20px;
		}
	</style>

</head>
<body>

<div class="container">
	<h1>GH+O</h1>

	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="signature-tab" data-toggle="tab" href="#ghoofy" role="tab" aria-controls="title" aria-selected="true">Ghoofy</a>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="signature" role="tabpanel" aria-labelledby="signature-tab">
			<form method="POST" action="process.php">
				<div class="form-group">
					<label for="name">Wie?</label>
					<select class="form-control" id="role" name="name">
<!--						For loop here-->
					</select>
				</div>
				<div class="form-group">
					<label for="role">Geslacht:</label>
					<select class="form-control" id="location" name="gender">
						<option>Man</option>
						<option>Vrouw</option>
					</select>
				</div>
				<div class="form-group">
					<label for="role">Rol:</label>
					<select class="form-control" id="role" name="role[]" multiple>
						<option>Boekhouder</option>
						<option>Braintrainer</option>
						<option>Communicatiegids</option>
						<option>Computerfixer</option>
						<option>Conceptmaker</option>
						<option>Klantverblijder</option>
						<option>Koersmaker</option>
						<option>Levensredder</option>
						<option>Marktmeester</option>
						<option>Ontwerper</option>
						<option>Procespionier</option>
						<option>Productiemeester</option>
						<option>Rekenmeester</option>
						<option>Schrijver</option>
						<option>Showsteler</option>
						<option>Strategiemaker</option>
						<option>Studentmentor</option>
						<option>Talentontwikkelaar</option>
						<option>Thuismaker</option>
						<option>Vertrouweling</option>
						<option>Werkgelukszaaier</option>
						<option>Werkinnovator</option>
					</select>
				</div>
				<div class="form-group">
					<label for="role">Type rol:</label>
					<select class="form-control" id="location" name="type">
						<option>Hoofdrol</option>
						<option>Bijrol</option>
					</select>
				</div>
				<div class="form-group">
					<label for="role">Weggeven of aannemen?:</label>
					<select class="form-control" id="location" name="type">
						<option>Weggeven</option>
						<option>Aannemen</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Verstuur</button>
			</form>
		</div>
	</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>