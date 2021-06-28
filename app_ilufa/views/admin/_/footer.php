</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?php echo ADMIN_ASSETS ?>vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/js-cookie/js.cookie.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="<?php echo ADMIN_ASSETS ?>vendor/chart.js/dist/Chart.min.js"></script>

<script src="<?php echo ADMIN_ASSETS ?>vendor/select2/dist/js/select2.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<?php if ($page == "product") { ?>
  <script src="<?php echo ADMIN_ASSETS ?>vendor/nouislider/distribute/nouislider.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS ?>vendor/quill/dist/quill.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS ?>vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="<?php echo ADMIN_ASSETS ?>vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<?php } ?>

<script src="<?php echo ADMIN_ASSETS ?>vendor/dropzone/dist/min/dropzone.min.js"></script>
<!-- Argon JS -->
<script src="<?php echo ADMIN_ASSETS ?>js/argon.js?v=1.1.0"></script>

<?php if ($this->session->userdata('log_admin') == FALSE) { ?>

  <script>
    let id_promo = 0;
    // let id_kurir = $('#id_kurir').val();
    let id_kurir = 0;

    $(document).ready(function() {
      $.ajax({
        url: "<?php echo base_url('member/load_qty_cart') ?>",
        success: function(resp) {
          $('#qty-cart-a').html(resp);
          $('#qty-cart-b').html(resp);
          $('#qty-cart-c').html(resp);
          getList();
        }
      });
    });

    function updateQty(rowid, id_produk) {
      var row = rowid;
      var qty = $('#qty' + row).val();
      var id_produk = id_produk;
      $.ajax({
        url: "<?php echo base_url('member/update_qty_cart'); ?>",
        method: "POST",
        data: {
          "rowid": row,
          "qty": qty,
          "id_produk": id_produk
        },
        success: function(data) {
          $('#detail_cart').html(data);
          loadQty();
          getList();
        }
      });
    }

    function getList() {
      $.ajax({
        url: "<?php echo base_url('member/load_list_cart') ?>",
        success: function(resp) {
          $('#list-cart-a').html(resp);
          $('#list-cart-b').html(resp);
          $('#list-cart-c').html(resp);
        }
      });
    }

    function loadQty() {
      $.ajax({
        url: "<?php echo site_url('member/load_qty_cart'); ?>",
        method: "GET",
        success: function(resp) {
          $('#qty-cart-a').html(resp);
          $('#qty-cart-b').html(resp);
          $('#qty-cart-c').html(resp);
        }
      });
    }


    //Page Cart


    function cartshow(idp) {
      let id_promo = idp;
      let id_kurir = $('#id_kurir').val();
      $('#detail_cart').load("<?php echo base_url('member/cart_load/'); ?>");
    }

    $('#id_kurir').on('change', function() {

      let id_kurir = $('#id_kurir').val();
      $('#detail_cart').load("<?php echo base_url('member/cart_load/'); ?>");
    });

    $(document).ready(function() {


      // Load shopping cart
      $('#detail_cart').load("<?php echo base_url('member/cart_load/'); ?>");

      //Hapus Item Cart
      $(document).on('click', '.hapus_cart', function() {
        let row_id = $(this).attr("id"); //mengambil row_id dari artibut id
        $.ajax({
          url: "<?php echo base_url('member/cart_del/'); ?>",
          method: "POST",
          data: {
            row_id: row_id
          },
          success: function(data) {
            $('#detail_cart').html(data);
          }
        });
      });
    });

    // function select_promo(idp) {
    //   let id_promo = idp;
    //   $('#select_promo').load("<?php echo base_url('member/select_promo/'); ?>" + id_promo);
    // }
  </script>

  </body>

  <?php

    if ($this->session->userdata('log_valid') == TRUE) {
      if ($this->session->userdata('log_admin') == FALSE) {
        ?>

      <!-- The core Firebase JS SDK is always required and must be listed first -->
      <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase.js"></script>

      <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
      <!-- <script src="https://www.gstatic.com/firebasejs/8.4.3/firebase-analytics.js"></script> -->

      <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
          apiKey: "AIzaSyB_QDp7LGs3Odxpot6ygWBgHpOaXhiy4QA",
          authDomain: "nnet-7fb0d.firebaseapp.com",
          projectId: "nnet-7fb0d",
          storageBucket: "nnet-7fb0d.appspot.com",
          messagingSenderId: "896288170778",
          appId: "1:896288170778:web:dd630b567a4406c1b502a3",
          measurementId: "G-X7XNQXSGZ7"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        // firebase.analytics();

        const messaging = firebase.messaging();
        messaging.requestPermission()
          .then(function() {
            console.log('Notification permission granted.');
            return messaging.getToken();
          })
          .then(function(token) {
            // console.log(token); // Display user token
            // var token = token;
            $.ajax({
              url: "<?php echo base_url('member/act/add_token_id'); ?>",
              method: "POST",
              data: {
                token: token
              },
              success: function(data) {
                // $('#detail_cart').html(data);
                // alert(token);
                console.log(token); // Display user token
                // alert(<?php echo $this->security->get_csrf_hash(); ?>);
              }
            });
          })
          .catch(function(err) { // Happen if user deney permission
            console.log('Unable to get permission to notify.', err);
          });

        messaging.onMessage(function(payload) {
          console.log('onMessage', payload);
        })

        $.ajax({
          url: "<?php echo base_url('member/act/add_token_id'); ?>",
          method: "POST",
          data: {
            token: token
          },
          success: function(data) {
            // $('#detail_cart').html(data);
            alert(token);
            // alert(<?php echo $this->security->get_csrf_hash(); ?>);
          }
        });
      </script>
  <?php
      }
    }
    ?>
<?php
} ?>

</html>