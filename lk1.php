	<?php include 'header.php'; ?>

	
	<section id="personal">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title single-title">Личный кабинет
					<a href="/" class="back">вернуться назад</a>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="personal-block">
						Константин Константинопольский
						<div class="bonus">Besfo-bonus: <span>155</span> руб.</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 left-menu">
					<ul>
						<li class="m-1 active"><a href="/">Личные данные</a></li>
						<li class="m-2"><a href="/">История заказов</a></li>
						<li class="m-3"><a href="/">Besfo-bonus</a></li>
						<li class="m-4"><a href="/">Служба поддержки</a></li>
					</ul>
				</div>
				<div class="col-lg-9 col-main">
					<div class="tabs-h active">Личные данные</div><div class="tabs-h">Смена пароля</div><div class="tabs-h">Уведомления</div>
					

					<div class="tabs-cont active">
						<div class="title-lk">Ваши данные не будут доступны третьим лицам</div>
						
						<form>
							<div class="lbl"><label><span class="l">Имя</span><input type="text" class="inp-text" placeholder="Введите Ваше имя"></label></div>
							<div class="lbl"><label><span class="l">Фамилия</span><input type="text" class="inp-text" placeholder="Введите Ваше фамилию"></label></div>
							<div class="lbl"><label><span class="l">Отчество</span><input type="text" class="inp-text" placeholder="Введите Ваше отчество"></label></div>
							<div class="lbl"><label><span class="l">Email</span><input type="text" class="inp-text" placeholder="Введите адрес электронной почты"></label></div>
							<div class="lbl"><label><span class="l">Телефон</span><input type="text" class="inp-text" placeholder="+7 XXX XXX XX XX"></label></div>
							<div class="lbl sel-gender sel-lbl">
								<label><span class="l">Пол</span><select class="big-cusel" name="PERSONAL_GENDER">
									<option value="">(неизвестно)</option>
									<option value="M">Мужской</option>
									<option value="F">Женский</option>
								</select>
								</label>
							</div>

							<div class="lbl-half lbl date-lbl"><label><span class="l">Дата рождения</span><input type="text" class="inp-text" placeholder="ДД.ММ.ГГГГ"><span class="calendar-icon"></span></label></div>

							<div class="lbl sel-auto">
								<label><span class="l">Ваш автомобиль</span><select class="big-cusel" name="">
									<option value="">Марка</option>
									<option value="1">Марка 1</option>
									<option value="2">Марка 2</option>
								</select><select class="big-cusel" name="">
									<option value="">Модель</option>
									<option value="1">Марка 1</option>
									<option value="2">Марка 2</option>
								</select><span class="clearfix"></span><select class="big-cusel" name="">
									<option value="">Модификация</option>
									<option value="1">Марка 1</option>
									<option value="2">Марка 2</option>
								</select><select class="big-cusel" name="">
									<option value="">Год выпуска</option>
									<option value="1">Марка 1</option>
									<option value="2">Год выпуска</option>
								</select>
								</label>
							</div>
							<div class="clearfix"></div>
							<div class="addr-section">
								<div class="lbl sel-сcontry sel-lbl">
									<label><span class="l">Страна</span><select class="big-cusel" name="">
										<option value="">Россия</option>
										<option value="M">Россия</option>
										<option value="F">Россия</option>
									</select>
									</label>
								</div>
								<div class="lbl"><label><span class="l">Субъект РФ</span><input type="text" class="inp-text" placeholder="Область/республика/край"></label></div>
								<div class="lbl"><label><span class="l">Населенный пункт</span><input type="text" class="inp-text" placeholder="Город, поселок"></label></div>
								<div class="lbl"><label><span class="l">Почтовый индекс</span><input type="text" class="inp-text" placeholder="Введите номер почтового индекса"></label></div>
								<div class="lbl"><label><span class="l">Улица</span><input type="text" class="inp-text" placeholder="Введите номер почтового индекса"></label></div>
								<div class="lbl-halfed lbl">
									<label><span class="l">Дом, корпус</span><input type="text" class="inp-text" placeholder=""></label><label class="lbl-2"><span class="l">Квартира</span><input type="text" class="inp-text" placeholder=""></label>
								</div>
							</div>

							<div class="btn-section">
								<button class="btn-blue">сохранить</button>
								<button class="clear">Сбросить</button>
							</div>
						</form>
					</div>
					<div class="tabs-cont">
						<form action="" class="change-pass">
							<div class="lbl"><label><span class="l">Старый пароль</span><input type="password" class="inp-text" placeholder="" value="123456"></label></div>
							<div class="lbl"><label><span class="l">Новый пароль</span><input type="text" class="inp-text" placeholder="Введите новый пароль" value=""></label></div>
							<div class="lbl"><label><span class="l two-lines">Подтвердите новый пароль</span><input type="text" class="inp-text" placeholder="Введите повторно новый пароль" value=""></label></div>

							<div class="btn-section">
								<button class="btn-blue">сменить пароль</button>
								<button class="clear">Отменить</button>
							</div>
						</form>
					</div>
					<div class="tabs-cont tabs-cont-subs-form">
						<div class="title-lk">Вы подписаны на нашу рассылку</div>
						<div class="note">Вы можете выбрать подходящий способ для получения наших сообщений</div>

						<form action="" class="subs-form">
							<label class="check-lbl"><input type="checkbox" name="subs" id=""><span class="l">Звонок по телефоу</span></label>
							<label class="check-lbl"><input type="checkbox" name="subs" id=""><span class="l">SMS</span></label>
							<label class="check-lbl"><input type="checkbox" name="subs" id=""><span class="l">Email</span></label>

							<button class="btn-blue">сохранить</button>
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="social-block clearfix">
					<div class="col-lg-9 col-lg-offset-3">
						<div class="title-lk">Привязка социальных сетей</div>
						<div class="note">Привяжите учетную запись социальной сети и используйте её для входа в личный кабинет</div>
					
						<ul>
							<li class="soc-1 active"><a class="soc-link" href="/">ВКонтакте</a><a href="/" class="cancel">Отменить</a></li>
							<li class="soc-2"><a class="soc-link" href="/">ВКонтакте</a><a href="/" class="cancel">Отменить</a></li>
							<li class="soc-3"><a class="soc-link" href="/">ВКонтакте</a><a href="/" class="cancel">Отменить</a></li>
							<li class="soc-4"><a class="soc-link" href="/">ВКонтакте</a><a href="/" class="cancel">Отменить</a></li>
							<li class="soc-5"><a class="soc-link" href="/">ВКонтакте</a><a href="/" class="cancel">Отменить</a></li>
							<li class="soc-6"><a class="soc-link" href="/">ВКонтакте</a><a href="/" class="cancel">Отменить</a></li>
							<li class="soc-7"><a class="soc-link" href="/">ВКонтакте</a><a href="/" class="cancel">Отменить</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="viewed">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="head-md">Вы уже смотрели</div>

					<div class="items-tile items-tile-carousel">
						<div class="item">
							<a href="" class="item-good-in">
								<div class="img">
									<div class="tbl">
										<div class="cell">
											<img src="images/ex-sm.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="t">
									<div class="h">
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>
									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>
								</div>
							</a>
						</div>
						
						<div class="item">
							<a href="" class="item-good-in">
								<div class="img">
									<div class="tbl">
										<div class="cell">
											<img src="images/ex-sm.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="t">
									<div class="h">
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>
									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="" class="item-good-in">
								<div class="img">
									<div class="tbl">
										<div class="cell">
											<img src="images/ex-sm.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="t">
									<div class="h">
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>
									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="" class="item-good-in">
								<div class="img">
									<div class="tbl">
										<div class="cell">
											<img src="images/ex-sm.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="t">
									<div class="h">
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>
									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="" class="item-good-in">
								<div class="img">
									<div class="tbl">
										<div class="cell">
											<img src="images/ex-sm.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="t">
									<div class="h">
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>
									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="" class="item-good-in">
								<div class="img">
									<div class="tbl">
										<div class="cell">
											<img src="images/ex-sm.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="t">
									<div class="h">
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>
									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>