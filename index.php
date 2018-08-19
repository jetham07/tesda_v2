<?php 

    include('includes/header.php');
 ?>
<div class="content-wrapper">

   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Dashboard</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row m-b-30 dashboard-header">
                <div class="col-lg-3 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <i class="icon-bubbles"></i>
                            <div class="f-right">
                                <h2 class="counter">4500</h2>
                                <span>Total Sales</span>
                            </div>
                        </div>
                        <div class="bg-dark-primary">
                            <p class="week-sales">Total SALES</p>
                            <p class="total-sales">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <i class="icon-speedometer"></i>
                            <div class="f-right">
                                <h2 class="counter">3521</h2>
                                <span>Last Week's Sale</span>
                            </div>
                        </div>
                        <div class="bg-dark-success">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales ">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class="counter">1085</h2>
                                <span>New Orders</span>
                            </div>
                        </div>
                        <div class="bg-dark-warning">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales">84</p>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-sm-6">
                    <div class="bg-facebook dashboard-primary">
                        <div class="sales-primary">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class="counter">1085</h2>
                                <span>New Orders</span>
                            </div>
                        </div>
                        <div class="bg-dark-facebook" style="#fff">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales">84</p>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- 4-blocks row end -->
            <!-- 1-3-block row start -->

        <!-- 3-1-block start -->
        <div class="row">
            <!-- Recent Items start -->
            <div class="col-lg-4 col-md-4 grid-item">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Recent Orders</h5>
                        <span class="m-t-10 text-capitalize d-block">Last 24 Hour Orders</span>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr class="text-uppercase">
                                        <th class="p-t-0">ID</th>
                                        <th class="p-t-0">Item Name</th>
                                        <th class="p-t-0">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1001</th>
                                        <td>Dell Inspiron 3555 Laptop</td>
                                        <td><a href="#">$600</a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th>2581</th>
                                        <td>HP 15-Ay008tx Laptop</td>
                                        <td><a href="#">$857</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>8596</th>
                                        <td>HP Pavilion 13-S102TU X360 </td>
                                        <td><a href="#">$860</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>1256</th>
                                        <td>Dell Inspiron 3555 Laptop</td>
                                        <td><a href="#">$600</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>1258</th>
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
<!-- 2-1 block start -->
<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table m-b-0 photo-table">
                        <thead>
                            <tr class="text-uppercase">
                                <th>Photo</th>
                                <th>Project</th>
                                <th>Completed</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                </th>
                                <td>Appestia Project
                                    <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                </td>
                                <td>
                                    <span class="pie" style="display: none;">226,134</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15" fill="#2196F3"></path><path d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                </td>
                                <td>50%</td>
                                <td>October 21, 2015</td>
                            </tr>
                            <tr>
                                <th>
                                    <img class="img-fluid img-circle" src="assets/images/avatar-4.png" alt="User">
                                </th>
                                <td>Contract with belife Company
                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                </td>
                                <td>
                                    <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                </td>
                                <td>70%</td>
                                <td>November 21, 2015</td>
                            </tr>
                            <tr>
                                <th>
                                    <img class="img-fluid img-circle" src="assets/images/avatar-1.png" alt="User">
                                </th>
                                <td>Web Consultancy project
                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                </td>
                                <td>
                                    <span class="pie" style="display: none;">1,4</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 29.265847744427305 10.36474508437579 L 15 15" fill="#2196F3"></path><path d="M 29.265847744427305 10.36474508437579 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                </td>
                                <td>40%</td>
                                <td>September 21, 2015</td>
                            </tr>
                            <tr>
                                <th>
                                    <img class="img-fluid img-circle" src="assets/images/avatar-3.png" alt="User">
                                </th>
                                <td>Contract with belife Company
                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                </td>
                                <td>
                                    <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                </td>
                                <td>70%</td>
                                <td>November 21, 2015</td>
                            </tr>
                            <tr>
                                <th>
                                    <img class="img-fluid img-circle" src="assets/images/avatar-1.png" alt="User">
                                </th>
                                <td>Contract with belife Company
                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                </td>
                                <td>
                                    <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                </td>
                                <td>70%</td>
                                <td>November 21, 2015</td>
                            </tr>
                            <tr>
                                <th>
                                    <img class="img-fluid img-circle" src="assets/images/avatar-2.png" alt="User">
                                </th>
                                <td>Contract with belife Company
                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                </td>
                                <td>
                                    <span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="30" width="30"><path d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15" fill="#2196F3"></path><path d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15" fill="#ccc"></path></svg>
                                </td>
                                <td>70%</td>
                                <td>November 21, 2015</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
    </div>
</div>
<!-- 2-1 block end -->
</div>
<!-- Main content ends -->
<!-- Container-fluid ends -->

<?php 
    include('includes/footer.php'); 
?>