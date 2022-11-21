<?php
    if(isset($_POST['logout'])){
        session_start();
        session_destroy();

        header('location: ../index.php');
    }

?>

<!-- Logout-->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="">
            <div class="modal-body">
                <h4 class="text-center">Are you sure you want to logout?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="logout" class="btn btn-primary">Confirm</button>
            </div>
        </form>
    </div>
  </div>
</div>