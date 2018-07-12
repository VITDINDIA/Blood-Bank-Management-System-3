<script>
function showUser1(str) {
    if (str == "") {
        document.getElementById("txtHint1").innerHTML = "";
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
                document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajax.php?q="+str,true);
        xmlhttp.send();
    }
}
function checknumber(str)
        {
if(isNaN(str))  {
alert("Please Input Valid Number ");   
document.getElementById('cnum1').focus();
                }    
        }
</script>
<form class="form-horizontal" action="" method="post">
<fieldset>
<legend>Login Information</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email1">Email:</label>
    <div class="col-sm-6">
      <input type="email" required="" class="form-control" name="email1" onblur="showUser1(this.value)" id="email1" placeholder="Enter email">
    </div>
  </div>
  <div id="txtHint1"></div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd1">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" required="" class="form-control" name="pwd1" id="pwd1" placeholder="Enter password">
    </div>
  </div>
  </fieldset>
  
  <fieldset>
  <legend>Contact Information</legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-6">
      <input type="text" required="" class="form-control" name="name" id="name" placeholder="Enter your name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cnum1">Contact:</label>
    <div class="col-sm-6">
      <input type="mobnumber" required="" maxlength="10" onkeyup="checknumber(this.value)"  class="form-control" name="cnum1" id="cnum1" placeholder="Enter contact number">
    </div>
  </div>

  <div class="form-group">
      <label class="control-label col-sm-4"for="blood">Blood Group:</label>
      <div class="col-sm-6">
  <select class="form-control" required="" name="blood" id="blood" > 
       <?php
        $Db_objects->search_blood();  
        ?> 
  </select>
      </div>
    </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="breq">Purpose</label>
    <div class="col-sm-6">
      <input type="text"class="form-control" required="" name="breq" id="breq" placeholder="Blood is required for">
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="add1">Address:</label>
    <div class="col-sm-6"> 
      <textarea name="add1" required="" class="form-control" id="add1" placeholder="Enter Address" rows="3" cols="30"></textarea>
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
  <button type="submit" name="receiver_submit" class="btn btn-info btn-danger">CLICK FOR REGISTRATION</button>
  </div>
  </fieldset>
  
</form>
