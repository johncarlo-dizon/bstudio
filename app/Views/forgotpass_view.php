<?php $page_session = \Config\Services::session();?>
<?= $this->extend("outerlayout/base");?>


<?=$this->section("form")?>

<?=form_open(base_url("/verify"));?>



                <!-- Email input -->
                <div class="mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="text" id="email" name="email"  class="form-control" placeholder="Enter your email" 
                   value="<?=set_value("email")?>">
                  <span class="text-danger"><?=displayErrors($validation, "email")?></span>
                </div>
            

                <!-- Forgot password and register links -->
                <div class="d-flex justify-content-between mb-4 mt-5">
                  <a href="<?=base_url();?>" class="text-decoration-none">Sign in</a>
                  <a href="<?=base_url();?>sign_up" class="text-decoration-none">Sign Up</a>
                </div>

                <?php if($page_session->getTempdata('errorchange')):?>
                <p class="text-center text-danger"><?=$page_session->getTempdata('errorchange')?></p>
                <?php endif;?>
                <!-- Login button -->
                <button type="submit" class="btn btn-primary btn-block w-100 mb-3" name="sign-up">
                  Verify 
                </button>


             

                <?=form_close();?>


<?=$this->endSection()?>