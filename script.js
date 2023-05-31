function checkPassword(){
    let password= document.getElementById
    ('password').value;
    let confirmpass= document.getElementById
    ('confirm-pass').value;
    console.log(password,confirmpass);
    let message= document.getElementById
    ("message");
    if(password!=0){
        if(password==confirmpass){
            message.textContent = "Password Matched";
            message.style.backgroundColor="green"
    
        }
        else{
            message.textContent="does Not match"
    
            message.style.backgroundColor="red"
        }

    }

    
    else{

        alert('Password Could not be empty');

    }


}