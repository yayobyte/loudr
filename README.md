# LOUDR
### Sharing design

> Repositorio para el proyecto de interacpedia

**Developers**
- Cristian Gutierrez
- Lizzeth Perez
- Jorge Ramirez

### Installations Steps
- Install Xampp

   1. Download XAMPP
        - https://www.apachefriends.org/es/download_success.html
        - Initialize service (Apache, MySQL)

- Clone Repository

    1. Open console
    2. Go to htdocs folder in Xampp installation usually (C:\xampp\htdocs)
    3. Do git clone https://github.com/qdobyte/interacpedia.git
    4. Do cd interacpedia
    
- Install Dependencies

    1. Do composer install
    2. Do npm install
    
- Install DataBase

    1. Open `http://localhost/phpmyadmin/`
    2. Create database `interacpedia`
    
- Configure Environment

    1. Copy file `.env.example` as `.env`
    
- Compile Assets

    1. Do npm run dev
    
### Troubleshooting

- Migrating the base auth: ` SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long;`
    
    - Go to https://laravel-news.com/laravel-5-4-key-too-long-error
    
- Permission error on laravel logs ` storage/logs `

    - Change permission to folder ` chmod -R 777 storage`
    