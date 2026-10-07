# AFBeauty: Makeup Artistry Portfolio and Client Platform

AFBeauty is a website built for showing off makeup artistry and handling client bookings. It runs on the Laravel framework. The site features an interactive user interface using Livewire 4 and Livewire Flux, secure user logins through Laravel Fortify, fast cloud image loading via Cloudinary, and an online Neon PostgreSQL database.

---

## Key Highlights

* **Interactive Lookbook and Gallery:** The portfolio is sorted into categories like Bridal, Editorial, Glam, and Events. Visitors can filter looks instantly without the page having to reload, thanks to Livewire Flux.
* **Smart Cloud Media Storage:** Photos do not take up space on the web host. Images are saved and automatically resized for different screen sizes through Cloudinary using the package `codebar-ag/laravel-flysystem-cloudinary`.
* **Safe User Logins:** User accounts and login screens are handled directly by Laravel Fortify.
* **Smooth Local Development:** You can run all your background tools at the same time, including the local web server, task queues, log viewer (Laravel Pail), and Vite asset builder. The project also includes automated code formatting with Pint and automated testing with Pest v4.
* **Works with Serverless Databases:** The database connection is set up specifically for cloud platforms like Neon and host services like Render. This keeps the database from using up resources when nobody is visiting the site.

---

## Tech Stack and Tools

| Layer | Tools Used |
| --- | --- |
| **Language and Framework** | PHP ^8.3, Laravel ^13.7 |
| **Frontend and Design** | Livewire ^4.1, Livewire Flux ^2.13, Tailwind CSS, Vite |
| **Login System** | Laravel Fortify ^1.34 |
| **Image Hosting** | Cloudinary using Flysystem (`codebar-ag/laravel-flysystem-cloudinary: ^13.0`) |
| **Database** | PostgreSQL (Neon) or SQLite for local practice |
| **Code Testing and Styling** | Pest ^4.7, Laravel Pint ^1.27, Laravel Pail ^1.2.5 |
| **Online Hosting** | Docker on Render |

---

## Getting Started

### What You Need First

Make sure you have these tools installed on your computer:

* **PHP 8.3 or higher** with these common extensions enabled: `pdo`, `pdo_pgsql` or `pdo_sqlite`, `curl`, `mbstring`, `openssl`, and `fileinfo`
* **Composer 2.x**
* **Node.js 18 or higher** along with **npm**

### Quick Setup

Download the project code and run the automated setup command:

```bash
git clone https://github.com/simon-javier/AFBeauty.git
cd AFBeauty

# This installs packages, copies the settings file, creates the security key, sets up database tables, and compiles frontend files
composer run setup

```

### Setting Up Your Environment File

Open your `.env` file and fill in your connection string and Cloudinary details:

```env
APP_NAME="AFBeauty"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Settings (Neon PostgreSQL via DB_URL)
DB_CONNECTION=pgsql
DB_URL=postgresql://neondb_owner:your_password@your-neon-host.neon.tech/neondb?sslmode=require

# Cloudinary Image Settings
FILESYSTEM_DISK=cloudinary
CLOUDINARY_API_KEY=your_api_key
CLOUDINARY_API_SECRET=your_api_secret
CLOUDINARY_CLOUD_NAME=your_cloud_name
CLOUDINARY_FOLDER=client_makeup

```

---

## Working on the Site Locally

You can launch all the needed development tools with one simple command:

```bash
composer run dev

```

This starts four things at the same time:

* **Web Server:** `php artisan serve` on port 8000
* **Background Tasks:** `php artisan queue:listen --tries=1 --timeout=0`
* **Live System Logs:** `php artisan pail --timeout=0`
* **Frontend Hot Reloading:** `npm run dev`

---

## Testing and Code Cleanup

Keep your code clean, readable, and working properly with these commands:

```bash
# Clean up code formatting and run all tests
composer test

# Fix code style automatically using Laravel Pint
composer run lint

# Check code style without changing any files
composer run lint:check

# Run tests for automated check-ins
composer run ci:check

```

---

## Putting the Site Online (Render and Neon)

### Production Settings Checklist

Make sure these environment variables are added to your Render settings dashboard:

* `APP_ENV=production`
* `APP_DEBUG=false`
* `APP_KEY=base64:...`
* `DB_CONNECTION=pgsql`
* `DB_URL=postgresql://neondb_owner:...`
* `FILESYSTEM_DISK=cloudinary`
* `CLOUDINARY_API_KEY=...`
* `CLOUDINARY_API_SECRET=...`
* `CLOUDINARY_CLOUD_NAME=...`
* `CLOUDINARY_FOLDER=client_makeup`
* `SESSION_DRIVER=cookie` (this keeps user sessions in browser cookies so the database can rest when traffic is low)

### Uptime Monitoring

* Point external website monitors like UptimeRobot to the `/up` web address. This lets the monitor check if the site is working without having to query the database, which prevents unwanted database run-time costs.
