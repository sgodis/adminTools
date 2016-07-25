<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use app\utils;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<!DOCTYPE html>
<html>
<head>
    <?php $this->beginContent('@app/views/layouts/header.php'); ?><?php $this->endContent(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->beginContent('@app/views/layouts/top.php'); ?><?php $this->endContent(); ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->beginContent('@app/views/layouts/sidebar.php'); ?><?php $this->endContent(); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?= $content ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->beginContent('@app/views/layouts/footer.php'); ?><?php $this->endContent(); ?>
    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class"control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>
