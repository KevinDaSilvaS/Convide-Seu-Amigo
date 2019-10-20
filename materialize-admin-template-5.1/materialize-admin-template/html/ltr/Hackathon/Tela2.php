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
        <div class="row">
       </div>
    <div class="col s12 m12 l12">
    <input type="text"  value="ISADORA12" id="myInput" style="display:none;">
        <div class="card animate fadeRight">
            <p onclick="myFunction();"><img src="../../../app-assets/images/logo/fundo_codigo_convite.png" width="100%" height="45%" alt="materialize logo" /></p>
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
                <table>
                  <thead>
                    <tr>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   $somaDisponivel = 0;
                   $somaPendente = 0;
                   $dbClienteRecompensa = "SELECT * FROM cliente_recompensa ";
                   $resultdbClienteRecompensa = mysqli_query($mysqli_connection, $dbClienteRecompensa); 
                   while($dadosdbClienteRecompensa = $resultdbClienteRecompensa->fetch_assoc()){

                      $status = $dadosdbClienteRecompensa['status'];
                      $tipo = $dadosdbClienteRecompensa['tipo'];
                      $valor = $dadosdbClienteRecompensa['valor_recompensa'];
                       
                      if ($status == 2 && $tipo == 1) {
                        $somaDisponivel += $valor;
                      }elseif( $tipo == 1) {
                        $somaPendente += $valor;
                      }
                    }  
                    ?>
                 
                    <tr>
                      <td>Total Ganho</td>
                      <td><?php echo number_format($somaDisponivel + $somaPendente, 2, ',', '.');?></td>
                    </tr>
                    <tr>
                      <td>Disponível</td>
                      <td><?php echo number_format($somaDisponivel, 2, ',', '.');?></td>
                    </tr>
                    <tr>
                      <td>Pendente</td>
                      <td><?php echo number_format($somaPendente, 2, ',', '.');?></td>
                    </tr>
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
                <h4 class="card-title">Convites Aceitos</p>
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
                      <th data-field="id">Nome</th>
                      <th data-field="name">Aceito em:</th>
                      <th data-field="price">Situação</th>
                      <th data-field="price">Bonus</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $tbIndication = "SELECT * FROM cliente_indicacao ORDER BY dt_aceito DESC";
                   $resultTbIndication = mysqli_query($mysqli_connection, $tbIndication); 
                   while($dataIndication = $resultTbIndication->fetch_assoc()){
                       $clientId = $dataIndication['idcliente_indicacao'];

                        $tbClient = "SELECT * FROM cliente  WHERE idCliente = '$clientId'";
                        $resultTbClient = mysqli_query($mysqli_connection, $tbClient); 
                        $dataTbClient = $resultTbClient->fetch_assoc();

                        $clientName = $dataTbClient['nome'];
                        if ( $dataIndication['situacao'] == 1) {
                           $response = "Criou cartão mas não realizou compra";
                        }elseif ($dataIndication['situacao'] == 2) {
                           $response = "Criou cartão e realizou compra";
                        }
                       ?>
                    <tr>
                      <td><?php echo  $clientName; ?></td>
                      <td><?php echo $dataIndication['dt_aceito'];?></td>
                      <td><?php echo $response;?></td>
                      <td><?php echo number_format($dataIndication['bonus'], 2, ',', '.'); ?></td>
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

    <script>
      function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
      }
    </script>
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