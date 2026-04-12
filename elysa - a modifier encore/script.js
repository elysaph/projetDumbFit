const accountForm = document.getElementById("account-form");

if (accountForm) {
    const formNote = document.getElementById("form-note");

    accountForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm-password").value;

        if (password !== confirmPassword) {
            formNote.textContent = "Les mots de passe ne correspondent pas.";
            formNote.style.color = "#b0203a";
            return;
        }

        formNote.textContent = "Compte créé (démo). Connectez ce formulaire à votre backend ensuite.";
        formNote.style.color = "#1c7d3c";
        accountForm.reset();
    });
}

const profileForm = document.getElementById("profile-form");

if (profileForm) {
    const profileNote = document.getElementById("profile-note");

    profileForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const newPassword = document.getElementById("new-password").value;
        const confirmNewPassword = document.getElementById("confirm-new-password").value;

        if (newPassword || confirmNewPassword) {
            if (newPassword !== confirmNewPassword) {
                profileNote.textContent = "Les champs du nouveau mot de passe ne correspondent pas.";
                profileNote.style.color = "#b0203a";
                return;
            }
        }

        profileNote.textContent = "Modifications du profil enregistrées (démo).";
        profileNote.style.color = "#1c7d3c";
        document.getElementById("new-password").value = "";
        document.getElementById("confirm-new-password").value = "";
    });
}

