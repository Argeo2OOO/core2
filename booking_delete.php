<!-- DELETE MODAL-->
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="booking.php">
      <div class="modal-header bg-light">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete booking</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
         <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
         <h5 class="text-center">Are you sure you want to delete the record?</h5>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>