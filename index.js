const numero = 9631;

const numeroEmString = numero.toString();

for(let index = 0; index < numeroEmString.length; index ++){
    console.log(numeroEmString[index])
}

const print = (param) => {
    console.log(param);
}

const lista = 
    {
        nome: "Adrielly",
        sobreNome: "Gomes",  //Sim, casamos! <3
        idade: "19",
        funcao: "amor da minha vida",
    }

function retornaAmorDaMinhaVida(lista){
    return lista
}

print(retornaAmorDaMinhaVida(lista))

const amorDaMinhaVida = retornaAmorDaMinhaVida(lista)

const {nome, sobreNome, idade, funcao} = amorDaMinhaVida

print(`Minha esposa se chama ${nome} ${sobreNome}. Ela tem ${idade} anos de idade e a função dela é ser ${funcao} <3 s2 s2`);
