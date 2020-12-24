      <!-- Login/Signup Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row">
                            <div id="Login" class="col mr-2 bg-success text-white">
                                <a class="login">Login</a>
                            </div>
                            <div id="Register" class="col ml-2">
                                <a class="register">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="LoginForm" class="modal-body">
                    <form action="server.php" method="POST">
                        <div class="form-group">
                            <label for="UserName" class="col-form-label">Usernmae:</label>     
                            <input name="username" class="w-100" type="text" lass="form-control" id="UserName">
                        </div>
                        <div class="form-group">
                            <label for="Password"  class="col-form-label">Password:</label>     
                            <input name="password1" class="w-100" type="password" lass="form-control" id="Password">
                        </div>
                        
                        <button type="button" class="btn btn-outline-success" style="width: 209px; margin-left: 50px;">Forgot Password?</button>
                        <button type="submit" name="login" class="btn btn-success" style="float: right; margin-right: 60px;">Login</button>
                    </form>
                </div>
                <div id="RegisterForm" class="modal-body hidden">
                    <form action="server.php" method="POST">
                        <div class="form-group">
                            <label for="userName"  class="col-form-label">Username</label>     
                            <input name="username" class="w-100" type="text" lass="form-control" id="UserName" required>
                        </div>
                        <div class="form-group">
                            <label for="FirstName"  class="col-form-label">First Nmae</label>     
                            <input name="fname" class="w-100" type="text" lass="form-control" id="FirstName" >
                        </div>
                        <div class="form-group">
                            <label for="LastName"  class="col-form-label">Last Name</label>     
                            <input name="lname" class="w-100" type="text" lass="form-control" id="LastName" >
                        </div>
                        <div class="form-group">
                            <label for="email"  class="col-form-label">Your email</label>     
                            <input name="email" class="w-100" type="email" lass="form-control" id="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone"  class="col-form-label">Phone Number</label>     
                            <input name="phone" class="w-100" type="text" lass="form-control" id="Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="password_1"  class="col-form-label">Your password</label>     
                            <input name="password1" class="w-100" type="password" lass="form-control" id="Password_1" required>
                        </div>
                        <div class="form-group">
                            <label for="password_2"  class="col-form-label">Reapet password</label>     
                            <input name="password2" class="w-100" type="password" id="Password_2" required>
                        </div>
                        
                            <button type="submit" name="submit" class="btn btn-success" style="margin-left: 170px;">Signup</button>
                    </form>
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    
     <!-- Modal End -->