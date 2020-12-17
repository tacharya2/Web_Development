const form = document.getElementById("form");
const id = document.getElementById("id");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");

form.addEventListener("submit", (e) => {
  let missfield = [];
  let track = [];
  let info = [];
  if (id.value.trim() === '' || id.value.trim() == null) {
    missfield.push("ID");
    track.push("*");
    
  } else {
    info.push("UserID: " + id.value.trim());
  }

  if (firstName.value.trim() === '' || firstName.value.trim() == null) {
    missfield.push("FirstName");
    track.push("*");

  } else {
    info.push("First Name: "+ firstName.value.trim());
  }
  if (lastName.value.trim() === '' || lastName.value.trim() == null) { 
    missfield.push("LastName");
    track.push("*");
    
  } else {
    info.push("Last Name: " + lastName.value.trim());
  }
  if (track.length > 0) {
    e.preventDefault()

    alert("You forgot fill in the following field(s)" + missfield.join(","))
    
  }
  if (info.length === 3) {
   
    e.preventDefault()
    
    var info1 = document.getElementById("info1");
    info1.innerHTML = "ID: " + id.value.trim();
   
    var info2 = document.getElementById("info2");
    info2.innerHTML = "First Name: " + firstName.value.trim();

    var info3 = document.getElementById("info3");
    info3.innerHTML = "Last Name: " + lastName.value.trim();
    //info3.innerHTML = lastName;
    document.getElementById("form").reset();
   
    //e.preventDefault()
    //alert(info)
  }
  //connector();
  //break;
});
function checkInputs() {
  // get the input values from the input fields
  const idvalue = id.value.trim();
  const fnvalue = firstName.value.trim();
  const lnvalue = lastName.value.trim();

  if (idvalue === '') {
    // show error
    setErrorFor(id, "Please Enter an ID")
  } else {
    //add success
    // setSuccessFor(id)
  }
  if (fnvalue === '') {
    // show error
    setErrorFor(firstName, "Please Enter First Name");
  } else {
    //add success
    //setSuccessFor(id)
  }

  if (lnvalue === '') {
    // show error
    setErrorFor(lastName, "Please Enter Last Name");
  } else {
    //add success
    // setSuccessFor(id)
  }
}
function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small")

  //add error message inside the id 
  formControl.className = "form-control";
  small.innerText = message;
}
function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small")

  //add error message inside the id 
  formControl.className = "form-control";
  small.innerText = message;
}
