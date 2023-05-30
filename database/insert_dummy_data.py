#!/usr/bin/env python3
import sqlite3
import random

# Connect to the database
conn = sqlite3.connect('smart_window.db')
cursor = conn.cursor()
with open('insert_dummy_data.sql', 'r') as sql_file:
  sql_script = sql_file.read()
cursor.executescript(sql_script)

# Select the rows to update in the "temps" table
cursor.execute("SELECT * FROM temperature")

for i in range(24 * 3600):
  date = '2017-11-19 ' + str(i // 3600) + ':' + \
      str((i % 3600) // 60) + ':' + str(i % 60)
  cursor.execute("INSERT INTO temperature (value, date) VALUES (?, ?)",
                 (random.randint(0, 30), date))
conn.commit()
conn.close()
