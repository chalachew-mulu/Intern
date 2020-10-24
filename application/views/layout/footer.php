<footer class="footer footer-default">
    <div class="container">
      <div class="copyright">
        <?php echo lang('copyright'); ?> &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, <?php echo lang('footer'); ?>
      </div>
    </div>
  </footer>
  <script src="<?php echo base_url();?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/material-kit.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>plugin/js/wow.js"></script>
  <script>
    new WOW().init();
  </script>
  <script>
    $(document).ready(function(){
      $('#login').click(function(){
       document.querySelector('#test').style.display="none";
       document.querySelector('#test2').classList.add('progress2');
       
      });
    });
  </script>
</body>
</html>