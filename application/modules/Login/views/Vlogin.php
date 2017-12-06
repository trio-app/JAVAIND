<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();  ?>assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url();  ?>assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CRM OFFICE</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();  ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>assets/css/buttons.dataTables.min.css" rel="stylesheet" />
    
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url();  ?>assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();  ?>assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

    <div class="wrapper">
        <div>
                    <div class="content">
                            <div class="container-fluid main-content">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="card">
                                                <div class="card-header" data-background-color="purple">
                                                    <h4 class="title">CRM OFFICE</h4>
                                                    <p class="category">Login Administrator</p>
                                                </div>
                                                <div class="card-content">
                                                    <form method="POST" action="<?php echo base_url('Login/signin') ?>">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group label-floating">
                                                                        <label class="control-label">Username</label>
                                                                        <input type="text" class="form-control" name="userNama">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group label-floating">
                                                                        <label class="control-label">Password</label>
                                                                        <input type="password" class="form-control" name="userPass">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group label-floating">
                                                                    <button type="submit" id="save" class="btn btn-primary"><i class="fa fa-sign-in" style="padding-right: 10px;"></i>LOGIN</button>
                                                                    <button type="reset" class="btn btn-danger"><i class="fa fa-repeat" style="padding-right: 10px;"></i>CANCEL</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div>
                                </div>
                            </div>
                    </div>

			<footer class="footer">
				<div class="container-fluid">
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?php echo base_url();  ?>assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();  ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();  ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();  ?>assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();  ?>assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url();  ?>assets/js/bootstrap-notify.js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo base_url();  ?>assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url();  ?>assets/js/demo.js"></script>

</html>
