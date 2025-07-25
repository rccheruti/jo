function validarCPF(cpf) {
	cpf = cpf.replace(/[^\d]+/g, '');
	if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) return false;

	let soma = 0;
	for (let i = 0; i < 9; i++) {
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}
	let resto = 11 - (soma % 11);
	let digito1 = resto > 9 ? 0 : resto;

	if (parseInt(cpf.charAt(9)) !== digito1) return false;

	soma = 0;
	for (let i = 0; i < 10; i++) {
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	resto = 11 - (soma % 11);
	let digito2 = resto > 9 ? 0 : resto;

	return parseInt(cpf.charAt(10)) === digito2;
}

$(document).ready(function () {
	$('#telefone').mask('(00) 0000-0000');
	$('#celular').mask('(00) 00000-0000');
	$('#cpf').mask('000.000.000-00');

	// Validação personalizada de CPF
	$('#cpf').on('blur', function () {
		const cpfInput = $(this);
		const cpfValido = validarCPF(cpfInput.val());

		if (!cpfValido) {
			cpfInput.addClass('is-invalid');
			cpfInput.removeClass('is-valid');
			cpfInput.get(0).setCustomValidity("CPF inválido");
		} else {
			cpfInput.removeClass('is-invalid');
			cpfInput.addClass('is-valid');
			cpfInput.get(0).setCustomValidity("");
		}
	});

	// Validação Bootstrap 5
	(() => {
		'use strict';
		const forms = document.querySelectorAll('.needs-validation');

		Array.from(forms).forEach(form => {
			form.addEventListener('submit', event => {
				if (!form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	})();
});
