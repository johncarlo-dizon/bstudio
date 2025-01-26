<!DOCTYPE html>
<html lang="en">
<head>
  <title>BSTUDIO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" class="rounded-5" type="image/png/jpeg" sizes="32x32" href="<?=base_url()?>/uploads/bstudio.webp">
  <link rel="icon"  class="rounded-5" type="image/png/jpeg" sizes="16x16" href="<?=base_url()?>/uploads/bstudio.webp">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

  <style>
    /* Enhanced label styling */
    .form-label {
      font-weight: bold;
      color: #495057;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      margin-bottom: 5px;
    }

    /* Enhanced input styling */
    .form-control {
      border-radius: 8px;
      padding: 0.75rem 1rem;
      box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
      border: 1px solid #ced4da;
    }

    /* Card styling */
    .card {
      border: none;
      border-radius: 12px;
      box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px !important;
      padding: 2rem;
    }

    /* Title section styling */
    .fixed-title-container {
      position: sticky;
      top: 0;
      align-self: flex-start;
      max-height: 100vh;
    }
  </style>
</head>
<body>

<!-- Section: Design Block -->
<section>
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-start">
        <div class="col-lg-6 mb-5 mb-lg-0 fixed-title-container">
          <h1 class="my-5 display-4 fw-bold pt-5" style="font-size:80px">
            BSTUDIO <br>
            <span class="text-primary">by LL Company</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Enter your interactive Bootstrap 5 design environment. Start adding components and build layouts with a simple click, bringing your ideas to life.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 mt-5 ">
          <div class="card shadow">
            <div class="card-body  px-md-5">
              <?=$this->renderSection("form");?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</body>
</html>
