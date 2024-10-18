

const regexValidation = /^[a-zA-Z\s]+$/;

const firstInputField = document.getElementById("first");
console.log(firstInputField.classList);
firstInputField.addEventListener("input", () => {
    const value = firstInputField.value;
  
    if (regexValidation.test(value)) {
      firstInputField.classList.remove('false');
      firstInputField.classList.add('true');
      console.log(firstInputField.classList);
    } else {
      firstInputField.classList.remove('true');
      firstInputField.classList.add('false');
      console.log(firstInputField.classList);
    }

    

  });

  

// validate the User Details
function validate(){

    var first = document.getElementById("first").value;
    var last = document.getElementById("last").value;
    var address1 = document.getElementById("line1").value;
    var address2 = document.getElementById("line2").value;
    var city=document.getElementById("city").value;
    var state=document.getElementById("state").value;
    var postalCode=document.getElementById("postal").value;
    var contact=document.getElementById("contact").value;
    var email=document.getElementById("email").value;
    var adults=document.getElementById("noAdults").value;
    var kids=document.getElementById("noKids").value;
    var roomType=document.getElementById("typeOfRoom");
    var room=roomType.value;
    var noOfRooms=document.getElementById("numberOfRooms").value;

    const  validEmail =/^[^\s@]+@gmail\.com$/;
    const regexValidation = /^[a-zA-Z\s]+$/;
    const postalCodeValidation=/^\d+$/;
   

        if(!regexValidation.test(first) || !regexValidation.test(last) || !regexValidation.test(address1) || !regexValidation.test(address2) || !regexValidation.test(city) || !regexValidation.test(state) || !postalCodeValidation.test(postalCode) || !validEmail.test(email) || adults=='' || kids=='' || room=='' || noOfRooms==''){
            alert("Enter valid Details");
            first.value = "";
            last.value = "";
            address1.value = "";
            address2.value = "";
            city.value="";
            state.value="";
            postalCode.value="";
            contact.value="";
            email.value="";
            adults.value="";
            kids.value="";
            room.value="";
            noOfRooms.value="";

            return false;
        }else{
            return true;
        }

}