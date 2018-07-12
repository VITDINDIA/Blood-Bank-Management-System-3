<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajax.php?q="+str,true);
        xmlhttp.send();
    }
}
function checknumber1(str)
        {
if(isNaN(str))  {
alert("Please Input Valid Number ");   
document.getElementById('cnum1').focus();
                }    
        }
</script>
<form class="form-horizontal" action="#" method="post">
<fieldset>
<legend>Login Information</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email1">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" required="" name="email1" id="email1" onblur="showUser(this.value)"  placeholder="Enter Email" />
    </div>
  </div>
  <div id="txtHint"></div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd1">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" required="" name="pwd1" id="pwd1" placeholder="Enter Password" />
    </div>
  </div>
  </fieldset>
  
  <fieldset>
  <legend>Contact Information</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" required="" name="name" id="name" placeholder="Enter Hospital Name" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cnum1">Contact:</label>
    <div class="col-sm-6">
      <input type="mobnumber"class="form-control" maxlength="10" required="" onkeyup="checknumber1(this.value)" name="cnum1" id="cnum1" placeholder="Enter Contact Number" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">URL:</label>
    <div class="col-sm-6">
      <input type="url" class="form-control" required="" name="url" id="url" placeholder="http://www.anandhospital.com" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="add1">Street:</label>
    <div class="col-sm-6"> 
      <textarea name="street" class="form-control" id="street" required="" placeholder="Enter Street" rows="3" cols="30"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Landmark:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" required="" name="landmark" id="landmark" placeholder="Enter Landmark" />
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-6"> 
      <select name="city" required="" class="form-control" id="city">
      <option value="">Select City</option>
      <option value="Delhi">Delhi</option>
      <option value="Faridabad">Faridabad</option>
      <option value="Gurugram">Gurugram</option>
      <option value="Meerut">Meerut</option>
      <option value="Noida">Noida</option>
      <option value="Others">Others</option>
      </select>
    </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6"> 
  <button type="submit" name="hospital_submit" class="btn btn-info btn-danger">CLICK FOR REGISTRATION</button>
  </div>
  </div>
  </fieldset>
  
</form>
 