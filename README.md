# Contact Form

Made as a way to familiarize learners (myself included) to form data handling.
## Run Locally
* Clone the project

   ```bash
   git clone https://github.com/AaronMTS/contact-form.git
   ```
    
### Using JavaScript
* Visit the project's live preview

* Test the form using dummy data

### Using PHP and XAMPP

* Download XAMPP [here](https://www.apachefriends.org/download.html) and install it to your computer.

* Transfer the project directory to htdocs.
   ```
   C:\xampp\htdocs
   ```

* Edit index.html: Remove the form ID and add contact.php as a value to the action attribute
   ```
   <form action="contact.php" method="post" id="">
   ```

* Open XAMPP and start the server
   1. Start Apache

   2. In your web browser, go to your project directory
      ```
      localhost/contact-form/index.html
      ```
   3. Test the form using dummy data
