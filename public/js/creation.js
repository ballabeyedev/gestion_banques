document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.formulaire');
    const errorMessagesDiv = document.getElementById('error-messages');

    form.addEventListener('submit', function (event) {
        // Effacer les anciens messages d'erreur
        errorMessagesDiv.innerHTML = '';

        // Récupérer les champs du formulaire
        const prenom = document.getElementById('prenom');
        const nom = document.getElementById('nom');
        const identifiant = document.getElementById('text');
        const password = document.getElementById('password');
        const numero = document.getElementById('numero');

        // Variables pour les erreurs
        let errors = [];

        // Vérifications des champs
        if (!prenom.value.trim()) {
            errors.push('Le prénom est requis.');
        }

        if (!nom.value.trim()) {
            errors.push('Le nom est requis.');
        }

        if (!identifiant.value.trim()) {
            errors.push("L'identifiant est requis.");
        }

        if (!password.value.trim()) {
            errors.push('Le mot de passe est requis.');
        } else if (password.value.length < 8 || !/\d/.test(password.value) || !/[a-zA-Z]/.test(password.value)) {
            errors.push('Le mot de passe doit contenir au moins 8 caractères, une lettre et un chiffre.');
        }

        if (!numero.value.trim()) {
            errors.push('Le numéro de téléphone est requis.');
        } else if (!/^\d+$/.test(numero.value)) {
            errors.push('Le numéro de téléphone doit contenir uniquement des chiffres.');
        }

        // Afficher les erreurs ou soumettre
        if (errors.length > 0) {
            event.preventDefault(); // Empêcher l'envoi du formulaire
            errors.forEach(function (error) {
                const errorItem = document.createElement('p');
                errorItem.textContent = error;
                errorMessagesDiv.appendChild(errorItem);
            });
        }
    });
});
