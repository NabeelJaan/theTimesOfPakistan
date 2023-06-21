window.addEventListener('DOMContentLoaded', function () {

	let main_navigation = document.querySelector('#primary-menu2');
	document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
		e.preventDefault();
		main_navigation.classList.toggle('active');
	});

	// adding class with toggle button 
	let toggleBtn = document.querySelector('.toggle');
	if(typeof toggleBtn != "undefined" && toggleBtn != null) {

		toggleBtn.addEventListener('click', function (e) {
			e.preventDefault();
			toggleBtn.classList.toggle('icon');
		});
	}
});