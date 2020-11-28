ymaps.ready(function () {
    var address = 'Региональный центр банкротств';
    address = address.bold();
    address = `${address} г. Волгоград, 7-й Гвардейской, д.2, оф.236а`;
    var myMap = new ymaps.Map('section20map', {
            center: [48.721834, 44.537834],
            zoom: 14
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            balloonContent: address
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'images/myIcon.gif',
            // Размеры метки.
            iconImageSize: [30, 42],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        });


    myMap.geoObjects
        .add(myPlacemark);
});
