# Patient Satisfaction Questionnaire App

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Acknowledgement](#acknowledgement)
- [License](#license)
- [FAQ](#faq)

## Introduction

The Patient Satisfaction Questionnaire App is a web-based application that allows healthcare providers to gather feedback from their patients regarding the quality of services provided. The app aims to measure patient satisfaction, identify areas for improvement, and enhance overall patient experience. This app uses Codeigniter framework and Grocery CRUD library

## Features

- **User-Friendly Interface:** The application provides a simple and intuitive interface for patients to answer the questionnaire easily.

- **Data Analysis:** The collected responses can be analyzed through graphical representations or exported to pdf file.

## Installation

To install and run the Patient Satisfaction Questionnaire App locally, follow these steps:

1. Ensure that you have a web server (such as Apache) and PHP installed on your computer.

2. Clone this repository to your web server directory.

```bash
 git clone https://github.com/irsdr/kuisioner.git
```

3. Create a new database in MySQL and import the table schema from the provided `kuisioner.sql` file.

4. Configure the database access in the `\application\config\database.php` file to match your database settings. And configure the ***base_url*** in the `\application\config\config.php` and match it with the name of the folder your application is in

## Usage

1. Make sure your web server is running and connected to the internet.

2. Access the application through a web browser by visiting `http://localhost/application-folder-name`.

3. Patients can fill out the questionnaire and submit their feedback through the provided interface.

## Acknowledgement

 - [Database](https://drive.google.com/file/d/1JUCud-nuVQweC_H76iNR1eZjLtDVBIBN/view?usp=drive_link)

## License

This project is licensed under the [MIT License](LICENSE). See the `LICENSE` file for more information.
## FAQ

#### 1. Unknown databases

The database has not been created or the database name is not the same. Create a new database or fix the database name or
adjust database connection settings

#### 2. Access denied for user

phpmyadmin account username or password does not match. Adjust the database connection with the phpmyadmin account

#### 3. Uncaught Error:Call to undefined function mysql_connect()

The mysql extension is not available or is no longer supported. Use PHP5 version or old (old school) version of xampp

#### 4. mysqli::real_connect(): / Warning: mysqli_connect():

mysqli extension is not available or not supported. Use PHP7 and above or the latest Xampp version

#### 5. The interface display does not appear or is messy

css / style file not found or not yet responsive. Use the internet while running it or delete the folder which wraps the main or master folder

#### NOTE:

Some of the above error handling solutions may not
Can resolve errors due to several factors
another or another solution.
