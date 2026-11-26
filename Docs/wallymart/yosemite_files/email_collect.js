function submit_email(email, isPopUpWindow)
{
  if ( email.value == "" || email.value == "email address")
  {
    alert("Please enter email address");
    email.focus();
    return false;
  }
  if ( !isEmail(email.value) )
  {
    alert("Please enter valid email address");
    email.focus();
    return false;
  }

  if (isPopUpWindow)
  {
    window.open('', 'email_confirm', 'width=300,height=400,status=no,toolbar=no,resizable=no,menubar=no');
  }
  return true;
}

function isEmail(email)
{
  return email!="" 
         && email.indexOf("@")!=-1 
         && email.indexOf(".")!=-1;
}
