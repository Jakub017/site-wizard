# Site Wizard

Site Wizard is a CMS for managing content on websites or online stores. It offers essential features like user, product, and category management, discount handling, and the ability to add blog posts or company services. Security is a priority, with two-factor authentication (2FA) and session management for monitoring active logins. The panel also includes a "Help" section for direct contact with the developer via a contact form for queries, site changes, or issue reporting. Developed according to WCAG 2.1 standards, it ensures accessibility for all users.

## Features

-   Users management
-   Two factor authentication and logged session management
-   CRUD for products, categories, blog, services etc.
-   WCAG 2.1 ready
-   TinyMCE WYSIWYG editor
-   Help section
-   3 languages (polish, english, german)

## Tech Stack

**Client:** Vite, Tailwind CSS

**Server:** PHP, Laravel, Laravel Jetstream

## Run Locally

Clone the project

```bash
  git clone https://github.com/Jakub017/site-wizard.git
```

Go to the project directory

```bash
  cd site-wizard
```

Set up environment variables

```bash
  cp .env.example .env
```

Set up database connection

```bash
  DB_CONNECTION=mysql
  DB_HOST='localhost'
  DB_PORT=3306
  DB_DATABASE='database_name'
  DB_USERNAME='database_user'
  DB_PASSWORD='database_password'
```

Install dependencies

```bash
  npm install
  composer install
```

Run the migrations (with the dummy user)

```bash
  php artisan migrate --seed
```

Start the server

```bash
  php artisan serve
  npm run dev
```

## Deployment

To deploy this project run

```bash
  npm run build
```

## Authors

-   [Webcrafts](https://webcrafts.pl/)
-   [Jakub Lipiński](https://lipinskijakub.pl/pl)

## Feedback

If you have any feedback, please reach out to us at site-wizard@webcrafts.pl
