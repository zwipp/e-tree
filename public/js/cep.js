const cepInput = document.querySelector('#cep');
const cidadeInput = document.querySelector('#cidade');
const ufInput = document.querySelector('#uf');

const buscaCep = (evt) => {

    const cepDigitado = evt.target.value; 

    if(cepDigitado.length != 8 ){
        //saindo da função (return vazio)
        return;
    }

    fetch(`https://viacep.com.br/ws/${cepDigitado}/json/`)
    .then((response) => {return response.json()})
    .then((dados) => {
    cidadeInput.value = dados.localidade;
    ufInput.value = dados.uf;
    })
}

cepInput.oninput = buscaCep;
