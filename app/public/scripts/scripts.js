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

function editUser(userId, btn) {
	const row = $(btn).closest('tr');

	if ($(btn).hasClass('editing')) {
		const data = {
			nome: row.find('.edit-nome').val(),
			email: row.find('.edit-email').val(),
			telefone: row.find('.edit-telefone').val(),
			celular: row.find('.edit-celular').val(),
			data_nascimento: row.find('.edit-data_nascimento').val(),
			estado_civil: row.find('.edit-estado_civil').val(),
			cpf: row.find('.edit-cpf').val(),
			rg: row.find('.edit-rg').val(),
			data_emissao: row.find('.edit-data_emissao').val(),
			observacoes: row.find('.edit-observacoes').val()
		};

		$.ajax({
			url: '/usuarios/editUser/' + userId,
			type: 'POST',
			data: data,
			beforeSend: function () {
				$(btn).prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Salvando...');
			},
			success: function (response) {
				if (response.success) {
					// Volta células para modo de visualização
					row.find('td:not(:last-child)').each(function () {
						const fieldName = $(this).data('field');
						if (fieldName) {
							if (fieldName === 'id') {
								return;
							}

							let value = data[fieldName];

							if (fieldName === 'data_nascimento' || fieldName === 'data_emissao') {
								if (value) {
									const date = new Date(value);
									const dia = date.getDate().toString().padStart(2, '0');
									const mes = (date.getMonth() + 1).toString().padStart(2, '0');
									const ano = date.getFullYear();
									value = `${dia}/${mes}/${ano}`;
								}
							}
							$(this).html(value);
						}
					});

					$(btn).removeClass('btn-success editing').addClass('btn-warning');
					$(btn).html('<i class="fas fa-edit"></i> Editar');

					alert('Usuário atualizado com sucesso!');
				} else {
					alert('Erro ao atualizar usuário.');
				}
			},
			error: function (xhr) {
				let mensagem = 'Erro ao atualizar usuário.';
				if (xhr.responseJSON && xhr.responseJSON.error) {
					mensagem = xhr.responseJSON.error;
				}
				alert(mensagem);

				// Restaura botão em caso de erro
				$(btn).removeClass('btn-success editing').addClass('btn-warning');
				$(btn).html('<i class="fas fa-edit"></i> Editar');
			},
			complete: function () {
				$(btn).prop('disabled', false);
			}
		});
	} else {
		row.find('td:not(:last-child)').each(function () {
			const value = $(this).text().trim();
			const fieldName = $(this).data('field');

			// Pula o campo ID
			if (fieldName === 'id') {
				return;
			}

			if (fieldName) {
				let inputType = 'text';
				let className = `form-control edit-${fieldName}`;
				let inputValue = value;

				switch (fieldName) {
					case 'email':
						inputType = 'email';
						break;
					case 'data_nascimento':
					case 'data_emissao':
						inputType = 'date';
						// Converte data do formato BR para o formato do input date
						if (value) {
							const parts = value.split('/');
							if (parts.length === 3) {
								inputValue = `${parts[2]}-${parts[1]}-${parts[0]}`;
							}
						}
						break;
				}

				$(this).html(`<input type="${inputType}" class="${className}" value="${inputValue}">`);
			}
		});

		row.find('.edit-telefone').mask('(00) 0000-0000');
		row.find('.edit-celular').mask('(00) 00000-0000');
		row.find('.edit-cpf').mask('000.000.000-00');

		row.find('.edit-cpf').on('blur', function () {
			const cpfInput = $(this);
			const cpfValido = validarCPF(cpfInput.val());

			if (!cpfValido) {
				cpfInput.addClass('is-invalid');
				cpfInput.removeClass('is-valid');
			} else {
				cpfInput.removeClass('is-invalid');
				cpfInput.addClass('is-valid');
			}
		});

		$(btn).removeClass('btn-warning').addClass('btn-success editing');
		$(btn).html('<i class="fas fa-save"></i> Salvar');
	}
}

function deleteUser(userId) {
	if (confirm("Tem certeza que deseja excluir este usuário?")) {
		$.ajax({
			url: '/usuarios/softDeleteUser/' + userId,
			type: 'POST',
			success: function (response) {
				alert(response.success || response.error);
				location.reload();
			},
			error: function () {
				alert('Erro ao excluir usuário.');
			}
		});
	}
}
