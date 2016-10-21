<?php
    /**
     * @var \yii\web\View                $this
     * @var \frontend\models\Search      $searchModel
     * @var \yii\data\ActiveDataProvider $dataProvider
     */
    use frontend\assets\CatalogAsset;
    use yii\widgets\ListView;
    use yii\widgets\Pjax;

    $this->title = 'Купить дом в подмосковье - недорого!';
    $this->registerMetaTag([
                               'name'    => 'description',
                               'content' => 'Хотите купить дом в подмосковье от застройщика? Значит Вам нужно к нам! Не только строим дома, но и помогаем с покупкой',
                           ]);
    $this->registerMetaTag([
                               'name'    => 'keywords',
                               'content' => 'Купить дом недорого, дом в подмосковье, дом в Московской области, дом от застройщика, цены, каталог',
                           ]);
    CatalogAsset::register($this);

?>
<button class="hide-on-large-only" data-activates="mobile-filter" id="showFilter"><i class="material-icons">search</i></button>
<h1 class="center catalog-title-h1">Дома в подмосковье от застройщика</h1>
<div class="row">
    <div class="hide-on-med-and-down" id="filter-box">
        <div class="filter-box">
            <div class="card mypallete white-text">
                <div class="row no-marg-bot">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s6 waves-effect waves-light"><a href="#house">Дома</a></li>
                            <li class="tab col s6 waves-effect waves-light"><a href="#apartment">Квартиры</a></li>
                        </ul>
                    </div>
                    <div class="col s12" id="house">
                        <?= $this->render('_filterHouse', ['searchModel' => $searchModel]) ?>
                    </div>
                    <div class="col s12" id="apartment" style="display: none">
                        <?= $this->render('_filterApartment', ['searchModel' => $searchModel]) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l9 relative">
            <div class="row no-marg-bot">
                <?php Pjax::begin(['id' => 'realty-list']); ?>
                <?= ListView::widget([
                                         'dataProvider' => $dataProvider,
                                         'itemView'     => '_catalog_item',
                                         'layout'       => "<div class='row'>{items}</div><div class='row center'>{pager}</div>",
                                         'pager'        => [
                                             'options'       => ['class' => 'pagination'],
                                             'prevPageLabel' => '<i class="material-icons">chevron_left</i>',
                                             'nextPageLabel' => '<i class="material-icons">chevron_right</i>',
                                             'pageCssClass'  => 'waves-effect',
                                         ],
                                     ]) ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
    <div class="section mypallete white-text text-justify" id="seo-box">
        <div class="container">
            <p class="flow-text">Выбираете недорогой дом в Московской области вдали от городского шума и ближе к природе? На нашем сайте вы можете
                сделать это быстро и без хлопот! В каталоге за считанные минуты вы найдете жилье своей мечты.</p>
        </div>
    </div>
    <div class="section">
        <div class="container text-justify">
            <p class="flow-text">
                Чтобы существенно сократить время просмотра домов от застройщика, воспользуйтесь фильтрами. Для вашего удобства все позиции в каталоге
                можно сортировать по трем критериям.
            <p class="flow-text">
                Цена. Вы устанавливаете цены в диапазоне – от минимальной до максимальной стоимости. Это позволит вам сэкономить время и просматривать
                только ту жилплощадь, которая подходит под ваш бюджет.
            <p class="flow-text">
                Площадь. Установите диапазон размера желаемого дома. Минимальная площадь постройки в нашем каталоге – 72 м2, максимальная – 210 м2.
                Эта функция поможет вам быстро найти подходящее жилое помещение, как для маленькой, так и для большой семьи.
            <p class="flow-text">
                Геолокация. Выбирая дом в Подмосковье от застройщика, вы изучаете только те объекты, которые расположены в нужном вам направлении.
                Также в каталоге вы можете найти актуальные акционные предложение. Рядом с фильтрами есть возможность выбрать объекты, которые
                продаются по акции. Это сэкономит не только драгоценные часы, но и деньги, ведь вы купите качественный дом от застройщика на более
                выгодных условиях – недорого.
            <h2>Покупка дома – дело серьезное!</h2>
            <p class="flow-text">
                Многие покупают жилплощадь в Подмосковье не только для того, чтобы использовать ее как дачу для отдыха, но и для постоянного
                проживания. В таких случаях очень важно присмотреться к тому, насколько качественно построено жилье, какие материалы использовались,
                как его утепляли.
            <p class="flow-text">
                Застройщик «Новый адрес» строит дома по современным технологиям, с использованием качественных и прочных материалов. Все объекты
                возводятся по технологии нагеля – деревянные брусья крепятся между собой нагелями. Новостройки утепляются минеральной ватой и
                теплофлексом.
            <p class="flow-text">
                Особое внимание мы уделяем территории, на которой располагается постройка. На все участки есть право собственности, благодаря этому вы
                можете прописаться по месту жительства. К тому же, к каждому объекту в Подмосковье можно подъехать на машине в любую погоду и время
                года.
            <p class="flow-text">
                Если у вас возникают вопросы или трудности с выбором подходящего здания, позвоните к нам в офис. Опытные специалисты ответят на все
                ваши вопросы и помогут подобрать лучший дом для вашей семьи.
            <p class="flow-text">
                Кроме этого, компания предоставляет специальные услуги, которые облегчат покупку нового жилья. Например, вы арендуете новостройку на
                время с последующим выкупом. Также мы помогаем оформлять ипотеку в банках-партнерах.
            <p class="flow-text">
                Если покупка новой жилплощади в Московской области затягивается из-за того, что вам не удается продать старую, мы поможем вам в этом.
                Наши специалисты найдут покупателей для вашего старого жилья и помогут выбрать и купить новое – более просторное и комфортное.
            <p class="flow-text">
                В нашем агентстве недвижимости вы можете воспользоваться и другими риэлторскими услугами: продажа и покупка жилплощади, помощь в
                оформлении и проведении сделок, юридическое сопровождение и другие.
            <p class="flow-text">
                Мы работаем, чтобы ваша жизнь была комфортной!</p>
        </div>
    </div>
</div>

<div class="side-nav mypallete white-text" id="mobile-filter">
    <?= $this->render('_mobile_filter', ['searchModel' => $searchModel]) ?>
</div>