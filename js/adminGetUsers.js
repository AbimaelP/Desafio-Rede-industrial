const elementMain = document.getElementById('content-main-users')

function getUsers(){
    $.ajax({
        url: '../backend/getUsers_api.php',
        method: 'POST',
        data: {tokenID},
        dataType: 'json'
    }).done((response)=>{
        for(i in response){
            renderUsers(response[i])
        }
    })
}

function renderUsers(data){
    //criar os elementos
    if(data[1] != 'admin@gmail.com'){
        let contentUser = document.createElement('div')
        let email = document.createElement('div')
        let nome = document.createElement('div')
        let contentBtn = document.createElement('div')
        let excluirBtn = document.createElement('button')

        //adicionar classes
        contentUser.classList.add('content-user')
        nome.classList.add('nome')
        email.classList.add('email')
        contentBtn.classList.add('action-buttons')
        excluirBtn.classList.add('excluir')

        //inserir os dados
        nome.innerText = data[0]
        email.innerText = data[1]
        excluirBtn.innerText = 'Excluir'
        excluirBtn.value = data[2]
        excluirBtn.onclick = function (){ deleteUser(this.value) }

        //renderizar elementos
        elementMain.appendChild(contentUser)
        contentUser.appendChild(nome)
        contentUser.appendChild(email)
        contentUser.appendChild(contentBtn)
        contentBtn.appendChild(excluirBtn)
    }
}

function deleteUser(token){
    console.log(token)
        $.ajax({
            url: '../backend/deleteUser_api.php',
            method: 'POST',
            data: {token},
            dataType: 'json'
        }).done((response)=>{
            console.log(response)
        })
        window.location.reload(true)
}

getUsers()