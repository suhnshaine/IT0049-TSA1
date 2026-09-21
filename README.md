# TSA1 - TASKS FOR TODAY MANAGEMENT SYSTEM

## Installation

### Clone the Repository

```bash
git clone https://github.com/suhnshaine/IT0049-TSA1.git
```

### Navigate to the Project Folder

```bash
cd IT0049-TSA1
```

### Install Dependencies

```bash
composer install
```

## Database Setup

1. Create a database named:

```text
it0049_tsa1
```

2. Import the database export file:

```text
database/it0049_tsa1.sql
```

3. Ensure Apache and MySQL are running in XAMPP.

## Environment Configuration

Rename the provided environment file:

```text
env -> .env
```

Configure the database connection:

```ini
database.default.hostname = localhost
database.default.database = it0049_tsa1
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

Configure the application URL:

```ini
app.baseURL = 'http://localhost:8080/'
```

## Running the Application

Start the development server:

```bash
php spark serve
```

Open:

```text
http://localhost:8080
```