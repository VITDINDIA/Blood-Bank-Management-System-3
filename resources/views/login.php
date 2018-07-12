<form method="post" action="#">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="email" name="usrname" required="" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" required="" name="psw" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-zoom-in"></span> User Type</label>
              <select class="form-control" name="user" id="user" required="">
              <option value="">Select User Type</option><option value="HOSPITAL">HOSPITAL</option>
              <option value="RECEIVER">RECEIVER</option>
              </select>
            </div>
              <button type="submit" name="login" value="login" class="btn btn-success btn-block">
              <span class="glyphicon glyphicon-off"></span> CLICK FOR LOGIN </button>
</form>