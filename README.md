# EmploymentSearch

## Project Synopsis:
_The project aims to develop a web application using PHP Laravel, designed to manage job applications efficiently. Users can create and post job offers, track their applications, and monitor their progress. The platform will include features such as user authentication, a dashboard to organize active and past applications, and notification tools to update users about application statuses. This system will streamline the job application process, providing an intuitive and user-friendly experience._

## Screenshots
<img src="https://github.com/user-attachments/assets/8b6bbce4-8f70-452b-9d6e-707c96c93d03" width=400px>
<img src="https://github.com/user-attachments/assets/550c62de-6e4f-4e73-a28e-bc322214b499" width=400px>

---

## Instalation Requirements

<ul>
    <li>Install an application for the code</li>
    <li>Get an aplication to use sql databases</li>
    <li>Install Node in your PC</li>
    <li>Install Composer in your PC</li>
    <li>Install the database located in Instalation directory and import it into sql app</li>
    <li>Configure .env to let the web use the database</li>
    <li>Execute the terminal commands that are given after this section</li>
    <li>Optional: Install Postman to manipulate the information (Create an employment, modify one, delete, etc)</li>
</ul>

---

## Installation steps

1. ### First you need an application to see all the code (_For example VSCode_)
<img src="https://github.com/user-attachments/assets/d2f37fa4-729f-42d5-9735-f98ac4f710ac" width=700>

2. ### Then you need an application to develop sql Databases (_For example XAMMP_)
<img src="https://github.com/user-attachments/assets/ff35f5d6-c921-419a-ac14-ba92ba72c083" width=700>

3. ## Then you need to browse in internet to install composer and node in your PC
<img src="https://github.com/user-attachments/assets/2b384a47-d0b4-49a5-ac78-2efef7439f9f" width=500>
<img src="https://github.com/user-attachments/assets/66853a0e-f95c-4c70-88c5-f9251e6d690c" width=500>

_Node_: https://nodejs.org/en/ <br>
_Composer_: https://getcomposer.org 

4. ### Once you install them, you need to run into the terminal this 3 commands in this order
* Clone Repository
  ```sh
  git clone https://github.com/SantiVigna/EmploymentSearch.git
  ```
    _Enter into the cloned folder and execute the next 2 commands_ <br> <br>
* Npm
  ```sh
  npm install
  ```
* Composer
  ```sh
  composer install
  ```
  <br>
>[!WARNING]
>If you don't run this 2 commands the application won't work.

  ---

5. ### Then you need to import the sql database into the sql application
<img src="https://github.com/user-attachments/assets/f9c741ce-3ea1-4223-8a32-e2ba8b1b47b7" width=700>

6. Now you need to configure the .env file to connect it with the database

_You have to change this:_ <br>
<img src="https://github.com/user-attachments/assets/89ea22b9-50a3-4da2-8ab4-8d13837d1596" width="600">

_To this_ <br>
<img src="https://github.com/user-attachments/assets/022ed5cb-52a3-4b49-aac3-36ec4d9423bb" width="600">

>[!NOTE]
>You just need to uncomment those 5 lines and change the name of the database.
---
7. #### Finally you need to run the following command to migrate the table to database
* Migration
  ```sh
  php artisan migrate:fresh --seed
  ```

## EndPoints
1. #### Route that makes all endpoints visible. 
<img src="https://github.com/user-attachments/assets/b9196b7c-7c10-4421-9a44-e3d2bb0daed9" width="600"> 

2. #### Route that gives the possibility to create an employment
<img src="https://github.com/user-attachments/assets/5c0d16ac-742d-4fe0-a7b0-bf3b96aee2ec" width="600"> 

>[!CAUTION]
>Those are the only parameters to be able to create a job, if you try to add something that is not within the parameters it won't work.

3. #### Route to delete an employment by the ID
<img src="https://github.com/user-attachments/assets/e73a9720-7a52-4ff5-9b96-ff2ada05157a" width="600"> 

>[!NOTE]
>If you try to remove an unexistent employment it will drop an error.

4. #### Route in which you can edit an employment
<img src="https://github.com/user-attachments/assets/8632f3ba-1259-423a-beff-c09964dc2cab" width=600>

>[!CAUTION]
>You must follow the given structure, otherwise it won't work.

5. #### Route that makes just one employment visible by the ID
<img src="https://github.com/user-attachments/assets/1d7b4d38-e994-4de4-a9b8-5db729a13af6" width=600>

---

## Tests
_Testing is crucial to ensure the website works as intended. It validates core features like job posting, application tracking, identifying and fixing issues before deployment. By running thorough tests, we guarantee a reliable and seamless user experience._

_By this command you can run tests:_

* Test in Terminal
  ```sh
  php artisan test
  ```
<img src="https://github.com/user-attachments/assets/386c178d-f890-4a70-92c2-298cda3f8ba9"> 

* Test in HTML
```sh
  php artisan test --coverage-html=coverage-report
  ```
<img src="https://github.com/user-attachments/assets/88abcd58-7112-444f-878f-07a249ebc833" width=800>

---

## Database Diagram
_With this diagram the relation of the tables and their parameters can be seen_
![image](https://github.com/user-attachments/assets/4046c2c5-f35d-4fd1-a0ff-c8541e309097)

---

## Author

Santino Vigna Tiburzi <br>
<a href="https://github.com/SantiVigna">Github</a>
<a href="https://www.instagram.com/santivigna_/">Instagram</a>
