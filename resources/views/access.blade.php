<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Popup with Specific Code</title>

<style>
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

<button onclick="openPopup()">Open Popup and write a specific word to go main site</button>

<div id="popup" class="popup">
  <h3>Write 'sakib' To Go Next Step</h3>
  <input type="text" id="secretCodeInput" placeholder="Write 'sakib' For Next Step">
  <button onclick="checkSecretCode()">Submit</button>
</div>

<script>
function openPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

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