/*<header js>*/

function validateForm() 
{

         if(document.getElementById("t1").value=="") 
           {
         	alert( "Please Enter your First Name");
           document.getElementById("t1").focus();
           return false;
            } 

          if(!isNaN(document.reg.fname.value))
           {

           	 alert( "Numeric Characters Are Not Allow" );
           	  document.reg.fname.focus();
           	  return false;
           }	

           if(document.reg.fname.value.length<=2 || document.reg.fname.value.length > 15 )
           {

           	 alert( " First Name can be Between 2-15 characters" );
           	  document.reg.fname.focus();
           	  return false;
           }
        
         if( document.reg.lname.value =="")
           {
         	alert( "Please Enter your Last Name" );
            document.reg.lname.focus(); 
            return false;
           }

           if(!isNaN(document.reg.lname.value))
           {

           	 alert( "Numeric Characters Are Not Allow" );
           	  document.reg.lname.focus();
           	  return false;
           }

           if(document.reg.lname.value.length<=2 || document.reg.fname.value.length > 15 )
           {

           	 alert( " Last Name can be Between 2-15 characters" );
           	  document.reg.fname.focus();
           	  return false;
           }

         if( document.reg.dob.value =="" )
         {
            alert( "Please enter your Date Of Birth!" );
            document.reg.dob.focus() ;
            return false;
         }

         if( document.reg.gender.value =="" )
         {

            alert( "Please select your Gender!" );
            return false;
         }

         if( document.reg.address.value =="" )
         {
            alert( "Please enter your full Address!" );
            document.reg.address.focus() ;
            return false;
         }

         if( document.reg.city.value == "1")
         {
            alert( "Please select your City!" );
            document.reg.city.focus() ;
            return false;
         }

for (var i=0; i<document.getElementsByClassName("abc").length; i++) 

			{
			  if (document.getElementsByClassName("abc")[i].checked)
			   break;
			}
			   if (i==document.getElementsByClassName("abc").length)
			 {
 			   alert("Please select your Qualification");
			   return false;
			 }
 
		if( document.reg.mobile_no.value == "" ||
         isNaN( document.reg.mobile_no.value ) ||
         document.reg.mobile_no.value.length != 10 )
         {
            alert( "Please enter your mobile_ No. in 10 digits" );
            document.reg.mobile_no.focus() ;
            return false;
         }
         
         if(document.reg.email.value=="" )
         {
            alert( "Please provide your Email!" );
            document.reg.email.focus() ;
            return false;
         }

         if(document.reg.email.value.indexOf(".", 0) < 0)
         {
         	alert( "Please Enter your complete email-id \n Like 'shivam@stpl.com'" );
         	return false;
         } 

         if(document.reg.password.value=="")
         {
            alert( "Please provide your password" );
            document.reg.password.focus() ;
            return false;
         }  

         if(document.reg.password.value.length < 6)
         {
            alert( "Password should contain minimum 6 digits" );
            document.reg.password.focus() ;
            return false;
         }

         if(document.reg.cpassword.value=="")
         {
            alert( "Please Re-Enter your password" );
            document.reg.cpassword.focus() ;
            return false;
         }

         if(document.reg.cpassword.value.length < 6)
         {
            alert( "Confirm Password should contain minimum 6 digits");
            document.reg.cpassword.focus() ;
            return false;
         }

         if(document.reg.cpassword.value != document.reg.password.value)
         {
            alert( "Password must be same !");
            document.reg.cpassword.focus() ;
            return false;
         }
         
var retVal = confirm("Do you want to continue ? \nafter submit you can not change it. ");
               
               if( retVal == true )
               {
                 alert("Your Registration Done Successfully. \n Press OK to contineu.");
                // window.location("login.php");
                  return true;
               }

               else
               {
                  document.write ("your are not register Successfully \n Please Try Again");
                  return false;
               }
            
          
        
}
function logvalidation()
  {

           if( document.login.email.value =="")
           {
          alert("Please Enter your valid email-id");
            document.login.email.focus(); 
            return false;
           }

           if( document.login.password.value =="")
           {
          alert( "Please Enter your correct password" );
            document.login.password.focus(); 
            return false;
           }

         
  }
