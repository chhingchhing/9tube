<div class="panel-body">
    <div class="row">
        <div class="col-lg-6">
            <form role="form" action="#">
                <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" name="first_name">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control" name="last_name" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="username" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Enter text">
                    <p class="help-block">Password: The long is 6 to 12 characters.</p>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" type="password" name="confirm_password" placeholder="Enter text">
                    <p class="help-block">Confirm Password must be match with Password.</p>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Enter text">
                    <p class="help-block">Example: username@example.com</p>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" name="phone" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label>Upload Profile</label>
                    <input type="file">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control">
                        <option>Female</option>
                        <option>Male</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-info">Reset</button>
            </form>
        </div>
        <!-- /.col-lg-6 (nested) -->
    </div>
    <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->