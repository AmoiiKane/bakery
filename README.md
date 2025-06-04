# bakery
# At Falco's Bakery Management System

A simple web application for managing bakery orders, inventory, and recipes for At Falco's Bakery.

## Features

- **Order Management**: Add and track customer orders with pickup dates
- **Inventory Management**: Track ingredients and stock levels
- **Recipe Management**: Store and manage bakery recipes
- **Clean Interface**: User-friendly web interface with bakery-themed styling
- **Database Integration**: MySQL database for data persistence

## Tech Stack

- **Backend**: PHP
- **Database**: MySQL/MariaDB
- **Frontend**: HTML, CSS, JavaScript
- **Server**: Apache/Nginx

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Amoiikane/bakery.git
   cd bakery
   ```

2. Set up your database:
   - Create a MySQL database named `at_falcos`
   - Update database credentials in `db.php` if needed
   - Run `setup.php` to create the required tables

3. Configure your web server to serve files from the project directory

4. Access the application at `http://localhost/bakery`

## Usage

1. **Add Orders**: Navigate to "Add Order" to create new customer orders
2. **Manage Inventory**: Go to "Inventory" to track ingredients and supplies
3. **Recipe Management**: Use "Recipes" section to store bakery recipes
4. **Navigation**: Use the top navigation bar to switch between sections

## File Structure

```
├── index.php              # Main application entry point
├── db.php                # Database connection configuration
├── setup.php             # Database table creation script
├── submit_order.php      # Order form submission handler
└── views/               # View templates
    ├── home.php         # Homepage/dashboard
    ├── add_order.php    # Order creation form
    ├── inventory.php    # Inventory management
    └── recipes.php      # Recipe management
```

## Database Tables

- **orders**: Stores customer orders with pickup dates and status
- **inventory**: Tracks ingredients and their quantities
- **recipes**: Stores bakery recipes with ingredients and instructions

- PHP 7.4+
- MySQL 5.7+ or MariaDB
- Web server (Apache/Nginx)

## Contributing

1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License

This project is open source and available under the MIT License.