<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
   
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div id="container">
	<h1>Welcome to SEO Calculator</h1>
	
	<!-- <div id="body"> -->

    <div class="row">
				<?php if ($this->session->flashdata('success_message')): ?>
					<div class="alert alert-success">
						<?php echo $this->session->flashdata('success_message'); ?>
					</div>
				<?php endif; ?>
				</div>
		<div class="row justify-content-center">
            <div class="col-sm-6 justify-content-center" style="background:#F05C52 ;padding:50px;margin-top:50px;">
                <div class="row"><h1>SEO COST CALCULATOR</h1></div>
                <!-- {{-- <h1>Hii Welcome Back My Projects</h1> --}} -->
                <form action="" method="post">
                    <label for="serviceName" class="form-label">Select Business Industry</label>
                    <select name="serviceName" id="serviceName" class="form-control" required>
                        <option value="" disabled selected>Choose Your Industry</option>
                        <option value="Accounting & Tax">Accounting & Tax</option>
                        <option value="Astrology & Tarot">Astrology & Tarot</option>
                        <option value="Automobile">Automobile</option>
                        <option value="eCommerce">eCommerce</option>
                        <option value="Education">Education</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Finance">Finance</option>
                        <option value="Fintech">Fintech</option>
                        <option value="Gambling & Casino">Gambling & Casino</option>
                        <option value="Healthcare &Medical">Healthcare &Medical</option>
                        <option value="Home Improvement">Home Improvement</option>
                        <option value="Hospitality">Hospitality</option>
                        <option value="IT & Technology">IT & Technology</option>
                        <option value="Logistics">Logistics</option>
                        <option value="Manufacturers">Manufacturers</option>
                        <option value="Media & Advertisement">Media & Advertisement</option>
                        <option value="Pet Care">Pet Care</option>
                        <option value="Pharmaceutics">Pharmaceutics</option>
                        <option value="Real Estate">Real Estate</option>
                        <option value="Robotics">Robotics</option>
                    </select>
                    
                    <label for="customRange3" class="form-label">Select No Of Keywords</label>
                    <input type="range" class="form-range form-control" min="10" max="200" step="5" name="" id="customRange1">
                        <div class="row justify-content-center">
                        <div class="col-sm-4"><b><span id="minValue1">Min: 10</span></b></div>
                        <div class="col-sm-4"><b><span id="rangeValue1">Range Value: </span></b></div>
                        <div class="col-sm-4"><b><span id="maxValue1">Max: 200</span></b></div>
                        </div>
                    <br>
                    <label for="customRange3" class="form-label">Select No Of Backlinks / Monthly</label>
                    <input type="range" class="form-range form-control" min="100" max="1000" step="25" name="" id="customRange2">
                        <div class="row justify-content-center">
                        <div class="col-sm-4"><b><span id="minValue2">Min: 100</span></b></div>
                        <div class="col-sm-4"><b><span id="rangeValue2">Range Value: </span></b></div>
                        <div class="col-sm-4"><b><span id="maxValue2">Max: 1000</span></b></div>
                        </div>
                    <br>
                    <label for="customRange3" class="form-label">Select Level Of On-Page</label>
                    <input type="range" class="form-range form-control" min="1" max="3" step="1" name="" id="customRange3" value="2">
                        <div class="row justify-content-center">
                        <div class="col-sm-4"><b><span>Basic</span></b></div>
                        <div class="col-sm-4"><b><span>Technical</span><br><span id="rangeValue">Level: </span></b></div>
                        <div class="col-sm-4"><b><span>Advance</span></b></div>
                        </div> 
                        <br>
                        <button type="button" id="fetchDataButton" class="form-control btn btn-primary">Calculate</button>
                    <!-- {{-- <button type="submit" class="form-control btn btn-primary">Calculate</button> --}} -->
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- <div class="col-sm-3"></div> -->
            <div class="col-sm-6 justify-content-center" id="secondFormContainer" style="display:none;background:#B3D4F7;padding:50px;margin-top:20px;">
                <!-- {{-- <h1>Hii Welcome Back My Projects</h1> --}} -->
                <form action="<?php echo site_url("calc/formSubmit"); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-12" >
                            <h1>SEO COST:<input type="text" style="background: #B3D4F7; color: Black; font-size: 30px; border: none;" name="total" id="total" readonly /></h1><span>total multiplide with 10</span>  
                        </div>
                    <div class="col-sm-6">
                        <span style="background: #B3D4F7;border:1px solid #B3D4F7;"><b>Industry Name:  <input type="text"  style="background: #B3D4F7; color: black; font-size: small; border: none;" name="industryName"  id="industryName" readonly></b></span><br>
                    </div>
                    <div class="col-sm-6">
                        <span style="background: #B3D4F7;border:1px solid #B3D4F7;"><b>No of Keywords:  <input type="text" style="background: #B3D4F7; color: black; font-size: small; border: none;" name="numberOfKeywords" id="numberOfKeywords"  readonly></b></span><br>
                    </div>
                    <div class="col-sm-6">
                        <span style="background: #B3D4F7;border:1px solid #B3D4F7;"><b>No of BackLinks: <input type="text" style="background: #B3D4F7; color: black; font-size: small; border: none;" name="numberOfBacklinks" id="numberOfBacklinks" readonly></b></span><br>
                    </div>
                    <div class="col-sm-6">
                        <span style="background: #B3D4F7;border:1px solid #B3D4F7;"><b>Level Of On-Page:<input type="text" style="background: #B3D4F7; color: black; font-size: small; border: none;" name="levelOfOnPage" id="levelOfOnPage" readonly></b></span><br>
                    </div>
                    <div class="col-sm-6" >
                        <!-- <input type="text" class="form-control" name="name" id="" value="<?php echo set_value("name") ?>"placeholder="Enter Name" required> -->
                        <input type="text" class="form-control" name="name" id="nameInput" value="<?php echo set_value("name") ?>" placeholder="Enter Name" required oninput="validateAlphabet(this)">

                        <br>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" id="" value="<?php echo set_value("email") ?>" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com\.in)$" placeholder="Enter email" required><br>
                    </div>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" name="number" id="" value="<?php echo set_value("number") ?>" placeholder="Enter Number" pattern="[6-9][0-9]{9}" oninput="validatePhoneNumber(this)" required><br>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="url" id="" value="<?php echo set_value("url") ?>" placeholder="Enter Website Url" required><br>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="captchaInput" class="form-control" placeholder="Enter CAPTCHA code" required><br>
                    </div>
                    <div class="col-sm-6">
                    <span style="background:white;font-size:20px;" id="captchaCode"></span>&nbsp;&nbsp;<button onclick="generateCaptcha()" class="btn btn-warning">Reload CAPTCHA</button>
                    </div>
                        </div> 
                    <button type="submit" onclick="validateCaptcha()" class="form-control btn btn-success">Submit</button>
                </div>
                </form>
               
            </div>
        </div>
	</div>
	<h1 class="text-center">Shows Submitted Data</h1>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="table-responsive">
					<table class="table caption-top">
						<!-- <caption>List of users</caption> -->
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Number</th>
								<th scope="col">URL</th>
								<th scope="col">Industry Name</th>
								<th scope="col">Keywords</th>
								<th scope="col">Backlinks</th>
								<th scope="col">On Page</th>
								<th scope="col">Total Price</th>
							</tr>
						</thead>
						<tbody>
						<?php $index = 1; ?>
							<?php foreach($calc as $cal): ?>
								<tr>
									<th scope="row"><?php echo $index++; ?></th>
									<td><?php echo $cal->name; ?></td>
									<td><?php echo $cal->email; ?></td>
									<td><?php echo $cal->number; ?></td>
									<td><?php echo $cal->url; ?></td>
									<td><?php echo $cal->industryName; ?></td>
									<td><?php echo $cal->numberOfKeywords; ?></td>
									<td><?php echo $cal->numberOfBacklinks; ?></td>
									<td><?php echo $cal->levelOfOnPage; ?></td>
									<td><?php echo $cal->total; ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	
</div>
<script>
   
        // Range inputs for specific levels
        var rangeInput = document.getElementById('customRange3');
        var rangeInput1 = document.getElementById('customRange1');
        var rangeInput2 = document.getElementById('customRange2');
    
        // Span for displaying the range value
        var rangeValueSpan = document.getElementById('rangeValue');
    
        // Span elements where we want to display the values for the first range
        var minValueSpan1 = document.getElementById('minValue1');
        var maxValueSpan1 = document.getElementById('maxValue1');
        var rangeValueSpan1 = document.getElementById('rangeValue1');
    
        // Span elements where we want to display the values for the second range
        var minValueSpan2 = document.getElementById('minValue2');
        var maxValueSpan2 = document.getElementById('maxValue2');
        var rangeValueSpan2 = document.getElementById('rangeValue2');
    
        // Function to update the displayed range value for specific levels
        function updateValue() {
            var value = parseInt(rangeInput.value);
            var level = "";
            if (value === 1) {
                level = "Basic";
            } else if (value === 2) {
                level = "Technical";
            } else if (value === 3) {
                level = "Advanced";
            }
            rangeValueSpan.textContent = "Level: " + level;
        }
    
        // Function to update the displayed values for the first range
        function updateValues1() {
            minValueSpan1.textContent = "Min: " + rangeInput1.min;
            maxValueSpan1.textContent = "Max: " + rangeInput1.max;
            rangeValueSpan1.textContent = "Value: " + rangeInput1.value;
        }
    
        // Function to update the displayed values for the second range
        function updateValues2() {
            minValueSpan2.textContent = "Min: " + rangeInput2.min;
            maxValueSpan2.textContent = "Max: " + rangeInput2.max;
            rangeValueSpan2.textContent = "Value: " + rangeInput2.value;
        }
    
        // Call the updateValue function when the page loads
        updateValue();
    
        // Call the updateValues functions when the page loads
        updateValues1();
        updateValues2();
    
        // Add event listeners to listen for changes in the range input value for specific levels
        rangeInput.addEventListener('input', function() {
            updateValue();
        });
    
        // Add event listeners to listen for changes in the range input values for custom ranges
        rangeInput1.addEventListener('input', function() {
            updateValues1();
        });
    
        rangeInput2.addEventListener('input', function() {
            updateValues2();
        });
    
        document.getElementById('fetchDataButton').addEventListener('click', function() {
            
            var serviceName = document.getElementById('serviceName').value;
            var customRange1 = document.getElementById('customRange1').value;
            var customRange2 = document.getElementById('customRange2').value;
            var customRange3 = document.getElementById('customRange3').value;
            if (!serviceName || serviceName === "") {
                alert('Please select a service');

                return;
            }
            document.getElementById("secondFormContainer").style.display = "block";

           
            var customRange1 = Number(document.getElementById('customRange1').value);
            var customRange2 = Number(document.getElementById('customRange2').value);
            var customRange3 = document.getElementById('customRange3').value;
            // var serviceName = "Your Service Name"; // Replace this with your actual service name

            // Calculate total cost
            var total = customRange1 * 400 + customRange2 * 40;
            var levelCost = 0;

            if (customRange3 === "1") {
                levelCost = 0; // Basic cost
            } else if (customRange3 === "2") {
                levelCost = 500; // Technical cost
            } else if (customRange3 === "3") {
                levelCost = 1000; // Advanced cost
            }

            var totalCost = total + levelCost;

            document.getElementById('total').value = totalCost;

            // Fill data into the second form
            document.getElementById('industryName').value = serviceName;
            document.getElementById('numberOfKeywords').value = customRange1;
            document.getElementById('numberOfBacklinks').value = customRange2;
            document.getElementById('levelOfOnPage').value = (customRange3 === "1" ? "Basic" : (customRange3 === "2" ? "Technical" : "Advanced"));

            
        });

        document.addEventListener("DOMContentLoaded", function() {
    // Get reference to the scroll button
            var scrollButton = document.getElementById('fetchDataButton');
            
            // Add click event listener to the button
            scrollButton.addEventListener('click', function() {
                // Scroll down by 200 pixels
                window.scrollBy(0, 100);
            });
        });
       
        function validateAlphabet(input) {
            // Remove any non-alphabetic characters
            input.value = input.value.replace(/[^a-zA-Z]/g, '');
        }

        function validatePhoneNumber(input) {
        var phoneNumber = input.value.replace(/\D/g, ''); // Remove non-numeric characters
        // var isValid = /^\d{10}$/.test(phoneNumber); // Check if the phone number has exactly 10 digits
        var isValid = /^[6-9]\d{9}$/.test(phoneNumber);
        
        if (!isValid) {
            input.setCustomValidity("Please enter a 10-digit phone number"); // Set custom validation message
        } else {
            input.setCustomValidity(""); // Clear the custom validation message
        }
    }

    generateCaptcha();
    function generateCaptcha() {
            var captchaCode = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            for (var i = 0; i < 6; i++) {
                captchaCode += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            // Display the CAPTCHA code in the HTML element with id 'captchaCode'
            document.getElementById('captchaCode').textContent = captchaCode;
        }

        // Validate user input against the CAPTCHA code
        function validateCaptcha() {
            var userInput = document.getElementById('captchaInput').value.trim();
            var captchaCode = document.getElementById('captchaCode').textContent;
            if (userInput.toLowerCase() === captchaCode.toLowerCase()) {
                alert('CAPTCHA code is Correct!');
                // Here you can proceed with form submission or other actions
            } else {
                alert('CAPTCHA code is incorrect. Please try again.');
                // Clear the input field and generate a new CAPTCHA code
                document.getElementById('captchaInput').value = '';
                generateCaptcha();
            }
        }


      
    </script>

</body>
</html>
