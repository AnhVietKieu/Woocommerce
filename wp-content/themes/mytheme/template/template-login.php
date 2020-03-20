<?php
/*
	Template Name: Login
*/
	get_header( );
?>
<div id="login">
<h3 class="text-center text-white pt-5">Login form</h3>
<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
                <form id="login" class="form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                    <h3 class="text-center text-info">Login</h3>
                    <div class="form-group">
                    	<input type="hidden" value="login_form_hidden" name="action">
                        <label for="username" class="text-info">Username:</label><br>
                        <input type="text" name="username" id="username" class="form-control">
                        <span id="error_username" class="error"></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="password" name="password" id="password" class="form-control">
                        <span id="error_password" class="error"></span>
                    </div>
                    <div class="form-group">
                        
                        <button  class="btn btn-info btn-md" >
                        	Login
                        </button>
                    </div>
                    <div id="register-link" class="text-right">
                        <a href="<?php echo bloginfo( 'url' ).'/register'?>" class="text-info">Register here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- <script type="text/javascript">


		$( "#login").submit(function(event) {
		event.preventDefault();
		var username = $( "input[type=text][name=username]" ).val();

		var password =  $( "input[type=password][name=password]" ).val();

		var item = $("form").serialize();

		var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

		var formdata = new FormData;

		formdata.append('action','login');
		formdata.append('login', item);

		if(username == '')
		{
			
			document.getElementById('error_username').innerHTML = 'User name khong duoc de trong';
		}
		if(password == '')
		{
			document.getElementById('error_password').innerHTML ='Password khong duoc de trong';
		}

		

		if(username != '' && password !='')
		{
			
			 $.ajax({
			 	url: endpoint,
	           type: "POST",
	           data: formdata, 
	           processData :false,
	           contentType:false,
	           success: function(res)
	           {

	               alert(data);
	           }
         });
		}
 		

	});




	
</script>
 -->

<?=get_footer();?>