<div class="wrapper ">
 <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?php echo base_url()?>plugin/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
   <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
         SI   
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
         Student Intership 
      </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="<?php echo base_url()?>plugin/img/faces/avatar.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                       Tania Andrew 
                      <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> MP </span>
                              <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> EP </span>
                              <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url()?>login/logout">
                              <span class="sidebar-mini"> S </span>
                              <span class="sidebar-normal"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() ?>admin/home">
                    <i class="fa fa-home" id="icon"></i>
                    <p> Admin </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() ?>admin/supervise">
                    <i class="fa fa-user" id="icon"></i>
                    <p> Supervise </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() ?>admin/session">
                    <i class="fa fa-lock" id="icon"></i>
                    <p> Session </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() ?>admin/assess">
                    <i class="fa fa-copy" id="icon"></i>
                    <p> Assessment </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() ?>admin/placement">
                    <i class="fa fa-edit" id="icon"></i>
                    <p> Placement </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url() ?>admin/survey">
                    <i class="fa fa-trash" id="icon"></i>
                    <p> Survey </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                    <i class="fa fa-table" id="icon"></i>
                    <p> List 
                       <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="../../examples/tables/regular.html">
                                <span class="sidebar-mini"> L1 </span>
                                <span class="sidebar-normal"> List 1 </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../../examples/tables/extended.html">
                              <span class="sidebar-mini"> L2 </span>
                              <span class="sidebar-normal"> List 2 </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../../examples/tables/datatables.net.html">
                              <span class="sidebar-mini"> L3 </span>
                              <span class="sidebar-normal"> List 3 </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>


<div class="main-panel">
              <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
	<div class="container-fluid">

    <div class="navbar-wrapper">
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
            <i class="fa fa-arrow-alt-circle-right text_align-center visible-on-sidebar-regular"></i>
            <i class="fa fa-arrow-alt-circle-left design_bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
        </div>
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
      <span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
		</button>

<div class="collapse navbar-collapse justify-content-end"> 
<ul class="navbar-nav">
  <li class="nav-item dropdown">
    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-user"></i>
      <span class="notification">5</span>
      <p class="d-lg-none d-md-block">
        Some Actions
      </p>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Mike John responded to your email</a>
      <a class="dropdown-item" href="#">You have 5 new tasks</a>
      <a class="dropdown-item" href="#">You're now friend with Andrew</a>
      <a class="dropdown-item" href="#">Another Notification</a>
      <a class="dropdown-item" href="#">Another One</a>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#pablo">
      <i class="fa fa-user-secret"></i>
      <p class="d-lg-none d-md-block">
        Account
      </p>
    </a>
  </li>
</ul>   
	 </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="content">
 <div class="container-fluid">
  <div class="card">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Color</h4>
          </div>
          <div class="card-body">
            <button class="btn">Default</button>
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-info">Info</button>
            <button class="btn btn-success">Success</button>
            <button class="btn btn-warning">Warning</button>
            <button class="btn btn-danger">Danger</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Buttons with Label</h4>
          </div>
          <div class="card-body">
            <button class="btn">
              <span class="btn-label">
                <i class="material-icons">keyboard_arrow_left</i>
              </span>
              Left
            </button>
            <button class="btn">
              Right
              <span class="btn-label btn-label-right">
                <i class="material-icons">keyboard_arrow_right</i>
              </span>
            </button>
            <button class="btn btn-info">
              <span class="btn-label">
                <i class="material-icons">priority_high</i>
              </span>
              Info
            </button>
            <button class="btn btn-success">
              <span class="btn-label">
                <i class="material-icons">check</i>
              </span>
              Success
            </button>
            <button class="btn btn-warning">
              <i class="material-icons">warning</i> Warning
            </button>
            <button class="btn btn-danger">
              <i class="material-icons">close</i> Danger
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Size</h4>
          </div>
          <div class="card-body">
            <button class="btn btn-primary btn-sm">Small</button>
            <button class="btn btn-primary">Regular</button>
            <button class="btn btn-primary btn-lg">Large</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pick your Style</h4>
          </div>
          <div class="card-body">
            <button class="btn btn-primary">Default</button>
            <button class="btn btn-primary btn-round">round</button>
            <button class="btn btn-primary btn-round">
              <i class="material-icons">favorite</i> with icon
            </button>
            <button class="btn btn-primary btn-round btn-fab">
              <i class="material-icons">favorite</i>
            </button>
            <button class="btn btn-primary btn-link">
              simple
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Pagination</h4>
          </div>
          <div class="card-body">
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-primary">
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">5</a>
                </li>
              </ul>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Next">
                    <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-header">
            <h4 class="card-title">Button Group</h4>
          </div>
          <div class="card-body">
            <div class="btn-group">
              <button type="button" class="btn btn-info">Left</button>
              <button type="button" class="btn btn-info">Middle</button>
              <button type="button" class="btn btn-info">Right</button>
            </div>
            <br>
            <br>
            <div class="btn-group" data-toggle="buttons">
              <button type="button" class="btn btn-round btn-info">1</button>
              <button type="button" class="btn btn-round btn-info">2</button>
              <button type="button" class="btn btn-round btn-info">3</button>
              <button type="button" class="btn btn-round btn-info">4</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-round btn-info">5</button>
              <button type="button" class="btn btn-round btn-info">6</button>
              <button type="button" class="btn btn-round btn-info">7</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card-header">
            <h4 class="card-title">Social buttons</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <p class="category">Default</p>
                <button class="btn btn-twitter">
                  <i class="fa fa-twitter"></i> Connect with Twitter
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-just-icon btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-just-icon btn-round btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">Neutral</p>
                <button class="btn btn-just-icon btn-link btn-twitter">
                  <i class="fa fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <p class="category">&nbsp;</p>
                <button class="btn btn-link btn-twitter">
                  <i class="fa fa-twitter"></i> Connect with Twitter
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-facebook">
                  <i class="fa fa-facebook-square"></i> Share · 2.2k
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-facebook">
                  <i class="fa fa-facebook"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-facebook">
                  <i class="fa fa-facebook"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-facebook">
                  <i class="fa fa-facebook-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-facebook">
                  <i class="fa fa-facebook-square"></i> Share · 2.2k
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-google">
                  <i class="fa fa-google-plus"></i> Share on Google+
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-google">
                  <i class="fa fa-google-plus"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-google">
                  <i class="fa fa-google-plus"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-google">
                  <i class="fa fa-google-plus"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-google">
                  <i class="fa fa-google-plus"></i> Share on Google+
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-linkedin">
                  <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-linkedin">
                  <i class="fa fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-linkedin">
                  <i class="fa fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-linkedin">
                  <i class="fa fa-linkedin-square"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-linkedin">
                  <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-pinterest">
                  <i class="fa fa-pinterest"></i> Pint it · 212
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-pinterest">
                  <i class="fa fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-pinterest">
                  <i class="fa fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-pinterest">
                  <i class="fa fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-pinterest">
                  <i class="fa fa-pinterest"></i> Pint it · 212
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-youtube">
                  <i class="fa fa-youtube-play"></i> View on Youtube
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-youtube">
                  <i class="fa fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-youtube">
                  <i class="fa fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-youtube">
                  <i class="fa fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-youtube">
                  <i class="fa fa-youtube-play"></i> View on Youtube
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-tumblr">
                  <i class="fa fa-tumblr-square"></i> Repost
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-tumblr">
                  <i class="fa fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-tumblr">
                  <i class="fa fa-tumblr"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-tumblr">
                  <i class="fa fa-tumblr-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-tumblr">
                  <i class="fa fa-tumblr-square"></i> Repost
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-github">
                  <i class="fa fa-github"></i> Connect with Github
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-github">
                  <i class="fa fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-github">
                  <i class="fa fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-github">
                  <i class="fa fa-github"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-github">
                  <i class="fa fa-github"></i> Connect with Github
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-behance">
                  <i class="fa fa-behance-square"></i> Follow us
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-behance">
                  <i class="fa fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-behance">
                  <i class="fa fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-behance">
                  <i class="fa fa-behance"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-behance">
                  <i class="fa fa-behance-square"></i> Follow us
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-dribbble">
                  <i class="fa fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-dribbble">
                  <i class="fa fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-reddit">
                  <i class="fa fa-reddit"></i> Repost · 232
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-reddit">
                  <i class="fa fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-round btn-reddit">
                  <i class="fa fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-just-icon btn-link btn-reddit">
                  <i class="fa fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-link btn-reddit">
                  <i class="fa fa-reddit"></i> Repost · 232
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

  <footer class="footer" >
    <div class="container-fluid">
        <nav class="float-left">
          <ul>
              <li>
                  <a href="https://www.creative-tim.com">
                      Creative Tim
                  </a>
              </li>
              <li>
                  <a href="https://creative-tim.com/presentation">
                      About Us
                  </a>
              </li>
              <li>
                  <a href="http://blog.creative-tim.com">
                      Blog
                  </a>
              </li>
              <li>
                  <a href="https://www.creative-tim.com/license">
                      Licenses
                  </a>
              </li>
          </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>  
</div>          
</div>
        

        
        
