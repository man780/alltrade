<div id="containertop">
	<div class="containertopdiv">
		<div id="topheader">
			<p style="float: left; margin-left: 10px;"><span style="margin-right: 30px;"><a href="onlineshop.php" class="a" style="color: red">Интернет Магазины</a></span><span style="margin-right: 30px;"><a href="wholesale.php" class="a" style="color: red">Оптовые товары</a></span><span style="margin-right: 30px;"><a href="services.php" class="a" style="color: red">Услуги</a></span><span><a href="#" class="a" style="color: red">Добавить обявление</a></span></p>
			<div id="topheadermenu">
				<ul style="margin: 0">
					<li>
						<a href="#" class="a">Помощь</a>
						<ul class="submainmenu">
							<li>
								<a href="#" class="a">Служба поддержки</a>
							</li>
							<li>
								<a href="#" class="a">Гид покупателям</a>
							</li>
							<li>
								<a href="#" class="a">Споры и жалобы</a>
							</li>
						</ul>

					</li>
					<li>
						<a href="#" class="a">Экономьте больше в приложении!</a>
					</li>
					<li>
						<a href="#" class="a">Доставка</a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>


		<div class="clear"></div>
		<div class="logotop">
				<!--onclick="topmenu('#leftmenu')"-->
				<div class="menucategoryleft"><img src="images/menu.png" style="width: 40px; margin-right: 9px; margin-top: -8px ;"></div>
				<div style="float: left;"><a href="/"><img src="/images/logo.png" /></a></div>
				<div class="menu" style="float: left;">
					<img class="categorymenu" style="margin-left: 10px;width: 40px; position: relative;"	src="/images/product/menu.png" />
					<div class="submenu">
						<?include('blocks/category.php')?>
					</div>
				</div>
			</div>


		<div class="search">
			<form action="#" method="GET">
				<input type="text" name="q" placeholder="Поиск" class="searchname">
				<select name="formselect" class="searchcategory">
					<option>Категория 1</option>
					<option>Категория 2</option>
					<option>Категория 3</option>
					<option>Категория 4</option>
					<option>Категория 5</option>
					<option>Категория 6</option>
					<option>Категория 7</option>
				</select>
				<input type="submit" class="search-button" value="">
			</form>
		</div>

		<div class="cartreglog">
			<a href="#" style="text-decoration: none;">
			<div class="cart">
				<div style="float: left; margin-right: 10px;"><img src="/images/cart.png" class="cartico"></div>
				<div style="float: left; margin-right: 20px;">
					<p class="count">99</p>
					<p class="cartp"><a href="#" class="a">Корзина</a></p>
				</div>
			</div>
			</a>
			<div style="float: right;" class="login">
				<p><a href="#" class="a">Войти</a></p>
				<p><a href="#" class="a">Регистрация</a></p>

			</div>
		</div>

		<div class="clear"></div>
		
		<div style="margin-top: 15px;"></div>
	</div>
</div>