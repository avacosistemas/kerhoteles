var modalEngine = document.querySelector('.modal-engine');
var closeModal = document.querySelector('.close-modal-engine');
//var showModal = typeof(Cookies.get('mactived')) === 'undefined';
//if (showModal) {
	modalEngine.removeAttribute('hidden');
	document.querySelector('html').style.overflowY = 'hidden';
//	Cookies.set('mactived', 'value');
//} else {
//	document.querySelector('.modal-engine').style.display = 'none';
//}

closeModal.addEventListener('click', function () {
	document.querySelector('.modal-engine').style.display = 'none';
	document.querySelector('html').style.overflowY = 'scroll';
//	Cookies.set('mactived', 'value');
})