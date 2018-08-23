<?php include('includes/header.php') ?>
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="main-header">
				<h4>Add New Learner</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-primary">
						<h5 class="card-header-text">Learner Form</h5>
					</div>
					<div class="card-block">
						<div class="row card-block box-list">
							 <div class="col-lg-4">
								<i class="icofont-paper" style="font-size: 160px"></i>
								 <i class="icofont-edit-alt" style="font-size: 50px"></i>
								<h2 class="txt-primary" >Learner Information(s)</h2>
								<p class="txt-danger" style="font-weight: bold">Fill up all the information of Learner.</p>
							</div>
							<div class="col-lg-8" style="border-left: 1px solid #eee">
								<div class="col-lg-12">
										<div class="card-block">
											<div class="form-group row">
												<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Firstname</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-text-input" required="">
												</div>
												<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Middlename</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-text-input" required="">
												</div>
												<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Lastname</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-text-input" required="">
												</div>
											</div>
											<div class="form-group row">
												<label for="example-search-input" class="col-xs-2 col-form-label form-control-label">Gender</label>
												<div class="col-sm-4">
													<select class="form-control " id="exampleSelect1" required="">
														<option>Male</option>
														<option>Female</option>
													</select>
												</div>
												 <div class="form-group">
													<label for="example-number-input" class="col-xs-1 col-form-label form-control-label">Age</label>
													<div class="col-sm-4">
														<input class="form-control" type="number" id="example-number-input" required="">
													</div>
												</div>
											</div>
											 <div class="form-group row">
												<label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Birth Place</label>
												<div class="col-sm-10">
													<input class="form-control" type="text" id="example-number-input" required="">
												</div>
											</div>
											<div class="form-group row">
												<label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Email</label>
												<div class="col-sm-10">
													<input class="form-control" type="email"  id="example-email-input" required="">
												</div>
											</div>
											 <div class="form-group row">
												<label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Contact</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-email-input" required="">
												</div>
											</div>
											<div class="form-group row">
												<label for="example-date-input" class="col-xs-2 col-form-label form-control-label"> Birth Date</label>
												<div class="col-sm-10">
													<input class="form-control" type="date"  id="example-date-input" required="">
												</div>
											</div>
											<div class="form-group row">
												<label for="example-search-input" class="col-xs-2 col-form-label form-control-label">Educational Attainment</label>
												<div class="col-sm-10">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>