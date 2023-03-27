brain-prime: #Запуск игры brain-prime
	./bin/brain-prime
brain-progression: #Запуск игры brain-brain-progression
	./bin/brain-progression
brain-gcd: #Запуск игры brain-gcd
	./bin/brain-gcd
brain-calc: #Запуск игры brain-calc
	./bin/brain-calc
brain-even: #Запуск игры brain-even
	./bin/brain-even
brain-games: #Запуск brain-games
	./bin/brain-games
install: #Запуск composer install
	composer install
validate: #Запуск composer install
	composer validate
lint: #Запуск Линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin