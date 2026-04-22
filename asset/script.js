document.addEventListener("DOMContentLoaded", () => {
  const menuLinks = document.querySelectorAll(".menu-link");
  const params = new URLSearchParams(window.location.search);
  const currentPage = params.get("page") || "accueil";

  menuLinks.forEach((link) => {
    const href = link.getAttribute("href") || "";
    const target = new URL(href, window.location.origin).searchParams.get("page") || "accueil";
    if (target === currentPage) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });

  document.querySelectorAll('input[name="typeInscription"]').forEach((radio) => {
    radio.addEventListener("change", () => {
      const formClient = document.getElementById("formClientContainer");
      const formPros = document.getElementById("formProsContainer");

      if (formClient) {
        formClient.style.display = radio.value === "client" ? "block" : "none";
      }

      if (formPros) {
        formPros.style.display = radio.value === "pros" ? "block" : "none";
      }
    });
  });

  document.querySelectorAll('input[name="typeconnexion"]').forEach((radio) => {
    radio.addEventListener("change", () => {
      const formClient = document.getElementById("formClientConnexion");
      const formPros = document.getElementById("formProsconnexion");
      const formAdmin = document.getElementById("formAdminconnexion");

      if (formClient) {
        formClient.style.display = radio.value === "client2" ? "block" : "none";
      }

      if (formPros) {
        formPros.style.display = radio.value === "pros2" ? "block" : "none";
      }

      if (formAdmin) {
        formAdmin.style.display = radio.value === "admin2" ? "block" : "none";
      }
    });
  });

  const accountForm = document.getElementById("account-form");
  if (accountForm) {
    accountForm.addEventListener("submit", (event) => {
      const passwordField = document.getElementById("password");
      const confirmPasswordField = document.getElementById("confirm-password");
      const password = passwordField ? passwordField.value : "";
      const confirmPassword = confirmPasswordField ? confirmPasswordField.value : "";

      if (password !== confirmPassword) {
        event.preventDefault();
        alert("Les mots de passe ne correspondent pas.");
      }
    });
  }

  const profileForm = document.getElementById("profile-form");
  if (profileForm) {
    profileForm.addEventListener("submit", (event) => {
      const newPasswordField = document.getElementById("new-password");
      const confirmNewPasswordField = document.getElementById("confirm-new-password");
      const newPassword = newPasswordField ? newPasswordField.value : "";
      const confirmNewPassword = confirmNewPasswordField ? confirmNewPasswordField.value : "";

      if ((newPassword || confirmNewPassword) && newPassword !== confirmNewPassword) {
        event.preventDefault();
        alert("Les champs du nouveau mot de passe ne correspondent pas.");
      }
    });
  }
});
