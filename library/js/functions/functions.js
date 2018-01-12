$(document).ready(function(){
                
    $("#btn_click").click(function(){

        calc();

    })

});

function calc() {

    var numbers = $('#numbers').val();

    if (numbers != ''){
      $.ajax({
      url:'library/php/json_functions/statistic.php',
      data:({
        numbers: numbers
      }),
      type:'post',
      dataType:'json',
        success:function(data){
          alert(data.msg);
          alert('O valor mínimo dos elementos é '+ data.mininumValue + ' .');
          alert('O valor máximo dos elementos é '+ data.maximumValue + ' .');
          alert('Foram introduzidos '+ data.elementCount + ' números.');
          alert('A média dos números é '+ data.average + ' .');
        }
      });
    } else {
      alert('Favor, insira pelo menos dois números para que os cálculos sejam feitos.')
    }

}