<script>
    document.addEventListener("DOMContentLoaded", function(event) {
  function OTPInput() {
    const inputs = document.querySelectorAll('#otp > *[name="otp[]"]');
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener('input', function(event) {
        const value = this.value;
        const nextInput = this.nextElementSibling;
        if (nextInput && value) {
          nextInput.focus();
        }
      });
      inputs[i].addEventListener('keydown', function(event) {
        if (event.key === "Backspace" && !this.value) {
          const prevInput = this.previousElementSibling;
          if (prevInput) {
            prevInput.focus();
          }
        }
      });
    }
  }
  
  OTPInput();
});

</script>



            