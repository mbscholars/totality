
## Demo Link

- [Demo](https://heroku-breaking-bad.herokuapp.com/) - https://heroku-breaking-bad.herokuapp.com/


## The Breaking Bad Project
#Installation && Setup

- After installation
- Copy the .env.example to .env file making sure to add the variable 
```sh
BREAKING_BAD_API = "https://www.breakingbadapi.com/api/"**
```
- Run Migrations: 
```sh 
php artisan migrate
```
- Run Command to fetch characters from API
```sh 
php artisan characters::fetch**
```

- Fire Up the Application: 
```sh 
php artisan serve**
```

#Tools and Packages
- Tailwind Css
- Laravel Livewire
- TurboLinks for SPA

