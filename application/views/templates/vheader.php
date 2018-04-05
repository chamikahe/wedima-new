<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/images/images/logo4.png';?>">
    <title>The Wedima</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php echo base_url().'assets/css/vendor.css';?>" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<!--    <link href="--><?php //echo base_url().'assets/css/layout.css';?><!--" rel="stylesheet" type="text/css" media="all">-->
    <style>

    </style>




</head>
<body>
<nav class="navbar navbar-expand-lg  fixed-top top-nav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url().'home';?>"><img src="<?php echo base_url().'assets/images/images/logo4.png';?>" style="height: 120px;"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto" >
                <li class="nav-item ">
                    <a class="nav-link font-clr" href="<?php echo base_url().'home';?>" id="navbarDropdownPortfolio">Home</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item" >
                    <a class="nav-link font-clr" href="contact.html">Vendors</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <li class="nav-item">
                    <a class="nav-link font-clr" href="contact.html">Special Offers</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                    <?php
                        if($this->session->userdata('logged')==1){
                    ?>

                 <li class="nav-item" style="color: white">
                     <a href="<?php echo base_url().'vendor';?>" style="text-decoration: none">
                     <img src="<?php echo base_url().'assets/images/v1.jpg'?>" alt="Avatar" class="avatar" style="vertical-align: middle;width: 25px;height: 25px;border-radius: 50%;">&nbsp;&nbsp;<?php
                        echo $this->session->userdata('username');
                     ?></a>
                 </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <li class="nav-item">
                                <a class="nav-link font-clr" href="<?php echo base_url().'login/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

                            </li>
                            <?php
                        }

                        else{

                    ?>
                <?php
                }
?>

            </ul>

        </div>
    </div>

</nav>




