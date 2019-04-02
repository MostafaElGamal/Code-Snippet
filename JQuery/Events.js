$("h1").click(function(){
  $(this).text("I was Change with One Clicked")
})

$("li").click(function () {
  console.log("Any li was Clicked");
})

// Key PRESS
$("input").eq(0).keypress(function (event) {
  // $("h3").toggleClass("turnBlue")
  console.log(event);
})

$("input").eq(0).keypress(function (event) {
  if (event.which === 13){
    $("h3").toggleClass("turnBlue")
  }
})

// on ()
$("h1").on("mouseenter", function(){
  $(this).toggleClass("turnBlue")
})

$("input").eq(1).on("click", function(){
  $(".container").fadeOut(3000)
})

$("input").eq(1).on("click", function(){
  $(".container").slideUp(3000)
})
