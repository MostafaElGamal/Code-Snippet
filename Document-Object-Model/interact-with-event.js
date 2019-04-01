var headOne = document.querySelector("#one")

var headTwo = document.querySelector("#two")

var headThree = document.querySelector("#three")

headOne.addEventListener("mouseover", function () {
  headOne.textContent = "Mouse Currently Over "
  headOne.style.color = "Red";
})

headOne.addEventListener("mouseout", function () {
  headOne.textContent = "Hover over me :D";
  headOne.style.color = "black";
});

headTwo.addEventListener("click", function () {
  headTwo.textContent = "I'm Click Right Now and my color is Green";
  headTwo.style.color = "green";
} )
   
headThree.addEventListener("dblclick", function () {
  headThree.textContent = "I was double clicked";
  headThree.style.color = "blue";
} )
