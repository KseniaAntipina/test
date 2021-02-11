<?php
use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';



$html = '

<htmlpagefooter name="MyFooter-gray-border">
    <table width="100%" style="padding: 20px 0 26px 53px;vertical-align:midle;border-top: 0.5px solid #D1D1D1;z-index:100;">
    <tr>
    <td><img src="./assets/logo.svg" style="max-width:102px;height: 52px;"></td>
    <td style="font-family:roboto-regular; font-weight: 400; font-size: 11px; line-height: 16px; color:#AEB8BE;padding-left:25px; "> 
    <p> Персональные генетические тесты: Здоровье | долголетие | диетология | витамины | национальность | красота | спорт | питание | заболевания | происхождение рода </p>
    <p> 8 800 3501 226 | order@genomed.ru | все тесты на <a href="https://genomed.ru" style="color:#AEB8BE;text-decoration:none;">https://genomed.ru</a>  </p>
    </td>
    </tr>
    </table>
</htmlpagefooter>


<style>
@page {
margin: 0;
padding: 0;
margin-footer:0;
}

ul {
    list-style-type:none;
}

.cover {
   background-color: #000;
    color: #fff;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
}
.cover-wrap {
    background: url("./assets/bg1.png") no-repeat;
    background-image-resize: 4;
    background-position: bottom center;
    width: 100%;
    height: 100%;
}
.cover__titles {
    padding-top:255px;
    text-align:center;
}
.cover__titles h1 {
    font-family: montserrat-medium;
    font-weight: 500;
    font-size: 28px;
    line-height: 42px;
    height:83px;
    margin-bottom:0px;
    padding-bottom:0;
    text-transform: uppercase;
}
.cover .subtitle {
    font-family: montserrat-medium; 
    font-size: 18px;
    line-height: 27px;
    font-weight: 500;
}
.cover .subtitle2 {
    font-family: montserrat-medium; 
    font-size: 24px;
    line-height: 36px;
    font-weight: 500;
}
.page {
    padding-top: 60px;
    padding-left: 53px;
    padding-right:53px;
}

.page2, .page3 {
    background-image-resize: 4;
    background-position: top center;
    width: 100%;
    height: 100%;
}

.page2 {
    background: url("./assets/bg2.png") no-repeat;
}

.page3 {
    background: url("./assets/bg3.png") no-repeat;
}


.page h2 {
    font-family: montserrat-bold;
    font-weight: normal;
    font-size: 24px;
    line-height: 36px;
    margin-top:0;
    color: #222222;
}

.page h2.white {
    color: #fff;
}


.page .content-text p {
   font-family: roboto-regular;
    font-size: 14px;
    line-height: 21px;
}

.page2 p , .page3 p, {
    color: #fff;
    margin-bottom: 20px;
}

.page4 .page4-tabl1 tr td {
    padding-bottom:5px;
    color: #222222;
    font-family:roboto-regular;
    font-size: 16px;
    line-height: 24px;
}

.page4 .page4-tabl1 tr td.left-title {
    padding-right:80px;
}

.page4-tabl2, .page5-tabl1, .page6-tabl1 {
    border-collapse:collapse;
}

.page4-tabl2 tr.rowValue td , .page5-tabl1 tr.rowValue td, .page6-tabl1 tr.rowValue td{
    text-align:center;
}

.page4-tabl2 tr.row1 td.blue-td ,.page5-tabl1 tr.row1 td.blue-td, .page6-tabl1 tr.row1 td.blue-td {
    text-align:center;
    font-family: roboto-bold;
    font-size: 16px;
    line-height: 150%;
    color: #FFFFFF;
}

.page4-tabl2 .rowValue td,  .page5-tabl1 .rowValue td, .page6-tabl1 .rowValue td{
    line-height: 21px;
    text-align:center;
    font-family: roboto-medium;
    color: #222222;
}

.page7 {
    background: url("./assets/bg7.png") no-repeat;
    background-image-resize: 4;
    background-position: center center;
    width: 100%;
    height: 100%;
}

.page7 .content-item__title {
    font-family: roboto-medium;
    font-size: 16px;
    margin:0;
    padding: 0 0 15px 0;
}

.page7 .content-item {
    font-family: roboto-regular;
    font-size: 16px;
    line-height: 24px;
    width: 764px;
    margin:0;
    padding:0;
}

.page7 .content-item1 {
    margin-bottom: 30px;
}

.page7 .content-item2 {
    margin:0;
    padding:0;
}

.page7 .content-item2 p {
    font-family: roboto-regular;
    font-size: 16px;
    line-height: 24px;
}


.page7 .content-item1 p, .page7 .content-item1 ul , .page7 .content-item1 ul li{
    margin:0;
    padding: 0 0 10px 0;
    font-family: roboto-regular;
    font-size: 16px;
    line-height: 24px;
}

 

</style>

<sethtmlpagefooter name="MyFooter-gray-border" value="on" />
    <div class="cover">
    <div class="cover-wrap">
        <div class="cover__titles">
            <p class="subtitle">Персональный отчет</p>
            <h1>«Оценка генетической<br> предрасположенности к занятиям спортом»</h1>
            <p class="subtitle2">Иванов Иван Иванович</p>
        </div>
    </div>
</div> 


<div class="page page2" style="page-break-before:left;">
    <h2 class="white"> Генетика в обычной жизни </h2>
    <div class="page2__content content-text" style="width:556px">
        <p>
        В спиральной структуре ДНК содержится всего четыре вида нуклеотидов: A, T, G, C. Они располагаются в определенной последовательности и составляют цепочку размером 3,1 миллиарда нуклеотидов. Это и есть генетический код, в котором заложена вся программа функционирования организма человека. Вся цепочка ДНК поделена на функциональные фрагменты — гены, которые кодируют белки организма, регулируют активность ферментов и выполняют множество других функций. Но гены не одинаковы у разных людей. Один и тот же ген может иметь незначительные отличия в структуре — полиморфизмы, когда один нуклеотид меняется на другой, исчезает или удваивается. При этом меняется и функция гена или его активность.
        </p>
        <p>
        Полиморфизмы генов определяют внешние признаки, такие как цвет волос или глаз, особенности усвоения пищи, склонность к набору веса, психические особенности, склонность к заболеваниям и многое другое. Полиморфизмы гена, отвечающего за быстрый набор массы тела и медленное похудение, были значимы для выживания человека в далекие первобытные времена, но теперь от такого влияния больше вреда. Тогда как, например, гены, которые отвечают за развитие интеллекта, речи, языковых способностей, сейчас намного более существенны для полноценной качественной жизни. Скажем, полиморфизмы гена, отвечающего за структуру или цвет волос, нейтральны и не особо важны, тогда как полиморфизмы гена, отвечающего за склонность к возникновению диабета крайне желательно проанализировать. 
        </p>
    </div>
</div>
<sethtmlpagefooter name="MyFooter-gray-border" value="on" />

<div class="page page3" style="page-break-before:left;">
    <h2 class="white"> Генетика в обычной жизни </h2>
    <div class="page3__content content-text" style="width:60%">
        <p>
            Прекрасная новость,  что в наше время есть возможность разобраться, какие факторы риска находятся в вашем индивидуальном генетическом коде. Это даст важнейшую информацию для предотвращения влияния вредных наследственных или внешних факторов. Знание генетических особенностей своего организма может помочь в разработке индивидуальной программы профилактики и диагностики, а также полезно в целом для мотивации человека к здоровому образу жизни и контроля своего здоровья. И если человек будет соблюдать все предписания врача, вести определённый образ жизни, то можно снизить риск возникновения заболеваний. Кроме того, многие заболевания вызываются определёнными факторами, которые можно исключить, либо ограничить в повседневной жизни. Так, например, человек, который не пьёт молоко, никогда не почувствует симптомов непереносимости лактозы, даже когда его генетический код содержит такую особенность. В то же время следует знать, что генетический фактор не является определяющим для большинства заболеваний. И хотя для некоторых заболеваний, таких, например, как рак молочной железы наличие определенных генетических вариантов связано с вероятностью развития заболевания в 80% случаев для большинства заболеваний значение генетического фактора не превышает 10 - 15%. Для таких заболеваний большее значение имеет образ жизни, питание, факторы окружающей среды.
            Во многих случаях значимые риски связаны с хроническими инфекциями. Таким образом, данные генетического обследования не являются самостоятельными факторами, и их значение для каждого конкретного человека определяется врачом на основании совокупности всех клинических данных.        
        </p>
        <p>
            Узнайте больше о своем здоровье, посоветуйтесь с врачом, примите меры. Это поможет сохранить здоровье и хорошее самочувствие на долгие годы. 
        </p>
    </div>
</div>
<sethtmlpagefooter name="MyFooter-gray-border" value="on" />

<div class="page page4" style="page-break-before:left;">
    <h2 style="margin-bottom:34px;">Результаты лабораторного исследования</h2>
    <div class="page4__content content-text">
        <table style="margin-bottom:22px;" class="page4-tabl1">
            <tr>
                <td class="left-title">Наименование исследования:</td>
                <td class="content">Спорт. Оценка генетической предрасположенности к занятиям спортом</td>
            </tr>
            <tr>
                <td class="left-title">Заказчик:</td>
                <td class="content">Иванов Иван Иванович</td>
            </tr>
            <tr>
                <td class="left-title">Дата рождения:</td>
                <td class="content">11.12.1986</td>
            </tr>
            <tr>
                <td class="left-title">Пол:</td>
                <td class="content">мужской</td>
            </tr>
            <tr>
                <td class="left-title">Номер исследования:</td>
                <td class="content">177950</td>
            </tr>
        </table>

        <div style="padding: 25px 16px 13px 16px;border:1px solid #E5ECF0;" >
            
                <table class="page4-tabl2" style="width:994px">
                    <tr class="row1" style="padding-bottom:21px;background: #23A7FF;">
                        <td class="blue-td blue-td1" style="width:33.33%">
                            Ген
                        </td>   
                        <td class="blue-td blue-td2" style="width:33.33%">
                            Полиморфизм
                        </td>
                     
                        <td class="blue-td blue-td3" style="width:33.33%">
                            Ваш генотип
                        </td>
                    </tr>
                    <tr><td height="13px"></td></tr>
                    <tr class="rowValue">
                        <td class="col1">ACE</td>
                        <td class="col2">rs4341</td>
                        <td class="col3">C/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">ACTN3</td>
                        <td class="col2">rs1815739</td>
                        <td class="col3">C/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">ADRB2</td>
                        <td class="col2">rs1042713</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">AGT</td>
                        <td class="col2">rs699</td>
                        <td class="col3">T/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">AGTR2</td>   
                        <td class="col2">rs11091046</td>
                        <td class="col3">A/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">AHSG</td>
                        <td class="col2">rs4917</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">AMPD1</td>                     
                        <td class="col2">rs17602729</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">AQP1</td> 
                        <td class="col2">rs1049305</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">ARHGEF28</td> 
                        <td class="col2">rs17664695</td>
                        <td class="col3">A/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">CALCR</td>
                        <td class="col2">rs17734766</td>
                        <td class="col3">A/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">CKM</td>
                        <td class="col2">rs8111989</td>
                        <td class="col3">T/C</td>
                    </tr>
                </table>
            
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter-gray-border" value="on" />

<div class="page page5" style="page-break-before:left;">
    <h2 style="margin-bottom:14px;">Результаты лабораторного исследования</h2>
    <div class="page5__content content-text">
        <div style="padding: 25px 16px 13px 16px;border:1px solid #E5ECF0;">         
                <table class="page5-tabl1" style="width:994px">
                    <tr class="row1" style="padding-bottom:21px;background: #23A7FF;">
                        <td class="blue-td blue-td1" style="width:33.33%">
                            Ген
                        </td>   
                        <td class="blue-td blue-td2" style="width:33.33%">
                            Полиморфизм
                        </td>
                     
                        <td class="blue-td blue-td3" style="width:33.33%">
                            Ваш генотип
                        </td>
                    </tr>
                    <tr><td height="13px"></td></tr>
                    <tr class="rowValue">
                        <td class="col1">COL5A1</td>
                        <td class="col2">rs12722</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">COMT</td>
                        <td class="col2">rs4680</td>
                        <td class="col3">G/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">CTC-229L21.1</td>
                        <td class="col2">rs6878578</td>
                        <td class="col3">T/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">DMD</td>
                        <td class="col2">rs939787</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">G6PC2</td>   
                        <td class="col2">rs560887</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">GALNT13</td>
                        <td class="col2">rs10196189</td>
                        <td class="col3">A/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">GBF1</td>                     
                        <td class="col2">rs2273555</td>
                        <td class="col3">G/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">GPC5</td> 
                        <td class="col2">rs852918</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">HFE</td> 
                        <td class="col2">rs1799945</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">HIF1A</td>
                        <td class="col2">rs11549465</td>
                        <td class="col3">C/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">IGF1</td>
                        <td class="col2">rs35767</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">IL6</td>
                        <td class="col2">rs1800795</td>
                        <td class="col3">G/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">KСNJ11</td>
                        <td class="col2">rs5219</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">KIBRA</td>
                        <td class="col2">rs17070145</td>
                        <td class="col3">C/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">LILRB2</td>
                        <td class="col2">rs2361797</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">LRPPRC</td>
                        <td class="col2">rs7582693</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">MCT1</td>
                        <td class="col2">rs1049434</td>
                        <td class="col3">T/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">MPRIP</td>
                        <td class="col2">rs6502557</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">MTHFR</td>
                        <td class="col2">rs1801131</td>
                        <td class="col3">T/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">MYB</td>
                        <td class="col2">rs2050019</td>
                        <td class="col3">C/C</td>
                    </tr>
                </table>
            
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter-gray-border" value="on" />

<div class="page page6" style="page-break-before:left;">
    <h2 style="margin-bottom:34px;">Результаты лабораторного исследования</h2>
    <div class="page6__content content-text">
        <div style="padding: 25px 16px 13px 16px;border:1px solid #E5ECF0;">         
                <table class="page6-tabl1" style="width:994px">
                    <tr class="row1" style="padding-bottom:21px;background: #23A7FF;">
                        <td class="blue-td blue-td1" style="width:33.33%">
                            Ген
                        </td>   
                        <td class="blue-td blue-td2" style="width:33.33%">
                            Полиморфизм
                        </td>
                     
                        <td class="blue-td blue-td3" style="width:33.33%">
                            Ваш генотип
                        </td>
                    </tr>
                    <tr><td height="13px"></td></tr>
                    <tr class="rowValue">
                        <td class="col1">NACC2</td>
                        <td class="col2">rs4409473</td>
                        <td class="col3">C/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">near CNR1</td>
                        <td class="col2">rs3857490</td>
                        <td class="col3">T/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">near SMIM20</td>
                        <td class="col2">rs17685537</td>
                        <td class="col3">A/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">NFIA-AS2</td>
                        <td class="col2">rs1572312</td>
                        <td class="col3">G/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">NOS3</td>   
                        <td class="col2">rs2070744</td>
                        <td class="col3">T/T</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">PPARA</td>
                        <td class="col2">rs4253778</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">PPARG</td>                     
                        <td class="col2">rs1801282</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">PPARGC1A</td> 
                        <td class="col2">rs8192678</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">SLC22A3</td> 
                        <td class="col2">rs2457571</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">SOD2</td>
                        <td class="col2">rs4880</td>
                        <td class="col3">G/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">SUCLA2</td>
                        <td class="col2">rs10397</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">TRHR</td>
                        <td class="col2">rs7832552</td>
                        <td class="col3">C/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">UCP2</td>
                        <td class="col2">rs660339</td>
                        <td class="col3">A/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">UCP3</td>
                        <td class="col2">rs1800849</td>
                        <td class="col3">G/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">UGT2B4</td>
                        <td class="col2">rs17671289</td>
                        <td class="col3">T/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">VEGFA</td>
                        <td class="col2">rs2010963</td>
                        <td class="col3">G/C</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">VEGFR2</td>
                        <td class="col2">rs1870377</td>
                        <td class="col3">T/A</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">WWOX</td>
                        <td class="col2">rs2081174</td>
                        <td class="col3">A/G</td>
                    </tr>
                    <tr class="rowValue">
                        <td class="col1">ZNF608</td>
                        <td class="col2">rs4626333</td>
                        <td class="col3">C/C</td>
                    </tr>
                </table>
            
        </div>
    </div>
</div>
<sethtmlpagefooter name="MyFooter-gray-border" value="on" />


<div class="page page7" style="page-break-before:left;">
     
        <h2 style="margin-bottom:32px;">Примечания</h2>
        <div class="page7__content content-text">
            <div class="content-item content-item1">
                <div class="content-item__title">Примечание 1</div>
                <p>Интерпретация результатов генотипирования проведена на основе авторской разработки.</p>
                <p>Более подробная информация указана в следующих литературных источниках:</p>
                <ul>
                    <li>
                    • Ахметов И.И. Молекулярная генетика спорта. – М. : Советский спорт, 2009. – 268 с.
                    </li>
                    <li>
                    • Sports, Exercise, and Nutritional Genomics: Current Status and Future Directions. Edited by Barh D. and Ahmetov I. – Academic Press, USA. – 2019. – 606 pp.
                    </li>
                </ul>
            </div>
            <div class="content-item content-item2">
                <div class="content-item__title">Примечание 2</div>
                <p style="margin:0;padding:0;">Набор генетических параметров в данном профиле содержит в основном маркеры трех физических качеств (быстрота, сила, выносливость), маркеры морфофункциональных особенностей скелетных мышц и миокарда, а также памяти и стрессоустойчивости. Данный тест не предназначен для определения ловкости, гибкости и творческих способностей. Выданное заключение не гарантирует успеха в спорте без должного развития и реализации своих потенциалов, прилагаемых усилий и подходящих для этого условий. В рекомендациях указаны те виды спорта, в которых можно добиться высоких результатов за счет правильного построения тренировочного процесса, адекватного питания, мотивации, медицинского обеспечения и многих других факторов.</p>
            </div>
        </div>
    
</div>
<sethtmlpagefooter name="MyFooter-gray-border" value="on" />









';



$mpdf = new Mpdf(['mode' => 'UTF-8', 'format' => [297, 210]]);

$mpdf->WriteHTML($html);
$mpdf->Output();
