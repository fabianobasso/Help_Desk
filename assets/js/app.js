function abrirModal(){
    $('#modalCadastro').modal('show')
}

function modalSucessoCadastro(){
    document.getElementById('modalTitulo').className = 'modal-title text-success'
    document.getElementById('modalTitulo').innerHTML = 'Cadastro Usuário'
    document.getElementById('modalTexto').innerHTML = 'Cadastro Efetuado com Sucesso'
    document.getElementById('btnModal').innerHTML = 'Sair'
    $('#modalErroCadastro').modal('show')
}

function modalErroCadastro(){
    document.getElementById('modalTitulo').className = 'modal-title text-danger'
    document.getElementById('modalTitulo').innerHTML = 'Cadastro Usuário'
    document.getElementById('modalTexto').innerHTML = 'Erro no cadastro: Todos os campos são obrigatório'
    document.getElementById('btnModal').innerHTML = 'Voltar'
    $('#modalErroCadastro').modal('show')
}

function modalUsuarioExiste(){
    document.getElementById('modalTitulo').className = 'modal-title text-danger'
    document.getElementById('modalTitulo').innerHTML = 'Cadastro Usuário'
    document.getElementById('modalTexto').innerHTML = 'Erro: Usuário já exite no sistema.'
    document.getElementById('btnModal').innerHTML = 'Voltar'
    document.getElementById('btnModal').className = 'btn btn-danger'
    $('#modalErroCadastro').modal('show')
}



