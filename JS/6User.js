async function getProfile() {
  const token = localStorage.getItem("token");
  const Infos = document.getElementById("infos");

  if (!token) {
    window.location.href =
      "4Compte.php";
  }

  const response = await fetch("http://localhost:3000/getMyProfile", {
    method: "GET",
    headers: {
      Authorization: "Bearer " + token,
      "Content-Type": "application/json",
    },
  });

  const data = await response.json();

  // Insertion du profil

  Infos.innerHTML = createInfos(data); 

  // console.log(data);
}

getProfile();

function createInfos(user) {
  return `
    <h2> Nom : ${user.name}</h2>
    <p> E-mail : ${user.email}</p>
    `;
}

const signOutBtn = document.getElementById("sign-out");

signOutBtn.addEventListener("click", () => {
    localStorage.removeItem('token')

    window.location.href =
      "4Compte.php";
});
