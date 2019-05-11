<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <title>Nailed it!</title>

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="layout/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- Libraries CSS Files -->
  <link href="layout/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="layout/lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="layout/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="layout/css/main.css">

  <!--CADASTRO===============================================================================================-->  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  
  <link rel="stylesheet" type="text/css" href="layout/vendor/animate/animate.css">
  <!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="layout/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->

  <link rel="stylesheet" type="text/css" href="layout/css/util.css">
  <link rel="stylesheet" type="text/css" href="layout/css/main.css">
  <!--===============================================================================================-->
</head>

<body>
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="layout/img/logo.png" alt="Imperial">
        </div>

        <h1>Bem vindo(a) ao Nailed it!</h1>
        <h2>Servimos bem para <span class="rotating"> te fazer bem, estar sempre bem, servir sempre!</span></h2>
        <div class="actions">
          <button type="button" class="btn btn-nofill btn-collapse"  data-target="#cadCliente">CADASTRO CLIENTES</button>
          <button type="button" class="btn btn-nofill btn-collapse" data-target="#cadPromo">CADASTRO PROMOÇÕES</button>
          <button type="button" class="btn btn-nofill btn-collapse" data-target="#addPontos">ADICIONAR PONTOS</button>
          <button type="button" class="btn btn-nofill btn-collapse" data-target="#cadVenda">VENDER UM SERVIÇO</button>
          <button type="button" class="btn btn-nofill btn-collapse" data-target="#catalogo" id="btncatalogo">CATÁLOGO</button>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  CLIENTE#########
  ============================-->

    <div class="collapse" id="cadCliente">
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form class="login100-form validate-form flex-sb flex-w">
              <span class="login100-form-title p-b-32">
                Cadastro Cliente
              </span>

              <span class="txt1 p-b-11">
                Nome
              </span>
              <div class="wrap-input100 validate-input m-b-36" data-validate = "Favor inserir um nome.">
                <input class="input100" type="text" id="nomeCliente" name="nomeCliente" >
                <span class="focus-input100"></span>
              </div>

              <span class="txt1 p-b-11">
                CPF
              </span>
              <div class="wrap-input100 validate-input m-b-36" data-validate = "Favor inserir um CPF.">
                <input class="input100 cpf" type="text" id="cpfCliente" name="cpfCliente" >
                <span class="focus-input100"></span>
              </div>

              <span class="txt1 p-b-11">
                Telefone
              </span>
              <div class="wrap-input100 validate-input m-b-36" data-validate = "Favor inserir um telefone.">
                <input class="input100 phone" type="text" id="telefoneCliente" name="telefoneCliente" >
                <span class="focus-input100"></span>
              </div>

              <div class="container-login100-form-btn">
                <button class="login100-form-btn" style="margin: 0 auto;" id="cadcli" name="cadcli"> 
                  Cadastrar
                </button>
              </div>

              <span class="txt1 p-b-11 text-success" style="color: green; margin-top: 15px;" id="clientsuccess" name="clientsuccess"></span>
              <span class="txt1 p-b-11 text-danger" style="color: red; margin-top: 15px; text-transform: capitalize;" id="clienterror" name="clienterror"></span>
            </form>
          </div>
        </div>
      </div>
    </div>
 
  <!--==========================
  FIM CLIENTE #########
  ============================-->


  <!--==========================
  PROMOÇÃO#########
  ============================-->
      <div class="collapse" id="cadPromo">
        <div class="limiter">
          <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
              <form class="login100-form validate-form flex-sb flex-w">
                <span class="login100-form-title p-b-32">
                  Cadastro do Serviço
                </span>

                <span class="txt1 p-b-11">
                  Nome do Serviço
                </span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "Favor inserir o nome do serviço">
                  <input class="input100" type="text" id="nomeServico" name="nomeServico" >
                  <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">
                  Custo (em pontos):
                </span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "Favor inserir quantidade de pontos">
                  <input class="input100" type="number" id="pontosServico" name="pontosServico" >
                  <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                  <button class="login100-form-btn" style="margin: 0 auto;" id="cadpromo" name="cadpromo"> 
                    Cadastrar
                  </button>
                </div>

                <span class="txt1 p-b-11 text-success" style="color: green; margin-top: 15px;" id="promosuccess" name="promosuccess"></span>
                <span class="txt1 p-b-11 text-danger" style="color: red; margin-top: 15px; text-transform: capitalize;" id="promoerror" name="promoerror"></span>

              </form>
            </div>
          </div>
        </div>
      </div>
  <!--==========================
  FIM PROMOCAO#########
  ============================-->

    <!--==========================
  ADICIONAR PONTOS#########
  ============================-->
  
<div class="collapse" id="addPontos">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="validate-form">
          <span class="login100-form-title p-b-32">
            Adição de Pontos
           </span>

          <span class="txt1 p-b-11">
            Por favor, selecione um cliente abaixo:
          </span>

          <?php 
            $db = mysqli_connect('localhost', 'root', '', 'nailedit');
                            
            $sql = "SELECT * FROM cliente";
            $result = mysqli_query($db, $sql);

            echo "<div class='form-group wrap-input100 validate-input' data-validate='Por favor, selecione um cliente'>";
            echo "<select class='form-control' id='dropclient' name='dropclient'>";
            echo "<option></option>";
              while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['Id'] . "'>" . $row['Nome'] . " - CPF: " . $row['CPF'] .  "</option>";
              }
            echo "</select>";
            echo "</div>";
          ?>
                    

          <span class="txt1 p-b-11">
            Digite abaixo quantos pontos adicionar a carteira dele:
          </span>
          <div class="wrap-input100 validate-input m-b-12" data-validate = "Favor inserir quantidade de pontos">
            <input class="input100" type="number" id="pointsCliente" name="pointsCliente" >
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" style="margin: 0 auto;" id="cadpontos" name="cadpontos">
              Adicionar Pontos
            </button>
          </div>

          <span class="txt1 p-b-11 text-success" style="color: green; margin-top: 15px;" id="pointsuccess" name="pointsuccess"></span>
          <span class="txt1 p-b-11 text-danger" style="color: red; margin-top: 15px; text-transform: capitalize;" id="pointerror" name="pointerror"></span>
        </form>
      </div>
    </div>
  </div>
</div>
  <!--==========================
  FIM PONTOS#########
  ============================-->


    <!--==========================
  VENDAS#########
  ============================-->
 <div class="collapse" id="cadVenda">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="validate-form">
          <span class="login100-form-title p-b-32">
            Escolhendo o serviço
          </span>

          <span class="txt1 p-b-11">
            Por favor, selecione um cliente abaixo:
          </span>

          <?php 
            $db = mysqli_connect('localhost', 'root', '', 'nailedit');
                            
            $sql = "SELECT * FROM cliente";
            $result = mysqli_query($db, $sql);

            echo "<div class='form-group validate-input' data-validate='Por favor, selecione um cliente'>";
            echo "<select class='form-control' id='clientdrop' name='clientdrop'>";
            echo "<option></option>";
              while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['Id'] . "'>" . $row['Nome'] . " - CPF: " . $row['CPF'] .  "</option>";
              }
            echo "</select>";
            echo "</div>";
          ?>
                    

            <span class="txt1 p-b-11">
              E qual serviço ele deseja?
            </span>

            <div class="form-group validate-input" data-validate="Por favor, selecione um serviço">
              <select class='form-control' id='dropservice' name='dropservice'>
                <option></option>
              </select>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn" style="margin: 0 auto;" id="cadvenda" name="cadvenda">
                Descontar Pontos
              </button>
            </div>

            <span class="txt1 p-b-11 text-success" style="color: green; margin-top: 15px;" id="vendasuccess" name="vendasuccess"></span>
            <span class="txt1 p-b-11 text-danger" style="color: red; margin-top: 15px; text-transform: capitalize;" id="vendaerror" name="vendaerror"></span>
        </form>
      </div>
    </div>
  </div>
</div>
  <!--==========================
  FIM VENDAS#########
  ============================-->


<!-- CATALOGO -->

<div class="collapse" id="catalogo">
  <div class="limiter">

  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nosso catálogo</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Todos os serviços abaixo estão disponíveis para compra</p>
        </div>
      </div>

      <div class="row" id="allServices">
      </div>
    </div>
  </section>



  </div>
</div>


<!-- FIM CATALOGO -->


  <!--==========================
  Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>, programmed by <a href="#">ETEP Team</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries MENU -->
  <script src="layout/lib/jquery/jquery.min.js"></script>
  <script src="layout/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="layout/lib/superfish/hoverIntent.js"></script>
  <script src="layout/lib/superfish/superfish.min.js"></script>
  <script src="layout/lib/morphext/morphext.min.js"></script>
  <script src="layout/lib/wow/wow.min.js"></script>
  <script src="layout/lib/stickyjs/sticky.js"></script>
  <script src="layout/lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="layout/js/custom.js"></script>

  <script src="layout/contactform/contactform.js"></script>

  <!--CADASTRO===============================================================================================-->
  <script src="layout/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
  <!--===============================================================================================-->
  <script src="layout/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="layout/vendor/bootstrap/js/popper.js"></script>
  <script src="layout/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="layout/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="layout/vendor/daterangepicker/moment.min.js"></script>
  <script src="layout/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="layout/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="layout/js/main.js"></script>

  <script src="scripts/cliente.js"></script>
  <script src="scripts/promocao.js"></script>
  <script src="scripts/addpontos.js"></script>
  <script src="scripts/vendas.js"></script>
  <script src="scripts/catalogo.js"></script>

</body>
</html>
