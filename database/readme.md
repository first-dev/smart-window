# Smart Window System

This directory contains three files related to a smart window system. The system uses a SQLite database to store temperature data, schedules, actions, and configurations.

## File 1: create_tables.sql

This file contains SQL statements to create the necessary database tables for the smart window system. It defines the following tables:

    temperature: Stores temperature data with columns value (integer) and date (datetime).
    schedules: Stores scheduled actions with columns id (integer, primary key), ACTION (varchar), and date (datetime).
    actions: Stores performed actions with columns id (integer, primary key), ACTION (varchar), and date (datetime).
    configurations: Stores system configurations with columns name (varchar) and value (varchar).

It also creates a unique index idx_configurations_name on the name column of the configurations table.

## File 2: insert_dummy_data.py

This Python script connects to the smart_window.db database and inserts dummy data into the temperature table. It also executes an SQL script insert_dummy_data.sql to populate the database with temperature values for each hour of a specific date. The script uses the sqlite3 module to interact with the SQLite database.

## File 3: smart_window.db

This file is the SQLite database file where the smart window system's data is stored. It contains the tables defined in create_tables.sql and any additional data inserted by the insert_dummy_data.py script.

To set up the smart window system, perform the following steps:

    Execute the SQL statements in create_tables.sql to create the necessary database tables.
    Run the insert_dummy_data.py script to insert dummy temperature data into the temperature table.
    Use the smart_window.db file as the database for your smart window system.

Please note that you may need to modify the code and files according to your specific requirements.

For any further assistance or inquiries, please feel free to contact the repository owner.
