<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Зарегистрировать домен с использованием Анкеты</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
		<a href="#" class="navbar-brand">
			<img src="https://img.icons8.com/nolan/50/api.png" width="30" height="30" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Зарегистрировать домен с помощью ID</a>
				</li>
				<li class="nav-item active">
					<a href="byprofile.php" class="nav-link">Зарегистрировать домен с использованием Анкеты</a>
				</li>
				<li class="nav-item">
					<a href="dnsupdate.php" class="nav-link">Обновление DNS</a>
				</li>
			</ul>
		</div>
	</nav>
	</br>
	<div class="container-fluid">
		<div class="container">
			<div class="row text-center">
				<form class="w-100" action="byprofile.php" method="get">

					<div class="row">
  						<div class="col-sm-8">
    						<label for="nameLocal">*Фамилия, имя, отчество</label>
    						<input type="text" name="nameLocal" class="form-control" id="nameLocal" placeholder="Иванов Иван Иванович" required>
  						</div>
  						<div class="col-sm-4">
  							<label for="birthday">*Дата рождения</label>
 							<input type="date" name="birthday" max="3000-12-31" min="1000-01-01" class="form-control" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-6">
    						<label for="type">*Документ</label>
    						<select name="type" class="form-control" id="type">
      							<option id="client_id_type_passport" value="passport">Паспорт</option><option id="client_id_type_birthcert" value="birthcert">Свидетельство о рождении</option><option id="client_id_type_foreignpass" value="foreignpass">Паспорт иностранного гражданина</option><option id="client_id_type_id" value="id">Удостоверение личности</option><option id="client_id_type_militarycard" value="militarycard">Военный билет</option><option id="client_id_type_militaryid" value="militaryid">Удостоверение личности военнослужащего</option><option id="client_id_type_residencecert" value="residencecert">Вид на жительство</option><option id="client_id_type_sailorpass" value="sailorpass">Паспорт моряка</option><option id="client_id_type_tempid" value="tempid">Временное удостоверение личности</option><option id="client_id_type_other" value="other">Другой</option>
    						</select>
  						</div>
  						<div class="col-sm-3">
 							<label for="series">*Серия</label>
    						<input type="text" name="series" class="form-control" id="series" placeholder="AA" required>
  						</div>
  						<div class="col-sm-3">
    						<label for="number">*Номер</label>
    						<input type="text" name="number" class="form-control" id="number" placeholder="123456" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-8">
  							<label for="issuer">*Выдан</label>
    						<input type="text" name="issuer" class="form-control" id="issuer" placeholder="27 отделением полиции г. Москвы" required>
  						</div>
 						<div class="col-sm-4">
  							<label for="issued">*Дата выдачи</label>
 							<input type="date" name="issued" max="3000-12-31" min="1000-01-01" class="form-control" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-4">
    						<label for="index">*Индекс</label>
      						<input type="index" name="index" class="form-control" id="index" placeholder="123456">
  						</div>
  						<div class="col-sm">
    						<label for="country">*Страна</label>
    						<select name="country" class="form-control" id="country">
      							<option id="client_post_country_RU" value="RU">Россия</option><option id="client_post_country_UA" value="UA">Украина</option><option id="client_post_country_АБ" value="АБ">Абхазия</option><option id="client_post_country_AU" value="AU">Австралия</option><option id="client_post_country_AT" value="AT">Австрия</option><option id="client_post_country_AZ" value="AZ">Азербайджан</option><option id="client_post_country_AL" value="AL">Албания</option><option id="client_post_country_DZ" value="DZ">Алжир</option><option id="client_post_country_AS" value="AS">Американский Самоа</option><option id="client_post_country_AI" value="AI">Ангилья</option><option id="client_post_country_AO" value="AO">Ангола</option><option id="client_post_country_AD" value="AD">Андорра</option><option id="client_post_country_AQ" value="AQ">Антарктика</option><option id="client_post_country_AG" value="AG">Антигуа и Барбуда</option><option id="client_post_country_AN" value="AN">Антильские острова</option><option id="client_post_country_AE" value="AE">Арабские Эмираты</option><option id="client_post_country_AR" value="AR">Аргентина</option><option id="client_post_country_AM" value="AM">Армения</option><option id="client_post_country_AW" value="AW">Аруба</option><option id="client_post_country_AF" value="AF">Афганистан</option><option id="client_post_country_BS" value="BS">Багамские острова</option><option id="client_post_country_BD" value="BD">Бангладеш</option><option id="client_post_country_BB" value="BB">Барбадос</option><option id="client_post_country_BH" value="BH">Бахрейн</option><option id="client_post_country_BY" value="BY">Беларусь</option><option id="client_post_country_BZ" value="BZ">Белиз</option><option id="client_post_country_BE" value="BE">Бельгия</option><option id="client_post_country_BJ" value="BJ">Бенин</option><option id="client_post_country_BM" value="BM">Бермуды</option><option id="client_post_country_BG" value="BG">Болгария</option><option id="client_post_country_BO" value="BO">Боливия</option><option id="client_post_country_BA" value="BA">Босния и Герцеговина</option><option id="client_post_country_BW" value="BW">Ботсвана</option><option id="client_post_country_BR" value="BR">Бразилия</option><option id="client_post_country_IO" value="IO">Британские территории Индийского океана</option><option id="client_post_country_BN" value="BN">Бруней</option><option id="client_post_country_BF" value="BF">Буркина Фасо</option><option id="client_post_country_BI" value="BI">Бурунди</option><option id="client_post_country_BT" value="BT">Бутан</option><option id="client_post_country_VU" value="VU">Вануату</option><option id="client_post_country_VA" value="VA">Ватикан</option><option id="client_post_country_GB" value="GB">Великобритания</option><option id="client_post_country_HU" value="HU">Венгрия</option><option id="client_post_country_VE" value="VE">Венесуэла</option><option id="client_post_country_VG" value="VG">Виргинские острова (Британские)</option><option id="client_post_country_VI" value="VI">Виргинские острова (США)</option><option id="client_post_country_VN" value="VN">Вьетнам</option><option id="client_post_country_GA" value="GA">Габон</option><option id="client_post_country_HT" value="HT">Гаити</option><option id="client_post_country_GY" value="GY">Гайана</option><option id="client_post_country_GM" value="GM">Гамбия</option><option id="client_post_country_GH" value="GH">Гана</option><option id="client_post_country_GP" value="GP">Гваделупа</option><option id="client_post_country_GT" value="GT">Гватемала</option><option id="client_post_country_GN" value="GN">Гвинея</option><option id="client_post_country_GW" value="GW">Гвинея-Бисау</option><option id="client_post_country_DE" value="DE">Германия</option><option id="client_post_country_GI" value="GI">Гибралтар</option><option id="client_post_country_HN" value="HN">Гондурас</option><option id="client_post_country_HK" value="HK">Гонконг (Китай)</option><option id="client_post_country_GD" value="GD">Гренада</option><option id="client_post_country_GL" value="GL">Гренландия</option><option id="client_post_country_GR" value="GR">Греция</option><option id="client_post_country_GE" value="GE">Грузия</option><option id="client_post_country_GU" value="GU">Гуам</option><option id="client_post_country_DK" value="DK">Дания</option><option id="client_post_country_CD" value="CD">Демократическая республика Конго</option><option id="client_post_country_DJ" value="DJ">Джибути</option><option id="client_post_country_DM" value="DM">Доминика</option><option id="client_post_country_DO" value="DO">Доминиканская республика</option><option id="client_post_country_EG" value="EG">Египет</option><option id="client_post_country_ZM" value="ZM">Замбия</option><option id="client_post_country_EH" value="EH">Западная Сахара</option><option id="client_post_country_ZW" value="ZW">Зимбабве</option><option id="client_post_country_IL" value="IL">Израиль</option><option id="client_post_country_IN" value="IN">Индия</option><option id="client_post_country_ID" value="ID">Индонезия</option><option id="client_post_country_JO" value="JO">Иордания</option><option id="client_post_country_IQ" value="IQ">Ирак</option><option id="client_post_country_IR" value="IR">Иран</option><option id="client_post_country_IE" value="IE">Ирландия</option><option id="client_post_country_IS" value="IS">Исландия</option><option id="client_post_country_ES" value="ES">Испания</option><option id="client_post_country_IT" value="IT">Италия</option><option id="client_post_country_YE" value="YE">Йемен</option><option id="client_post_country_KZ" value="KZ">Казахстан</option><option id="client_post_country_KY" value="KY">Каймановы острова</option><option id="client_post_country_KH" value="KH">Камбоджа</option><option id="client_post_country_CM" value="CM">Камерун</option><option id="client_post_country_CA" value="CA">Канада</option><option id="client_post_country_QA" value="QA">Катар</option><option id="client_post_country_KE" value="KE">Кения</option><option id="client_post_country_CY" value="CY">Кипр</option><option id="client_post_country_KI" value="KI">Кирибати</option><option id="client_post_country_CN" value="CN">Китайская Народная Республика</option><option id="client_post_country_CC" value="CC">Кокосовые острова</option><option id="client_post_country_CO" value="CO">Колумбия</option><option id="client_post_country_KM" value="KM">Коморские острова</option><option id="client_post_country_CG" value="CG">Конго</option><option id="client_post_country_KP" value="KP">Корейская Народная Демократическая республика</option><option id="client_post_country_KR" value="KR">Корея</option><option id="client_post_country_CR" value="CR">Коста Рика</option><option id="client_post_country_CI" value="CI">Кот-д&#39;Ивуар</option><option id="client_post_country_CU" value="CU">Куба</option><option id="client_post_country_KW" value="KW">Кувейт</option><option id="client_post_country_KG" value="KG">Кыргызстан</option><option id="client_post_country_LA" value="LA">Лаос</option><option id="client_post_country_LV" value="LV">Латвия</option><option id="client_post_country_LS" value="LS">Лесото</option><option id="client_post_country_LR" value="LR">Либерия</option><option id="client_post_country_LB" value="LB">Ливан</option><option id="client_post_country_LY" value="LY">Ливия</option><option id="client_post_country_LT" value="LT">Литва</option><option id="client_post_country_LI" value="LI">Лихтенштейн</option><option id="client_post_country_LU" value="LU">Люксембург</option><option id="client_post_country_MU" value="MU">Маврикий</option><option id="client_post_country_MR" value="MR">Мавритания</option><option id="client_post_country_MG" value="MG">Мадагаскар</option><option id="client_post_country_YT" value="YT">Майотта</option><option id="client_post_country_MO" value="MO">Макао (Китай)</option><option id="client_post_country_MK" value="MK">Македония</option><option id="client_post_country_MW" value="MW">Малави</option><option id="client_post_country_MY" value="MY">Малайзия</option><option id="client_post_country_ML" value="ML">Мали</option><option id="client_post_country_MV" value="MV">Мальдивские острова</option><option id="client_post_country_MT" value="MT">Мальта</option><option id="client_post_country_MP" value="MP">Марианские острова</option><option id="client_post_country_MA" value="MA">Марокко</option><option id="client_post_country_MQ" value="MQ">Мартиника</option><option id="client_post_country_MH" value="MH">Маршалловы острова</option><option id="client_post_country_MX" value="MX">Мексика</option><option id="client_post_country_FM" value="FM">Микронезия</option><option id="client_post_country_MZ" value="MZ">Мозамбик</option><option id="client_post_country_MD" value="MD">Молдова</option><option id="client_post_country_MC" value="MC">Монако</option><option id="client_post_country_MN" value="MN">Монголия</option><option id="client_post_country_MS" value="MS">Монтсеррат</option><option id="client_post_country_MM" value="MM">Мьянма</option><option id="client_post_country_NA" value="NA">Намибия</option><option id="client_post_country_NR" value="NR">Науру</option><option id="client_post_country_NP" value="NP">Непал</option><option id="client_post_country_NE" value="NE">Нигер</option><option id="client_post_country_NG" value="NG">Нигерия</option><option id="client_post_country_NL" value="NL">Нидерланды</option><option id="client_post_country_NI" value="NI">Никарагуа</option><option id="client_post_country_NU" value="NU">Ниуэ</option><option id="client_post_country_NZ" value="NZ">Новая Зеландия</option><option id="client_post_country_NC" value="NC">Новая Каледония</option><option id="client_post_country_NO" value="NO">Норвегия</option><option id="client_post_country_OM" value="OM">Оман</option><option id="client_post_country_WF" value="WF">острова Валлис и Футуна</option><option id="client_post_country_HM" value="HM">острова Герда и МакДональда</option><option id="client_post_country_CV" value="CV">острова Зеленого Мыса</option><option id="client_post_country_CK" value="CK">острова Кука</option><option id="client_post_country_WS" value="WS">острова Самоа</option><option id="client_post_country_SJ" value="SJ">острова Свалбард и Ян Майен</option><option id="client_post_country_TC" value="TC">острова Туркс и Кайкос</option><option id="client_post_country_BV" value="BV">остров Буве</option><option id="client_post_country_NF" value="NF">остров Норфолк</option><option id="client_post_country_PN" value="PN">остров Питкэрн</option><option id="client_post_country_CX" value="CX">остров Рождества</option><option id="client_post_country_SH" value="SH">остров Святой Елены</option><option id="client_post_country_UM" value="UM">Отдаленные Острова США</option><option id="client_post_country_PK" value="PK">Пакистан</option><option id="client_post_country_PW" value="PW">Палау</option><option id="client_post_country_PS" value="PS">Палестина</option><option id="client_post_country_PA" value="PA">Панама</option><option id="client_post_country_PG" value="PG">Папуа - Новая Гвинея</option><option id="client_post_country_PY" value="PY">Парагвай</option><option id="client_post_country_PE" value="PE">Перу</option><option id="client_post_country_PL" value="PL">Польша</option><option id="client_post_country_PT" value="PT">Португалия</option><option id="client_post_country_PR" value="PR">Пуэрто-Рико</option><option id="client_post_country_RE" value="RE">Реюньон</option><option id="client_post_country_RW" value="RW">Руанда</option><option id="client_post_country_RO" value="RO">Румыния</option><option id="client_post_country_SV" value="SV">Сальвадор</option><option id="client_post_country_SM" value="SM">Сан-Марино</option><option id="client_post_country_ST" value="ST">Сан-Томе и Принсипи</option><option id="client_post_country_SA" value="SA">Саудовская Аравия</option><option id="client_post_country_SZ" value="SZ">Свазиленд</option><option id="client_post_country_SC" value="SC">Сейшельские острова</option><option id="client_post_country_SN" value="SN">Сенегал</option><option id="client_post_country_PM" value="PM">Сен-Пьер и Микелон</option><option id="client_post_country_VC" value="VC">Сент-Винсент и Гренадины</option><option id="client_post_country_KN" value="KN">Сент-Китс и Невис</option><option id="client_post_country_LC" value="LC">Сент-Люсия</option><option id="client_post_country_RS" value="RS">Сербия</option><option id="client_post_country_SG" value="SG">Сингапур</option><option id="client_post_country_SY" value="SY">Сирия</option><option id="client_post_country_SK" value="SK">Словакия</option><option id="client_post_country_SI" value="SI">Словения</option><option id="client_post_country_US" value="US">Соединенные Штаты Америки</option><option id="client_post_country_SB" value="SB">Соломоновы острова</option><option id="client_post_country_SO" value="SO">Сомали</option><option id="client_post_country_SD" value="SD">Судан</option><option id="client_post_country_SR" value="SR">Суринам</option><option id="client_post_country_SL" value="SL">Сьерра-Леоне</option><option id="client_post_country_TJ" value="TJ">Таджикистан</option><option id="client_post_country_TW" value="TW">Тайвань (Республика Китай)</option><option id="client_post_country_TH" value="TH">Тайланд</option><option id="client_post_country_TZ" value="TZ">Танзания</option><option id="client_post_country_TG" value="TG">Того</option><option id="client_post_country_TK" value="TK">Токелау</option><option id="client_post_country_TO" value="TO">Тонга</option><option id="client_post_country_TT" value="TT">Тринидад и Тобаго</option><option id="client_post_country_TV" value="TV">Тувалу</option><option id="client_post_country_TN" value="TN">Тунис</option><option id="client_post_country_TM" value="TM">Туркменистан</option><option id="client_post_country_TR" value="TR">Турция</option><option id="client_post_country_UG" value="UG">Уганда</option><option id="client_post_country_UZ" value="UZ">Узбекистан</option><option id="client_post_country_UY" value="UY">Уругвай</option><option id="client_post_country_FO" value="FO">Фарерские острова</option><option id="client_post_country_FJ" value="FJ">Фиджи</option><option id="client_post_country_PH" value="PH">Филиппины</option><option id="client_post_country_FI" value="FI">Финляндия</option><option id="client_post_country_FK" value="FK">Фолклендские (Мальвинские) острова</option><option id="client_post_country_FR" value="FR">Франция</option><option id="client_post_country_GF" value="GF">Французская Гвиана</option><option id="client_post_country_PF" value="PF">Французская Полинезия</option><option id="client_post_country_TF" value="TF">Французские Южные Территории</option><option id="client_post_country_HR" value="HR">Хорватия</option><option id="client_post_country_CF" value="CF">Центральная Африканская Республика</option><option id="client_post_country_TD" value="TD">Чад</option><option id="client_post_country_ME" value="ME">Черногория</option><option id="client_post_country_CZ" value="CZ">Чехия</option><option id="client_post_country_CL" value="CL">Чили</option><option id="client_post_country_CH" value="CH">Швейцария</option><option id="client_post_country_SE" value="SE">Швеция</option><option id="client_post_country_LK" value="LK">Шри Ланка</option><option id="client_post_country_EC" value="EC">Эквадор</option><option id="client_post_country_GQ" value="GQ">Экваториальная Гвинея</option><option id="client_post_country_ER" value="ER">Эритрея</option><option id="client_post_country_EE" value="EE">Эстония</option><option id="client_post_country_ET" value="ET">Эфиопия</option><option id="client_post_country_ZA" value="ZA">ЮАР</option><option id="client_post_country_YU" value="YU">Югославия</option><option id="client_post_country_GS" value="GS">Южная Георгия и Южные Сандвичевы острова</option><option id="client_post_country_ЮО" value="ЮО">Южная Осетия</option><option id="client_post_country_JM" value="JM">Ямайка</option><option id="client_post_country_JP" value="JP">Япония</option><option id="client_post_country_ХЗ" value="ХЗ">Неизвестно</option></select>
    						</select>
  						</div>
  						<div class="col-sm-4">
    						<label for="city">*Город</label>
    						<input type="text" name="city" class="form-control" id="city" placeholder="Москва" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm">
  							<label for="street">*Адрес</label>
    						<input type="text" name="street" class="form-control" id="street" placeholder="ул. Ивановская, д. 10, корп. 2, кв. 33" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-6">
  							<label for="phones">*Телефоны</label>
    						<input type="text" name="phones" class="form-control" id="phones" placeholder="+7 123 4567890, +7 321 0987654" required>
    						<small id="emailHelp" class="form-text text-muted">Несколько телефонов указать через запятую.</small>
  						</div>
  						<div class="col-sm-6">
  							<label for="emails">*E-mails</label>
    						<input type="text" name="emails" class="form-control" id="emails" placeholder="ivanov@ivan.ru, ivan@ivanos.ru" required>
    						<small id="emailHelp" class="form-text text-muted">Несколько e-mail'ов указать через запятую.</small>
  						</div>
  					</div>
  					</br>

					<div class="row">
  						<div class="col-sm">
    						<label for="donainName">*Имя домена</label>
    						<input type="text" name="donainName" class="form-control" id="donainName" placeholder="example.ru" required>
    						<small id="emailHelp" class="form-text text-muted">domain.ru или domain.su или домен.рф или xn--d1acufc.xn--p1ai</small>
  						</div>
  						<div class="col-sm-2">
    						<label for="period">Период регистрации</label>
    						<input type="number" name="period" class="form-control" id="period" placeholder="1">
    						<small id="emailHelp" class="form-text text-muted">По умолчанию 1 год</small>
  						</div>
  						<div class="col-sm-5">
    						<label for="comment">Комментарий</label>
    						<input type="text" name="comment" class="form-control" id="comment">
  						</div>
  					</div>
  					</br>

					<small id="emailHelp" class="form-text text-muted">* - обязательные для заполнения поля</small>
					</br>
  					<button type="submit" class="btn btn-primary">Зарегистрировать</button>
  					<a href="byprofile.php" class="btn btn-light"><img src="https://img.icons8.com/nolan/64/available-updates.png" width="30" height="30" alt="logo"></a>
				</form>
			</div>			
		</div>
	</div>
	</br>
	<div class="container-fluid">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<?php 
						require_once 'api_class.php';
						if(isset($_GET['donainName'])){
							$api = new Api;
							$period; if (empty($_GET['period'])){$period = 1;} else {$period = $_GET['period'];};
							$comment; if (empty($_GET['comment'])){$comment = null;} else {$comment = $_GET['comment'];};
							$emails = explode(", ", $_GET['emails']);
							$phones = explode(", ", $_GET['phones']);
							$response = $api->ClientCreate($_GET['nameLocal'], $_GET['birthday'], $_GET['type'], $_GET['series'], $_GET['number'], $_GET['issuer'], $_GET['issued'], $emails, $phones, $_GET['index'], $_GET['country'], $_GET['city'], $_GET['street'], $_GET['donainName'], $period, $comment);
							echo "$response";
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>