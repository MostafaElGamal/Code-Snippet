// PART 4 ARRAY EXERCISE
// This is  a .js file with commented hints, its optional to use this.

// Create Empty Student Roster Array
// This has been done for you!
var roster = []

// Create the functions for the tasks

// ADD A NEW STUDENT

// Create a function called addNew that takes in a name
// and uses .push to add a new student to the array
function add(name){
  return roster.push(name)
}
// REMOVE STUDENT

// Create a function called remove that takes in a name
// Finds its index location, then removes that name from the roster

// HINT: http://stackoverflow.com/questions/5767325/how-to-remove-a-particular-element-from-an-array-in-javascript
//
function remove(name) {
  for (var i = 0; i < roster.length; i++) {
    if (roster[i] === name){
      roster.pop(i)
    }
  }
}
// DISPLAY ROSTER

// Create a function called display that prints out the roster to the console.
function display(){
  console.log(roster);
}

// Start by asking if they want to use the web app

// Now create a while loop that keeps asking for an action (add,remove, display or quit)
// Use if and else if statements to execute the correct function for each command.

while (ask !== "quit") {
  alert("Hello to your Student Roster :D")
  var ask = prompt("What do you want to do (add, remove, display, Quit)")

  if (ask === "add"){
    var name = prompt("Who you want to add write his name ?")
    add(name)
  }
  if (ask === "remove"){
    var badStudent = prompt("Who you want to remove ?")
    remove(badStudent)
    alert(roster)
  }if (ask === "display"){
    display()
  }
}
alert("Thanks for using the Web App! Please refresh the page to start over.")
