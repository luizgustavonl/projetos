//Váriaveis - servem para armazenar dados
var numero = 5;     //tipo inteiro
var nome = 'Luiz';  //tipo string
var preco = 19.90;  //tipo decimal
var ativo = true;   //tipo booleano
var idade = 25;
var querVotar = true;

alert('Olá ' + nome);
//Estrutura condicional
// > maior
// < menor
// >= maior igual
// <= menor igual
// === igual
// !== diferente
//verifica se idade for maior que 18 "E" idade menor que 65
if(idade >= 18 &&  idade <= 65) {
    alert('Pode votar! ' + nome + ' idade é: ' + idade);

} else if(idade > 65 && querVotar === true){
    alert('Pode votar!, mas não é obrigado!');
}else {
    alert('Não pode votar! vai embora!');
}

//Estruturas de repetição
var contador = 0;
console.log("teste");

//enquanto o contador for menor que 10
while(contador <= 10){
    //imprime o contador
    console.log(contador);
    //soma +1 ao contador
    contador++;
}

//criando listas-0        1           2       3        4
var nomes = ['Nando','Astrogildo', 'Omar', 'Enéas','Silvio'];
//imprima o Nando
console.log(nomes[0]);
console.log(nomes[1]);

// var inicial  -condição de continuação - incrementador               
for(contador=0; contador < nomes.length; contador++){
    console.log(nomes[contador]);
}

var num1;

// criando funções
function fazerVenda(){
    num1 = document.getElementById("n1").value;
    console.log("Venda efetuada! " + num1);
    alert('Venda efetuada!' + num1);
}






