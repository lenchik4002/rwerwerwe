<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class link extends Controller 
{ 
	private $posts;
		
		public function __construct()
		{
			$this->posts = [
				1 => [
					'title'  => 'Главная страница',

					'href' => '/public/page/1',
					'author' => 'Автор страницы 1',
					'date'   => 'Дата публикации страницы 1',
					'teaser' => 'Короткое описание страницы 1',
					'text'   => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов.',
				],
				2 => [
					'title'  => 'Тайтл страницы 2',
					'href' => '/public/page/2',
					'author' => 'Автор страницы 2',
					'date'   => 'Дата публикации страницы 2',
					'teaser' => 'Короткое описание страницы 2',
					'text'   => 'Полный текст страницы 2',
				],
				3 => [
					'title'  => 'Тайтл страницы 3',
					'author' => 'Автор страницы 3',
					'date'   => 'Дата публикации страницы 3',
					'teaser' => 'Короткое описание страницы 3',
					'text'   => 'Полный текст страницы 3',
				],
				4 => [
					'title'  => 'Тайтл страницы 4',
					'author' => 'Автор страницы 4',
					'date'   => 'Дата публикации страницы 4',
					'teaser' => 'Короткое описание страницы 4',
					'text'   => 'Полный текст страницы 4',
				],
				5 => [
					'title'  => 'Тайтл страницы 5',
					'author' => 'Автор страницы 5',
					'date'   => 'Дата публикации страницы 5',
					'teaser' => 'Короткое описание страницы 5',
					'text'   => 'Полный текст страницы 5',
				],
			];
		}




		public function show() { 
			$links = [
		[
			'text' => 'text1',
			'href' => '/public/page/1',
			'active'=>0
		],
		[
			'text' => 'text2',
			'href' => '/public/page/2',
			'active'=>1
		],
		[
			'text' => 'text3',
			'href' => 'href3',
			'active'=>0
		],
	];

								return view('link.pow',["ll"=>$links, "qq"=>$this->posts]);
							}

        public function showone($id) { 
			$links = [
		[
			'text' => 'text1',
			'href' => '/public/page/1',
			'active'=>1
		],
		[
			'text' => 'text2',
			'href' => '/public/page/2',
			'active'=>1
		],
		[
			'text' => 'text3',
			'href' => 'href3',
			'active'=>0
		],
	];

								return view('link.pow_detail',["ll"=>$links, "ww"=>$this->posts, "id"=>$id, "qq"=>$this->posts[$id]]);
							}

					
}
?>