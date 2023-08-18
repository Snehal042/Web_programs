<!DOCTYPE html>
<html>
<head>
 <title>Digital Clock with Current Server Time</title>
 <style>
 .clock {
 font-family: "Arial", sans-serif;
 font-size: 48px;
 text-align: center;
 }
 </style>
 <script>
 // Function to update the clock every second
 function updateClock() {
 var currentTime = new Date();
 var hours = currentTime.getHours();
 var minutes = currentTime.getMinutes();
 var seconds = currentTime.getSeconds();
 // Determine AM/PM
 var meridiem = hours >= 12 ? "PM" : "AM";
 // Convert to 12-hour format
 hours = hours % 12;
 hours = hours ? hours : 12;
 // Pad single digits with leading zeros
 hours = (hours < 10 ? "0" : "") + hours;
 minutes = (minutes < 10 ? "0" : "") + minutes;
 seconds = (seconds < 10 ? "0" : "") + seconds;
 // Display the current time
 var clockElement = document.getElementById("clock");
 clockElement.innerText = hours + ":" + minutes + ":" + seconds + " " + meridiem;
 }
 // Call the updateClock function every second
 setInterval(updateClock, 1000);
 </script>
</head>
<body>
 <h1>Digital Clock with Current Server Time</h1>
 <div class="clock" id="clock"></div>
</body>
</html>