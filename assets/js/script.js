(() => {
    'use strict'

    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()

  
  let prevScrollPos = window.scrollY;
  const header = document.getElementById("mainHeader");

  window.addEventListener("scroll", () => {
    const currentScrollPos = window.scrollY;

    if (currentScrollPos > prevScrollPos && currentScrollPos > 80) {
      // Rolando para baixo
      header.style.top = "-100px";
    } else {
      // Rolando para cima
      header.style.top = "0";
    }

    prevScrollPos = currentScrollPos;
  });
header.style.backgroundColor="black"
