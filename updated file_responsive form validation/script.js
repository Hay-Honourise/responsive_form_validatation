function validateform(){  
  var name=document.myform.name.value;  
  var email=document.myform.email.value;
  var password=document.myform.password.value;
  var phone=document.myform.phonenumber.value;
  var language=document.myform.language.value;
  var zipcode=document.myform.zipcode.value;
  var about=document.myform.about.value;
  
  if (name==null || name==""){  
    alert("Fill in your Name");  
    return false;  
  }
  else if (email==null || email==""){  
    alert("Fill in your Email");  
    return false;  
  }
  else if (password==null || password==""){  
    alert("Fill in your Password");  
    return false;  
  }
  else if (phone==null || phone==""){  
    alert("Fill in your Phone Number");  
    return false;  
  }
  else if (language=null || language==""){  
    alert("Fill in your Language");  
    return false;  
  }
  else if (zipcode==null || zipcode==""){  
    alert("Fill in your Zipcode");  
    return false;  
  }
  else if (about==null || about==""){  
    alert("Fill in your About");  
    return false;  
  }
  else if (password.length<=8){  
    alert("Pasword should be atleast 8 characters");  
    return false; 
  }
  return true;
} 
