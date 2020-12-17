const id = document.getElementById("id");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const form = document.getElementById("form");


const errorMessages = document.getElementById("error");

form.addEventListener("submit", (e) => {
  let messages = [];
  let missfield = [];
  if (id.value === '' || id.value == null) {
    messages.push("Please enter an ID");
    missfield.push("ID");
    
  }
  if (firstName.value === '' || firstName.value == null) {
    
    messages.push("Please Enter First Name");
    missfield.push("FirstName");
 

  }
  if (lastName.value === '' || lastName.value == null) { 
    
    messages.push("Please Enter the Last Name")
    missfield.push("LastName");
    

  }

  if (messages.length > 0) {
    e.preventDefault()
    errorMessages.innerText = messages

    alert("You forgot fill in the following field(s)"+ missfield.join(",") )
  }
 
});


// function myFunction() {
//   if (id.value === '' || id.value == null) {
//     //messages.push("Please enter an ID");
//     missfield.push("ID");
//     document.getElementById("errorid").innerHTML = "Please enter an ID";
  

//     //id is empty errorID == message "Please enter and ID"
//   }
// }
// onclick = "myFunction()"
// <input id="id1" type="number" max="100">
// <button onclick="myFunction()">OK</button>

// <p id="demo"></p>

// <script>
// function myFunction() {
//   var txt = "";
//   if (document.getElementById("id1").validity.rangeOverflow) {
//     txt = "Value too large";
//   }
//   document.getElementById("demo").innerHTML = txt;
// }
// </script>