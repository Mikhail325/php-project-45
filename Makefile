brain-progression: #Запуск игры brain-brain-progression
	php bin/brain-progression
brain-gcd: #Запуск игры brain-gcd
	php bin/brain-gcd
brain-calc: #Запуск игры brain-calc
	php bin/brain-calc
brain-even: #Запуск игры brain-even
	php bin/brain-even
brain-games: #Запуск brain-games
	php bin/brain-games
install: #Запуск composer install
	composer install
validate: #Запуск composer install
	composer validate
lint: #Запуск Линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin