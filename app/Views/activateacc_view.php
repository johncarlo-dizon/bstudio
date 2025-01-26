<?php $page_session = \Config\Services::session();?>
<?= $this->extend("outerlayout/base");?>


<?=$this->section("form")?>

<?=form_open(base_url("/insertdata"));?>

 
<?php if(isset($error)):?>
 <div class="alert alert-danger fw-bold">
  <?=$error?>
</div>
<?php endif;?>

<?php if(isset($success)):?>
 <div class="alert alert-primary fw-bold">
  <?=$success?>
</div>
<?php endif;?>

 

                <!-- Login button -->
                <a href="<?=base_url();?>" class="btn btn-primary btn-block w-100 mb-3"  >
                  SIGN IN
                </a>

<?=$this->endSection()?>