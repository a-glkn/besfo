	<?php include 'header.php'; ?>

	
	<section id="auth-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">Оформление заказа</div>
				</div>
			</div>
			<div class="row row-auth-stages">
				<div class="col-lg-12">
					<div class="auth-stages">
						<span class="active">авторизация</span>
						<span class="checkout-stage">подтверждение заказа</span>
					</div>
					
				</div>
			</div>
			<div class="row auth-block">
				<div class="col-lg-6">
					<div class="head-md">авторизация</div>
					<div class="form-block">
						<form>
							<p class="pre-note">
								Если у вас есть аккаунт на сайте, авторизуйтесь, чтобы контактные данные добавились в заказ автоматически.
							</p>
							<input type="text" tabindex="1" id="USER_LOGIN" class="authLogin inp-text" name="USER_LOGIN" placeholder="Введите свой Email">
				            <input type="password" tabindex="2" id="USER_PASSWORD_PASSWORD" class="inp-text authPassword" name="USER_PASSWORD" placeholder="Введите пароль">
				            <input type="text" tabindex="2" id="USER_PASSWORD_TEXT" style="display:none" class="authPassword inp-text" name="USER_PASSWORD" placeholder="Введите пароль">


				            <div class="row row-auth">
				            	<div class="col-lg-6">
									<label class="icr-label">
									    <span class="icr-item type_checkbox"></span>
									    <span class="icr-hidden"><input class="icr-input" type="checkbox" name="job" value="0" /></span>
									    <span class="icr-text"> Запомнить меня</span>
									</label>
								</div>
				            	<div class="col-lg-6 col-lost-pass"><a href="/" class="lost-pass-link">Забыли пароль?</a></div>
				            </div>

				            <div class="center"><button class="sub btn">войти</button></div>

				            <div class="soc-auth">
				            	<div class="h">или войдите с помощью:</div>
				            	<ul>
				            		<li class="soc1"><a href="/"></a></li>
				            		<li class="soc2"><a href="/"></a></li>
				            		<li class="soc3"><a href="/"></a></li>
				            		<li class="soc4"><a href="/"></a></li>
				            		<li class="soc5"><a href="/"></a></li>
				            		<li class="soc6"><a href="/"></a></li>
				            		<li class="soc7"><a href="/"></a></li>
				            	</ul>
				            </div>
						</form>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="head-md">регистрация</div>
					<div class="form-block">
						<form>
							<p class="pre-note">
								Получайте скидки, экономьте деньги и время при следующих покупках. Регистрация займет всего минуту.
							</p>
							<input type="text" tabindex="1" id="USER_NAME" class="authLogin inp-text" name="USER_NAME" placeholder="Имя">
							<input type="text" tabindex="1" id="USER_LOGIN" class="authLogin inp-text" name="USER_LOGIN" placeholder="Email">
				            <input type="password" tabindex="2" id="USER_PASSWORD_PASSWORD" class="authPassword inp-text" name="USER_PASSWORD" placeholder="Пароль">
				            <input type="text" tabindex="2" id="USER_PASSWORD_TEXT" style="display:none" class="authPassword inp-text" name="USER_PASSWORD" placeholder="Пароль"/>


				            <div class="center">
				            	<div><button class="sub btn">зарегистрироваться</button></div>
				            	<div class="no-reg-buy-block"><button class="no-reg-buy-btn btn-grey">Купить без регистрации</button> <div class="q-tip tip" data-tip="Без регистрации Вы не сможете получить бонусы за покупку. При следующей покупке придется заново указывать контактную информацию или адрес доставки.">?</div></div>
				            </div>
							<div class="note">
								Нажимая кнопку «Зарегистрироваться» или «Купить без регистрации», Вы подтверждаете свою дееспособность, согласие на получение информации об оформлении и получении заказа, согласие на обработку персональных данных в соответствии с указанным <a href="">здесь</a> текстом.
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="back-container">
					<a href="/" class="back-link">назад в корзину</a>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>