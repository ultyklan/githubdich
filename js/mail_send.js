let inputName = document.querySelector('#input-name');
		let inputPhone = document.querySelector('#input-phone');
		let inputPhone2 = document.querySelector('#input-phone2');
		let inputDate = document.querySelector('#input-date');
		let todayDate = new Date().toLocaleDateString();

		let res1 = document.querySelector('#res1');
		let res2 = document.querySelector('#res2');
		let res3 = document.querySelector('#res3');
		let res4 = document.querySelector('#res4');
		let res5 = document.querySelector('#res5');

		$("#first-form").submit(function (e) {
			if (!inputName.value.trim()) {
				inputName.value = "";
				res2.click();
				valid = false;
				return valid;
			}
			else if (!inputPhone.value) {
				res3.click();
				valid = false;
				return valid;
			}
			else if (inputDate.value < todayDate) {
				res4.click();
				valid = false;
				return valid;
			}
			e.preventDefault();
			let form_data = $(this).serialize(); // Собираем все данные из формы
			$.ajax({
				type: "POST", // Метод отправки
				url: "mail.php", // Путь до php файла отправителя
				data: form_data,
				success: function () {
					$(this).find("input").val("");
					$("#first-form").trigger("reset");
					$('#input-problem').val("");
					$('.select__current').html("Ваша проблема").css('color', '#6B6B6B');
					// inputDate.placeholder = todayDate;
					inputDate.value = todayDate;
					res1.click();
				},
				error: function () {
					res5.click();
				},
			});
		});

		$("#question-form").submit(function (e) {
			if (!inputPhone2.value) {
				res3.click();
				valid = false;
				return valid;
			}
			e.preventDefault();
			let form_data = $(this).serialize(); // Собираем все данные из формы
			$.ajax({
				type: "POST", // Метод отправки
				url: "./mail.php", // Путь до php файла отправителя
				data: form_data,
				success: function () {
					$(this).find("input").val("");
					$("#question-form").trigger("reset");
					res1.click();
				},
				error: function () {
					res5.click();
				},
			});
		});