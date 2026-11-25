Help Queue
A small Laravel app to ask for help during practical sessions. Students join a queue, choose a topic, and the teacher helps them one by one.

Installation
git clone https://github.com/JINZO-AI/help-queue.git help-queue
cd help-queue
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
composer run dev
The database file is not in Git. The migrate command offers to create it, answer yes.

Then open http://localhost:8000 in your browser.

    