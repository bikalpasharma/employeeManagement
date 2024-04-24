<div class="container" style="padding: 10px;">
    <form action="includes/assignprocess.php" method="POST" enctype="multipart/form-data">
        <h2 class="title" style="text-align: center;">ASSIGN PROJECT</h2>

        <div class="col-md-4" style="padding:10px;">
            <label>Employee ID:</label>
            <input type="number" placeholder="Employee ID" name="empid" required="required" class="form-control"> 
        </div>

        <div class="col-md-4" style="padding:10px;">
            <label>Project ID:</label>
            <input type="text" placeholder="Project ID" name="controlid" required="required" class="form-control"> 
        </div>

        <div class="col-md-4" style="padding:10px;">
            <label>Project Name:</label>
            <input type="text" placeholder="Project Name" name="projectName" required="required" class="form-control"> 
        </div>
        <div class="col-md-12" style="padding:10px;">
            <label>Project Due Date:</label> 
            <input type="date" placeholder="Due Date" name="duedate" required="required" class="form-control">
        </div>
       
        <div class="col-md-12" style="padding:10px;">
            <label>Comment:</label>
            <textarea type="text" placeholder="Your text here" name="noncomp" required="required" class="form-control"></textarea>
        </div>

        <input type="hidden" name="remarks" value="New Project Assigned">
        <input type="hidden" name="status" value="Due">

        <div class="col-md-12" style="padding: 10px;">
            <center>
                <button class="btn" type="submit" style="background: #129a48;color: #fff;">Assign</button> 
            </center>
        </div>
    </form>
    <div class="col-md-12">
        <br>
        <a href="add-employee"> <p style="color: #222;text-align: center;">Register A New Employee</p></a>
    </div>
</div>
