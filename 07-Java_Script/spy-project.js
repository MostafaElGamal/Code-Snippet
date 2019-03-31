var firstName = prompt("Hello and Welcome. Please enter your first name: ")
var lstName = prompt("Please enter your Last Name:")
var age = prompt("How old are you ?")
var hight = prompt("How tall are you in centimeters")
var pet = prompt("What is the name of your pet ?")
alert("Thank you so much for the information.")

if (firstName[0] === lstName[0]) {
  if (age >=20 && age <=30) {
    if (hight>=170) {
      if (pet[pet.length -1] === "y" || pet[pet.length -1] === "Y" ){
          console.log("Hello Agent 007 , Write ok if you accpet the mission ");
      }
    }
  }
}
else{
  console.log("There is Nothing to see here :b")
}
