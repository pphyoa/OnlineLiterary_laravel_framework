let name=document.querySelector("#name");
let email=document.querySelector("#email");
let city=document.querySelector("#city");
let phone=document.querySelector("#phone");
let password=document.querySelector("#password");

name.addEventListener('keyup',checkName);
email.addEventListener('keyup',checkEmail);
city.addEventListener('keyup',checkCity);
phone.addEventListener('keyup',checkPhone);
password.addEventListener('keyup',checkPassword);

function showPassword(){
    let click1=document.querySelector("#click1");
    let click2=document.querySelector("#click2");

    if(password.type === 'password'){
        password.type = "text";
        click1.style.display="block";
        click2.style.display="none"
    }else{
        password.type="password";
        click1.style.display="none";
        click2.style.display="block";
    }
}

function checkName(){
    let str=name.value;
    let reg=/^[a-zA-Z0-9\s]+$/;

    if(!reg.test(str)){
        name.classList.add('is-invalid');
    }else{
        name.classList.remove('is-invalid');
    }
}

function checkEmail(){
    let str=email.value;
    let reg=/^([a-zA-Z0-9_\-]+)@([a-z]+)\.([a-z]{2,5})+$/;

    if(!reg.test(str)){
        email.classList.add('is-invalid');
    }else{
        email.classList.remove('is-invalid');
    }
}

function checkCity(){
    let str=city.value;
    let reg=/^[a-zA-Z\s]+$/;

    if(!reg.test(str)){
        city.classList.add('is-invalid');
    }else{
        city.classList.remove('is-invalid');
    }
}

function checkPhone(){
    let str=phone.value;
    let reg=/^[0-9\s]+$/;

    if(!reg.test(str)){
        phone.classList.add('is-invalid');
    }else{
        phone.classList.remove('is-invalid');
    }
}

function checkPassword(){
    let str=password.value;
    let reg=/^[a-zA-Z0-9\W]{6,15}$/;

    if(!reg.test(str)){
        password.classList.add('is-invalid');
    }else{
        password.classList.remove('is-invalid');
    }
}

