 <?php
/*
  Template Name: Register
*/
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">

            <h2 class="text-center mb-5">Register Form</h2>
            <div class="row">

                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h3>Đăng ký</h3>
                        </div>
<<<<<<< HEAD
                    
            <?php
            if (isset($_SESSION['error'] )) {
            ?>
            <p class="alert alert-danger"><?php echo $_SESSION['error']; ?></p>
            <?php unset($_SESSION['error']); ?>
            <?php } ?>
                      
=======
                        <?php if(isset($error)){?>
                        <div class="alert alert-danger">
                          <?php echo $error;?>
                            </div>
                        <?php
                        }?>
>>>>>>> refs/remotes/origin/master
                        <div class="card-body">
                            <form class="form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" role="form" autocomplete="off" method="post">
                                <div class="form-group">
                                   <input type="hidden" name="action" value="register_form_hidden">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="full name" name="username">
<<<<<<< HEAD


=======
>>>>>>> refs/remotes/origin/master
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="email@gmail.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputVerify3">Verify</label>
                                    <input type="password" class="form-control" id="inputVerify3" placeholder="password (again)" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->