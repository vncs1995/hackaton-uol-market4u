google.charts.load('visualization', '1.0', {'packages':['corechart']});
  google.charts.setOnLoadCallback(graf01);
    function graf01() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Com site',     34],
        ['Sem site',     58],
      ]);
      var options = {
        height: 400,
        width: 500,
        is3D: true,
        chartArea: {'width': '100%', 'height': '100%'},
        legend: {'position': 'center'},
        colors: ['#CD0000','#00CD00'],
        pieStartAngle: 100,
      };
      var chart = new google.visualization.PieChart(document.getElementById('graf01'));
        chart.draw(data, options);
      }
google.charts.load('visualization', '1.0', {'packages':['corechart']});
  google.charts.setOnLoadCallback(graf02);
    function graf02() {
      var data1 = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Com FanPage',     44],
        ['Sem Fanpage',     48],
      ]);
      var options1 = {
        height: 400,
        width: 500,
        is3D: true,
        'chartArea': {'width': '100%', 'height': '100%'},
        'legend': {'position': 'center'},
        pieStartAngle: 100,
      };
      var chart1 = new google.visualization.PieChart(document.getElementById('graf02'));
        chart1.draw(data1, options1);
      }
google.charts.load('visualization', '1.0', {'packages':['corechart']});
  google.charts.setOnLoadCallback(graf03);
    function graf03() {
      var data2 = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['1 Estrela',      18],
        ['2 Estrelas',     9],
        ['3 Estrelas',     27],
        ['4 Estrelas',     8],
        ['5 Estrelas',     28],
      ]);
      var options2 = {
        height: 400,
        width: 500,
        is3D: true,
        'chartArea': {'width': '100%', 'height': '100%'},
        'legend': {'position': 'center'},
        pieStartAngle: 100,
      };
      var chart1 = new google.visualization.PieChart(document.getElementById('graf03'));
        chart1.draw(data2, options2);
      }
//return dados CNPJ 08731426000127
$("#step").steps({
    headerTag: "h4",
    bodyTag: "section",
    transitionEffect: "fade",
    autoFocus: true,
    onFinishing: function (event, currentIndex) {
      enableKeyNavigation: false;
      var some = $("#some");
      var nome = $("#nome").val();
      var email = $("#email").val();
        $.ajax({
          type: "GET",
          datatype : 'jpson', 
          url: "https://www.receitaws.com.br/v1/cnpj/"+$("#cnpj").val(),/*
          headers: {
            "Authorization": df943731a162cd2dabe68e3fc9f41ff5cc87ac39b1ae4f02ad9baac06f838db6
          },*/
              success: function(data){
                some.css('display', 'none');
                $("#rs").attr('value',data.nome);
                $("#end").attr('value',data.logradouro+', '+data.numero+' - '+data.complemento+', '+data.bairro);
                $("#resposta").css('display','block');
              }
        });
    }, 
});
$("#comeca").click(function(){
  $("#comeca").css('display', 'none');
  $("#texto").css('display', 'none');
  $("#step").css('display', 'block');
});