$('#form-auth').submit((event)=>{
    event.preventDefault();

    const email = $('#email').val()
    const password = $('#password').val()
    
    $.ajax({
        url: '../backend/login_api.php',
        method: 'POST',
        data: {email,password},
        dataType: 'json'
    }).done((response)=>{
        if(response.login == 'success'){
            localStorage.setItem('tokenID',response.token)
            window.location.href = '../admin_panel.php'
        }
        else {
            const element = document.getElementById('login-message')
            element.innerText = response.error
            element.style.display = 'block'
        }
    })
})