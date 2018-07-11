<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<link type='text/css' rel='stylesheet' href='quizRif.css'/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open Sans"/>

<body>

	<?php include 'navbar.php'; ?>



	<main role="main">

		<div class="container">
			<h3 class="display-4"> Quiz 1: Basic Francian Language</h3>
			<div class="card">
  <div class="card-body">
    		<div class="card">
					<div class="card-body" style="align: center">
							<img src="https://pbs.twimg.com/profile_images/846659478120366082/K-kZVvT8.jpg">
					</div>

				</div>

			<div class="d-block my-3">
				<div class="custom-control custom-radio">
					<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
					<label class="custom-control-label" for="credit">Credit card</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
					<label class="custom-control-label" for="credit">Credit card</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
					<label class="custom-control-label" for="debit">Debit card</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
					<label class="custom-control-label" for="paypal">PayPal</label>
				</div>
				<div class="float left">
					<a class="btn btn-primary btn-lg" type="button" id="next" href="#">Next</a>
					<a class="btn btn-primary btn-lg" type="button" id="prev" href="#">Previous</a>
					<a class="btn btn-primary btn-lg" type="button" id="Start" href="#">Start Over</a>
				</div>
			</div>

		</div>
	</div>

			 <!-- <button class='' id='next'>Next</a></button>
			 <button class='' id='prev'>Prev</a></button>
			 <button class='' id='start'> Start Over</a></button> -->
		 </div>
				<script>

						var questions = [{
								question: "What is 2*5?",
								choices: [2, 5, 10, 15, 20],
								correctAnswer: 2
						}, {
								question: "What is 3*6?",
								choices: [3, 6, 9, 12, 18],
								correctAnswer: 4
						}, {
								question: "What is 8*9?",
								choices: [72, 99, 108, 134, 156],
								correctAnswer: 0
						}, {
								question: "What is 1*7?",
								choices: [4, 5, 6, 7, 8],
								correctAnswer: 3
						}, {
								question: "What is 8*8?",
								choices: [20, 30, 40, 50, 64],
								correctAnswer: 4
						}];


				</script>
				<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
	 <script type='text/javascript' src='QuizRif.js'></script>
  </main>



	<?php include 'signinpop.php'; ?>

	<?php include 'footer.php'; ?>
</body>
</html>
