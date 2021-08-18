# Getting Started
## Database import from command prompt

- Create database 
- Open Command Prompt
- Type this [Syntax](#syntax)

### Syntax-

```
mysql -u username -p database_name < testing.sql
```

>**username** = *Your MySQL username.*<br /><br />
**database_name** = *Database name in which you want to import.*<br /><br />
**file.sql** = *SQL file name.*

# Register

- [Register](#register)
- [Login](#login)
- [Home](#home)
- [Logout](#logout)

## Register
Here is a register page. Must be fill all input field `name`,`email`, and `password`. Show error message if something is left. After register, this record is saved to `users` table of database and redirect to home page.
    
<img src="./images/register.png" alt="Register Image" align="center">


## Login

Here is a login page.When email and password is equal to the records from `users` table, redirect to home page. It should not access after logged in. Show error message if email or password is incorrect. 

<img src="./images/login.png" alt="Register Image" align="center">

## Home

Here is home page. It can be access after logged in or register. It should not access without logged in or register.

![Homepage Image](./images/home_page.png)

## Logout

Logout and redirect to login page.
