<?php require APPROOT . '/views/inc/header.php'; ?>
    <div>
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Login</h2>
                <form action="<?php echo URLROOT; ?>/users/register" method="post"></form>
                    <div class="form-group">
                        <label for="email">email: <sup>*</sup></label>
                        <input type="email" email="email" value="<?php echo $data['email'];?>" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" placeholder="User email">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">password: <sup>*</sup></label>
                        <input type="password" name="password" value="<?php echo $data['password'];?>" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" placeholder="User password">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Login" class="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>users/register" class="btn btn-light btn-block">Don't have an account? Register now</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>