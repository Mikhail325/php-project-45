brain-prime:
	./bin/brain-prime
brain-progression:
	./bin/brain-progression
brain-gcd:
	./bin/brain-gcd
brain-calc:
	./bin/brain-calc
brain-even:
	./bin/brain-even
brain-games:
	./bin/brain-games
install:
	composer install
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin