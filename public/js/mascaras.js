//********** MASCARA PARA O CPF *************

const input = document.querySelector('input#cpf')

input.addEventListener('keypress', (evento) => {
    
    // verificando se o valor digitado pelo usuário é uma letra
    let valorDigitado = evento.key;

    if (isNaN(valorDigitado)) {

        evento.preventDefault()
    }
    
    let inputlength = input.value.length

    if (inputlength === 3 || inputlength === 7) {
        input.value += '.'
    }else if (inputlength === 11) {
        input.value += '-'
    }
})

//********** MASCARA PARA O TELEFONE ***********

const tel = document.querySelector('input#telefone')

tel.addEventListener('keypress', (evento) => {

    // verificando se o valor digitado pelo usuário é uma letra
    let valorDigitado = evento.key;

    if (isNaN(valorDigitado)) {

        evento.preventDefault()
    }

    let tellength = tel.value.length

    if (tellength === 0) {
        tel.value += '('
    }
    if (tellength === 3) {
        tel.value += ') '
    }
    if (tellength === 10) {
        tel.value += '-'
    }
})