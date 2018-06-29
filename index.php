<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/style.css" />


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="assets/libs/inputmask/jquery.inputmask.bundle.min.js"></script>

<?php
$arrayListCities = [
    ['title'=>'Аэропорт Симферополя', 'price'=>'50','length'=>'0',],
    ['title'=>'Ж/д вокзал Симферополя', 'price'=>'50','length'=>'0',],
    ['title'=>'Ай-даниль','price'=>'50','length'=>'{x:0,y:-88}',],
    ['title'=>'Алупка', 'price'=>'50','length'=>'{x:0,y:-100}',],
    ['title'=>'Алушта', 'price'=>'50','length'=>'0',],
    ['title'=>'Андреевка', 'price'=>'50','length'=>'0',],
    ['title'=>'Армянск', 'price'=>'50','length'=>'0',],
    ['title'=>'Балаклава', 'price'=>'50','length'=>'0',],
    ['title'=>'Бахчисарай', 'price'=>'50','length'=>'0',],
    ['title'=>'Белогорск', 'price'=>'50','length'=>'0',],
    ['title'=>'Береговое (ЮБК)', 'price'=>'50','length'=>'0',],
    ['title'=>'Береговое (бахчисарай)', 'price'=>'50','length'=>'0',],
    ['title'=>'Ботанический сад', 'price'=>'50','length'=>'0',],
    ['title'=>'Вилино', 'price'=>'50','length'=>'0',],
    ['title'=>'Витино', 'price'=>'50','length'=>'0',],
    ['title'=>'Гаспра', 'price'=>'50','length'=>'0',],
    ['title'=>'Геническ', 'price'=>'50','length'=>'0',],
    ['title'=>'Голубой Залив', 'price'=>'50','length'=>'0',],
    ['title'=>'Гурзуф', 'price'=>'50','length'=>'0',],
    ['title'=>'Гурзуф (Артек)', 'price'=>'50','length'=>'0',],
    ['title'=>'Даниловка', 'price'=>'50','length'=>'0',],
    ['title'=>'Джанкой', 'price'=>'50','length'=>'0',],
    ['title'=>'Евпатория', 'price'=>'50','length'=>'0',],
    ['title'=>'Заозерное', 'price'=>'50','length'=>'0',],
    ['title'=>'Зеленогорье', 'price'=>'50','length'=>'0',],
    ['title'=>'Золотое (Керчь)', 'price'=>'50','length'=>'0',],
    ['title'=>'Казантип (Поповка)', 'price'=>'50','length'=>'0',],
    ['title'=>'Канака', 'price'=>'50','length'=>'0',],
    ['title'=>'Кастрополь', 'price'=>'50','length'=>'0',],
    ['title'=>'Кацивели', 'price'=>'50','length'=>'0',],
    ['title'=>'Кача', 'price'=>'50','length'=>'0',],
    ['title'=>'Керчь', 'price'=>'50','length'=>'0',],
    ['title'=>'Керчь (героевка)', 'price'=>'50','length'=>'0',],
    ['title'=>'Керчь(порт крым)', 'price'=>'50','length'=>'0',],
    ['title'=>'Кикенеиз', 'price'=>'50','length'=>'0',],
    ['title'=>'Коктебель', 'price'=>'50','length'=>'0',],
    ['title'=>'Кореиз', 'price'=>'50','length'=>'0',],
    ['title'=>'Красные пещеры', 'price'=>'50','length'=>'0',],
    ['title'=>'Курортное (Белог. р-н)', 'price'=>'50','length'=>'0',],
    ['title'=>'Курортное (Керчь)', 'price'=>'50','length'=>'0',],
    ['title'=>'Курортное (Ленин. р-н)', 'price'=>'50','length'=>'0',],
    ['title'=>'Курортное (Феодос. р-н)', 'price'=>'50','length'=>'0',],
    ['title'=>'Курортное (Щебетовка)', 'price'=>'50','length'=>'0',],
    ['title'=>'Курпаты', 'price'=>'50','length'=>'0',],
    ['title'=>'Лавровое', 'price'=>'50','length'=>'0',],
    ['title'=>'Лазурное', 'price'=>'50','length'=>'0',],
    ['title'=>'Ласпи', 'price'=>'50','length'=>'0',],
    ['title'=>'Ленино', 'price'=>'50','length'=>'0',],
    ['title'=>'Ливадия', 'price'=>'50','length'=>'0',],
    ['title'=>'Малореченское', 'price'=>'50','length'=>'0',],
    ['title'=>'Массандра', 'price'=>'50','length'=>'0',],
    ['title'=>'Межводное', 'price'=>'50','length'=>'0',],
    ['title'=>'Меллас', 'price'=>'50','length'=>'0',],
    ['title'=>'Мирный(казантип)', 'price'=>'50','length'=>'0',],
    ['title'=>'Мисхор', 'price'=>'50','length'=>'0',],
    ['title'=>'Морское', 'price'=>'50','length'=>'0',],
    ['title'=>'Мраморные пещеры', 'price'=>'50','length'=>'0',],
    ['title'=>'Мрия резорт СКК', 'price'=>'50','length'=>'0',],
    ['title'=>'Мысовое(щелкино)', 'price'=>'50','length'=>'0',],
    ['title'=>'Научный', 'price'=>'50','length'=>'0',],
    ['title'=>'Нижнегорское', 'price'=>'50','length'=>'0',],
    ['title'=>'Нижняя Ореанда', 'price'=>'50','length'=>'0',],
    ['title'=>'Никита', 'price'=>'50','length'=>'0',],
    ['title'=>'Николаевка', 'price'=>'50','length'=>'0',],
    ['title'=>'Николаевка(Украина)', 'price'=>'50','length'=>'0',],
    ['title'=>'Новоозерное', 'price'=>'50','length'=>'0',],
    ['title'=>'Новоотрадное', 'price'=>'50','length'=>'0',],
    ['title'=>'Новофедоровка', 'price'=>'50','length'=>'0',],
    ['title'=>'Новый свет', 'price'=>'50','length'=>'0',],
    ['title'=>'Окуневка', 'price'=>'50','length'=>'0',],
    ['title'=>'Оленевка', 'price'=>'50','length'=>'0',],
    ['title'=>'Олива', 'price'=>'50','length'=>'0',],
    ['title'=>'Оползневое (Мрия Резорт)', 'price'=>'50','length'=>'0',],
    ['title'=>'Орджоникидзе', 'price'=>'50','length'=>'0',],
    ['title'=>'Орлиное', 'price'=>'50','length'=>'0',],
    ['title'=>'Орловка', 'price'=>'50','length'=>'0',],
    ['title'=>'Отрадное', 'price'=>'50','length'=>'0',],
    ['title'=>'Парковое', 'price'=>'50','length'=>'0',],
    ['title'=>'Партенит', 'price'=>'50','length'=>'0',],
    ['title'=>'Песочное (Щелкино)', 'price'=>'50','length'=>'0',],
    ['title'=>'Песчаное', 'price'=>'50','length'=>'0',],
    ['title'=>'Понизовка (СКК Мрия)', 'price'=>'50','length'=>'0',],
    ['title'=>'Поповка', 'price'=>'50','length'=>'0',],
    ['title'=>'Прибрежное (Саки)', 'price'=>'50','length'=>'0',],
    ['title'=>'Приветное', 'price'=>'50','length'=>'0',],
    ['title'=>'Раздольное', 'price'=>'50','length'=>'0',],
    ['title'=>'Рыбачье', 'price'=>'50','length'=>'0',],
    ['title'=>'Саки', 'price'=>'50','length'=>'0',],
    ['title'=>'Саки (полтава)', 'price'=>'50','length'=>'0',],
    ['title'=>'Санаторное', 'price'=>'50','length'=>'0',],
    ['title'=>'Сатера', 'price'=>'50','length'=>'0',],
    ['title'=>'Севастополь (Гагар. р-н)', 'price'=>'50','length'=>'0',],
    ['title'=>'Севастополь (Голландия)', 'price'=>'50','length'=>'0',],
    ['title'=>'Севастополь (Ленин. р-н)', 'price'=>'50','length'=>'0',],
    ['title'=>'Севастополь (Любимовка)', 'price'=>'50','length'=>'0',],
    ['title'=>'Севастополь (Радиогорка)', 'price'=>'50','length'=>'0',],
    ['title'=>'Севастополь (Учкуевка)', 'price'=>'50','length'=>'0',],
    ['title'=>'Севастополь (Фиолент)', 'price'=>'50','length'=>'0',],
    ['title'=>'Семидворье', 'price'=>'50','length'=>'0',],
    ['title'=>'Симеиз', 'price'=>'50','length'=>'0',],
    ['title'=>'Симферополь', 'price'=>'50','length'=>'0',],
    ['title'=>'Соколиное', 'price'=>'50','length'=>'0',],
    ['title'=>'Солнечная Долина', 'price'=>'50','length'=>'0',],
    ['title'=>'Солнечногорское', 'price'=>'50','length'=>'0',],
    ['title'=>'Сотера', 'price'=>'50','length'=>'0',],
    ['title'=>'Старый Крым', 'price'=>'50','length'=>'0',],
    ['title'=>'Судак', 'price'=>'50','length'=>'0',],
    ['title'=>'Угловое', 'price'=>'50','length'=>'0',],
    ['title'=>'Утёс', 'price'=>'50','length'=>'0',],
    ['title'=>'Феодосия', 'price'=>'50','length'=>'0',],
    ['title'=>'Феодосия (Приморский)', 'price'=>'50','length'=>'0',],
    ['title'=>'Феодосия(Береговое)', 'price'=>'50','length'=>'0',],
    ['title'=>'Форос', 'price'=>'50','length'=>'0',],
    ['title'=>'Фрунзе', 'price'=>'50','length'=>'0',],
    ['title'=>'Херсон (Украина)', 'price'=>'50','length'=>'0',],
    ['title'=>'Черноморское', 'price'=>'50','length'=>'0',],
    ['title'=>'Чонгар', 'price'=>'50','length'=>'0',],
    ['title'=>'Штормовое', 'price'=>'50','length'=>'0',],
    ['title'=>'Щебетовка', 'price'=>'50','length'=>'0',],
    ['title'=>'Щелкино', 'price'=>'50','length'=>'0',],
    ['title'=>'Щелкино (Азовский)', 'price'=>'50','length'=>'0',],
    ['title'=>'Ялта', 'price'=>'50','length'=>'0',],
];
?>
<form action="" method="post" id="order">

    <div class="box-title">
        <h3 class="title">ДЛЯ ЗАКАЗА ТАКСИ ОНЛАЙН ВЫБЕРЕТЕ СЕЗОН</h3>
        <div class="box-temperature">
            <input type="radio" name="temperature" id="temperature-summ" checked="checked" value="лето"/>
            <label for="temperature-summ" class="icon-summer"></label>

            <input type="radio" name="temperature" id="temperature-wind" value="зима" />
            <label for="temperature-wind" class="icon-wind"></label>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2 class="sub-title">ОНЛАЙН ЗАКАЗ ТАКСИ</h2>
            <div class="box-type-travel">
                <input type="radio" name="type-engine-from" id="order-air-from" value="airport" checked="checked" />
                <label for="order-air-from" class="icon-air"></label>

                <input type="radio" name="type-engine-from" id="order-railway-from" value="railway"/>
                <label for="order-railway-from" class="icon-railway"></label>

                <input type="radio" name="type-engine-from" id="order-map-from" value="map"/>
                <label for="order-map-from" class="icon-map"></label>
            </div>

            <fieldset class="fieldset">
                <input type="text" list="order-city-from" placeholder="От куда?" name="town-from" />
                <datalist id="order-city-from"><?php foreach ($arrayListCities as $item):?><option value="<?=$item['title']?>" label="<?=$item['title']?>" /><?php endforeach;?></datalist>

                <label for="order-name">ВАШЕ ИМЯ</label>
                <input type="text" name="name" id="order-name" />

                <label for="order-phone">НОМЕР ТЕЛЕФОНА</label>
                <input type="tel" name="phone" id="order-phone" />

                <label for="order-date-from">ДАТА</label>
                <input type="date" name="date" id="order-date-from" />

                <label for="order-payment">СПОСОБ ОПЛАТЫ</label>
                <select id="order-payment" name="payment">
                    <option value="1">Наличным</option>
                    <option value="2">Безналичный расчет +2%</option>
                </select>
            </fieldset>
        </div>
        <div class="col">
            <h2 class="sub-title">МЕСТНОЕ ВРЕМЯ <span class="time-now">13:57</span></h2>
            <div class="box-type-travel">
                <input type="radio" name="type-engine-to" id="order-air-to" checked="checked" />
                <label for="order-air-to" class="icon-air"></label>

                <input type="radio" name="type-engine-to" id="order-railway-to"/>
                <label for="order-railway-to" class="icon-railway"></label>

                <input type="radio" name="type-engine-to" id="order-map-to"/>
                <label for="order-map-to" class="icon-map"></label>
            </div>

            <fieldset class="fieldset">
                 <input type="text" list="order-city-to" placeholder="Куда?" name="town-to" />
                <datalist id="order-city-to"><?php foreach ($arrayListCities as $item):?><option value="<?=$item['title']?>" label="<?=$item['title']?>" /><?php endforeach;?></datalist>

                <label for="order-type-engine">КЛАСС АВТО</label>
                <select name="type-engine" id="order-type-engine">
                    <option value="1">Стандарт</option>
                    <option value="2">Комфорт</option>
                    <option value="3">Микроавтобус</option>
                    <option value="4">Минивэн</option>
                    <option value="5">Бизнес</option>
                </select>


                <label for="order-number">НОМЕР РЕЙСА</label>
                <input type="text" name="order-number" id="order-number" placeholder="Например: LH 1444" />

                <label for="order-time-from">ВРЕМЯ</label>
                <input type="time" name="time" id="order-time-from" />

                <div class="box-transfer">
                    <label for="order-is-transfer">ОБРАТНЫЙ ТРАНСФЕР</label>
                    <input type="checkbox" name="is-transfer" id="order-is-transfer"/>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="section-fields-transfer">
        <div class="row">
            <div class="col">
                <div class="fieldset">
                    <label for="order-transfer-date">ДАТА</label>
                    <input type="date" name="transfer-date" id="order-transfer-date" placeholder="2020-06-12" />
                </div>
            </div>
            <div class="col">
                <div class="fieldset">
                    <label for="order-transfer-time">ВРЕМЯ</label>
                    <input type="time" name="transfer-date" id="order-transfer-time" placeholder="2020-06-12" />
                </div>
            </div>
        </div>
    </div>

    <div class="fieldset">
        <label>КОМЕНТАРИИ К ЗАКАЗУ</label>
        <textarea name="comment" placeholder="Адрес следования, особые пожелания, детское автокресло и т.д."></textarea>
    </div>

    <div class="row order-footer">
        <div class="col">
            <div>К ОПЛАТЕ<span id="order-calc-result"> __ __ __ __ __ __ </span>Руб.</div>
        </div>
        <div class="col">
            <button class="btn">ЗАКАЗАТЬ ТАКСИ</button>
        </div>
    </div>

</form>

<script>
    (function() {


        
        
        function getNormalValue(value){
            return value < 10 ? '0'+value : value;
        }

        $('#order #order-phone').inputmask({"mask": "+7|(38) (999) 999-9999"});

        $('#order #order-is-transfer').click(function() {
          $('#order .section-fields-transfer').slideToggle(600);
        });

        let time = $('#order .time-now');
        getTime();
        setInterval(function() {
            getTime();
        },60);

        function getTime() {
            let date = new Date();
            time.text(getNormalValue(getNormalValue(date.getHours()+':'+date.getMinutes())));
        }

    })();


    ymaps.ready(init);

    function init() {
        // Стоимость за километр.
        let DELIVERY_TARIFF = 20,
            // Минимальная стоимость.
            MINIMUM_COST = 500,
            myMap = new ymaps.Map('map', {
                center: [60.906882, 30.067233],
                zoom: 9,
                controls: []
            }),
            // Создадим панель маршрутизации.
            routePanelControl = new ymaps.control.RoutePanel({
                options: {
                    // Добавим заголовок панели.
                    showHeader: true,
                    title: 'Расчёт доставки'
                }
            }),
            zoomControl = new ymaps.control.ZoomControl({
                options: {
                    size: 'small',
                    float: 'none',
                    position: {
                        bottom: 145,
                        right: 10
                    }
                }
            });
        // Пользователь сможет построить только автомобильный маршрут.
        routePanelControl.routePanel.options.set({
            //types: {auto: true}
            // Запрещаем показ кнопки, позволяющей менять местами начальную и конечную точки маршрута.
            allowSwitch: false,
            // Включим определение адреса по координатам клика.
            // Адрес будет автоматически подставляться в поле ввода на панели, а также в подпись метки маршрута.
            reverseGeocoding: true,
            // Зададим виды маршрутизации, которые будут доступны пользователям для выбора.
            types: { masstransit: true, pedestrian: true, taxi: true }
        });




        // Если вы хотите задать неизменяемую точку "откуда", раскомментируйте код ниже.
        routePanelControl.routePanel.state.set({
            // Тип маршрутизации.
            type: 'masstransit',
            // Выключим возможность задавать пункт отправления в поле ввода.
            fromEnabled: false,
            // Адрес или координаты пункта отправления.
            from: 'Ялта',
            // Включим возможность задавать пункт назначения в поле ввода.
            toEnabled: false,
            // Адрес или координаты пункта назначения.
            to: 'Симферопольг'
         });



        myMap.controls.add(routePanelControl).add(zoomControl);

        // Получим ссылку на маршрут.
        routePanelControl.routePanel.getRouteAsync().then(function (route) {

            // Зададим максимально допустимое число маршрутов, возвращаемых мультимаршрутизатором.
            route.model.setParams({results: 1}, true);

            // Повесим обработчик на событие построения маршрута.
            route.model.events.add('requestsuccess', function () {

                let activeRoute = route.getActiveRoute();
                if (activeRoute) {
                    // Получим протяженность маршрута.
                    let length = route.getActiveRoute().properties.get("distance"),
                        // Вычислим стоимость доставки.
                        price = calculate(Math.round(length.value / 1000)),

                        
                        // Создадим макет содержимого балуна маршрута.
                        balloonContentLayout = ymaps.templateLayoutFactory.createClass(
                            '<span>Расстояние: ' + length.text + '.</span><br/>' +
                            '<span style="font-weight: bold; font-style: italic">Стоимость доставки: ' + price + ' р.</span>');
                    // Зададим этот макет для содержимого балуна.
                    route.options.set('routeBalloonContentLayout', balloonContentLayout);
                    // Откроем балун.
                    $('#order-calc-result').html(price);
                    activeRoute.balloon.open();
                }
            });

        });
        // Функция, вычисляющая стоимость доставки.
        function calculate(routeLength) {
            return Math.max(routeLength * DELIVERY_TARIFF, MINIMUM_COST);
        }

        function calc() {
            let form = $('#order');
            let valueTypeSeason = form.find('input[name="temperature"]').val();
            let valueTypeTravelFrom = form.find('input[name="type-engine-from"]').val();
            let valueTypeTravelTo = form.find('input[name="type-engine-to"]').val();
            let valueNameCityFrom = form.find('#order-city-from');
            let valueNameCityTo = form.find('#order-city-to');
            let valueFIO = form.find('#order-name');
            let valueTypeEngineFrom = form.find('#order-type-engine');
            let valueOrderNumber = form.find('#order-number');
            let valuePhone = form.find('#order-phone');
            let valueDateFrom = form.find('#order-date-from');
            let valueTimeFrom = form.find('#order-time');
            let valueIsTransferBack = form.find('#order-is-transfer').checked;


        }

    }


</script>

<div id="map"></div>

<style>
    #map{
        height: 800px;
        width: 800px;
    }
</style>