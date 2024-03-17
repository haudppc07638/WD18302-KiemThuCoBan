<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Dashboard
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>
<div class="row">
<?php
$db = new category();
$countCate= $db->countCate();
foreach ($countCate  as $cates) { ?>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Categories<i>
            </i>
          </h4>
          <h2 class="mb-5">  <?=$cates['countCate'];?> </h2>
        </div>
      </div>
    </div>
<?php } ?>

<?php
$db = new Products();
$Countpro = $db->Countpro();
foreach ($Countpro as $pros) { ?>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Products</h4>
          <h2 class="mb-5">  <?=$pros['Countpro'];?> </h2>
        </div>
      </div>
    </div>
    <?php } ?>

<?php
$db = new User();
$countUser = $db->countUser();
foreach ($countUser as $uses) { ?>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Users</h4>
          <h2 class="mb-5">  <?=$uses['countUser'];?> </h2>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
   <!-- <div class="row">
    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Visit And Sales Statistics</h4>
            <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right">
            </div>
          </div>
          <canvas id="visit-sale-chart" class="mt-4"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Traffic Sources</h4>
          <canvas id="traffic-chart"></canvas>
          <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
        </div>
      </div>
    </div>
  </div> -->
  