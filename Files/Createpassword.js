 function formValidation(form){

 var pwd = document.getElementById('password');
 var cpwd = document.getElementById('confirmpassword');
 
 if(pwd.value.length == 0 || cpwd.value.length == 0){
     alert("All are required!!!");
}

else{
    if(inputAlphabet(fname,"Not according to the pattern")){
	  if(inputCharacters(pwd,"Not according to the pattern")){
	   return true;
	 }else{
	   return false;
	}
	 
}	

function inputAlphabet(inputtext, alertMsg){
 var alphaExp = /^[a-zA-Z]+$/;
 if(inputtext.value.match(alphaExp)){
 return true;
 }else{
 alert(alertMsg);
 return false;
 }
}

function inputCharacters(arg1, arg2){
 var alphaExp = /^[a-zA-Z0-9]+$/;
 if(arg1.value.match(pwdExp)){
 return true;
 }else{
 alert(arg2);
 return false;
 }
}