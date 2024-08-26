# JobQuest

JobQuest is a web-based job board application built using PHP and the Laravel framework. It allows users to search and apply for jobs, as well as register as employers to post job listings. The platform provides a seamless experience for job seekers and employers alike, with features like job filtering, application tracking, and job posting management.

## Table of Contents
- [Features](#features)
- [Technical Aspects](#technical-aspects)
- [Installation](#installation)
- [Usage](#usage)
- [Notes](#notes)

## Features

### Job Search and Filtering
- **View Available Jobs**: Users can browse the available jobs listed on the main page. The jobs are displayed with essential details like job title, company, location, and a brief description.
- **Search by Title or Description**: Users can search for specific job titles or keywords in job descriptions, making it easy to find relevant positions.
- **Salary Range Filtering**: Users can filter jobs based on their preferred salary range, ensuring they find jobs that meet their financial expectations.
- **Experience and Category Filtering**: Users can filter jobs by required experience level and job category, helping them narrow down the listings to the most suitable options.
- **Job Description and Application**: Clicking on a job listing takes users to a detailed job description page, where they can learn more about the role and apply directly from the page.
- **Explore More Jobs**: On the job description page, users can also explore other jobs offered by the same company, making it easier to find related opportunities.

### User Account Management
- **User Dashboard**: After signing in, users can access a simple dashboard where they can track the jobs they’ve applied for.
- **Employer Registration**: Users can register as employers, allowing them to post job listings and manage applications.
- **Application Management**: Employers can view the list of candidates who have applied for their job postings, making it easy to review and contact applicants.

## Technical Aspects

### Laravel Framework
- **Routing**: Laravel's routing system is used to manage the navigation within the application. It handles requests and directs users to the appropriate views.
- **Components**: Components are utilized for rendering views across different pages, ensuring a consistent and reusable UI.
- **Middlewares, Policies, and Gates**: These are implemented to handle user authentication and authorization, securing sensitive routes and actions.
- **Query Builder**: Laravel’s Query Builder is used for filtering jobs based on user inputs like salary range, experience, and job category.
- **File Uploading System**: Employers can upload job-related documents and images, which are securely stored and managed within the application.
- **Breadcrumbs Navigation**: Implemented for easy navigation, breadcrumbs help users keep track of their location within the site.
- **Postman Testing**: API endpoints were tested using Postman to ensure reliability and performance.
- **Adminer**: Adminer was used as a database visualization tool to manage and inspect the database structure and contents.
- **MVC Pattern**: The project follows the Model-View-Controller (MVC) pattern, ensuring a clean separation of concerns.
- **Tailwind CSS**: Tailwind CSS is used to style the application, providing a modern and responsive user interface.

## Installation

To run JobQuest locally, follow these steps:

1. **Clone the Repository**: 
   ```bash
   git clone git@github.com:aniruddha-10/JobQuest.git
   ```

2. **Navigate to the Project Directory**:
   ```bash
   cd jobquest
   ```

3. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

4. **Set Up the Environment**:
   - Copy the `.env.example` file to `.env`.
   - Update the environment variables in the `.env` file, including database credentials.

5. **Migrate the Database**:
   ```bash
   php artisan migrate --seed
   ```

6. **Serve the Application**:
   ```bash
   php artisan serve
   ```

7. **Build Frontend Assets**:
   ```bash
   npm run dev
   ```

## Usage

Once the application is running, you can access it via `http://localhost:8000`. From here, users can browse jobs, register as job seekers or employers, and start interacting with the platform.

## Notes

- **Database Seeding**: The data seeded in the database is generated for demonstration purposes and is not real.
- **Development Mode**: For local development, make sure to use `php artisan serve` and `npm run dev` to run the backend and frontend services respectively.




## Badges

Add badges from somewhere like: [shields.io](https://shields.io/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)


## Environment Variables
Check the **.env.example** file for the required values that needs to be specified before running the project 

