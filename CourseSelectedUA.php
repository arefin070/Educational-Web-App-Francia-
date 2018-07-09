<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

	<?php include 'navbar.php'; ?>



<main role="main">

   <div class="container" style="background-color: #e9ecef ">
	<div class="row">
     <div class="col-md-8">
         <div class="card-center-float" style=" height: auto;padding-left: 8%;padding-right: 8%; padding-top: 4%; padding-bottom: 4%">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/AdfwQXJ0ZVM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
     </div>
     <div class="col-md-4">
        <div class="card-body">
            <h3>Francia Language Course</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <!--Modal For Enroll Request-->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Enroll Request</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h4 class="modal-title text-center"  >Enroll Request</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                                          </div>
                                          <div class="modal-body">
                                              <form class="form-signin">
                                                  <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                                                  <h1 class="h4 mb-4 font-weight-normal" style="color: dimgray">Please, Fill Request Form</h1>
                                                  <label for="inputEmail" class="sr-only">Email address</label>
                                                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

                                                  <label for="inputEmail" class="sr-only">Password</label>
                                                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                                                  <button class="btn btn-md btn-primary" type="submit">Submit</button>
                                                 <!-- <label for="inputPassword" class="sr-only">Password</label>
                                                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                                                  <
                                                  -->
                                                  <h3 style="font: 3Abold"><strong><a type="button" value="or Sign Up" href="SignUp.php"></a></strong></h3>
                                                  <div class="checkbox mb-3">
                                                      <label>
                                                          <input type="checkbox" value="remember-me"> Remember me
                                                      </label>
                                                  </div>
                                                  <button class="btn btn-md btn-primary" type="submit">Submit</button>
                                                  <br>
                                                  <a class="text-info" href="StartCourse.php"><small>Please, read terms & condition carefully</small></a>
                                              </form>


                                  </div>
                              </div>
                              <!--END Modal / Enroll Request-->
            <!--END Modal / Enroll Request-->
        </div>
     </div>
     </div>
   </div>
    </div>
   </div>



        <!-- Course Descriptions -->


        <div class="container" style="padding-top: 8%">
					<h4 class="display-5">Course Descriptions</h4>
					<div class="card">
			<ul class="nav nav-tabs">
					<li class="nav-item">
							<a class="nav-link active" href="#first" data-toggle="tab">Overview</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="#second" data-toggle="tab">Transcrip</a>
					</li>
			</ul>
			<div class="tab-content card-body">
					<div class="tab-pane active" id="first">
							<div class="container">
								<strong><h5>Overview</h5></strong>
								<p>Released7/2/2018
										Have you already earned the AWS Certified Solutions Architect – Associate credential and advanced your understanding of how to design and deploy cloud architecture on AWS? If so, becoming an AWS Certified Solutions Architect – Professional can help you take your IT career to the next level. In this course, learn about the benefits of the certification, who it's designed for, and how to best prepare for the core exam topic areas. Lynn Langit provides a general overview of the exam domains, including data security and costing. Lynn also explains where to find key study resources, such as AWS whitepapers, architectural guidance, and other LinkedIn Learning training courses. </p>

							</div>
					</div>

					<div class="tab-pane" id="second">
						<div class="container">
							<strong><h5>Transcrip</h5></strong>
							<p>Released7/2/2018
									Have you already earned the AWS Certified Solutions Architect – Associate credential and advanced your understanding of how to design and deploy cloud architecture on AWS? If so, becoming an AWS Certified Solutions Architect – Professional can help you take your IT career to the next level. In this course, learn about the benefits of the certification, who it's designed for, and how to best prepare for the core exam topic areas. Lynn Langit provides a general overview of the exam domains, including data security and costing. Lynn also explains where to find key study resources, such as AWS whitepapers, architectural guidance, and other LinkedIn Learning training courses. </p>

									<div class="card card-stats-success">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid eos hic magni mollitia pariatur possimus quidem quis quo sunt?
                        </div>
                    </div>
										<div class="card card-stats-primary">
	                        <div class="card-body">
	                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid eos hic magni mollitia pariatur possimus quidem quis quo sunt?
	                        </div>
	                    </div>
											<div class="card card-stats-warning">
		                        <div class="card-body">
		                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid eos hic magni mollitia pariatur possimus quidem quis quo sunt?
		                        </div>
		                    </div>
												<div class="card card-stats-danger">
		                        <div class="card-body">
		                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid eos hic magni mollitia pariatur possimus quidem quis quo sunt?
		                        </div>
		                    </div>
							</div>
						</div>
					</div>
			</div>


		</div>





    <div class="container" style="padding-top: 8%">
        <h4 class="display-4 mb-5 pb-4 text center">Other Courses</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1646b0033db%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1646b0033db%22%3E%3Crect%20width%3D%22348%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.678125%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary"href="CourseSelected.php">View</a>

                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1646b0033db%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1646b0033db%22%3E%3Crect%20width%3D%22348%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.678125%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary"href="CourseSelected.php">View</a>

                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1646b0033db%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1646b0033db%22%3E%3Crect%20width%3D%22348%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.678125%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary"href="CourseSelected.php">View</a>

                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1646b0033db%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1646b0033db%22%3E%3Crect%20width%3D%22348%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.678125%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary"href="http://localhost/template/Educational-Web-App-Francia-/courseselected.php">View</a>

                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>




 </main>



	<?php include 'signinpop.php'; ?>

	<?php include 'footer.php'; ?>
</body>
</html>
