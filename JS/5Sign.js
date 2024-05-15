const token = localStorage.getItem("token");

if (token) {
  window.location.href = "6User.php";
}

// LOGIN

const registerForm = document.getElementById("form");
const message = document.getElementById("message")
const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const Email = document.getElementById("email");
const Password = document.getElementById("password");


// REGISTER
registerForm.addEventListener("submit", async (event) => {
  event.preventDefault();

  const response = await fetch("http://127.0.0.1:3000/users", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: Email.value,
      name: nom.value + " " + prenom.value,
      password: Password.value,
    }),
  });

  if (response.status !== 201) {
    alert("Failed to register");
    return;
  } else {
    message.innerHTML = "<p> User registered </p>";
  }

  const result = await response.json();
});
