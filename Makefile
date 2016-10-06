test: vendor
	vendor/bin/phpunit

.PHONY: test

vendor:
	composer install
