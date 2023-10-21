deploy: public/build/manifest.json
	rsync -avz public/build safety:~/public_html/public
	ssh safety 'cd ~/public_html && git pull && make install'

install: vendor/autoload.php .env public/storage
	php artisan cache:clear
	php artisan migrate

.env:
	cp .env.example .env
	php artisan key:generate

public/storage:
	php artisan storage:link

vendor/autoload.php: composer.lock
	composer install
	touch vendor/autoload.php

public/build/manifest.json: package.json
	npm install
	npm run dev
