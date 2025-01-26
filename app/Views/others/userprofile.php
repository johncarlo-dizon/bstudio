<div class="container   border-0   outer" >
    <div class="card p-5 border-0" >
      <div class="d-flex flex-column  mb-3" >


      <div class="d-flex">
        <label for="avatarInput">
          <?php if ($userdata->profile_pic == null):?>
          <img src="<?=base_url()?>/uploads/male.jfif" alt="Avatar" id="avatarPreview" class="profile-avatar p-2 ms-4 mt-4">
          <?php else:?>
            <img src="<?=base_url()."/uploads/".$userdata->profile_pic?>" alt="Avatar" id="avatarPreview" class="profile-avatar ms-4 mt-4">
          <?php endif;?>
        </label>

        <?=form_open_multipart(base_url().'uploadimage')?>
        <input type="file" id="avatarInput" name="userimage" class="d-none" accept="image/*">
        <input type="hidden" name="userimage_userid" value="<?=$userdata->userid?>">
        <div class="d">
        <button type="submit" id="saveimage" class="btn btn-primary ms-4 mt-5 d-none">Save Image</button>
        </div>
   
        <?=form_close()?>
      </div>

         

     


   
        <small class="text-muted mt-3 ms-5">Click image to upload</small>
      </div>
      <hr>

      <div class=" d-flex container  mt-3" >
  <div  class="m-4" style="width:300px">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active border-0 my-1" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
      <a class="list-group-item list-group-item-action   border-0 my-1" id="list-password-list" data-bs-toggle="list" href="#list-password" role="tab" aria-controls="list-password">Change Password</a>
 
      
    </div>
  </div>

  <div class="border"></div>
 
  <div class="ms-4 border-right border-1" style="height:340px;width:600px" >
    <div class="tab-content" id="nav-tabContent">
      <!-- PROFILE -->
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <?=form_open(base_url().'changeusername')?>
      <h4 class="mb-4">Profile</h4>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" value="<?=ucfirst($userdata->username)?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control"  value="<?=ucfirst($userdata->email)?>" readonly>
            </div>
            <input type="hidden" name="user_userid" value="<?=$userdata->userid?>">
            <button type="submit" id="saveChangesBtn" class="btn btn-primary d-none">Save Changes</button>
            <?=form_close()?>
      </div>

      <!-- PASSWORD -->
      <div class="tab-pane fade" id="list-password" role="tabpanel" aria-labelledby="list-password-list">
      <?=form_open(base_url().'changepassword')?>
      <h4 class="mb-4">Password</h4>
            <input type="hidden" name="changepass_userid" value="<?=$userdata->userid?>">
            <div class="mb-3">
              <label for="oldPassword" class="form-label">Old Password</label>
              <input type="password" name="oldPassword" id="oldPassword" class="form-control" placeholder="Enter old password">
            </div>
            <div class="mb-3">
              <label for="newPassword" class="form-label">New Password</label>
              <input type="password" name="newPassword"  id="newPassword" class="form-control" placeholder="Enter new password">
            </div>
            <div class="mb-3">
              <label for="confirmPassword"  class="form-label">Confirm New Password</label>
              <input type="password" name="confirmPassword"  id="confirmPassword" class="form-control" placeholder="Confirm new password">
            </div>
            <button type="submit" class="btn btn-primary">Change Password</button>
            <?=form_close()?>
      </div>
 
    </div>
  </div>
 
</div>
 



    </div>
  </div>





  <script>
  // Avatar Preview
  const avatarInput = document.getElementById('avatarInput');
  const avatarPreview = document.getElementById('avatarPreview');
  const saveimage = document.getElementById('saveimage');
  
  avatarInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        avatarPreview.src = e.target.result;
      };
      reader.readAsDataURL(file);
      
      // Show the Save Changes button when an image is selected
      saveimage.classList.remove('d-none');
    }
  });

  // Show Save Button on Username Change
  const usernameInput = document.getElementById('username');
  usernameInput.addEventListener('input', () => {
    saveChangesBtn.classList.remove('d-none');
  });
</script>
   
  <script>
  // Avatar Preview
  const avatarInput = document.getElementById('avatarInput');
  const avatarPreview = document.getElementById('avatarPreview');
  const saveimage = document.getElementById('saveimage');
  
  avatarInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        avatarPreview.src = e.target.result;
      };
      reader.readAsDataURL(file);
      
      // Show the Save Changes button when an image is selected
      saveimage.classList.remove('d-none');
    }
  });

  // Show Save Button on Username Change
  const usernameInput = document.getElementById('username');
  usernameInput.addEventListener('input', () => {
    saveChangesBtn.classList.remove('d-none');
  });
</script>
