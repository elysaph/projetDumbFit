// attend que la page soit chargée avant d'exécuter
document.addEventListener("DOMContentLoaded", () => {
  // récupère tous les radios qui ont le name typeInscription et boucle
  document
    .querySelectorAll('input[name="typeInscription"]')
    .forEach((radio) => {
      // écoute à chaque fois que l'utilisateur clique sur une radio
      radio.addEventListener("change", () => {
        // ternaire : si la valeur correspond → "block", sinon → "none"
        document.getElementById("formClientContainer").style.display =
          radio.value === "client" ? "block" : "none";
        document.getElementById("formProsContainer").style.display =
          radio.value === "pros" ? "block" : "none";
      }); 
    }); 

  // même logique pour la connexion
  document.querySelectorAll('input[name="typeconnexion"]').forEach((radio) => {
    radio.addEventListener("change", () => {
      document.getElementById("formClientConnexion").style.display =
        radio.value === "client2" ? "block" : "none";
      document.getElementById("formProsconnexion").style.display =
        radio.value === "pros2" ? "block" : "none";
      document.getElementById("formAdminconnexion").style.display =
        radio.value === "admin2" ? "block" : "none";
    }); 
  }); 
});
