<!DOCTYPE html>
<html lang="en">
<head>
  <title>BSTUDIO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" class="rounded-5" type="image/png/jpeg" sizes="32x32" href="<?=base_url()?>/uploads/bstudio.webp">
  <link rel="icon"  class="rounded-5" type="image/png/jpeg" sizes="16x16" href="<?=base_url()?>/uploads/bstudio.webp">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    *{
      font-size: 12px;
    }
    .card-category h4{
    font-size: 12px !important;
    color: white !important;
    margin: 0px;
    background-color: gray !important;
    padding: 10px;
    }
    .customize-list{
      margin-top: 5px;
      border-radius: 3px !important;
      font-size: 10px !important;
      background-color: #D4F6FF;
    }
    body, html {
      height: 100%;
      margin: 0;
    }
    .navbar {
      min-height: 10%;
    }
    .main-content {
      min-height: 100vh;
      overflow: hidden;
    }
    .sidebar-content {
      min-height: 100vh;
      overflow-y: auto;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }
    .monitor-screen{
      box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }


    .monitor-screen .scrollable::-webkit-scrollbar {
      display: none;  
    }
    .monitor-screen::-webkit-scrollbar {
      display: none;  
    }


    .screen-nav .screen-link.active {
 
      background-color: transparent !important;
      color: black !important;   
      border-radius: 5px !important;
    }
    .screen-nav .screen-link:hover {
      background-color: transparent !important;
      color: black !important;   
      border-radius: 5px !important;
    }

    .screen-nav .screen-link {
      font-size: 12px;
      color: gray !important;  
      margin-left: 5px;
      margin-right: 5px;
    }

    .codescreen pre {
       
      padding: 15px;
      border-radius: 0px;
      font-family: 'Courier New', Courier, monospace;
      font-size: 12px;
      color: #333;
      overflow-x: auto;
      white-space: pre-wrap;
      color: white;
    }

    .codescreen code {
      display: block;
      line-height: 1.5;
    }


  


    .custom-dropdown .dropdown-item:hover {
      background-color: #6c757d !important;
      color: #fff !important;               
    }
 
    .custom-dropdown .dropdown-item.active {
      background-color: #6c757d !important; 
      color: #fff !important;               
    }
    .custom-dropdown .dropdown-item{
      background-color: #bae8e8 !important; 
      color: #6c757d !important;               
    }
    .custom-dropdown .dropdown-menu{
      padding: 0px;
      height: 100px;
      overflow-y: scroll;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
    .custom-dropdown .dropdown-item {
      border-radius: 0px;
      color: gray; 
      width: 100%;
      font-size: 10px !important;
    }
    .no-caret::after {
      display: none;
    }



    ::-webkit-scrollbar {
        width: 5px; 
        height: 5px; 
    }

    ::-webkit-scrollbar-track {
        background-color: #bae8e8;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #888; 
        border-radius: 0px; 
    }
    ::-webkit-scrollbar-thumb:hover {
        background-color: #555; 
    }
    ::-webkit-scrollbar-corner {
        background-color: #f1f1f1;
    }
    .outer{
      background-color:#bae8e8;
    }

    .profile-avatar {
      width: 170px;
      height: 170px;
      border-radius: 50%;
      object-fit: cover;
      cursor: pointer;
    }

   
    @media (max-width: 767.98px) {
      .main-content, .sidebar-content {
        height: auto;
        overflow: visible;
      }
    }
    .custom-modal {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 400px;
            background-color: snow;
            color: black;
            border-radius: 10px;
            padding: 15px;
            display: none; 
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            z-index: 9999; 
        }

        .custom-modal-header {
            font-size: 18px;
            font-weight: bold;
        }

        .custom-modal-body {
            margin-top: 10px;
            font-size: 16px;
        }

        .custom-modal-footer {
            margin-top: 15px;
            text-align: right;
        }

        .custom-modal .close-btn {
            background-color: transparent;
            border: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            padding: 0;
        }

        .custom-modal.fade-in {
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
  </style>
</head>
<body>




<div id="customNotificationModal" class="custom-modal">
    <div class="custom-modal-header">
        Notification
        <button class="close-btn" onclick="closeModal()">×</button>
    </div>
    <div class="custom-modal-body">
        <?php 
    
            $message = session()->getTempdata('message');
            if (is_array($message)) {
          
                echo implode('<br>', $message);
            } else {
          
                echo $message;
            }
        ?>
    </div>
    <div class="custom-modal-footer">
        <button onclick="closeModal()" class="btn btn-secondary">Close</button>
    </div>
</div>


    <script>
        function showModal() {
            const modal = document.getElementById('customNotificationModal');
            modal.style.display = 'block';
            modal.classList.add('fade-in');
        }

        function closeModal() {
            const modal = document.getElementById('customNotificationModal');
            modal.style.display = 'none';
        }

        <?php if (session()->getTempdata('message')) : ?>
            window.onload = function() {
                showModal();
            };
        <?php endif; ?>
    </script>


  <div class="row g-0">



   <!-- FIRST COLUMN START -->
    <div class="col-lg-10 col-md-10 outer  main-content text-light"  >


      <!-- Navbar -->
            <nav class="navbar navbar-expand-sm navbar-dark sticky-top"  style="background-color:#ffffff;padding:0px !important;">
              <div class="container-fluid d-flex justify-content-start">
              <li class="nav-item dropdown align-items-center d-flex ms-3 me-2 my-2 " >
                  <a class="nav-link dropdown-toggle  no-caret" href="#" role="button" data-bs-toggle="dropdown">
                    
                  
             

                  <?php if ($userdata->profile_pic == null):?>
                  <img src="<?=base_url()?>/uploads/male.jfif" alt="Avatar"  style="width:40px;" class="rounded-pill">
                  <?php else:?>
                    <img src="<?=base_url()."/uploads/".$userdata->profile_pic?>"  style="width:40px;" class="rounded-pill">
                  <?php endif;?>
                  </a>
              
                <ul class="dropdown-menu">
                  <?=$this->renderSection("navprofile")?>
                    <hr>
              
                    <li><a class="dropdown-item" href="<?=base_url()?>/logout" style="font-size:12px">Logout</a></li>
                 </ul>
              </li>

                <a class="navbar-brand  me-3 text-dark" href="#">BSTUDIO</a>
                <ul class="nav nav-pills screen-nav" id="pills-tab" role="tablist">
  <li class="nav-item screen-item">
    <a class="nav-link  rounded-0 screen-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true" style="font-size:12px;">User</a>
  </li>
  <li class="nav-item screen-item">
    <a class="nav-link active rounded-0 screen-link" id="pills-monitor-tab" data-bs-toggle="pill" data-bs-target="#pills-monitor" type="button" role="tab" aria-controls="pills-monitor" aria-selected="false">Screen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link rounded-0 screen-link" id="pills-code-tab" data-bs-toggle="pill" data-bs-target="#pills-code" type="button" role="tab" aria-controls="pills-code" aria-selected="false">Code</a>
  </li>
 
  <button class="btn btn-light btn-sm border-light ms-1" style="font-size:10px;" onclick="copyOutput()"><i class="fa-solid fa-copy"></i> Copy Code</button>
</ul>


              </div>
                <div class="container-fluid d-flex justify-content-end">
                      <a href="<?= base_url('undo') ?>" class="btn btn-secondary btn-sm me-3" style="font-size:10px;"><i class="fa-solid fa-rotate-left"></i> Content</a>
                      <a href="<?= base_url('undoLastRow') ?>" class="btn btn-secondary btn-sm me-3" style="font-size:10px;"><i class="fa-solid fa-rotate-left"></i> Row</a>
                     
 

                      
                </div>
            </nav>
      <!-- Navbar -->










 

          

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-monitor" role="tabpanel" aria-labelledby="pills-monitor-tab">
            <div class="monitor-screen border-1 border text-dark m-2  p-0" style="height:88vh;background-color:#ffffff;  overflow: scroll; ">
                        <div id="output">
                            <?=$this->renderSection("monitor")?>
                        </div> 
            </div> 
          </div>

          <div class="tab-pane fade" id="pills-code" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="monitor-screen border-1 border text-dark  m-2   bg-dark p-0" style="height:88vh;background-color:#233142;  overflow: scroll; ">
                <span>
        
            
                    <div id="codeContent" class="codescreen"></div>
                </span>


            </div> 
          </div>


          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="monitor-screen border-1 border text-dark  m-2 p-0   bg-light p-0" style="height:88vh;background-color:#233142;  overflow: scroll; ">
                   <?=$this->renderSection("userprofile")?>
            </div> 
          </div>

        </div>
     
    
     
    
    
 
  






    </div>
<!-- FIRST COLUMN END -->





 











<!-- SECOND COLUMN START -->
    <div class="col-lg-2 col-md-2   sidebar-content   p-3"  style="background-color:#ffffff;">

        <!-- COLUMNS S-->
        <div class="d-flex flex-column sticky-top">
  
        <h6 class="fw-bold p-2   border-1  border-bottom" style="font-size:10px;">Columns</h6> 
      <div class="p-2 outer" style="border-radius:3px">
        <form action="<?= base_url('/generateColumns') ?>" method="post">
          <label class="mb-2" for="columnCount" style="font-size:10px;">Number of Columns:</label><br>
          <input class="form-control" type="number" placeholder="..." id="columnCount" name="columnCount" min="1" max="20" required><br>
          <button class="btn btn-secondary w-100 text-light btn-sm" type="submit"><i class="fa-solid fa-plus"></i></button>
        </form>

        </div>
       </div>
       <!-- COLUMNS E-->



    <br><br> 



 
      <!-- CONTENTS S-->
      <div class="d-flex flex-column " >
         

        <ul class="nav nav-tabs ">
          <li class="nav-item dropdown w-100  custom-dropdown">
            <a class="fw-bold btn border-0 dropdown-toggle rounded-0 p-2 text-dark w-100 text-start" data-bs-toggle="dropdown" href="#" style="font-size:10px;">Components</a>
            <?=$this->include("others/container")?>
     
          </li>
        </ul>
 

 <div class=" p-2 mt-2 outer" style="border-radius:3px">
        <div class="list-group  " style="height:30vh !important; overflow-y:scroll">
              <?=$this->renderSection("componentlist")?>
        </div>
        </div>
      </div>
      <!-- CONTENTS E-->


      
    <br><br> 



 
<!-- CONTENTS S-->
<div class="d-flex flex-column " >
   

  <ul class="nav nav-tabs ">
    <li class="nav-item dropdown w-100  custom-dropdown">
      <a class="fw-bold btn border-0 dropdown-toggle rounded-0 p-2 text-dark w-100 text-start" data-bs-toggle="dropdown" href="#content" style="font-size:10px;">Content and Forms</a>
      <?=$this->include("others/contents")?>

    </li>
  </ul>


<div class=" p-2 mt-2 outer" style="border-radius:3px">
  <div class="list-group  " style="height:30vh !important; overflow-y:scroll">
        <?=$this->renderSection("content")?>
  </div>
  </div>
</div>
<!-- CONTENTS E-->
  








    </div>
    <!-- SECOND COLUMN END -->

  </div>

 

 

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>

  

<script>
    const outputContent = document.getElementById("output").innerHTML;
    function escapeHtml(text) {
        var element = document.createElement('div');
        if (text) {
            element.innerText = text;
            element.textContent = text;
        }
        return element.innerHTML;
    }


    const codeContent = document.getElementById("codeContent");
    codeContent.innerHTML = `<pre><code>${escapeHtml(outputContent)}</code></pre>`; // Display escaped HTML as text

    function copyOutput() {
        navigator.clipboard.writeText(outputContent).then(function() {
            const copyModal = new bootstrap.Modal(document.getElementById('copyModal'));
            copyModal.show();

            setTimeout(() => {
                copyModal.hide();
            }, 3000);
        }).catch(function(error) {
            console.error("Failed to copy text: ", error);
        });
    }
</script>


    <div class="modal fade" id="copyModal" tabindex="-1" aria-labelledby="copyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered w-25">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <h5 class="modal-title" id="copyModalLabel">Copied to Clipboard</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Codes copied to clipboard!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


  
