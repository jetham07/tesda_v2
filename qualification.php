<?php include('includes/header.php') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<div class="content-wrapper">
   <div class="container-fluid">
	<div class="row">
		<div class="main-header">
			<h4>Qualification</h4>
		</div>
	</div>
<div class="row">
			<!-- Recent Items start -->
			<div class="col-lg-12 col-md-12 grid-item">
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Qualification List</h5>
						<span class="m-t-10 text-capitalize d-block text-info">Qualification & Sector</span><br>
						<button type="button" class="btn btn-inverse-primary waves-effect waves-light" 
							data-toggle="modal" data-target="#border-checkbox-Modal">
							<i class="icofont icofont-plus"></i><span class="m-l-10">Add New</span>
						</button>
					</div>
					<div class="modal fade modal-flex" id="border-checkbox-Modal" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-md" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h5 class="modal-title">Add New Qualification</h5>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group row">
											<label for="example-text-input" class="col-xs-8 col-form-label form-control-label">Sector Name</label>
											<div class="col-sm-12">
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="example-search-input" class="col-xs-8 col-form-label form-control-label">Qualification Name</label>
											<div class="col-sm-12">
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="example-email-input" class="col-xs-8 col-form-label form-control-label">Duration</label>
											<div class="col-sm-12">
												<input class="form-control" type="number" >
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 ">
											<button type="submit" class="btn btn-default waves-effect waves-light m-l-10 f-right" data-dismiss="modal">Cancel</button>
												<button type="button " class="btn btn-primary waves-effect waves-light f-right"  
													data-toggle="modal" data-target="#border-checkbox-Modal">
													Submit
												</button>
												
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="card-block">
						<div class="table-responsive">
							<table class="table m-b-0" id="example">
								<thead>
									<tr>
										<th class="p-t-0">ID</th>
										<th class="p-t-0">Item Name</th>
										<th class="p-t-0">Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1001</td>
										<td>Dell Inspiron 3555 Laptop</td>
										<td><a href="#">$600</a>
										</td>

									</tr>
									<tr>
										<td>2581</td>
										<td>HP 15-Ay008tx Laptop</td>
										<td><a href="#">$857</a>
										</td>
									</tr>
									<tr>
										<td>8596</td>
										<td>HP Pavilion 13-S102TU X360 </td>
										<td><a href="#">$860</a>
										</td>
									</tr>
									<tr>
										<td>1256</td>
										<td>Dell Inspiron 3555 Laptop</td>
										<td><a href="#">$600</a>
										</td>
									</tr>
									<tr>
										<td>1258</td>
										<td>HP Pavilion Notebook</td>
										<td><a href="#">$700</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		
		</div>

		</div>
<!-- 2-1 block end -->
</div>
<?php include('includes/footer.php') ?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $('#example').DataTable();
</script>