
// const navBtn = document.getElementById('nav-btn');
// const cancelBtn = document.getElementById('cancel-btn');
// const sideNav = document.getElementById('sidenav');


// // top Button
// $(document).ready(function(){

//     $(window).scroll(function(){
//       if($(this).scrollTop() > 40){
//         $('#topBtn').fadeIn();
//       } else{
//         $('#topBtn').fadeOut();
//       }
//     });

//     $("#topBtn").click(function(){
//       $('html ,body').animate({scrollTop : 0},800);
//     });
//   });

//   // navigation

//   //services button to services
//   $("#servicesBtn").click(function() {
//     $('html,body').animate({
//         scrollTop: $(".sec-width").offset().top},
//         'slow');
// });
//   //facilities button to rooms and function hall
// $("#facilitiesBtn").click(function() {
//     $('html,body').animate({
//         scrollTop: $(".rooms").offset().top},
//         'slow');
// });
//  //about us button to footer
//  $("#aboutusBtn").click(function() {
//   $('html,body').animate({
//       scrollTop: $(".footer").offset().top},
//       'slow');
// });

//   //book now button to booking form
//   $("#bookBtn").click(function() {
//     $('html,body').animate({
//         scrollTop: $(".service-content button").offset().top},
//         'slow');
// });

// //restriction of past dates in booking form
// $(function(){
//   var dtToday = new Date();

//   var month = dtToday.getMonth() + 1;
//   var day = dtToday.getDate();
//   var year = dtToday.getFullYear();
//   if(month < 10)
//       month = '0' + month.toString();
//   if(day < 10)
//       day = '0' + day.toString();

//   var minDate= year + '-' + month + '-' + day;

//   $('#theDate').attr('min', minDate);
//   $('#checkout-date').attr('min', minDate);

// });

//   //automatic current date input
//       var date = new Date();
//       var day = date.getDate();
//       var month = date.getMonth() + 1;
//       var year = date.getFullYear();

//       if (month < 10) month = "0" + month;
//       if (day < 10) day = "0" + day;

//       var today = year + "-" + month + "-" + day;
//       document.getElementById("theDate").value = today;
//       document.getElementById("checkout-date").value = today;



// Get the modal
var modal1 = document.getElementById("modal1");
var modal2 = document.getElementById("modal2");
var modal3 = document.getElementById("modal3");

// Get the button that opens the modal
var btn1 = document.getElementById("open-modal1");
var btn2 = document.getElementById("open-modal2");
var btn3 = document.getElementById("open-modal3");

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
btn3.onclick = function() {
  modal3.style.display = "block";
}

function closeModals() {
  var modal1 = document.getElementById("modal1");
  var modal2 = document.getElementById("modal2");
  var modal3 = document.getElementById("modal3");

  modal1.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display = "none";
}

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];


// modal1.style.display = "none";
// modal2.style.display = "none";
// modal3.style.display = "none";

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal1.style.display = "none";
  
// }
// span.onclick = function() {
//   modal2.style.display = "none";
// }
// span.onclick = function() {
//   modal3.style.display = "none";
// }
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1 ) {
    modal1.style.display = "none";

  }
}

