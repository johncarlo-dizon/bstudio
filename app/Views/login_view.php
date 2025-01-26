<?= $this->extend("outerlayout/base");?>


<?=$this->section("form")?>

<?=form_open(base_url("/login"));?>
 
                <!-- Email input -->
                <div class="mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="text" id="email" class="form-control" name="email" placeholder="Enter your email"/>
                  <span class="text-danger"><?=displayErrors($validation, "email")?></span>
                </div>

            

                <!-- Password input -->
                <div class="mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control"  name="password" placeholder="Enter your password"/>
                  <span class="text-danger"><?=displayErrors($validation, "password")?></span>
                </div>

                <!-- Forgot password and register links -->
                <div class="d-flex justify-content-between mb-4 mt-5">
                  <a href="<?=base_url();?>sign_up" class="text-decoration-none">Sign up</a>
                  <a href="<?=base_url();?>forgot_password" class="text-decoration-none">Forgot password?</a>
                </div>

            
                  <?php if(session()->getTempdata("logerror")):?>
                    <div class="alert alert-danger text-center" style="font-size:13px">
                         <?= session()->getTempdata("logerror")?>
                    </div>
                  <?php endif;?>
      

              
       

                <!-- Login button -->
                <button type="submit" class="btn btn-primary btn-block w-100 mb-3" name="login">
                  SIGN IN
                </button>


           

    <?=form_close();?>

<?=$this->endSection()?>