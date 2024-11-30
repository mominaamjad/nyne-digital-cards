<div align="center">  
    <img src="/public/images/logo.png" align="center" width="25%" alt="Nyne Logo">
</div>

Nyne is a web application inspired by hihello.me, designed to provide a user-friendly experience with a robust backend. It allows you to store all your information in one place in the form of cards - both personal and business. The project encompasses a client-side and admin-side, each serving specific purposes.

## Technologies Used

### Frontend:
  - HTML
  - Blade
  - CSS
  - JavaScript

### Backend:
  - PHP
  - Laravel framework
  - MySQL database
  - WAMP server

## Features

### Client Side

- **User Account Management**
    - create accounts to manage personal and business cards
    - update and share information through QR Codes

- **QR Code Generation**
    - generates unique QR code for each card, allowing easy sharing and scanning

- **Asynchronous Server Calls**
    - utilizes Fetch API for asynchronous server calls

### Admin Side

- **Customer Management**

    - view all customers and their respective cards
    - find customers by name, email, company, or role
 
### User-Friendly Interface

- visually appealing and cohesive theme to enhance overall UI

## Installation

- Clone the repository
  ```
  https://github.com/mominaamjad/nyne-digital-cards.git
  ```
- Have `PHP` installed locally
  
- Have `composer` installed locally
  
- Install dependencies
  ```
  composer install
  ```
- Copy `.env.example` to `.env` and set variables
- Run
  ```
  php arstisan key:generate
  ```
- Run
  ```
  php artisan serve
  ```

## Contributing

Contributions are welcome! If you have ideas for improvements, bug fixes, or new features, feel free to open an issue or submit a pull request.

## Acknowledgements

This project is a combined effort of me and my group mate Haneen Ehsan, for Web Technologies Course.
