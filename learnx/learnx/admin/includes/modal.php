<!--Log in modal-->
<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Login</h4>
            </div>
            <div class="modal-body">
                <label for="email">Email</label>
                <input id="login-email" class="form-control" type="email" placeholder="someone@example.com" required>
                <label for="password">Password</label>
                <input id="login-password" class="form-control" type="password" placeholder="******" required><br>
                <input id="user-login" class="btn btn-primary" value="Login" type="button"> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

</div>

<!--Log in modal end-->
<!--Register Modal -->
<div id="register" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Register</h4>
            </div>
            <div class="modal-body">
                <label>Name</label>
                    <input id="name" class="form-control" type="text" placeholder="Your Name" required>
                    <label>Surname</label>
                    <input id="surname" class="form-control" type="text" placeholder="Your Surname" required>
                    <label>Cell number </label>
                    <input id="phone" class="form-control" type="tel" placeholder="" required>
                    <label>School Name </label>
                    <input id="school" class="form-control" type="text" placeholder="School Name" required>
                    <label>Email </label>
                    <input id="register-email" class="form-control" type="email" placeholder="someone@gmail.com" required>
                    <label>Password </label>
                    <input id="register-password" class="form-control" type="password" placeholder="******" required><br>
                    <button id="user-register" class="btn btn-primary">Submit</button>
                <p>By clicking <b>Submit</b> you agree with LearnX <a target="_blank" href="terms.php">Terms & Conditions and Privacy & Policy.</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

</div>
<!--Register Modal End-->