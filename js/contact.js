document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("requestForm");
  const formMessage = document.getElementById("formMessage");

  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.has("success")) {
    formMessage.textContent = "Your request has been submitted successfully!";
    formMessage.classList.add("success");
  } else if (urlParams.has("error")) {
    formMessage.textContent = "Please fill in all fields before submitting.";
    formMessage.classList.add("error");
  }

  form.addEventListener("submit", (event) => {
    const email = form.querySelector('input[name="email"]').value;
    const phone = form.querySelector('input[name="phone"]').value;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      event.preventDefault();
      formMessage.textContent = "Please enter a valid email address.";
      formMessage.classList.add("error");
      return;
    }

    const phoneRegex = /^[0-9]+$/;
    if (!phoneRegex.test(phone)) {
      event.preventDefault();
      formMessage.textContent = "Please enter a valid phone number.";
      formMessage.classList.add("error");
      return;
    }
  });

  form.addEventListener("input", () => {
    formMessage.textContent = "";
    formMessage.classList.remove("success", "error");
  });
});
