const button = document.getElementById("togglemode");
 button.addEventListener("click", () => {
   document.body.classList.toggle("nuit");
});
function verifierConnexion() {
    alert("Veuillez vous connecter pour accéder à cette section.");
     window.location.href = "connexion.php";
  }
