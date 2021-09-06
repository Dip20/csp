
<?php $user_type = $_SESSION['access']; ?>

<div class="album py-2 bg-light">
  <div class="container">
    <div class="text-right">
      <?php if ($user_type=="Admin")
      {
        echo '<button type="button" name="button" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Add Products</button>';
      } ?>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow px-3 py-3">
          <img src="<?php echo "http://127.0.0.1/csp/"; ?>images/hero_img.svg" class="card-img-top" alt="Product Images [100%x225]">
          <div class="card-body">
            <p class="">This is a simple Title</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <?php if ($user_type=="Admin")
                {
                  echo '<button type="button" class="btn btn-sm btn-outline-danger">Delete</button>';
                } ?>
              </div>
              <p class="text-primary h5"><b>1500/50pcs</b> </p>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
