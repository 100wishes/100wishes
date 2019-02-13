const arrFulfill = document.getElementsByClassName('fulfill');
const modal = document.getElementById('modal');

function changeModal(btn) {
	const form = document.getElementById('formWish');
	const wish = document.getElementById('pWish');
	const hospital = document.getElementById('pHospital');

	form.value = btn.getAttribute('data-id');
	wish.innerHTML = btn.getAttribute('data-wish');
	hospital.innerHTML = btn.getAttribute('data-hospital');
}

for(var i = 0; i < arrFulfill.length; i++) {
	arrFulfill[i].addEventListener('click', function(event) {
		modal.style.display = 'block';
		changeModal(this);
		event.preventDefault();
	});
}