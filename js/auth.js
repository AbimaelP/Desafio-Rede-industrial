
const tokenID = localStorage.getItem('tokenID')

function auth(){
    $.ajax({
        url: '../backend/auth_api.php',
        method: 'POST',
        data: {tokenID},
        dataType: 'json'
    }).done((response)=>{
        console.log(response.isAdmin)
        if(response.token == 'token-invalid'){
            window.location.replace('../login.php')
        }
        else if(response.isAdmin != true){
            window.location.replace('../index.php')
        }
    })
}

auth()