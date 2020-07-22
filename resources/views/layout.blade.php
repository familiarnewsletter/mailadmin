<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stork.com</title>

  <!-- Custom fonts for this template-->
  <link href="/sb_admin_2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="/sb_admin_2/css/sb-admin-2.css" rel="stylesheet">


  @yield('styles')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-feather-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Stork.com </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-home"></i>
          <span>ホーム</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        販売部門
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-store-alt"></i>
          <span>店舗管理</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">業務選択:</h6>
            <a class="collapse-item" href="/shops/list/index">店舗マスタ</a>
            <a class="collapse-item" href="/shops/budgets/index">予算管理</a>
            <a class="collapse-item" href="#">在庫管理</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-building"></i>
          <span>法人管理</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">業務選択:</h6>
            <a class="collapse-item" href="/corporations/clients/index">法人マスタ</a>
            <a class="collapse-item" href="/corporations/budgets/index">予算管理</a>
            <a class="collapse-item" href="/corporations/orders/index">受注管理</a>
            <a class="collapse-item" href="/corporations/invoices/index">請求管理</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>EC管理</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="collapseThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">業務選択:</h6>
            <a class="collapse-item" href="#">予算管理</a>
            <a class="collapse-item" href="#">在庫管理</a>
            <a class="collapse-item" href="#">注文管理</a>
            <a class="collapse-item" href="#">出荷管理</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        商品部門
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage1" aria-expanded="true" aria-controls="collapsePage1">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>商品管理</span>
        </a>
        <div id="collapsePage1" class="collapse" aria-labelledby="headingPage1" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">業務選択:</h6>
            <a class="collapse-item" href="/products/list/index">商品マスタ</a>
            <a class="collapse-item" href="#">生産管理</a><!-- リンク先に/products/process/indexが入る予定 -->
            <a class="collapse-item" href="#">在庫管理</a>
            <a class="collapse-item" href="#">出荷管理</a><!-- リンク先に/products/delivery/index入る予定 -->
        </div>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        営業部門
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>売上管理</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">チャネル別:</h6>
            <a class="collapse-item" href="/earnings/shops/index">店舗分析</a>
            <a class="collapse-item" href="/earnings/corporations/index">法人分析</a>
            <a class="collapse-item" href="/earnings/ec/index">EC分析</a>
            <div class="collapse-divider"></div><br>
            <h6 class="collapse-header">カテゴリ別:</h6>
            <a class="collapse-item" href="/earnings/promotions/index">プロモーション効果分析</a>
            <a class="collapse-item" href="/earnings/categories/index">カテゴリ別分析</a>
            <a class="collapse-item" href="/earnings/brands/index">ブランド別分析</a>
            <a class="collapse-item" href="/earnings/sizes/index">サイズ別分析</a>
            <a class="collapse-item" href="/earnings/ages/index">年齢別分析</a>
            <a class="collapse-item" href="/earnings/areas/index">エリア別分析</a>
          </div>
        </div>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        販促部門
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage3" aria-expanded="true" aria-controls="collapsePage3">
          <i class="fas fa-fw fa-calendar-plus"></i>
          <span>プロモーション管理</span>
        </a>
        <div id="collapsePage3" class="collapse" aria-labelledby="headingPage3" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">業務選択:</h6>
            <a class="collapse-item" href="/promotion/list/index">販促マスタ</a>
            <a class="collapse-item" href="/promotion/newsletter/index">NewsLetter管理</a>
            <a class="collapse-item" href="/promotion/instagram/index">Instagram管理</a>
            <a class="collapse-item" href="/promotion/movie/index">動画コンテンツ管理</a>
            <a class="collapse-item" href="/promotion/line/index">LINE管理</a>
            <a class="collapse-item" href="/promotion/blog/index">ブログ管理</a>
            <a class="collapse-item" href="/promotion/facebook/index">Facebook管理</a>
        </div>
      </li>

            <!-- Heading -->
      <div class="sidebar-heading">
        共通部門
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage4" aria-expanded="true" aria-controls="collapsePage4">
          <i class="fas fa-fw fa-user"></i>
          <span>ユーザー設定</span>
        </a>
        <div id="collapsePage4" class="collapse" aria-labelledby="headingPage4" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">業務選択:</h6>
            <a class="collapse-item" href="/show">ユーザー管理</a>
            <a class="collapse-item" href="#">画面設定</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage5" aria-expanded="true" aria-controls="collapsePage4">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>ヘルプ</span>
        </a>
        <div id="collapsePage5" class="collapse" aria-labelledby="headingPage5" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">内容:</h6>
            <a class="collapse-item" href="#">各メニューについて</a>
            <a class="collapse-item" href="#">アカウントについて</a>
            <a class="collapse-item" href="#">お問い合わせ</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">June 29, 2020</div>
                    <span class="font-weight-bold">週次レポートがダウンロード可能です</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">June 28, 2020</div>
                    当月予算達成まで残り¥9,000,000です
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">June 25, 2020</div>
                     販促イベント経費が予算オーバーしています
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Chats -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-comment fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center<i class="fas fa-plus fa-fw"></i>
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">各店、6月29日中に7月予算を入力完了してください。</div>
                    <div class="small text-gray-500">山田花子</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">販促企画を追加しました。該当ページを確認ください。</div>
                    <div class="small text-gray-500">田中太郎</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">頑張れ</div>
                    <div class="small text-gray-500">鈴木一郎</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">札幌店が予算達成しました。</div>
                    <div class="small text-gray-500">札幌店スタッフ</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Fujishima</span>
                <img class="img-profile rounded-circle" src="/images/ginza2.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('content')        
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Stork.com 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="#">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
@yield('scripts')
<!-- Bootstrap core JavaScript-->
<script src="/sb_admin_2/vendor/jquery/jquery.js"></script>
<script src="/sb_admin_2/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>
  flatpickr(document.getElementById('due_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
  });
</script>

<script>
  flatpickr(document.getElementById('announce_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
  });
</script>

<script>
  flatpickr(document.getElementById('start_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
  });
</script>

<script>
  flatpickr(document.getElementById('end_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    minDate: new Date()
  });
</script>

<script>
  flatpickr(document.getElementById('logstart_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    defaultDate: ["2016-2-1", new Date()]
  });
</script>

<script>
  flatpickr(document.getElementById('logend_date'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    defaultDate: ["2016-2-1", new Date()]
  });
</script>

<script>
  flatpickr(document.getElementById('logend_date2'), {
    locale: 'ja',
    dateFormat: "Y/m/d",
    defaultDate: ["2016-2-1", new Date()]
  });
</script>
 

</body>

</html>
