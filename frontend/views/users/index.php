<?
use yii\helpers\Url;
?>
<h1 style="margin: 0; font-size: 120%;" class="profile-header-h1">
				Объявления
			</h1>
			<p style="font-size: 90%; color: #999;" class="profile-header-p">Здесь вы найдёте ваши активные и архивные объявления</p>
			<div style="margin-top: 10px;"></div>

			<div class="profile-menu">
				<span style="padding: 5px; border-right: 1px solid #ddd;" class="profile-menu-ads">Объявления</span>
				<span style="padding: 5px; border-right: 1px solid #ddd;" class="profile-menu-message">Сообщения</span>
				<span style="padding: 5px;" class="profile-menu-setting">Настройки</span>
			</div>
			<div class="clear"></div>
			<div style="margin: 10px 0; border-bottom: 1px solid #ddd;"></div>
			<div class="profile-ad">
				<div class="profile-menu-sub">
					<span style="padding: 5px; border-right: 1px solid #ddd; cursor: pointer;"  class="profile-active-h1">Активные</span>
					<span style="padding: 5px; cursor: pointer" class="profile-inactive-h1">Неактивные</span>
				</div>
				<div style="margin: 10px 0; border-bottom: 1px solid #ddd;"></div>
				<div class="profile-active">
					<h1 style="margin: 0; font-size: 120%; color: #555">Активные объявления</h1>
					<div class="profile-ads">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Дата
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Заголовок
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Цена
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Сообщения
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									
								</td>
							</tr>
							<?foreach ($ads as $key => $ad):?>
								<?if($ad['status'] == 0) continue;?>
								<tr>
									<td style="padding: 5px; border-bottom: 1px solid #ddd">
										<p style="font-size: 90%">С: 11 апр.</p>
										<p style="font-size: 90%">По: 11 май</p>
									</td>
									<td style="padding: 5px; border-bottom: 1px solid #ddd">
										<p><?=$ad['name'];?></p>
										<a href="<?=Url::toRoute(['/ads/view', 'id' => $ad['id']])?>" class="profile-a-p">Просмотреть</a>
										<a href="<?=Url::toRoute(['/ads/update', 'id' => $ad['id']])?>" class="profile-a-p">Редактировать</a>
										<a href="<?=Url::toRoute(['/ads/delete', 'id' => $ad['id']])?>" class="profile-a-u">Удалить</a></span>      
									</td>
									<td style="padding: 5px; border-bottom: 1px solid #ddd">
										<p><?=$ad['cost'];?> sum</p>
									</td>
									<td style="padding: 5px; border-bottom: 1px solid #ddd">
										<a href="" style="text-decoration: none"><p style="background: #0098d0; color: #fff; width: 25px; padding: 5px; border-radius: 3px; font-size: 120%"><img src="<?=$layoutPath?>/images/profile/1.png" style="width: 10px;"> 1</p></a>
									</td>
									<td style="padding: 5px; border-bottom: 1px solid #ddd">
										<a href="" style="text-decoration: none"><p style="background: #0098d0; color: #fff; width: 105px; padding: 5px; border-radius: 3px;">Рекламировать</p></a>
										<a href="<?=Url::toRoute(['/ads/disable', 'id' => $ad['id']])?>" style="text-decoration: none"><p style="background: #0098d0; color: #fff; width: 95px; padding: 5px; border-radius: 3px;">Не активный</p></a>
										<p></p>
									</td>
								</tr>
							<?endforeach;?>
						</table>
					</div>
				</div>


				<div class="profile-inactive">
					<h1 style="margin: 0; font-size: 120%; color: #555">Неактивные объявления</h1>
					<div class="profile-ads">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Дата
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Заголовок
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Цена
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									Сообщения
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									
								</td>
							</tr>
							<?foreach ($ads as $key => $ad):?>
							<?if($ad['status'] != 0) continue;?>
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<p style="font-size: 90%">С: 11 апр.</p>
									<p style="font-size: 90%">По: 11 май</p>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<p><?=$ad['name'];?></p>
									<a href="<?=Url::toRoute(['/ads/view', 'id' => $ad['id']])?>" class="profile-a-p">Просмотреть</a>
									<a href="<?=Url::toRoute(['/ads/update', 'id' => $ad['id']])?>" class="profile-a-p">Редактировать</a>
									<a href="<?=Url::toRoute(['/ads/delete', 'id' => $ad['id']])?>" class="profile-a-u">Удалить</a></span>      
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<p><?=$ad['cost'];?> sum</p>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<a href="" style="text-decoration: none"><p style="background: #0098d0; color: #fff; width: 25px; padding: 5px; border-radius: 3px; font-size: 120%"><img src="<?=$layoutPath?>/images/profile/1.png" style="width: 10px;"> 1</p></a>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<a href="<?=Url::toRoute(['/ads/activate', 'id' => $ad['id']])?>" style="text-decoration: none"><p style="background: #0098d0; color: #fff; width: 95px; padding: 5px; border-radius: 3px;">Активировать</p></a>
									<p></p>
								</td>
							</tr>
							<?endforeach;?>
							
						</table>
					</div>
				</div>
			</div>
			
			<div class="profile-message">
				<div class="profile-menu-sub">
					<span style="padding: 5px; border-right: 1px solid #ddd; cursor: pointer;"  class="profile-these-h1">Полученные</span>
					<span style="padding: 5px; cursor: pointer" class="profile-sent-h1">Отправленные</span>
				</div>
				<div style="margin: 10px 0; border-bottom: 1px solid #ddd;"></div>
				<div class="profile-inbox">
					<h1 style="margin: 0; font-size: 120%; color: #555">Входящие сообщения</h1>
					<div class="profile-ads">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
									Пользователь
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd" width="80%">
									Объявление
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
									Дата
								</td>
							</tr>
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<table>
										<tr>
											<td>
												<a href="#"><img src="images/profile/2.png" width="20" style="margin-right: 10px;"></a>
											</td>
											<td>
												1505025
											</td>
										</tr>
									</table>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<a href="" class="a">
										<p>Php программист <sup>#2</sup></p>
										<p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
									</a>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<p>1 май, 18:56</p>
								</td>
							</tr>
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<table>
										<tr>
											<td>
												<a href="#"><img src="images/profile/2.png" width="20" style="margin-right: 10px;"></a>
											</td>
											<td>
												1505025
											</td>
										</tr>
									</table>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<a href="" class="a">
										<p>Php программист <sup>#2</sup></p>
										<p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
									</a>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<p>1 май, 18:56</p>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="profile-outbox">
					<h1 style="margin: 0; font-size: 120%; color: #555">Исходящие сообщения</h1>
					<div class="profile-ads">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
									Пользователь
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd" width="80%">
									Объявление
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd" width="10%">
									Дата
								</td>
							</tr>
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<table>
										<tr>
											<td>
												<a href="#"><img src="images/profile/2.png" width="20" style="margin-right: 10px;"></a>
											</td>
											<td>
												1505025
											</td>
										</tr>
									</table>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<a href="" class="a">
										<p>Исходящие Php программист <sup>#2</sup></p>
										<p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
									</a>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<p>1 май, 18:56</p>
								</td>
							</tr>
							<tr>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<table>
										<tr>
											<td>
												<a href="#"><img src="images/profile/2.png" width="20" style="margin-right: 10px;"></a>
											</td>
											<td>
												1505025
											</td>
										</tr>
									</table>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<a href="" class="a">
										<p>Исходящие Php программист <sup>#2</sup></p>
										<p style="font-size: 90%; color: #888">Приветствую, вы рассматриваете работу на не полный день? (подработка) Работа не сложная, хорошая оплата. Если у вас есть Telegram, объясню подробнее: +79653213771</p>
									</a>
								</td>
								<td style="padding: 5px; border-bottom: 1px solid #ddd">
									<p>1 май, 18:56</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>


			<div class="profile-settings">
				<h1 style="margin: 0; font-size: 120%; color: #555">Изменить контактные данные</h1>
				<div style="margin-top: 10px;"></div>
				<form action="" method="POST">
					<p style="margin-top: 10px;">Выбрать город<br><input type="text"></p>
					<p style="margin-top: 10px;">Контактное лицо<br><input type="text"></p>
					<p style="margin-top: 10px;">Номер телефона<br><input type="text"></p>
					<p style="margin-top: 10px;">Электроный адрес<br><input type="text"></p>
					<p style="margin-top: 10px;">Пароль<br><input type="password"></p>
					<p style="margin-top: 10px;"><input type="submit"></p>
				</form>
				
			</div>