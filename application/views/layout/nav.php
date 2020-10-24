<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
         <?php echo lang('brand'); ?> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>home/home" class="nav-link"><?php echo lang('home'); ?></a>
          </li>  
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>home/service" class="nav-link"><?php echo lang('news'); ?></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>home/about" class="nav-link"><?php echo lang('about'); ?></a>
          </li> 
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>home/login" class="nav-link"><?php echo lang('login'); ?></a>
          </li> 
          <li class="nav-link"style="margin-left: 100px;"><b><?php echo lang('languages'); ?>:-</b></li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
             <?php echo lang('lang_select'); ?>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
             <a href="<?php echo base_url()?>en" class="dropdown-item">
               English
              </a>
              <a href="<?php echo base_url()?>am" class="dropdown-item">
               አማረኛ
              </a>
              <a href="<?php echo base_url()?>or" class="dropdown-item">
               Oromigna
              </a>
              <a href="<?php echo base_url()?>tg" class="dropdown-item">
               Tigrigna
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>