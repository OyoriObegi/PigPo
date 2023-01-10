document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;
    
    // Validate input
    if (username.length === 0 || password.length === 0) {
      alert("Username and password must not be empty");
      return;
    }
    
    // Submit form
    this.submit();
  });
  