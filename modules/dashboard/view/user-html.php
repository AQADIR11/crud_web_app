<div class="container">
<?php if (!isset($_GET['edit'])) { ?>

        <form method="post" onsubmit="return false" id="register-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                <span id="msg" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" id="dob" placeholder="Date Of Birth">
            </div>
            <div class="form-group">
                <label for="address">Full Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Full Address">
            </div>
            <div class="form-group">
                <label for="pic">Profile Pic</label>
                <input type="file" name="profile_pic" class="form-control" id="pic">
            </div>
            <input type="hidden" name="action" value="register-form">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <?php } if(isset($_GET['edit'])) { ?>
        <form method="post" onsubmit="return false" id="update-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                <span id="editmsg" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" id="dob" placeholder="Date Of Birth">
            </div>
            <div class="form-group">
                <label for="address">Full Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Full Address">
            </div>
            <div class="form-group">
                <label for="pic">Profile Pic</label>
                <input type="file" name="profile_pic" class="form-control" id="pic">
            </div>
            <input type="hidden" name="action" value="update-form">
            <input type="hidden" name="id" value="<?= $_GET['edit'] ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php } ?>
</div>