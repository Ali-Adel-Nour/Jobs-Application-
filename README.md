# Job Application using Laravel PHP

This job application platform is built with Laravel PHP and provides a seamless experience for both employers and job seekers. Below are the instructions to set up, run, and use the application.

## Usage

### Database Setup

1. **Database Configuration:**
   - Open `config/Database.php` and change the default driver if you want to use a database other than MySQL.
   - If using MySQL, create a database and add the database credentials (database name, username, and password) to the `.env.example` file. Rename it to `.env`.

2. **Migrations:**
   - Run the following command to create the necessary tables and columns:
     ```
     php artisan migrate
     ```

3. **Seeding the Database:**
   - To add dummy listings with a single user, run:
     ```
     php artisan db:seed
     ```

### File Uploading

- Uploaded listing files are stored in "storage/app/public". Create a symbolic link to make them publicly accessible:
  ```
  php artisan storage:link
  ```

### Running the Application

1. **Serve Locally:**
   - Upload the files to your document root, Valet folder, or run the following command to serve the application locally:
     ```
     php artisan serve
     ```

2. **Accessing the Application:**
   - Visit `http://localhost:8000` (or the URL provided by the `artisan serve` command) in your web browser to access the application.

## License

The LaraGigs app is open-source software licensed under the MIT license.

## Credits

This application was developed following the Traversy Media course available at [YouTube](https://youtu.be/MYyJ4PuL4pY?si=4U2pck7UvWl9QWkd). Special thanks to Traversy Media for the educational content.
