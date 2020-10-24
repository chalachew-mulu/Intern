
<div class="page-header header-filter" data-parallax="true" style="background-image: url('<?php echo base_url();?>assets/img/city-profile.jpg');">
</div>
<div class="main main-raised">
<div class="profile-content">
<div class="container">
<div class="row">
<div class="col-md-6 ml-auto mr-auto">
<div class="profile">
    <div class="avatar">
      <img src="<?php echo base_url();?>assets/img/faces/kendall.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
    </div>
    <div class="name">
       <h4 class="title">User Authentication</h4>
   </div>
</div>
<div class="card"> 
<div id="test" class="progress2 red">
   <div class="indeterminate pink lighten-5" id="test2"></div>
</div>
<?php echo form_open("login/signin", array('method' => 'post')); ?>
<div class="card-body">
 <div id="div_password"> 
  <div class="input-group form-group">
    <div class="input-group-prepend mr-3">
      <span class="input-group-text" style="height: 40px;width: 40px; border-radius: 50%;background-color: #6699cc;color: #fff">
      <li class="fa fa-user"></li>
      </span>
    </div>
      <label class="bmd-label-floating ml-5">Your Password</label>
      <input type="text" class="form-control" id="password" name="password">             
  </div> 
 </div>   
</div>
<div class="footer ml-3" id="name">
  <button class="btn btn-primary ml-5" type="submit" name="login" id="login"><?php echo lang('login'); ?></button>
   <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg ml-3">forgot Password?</a>
</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>
</div>