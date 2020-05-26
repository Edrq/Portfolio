const news = [
	{
		type: [1],
		title: 'Латвия предоставила политическое убежище журналисту Росбалта, обвиняемому в России в клевете на Усманова',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Программу Сам себе режисер закрыли после 28 лет в эфире',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Власти Абхазии заявили об участии в попытке переворота украинцев из ДНР',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Белорусский суд приговорил двух человек к смертной казни за убийство учительницы',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Бизнесмена в Москве арестовали за попытку подкупить замминистра транспорта бутылкой водки и 10 тысячами долларов',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1,2,3],
		title: 'Дело Ричарда Джуэлла - безупречная картина Клинта Иствуда Главный герой спас людей на Олимпиаде 1996 года, но его самого обвинили в терроризме',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2,3],
		title: 'Им говорят, что они позорят республику Как устроены кризисные центры для женщин на Северном Кавказе',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,5],
		title: 'Из ФСБ уволили 16 человек, снимавших на видео стрельбу на Лубянке',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [6,1],
		title: 'Версия попадания ракеты в самолет не исключается, но на сегодня не является подтвержденной. Зеленский - о крушении боинга в Иране',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 1,
		image: ''
	},
	{
		type: [6,1],
		title: 'Иран пригласил СШA присоединиться к расследованию катастрофы украинского боинга',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 1,
		image: ''
	},
	{
		type: [6,1],
		title: 'NYT: в Иране сняли на видео возможный ракетный удар по боингу',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 1,
		image: ''
	},
	{
		type: [1,2,3],
		title: 'Украинский боинг сбили иранцы? Как это могло произойти? Что не так с иранской версией о технических неполадках?',
		rubric: 1,
		content: '',
		date: '01-12-2020',
		event: 1,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Вратарь стал главной звездой мaтча НХЛ: он не только отражал броски, но и сам забил гол! Подобного не случалось шесть лет',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Хомяка в торжественной обстановке хоронили во дворе четыре морских котика В твиттере вспоминают реальные истории, которые звучат как дурацкая выдумка',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Откуда искуственный интеллект берет вдохновение? И как ищет сюжет? Важные вопросы про нейросети и их творчество',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2,3],
		title: 'Вырыли милю окопов, снимали при свете сигнальной ракеты Посмотрите, как создавали фильм, получивший Золотой глобус',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2,3],
		title: 'Угони меня, если сможешь! Тест об автомобильных ворах и эволюции охранных систем',
		rubric: 4,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1],
		title: 'Самолет NordWind получил повреждения при жесткой посадке в Анталье',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Меган Маркл уехала из Великобритании в Канаду',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Власти Абхазии заявили, что противники главы республики завладели оружием в администрации президента',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Правозащитники призвали Google разрешить пользователям Android удалять предустановленный софт',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'ЦБ отозвал лицензию у Нэклис-банка, принадлежащего Наталье Касперской. Она заявила, что стала владелицей не по своей воле',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1,2],
		title: 'В США режиссер сделал предложение руки и сердца с помощью Спящей красавицы. Он заменил героев мультфильма на себя и свою девушку',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Дети с аутизмом могут учиться в обычной школе? Да, и вот почему это важно',
		rubric: 4,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Вроде это Америка, а не советская Россия. Вышел трейлер нового Фарго с Крисом Роком - о гангстерах в 1950-х',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2,3],
		title: 'Принц Гарри и Меган Маркл отказались от королевских привелегий, не предупредив Елизавету II Теперь всем интересно, как они будут зарабатывать на жизнь',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2,3],
		title: 'Великобританию сотрясает Мегзит. Только мемы (королевские!) о принце Гарри и Меган Маркл, которые наконец решили съехать от бабушки',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1],
		title: 'Самолет спроектировали клоуны под руководством обезьян Boeing опубликовал внутреннюю переписку о 737 MAX',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Гоголь-центр и Deutsches Theater Berlin совместно поставят спектакль по пьессе Кирилла Серебрянникова',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Основной версией катастрофы рейса Bek Air в Алма-Ате назвали обледенение самолета',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Forbes включил в список российских миллиардеров двух новых участников - основателей Veeam Software',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1],
		title: 'Мы не знаем точно, когда и где. Госсекретарь США рассказал, что точных данных о планируемых генералом Сулеймани атаках не было',
		rubric: 0,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: ''
	},
	{
		type: [1,2,3],
		title: 'В Австралии три месяца не утихают лесные пожары. Погибли больше миллиарда животных, дым достиг Южной Америки',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2,3],
		title: 'Леонардо Ди Каприо спас тонувшего в море француза. Потому что не все должно заканчиваться как в Титанике',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Никаких границ для меня нет. И никто не пытается меня остановить Паоло Соррентино - о Новом папе, собственной вере и религиозном фанатизме',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Тяжко после каникул? Вот у Урганта отдых только начался, и он отметил это чтением скороговорок (ошибся - выпил!)',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Все повторяют за Кайло Реном - эффектно достают что-нибудь из-за спины. В ход уже пошли мечи из банок и картонный Адам Драйвер',
		rubric: 2,
		content: '',
		date: '01-12-2020',
		event: 0,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Четыре года назад полицейские запытали до смерти жителя Владикавказа. Никто не наказан Видеокомикс Ани Сарухановой и Алины Алихановой',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 2,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'В России отменяют приговоры осужденным за наркотики после решений ЕСПЧ. Суд может заставить РФ смягчить наркополитику?',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 2,
		image: 'https://source.unsplash.com/random'
	},
	{
		type: [1,2],
		title: 'Я должен понимать бандосов. По другому не получится жуликов ловить Сотрудники полиции рассказывают о пытках, коррупции, волоките - и о собственном бесправии',
		rubric: 3,
		content: '',
		date: '01-12-2020',
		event: 2,
		image: 'https://source.unsplash.com/random'
	},
];

const events = [
	{
		id: 1,
		title: 'КАТАСТРОФА УКРАИНСКОГО САМОЛЕТА В ИРАНЕ'
	},
	{
		id: 2,
		title: 'ГОЛУНОВ. СОПРОТИВЛЕНИЕ ПОЛИЦЕЙСКОМУ ПРОИЗВОЛУ'
	}
];

const rubrics = [
	{
		id: 1,
		title: 'Разбор'
	},
	{
		id: 2,
		title: 'Шапито'
	},
	{
		id: 3,
		title: 'Истории'
	},
	{
		id: 4,
		title: 'Партнерский материал'
	}
];

const types = [
	{
		id: 1,
		type: 'card',
		title: 'Card simple'
	},
	{
		id: 2,
		type: 'card--with-picture',
		title: 'Card with picture'
	},
	{
		id: 3,
		type: 'card--big-picture',
		title: 'Card with big picture'
	},
	{
		id: 4,
		type: 'card--unique',
		title: 'Card unique'
	},
	{
		id: 5,
		type: 'card--sensation',
		title: 'Card sensation'
	},
	{
		id: 6,
		type: 'cards--with-separator',
		title: 'Card with separator'
	}
];


const newsBlock = document.querySelector('.news');
let template = {};
let card;
let rubric;
let classes;

if (newsBlock !== null) {
	for (let i = 0; i < news.length; i++) {		
		
		template = news[i];

		card = document.createElement('div');
		rubric = getDictionaryEntryById(news[i].rubric, rubrics, 'title');
		classes = '';

		for (let j = 0; j < news[i].type.length; j++) {
			let type = getDictionaryEntryById(news[i].type[j], types, 'type');
			
			if (type !== null) {
				classes += ` ${type}`;
			}
		}

		card.className = classes.trimStart();

		template = `
			${ (rubric !== null) ? `<div class="card__rubric">${rubric}</div>` : ''}
			${ (news[i].image !== '') ? `<img class="image card__image" alt="card__image" src="${news[i].image}">` : ''}
			<h3 class="card__title">${news[i].title}</h3>
			<p class="card__date">${news[i].date}</p>
		`;

		card.innerHTML = template;

		newsBlock.appendChild(card);
	};
}

function getDictionaryEntryById (entryId, dictionary, key) {
	for (let i = 0; i < dictionary.length; i++) {
		if (dictionary[i].id === entryId) {
			return dictionary[i][key];
		}
	}

	return null;
}
