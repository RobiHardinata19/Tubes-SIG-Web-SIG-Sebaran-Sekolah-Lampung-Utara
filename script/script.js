const emailInput = document.querySelector('#InputEmail1');
const passwordlInput = document.querySelector('#InputPassword1');
const btnLogin = document.querySelector('#btnLogin');
const message = document.querySelector('#message');
let database = [
    {
        'email' : 'panduwahyudi12@gmail.com',
        'password': '12345678'
    },
    {
        'email' : 'admin',
        'password': '123'
    },
    {
        'email' : 'Robihadinata12@gmail.com',
        'password': '16040265'
    }
]

btnLogin.addEventListener('click',()=>{
    message.innerHTML='';
    let email = emailInput.value;
    let password = passwordlInput.value;
    let validate = true;
    if(email===''){
        validate=false;
        message.innerHTML += '<div class= "alert alert-danger">Email Tidak Boleh Kosong</div>'
    }
    if(password===''){
        message.innerHTML += '<div class= "alert alert-danger">Password Tidak Boleh Kosong</div>'
    }
    if(validate){
        let success = {'email': false,'password' : false};
        for(let i=0;i<database.length;i++){
            if(email== database [i]['email']){
                success.email = true;
                if(password == database [i]['password']){
                    success.password = true;   
                }
            }
        }
        if(success.email){
            if(success.password){
                document.location.href ='admin/index.php';

            }else{
                message.innerHTML = '<div class= "alert alert-danger">Password Salah</div>';
            }

        }else{
            message.innerHTML = '<div class= "alert alert-danger">Email Tidak Dikenali</div>';
        }
       
    }
});