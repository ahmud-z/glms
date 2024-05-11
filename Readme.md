# Requirements
- A software to communicate between class teacher and students
- There will be two type of actor/users
    - Teacher
    - Student
- Teacher Capbilites
    - Teacher can create account
    - Teacher can login
    - Teacher can create classes
    - Teacher can create a post
        - post can have an attachment/file
- Student capabilities
    - Student can create account
    - Student can create login
    - Student can join any classes
        - Using class code
    - Student can see the posts of a class

# Analysis
- Teacher info
    - Email
    - Name
    - Password
- Student Info
    - Email
    - Name
    - Password
- Class Info
    - Name
    - Section
    - Room No
        - Student of a class
- Posts of a class


# Required Tools

- PHP 8+
- MySQL
- An IDE


### How to run

- `php -S localhost:8000` 

### DB Tables

- users
    - id
    - type
        - student
        - teacher
    - email
    - password
- classes
    - id
    - user_id
    - code
    - name
    - section
    - subject
    - room
- class_students
    - class_id
    - user_id
- class_posts
    - id
    - user_id
    - content
    - created_at
    - updated_at
