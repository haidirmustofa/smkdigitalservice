  <!DOCTYPE html>
  <html>

  <head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <?php if (empty($title)) {
    ?>
      <title>SMK Digital Service</title>
    <?php
    } else {
    ?>
      <title><?= $title ?></title>
    <?php
    } ?>
    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/landingpage/images/sdsblank.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/landingpage/images/sdsblank.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/landingpage/images/sdsblank.png">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="<?= base_url() ?>assets/https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/switchery/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="<?= base_url() ?>assets/https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-119386393-1');
    </script>
    <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
      }

      .card-box {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
      }

      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      }

      .container {
        padding: 2px 16px;
      }
    </style>
  </head>

  <body>
    <!-- <div class="pre-loader">
      <div class="pre-loader-box">
        <div class="loader-logo"><img width="400px" src="<?= base_url() ?>assets/vendors/images/sdslogo.png" alt=""></div>
        <div class='loader-progress' id="progress_div">
          <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
          Loading...
        </div>
      </div>
    </div> -->

    <div class="header">
      <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
      </div>
      <div class="header-right">
        <div class="user-info-dropdown">
          <div class="dropdown">
            <a class="dropdown-toggle" href="<?= base_url() ?>assets/#" role="button" data-toggle="dropdown">
              <span class="user-icon">

                <?php
                if ($this->fungsi->user_login()->userGender == 'Perempuan') {
                ?>
                  <img src="<?= base_url() ?>assets/login/img/girl.svg" alt="">
                <?php  } else {
                ?>
                  <img src="<?= base_url() ?>assets/login/img/avatar.svg" alt="">
                <?php }
                ?>
              </span>
              <span class="user-name"><?= $this->fungsi->user_login()->userFullname ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
              <!-- <a class="dropdown-item" href="<?= base_url() ?>assets/profile.html"><i class="dw dw-user1"></i> Profile</a> -->
              <a class="dropdown-item" href="<?= base_url('logout'); ?>"><i class="dw dw-logout"></i> Log Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="left-side-bar">
      <div class="brand-logo">
        <a href="<?= base_url() ?>">
          <!-- <img src="<?= base_url() ?>assets/vendors/images/sdslogo.png" alt="" class="dark-logo">
          <img src="<?= base_url() ?>assets/vendors/images/sdslogowhite.png" alt="" class="light-logo"> -->
          <h6 class="text-white">SMK DIGITAL SERVICE</h6>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
          <i class="ion-close-round"></i>
        </div>
      </div>
      <hr color="white" style="margin-top: -1px;">
      <div class="menu-block customscroll">
        <div class="sidebar-menu">
          <ul id="accordion-menu">
            <!-- Menu Sekolah -->
            <?php
            $slug = $this->uri->segment(2);
            ?>
            <li class="dropdown">
              <a href="<?= base_url('service-room') ?>" class=" dropdown-toggle no-arrow">
                <span class="micon ion-reply-all"></span><span class="mtext">Kembali</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('service-client-room') ?>/<?= $slug ?>" class=" dropdown-toggle no-arrow <?php echo ($title == 'Dashboard') ? 'active' : 'null'; ?>">
                <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
              </a>
            </li>
            <li class="dropdown">

              <a href="<?= base_url('service-room-activity') ?>/<?= $slug ?>" class="dropdown-toggle no-arrow <?php echo ($title == 'Aktifitas') ? 'active' : 'null'; ?>">
                <span class="micon fa fa-universal-access"></span><span class="mtext">Aktifitas Prakerin</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('service-room-member') ?>/<?= $slug ?>" class="dropdown-toggle no-arrow <?php echo ($title == 'Peserta') ? 'active' : 'null'; ?>">
                <span class="micon dw dw-user"></span><span class="mtext">Peserta</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('service-room-mentor') ?>/<?= $slug ?>" class="dropdown-toggle no-arrow <?php echo ($title == 'Pembimbing Prakerin') ? 'active' : 'null'; ?>">
                <span class="micon fa fa-vcard-o"></span><span class="mtext">Pembimbing Prakerin</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('service-room-document') ?>/<?= $slug ?>" class="dropdown-toggle no-arrow <?php echo ($title == 'Dokumen') ? 'active' : 'null'; ?>">
                <span class="micon dw dw-folder"></span><span class="mtext">Dokumen</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('service-room-announcement') ?>/<?= $slug ?>" class="dropdown-toggle no-arrow <?php echo ($title == 'Pengumuman') ? 'active' : 'null'; ?>">
                <span class="micon fi-megaphone"></span><span class="mtext">Pengumuman</span>
              </a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('service-room-price') ?>/<?= $slug ?>" class="dropdown-toggle no-arrow <?php echo ($title == 'Upgrade Kapasitas Ruang') ? 'active' : 'null'; ?>">
                <span class="micon ion-trophy"></span><span class="mtext">Upgrade Kapasitas Ruang</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
      <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
          <?= $contents ?>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal_delete">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
          <div class="modal-header">
            <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini?</h4>
          </div>
          <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <script src="<?= base_url() ?>assets/vendors/scripts/dashboard.js"></script>
    <script src="<?= base_url() ?>assets/vendors/scripts/core.js"></script>
    <script src="<?= base_url() ?>assets/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/scripts/process.js"></script>
    <script src="<?= base_url() ?>assets/vendors/scripts/layout-settings.js"></script>
    <script src="<?= base_url() ?>assets/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/scripts/dashboard3.js"></script>
    <script src="<?= base_url() ?>assets/src/plugins/switchery/switchery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendors/scripts/advanced-components.js"></script>
    <script type="text/javascript">
      function confirm_modal(delete_url) {
        $('#modal_delete').modal('show', {
          backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
      }
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
          $(this).remove();
        });
      }, 2000);
    </script>
    <!-- js -->
  </body>

  </html>