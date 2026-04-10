document.addEventListener('DOMContentLoaded', () => {
	const radios = document.querySelectorAll('input[name="typeInscription"]');
	const forms = {
		client: document.getElementById('formClientContainer'),
		pros: document.getElementById('formProsContainer')
	};

	if (!radios.length || !forms.client || !forms.pros) return;

	const showForm = (type) => {
		forms.client.style.display = 'none';
		forms.pros.style.display = 'none';
		if (forms[type]) forms[type].style.display = 'block';
	};

	showForm('');
	radios.forEach((radio) => {
		radio.checked = false;
		radio.addEventListener('change', () => showForm(radio.value));
	});
});
