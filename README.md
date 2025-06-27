# Ngapali Paradise Hotel Reservation System

Welcome to the **Ngapali Paradise Hotel Reservation System**, a feature-rich and beautifully designed hotel reservation platform. This project was developed as a final-year bachelor's project, showcasing advanced features and a user-friendly interface.

## Table of Contents

-   [About the Project](#about-the-project)
-   [Features](#features)
-   [Technologies Used](#technologies-used)
-   [Getting Started](#getting-started)
-   [Screenshots](#screenshots)
-   [License](#license)

---

## About the Project

The Ngapali Paradise Hotel Reservation System is designed to provide a seamless booking experience for guests while offering powerful management tools for administrators. The system includes a responsive front-end, secure back-end, and a variety of features to enhance the user experience.

You can view the design prototypes for this project on [Figma](https://www.figma.com/file/vwrLYsY99At639kmO3F1xt/NgapaliParadiseHotel?type=design&node-id=1088%3A196&mode=design&t=STLKuLiDPMsXLhTW-1).

---

## Features

### User-Facing Features

-   **Home Page**:
    -   Intuitive booking form with real-time updates and responsive design.
    -   Aesthetic room selection with detailed descriptions and image galleries.
    -   Scroll-based animations for an engaging user experience.

-   **Booking System**:
    -   Seamless booking process with an intuitive interface.
    -   Coupon system for discounts.
    -   Secure payment processing with Stripe integration.

-   **Authentication System**:
    -   Advanced Laravel-based authentication with cache optimization.

---

### Admin Features

-   **Admin Dashboard**:
    -   Manage rooms, users, and bookings efficiently.
    -   Generate reports and export data.

-   **Automated Tests**:
    -   Comprehensive test coverage using phpUnit.

---

## Technologies Used

-   **Front-End**: SASS, Alpine.js, Laravel, Livewire
-   **Back-End**: Laravel, MySQL
-   **UI Design**: Figma
-   **Testing**: phpUnit

---

## Getting Started

### Prerequisites

-   PHP >= 8.0
-   Composer
-   Node.js & npm
-   MySQL

### Installation

1.  Clone the repository:

    ```bash
    git clone https://github.com/your-username/NgapaliParadiseHotel.git
    cd NgapaliParadiseHotel
    ```

2.  Install dependencies:

    ```bash
    composer install
    npm install
    ```

3.  Set up the environment:
    -   Copy `.env.example` to `.env`:

        ```bash
        cp .env.example .env
        ```

    -   Update the `.env` file with your database and Stripe credentials.

4.  Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

5.  Build front-end assets:

    ```bash
    npm run dev
    ```

6.  Start the development server:

    ```bash
    php artisan serve
    ```

7.  Access the application at `http://localhost:8000`.

---

## Screenshots

### Home Page

![Home Page Screenshot](path/to/home-page-screenshot.png)

### Booking System

![Booking System Screenshot](path/to/booking-system-screenshot.png)

### Admin Dashboard

![Admin Dashboard Screenshot](path/to/admin-dashboard-screenshot.png)

---

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

---

## Contact

For any inquiries or feedback, please contact [your-email@example.com].
