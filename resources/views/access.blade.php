<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Popup with Secret Code</title>

<style>
/* Popup styles */
.popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  z-index: 9999;
}
</style>
</head>
<body>

<!-- Button to open the popup -->
<button onclick="openPopup()">Open Popup</button>

<!-- The popup -->
<div id="popup" class="popup">
  <h2>Enter Secret Code</h2>
  <input type="text" id="secretCodeInput">
  <button onclick="checkSecretCode()">Submit</button>
</div>

<script>
// Function to open the popup
function openPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

// Function to check the secret code
function checkSecretCode() {
  var secretCodeInput = document.getElementById("secretCodeInput").value;
  var secretCode = "sakib"; 
  
  if (secretCodeInput === secretCode) {
    alert("Access Granted!");
    window.location.href = "{{ url('home') }}";
    
  } else {
    alert("Access Denied! Please try again.");
  }
}
</script>

</body>
</html>