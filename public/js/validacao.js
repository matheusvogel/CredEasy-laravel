export function valida(input) {
    const tipoDeInput = input.dataset.tipo

// if(validadores[tipoDeInput]) {
    // validadores[tipoDeInput](input)
}

   if(input.validity.valid) {
        input.parentElement.classLIst.remove('input-container--invalido')       
        // input.parentElement.querySelector('.input-mensagem-erro').innerHTML = ''
    }else {
        input.parentElement.classList.add('input-container--invalido')
        // input.parentElement.querySelector('.input-mensagem-erro').innerHTML = mostraMensagemDeErro(tipoDeInput,input)
  } 


 const tiposDeErro = [
     'valueMIssing',
    //  'typeMismatch',
    //  'patternMismatch',
    //  'customError'
]

const mensagensDeErro = {
     nome: {
         valueMIssing: 'O campo nome não pode estar vazio.'
     }
    // cpf: {
    //     valueMIssing: 'O campo cpf não pode estar vazio.'
    // },
    // telefone: {
    //     valueMIssing: 'O campo telefone não pode estar vazio.',
    //     typeMismatch: 'O telefone digitado não é valido'
    // },
    // email: {
    //     valueMissing: 'O campo de email não pode estar vazio.',
    //      typeMismatch: 'O email digitado não é valido'
    // },
    // senha: {
    //     valueMissing: 'O campo de senha não pode estar vazio.',
    //    patternMismatch: 'A senha deve conter entre 6 a 8 caracteres'
    // },
}

//  const validadores = {
//      cep:input => recuperarCEP(input)
    
//  }

function mostraMensagemDeErro(tipoDeInput, input) {
     let mensagem = ''
     tiposDeErro.forEach(erro => {
         if(input.validity[erro]) {
             mensagem = mensagensDeErro[tipoDeInput][erro]
         }
})
    return mensagem

}