
    <link rel="stylesheet" href="css/loading.css" />


    <div class="loader" id="loading-screen">
      <div class="loading-animation">
        <div>
          <img src="images/logo.png" alt="bestlink-logo" />
        </div>
      </div>
    </div>
    
    

    <script>
  // Hide the main content when the page is loading
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("body").style.display = "none";
  });
</script>

<script>
  // Show the main content when the page is finished loading
  window.addEventListener("load", function() {
    document.querySelector("body").style.display = "block";
    document.querySelector("#loading-screen").style.display = "none";
  });
</script>


