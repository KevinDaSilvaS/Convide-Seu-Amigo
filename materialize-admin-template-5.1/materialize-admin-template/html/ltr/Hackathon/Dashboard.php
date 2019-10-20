<?php
  session_start();
  include("conexao.php");
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/ionRangeSlider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-modern-menu-template/style.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav style="color: #1e1e1f !important;" class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark ">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down ">

                    </div>

                    <!-- translation-button-->
                    <ul class="dropdown-content" id="translation-dropdown">

                    </ul>
                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">

                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">

                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    <aside style="color: #1e1e1f !important;" class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
        <div style="color: #1e1e1f !important;" class="brand-sidebar">
            <h1 class="logo-wrapper"></h1>
            <img src="../../../app-assets/images/logo/i.png" width="100%" alt="materialize logo" />
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

            <li class="bold"><a class="waves-effect waves-cyan " href=""><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="">Resumo</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href=""><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="">Carnês</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="Dashboard.php"><i class="material-icons">check</i><span class="menu-title" data-i18n="">Compra Valorizada</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href=""><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Minha Conta</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="Tela2.php"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Convide seus Amigos</span></a>
            </li>
            <hr style="color:#00000000;border-color: #00000000;">
            <hr style="color:#00000000;border-color: #00000000;">
            <hr style="color:#00000000;border-color: #00000000;">
            <hr style="color:#00000000;border-color: #00000000;">
            <img src="../../../app-assets/images/logo/img-menu.png" width="100%" alt="materialize logo" />
            </div>
        </li>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
   
    <div class="col s12">
              
        <div class="row">
        <div class="content-wrapper-before "></div>

    <div class="col s12 m12 l12">
        <div class="card animate fadeRight">
           <a href="Tela2.php"><img src="../../../app-assets/images/logo/bloco-compra-valorizada.png" width="100%" height="45%" alt="materialize logo"></a>
        </div>
    </div>
    <div class="col s12">
            <div id="set-value" class="card card-tabs">
                <div class="card-content">
                    <div class="card-title">
                        <div class="row">
                            <div class="col s12 m6 l10">
                                Titulo
                            </div>
                        </div>
                    </div>
                <div id="view-set-value">
                    <div class="row">
                        <div class="col s12">
                            <p>desc.missao</p>
                        </div>
                        <div class="col s12">
                        <div id="range_02"></div>
                        </div>
                        <script src="jquery-3.4.1.min.js"></script>  
                    </div>
                </div>
            </div>
       </div>
    <div class="col s4">
      <div id="borderless-table" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Créditos</p>
              </div>
              <div class="col s12 m6 l2">
              </div>
            </div>
          </div>
          <div id="view-borderless-table">
            <div class="row">
              <div class="col s12">
                <table class="responsive-table">
                  <thead>                    
                    <tr>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   $availableSumValue = 0;
                   $notAvailableYetSumValue = 0;
                   $dbClientsRewards = "SELECT * FROM cliente_recompensa ";
                   $resultDbClientsRewards = mysqli_query($mysqli_connection, $dbClientsRewards); 
                   while($dataDbClientsRewards = $resultDbClientsRewards->fetch_assoc()){

                       $status = $dataDbClientsRewards['status'];
                       $type = $dataDbClientsRewards['tipo'];
                       $rewardValue = $dataDbClientsRewards['valor_recompensa'];
                       
                        if ($status == 2 && $type != 1) {
                           $availableSumValue += $rewardValue;
                        }elseif($status == 1 && $type != 1) {
                            $notAvailableYetSumValue += $rewardValue;
                        }
                    }  
                    ?>
                 
                    <tr>
                      <td>Total Ganho</td>
                      <td> <?php echo number_format($availableSumValue + $notAvailableYetSumValue, 2, ',', '.'); ?></td>                    
                    </tr>
                   
                    <tr>
                      <td>Disponível</td>
                      <td><?php echo number_format($availableSumValue, 2, ',', '.'); ?></td>                     
                    </tr>

                    <tr>
                      <td>Pendente</td>
                      <td><?php echo number_format($notAvailableYetSumValue, 2, ',', '.'); ?></td>
                      </tr>
                   <?php?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="html-borderless-table">         
          </div>
        </div>
      </div>
    </div>
    <div class="col s8">
      <div id="borderless-table" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Compras</p>
              </div>
              <div class="col s12 m6 l2">
              </div>
            </div>
          </div>
          <div id="view-borderless-table">
            <div class="row">
              <div class="col s12">
                <table>
                  <thead>
                    <tr>
                      <th data-field="id">Data</th>
                      <th data-field="name">Loja</th>
                      <th data-field="price">Valor</th>                   
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $count = 0;
                  $tbClientsPurchases = "SELECT * FROM cliente_compra WHERE id_cliente = 1 ORDER BY dt_compra DESC";
                   $resultTbClientsPurchases = mysqli_query($mysqli_connection, $tbClientsPurchases); 
                   while($dadostbClientsPurchases = $resultTbClientsPurchases->fetch_assoc()){
                       $purchaseDate = $dadostbClientsPurchases['dt_compra'];
                       $value = $dadostbClientsPurchases['valor'];
                       $count++;
                       ?>
                    <tr>
                      <td><?php echo $purchaseDate;?></td>
                      <td>Renner</td>
                      <td><?php echo number_format($value, 2, ',', '.'); ?></td>                   
                    </tr>
                   <?php } ?>                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="html-borderless-table">

          </div>
        </div>
      </div>
    </div>
        </div>
            <script>
                $(function() {
                   //Set min value, max value and start point
                   $("#range_02").ionRangeSlider({
                        min: 0,
                        max: 15,
                        from: <?php echo $count;?>
                   });
                });
            </script>
        </div>
     </div>
    </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer style="color: #1e1e1f !important;" class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2019    </div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/ionRangeSlider/js/ion.rangeSlider.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/extra-components-range-slider.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>