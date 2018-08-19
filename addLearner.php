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
								<p class="txt-danger" style="font-weight: bold">Fill up all the information of Learner or Trainee.</p>
							</div>
							<div class="col-lg-8" style="border-left: 1px solid #eee">
								<div class="col-lg-12">
								   <div class="card-block">
										<div class="row">
											<div class="col-sm-6">
												<div class="md-input-wrapper">
													<input type="text" class="md-form-control md-static" />
													<label>First-Name</label>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="md-input-wrapper">
													<input type="text" class="md-form-control md-static" />
													<label>Last-Name</label>
												</div>
											</div>
										</div>
										<div class="md-input-wrapper">
											<input type="password" class="md-form-control md-static" />
											<label>Password</label>
										</div>
										<div class="md-input-wrapper">
											<input type="email" class="md-form-control md-static" />
											<label>Email</label>
										</div>
										<div class="md-input-wrapper md-disable">
											<input type="text" class="md-form-control md-static" disabled="disabled" />
											<label>Disabled</label>
										</div>
										<div class="md-input-wrapper">
											<input type="text" class="md-form-control md-static md-valid" value="Read-only label" readonly />
											<label>Read-only</label>
										</div>
										<div class="md-input-wrapper">
											<input type="text" class="md-form-control md-static md-valid" value="Prefilled Value" />
											<label>Pre-fill</label>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="md-group-add-on">
													<span class="md-add-on"><i class="icofont icofont-cur-dollar"></i></span>
													<div class="md-input-wrapper">
														<input type="text" class="md-form-control md-static" />
														<label>Add-on</label>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="md-group-add-on">
														<span class="md-add-on">
															<i class="icofont icofont-ui-rate-blank"></i>
														</span>
													<div class="md-input-wrapper">
														<input type="text" class="md-form-control md-static" />
														<label>Add-on-icon</label>
													</div>
												</div>
											</div>
										</div>
										<div class="md-group-add-on">
												<span class="md-add-on-file">
													<button class="btn btn-success waves-effect waves-light">File</button>
												</span>
											<div class="md-input-file">
												<input type="file" class="" />
												<input type="text" class="md-form-control md-static md-form-file">
												<label class="md-label-file">Upload File</label>
											</div>
										</div>
										<div class="md-input-wrapper">
											<textarea class="md-form-control md-static" cols="2" rows="4"></textarea>
											<label>Textarea</label>
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