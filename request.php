<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</head>
<body>

  
<div class="card text-center my-5">

<h3 class="border-top border-primary border-3 pt-3"></h3>

<hr class="mt-2">

<div class="card-body">

    <div class="row row-cols-4 row-cols-md-4 g-4">

        <div class="col-lg-4 mb-3 mb-sm-0">
            <div class="card h-100">
                <h5 class="border-top border-primary border-3 pt-3">Request form</h5>
                <hr class="mt-2">
                <div class="card-body">
                    <p class="card-text">Employee</p>   
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="itt btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#request-maintenance"
                    data-bs-placement="bottom" 
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Request Maintenance">
                        Request
                    </button>
                </div>
            </div>
        </div>
        
                </div>
            </div>
        </div>

    </div>

</div>

</div>

</section>

<!-- Request Maintenance Modal -->

<div class="modal fade display flex,justify-content-center" id="request-maintenance" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5">Request Employee</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
  
<div class="modal-body">
<form action="#" method="post">

    <div class="mb-3">
        <label class="form-label">Department</label>
        <select class="form-select" name="user_type" required>
        <option selected>Select Department</option>
        <option value="BSIT">HR1</option>
        
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Employee</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" placeholder="\" required></textarea>
    </div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>

</form>

</div>
</div>
</div>

<!-- ######################################################################################################### -->

<!-- Request items Modal -->

<div class="modal fade" id="request-items" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5">Request Items</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
  
<div class="modal-body">
<form action="#" method="post">

    <div class="mb-3">
         <label class="form-label">Department</label>
        <select class="form-select" name="user_type" required>
        <option selected>Select Department</option>
        <option value="BSIT">BS Information Technology</option>
        <option value="BSHM">BS Hospitality Management</option>
        <option value="BSOA">BS Office Administration</option>
        <option value="BSBA">BS Business Administration</option>
        <option value="BSCRIM-2">BS Criminology</option>
        <option value="BEED">Bachelor of Elementary Education</option>
        <option value="BSED">Bachelor of Secondary Education</option>
        <option value="BSCpE">BS Computer Engineering</option>
        <option value="BSCpE">BS Computer Engineering</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Items Request</label>
        <textarea class="form-control" rows="15" placeholder="I want to inform you that we need some extra equipment to complete the project timely. I request you to provide the following equipment on a priority:
   </div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>

</form>

</div>
</div>
</div>

<!-- ######################################################################################################### -->


    </body>
</html>