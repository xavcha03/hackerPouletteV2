//Select all input to validate
let firstName = document.querySelector("#firstName");
let lastName = document.querySelector("#lastName");
let email = document.querySelector("#email");
let images = document.querySelector("#images");
let description = document.querySelector("description");



//add events
firstName.addEventListener('blur', ()=>{
    //if firstName is not valid
    if(!namesValidation(firstName.value)){
        changeMsg("#firstNameErrMsg", "It's not a valid firstname !");
    }else{
        changeMsg("#firstNameErrMsg", "");

    }
});
lastName.addEventListener('blur', ()=>{
    //if firstName is not valid
    if(!namesValidation(lastName.value)){
        changeMsg("#lastNameErrMsg", "It's not a valid lastName !");
    }else{
        changeMsg("#lastNameErrMsg", "");

    }
});

email.addEventListener('blur', ()=>{
    //if firstName is not valid
    if(!emailValidation(email.value)){
        changeMsg("#emailErrMsg", "It's not a valid email !");
    }else{
        changeMsg("#emailErrMsg", "");

    }
});

images.addEventListener("change",e=>imageValidation(e))


function imageValidation(e){
    let fileTypes = [
        "image/gif",
        "image/jpeg",
        "image/png"

    ];
    let files = e.target.files;
    //check all files
    for(let i=0;i<files.length;i++){
        //check types
        if(fileTypes.indexOf(files[i].type)==-1 || files[i].size>2097152){
            changeMsg("#filesErrMsg","Il ne peut y avoir que des images au format png, jpg ou gif de 2Mb max");
        }
    }
}



function namesValidation(name){
    var re = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u;
    //if name is not valid add an error
    return re.test(name);
      
   
}
function emailValidation(name){
    var re =  /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    //if name is not valid add an error
    return re.test(name);
      
   
}

function changeMsg(selector, msg){
    console.log(msg);
    document.querySelector(selector).innerHTML = msg;

}


