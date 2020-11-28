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

        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            balloonContent: address
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'images/myIcon.gif',
            iconImageSize: [30, 42],
            iconImageOffset: [-5, -38]
        });


    myMap.geoObjects
        .add(myPlacemark);
});
