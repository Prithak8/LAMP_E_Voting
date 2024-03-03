# Secure E-Voting System: A LAMP Project


### This repository contains a comprehensive web development project aimed at creating a secure electronic voting system. The project utilizes the LAMP stack, with Apache serving as the web server, MySQL as the database management system, and PHP as the backend programming language. The frontend is developed using HTML, CSS, and JavaScript, with additional styling provided by Bootstrap CSS.


## Overview

The project consists of a fully functional electronic voting system designed to ensure security, reliability, and ease of use. By leveraging the power of the LAMP stack, it provides a robust and scalable solution for conducting elections online.


![image](https://github.com/Prithak8/LAMP_E_Voting/assets/109690999/343e776f-e1f3-4010-9863-e3ff178bb3ed)




## Features


Authentication: Users can securely log in to the system using their credentials.

Voter Management: The system maintains a database of registered voters, ensuring accurate and up-to-date records.

Party Management: Parties participating in the election are managed within the system, facilitating organization and administration.

Voting Process: Voters can cast their votes electronically, with the system ensuring confidentiality and integrity throughout the process.

Results Reporting: The system generates comprehensive reports of election results, providing transparency and accountability.

Security: Passwords of every users are encrypted using md5 encryption in the database


##  Database Structure


The project includes a MySQL database with three tables:


Party: Stores information about political parties participating in the election.

note: for Party table we have to manually create table in phpmyadmin and dump some data as follows:

![image](https://github.com/Prithak8/LAMP_E_Voting/assets/109690999/8b729a0e-f78a-4e9c-9563-b785f5c12e35)


Loginusers: Contains user credentials for logging into the system securely.

Voters: Maintains records of registered voters, including their personal details.

The database schema and code for table creation are provided in the database folder, under the name 'secure_e_voting'.


## How to Use

To deploy the project, simply set up a LAMP environment and import the provided database. Configure the Apache server to host the project files and ensure that PHP is properly configured. Users can then access the system through a web browser to participate in the election process.

## Conclusion


The Secure E-Voting System project showcases the capabilities of the LAMP stack in developing secure and reliable web applications. By providing a user-friendly interface and robust backend functionality, it offers a seamless experience for conducting electronic elections.
