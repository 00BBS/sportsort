# sql.py - Create a SQLite3 table and populate it with data


import sqlite3

# create a new database if the database doesn't already exist
with sqlite3.connect('events.db') as connection:

    # get a cursor object used to execute SQL commands
    c = connection.cursor()

    # create the table
    c.execute('CREATE TABLE events(npeople INTEGER, address BLOB, sdate INT, ntime INT)')

