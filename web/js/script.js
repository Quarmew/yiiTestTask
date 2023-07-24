document.querySelectorAll('.slider').forEach(el => {
    el.addEventListener('input', e => {
        e.target.parentNode.style.setProperty('--position', `${e.target.value}%`)
    });
});

const faders = document.querySelectorAll('.fade-in');
const appearOptions = { threshold: 1 }
const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            entry.target.classList.remove('appear')
        } else {
            entry.target.classList.add('appear');
        }
    })
}, appearOptions)

faders.forEach(fader => {
    appearOnScroll.observe(fader);
})

let map;

main();
async function main() {
    // Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты API
    await ymaps3.ready;

    // Создание карты
    map = new ymaps3.YMap(document.getElementById('map'), {
        location: {
            // Координаты центра карты
            // Порядок по умолчанию: «долгота, широта»
            center: [55.205247, 25.077816],

            // Уровень масштабирования
            // Допустимые значения: от 0 (весь мир) до 21.
            zoom: 10
        }
    });

    // Добавляем слой для отображения схематической карты
    map.addChild(new ymaps3.YMapDefaultSchemeLayer());
}