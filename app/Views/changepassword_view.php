

<?php $page_session = \Config\Services::session();?>
<?= $this->extend("outerlayout/base");?>


<?=$this->section("form")?>

<?=form_open(base_url("/changepassdone"));?>

<?php if (isset($userdata)): ?>
                <input type="hidden" name="uniid" value="<?= $userdata->uniid ?>">
                <?php endif; ?>

      
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
                  <a href="<?=base_url();?>sign_up" class="text-decoration-none">Sign Up</a>
                </div>

                <?php if($page_session->getTempdata(key: 'confirmpasserror')):?>
                <p class="text-center text-danger"><?=$page_session->getTempdata('confirmpasserror')?></p>
                <?php endif;?>
                <!-- Login button -->
                <button type="submit" class="btn btn-primary btn-block w-100 mb-3" name="sign-up">
                  Verify 
                </button>


             

                <?=form_close();?>


<?=$this->endSection()?>