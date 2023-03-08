<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- sweetalert-->
<script src="js/sweetalert.js"></script>
    <!--
    <script>
        swal("Good job!", "You clicked the button!", "success");
        </script>
        -->
        <?php
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
          ?>
            <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            //text: "You clicked the button!",
            icon: "success",
            });
            
        </script>
       
          <?php  
        }
        ?>
