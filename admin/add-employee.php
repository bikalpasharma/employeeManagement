<div class="container" style="padding: 10px;">
    <form action="includes/regprocess.php" method="POST" enctype="multipart/form-data">
        <h2 class="title" style="text-align: center;">ADD EMPLOYEE</h2>

        <div class="col-md-6" style="padding:10px;">
            <label>First Name:</label>
            <input type="text" placeholder="First Name" name="firstName" required="required" class="form-control"> 
        </div>

        <div class="col-md-6" style="padding:10px;">
            <label>Last Name:</label>
            <input type="text" placeholder="Last Name" name="lastName" required="required" class="form-control">
        </div>

        <div class="col-md-12" style="padding: 10px;">
            <label>Email:</label>
            <input type="email" placeholder="Email" name="email" required="required" class="form-control">
        </div>

        <div class="col-md-6" style="padding:10px;">
         <label>Phone:</label>                 
         <input type="number" placeholder="Contact Number" name="contact" required="required" class="form-control" >
     </div>

     <div class="col-md-6" style="padding:10px;">
        <label>Address:</label>
        <input type="text" placeholder="Address" name="address" required="required" class="form-control">
    </div>

    <div class="col-md-6" style="padding:10px;">
        <label>Birthday:</label> 
        <input type="date" placeholder="BIRTHDATE" name="birthday" required="required" class="form-control">
    </div>

    <div class="col-md-6" style="padding:10px;">
        <label>Gender:</label>         
        <select name="gender" class="form-control" style="">
            <option disabled="disabled" selected="selected">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="col-md-12" style="padding:10px;">
        <label>Password:</label>
        <input type="text" placeholder="Password" name="password" required="required" class="form-control">
    </div>
    <div class="col-md-12" style="padding: 10px;">
        <center>
            <button class="btn" type="submit" style="background: #129a48;color: #fff;">Submit</button>
        </center>
    </div>
</form>
</div>
