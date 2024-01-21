const showPassBtn = document.getElementById('showpassword');
const passwordField = document.getElementById('password');

let passwordVisibility = false;

function showHidePassword(){
    // console.log(passwordValue);
    // console.log('button clicked');
    // console.log(passwordVisibility);

    if(passwordVisibility == false){
        passwordField.type = "text";
        passwordVisibility = true;

        // console.log('k ho k yo ???');
    }else if(passwordVisibility == true){
        passwordField.type = "password";
        passwordVisibility = false;
    }
}

showPassBtn.addEventListener('click', showHidePassword);