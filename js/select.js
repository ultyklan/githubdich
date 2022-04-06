let selectOverlay = document.querySelector('.select__overlay');	
let selectMain = document.querySelector('.select');

let select = function () {
    let selectHeader = document.querySelectorAll('.select__header');
    let selectItem = document.querySelectorAll('.select__item');

    selectHeader.forEach(item => {
        item.addEventListener('click', selectToggle);
    });
	
    selectItem.forEach(item => {
		item.addEventListener('click', selectChoose);
    });
	
    function selectToggle() {
		this.parentElement.classList.toggle('_active');
		selectOverlay.classList.toggle('overlay-active');
    }

    function selectChoose() {
        let text = this.innerText,
		select = this.closest('.select'),
		currentText = select.querySelector('.select__current');
        currentText.innerText = text;
		let problem = document.querySelector('#input-problem');
		problem.value = text;
		currentText.style.color = "rgb(0,0,0)";
        select.classList.remove('_active');
		selectOverlay.classList.remove('overlay-active');
    }
};

select();

selectOverlay.onclick = function () {
	console.log(selectMain);
	selectMain.classList.remove('_active');
	this.classList.remove('overlay-active');
	console.log(selectMain);
}
