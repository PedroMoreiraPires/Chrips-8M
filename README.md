# Proyecto Laravel - Sistema de Comentarios

Un proyecto de aplicación web desarrollado con Laravel que implementa un sistema básico de comentarios y usuarios.

Creado por Pedro Moreira Pires. Correo: pmoreirapiress01@educarex.es

## Características

- Sistema de autenticación de usuarios
- Gestión de comentarios
- Interfaz web moderna con Blade templates
- Base de datos con migraciones y seeders
- Pruebas con Pest
- Construcción frontend con Vite

## Tecnologías Utilizadas

- **Backend**: Laravel 11.x
- **Base de Datos**: MySQL/SQLite
- **Frontend**: Blade, CSS, JavaScript
- **Build Tool**: Vite
- **Testing**: Pest
- **PHP**: 8.2+

## Requisitos Previos

- PHP 8.2 o superior
- Composer
- Node.js y npm
- Base de datos (MySQL, PostgreSQL, SQLite, etc.)

## Instalación

1. Clona el repositorio:
   ```bash
   git clone <url-del-repositorio>
   cd 8m
   ```

2. Instala las dependencias de PHP:
   ```bash
   composer install
   ```

3. Instala las dependencias de Node.js:
   ```bash
   npm install
   ```

4. Copia el archivo de configuración:
   ```bash
   cp .env.example .env
   ```

5. Genera la clave de aplicación:
   ```bash
   php artisan key:generate
   ```

6. Configura la base de datos en el archivo `.env` y ejecuta las migraciones:
   ```bash
   php artisan migrate
   ```

7. Ejecuta los seeders para datos de prueba:
   ```bash
   php artisan db:seed
   ```

8. Construye los assets:
   ```bash
   npm run build
   ```

## Uso

Para ejecutar el servidor de desarrollo:

```bash
php artisan serve
```

Para desarrollo con hot reload de assets:

```bash
npm run dev
```

## Estructura del Proyecto

- `app/Models/` - Modelos Eloquent (User, Comentario)
- `database/migrations/` - Migraciones de base de datos
- `database/seeders/` - Seeders para datos de prueba
- `resources/views/` - Vistas Blade
- `routes/web.php` - Rutas web
- `tests/` - Pruebas con Pest

## Pruebas

Ejecuta las pruebas con:

```bash
php artisan test
```

## Características

- Sistema de autenticación de usuarios
- Gestión de comentarios
- Interfaz web moderna con Blade templates
- Base de datos con migraciones y seeders
- Pruebas con Pest
- Construcción frontend con Vite

## Tecnologías Utilizadas

- **Backend**: Laravel 11.x
- **Base de Datos**: MySQL/SQLite
- **Frontend**: Blade, CSS, JavaScript
- **Build Tool**: Vite
- **Testing**: Pest
- **PHP**: 8.2+

## Requisitos Previos

- PHP 8.2 o superior
- Composer
- Node.js y npm
- Base de datos (MySQL, PostgreSQL, SQLite, etc.)

## Instalación

1. Clona el repositorio:
   ```bash
   git clone <url-del-repositorio>
   cd 8m
   ```

2. Instala las dependencias de PHP:
   ```bash
   composer install
   ```

3. Instala las dependencias de Node.js:
   ```bash
   npm install
   ```

4. Copia el archivo de configuración:
   ```bash
   cp .env.example .env
   ```

5. Genera la clave de aplicación:
   ```bash
   php artisan key:generate
   ```

6. Configura la base de datos en el archivo `.env` y ejecuta las migraciones:
   ```bash
   php artisan migrate
   ```

7. Ejecuta los seeders para datos de prueba:
   ```bash
   php artisan db:seed
   ```

8. Construye los assets:
   ```bash
   npm run build
   ```

## Uso

Para ejecutar el servidor de desarrollo:

```bash
php artisan serve
```

Para desarrollo con hot reload de assets:

```bash
npm run dev
```

## Estructura del Proyecto

- `app/Models/` - Modelos Eloquent (User, Comentario)
- `database/migrations/` - Migraciones de base de datos
- `database/seeders/` - Seeders para datos de prueba
- `resources/views/` - Vistas Blade
- `routes/web.php` - Rutas web
- `tests/` - Pruebas con Pest

## Pruebas

Ejecuta las pruebas con:

```bash
php artisan test
```
