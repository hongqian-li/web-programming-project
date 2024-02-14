<?php include 'adminHeader.php'; ?>
<div>
    <div class="col-sm-10" style="margin:0 auto">
        <form name="form1" method="post" action="processcareer.php">
        <div class="form-group">
                <div class="row">
                    <label for="fname">Title</label>
                    <input type="text" class="form-control" id="title"  name="title" required>
                </div>
                <div class="row">
                    <label for="lname">Description</label>
                    <input type="text" class="form-control" id="description"  name="description" required>
                </div>
                <div class="row">
                    <label for="lname">Hourly wage</label>
                    <input type="text" class="form-control" id="salary" placeholder="Please enter a whole number" name="salary" required>
                </div>
                <div class="row">
                    <label for="lname">Person of contact</label>
                    <input type="text" class="form-control" id="contactinfo"  name="contactinfo" required>
                </div>
                <div class="col">
                    <label for="groupid">Employment type</label>
                    <select class="form-control" id="employment" placeholder="Please choose one" name="employment">
                        <option value="BBCAP19">Full-time</option>
                        <option value="BBCAP20">Part-time</option>
                        <option value="BBCAP21">Part-time or Full-time</option>
                    </select>
                </div>
                <div class="row">
                    <label for="lname">Starting date:</label>
                    <input type="text" class="form-control" id="starting_date" placeholder="dd-mm-yyyy or ASAP" name="starting_date" required>
                </div>
                <div class="row">
                    <label for="lname">Location</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
        
        </div>
        <div style="padding-top: 5px; padding-bottom: 5px; margin:0 auto">
        <button type="submit" id="careersubmitbutton" class="btn btn-primary" name="submit">Upload</button>
        </div>
        </form>
    </div>
</div>
<br>
<?php include 'adminFooter.php'; ?>