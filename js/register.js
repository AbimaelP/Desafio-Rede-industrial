$('#form-register').submit((event)=>{
    event.preventDefault();
    const nome = $('#nome').val()
    const email = $('#email').val()
    const password = $('#password').val()
    const passwordRepeat = $('#password_repeat').val()
    const element = document.getElementById('register-message')

    if(password === passwordRepeat){
    
        $.ajax({
            url: '../backend/register_api.php',
            method: 'POST',
            data: {nome,email,password},
            dataType: 'json'
        }).done((response)=>{
            if(response.login == 'success'){
                localStorage.setItem('tokenID',response.token)
                window.location.href = '../admin_panel.php'
            }
            else {
                element.innerText = response.error
                element.style.display = 'block'
            }
        })
    }
    else  {
        element.innerText = 'As senhas são diferentes'
        element.style.display = 'block'
    }
})