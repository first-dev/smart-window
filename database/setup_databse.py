#!/usr/bin/env python3
import sqlite3


conn = sqlite3.connect('smart_window.db')

cursor = conn.cursor()
with open('init_database.sql', 'r') as sql_file:
  sql_script = sql_file.read()
cursor.executescript(sql_script)
conn.commit()
conn.close()
