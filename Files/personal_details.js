 function formValidation(){

 var fname = document.getElementById('firstname');
 var lmame = document.getElementById('lastname');
 var eaddress = document.getElementById('emailaddress');
 var tnumber = document.getElementById('telephone number');
 var fnumber = document.getElementById('faxnumber');
 var address1 = document.getElementById('address1');
 var address2 = document.getElementById('address2');
 var cname = document.getElementById('companyname');
 var caddress = document.getElementById('companyaddress');
 var city = document.getElementById('city');
 var pcode = document.getElementById('postalcode');
 var pwd = document.getElementById('password');
 var cpwd = document.getElementById('confirmpassword');
 
 
 if(fname.value.length == 0 || lname.value.length == 0 || eaddress.value.length == 0 || tnumber.value.length == 0 || fnumber.value.length == 0 || address1.value.length == 0 || address2.value.length == 0 || caddress.value.length == 0 || city.value.length == 0 || fnumber.value.length == 0 || pcode.value.length == 0 || pwd.value.length == 0 || cpwd.value.length == 0){
     alert("All are required!!!");
}

else{
    if(inputAlphabet(fname,"Not according to the pattern")){
	  if(inputCharacters(number,"Not according to the pattern")){
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

function inputCharacters(arg1, arg2)
{
    var alphaExp = /^[a-zA-Z0-9]+$/;
    if(arg1.value.match(pwdExp))
    {
        return true;
    }
    else
    {
        alert(arg2);
        return false;
    }
}
