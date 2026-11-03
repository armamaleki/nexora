# Nexora CRM

**Nexora** is an open-source Customer Relationship Management (CRM) system built with Laravel. It helps small businesses and teams organize customer relationships, manage sales pipelines, track activities, and improve their daily workflows.

The project is designed with a modular and extensible architecture, making it suitable for future expansion.

## Features

### Dashboard
- Overview of business performance
- Sales and customer statistics
- Recent activities
- Pending tasks
- Sales pipeline summary

### Contact Management
- Create and manage contacts
- Store customer information
- Organize contacts
- Track customer interactions

### Company Management
- Manage companies and organizations
- Associate contacts with companies
- Maintain company information

### Lead Management
- Create and manage leads
- Track lead sources
- Convert leads into customers or deals

### Sales Management
- Manage sales deals
- Create and configure sales pipelines
- Organize pipeline stages
- Track deal progress and status

### Task & Activity Management
- Create and assign tasks
- Track task progress
- Manage calendar events
- Record customer interactions
- Add notes to records

### Reports & Analytics
- Sales reports
- Lead source analysis
- Business performance insights

### User & Access Management
- Manage users
- Create roles and permissions
- Control access to CRM modules
- Super Admin role with full access

## Technology Stack

- **Backend:** Laravel
- **Frontend:** Blade / Tailwind CSS
- **Database:** MySQL
- **Authentication:** Laravel Authentication
- **Authorization:** Spatie Laravel Permission
- **Build Tool:** Vite

## Requirements

Before installing Nexora, make sure your environment includes:

- PHP 8.3 or higher
- Composer
- Node.js and npm
- MySQL
- Laravel-compatible PHP extensions

Check the Laravel version and package requirements in `composer.json` before installation.

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/YOUR_USERNAME/nexora-crm.git

cd nexora-crm
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install frontend dependencies

```bash
npm install
```

### 4. Configure environment

Create your environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database connection in `.env`:

```env
APP_NAME=Nexora
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nexora
DB_USERNAME=root
DB_PASSWORD=
```

Create the `nexora` database before running migrations.

### 5. Configure the Super Admin

Add the following variables to your `.env` file:

```env
NEXORA_ADMIN_NAME="Nexora Super Admin"
NEXORA_ADMIN_EMAIL="admin@example.com"
NEXORA_ADMIN_PASSWORD="Change-This-Password"
```

Use a strong password and never commit your `.env` file to Git.

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Create roles and permissions

```bash
php artisan db:seed --class=RolesAndPermissionsSeeder
```

This command creates the default roles, permissions, and Super Admin account.

### 8. Build frontend assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

### 9. Start the application

```bash
php artisan serve
```

Open the following address in your browser:

```text
http://127.0.0.1:8000
```

## Default Roles

Nexora includes the following predefined roles:

| Role | Description |
|---|---|
| `super-admin` | Full access to all system features |
| `admin` | System administration |
| `sales-manager` | Sales team and pipeline management |
| `sales-agent` | Customer and sales management |
| `support` | Customer support and task management |
| `viewer` | Read-only access to permitted modules |

## Permission Structure

Permissions follow a module-based naming convention:

```text
module.action
```

Examples:

```text
contacts.view
contacts.create
contacts.edit
contacts.delete

deals.view
deals.create
deals.edit
deals.delete

users.view
users.create
users.edit
users.delete

settings.view
settings.edit
```

You can check permissions in Laravel controllers:

```php
$this->authorize('contacts.create');
```

Or in Blade templates:

```blade
@can('contacts.create')
    <button type="button">
        Add Contact
    </button>
@endcan
```

## Project Structure

The application follows Laravel's standard directory structure:

```text
nexora/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   └── Providers/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php
│   └── api.php
├── public/
├── storage/
├── tests/
└── composer.json
```

## Security

- Authentication through Laravel
- Role-based access control with Spatie Laravel Permission
- Server-side authorization
- CSRF protection
- Password hashing
- Environment-based configuration

Never expose database credentials, application keys, or administrator passwords in public repositories.

## Roadmap

The following features are planned for future releases:

- [ ] Complete CRM dashboard
- [ ] Contact and company management
- [ ] Lead management
- [ ] Sales pipelines and deals
- [ ] Task and calendar management
- [ ] Activity tracking
- [ ] Reports and analytics
- [ ] Advanced search and filtering
- [ ] Notifications
- [ ] API support
- [ ] Multi-tenant architecture
- [ ] Automated tests

## Contributing

Contributions are welcome!

If you would like to improve Nexora:

1. Fork the repository.
2. Create a new branch.
3. Make your changes.
4. Commit your changes.
5. Open a Pull Request.

Please keep your code consistent with Laravel conventions and include tests for important functionality.

## License

Nexora is intended to be an open-source project. The official license will be specified in the repository's `LICENSE` file.

---

**Nexora CRM** — Simplify customer relationships. Organize your business. Grow with confidence.
