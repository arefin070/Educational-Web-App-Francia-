<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

	<?php include 'navbar.php'; ?>



<main role="main">
    <div class="jumbotron" >
        <div class="container" >
            <h3 class="display-3">Francia Language Basic Courses</h3>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        </div>

    </div>

    <div class="jumbotron" style="background: rgb(21,20,20)">

        <div class="card-center-float" style="padding-left: 2%;padding-right: 2%">
            <iframe width="100%" height="568" src="https://www.youtube.com/embed/1EtI0KjXfdk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="padding-top: 2%;"></iframe>
        </div>
        <div class="container" style="padding-top: 2%">
            <h5 style="color: #fafafa">Francia Language Course</h5>
            <p class="card-text" style="color: #fafafa">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!--Modal For Enroll Request-->
            <button type="button" class="btn btn-primary btn-md">Next Lesson</button>
        </div>

    </div>



    <div class="container" style="padding-top: 6%">
        <div class="card">
            <div class="card-header bg-white">
                <div class="media">
                    <div class="media-body">
                        <h4 class="card-title">Francia Language Course</h4>
                        <p class="card-subtitle">Your lessons</p>
                    </div>
                    <div class="media-right">

                    </div>
                </div>
            </div>
            <ul class="list-group list-group-fit mb-0">
                <li class="list-group-item">
                    <div class="media align-items-left">
                        <div class="media-body">
                            <a href="CourseSelected.php"> Lesson 1</a>
                        </div>
                        <div class="media-left">
                            <div class="text-left">
                                <div class="mb-1">
                                    <i class="material-icons text-muted-light">This lesson will guide you to develop Francian language</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <a href="student-take-course.html">Lesson 1</a>
                        </div>
                        <div class="media-center">
                            <div class="text-center">
                                <div class="mb-1">
                                    <p>This lesson will guide you to develop Francian language</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <a href="student-take-course.html">Lesson 1</a>
                        </div>
                        <div class="media-center">
                            <div class="text-center">
                                <div class="mb-1">
                                    <p>This lesson will guide you to develop Francian language</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Quiz -->
    <div class="container" style="padding-top: 4%">
    <div class="card card-stats-primary">
        <div class="card-body">
            <div class="media align-items-center">
                <div class="media-left">
                    <i class="material-icons text-muted-light">credit_card</i>
                </div>
                <div class="media-body">
                    Your subscription ends on <strong>25 February 2015</strong>
                </div>
                <div class="media-right">
                    <img src="https://cdn.kastatic.org/images/mastery/UnitTestNotStarted.svg" style="width: 100px">
                    <a class="btn btn-primary btn-md" href="quiz.php" > Start Quiz</a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container" style="padding-top: 6%">

				<!-- Demo Course Progress -->
				<div class="card">
													<div class="card-header bg-white">
															<h4 class="card-title"><a href="student-take-course.html">Learn VueJs the easy way!</a></h4>
															<small class="text-muted">Lessons: 3 of 8</small>
													</div>
													<div class="progress rounded-0">
															<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="card-footer bg-white">
															<a href="student-take-course.html" class="btn btn-primary btn-sm">Continue <i class="material-icons btn__icon--right"></i></a>
													</div>
											</div>

				<!-- End of Course progress-->


        <div class="card">

            <ul class="list-group list-group-fit mb-0">
                <li class="list-group-item">
                    <div class="media align-items-left">
                        <div class="media-body">
                            <a href="student-take-course.html">Lesson 1</a>
                        </div>
                        <div class="media-left">
                            <div class="text-left">
                                <div class="mb-1">
                                    <i class="material-icons text-muted-light">This lesson will guide you to develop Francian language</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <a href="student-take-course.html">Lesson 1</a>
                        </div>
                        <div class="media-center">
                            <div class="text-center">
                                <div class="mb-1">
                                    <p>This lesson will guide you to develop Francian language</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <a href="student-take-course.html">Lesson 1</a>
                        </div>
                        <div class="media-center">
                            <div class="text-center">
                                <div class="mb-1">
                                    <p>This lesson will guide you to develop Francian language</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- End Quiz -->













 </main>



	<?php include 'signinpop.php'; ?>

	<?php include 'footer.php'; ?>
</body>
</html>
