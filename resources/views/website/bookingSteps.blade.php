<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Process</title>
  <link rel="stylesheet" href="booking.css">
</head>
<body>
<header>
  <div class="logo">
    <!-- Insert your company logo here -->
    <a href="{{ route('home') }}">
      <img src="images/logoHotel.png" alt="logo">
    </a>

  </div>
  <div class="details">
    <h1>Your Company Name</h1>
    <p>123 Main Street, Anytown USA</p>
    <p>Phone: 555-123-4567</p>
    <p>Email: info@yourcompany.com</p>
  </div>

  <div class="bullet">
        <ul>
        <li>Select Date & Room</li>
      </ul>

  </div>
</header>



<!-- check availability forms -->
<div class="form-container">
  <!-- <form>
      <label for="date">Check-in Date:</label>
    <input type="date" id="date" name="date">


    <label for="email">Check-out Date:</label>
    <input type="date" id="email" name="email">
    <label for="name">Duration:</label>
    <input type="text" id="name" name="name">



    

    <input type="submit" value="Check Availability">
  </form> -->
<div class="book">
  <!-- action="{{route('reservations.store')}}" method="POST" -->
<form class = "book-form" >
@csrf
    <div class = "form-item">
        <label for = "checkin-date">Check In Date: </label>
        <input type = "date"  name="checkinDate" id = "theDate"   onchange="restrictDate()" >
    </div>
    <div class = "form-item">
        <label for = "checkout-date">Check Out Date: </label>
        <input type = "date" name="checkoutDate" id = "checkout-date" onchange="restrictDate()">
    </div>
    <div class = "form-item">
        <label for = "adult">Adults: </label>
        <input type = "number" name="numAdults" min = "1" max = "9" value = "1" id = "adult">
    </div>
    <div class = "form-item">
        <label for = "children">Children: </label>
        <input type = "number" name="numChildren" min = "0" max = "9" value = "0" id = "children">
    </div>
   
    <div class = "form-item">
        
    <button type="submit" class="checkbutton" >CHECK AVAILABILITY</button>
    </div>
</form>
</div>

</div>

<div class="red-container">

  <div class="top-div">
    <strong > Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti, hic.</strong>
  </div>

  <div class="main-div">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, consequuntur.</p>

    <div class="room-data">
    <div style="display: flex; flex-direction: row; align-items: center;">
  <img src="images/single_booking.png" class="singleBed" alt="Sample Picture" style="margin-right: 40px;">
    <h3><u>Single Room<br> nonsense</u> </h3>
    
    

</div>

<div class="room-data">
    <div style="display: flex; flex-direction: row; align-items: center;">
  <img src="https://via.placeholder.com/150" alt="Sample Picture" style="margin-right: 40px;">
    <h3><u>Single Room<br> nonsense</u> </h3>
    
    

</div>
<div class="room-data">
    <div style="display: flex; flex-direction: row; align-items: center;">
  <img src="https://via.placeholder.com/150" alt="Sample Picture" style="margin-right: 40px;">
    <h3><u>Single Room<br> nonsense</u> </h3>
    
    

</div>
<div class="room-data">
    <div style="display: flex; flex-direction: row; align-items: center;">
  <img src="https://via.placeholder.com/150" alt="Sample Picture" style="margin-right: 40px;">
    <h3><u>Single Room<br> nonsense</u> </h3>
    
    

</div>
</div>

  </div>
</div>

<div class="post" onclick="openModal()">
  <h2>Post Title</h2>
  <p>Post content goes here...</p>
</div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Post Title</h2>
    <p>Post content goes here...</p>
    <img src="https://via.placeholder.com/150" alt="">
    <img src="https://via.placeholder.com/150" alt="">
    <img src="https://via.placeholder.com/150" alt="">
  </div>
</div>


<a class="book_btn" href="{{ route('bookingSteps2') }}"> Next </a>




	<!-- rest of the HTML code for the booking process goes here -->
</body>


<script src="booking.js"></script>


</html>
