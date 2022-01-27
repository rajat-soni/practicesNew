<?php  require 'header.php';?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3"> </div>
                <div class="col-md-6 mt-4 bg-light mb-4">
                    <form method ="POST" action = "submitData.php">
                    <legend></legend>
    <div class="form-group row">
   
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="" name="name">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Student Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name ="name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Mobile No</label>
      <input type="number" class="form-control" id="exampleInputPassword1" placeholder="mobile no" name ="mobile">
    </div>
   
    
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Address</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="address"></textarea>
    </div>

     <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">City</label>
      <select class="form-select" id="exampleSelect1" name="city">
        <option>lucknow</option>
        <option>pune</option>
        <option>delhi</option>
        
      </select>
    </div>

    <fieldset class="form-group">
      <legend class="mt-4">Course</legend>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="maths" id="flexCheckDefault" name="course[]">
        <label class="form-check-label" for="flexCheckDefault">
          Maths
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="English" id="flexCheckChecked" checked="" name="course[]">
        <label class="form-check-label" for="flexCheckChecked">
          English
        </label>
      </div>
       <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Hindi" id="flexCheckChecked" checked="" name="course[]">
        <label class="form-check-label" for="flexCheckChecked">
          Hindi
        </label>
      </div>
       <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Sanskrit" id="flexCheckChecked" checked="" name="course[]">
        <label class="form-check-label" for="flexCheckChecked">
          Sanskrit
        </label>
      </div>
    </fieldset>
    <fieldset>
     
     
    </fieldset>
    
    <button type="submit" class="btn btn-primary" name = "save">Submit</button>
  </fieldset>
</form>
            </div>
            <div class="col-md-3">
            </div>
        </div>        
</div>

<?php require 'footer.php';