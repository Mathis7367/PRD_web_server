#!/usr/bin/python
import pymysql
import sqlite3


#database connection
connection = sqlite3.connect('db.sqlite3')
cursor = connection.cursor()


while(1):
	
	nb_total = random.randint(0, 40)
	nb_in = random.randint(0, 15)
	nb_out = random.randint(0, 15)
	cursor.execute("""INSERT INTO `counting_people_datafromroom (`people_in_room`,`people_entered`,`people_got_out`) VALUES (nb_total, nb_in,nb_out) """)
    connection.commit()
	time.sleep(10)

client.disconnect()
