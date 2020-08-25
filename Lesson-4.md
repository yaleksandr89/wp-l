## Вопросы по уроку ##

Пользовательский тип записи создал для [портфолио](https://wp.alexanderyurchenko.ru/portfolio)

### Разделение контента на шаблоны (template-parts) ###

В уроке вы подключали части шаблона (template-parts), таким образом:

```php
<?php while ( have_posts() ) : ?>
    <?php the_post() ?>
        <?php get_template_part( 'template-parts/blog/flow/content', get_post_format() ); ?>
<?php endwhile; ?>
```

Можно ли:
```php
<?php while ( have_posts() ) : ?>
    <?php the_post() ?>
       
<?php endwhile; ?>
```

Засунуть в шаблон и подключить его одной строчкой (`<?php get_template_part( 'template-parts/blog/flow/content', get_post_format() ); ?>`)? Или есть смысл оставить в таком виде?

### Пагинация ###
 
Пытался не трогать написанные стили, то есть подстроить WP под верстку и вновь столкнулся с проблемой смены классов у ссылок пагинации. Пробовал:

* the_posts_pagination()
* posts_nav_link()
* _navigation_markup()

Но единственный фильтр, который я нашел - `navigation_markup_template`, который дает возможность изменить обертку, но не дает добраться до ссылок. Опыть использовал костыль, через буферизацию:

```php
add_filter( 'wptest_the_posts_pagination', static function ( $args ) {
	ob_start();
	the_posts_pagination( [
		'prev_next' => isset( $args['prev_next'] ) ?: false,
	] );
	$default_pagination = ob_get_clean();

	return str_replace(
		[
			"page-numbers",
			"current"
		],
		[
			$args['class_no_active'],
			$args['class_active']
		],
		$default_pagination );
} );
```

Есть ли более "правильный" вариант?

### Функции vs Экшен/Фильтры ###

В уроке вы перевили часть функциона в функции, которые используются в рамках данной темы (с префиксом). Не могу понять одного, когда лучше использоваться такой подход, а 
когда лучше создать фильтр или экшен или в целом это не имеет большой разницы?

### wptest/template-parts/sidebars/sidebar-portfolio.php ###

Ранее, в сайдбаре для портфолио, для вывода каждой таксономии я использовал `get_terms()` (то есть вызывал её дважды). В качестве рефакторинга вы посоветовали, вызвать эту функцию однократно
Потом перебрать массив с таксономиями и выбрать нужные. В целом у меня получилось и запросы к БД стало на 2 меньше :), но насколько нормальная реализация? Мне кажеться, что я загнался, но как сделать проще - ХЗ :)
 