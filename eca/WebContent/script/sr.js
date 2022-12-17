var fname=document.getElementById("fname");
var lname=document.getElementById("lname");
var mname=document.getElementById("mname");
var contact=document.getElementById("pn");
var email=document.getElementById("email");
var password=document.getElementById("password");
var cpassword=document.getElementById("cpassword");
var form=document.getElementById("form");
var fnameflag =true;
var lnameflag =true;
var mnameflag =true;
var mailflag =true;
var contactflag =true;
var passwordflag =true;
var dobflag =true;
var flag =true;
$(document).ready(function() {
  form.reset();
  resetForm();
});

function resetForm(){
    const formControlFname=fname.parentElement;
    const formControlMname=mname.parentElement;
    const formControlLname=lname.parentElement;
    const formControlContact=contact.parentElement;
    const formControlEmail=email.parentElement;
    const formControlPassword=password.parentElement;
    const formControlCpassword=cpassword.parentElement;
    formControlCpassword.className='form-control';
    formControlPassword.className='form-control';
    formControlEmail.className='form-control';
    formControlContact.className='form-control';
    formControlFname.className='form-control';
    formControlLname.className='form-control';
    formControlMname.className='form-control';
}

//function validateform(){  
  
//  if (fname==null || fname==""){  
//    alert("First name can't be blank");  
//    return false;  
//  }
//  else if(lname==null || lname==""){  
//   alert("Last name can't be blank");  
//    return false;  
//   }  

//   else if(mname==null || mname==""){  
//   alert("Mothers name can't be blank");  
//    return false;  
//  }

//  var num=document.myform.pn.value;  
//  var x=num.length;
// if (isNaN(num)){  
//    alert("Invalid nmber");
//       return false;
// }
//    if(x!=10){
//      alert("Invalid number. Must be 10 digits");
//      return false;

//   }

function checkPassword()
{
  var pass1=password.value;
  var pass2=cpassword.value;
  if(pass2!=''){
    if(pass1===pass2){
      setSuccessFor(cpassword);
      passwordflag=true;

    } else{
      setErrorFor(cpassword,"Passwords do not match");
      passwordflag=false;
    }
  }else{
    cpassword.parentElement.className='form-control';
  }
}

function ValidateEmail() 
{
  
if(email.value!=''){

 if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email.value))
  {
    setSuccessFor(email);
    mailflag=true;
  }
  else
  {
    setErrorFor(email,"Invalid email address");
    mailflag=false;
  }

}

else
{
  email.parentElement.className='form-control';
}

}


function checkName(type)
{
  var letters = /^[A-Za-z ]+$/;
  switch(type){
    case 'fname':
    if(fname.value!=''){
      if(fname.value.match(letters)){
      setSuccessFor(fname);
      fnameflag=true;
      }else{
        setErrorFor(fname,"Invalid Characters!");
        fnameflag=false;
      }
    }else{
      fname.parentElement.className='form-control';
    }
    break;

    case 'mname':
    if(mname.value!=''){
      if(mname.value.match(letters)){
        setSuccessFor(mname);
        mnameflag=true;
      }else{
        setErrorFor(mname,"Invalid Characters!");
        mnameflag=false;
      }
    }else{
      mname.parentElement.className='form-control';
    }
      break;

    case 'lname':
    if(lname.value!=''){
      if(lname.value.match(letters)){
        setSuccessFor(lname);
        lnameflag=true;
      }else{
        setErrorFor(lname,"Invalid Characters!");
        lnameflag=false;
      }
    }else{
      lname.parentElement.className='form-control';
    }
      break;
  }
}

function checkNumber(type)
{
   var num = /^\d{10}$/;
  if(contact.value!=''){

    if(contact.value.match(num))
    {
      setSuccessFor(contact);
      contactflag=true;
    }
    else
    {
     setErrorFor(contact,"Invalid Number");
     contactflag=false;
    }

  }
  else
  {
    contact.parentElement.className='form-control';
  }
  
}


function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  formControl.className = 'form-control error';
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}

 var emailFlag = false;
$('document').ready(function(){
  //Checking Username
  
  $('#email').on('blur', function(){
    
    if (email.value == '') {
      mailflag = false;
      return;
    }
    $.ajax({
      url: 'http://localhost/phpsandbox/eca/WebContent/php/check.php',
      type: 'post',
      data: {
      email_check : 1,
      email : email.value,
      },
      success: function(response){
        if (response == 'taken' ) {
          setErrorFor(email,"User already exists!");
          mailflag=false;
        }else if (response == 'not_taken') {
          mailflag=true;
          setSuccessFor(email);
        }
      }
    });
  }); 

  function checkGender()
  {
    if(gender.value='')
    {
      setErrorFor(email,"User already exists!");
      genderflag=false;
    }
    else
    {
      setSuccessFor(gender);
      genderflag=true;
    }
  }

function checkFlags()
{
  if(fnameflag&&lnameflag&&mnameflag&&mailflag&&contactflag&&passwordflag&&genderflag)
  {
    return true;
  }

  else
  {
    return false;
  }
}

$('#submitbtn').on('click',function(){
    if(email.value==''||password.value==''){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Fields cannot be empty!',
        button: "Ok",
      });
      return false;
    }
    if(!checkFlags()){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        button: "Ok",
      });
      return false;
    }
  });
});