<?php require_once 'header.php'; ?>
    <div class="back-color">
    	<div class="container">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<h2><b>Analise gráfica</b></h2>
	    		</div>
	    	</div>
	    </div>
    </div>
    <div class="container" style="margin-top: 20px;">
    	<div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">Quantidade de concorrentes comparados: <b style="color: #a94442; font-size: 19px;">92</b></div>
            </div>
    		<div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">Concorrentes com sites</div>
                  <div class="panel-body">
                    <div id="graf01"></div>
                  </div>
                </div>
    		</div>
            <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">Concorrentes com Fanpages</div>
                  <div class="panel-body">
                    <div id="graf02"></div>
                  </div>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 20px;">
                <div class="panel panel-default">
                  <div class="panel-heading">Quantidade de conocorrentes por classificação (google)</div>
                  <div class="panel-body">
                    <div id="graf03"></div>
                  </div>
                </div>
            </div>
    	</div>
    </div>
    <?php require_once 'footer.php'; ?>