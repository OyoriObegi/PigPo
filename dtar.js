const PasswordInput = document.querySelector("#togglePassword")
  const eye= document.querySelector("eye")

  eye.addEventListener('click', function () {
    const type = PasswordInput.getAttribute("type") === "password"? 'text' : 'password'
    PasswordInput.setAttribute('type', type)
    this.classList.toggle('fa-eye-slash')
})