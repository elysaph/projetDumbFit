document.addEventListener("DOMContentLoaded", () => {
  document
    .querySelectorAll('input[name="typeInscription"]')
    .forEach((radio) => {
      radio.addEventListener("change", () => {
        document.getElementById("formClientContainer").style.display =
          radio.value === "client" ? "block" : "none";
        document.getElementById("formProsContainer").style.display =
          radio.value === "pros" ? "block" : "none";
      });
    });
});
