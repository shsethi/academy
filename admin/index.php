<?php
# Inialize session
    session_start();
# Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['userId'])) {
header("Location: http://localhost/aceacademy.com/");
    }
?>

<!-- <?php include('header.php') ?> -->
<?php include('/includes/header.php') ?>

<title>Ace Academy</title>


<body>
<div id="wrapper">
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
</div>
        
 <script src="../js/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
</body>
<?php include('/includes/footer.php'); ?>