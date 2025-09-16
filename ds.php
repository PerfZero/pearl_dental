<section class="news-table">
	<div class="container">
		<div class="news-table__content">
			<?php
			$news_posts = get_posts(array(
				'numberposts' => 1,
				'post_type' => 'post',
				'post_status' => 'publish'
			));
			$news_post = $news_posts[0];

			if ($news_post):
				$post_date = get_the_date('d.m.Y', $news_post->ID);
				$post_title = get_the_title($news_post->ID);
				$post_excerpt = get_the_excerpt($news_post->ID);
				$post_image = get_the_post_thumbnail_url($news_post->ID, 'full');
				$post_image_alt = get_post_meta(get_post_thumbnail_id($news_post->ID), '_wp_attachment_image_alt', true);
				$categories = get_the_category($news_post->ID);
				$category_name = !empty($categories) ? '#' . $categories[0]->name : '';
				?>
				<a href="<?php echo get_permalink($news_post->ID); ?>" class="news">
					<div class="news__date"><?php echo esc_html($post_date); ?></div>
					<h2 class="news__title">
						<?php echo esc_html($post_title); ?>
					</h2>
					<div class="news__tag"><?php echo esc_html($category_name); ?></div>
					<p class="news__text">
						<?php echo esc_html($post_excerpt); ?>
					</p>
					<?php if ($post_image): ?>
						<div class="news__image">
							<img src="<?php echo esc_url($post_image); ?>" alt="<?php echo esc_attr($post_image_alt); ?>" />
						</div>
					<?php endif; ?>
					<div class="news__link">
						Все новости
						<svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 11.0048H9.59935V2.89095L0.990301 11.5L0 10.5097L8.60905 1.90065H0.49515V0.5H11V11.0048Z" fill="#125998" />
						</svg>
					</div>
				</a>
			<?php endif; ?>

			<div class="table-section">
				<h2 class="table-section__title">ТУРНИРНАЯ ТАБЛИЦА</h2>
				<div class="table-section__subtitle">
					Чемпионат России по баскетболу. <br />
					Суперлига. Сезон 2024/2025
				</div>

				<div class="tournament-table">
					<div class="table-header">
						<div class="table-header__rank"></div>
						<div class="table-header__team"></div>
						<div class="table-header__games">И</div>
						<div class="table-header__wins">В</div>
						<div class="table-header__losses">П</div>
						<div class="table-header__points">О</div>
					</div>

					<div class="table-body">
						<div class="table-row">
							<div class="table-row__rank">1</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Динамо" />
								<div class="team-info">
									<div class="team-name">Динамо - фарм</div>
									<div class="team-city">Курск</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">25</div>
							<div class="table-row__losses">7</div>
							<div class="table-row__points">50</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">2</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Спартак" />
								<div class="team-info">
									<div class="team-name">Спартак</div>
									<div class="team-city">Санкт-Петербург</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">22</div>
							<div class="table-row__losses">10</div>
							<div class="table-row__points">44</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">3</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Владимирские Львицы" />
								<div class="team-info">
									<div class="team-name">Владимирские Львицы-ВлГУ</div>
									<div class="team-city">Владимир</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">20</div>
							<div class="table-row__losses">12</div>
							<div class="table-row__points">40</div>
						</div>

						<div class="table-row table-row--highlighted">
							<div class="table-row__rank">4</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Казаночка" />
								<div class="team-info">
									<div class="team-name">Казаночка</div>
									<div class="team-city">Казань</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">19</div>
							<div class="table-row__losses">11</div>
							<div class="table-row__points">39</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">5</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="УГМК" />
								<div class="team-info">
									<div class="team-name">УГМК</div>
									<div class="team-city">Екатеринбург</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">18</div>
							<div class="table-row__losses">14</div>
							<div class="table-row__points">36</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">6</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Динамо" />
								<div class="team-info">
									<div class="team-name">Динамо - фарм</div>
									<div class="team-city">Курск</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">25</div>
							<div class="table-row__losses">7</div>
							<div class="table-row__points">50</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">7</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Спартак" />
								<div class="team-info">
									<div class="team-name">Спартак</div>
									<div class="team-city">Санкт-Петербург</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">22</div>
							<div class="table-row__losses">10</div>
							<div class="table-row__points">44</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">8</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Казаночка" />
								<div class="team-info">
									<div class="team-name">Казаночка</div>
									<div class="team-city">Казань</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">19</div>
							<div class="table-row__losses">11</div>
							<div class="table-row__points">39</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">9</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="Владимирские Львицы" />
								<div class="team-info">
									<div class="team-name">Владимирские Львицы-ВлГУ</div>
									<div class="team-city">Владимир</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">20</div>
							<div class="table-row__losses">12</div>
							<div class="table-row__points">40</div>
						</div>

						<div class="table-row">
							<div class="table-row__rank">10</div>
							<div class="table-row__team">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mini-logo.svg" alt="УГМК" />
								<div class="team-info">
									<div class="team-name">УГМК</div>
									<div class="team-city">Екатеринбург</div>
								</div>
							</div>
							<div class="table-row__games">32</div>
							<div class="table-row__wins">18</div>
							<div class="table-row__losses">14</div>
							<div class="table-row__points">36</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>