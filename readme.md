# Secure E-Voting System: A LAMP Project


[Project Link](http://secureevoting.great-site.net)


### This repository contains a comprehensive web development project aimed at creating a secure electronic voting system. By following this documentation only one can build the entire project from the scratch.
The project utilizes the LAMP stack, with Apache serving as the web server, MySQL as the database management system, and PHP as the backend programming language. The frontend is developed using HTML, CSS, and JavaScript, with additional styling provided by Bootstrap CSS. Furthermore, all the uesr password has been hashed using md5 function. using the following documentation.

<a href="https://www.w3schools.com/php/func_string_md5.asp" target="_blank">md5 documentation link</a>
<hr>






## Overview

The project consists of a fully functional electronic voting system designed to ensure security, reliability, and ease of use. By leveraging the power of the LAMP stack, it provides a robust and scalable solution for conducting elections online.



![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/c3726ca1-b95b-4ed4-a4a8-7731ac73bcab)


![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/ba233b8e-0d52-4ec4-8768-5800f04b99ba)



## Features


Authentication: Users can securely log in to the system using their credentials. The passwords are hashed using md5 implentation

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/64d21ebb-a21f-485a-a4a1-14893d7448e4)
![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/6fa8fa8f-33e2-4661-8eea-9bbc9d05ed93)



Voter Management: The system maintains a database of registered voters, ensuring accurate and up-to-date records.

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/b6b7a058-4f66-4f9e-a82f-d1c067628c26)


Party Management: Parties participating in the election are managed within the system, facilitating organization and administration.


![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/645cfafa-0382-4d82-83f5-f641dfd442be)


Voting Process: Voters can cast their votes electronically, with the system ensuring confidentiality and integrity throughout the process.

Results Reporting: The system generates comprehensive reports of election results, providing transparency and accountability.

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/6aabd6c2-16d2-4f3c-b0de-1a21cac0cd69)


Security: Passwords of every users are hashed using md5 encryption in the database

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/76e5d848-e964-4336-bc30-23fc3e6fe44d)



##  Database Structure


The project includes a MySQL database with three tables:


Party: Stores information about political parties participating in the election.

note: for Party table we have to manually create table in phpmyadmin and dump some data as follows:

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/60ac8914-c424-4a9e-b95c-d57c47d6e05a)


Loginusers: Contains user credentials for logging into the system securely.

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/8b927d9b-abde-41fd-8654-57249b54a54b)


Voters: Maintains records of registered voters, including their personal details.

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/dc204746-3346-4ab3-9ee3-d2bf5623234a)


The database schema and code for table creation are provided in the database folder, under the name 'secure_e_voting'.




## How to Use

To deploy the project, simply set up a LAMP environment and import the provided database. Configure the Apache server to host the project files and ensure that PHP is properly configured. Users can then access the system through a web browser to participate in the election process.

![image](https://github.com/Prithak8/Secure_E_Voting_-LAMP-/assets/109690999/503184c4-acac-4827-9f7a-654e386630d4)

## Internet Deployement:

### I have deployed the entire project using completely free services from 

<a href="https://www.infinityfree.com" target="_blank">Infinity Free</a>


### My project:

<a href="http://secureevoting.great-site.net" target="_blank"> Project Link </a>


### I used the following reference video for successful deployement of the website. You can check it out too!

<a href="https://www.youtube.com/watch?v=IDMEVxEyc5U" target="_blank">Reference Youtube Video</a>



## Conclusion


The Secure E-Voting System project showcases the capabilities of the LAMP stack in developing secure and reliable web applications. By providing a user-friendly interface and robust backend functionality, it offers a seamless experience for conducting electronic elections.

