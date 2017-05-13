$(document).ready(principal);
function principal() {
  // guardamos el objeto del input en una variable
  var estado = $('#estado');
  var valMun = $('#mun').attr('value');
  // guardamos el objeto input en la variable inpUrlCont
  var inpUrlCont = $('#urlCont');
  var urlContPrincipal = inpUrlCont.val();
  var estadoVal = estado.val();
  if (estado.length !== 0) {
    if (!(estadoVal==='')) {
      $.post({
        data: {idEstado:estadoVal},
        url : urlContPrincipal,
        dataType:'json',
        success : exitoEst,
        error : errorEst
      });
    }
  }
  //vamos a buscar los municipios si en el formulario se quedo grabado algún estado.
  estado.on('change',evtChangeSelect);
  function evtChangeSelect(e) {
    var idEstado = $(e.target).val();
    if (idEstado == 0) {
      var disInpMun = $('#mun').prop('disabled');
      if (!disInpMun) {
        $('#mun').attr('disabled','disabled').html("");
      }//fin del if
    }else{
      $.post({
        data: {idEstado:idEstado},
        url : urlContPrincipal,
        dataType:'json',
        success : exitoEst,
        error : errorEst
      });
    }//fin del else
  }//fin de la función evtChangeSelect
  //está función nos sirve para indicarnos que el ajax fue exitoso.
  function exitoEst(data,y,z) {
    if (data.exito) {
      $('#mun').html(data.datos).removeAttr('disabled');
      selectMun();
    }else{

    }//fin del else
  }//fin de la función exitoEst
  //esta funcíón nos sirve para indicarnos si pasa un error en el ajax.
  function errorEst(x,y,z) {
    console.log(x);
    console.log(y);
    console.log(z);
  }//fin de la función errorEst
  function selectMun() {
    if (valMun.length > 0) {
      $('#mun option[value='+valMun+']').attr('selected','selected');
    }
  }
}//fin de la función principal
