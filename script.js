function abrirRodape() {
  document.getElementById('texto1').style.opacity = '100%';    
  document.getElementById('texto1').style.transition = '0.7s';

  document.getElementById('textoo').style.height = '63px';
  document.getElementById('textoo').style.width = '100%';
  document.getElementById('textoo').style.padding = '10px';
  document.getElementById('textoo').style.transition = '0.4s';

  document.getElementById('titu').style.marginTop = '0px';
  document.getElementById('titu').style.width = '100%';
  document.getElementById('titu').style.padding = '10px';
  document.getElementById('titu').style.height = '37px';

  document.getElementById('titu').style.transition = '0.4s';

  document.getElementById('rodapeTexto').style.opacity = '100%';
  document.getElementById('rodapeTexto').style.transition = '1s';

  document.getElementById('info').style.width = '100%';
  document.getElementById('info').style.transition = '0.4s';

  console.log("Rodapé aberto");
}
function fecharRodape() {
    document.getElementById('texto1').style.opacity = '0';    
    document.getElementById('titu').style.width = '0';
    document.getElementById('titu').style.height = '0';
    document.getElementById('texto1').style.transition = '0.4s';

    document.getElementById('textoo').style.height = '0';
    document.getElementById('textoo').style.width = '0';
    document.getElementById('textoo').style.padding = '0';
    document.getElementById('textoo').style.transition = '0.3s';

    document.getElementById('titu').style.marginTop = '120px';
    document.getElementById('titu').style.transition = '0.6s';

    document.getElementById('rodapeTexto').style.opacity = '0';
    document.getElementById('rodapeTexto').style.transition = '0.2s';

    document.getElementById('info').style.width = '0';
    document.getElementById('info').style.transition = '0.3s';
  }
  
