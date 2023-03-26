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