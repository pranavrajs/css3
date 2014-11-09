
    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url; ?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->


    <div class="container">
<?php         $this->load->helper('form');
        echo form_open('admin/login');
?>
      <form class="form-signin">
        <h2 class="form-signin-heading">Administrator</h2>
        <input type="text" class="input-block-level" placeholder="username" name="user">
        
			<?php echo form_error('user'); ?>
        <input type="password" class="input-block-level" placeholder="password" name="pass">

			<?php echo form_error('pass'); ?>       	
       	<br/>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>
<?php echo form_close(); ?>
    </div> <!-- /container -->


  </body>
</html>
