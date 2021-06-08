"use strict"

// Ждём загрузки контента
window.onload = function () {
	const parallax = document.querySelector('.parallax');

	if(parallax) {
		const content = document.querySelector('.parallax__container');
		const clouds = document.querySelector('.images-parallax__clouds');
		const mountains = document.querySelector('.images-parallax__mountains');
		const human = document.querySelector('.images-parallax__human');

		// Коффициенты 
		const forClouds = 40;
		const forMountains = 20;
		const forHuman = 10;

		// Скорость анимации
		const speed = 0.05;

		// Объявление переменных
		let positionX = 0, positionY = 0;
		let coordXprocent = 0, coordYprocent = 0;

		function setMouseParallaxStyle() {
			const distX = coordXprocent - positionX;
			const distY = coordYprocent - positionY;

			positionX = positionX + (distX * speed);
			positionY = positionY + (distY * speed);
		
			// Передаём стили нашим картинкам
			clouds.style.cssText = `transform: translate(${positionX / forClouds}%,${positionY / forClouds}%);`;
			mountains.style.cssText = `transform: translate(${positionX / forMountains}%,${positionY / forMountains}%);`;
			human.style.cssText = `transform: translate(${positionX / forHuman}%,${positionY / forHuman}%);`;
			
			requestAnimationFrame(setMouseParallaxStyle);
		}

		setMouseParallaxStyle();

		parallax.addEventListener("mousemove", function (e) {
			// Получение высоты и ширины блока
			const parallaxWidth = parallax.offsetWidth;
			const parallaxHeight = parallax.offsetHeight;

			// Ноль по середине
			const ccordX = e.pageX - parallaxWidth / 2;
			const ccordY = e.pageY - parallaxHeight / 2;

			// Получаем проценты
			coordXprocent = ccordX / parallaxWidth * 100; 
			coordYprocent = ccordY / parallaxHeight * 100;
		});

		//Параллакс эффект при скроле
		let thresholdSets = [];

		for (let i = 0; i <= 1.0; i += 0.005) {
			thresholdSets.push(i);
		}

		const callback = function (entries, observer) {
			const scrollTopProcent = window.pageYOffset / parallax.offsetHeight * 100;
			setParallaxItemsStyle(scrollTopProcent);
		};

		const observer = new IntersectionObserver(callback, {
			threshold: thresholdSets
		});

		observer.observe(document.querySelector('.content'));

		function setParallaxItemsStyle(scrollTopProcent) {
			content.style.cssText = `transform: translate(0%, -${scrollTopProcent / 9}%);`;
			mountains.parentElement.style.cssText = `transform: translate(0%, -${scrollTopProcent / 6}%);`;
			human.parentElement.style.cssText = `transform: translate(0%, -${scrollTopProcent / 3}%);`;
		}
	}
}

















