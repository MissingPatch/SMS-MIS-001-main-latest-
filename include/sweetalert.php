
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
            icon: "success",
            button:"ok",
            timer:1500
            });then(function(){
            window.location.href="empprofile.php";
            });
            
        </script>
        <?php
           unset($_SESSION['status']); 
        }
            ?>
</body>
</html>