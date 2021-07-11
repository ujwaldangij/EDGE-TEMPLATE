const form = document.getElementById('f');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const phone = document.getElementById('phone');
form.addEventListener("submit",abc);
function abc(e) {
    e.preventDefault();
    validate(); 
}
// function setServer() {
//     m=document.getElementsByClassName('form-group');
//     for (var i=1;i<=m.length;i++){
//         if (m[i]=="form-group success") {
            
//         }
//     }
// }


function validate() {
    const nameval=name.value.trim();
    const emailval=email.value.trim();
    const passwordval=password.value.trim();
    const cpasswordval=cpassword.value.trim();
    const phoneval=phone.value.trim();
    if (nameval==="") {
        setError(name,'username cant be empty');
    }else if(!isNaN(nameval)){
        setError(name,'no are not allow');
    }
    else if (nameval.length <= 2) {
        setError(name,'username must be of there charecter')
    }
    else{
        setSuccess(name);
    }
    if (emailval==="") {
        setError(email,'useremail cant be empty');
     }else if (emaila()==false) {
        setError(email,'email not valid type');
    }
    else{
        setSuccess(email);
    }
    // password
    if (passwordval=="") {
        setError(password,'password cant be empty');
    }else if (passwordval<=5) {
        setError(password,'password must be @ list 5 charecter');
    }
    else{
        setSuccess(password);
    }
    if (cpasswordval=="") {
        setError(cpassword,'cpassword cant be empty');
    }else if (cpasswordval!=passwordval) {
        setError(cpassword,'password  not match');
    }
    else{
        setSuccess(cpassword);
    }
    if (phoneval=="") {
        setError(phone,'phone cant be empty');
    }else if (phoneval.length<=9) {
        setError(phone,'phone must be @ list 10 charecter');
        console.log(phoneval.length);
    }
    else{
        setSuccess(phone);
    }
    setServer(nameval);
}
function setServer(nameval) {
    let m=document.getElementsByClassName('form-group');
    var count=m.length-1;
    // srate=0;
    for(i=0;i<m.length;i++){
        if (m[i].className=="form-group success") {
            var srate=0+i;
            send(srate,count,nameval);
        }else{
            return false;
        }
    }
}
function send(srate,count,nameval) {
    if (srate===count) {
        alert('registration successfull');
        swal("Good job!"+nameval, "Registration successfull!", "success");
        location.href=`ujwal.html`;
    }
}

function setError(input,error) {
    const fgroup=input.parentElement;
    const felement=fgroup.querySelector('span');
    fgroup.className="form-group error";
    felement.innerText=error;
}
function setSuccess(input) {
    const fgroup=input.parentElement;
    const felement=fgroup.querySelector('span');
    fgroup.className="form-group success";
    felement.innerText="perfect name";
}
function emaila(e) {
    const emailval=email.value.trim();
    const pat=emailval.indexOf('@');
    const pda=emailval.lastIndexOf('.');
    if (pat < 1) {
        return false;
    }else if (pda <= pat + 3) {
        return false;
    }else if (pda==emailval.length-1) {
        return false;
    }
    else{
        return true;
    }
}