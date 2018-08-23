<?php include('includes/header.php') ?>
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="main-header">
				<h4>Add New Trainor</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-primary">
						<h5 class="card-header-text">Trainor Form</h5>
					</div>
					<div class="card-block">
						<div class="row card-block box-list">
							 <div class="col-lg-4">
								<i class="icofont-paper" style="font-size: 160px"></i>
								 <i class="icofont-edit-alt" style="font-size: 50px"></i>
								<h2 class="txt-primary" >Trainor Information(s)</h2>
								<p class="txt-danger" style="font-weight: bold">Fill up all the information of Trainor.</p>
							</div>
							<div class="col-lg-8" style="border-left: 1px solid #eee">
								<div class="col-lg-12">
									
									<div class="card-block">
										  <ul class="nav nav-tabs  tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Personal Information</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Certification</a>
												</li>
											</ul>
											<div class="tab-content tabs">
												<div class="tab-pane active" id="home1" role="tabpanel"><br>
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
												<div class="tab-pane" id="profile1" role="tabpanel"><br>
												   <div class="form-group row">
														<label for="file" class="col-md-2 col-form-label form-control-label">NC File </label>
														<div class="col-md-4">
															<label for="file" class="custom-file">
																<input type="file" id="file" >
																
															</label>
														</div>
													</div>
													<div class="form-group row">
														<label for="example-email-input" class="col-xs-3 col-form-label form-control-label">NC Certificate No.</label>
														<div class="col-sm-8">
															<input class="form-control" type="text"  id="example-email-input">
														</div>
													</div>
													<div class="form-group row">
														<label for="file" class="col-md-2 col-form-label form-control-label">TMC File </label>
														<div class="col-md-9">
															<label for="file" class="custom-file">
																<input type="file" id="file" >
																
															</label>
														</div>
													</div>
													<div class="form-group row">
														<label for="example-email-input" class="col-xs-3 col-form-label form-control-label">TMC Certificate No.</label>
														<div class="col-sm-8">
															<input class="form-control" type="text"  id="example-email-input">
														</div>
													</div>
													<div class="form-group row">
														<label for="file" class="col-md-2 col-form-label form-control-label">NTTC File </label>
														<div class="col-md-9">
															<label for="file" class="custom-file">
																<input type="file" id="file" >
																
															</label>
														</div>
													</div>
													<div class="form-group row">
														<label for="example-email-input" class="col-xs-3 col-form-label form-control-label">NTTC Certificate No.</label>
														<div class="col-sm-8">
															<input class="form-control" type="text"  id="example-email-input">
														</div>
													</div>
													<div class="row">
														<div class="col-md-9">
															<input type="submit" value="Submit" class="btn btn-primary waves-effect waves-light m-r-30">
															<button type="submit" class="btn btn-default waves-effect waves-light m-r-30">Cancel</button>
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
	</div>
</div>

<?php include('includes/footer.php') ?>