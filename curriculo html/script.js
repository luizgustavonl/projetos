//representa o botão de menu da classe celular no HTML
var iconeMenu = document.querySelector('.celular');
//representando a lista do menu que está invisível
var listaMenu = document.querySelector('.opcoes');

//monitora icone do menu, se está tendo algum clique
iconeMenu.addEventListener('click', function() { 
    //alternar classe "opcoes" para "mostrarMenu"
    alert('teste');
    listaMenu.classList.toggle('mostrarMenu');
}); 