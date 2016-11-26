<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="back">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <img src="img/logo.png" alt="" title="Market4u" class="logo">
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3" style="text-align: center;">
                        <div id="texto">
                            <h1 class="center" style="margin-top: 50px;"><b>O que é a Market4u</b></h1>
                            <p class="center" style="padding: 20px 10px;font-size: 20px;">A Market4u, através do cruzamento de informações disponíveis na web, exibirá dados dos seus concorrentes mais próximos e sugere informações para ação em Market Digital, ajudando a estudar o mercado ao seu redor e como marcar presença.</p>
                        </div>
                        <button class="btn btn-success btn-lg" id="comeca" style="margin-top: 30px;">Vamos começar</button>
                    </div>
                    <div class="col-md-6" id="some">
                        
                        <div id="step" >
                            <h4 class="step">01/02</h4>
                                <section>
                                    <div class="form-group" style="margin-top: 80px;">
                                        <h2><b>Digite seu nome</b></h2><span class="float-r">01/02</span>
                                        <input type="text" class="form-control color-input" placeholder="Digite seu nome" id="nome">
                                    </div>
                                    <div class="form-group">
                                        <h2><b>Digite seu email</b></h2>
                                        <input type="text" class="form-control color-input" placeholder="Digite seu email" id="email">
                                    </div>
                                </section>
                            <h4 class="step">02/02</h4>
                                <section>
                                    <div class="form-group min-top" id="some">
                                        <h2><b>Digite seu CNPJ</b></h2><span class="float-r">02/02</span>
                                        <input type="text" class="form-control color-input" placeholder="Digite seu CNPJ" id="cnpj">
                                    </div>
                                </section>
                        </div>
                    </div>
                    <div class="col-md-6" style="display: none; margin-top: 80px;" id="resposta">
                        <form>
                            <div class="form-group">
                                <label>Razão Social</label>
                                <input type="text" value="" id="rs" disabled class="form-control color-input">
                            </div>
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" value="" id="end" disabled class="form-control color-input">
                            </div>
                             <div class="form-group">
                                <a href="step2.php" class="btn btn-success btn-lg">Ver resultado</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/jquery.steps.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>