<?php 
echo "<h2>Ассоциативный массив:</h2> ";
$autorBooks = array(
		"Рей Брэдбери" => "451° по Фаренгейту",
		"Грегори Дэвид Робертс" => "Шантарам",
		"Джордж Оруэлл" => "1984",
		"Михаил Афанасьевич Булгаков" => "Мастер и Маргарита",
		"Эрих Мария Ремарк" => "Три товарища",
		"Оскар Уайльд" => "Портрет Дориана Грея",
		"Рей Брэдбери" => "Вино из одуванчиков",
		"Даниел Киз" => "Цветы для Элджернона",
		"Джером Д. Сэлинджер" => "Над пропастью во ржи",
		"Антуан де Сент-Экзюпери" => "Маленький принц",
		"Лев Толстой" => "Анна Каренина",
		"Габриэль Гарсиа Маркес" => "Сто лет одиночества",
		"Грегори Дэвид Робертс" => "Тень горы",
		"Айн Рэнд" => "Атлант расправил плечи"
);
foreach ($autorBooks as $key => $value) {
	echo "$key => $value <br><br>";
};
?>
