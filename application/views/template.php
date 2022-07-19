<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>BAMS</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/sidebar.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font_custom.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/all_custom.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/all_color.css">
  	
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>

  </head>
<body>
  <div class="main print_hide">
    <?php $this->load->view('header'); ?>
  	<?php $this->load->view('sidebar'); ?>
    <section class="home-section">
      <div class="home-content print_hide">
        <i class='fa fa-bars  print_hide' ></i>
        <span class="text  print_hide"><?php echo $this->config->item('site_title') ?></span>
      </div>
      <div class="container-fluid">
        <?php $this->load->view($content); ?>

  	    <?php $this->load->view('footer'); ?>
      </div>
    </section>
  </div>
<?php $this->load->view('modals/success'); ?>
<?php $this->load->view('modals/error'); ?>
<?php $this->load->view('certificate/temp_with_header'); ?>

<!-- loop modal-->
<?php //$this->load->view('modals/add_street'); ?>
<?php //$this->load->view('modals/delete_street'); ?>
<?php //$this->load->view('modals/edit_street'); ?>
<?php //$this->load->view('modals/search_citizen'); ?>
<?php //$this->load->view('modals/add_complainant'); ?>
<?php //$this->load->view('modals/add_respondents'); ?>
<?php //$this->load->view('modals/add_id_information'); ?>
<?php if (isset($modal)): ?>
  <?php foreach ($modal as $key => $modal): ?>
    <?php $this->load->view($modal); ?>
  <?php endforeach ?>
<?php endif ?>
<button
        type="button"
        class="print_hide btn btn-custom btn-floating btn-lg "
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up print_hide"></i>
</button>

<?php ! empty($javascript) && $this->load->view($javascript); ?>


<script type="text/javascript">
  //Get the button
  let mybutton = document.getElementById("btn-back-to-top");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  mybutton.addEventListener("click", backToTop);

  function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  $(document).ready(function(){
    $(document).on('click','#btnsuccess',function(){
      location.reload();
    })
  })


</script>


<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
<!-- JS -->

    <script src="<?php echo base_url()?>assets/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/sidebar.js"></script>


</body>
</html>
