<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/pharmacy-admin/add-purchase by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:54:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
<meta name="keywords" content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
<meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
<meta property="og:url" content="https://doccure.dreamguystech.com/html/">
<meta property="og:type" content="website">
<meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
<meta property="og:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
<meta property="og:image" content="assets/img/preview-banner.html">
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="https://doccure.dreamguystech.com/html/">
<meta property="twitter:url" content="https://doccure.dreamguystech.com/html/">
<meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
<meta name="twitter:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
<meta name="twitter:image" content="assets/img/preview-banner.html">
<title>Doccure - Add Purchase Page</title>
<link rel="shortcut icon" type="image/x-icon" href="../assets_pharmacy/img/favicon.png">

<link rel="stylesheet" href="../assets_pharmacy/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets_pharmacy/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="../assets_pharmacy/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="../assets_pharmacy/css/feather.css">

<link rel="stylesheet" href="../assets_pharmacy/css/feathericon.min.css">
<link rel="stylesheet" href="../assets_pharmacy/plugins/morris/morris.css">

<link rel="stylesheet" href="../assets_pharmacy/css/select2.min.css">

<link rel="stylesheet" href="../assets_pharmacy/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="../assets_pharmacy/plugins/fullcalendar/fullcalendar.min.css">

<link rel="stylesheet" href="../assets_pharmacy/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="../assets_pharmacy/css/custom.css">
</head>
<body>
<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index_pharmacy_admin.html" class="logo">
<img src="../assets_pharmacy/img/logo.png" alt="Logo">
</a>
<a href="index_pharmacy_admin.html" class="logo logo-small">
<img src="../assets_pharmacy/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="fe fe-bell"></i> <span class="badge rounded-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_pharmacy/img/doctors/doctor-thumb-01.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_pharmacy/img/profiles/avatar-01.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_pharmacy/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="notify-block d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="../assets_pharmacy/img/profiles/avatar-03.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="../assets_pharmacy/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="../assets_pharmacy/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Ryan Taylor</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="settings.html">Settings</a>
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</li>

</ul>

</div>
 
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main</span>
</li>
<li class>
<a href="index_pharmacy_admin.html"><i class="fe fe-home"></i>
<span>Dashboard</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-document"></i> <span> Products</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="products.html">Products</a></li>
<li><a class href="add-product.html">Add Product</a></li>
<li><a class href="outstock.html">Out-Stock</a></li>
<li><a class href="expired.html">Expired</a></li>
</ul>
</li>
<li class>
<a href="categories.html"><i class="fe fe-layout"></i>
<span>Categories</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-star-o"></i> <span> Purchase</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="purchase.html">Purchase</a></li>
<li><a class="active" href="add-purchase.html">Add Purchase</a></li>
<li><a class href="order.html">Order</a></li>
</ul>
</li>
<li class><a href="sales.html"><i class="fe fe-activity"></i> <span>Sales</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fe fe-user"></i> <span> Supplier</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="supplier.html">Supplier</a></li>
<li><a class href="add-supplier.html">Add Supplier</a></li>
</ul>
</li>
<li class><a href="transactions-list.html"><i class="fe fe-table"></i>
<span>Transaction</span></a></li>
<li class="submenu">
<a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a class href="invoice-report.html">Invoice Reports</a></li>
</ul>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class>
<a href="profile.html"><i class="fe fe-user-plus"></i>
<span>Profile</span></a>
</li>
<li class>
<a href="settings.html"><i class="fe fe-vector"></i>
<span>Settings</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Add Purchase</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index_pharmacy_admin.html">Dashboard</a></li>
<li class="breadcrumb-item active">Add Purchase</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body custom-edit-service">

<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="https://doccure-laravel.dreamguystech.com/template/public/pharmacy-admin/purchase">
<input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">
<div class="service-fields mb-3">
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
<label class="mb-2">Medicine Name<span class="text-danger">*</span></label>
<input type="hidden" name="brand_name" id="brand_name" value="18">
<input class="form-control" type="text" name="brand_name" id="brand_name" value required>
</div>
</div>
<div class="col-lg-6">
<div wire:id="7FAuz6gkJdbvfAnIumhp" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;7FAuz6gkJdbvfAnIumhp&quot;,&quot;name&quot;:&quot;select2-pharmacy-admin-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;pharmacy-admin\/add-purchase&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;47fbdc1f&quot;,&quot;data&quot;:{&quot;selectedOption1&quot;:null},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;6e5c50f086c39f79e816d0ed92e7286a20001b4aa06ba7af0f38259736732fd2&quot;}}">
<div class="mb-3">
<label class="mb-2">Category <span class="text-danger">*</span></label>
<select wire:model="selectedOption1" class="select2 form-select form-control select" name="category" required>
<option value="1">Phytopathology
</option>
<option value="2" selected>Injuries
</option>
<option value="3">Cancer
</option>
<option value="4">Animal diseases
</option>
<option value="5">Growth disorders
</option>
<option value="6">Rare diseases
</option>
<option value="7">Neoplasms
</option>
<option value="8">Inflammations
</option>
<option value="9">Sleep disorders
</option>
<option value="10">Infectious diseases
</option>
</select>
</div>
</div>
 </div>
</div>
</div>
<div class="service-fields mb-3">
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
<label class="mb-2">Price<span class="text-danger">*</span></label>
<input type="hidden" name="Price" id="Price" value="18">
<input class="form-control" type="text" name="Price" id="Price" value="$" required>
</div>
</div>
<div class="col-lg-6">
<div class="mb-3">
<label class="mb-2">Quantity<span class="text-danger">*</span></label>
<input type="hidden" name="quantity" id="quantity" value="18">
<input class="form-control" type="text" name="quantity" id="quantity" value required>
</div>
</div>
</div>
</div>
<div class="service-fields mb-3">
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
<label class="mb-2">Expire Date<span class="text-danger">*</span></label>
<input class="form-control datetimepicker" type="text">
</div>
</div>
</div>
</div>
<div class="service-fields mb-3">
<div class="row">
<div class="col-lg-12">
<div class="service-upload">
<i class="fas fa-cloud-upload-alt"></i>
<span>Upload Product Images *</span>
<input type="file" name="images[]" id="images" multiple accept="image/jpeg, image/png, image/gif,">
</div>
<div id="uploadPreview">
<ul class="upload-wrap">
<li>
<div class=" upload-images">
<img alt="Blog Image" src="../assets_pharmacy/img/product/product1.jpg">
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="submit-section">
<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="../assets_pharmacy/js/jquery-3.7.0.min.js"></script>

<script src="../assets_pharmacy/js/bootstrap.bundle.min.js"></script>

<script src="../assets_pharmacy/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../assets_pharmacy/js/form-validation.js"></script>

<script src="../assets_pharmacy/js/jquery.maskedinput.min.js"></script>
<script src="../assets_pharmacy/js/mask.js"></script>

<script src="../assets_pharmacy/js/select2.min.js"></script>

<script src="../assets_pharmacy/js/moment.min.js"></script>
<script src="../assets_pharmacy/js/bootstrap-datetimepicker.min.js"></script>

<script src="../assets_pharmacy/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="../assets_pharmacy/plugins/fullcalendar/jquery.fullcalendar.js"></script>

<script src="../assets_pharmacy/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets_pharmacy/plugins/datatables/datatables.min.js"></script>

<script src="../assets_pharmacy/js/script.js"></script>
</body>

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/pharmacy-admin/add-purchase by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:54:26 GMT -->
</html>