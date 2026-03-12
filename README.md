# Robotics Courses Management System

## Project Name
Robotics Courses Management System

---

## Project Description
This project is a web application developed using the Laravel framework. The system allows the management of robotics courses, robotics kits, and users with different roles such as administrators, teachers, and students.

The platform is designed to support educational robotics programs by organizing course information, managing robotics kits used in the courses, and controlling user access through role-based permissions.

The system also uses seeders and factories to populate the database with initial and test data.

---

## Technologies Used

- PHP
- Laravel
- MySQL
- FakerPHP
- Git
- GitHub

---

## Database Seeders

The project includes database seeders to populate the system with initial users and robotics kits.

### Users Seeder

Three users are created for testing purposes:

| Username | Email | Password | Role |
|--------|--------|--------|--------|
| Admon | admon@robotics.com | Adm@2022 | Administrative |
| Tecmilenio | tecmilenio@robotics.com | Adm@2022 | Teacher |
| Student | student@robotics.com | Adm@2022 | Student |

---

### Robotics Kits Seeder

Three robotics kits were added as test data:

| Kit Name | Description |
|--------|--------|
| Arduino Starter Kit | Basic robotics kit with Arduino components |
| LEGO Mindstorms Kit | Educational robotics kit designed for robotics learning |
| Raspberry Pi Robotics Kit | Advanced robotics kit based on Raspberry Pi |

---

## Course Factory

A factory was created using FakerPHP to generate fake data for the courses table. The factory automatically generates realistic information such as:

- Course title
- Course description
- Duration
- Difficulty level

The system generates **100 sample courses** using this factory.

---

## ER Diagram

The database structure is composed of the following entities:

### Users
- id
- name
- email
- password
- role
- created_at
- updated_at

### Courses
- id
- title
- description
- duration
- level
- created_at
- updated_at

### Robotics Kits
- id
- name
- description
- created_at
- updated_at

---

## Database Population

To populate the database with the test data, run the following command:

```bash
php artisan db:seed