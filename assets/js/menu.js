document.addEventListener( 'DOMContentLoaded', function () {
	const hamburgerMenu = document.querySelector( '#hamburger-menu' );
	const mobileNav = document.querySelector( '#mobile-menu' );

	hamburgerMenu.addEventListener( 'click', function () {
		hamburgerMenu.classList.toggle( 'open' );
		mobileNav.classList.toggle( 'open' );
	} );
} );
