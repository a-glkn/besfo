	<?php include 'header.php'; ?>

	
	<section id="catalog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumbs">
						<a href="/" title="Главная" class="sectionLink">Главная</a>
						<span class="breadcrumbsSeparator"></span>
						<a href="/" title="Главная" class="sectionLink">Дифференциалы</a>
						<span class="breadcrumbsSeparator"></span>
						<span class="section">Дифференциалы автоматические</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">Дифференциалы</div>
				</div>
			</div>

			<div class="row row-catalog">
				<div class="col-lg-2 col-sidebar">
					<div class="filter-block">
						<div class="filter-group">
							<div class="h">Специальные предложения</div>
							<div class="filter-var checked"><a href="/" class="/"><span></span> Хиты продаж</a></div>
							<div class="filter-var"><a href="/" class="/"><span></span> Новинки</a></div>
							<div class="filter-var"><a href="/" class="/"><span></span> Распродажа</a></div>
						</div>

						<div class="filter-group">
							<div class="h">Бренды</div>
							<div class="filter-var"><a href="/" class="/"><span></span> ДАН</a></div>
							<div class="filter-var"><a href="/" class="/"><span></span> ДАК</a></div>
							<div class="filter-var"><a href="/" class="/"><span></span> Vallracing</a></div>
							<div class="filter-reset"><a href="/">Сбросить фильтр</a></div>
						</div>

						<div class="filter-group">
							<div class="h">Цена</div>
							
							<div class="range">
								<div class="from"></div>
								<div class="to"></div>
							</div>
							<div class="price-range-container">
								<div id="price-range"></div>
								
							</div>

							<div class="btns">
								<button class="btn-blue">Показать</button>
								<a href="/" class="reset">Сбросить</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-10 col-content">
					<div class="search-block">
						<div class="search-block-row">
							<div class="h">Поиск по номеру детали <div class="tip" data-tip="Вы можете найти нужную запчасть по номеру детали завода-изготовителя. Введите номер детали в поисковую строку и мы покажем Вам необхоимую запчасть"></div></div>
							<form class="s_n">
								<input type="text" class="s_n" placeholder="Например GT 345">
								<button class="sub">Найти</button>
							</form>
						</div>
						<div class="search-block-row">
							<div class="h">Поиск по модели автомобиля</div>
							<form>
								<div class="sel">
									<select>
										<option value="0">Марка</option>
										<option value="2">Марка 2</option>
										<option value="3">Марка 2</option>
									
									</select>
									<select>
										<option value="0">Модель</option>
										<option value="1">Марка</option>
										<option value="2">Марка 2</option>
										<option value="3">Марка 2</option>
										<option value="4">Марка 3</option>
										<option value="5">Марка 4</option>
										<option value="6">Марка 5</option>
										<option value="7">Марка 6</option>
										<option value="8">Марка 7</option>
										<option value="9">Марка 8</option>
										<option value="10">Марка 9</option>
										<option value="11">Марка 10</option>
										<option value="12">Марка 11</option>
										<option value="13">Марка 12</option>
										<option value="14">Марка 13</option>
										<option value="15">Марка 14</option>
									</select>
									<select>
										<option value="0">Модификация</option>
										<option value="1">Марка</option>
										<option value="2">Марка 2</option>
										<option value="3">Марка 2</option>
										<option value="4">Марка 3</option>
										<option value="5">Марка 4</option>
										<option value="6">Марка 5</option>
										<option value="7">Марка 6</option>
										<option value="8">Марка 7</option>
										<option value="9">Марка 8</option>
										<option value="10">Марка 9</option>
										<option value="11">Марка 10</option>
										<option value="12">Марка 11</option>
										<option value="13">Марка 12</option>
										<option value="14">Марка 13</option>
										<option value="15">Марка 14</option>
									</select>
									<select>
										<option value="0">Год выпуска</option>
										<option value="1">Марка</option>
										<option value="2">Марка 2</option>
										<option value="3">Марка 2</option>
										<option value="4">Марка 3</option>
										<option value="5">Марка 4</option>
										<option value="6">Марка 5</option>
										<option value="7">Марка 6</option>
										<option value="8">Марка 7</option>
										<option value="9">Марка 8</option>
										<option value="10">Марка 9</option>
										<option value="11">Марка 10</option>
										<option value="12">Марка 11</option>
										<option value="13">Марка 12</option>
										<option value="14">Марка 13</option>
										<option value="15">Марка 14</option>
									</select>
								</div>
								<button class="sub">Найти</button>
							</form>
						</div>

					</div>
					<div class="sort-block">
						<div class="sort-block-col sort-block-col-1">
							<div class="h">Сортировать по:</div>
							<a href="/" class="active">Увеличению цены</a>
							<a href="/">Уменьшению цены</a>
							<a href="/">Популярности</a>
							<a href="/">Названию</a>
						</div>

						<div class="sort-block-col sort-block-col-2">
							<div class="h">Вид каталога</div>

							<a href="" class="list"></a>
							<a href="" class="tile active"></a>
						</div>
					</div>

					<div class="catalog-block">
						<div class="items-list">
							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>

									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>

							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>
									
									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>

							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>
									
									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>

							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>
									
									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>

							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>
									
									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>

							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>
									
									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>

							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>
									
									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>

							<div class="item-good">
								<a href="">
									<span class="promo-ribbon promo-ribbon-hit">ХИТ</span>
									
									<div class="img">
										<div class="tbl">
											<div class="cell"><img src="images/ex-list.jpg" alt=""></div>
										</div>
									</div>
									
									<div class="h">
										<div class="clearfix">
											<div class="n">Номер детали GT423</div>
											<div class="art">Артикул: 1234567890GTR</div>
										</div>
										Распредвал Стольников 16 V 10,7 мм фаза 296 градусов третья строка
									</div>

									<div class="desc">
										Если есть описание, карточка увеличивается по высоте как сейчас, при условии, что описание занимает всего три строки, если текста будет больше, то карточка становится выше на высоту одной строки
									</div>

									<div class="rates">
										<div class="rating"></div>
										<div class="reviews">Отзывы: 22</div>
										<div class="guarantee">Гарантия 6 месяцев</div>
									</div>

									<div class="price-block">
										<div class="current-price"><span>15 500</span> руб.</div>
										<div class="old-price"><span>17 200</span> руб.</div>
									</div>

									<div class="btns">
										<div>
											<button class="btn btn-order">Заказать</button>
										</div>
										<div>
											<button class="btn-fav"><span></span>В закладки</button>
											<button class="btn-comp"><span></span>Сравнить</button>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="pager">
						<div class="pager-container">
						    <div class="prevNextButtons">
				                <a class="button buttonPrev" href=""></a>    
				            </div>
						    <div class="pages">
						        <a class="page pageActive">1</a>
						        <a class="page" href="">2</a>
						        <a class="page" href="">3</a>
						        <a class="page" href="">...</a>
						        <a class="page" href="">21</a>
						        <a class="page" href="">22</a>
						        <a class="page" href="">23</a>    
						    </div>
							<div class="prevNextButtons">
				                <a class="button buttonNext" href=""></a>    
				            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="cat-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					Код детали (артикул) — маркировка завода-изготовителя, однозначно идентифицирующая деталь автомобиля.
					Маркировку можно найти на детали, на упаковке или в сопроводительной документации, если на детали по какой-либо причине нанесение номера невозможно.
					Наиболее простой способ узнать номер артикула - найти заводскую маркировку на поверхности детали если есть возможность ее демонтировать. Несмотря на это для поиска номера нужной детали мы рекомендуем обращаться к профессионалам. И для этого есть несколько причин:
					в процессе производства завод-изготовитель установленной детали вносит изменения в конструкцию не только автомобиля, но и отдельных его узлов, агрегатов и даже самих деталей что приводит иногда к несоответсвию номеров отдельных узлов совершенствуется технология производства снимаются с производства устаревшие артикулы появляются аналоги более доступные и не менее качественные
					Оформите запрос по VIN » или обратитесь за помощью в ближайший офис Exist.ru — и необходимая деталь обязательно найдется.
					Если код запчасти вам уже известен — впишите его в поле «Код детали» в верхней части сайта.
					Описание таблицы результатов поиска 
					При вводе номера необходимо использовать только цифры и латинские буквы. Знаки тире, точки, пробелы и др. игнорируются.
				</div>
			</div>
		</div>
	</section>

	<section id="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumbs">
						<a href="/" title="Главная" class="sectionLink">Главная</a>
						<span class="breadcrumbsSeparator"></span>
						<a href="/" title="Главная" class="sectionLink">Дифференциалы</a>
						<span class="breadcrumbsSeparator"></span>
						<span class="section">Дифференциалы автоматические</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php include 'footer.php'; ?>