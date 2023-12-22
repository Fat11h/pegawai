<!DOCTYPE html>
<html lang="en">
    <head>
		<link href="css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />
		<script src="js/dataTables.bootstrap.js" type="text/javascript"></script>
		<script src="js/dataTables.tableTools.min.js" type="text/javascript"></script>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pegawai - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="pegawai.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pegawai
                            </a>
                            <a class="nav-link" href="divisi.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Divisi
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pegawai</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pegawai</li>
                        </ol>
						<a href="add_pegawai.php">
							<button style='margin-bottom:30px;' type="button" class="btn btn-primary">Add Data</button>
						</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pegawai
                            </div>
                            <div class="card-body" >
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
											<th>NO.</th>
                                            <th>Nama</th>
											<th>Divisi</th>
                                            <th>Email</th>
                                            <th>Nomor Hp</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
											<th>NO.</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Email</th>
                                            <th>Nomor Hp</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
										include 'connection.php';
										$result = $mysqli->query("SELECT * FROM pegawai");
										if($result->num_rows>0){
											$num=1;
											while($row=$result->fetch_assoc()){
												?>
												<tr>
													<td><?php echo $num++;?></td>
													<td><?php echo ucfirst($row['nama']);?></td>
													<td><?php echo ucfirst($row['divisi'])?></td>
													<td><?php echo ucfirst($row['email']);?></td>
													<td><?php echo ucfirst($row['nomor']);?></td>
												</tr>
										<?php
											};
										};
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
		<script type="text/javascript"></script>
    </body>
</html>
