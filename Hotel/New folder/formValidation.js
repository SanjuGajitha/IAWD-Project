function validaion()
{     

    const addressRegex = /^\d+\s[A-z]+\s[A-z]+/

    let firstName=document.getElementById("first").value;
    let lastName=document.getElementById("last").value;
    let adress1=document.getElementById("line1").value;
    let adress2=document.getElementById("line2").value;
    // let city=document.getElementById("city").value;
    // let state=document.getElementById("state").value;
    // let postalCode=document.getElementById("postal").value;
    // let contact=document.getElementById("contact").value;
    // let email=document.getElementById("email").value;
    // let adults=document.getElementById("noAdults").value;
    // let kids=document.getElementById("noKids").value;
    // let roomType=document.getElementById("typeOfRoom");
    // let room=roomType.value;
   
    // let noOfRooms=document.getElementById("numberOfRooms").value;




    // let validEmail =/^[^\s@]+@gmail\.com$/;

    
                  //firtName Validation

    if (firstName == '') {
        alert("First Name cannot be empty!");
    }

    else
        if(!/^[a-zA-Z\s]+$/.test(firstName)) {
            alert("First Name can only contain letters and spaces!");

          }



                     //   lastName Validation

          else
              if (lastName == '') {
              alert("Last Name cannot be empty!");
              }
                
         else
             if(!/^[a-zA-Z\s]+$/.test(lastName)) {
                    alert(" Last Name can only contain letters and spaces!");
                
                }

                    //address Validation
                else
                   if(adress1 ==''  || adress2=='')
                     alert("Please fill Adress");

                    //city Validation
                //    else
                //      if(city=='')
                //      {
                //         alert("Please Fill the City ");
                //      }
                         
                //      else
                //         if((!/^[a-zA-Z\s]+$/.test(city)))
                //             {
                //                 alert("Please Fill the  Validate City Name ");   
                //             }

                //                 //state Validation

                //              else
                //                 if(state=='')
                //                 {
                //                    alert("Please Fill the State/Province");
                //                 }

                //             else if((!/^[a-zA-Z\s]+$/.test(state)))

                //                 {
                //                     alert("Please Fill the  Validate State Name ");
                //                 }

                              
                //                    //check the Postal Code
                //                    else
                //                    if(!/^\d+$/.test(postalCode))
                //                    {
                //                     alert("Please Enter Only Valid Postal Code "); 
                //                    }


                //                         //check Contact Number
                //                    else
                //                         if(!/^[07]/.test(contact) || contact.length!==10)
                //                             {
                //                               alert("Please Check Your Contat Number");  
                //                             }


                //                             //email.Validation

                //                             else
                //                                 if(!validEmail.test(email))
                //                                  {
                //                                     alert("Please Enter Valid Email Address");
                //                                  }

                //                             //last part Validation 
                //                                  else
                //                                     if(adults=='')
                //                                    {
                //                                     alert("Please Enter Number of Adults");
                //                                    }

                //                                    else
                //                                    if(room==='')
                //                                    {
                //                                     alert("Please Select Room Type");
                //                                    }
                                                    

                //                                    else
                //                                    if(noOfRooms=='')
                //                                    {
                //                                     alert("Please Enter Number of Rooms");
                //                                    }
 

                                                //    else{
                                                //     alert("room="+room);
                                                //    }

                                                   
                                                    
                                                    
                                        

                                

                            
                                                

                                  

                            
                                   

                        
                                

                                   


                                    
                                   






                


                           
                



}