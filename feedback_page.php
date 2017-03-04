<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
<link href="css/radio.css" rel="stylesheet" type="text/css">
<style>
.radioboxstyles
{
	 background:#E8E8E8;
	 padding:5px;
	 margin-bottom:5px;
	 border:solid 1px #D8D8D8 !important;
}


</style>
</head>


<body>
<div class="container">  
  <form id="contact" action="" method="post" style="margin:50px 0 !important;">
    <h3>Fashion Bug Customer Feedback</h3>
    <h4>What would you you like to share with us..?</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required="">
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required="">
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required="">
    </fieldset>
    <fieldset class="radioboxstyles">
    <label class="ques">Friendliness of Staff</label>
    <div>
    <input type="radio" name="fofs" id="fofs1" class="css-checkbox" /><label for="fofs1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="fofs" id="fofs2" class="css-checkbox" /><label for="fofs2" class="css-label radGroup1">Good</label>
    <input type="radio" name="fofs" id="fofs3" class="css-checkbox" /><label for="fofs3" class="css-label radGroup1">Average</label>
    <input type="radio" name="fofs" id="fofs4" class="css-checkbox" /><label for="fofs4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset class="radioboxstyles">
    <label class="ques">Quality of Products</label>
    <div>
    
    <input type="radio" name="qofp" id="qofp1" class="css-checkbox" /><label for="qofp1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="qofp" id="qofp2" class="css-checkbox" /><label for="qofp2" class="css-label radGroup1">Good</label>
    <input type="radio" name="qofp" id="qofp3" class="css-checkbox" /><label for="qofp3" class="css-label radGroup1">Average</label>
    <input type="radio" name="qofp" id="qofp4" class="css-checkbox" /><label for="qofp4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset class="radioboxstyles">
    <label class="ques">Value for Money</label>
    <div>
    <input type="radio" name="vform" id="vform1" class="css-checkbox" /><label for="vform1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="vform" id="vform2" class="css-checkbox" /><label for="vform2" class="css-label radGroup1">Good</label>
    <input type="radio" name="vform" id="vform3" class="css-checkbox" /><label for="vform3" class="css-label radGroup1">Average</label>
    <input type="radio" name="vform" id="vform4" class="css-checkbox" /><label for="vform4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset class="radioboxstyles">
    <label class="ques">Good choice of products within each rage</label>
    <div>
    <input type="radio" name="gcofpwer" id="gcofpwer1" class="css-checkbox" /><label for="gcofpwer1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="gcofpwer" id="gcofpwer2" class="css-checkbox" /><label for="gcofpwer2" class="css-label radGroup1">Good</label>
    <input type="radio" name="gcofpwer" id="gcofpwer3" class="css-checkbox" /><label for="gcofpwer3" class="css-label radGroup1">Average</label>
    <input type="radio" name="gcofpwer" id="gcofpwer4" class="css-checkbox" /><label for="gcofpwer4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset class="radioboxstyles">
    <label class="ques">Speed of service</label>
    <div>
    <input type="radio" name="sofsisg" id="sofsisg1" class="css-checkbox" /><label for="sofsisg1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="sofsisg" id="sofsisg2" class="css-checkbox" /><label for="sofsisg2" class="css-label radGroup1">Good</label>
    <input type="radio" name="sofsisg" id="sofsisg3" class="css-checkbox" /><label for="sofsisg3" class="css-label radGroup1">Average</label>
    <input type="radio" name="sofsisg" id="sofsisg4" class="css-checkbox" /><label for="sofsisg4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div align="center"><img src="img/logo.png" width="150"/></div>
    <p class="copyright">Designed by <a href="https://sanhindalk.com" target="_blank" title="Sanhinda Lanka">Sanhinda Lanka</a></p>
  </form>
</div>
</body>
</html>
