<html lang="en">

<?php include 'header.php'; ?>
<link rel="stylesheet" href="quiz.css">
<script src="quiz-script.js"></script>
<script src="question.js"></script>
<body>


  <?php include 'navbar.php'; ?>
  <main role="main">
    <div class="container">
    <div id="quizContainer" class="container">
      <div class="title display-4 mb-5 pb-4 text center">Basic Language Quiz</div>
      <div id="question" class="question"></div>
      <label class="option"><input type="radio" name="option" value="1" /> <span id="opt1"></span></label>
      <label class="option"><input type="radio" name="option" value="2" /> <span id="opt2"></span></label>
      <label class="option"><input type="radio" name="option" value="3" /> <span id="opt3"></span></label>
      <label class="option"><input type="radio" name="option" value="4" /> <span id="opt4"></span></label>
      <button id="nextButton" class="next-btn" onclick="loadNextQuestion();">Next Question</button>
        <br>
    </div>
    <div id="result" class="container result" style="display:none;">
    </div>
    </div>





    <div class="container" style="padding-top: 22%">
        <div class="card">
            <div class="card-header bg-white">
                <div class="media">
                    <div class="media-body">
                        <h4 class="card-title">Quiz Summary</h4>
                        <p class="card-subtitle">Your recent quiz</p>
                    </div>
                    <div class="media-right">
                        <a class="btn btn-sm btn-primary" href="student-my-courses.html">Download</a>
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-fit mb-0">
                <li class="list-group-item">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <a href="student-take-course.html">Quiz 1</a>
                        </div>
                        <div class="media-right">
                            <div class="text-center">
                                <div class="media-right text-center">
                                    <h4 class="mb-0">3.9</h4>
                                    <span class="text-muted-light">Poor</span>
                                </div>
                                <div class="progress" style="width: 100px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <a href="student-take-course.html">Quiz 2</a>
                        </div>
                        <div class="media-right">
                            <div class="text-center">
                                <div class="media-right text-center">
                                    <h4 class="mb-0">5.8</h4>
                                    <span class="text-muted-light">Good</span>
                                </div>
                                <div class="progress" style="width: 100px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <a href="student-take-course.html">Final Quiz</a>
                        </div>
                        <div class="media-right">
                            <div class="text-center">
                                <div class="media-right text-center">
                                    <h4 class="mb-0">9.8</h4>
                                    <span class="text-muted-light">Excellent</span>
                                </div>
                                <div class="progress" style="width: 100px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>



    <script src="question.js"></script>
    <script src="quiz-script.js"></script>


</main>



  <?php include 'signinpop.php'; ?>

  <?php include 'footer.php'; ?>
</body>
</html>
