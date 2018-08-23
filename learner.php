<?php include('includes/header.php') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<div class="content-wrapper">
   <div class="container-fluid">
	<div class="row">
		<div class="main-header">
			<h4>Learner</h4>
		</div>
	</div>
<div class="row">
			<!-- Recent Items start -->
			<div class="col-lg-12 col-md-12 grid-item">
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">learner List</h5>
						<span class="m-t-10 text-capitalize d-block text-info">active learner</span><br>
						<button type="button" class="btn btn-inverse-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Learner" onclick="redirect('addLearner')">
                                    <i class="icofont icofont-plus"></i><span class="m-l-10">Add New</span>
                                </button>
					</div>
					<div class="card-block">
						<div class="table-responsive">
							<table class="table m-b-0" id="example">
								<thead>
									<tr>
										<th class="p-t-0">ID</th>
										<th class="p-t-0">Name</th>
										<th class="p-t-0">Status</th>
										<th class="p-t-0">Operation</th>
										<th class="p-t-0">Date Created</th>
									</tr>
								</thead>
								<tbody>
									<tr>

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
    function redirect($url){
    	window.location.href = $url;
    }
</script>