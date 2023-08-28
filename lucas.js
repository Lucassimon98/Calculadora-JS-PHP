// Calculadora em JS

//Declarando as variaveis
let num1 
let num2
let resultado


//criando a função soma
function soma(num1, num2) {
    resultado = num1 + num2   
    return resultado
}


//criando a função subtração
function subtracao(num1, num2) {
    return num1 - num2
}


// Criando array para usar e testar percorrer por eles
let arr = [10, 25, 75, 12, 5, 10]
//adicionando mais numeros no array
arr.push(20, 25)
document.getElementById('consultaArray').innerHTML = "Primeira consulta index 0: " + arr[0];
document.getElementById('consultaArray2').innerHTML = "Segunda consulta index 3: " + arr[3];


//usando array na função de soma
resultado = soma(arr[0], arr[5])
console.log("Soma é igual a : " + resultado)
document.getElementById('soma').innerHTML = "Resultado da Função Soma: " + resultado;


//usando array na função de subtração
resultado = subtracao(arr[2], arr[5])
console.log("Subtração é igual a: " + resultado)


//criando a função multiplicar, colocando ela em uma variável
let multiplicar = function(num1, num2) {
    return num1 * num2
}
resultado = multiplicar(arr[5], arr[2])
console.log("Multiplicação é igual a: " + resultado)


//criando um objeto para usar os numeros
let number = {
    v1: 5,
    v2: 8,
    v3: 4,
    v4: 10
}
// adicionando mais elemento
number.v5 = 15
//mostrando todos os elementos
console.dir(number)


//criando a função dividir como anonima, e colocando ela como variável
//fazendo a conta com os numeros do objeto
let dividir = (num1, num2) => {
    return num1 / num2
}
resultado = dividir(number.v4, number.v1)
console.log("Divisão é igual a: " + resultado)


// Modulo da Divisão (Sobra)
let modulo = (num1, num2) => {
    return num1 % num2
}
resultado = modulo(9, 3)
console.log("O resto da divisão é: " + resultado)


// Definindo um numero se é par ou impar
num1 = 18
contaParImpar = num1 % 2;
console.log(contaParImpar)
//usando if e else
if(contaParImpar == 0) {
    console.log("O numero é par")
} else {
    console.log("O numero é impar")
}


//mostrar um array
//percorrendo com foreach
arr.forEach(mostrar_array => {
    console.log(mostrar_array)
});
//percorrendo com for
for (let index = 0; index < arr.length; index++) {
    const mostrar_array = arr[index];
    console.log("Numero: " + mostrar_array)
}