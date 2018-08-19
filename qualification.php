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
						<span class="m-t-10 text-capitalize d-block">Qualification & Sector</span>
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