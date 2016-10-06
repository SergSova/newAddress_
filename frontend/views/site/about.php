<?php

    /* @var $this yii\web\View */

?>
<?php if($this->beginCache('about', ['dependency' => ['class' => 'yii\caching\FileDependency', 'fileName' => __DIR__.'/about.php']])): ?>
    <div class="section scrollspy no-pad" id="about">
        <h2 class="mypallete white-text center section-title">Информация о нашем Агентстве недвижимости</h2>
        <div class="container">

            <p class="flow-text about-description">
                За много лет работы на рынке застройщик “Новый адрес” изучил потребности клиентов и точно знает, что предложить каждому
                из вас. Мы перепробовали много технологий, материалов, способов строительства и выбрали самые лучшие, чтобы дарить вам комфорт и
                тепло.
                Ищете новое жилье, в котором можно было бы находиться круглый год? Нет проблем! Обращайтесь к застройщику и агентству
                недвижимости в Москве “Новый адрес”.
            </p>
            <h3>10 причин, почему вам стоит покупать дома у нас</h3>
            <ul class="about-list browser-default">
                <li>
                    <p class="flow-text">Вы сможете выбрать для себя оптимальное соотношение “цена - качество”. Мы предлагаем множество объектов по
                        доступной цене.
                </li>
                <li>
                    <p class="flow-text">Вы будете жить в том районе, в котором сами захотите: у нас огромный выбор домов в Подмосковье - от
                        Ленинградского до
                        Носовихинского
                        шоссе.
                </li>
                <li>
                    <p class="flow-text">У вас будет определенное место жительства - на каждый участок есть право собственности, поэтому вы сможете
                        прописаться в доме.
                </li>
                <li>
                    <p class="flow-text ">Вам не надо переживать за обустройство жилья, мы строим дома в Подмосковье “под ключ” - выполняем всю
                        внутреннюю
                        отделку, заводим
                        коммуникации. Вам остается только завезти мебель и заселяться!
                </li>
                <li><p class="flow-text ">После покупки, вы сможете жить в новом доме круглый год. Мы заботимся о том, чтобы у наших клиентов была
                        возможность подъехать на
                        машине
                        ко всем объектам в любую погоду.
                </li>
                <li><p class="flow-text ">С нашим агентством недвижимости в Москве вы подберете дом с той инфраструктурой, которая нужна именно вам.
                        Хотите
                        жить рядом со
                        школой,
                        детским садом или рядом с вокзалом? Не проблема, найдем для вас подходящий объект!
                </li>
                <li><p class="flow-text ">Вы можете быть уверены в качестве работы застройщика. Все дома в Подмосковье строятся по современным
                        европейским технологиям.
                </li>
                <li><p class="flow-text ">Наше агентство недвижимости работает уже 10 лет на Московском рынке, и за это время зарекомендовало
                        себя как надежный партнер.
                </li>
                <li><p class="flow-text ">С вами работают опытные специалисты: у нас вы можете получить юридическое сопровождение сделок, помощь в
                        оформлении ипотеки и другие
                        услуги.
                </li>
                <li><p class="flow-text ">За время нашей работы уже более 100 человек стали счастливыми обладателями комфортных домов в Подмосковье.
                </li>
            </ul>

        </div>
    </div>
    <?php $this->endCache() ?>
<?php endif; ?>
