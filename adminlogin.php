<?php echo
'<div class="modal fade " id="adminlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="adminlogin1.php" method="Post">
        <div class="mb-3">
        <label for="username" class="form-label">Enter your Username</label>
        <input type="pass" name="username" class="form-control" id="Pass">
     
      </div>
        <div class="mb-3">
        <label for="pass" class="form-label">Enter your Password</label>
        <input type="pass" name="pass" class="form-control" id="Pass">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>';
