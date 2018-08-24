<?php include('includes/header.php') ?>
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="main-header">
				<h4>Add New Schedule</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header bg-primary">
						<h5 class="card-header-text">Shedule Form</h5>
					</div>
					<div class="card-block">
						<div class="row card-block box-list">
							 <div class="col-lg-4">
								<i class="icofont-paper" style="font-size: 160px"></i>
								 <i class="icofont-edit-alt" style="font-size: 50px"></i>
								<h2 class="txt-primary" >Schedule Information(s)</h2>
								<p class="txt-danger" style="font-weight: bold">Fill up all the information of schedule(s)</p>
							</div>
							<div class="col-lg-8" style="border-left: 1px solid #eee">
								<div class="col-lg-12">
										<div class="card-block"><div class="form-group row"><h2 class="text-info" style="    border-bottom: 2px solid #ededee;padding: 10px;">Personal Information</h2></div>
											<div class="form-group row"><b class="text-danger">About Me</b></div>
											<div class="form-group row">
												<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Firstname</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-text-input" required="">
												</div>
												<label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Middlename</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-text-input" required="">
												</div>
												<div class="form-inline col-sm-12">
		                                            <div class="form-group">
		                                                <label for="inline2mail" class="m-r-30 form-control-label">Lastname</label>
		                                                <input id="inline2mail" type="email" class="form-control" >
		                                            </div>
		                                            <div class="form-group">
		                                                <label for="inline2pwd" class="m-r-30 form-control-label m-l-20">Ext.</label>
		                                                <input id="inline2pwd" type="password" class="form-control">
		                                            </div>
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
												<label for="example-date-input" class="col-xs-2 col-form-label form-control-label"> Birth Date</label>
												<div class="col-sm-10">
													<input class="form-control" type="date"  id="example-date-input" required="">
												</div>
											</div>
											<div class="form-group row">
												<label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Birth Place</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-email-input" required="">
												</div>
											</div>
											<div class="form-group row">
												<label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Nationality</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-email-input" required="">
												</div>
											</div>
											<div class="form-group row"><b class="text-danger">Contacts</b></div>
											<div class="form-group row">
												<label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Email</label>
												<div class="col-sm-10">
													<input class="form-control" type="email"  id="example-email-input" required="">
												</div>
											</div>
											 <div class="form-group row">
												<div class="form-inline col-sm-12">
		                                            <div class="form-group">
		                                                <label for="inline2mail" class="m-r-30 form-control-label">Mobile No.</label>
		                                                <input id="inline2mail" type="email" class="form-control" >
		                                            </div>
		                                            <div class="form-group">
		                                                <label for="inline2pwd" class="form-control-label m-l-20">Tel No.</label>
		                                                <input id="inline2pwd" type="password" class="form-control">
		                                            </div>
		                                        </div>
											</div>
											<div class="form-group row">
												<label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Facebook Account</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-email-input" required="">
												</div>
											</div>
											<div class="form-group row"><b class="text-danger">Address</b></div>
											<label for="exampleInputEmail1" class="form-control-label">Home address</label>
											<div class="form-group row">
												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
											</div>
											<label for="exampleInputEmail1" class="form-control-label">Permanent address</label>
											<div class="form-group row">

												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
												<div class="col-sm-3">
													<select class="form-control " id="exampleSelect1">
														<option>HS Graduate</option>
														<option>HS Level</option>
														<option>College Graduate</option>
														<option>College Level</option>
													</select>
												</div>
											</div>
											<div class="form-group row"><b class="text-danger">Emergency Contact Information</b></div>
											<div class="form-group row">
		                                       <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Name</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-email-input" required="">
												</div>
											</div>
											<div class="form-group row">
		                                       <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Address</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-email-input" required="">
												</div>
											</div>
											<div class="form-group row">
		                                       <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Contact No.</label>
												<div class="col-sm-10">
													<input class="form-control" type="text"  id="example-email-input" required="">
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