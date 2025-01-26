<?php $page_session = \Config\Services::session();?>
<?= $this->extend("outerlayout/base");?>


<?=$this->section("form")?>

<?=form_open(base_url("/insertdata"));?>




                <!-- Username input -->
                <div class="mb-4">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" 
                  value="<?=set_value("username")?>"/>
                  <span class="text-danger"><?=displayErrors($validation, "username")?></span>
                </div>

                <!-- Email input -->
                <div class="mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="text" id="email" name="email"  class="form-control" placeholder="Enter your email" 
                   value="<?=set_value("email")?>">
                  <span class="text-danger"><?=displayErrors($validation, "email")?></span>
                </div>
            

                <!-- Password input -->
                <div class="mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password"  class="form-control" placeholder="Enter your password" 
                   value="<?=set_value("password")?>"/>
                  <span class="text-danger"><?=displayErrors($validation, "password")?></span>
                </div>

                <!-- Confirm Password input -->
                <div class="mb-4">
                  <label class="form-label" for="confirm_password">Confirm Password</label>
                  <input type="password" id="confirm_password" name="confirm_password"  class="form-control" placeholder="Confirm your password"  value="<?=set_value("confirm_password")?>"/>
                  <span class="text-danger"><?=displayErrors($validation, "confirm_password")?></span>
                </div>

                

                <!-- Forgot password and register links -->
                <div class="d-flex justify-content-between mb-4 mt-5">
                  <a href="<?=base_url();?>" class="text-decoration-none">Sign in</a>
                  <a href="<?=base_url();?>forgot_password" class="text-decoration-none">Forgot password?</a>
                </div>

                <?php if($page_session->getTempdata('error')):?>
                <p class="text-center text-danger"><?=$page_session->getTempdata('error')?></p>
                <?php endif;?>
                <!-- Login button -->
                <button type="submit" class="btn btn-primary btn-block w-100 mb-3" name="sign-up">
                  SIGN UP
                </button>


           

                <?=form_close();?>


<?=$this->endSection()?>