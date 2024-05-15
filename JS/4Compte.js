const token = localStorage.getItem("token");

if (token) {
  window.location.href = "6User.php";
}

// LOGIN

const loginForm = document.getElementById("form");

const Email = document.getElementById("email");
const Password = document.getElementById("password");

// LOGIN

loginForm.addEventListener("submit", async (event) => {
  event.preventDefault();

  const response = await fetch("http://localhost:3000/login", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: Email.value,
      password: Password.value,
    }),
  });

  if (response.status !== 200) {
    window.location.href = "5Sign.php";
    return;
  }

  const data = await response.json();

  const token = data.token;

  localStorage.setItem("token", token);

  window.location.href = "6User.php";
});
