#!/usr/bin/python
import pickle
import mysql.connector
import time
import datetime

ts = time.time()
timestamp = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')


def save_obj(obj, name ):
    with open(name, 'w') as f:
        pickle.dump(obj, f, 0)

print "Content-type: text/html"
print
print "<html><head>"
print ""
print "</head><body>"
print "Hello."
print "</body></html>"

import cgi
#import pprint
#pp = pprint.PrettyPrinter(indent=4)
form = cgi.FieldStorage()
#save_obj(form, "form.txt")
user = int(form.getvalue("user"))
lat = float(form.getvalue("lat"))
lng = float(form.getvalue("lng"))

with open("textfile.txt") as f:
    f.write("Lat: " + lat)
    f.write("\n")
    f.write("Lng: " + lng)
cnx = mysql.connector.connect(user='hackmt7', password='hackmt7mysql', 
        host='ancient.cs.mtsu.edu', database='hackmt7')

cursor = cnx.cursor()

#Table: POSITION
#USERID
#COORD_LON
#COORD_LAT
#TIMES

#TABLE: ORDERS
#ADDRESS
#ASSIGNED
#COORD_LAT
#COORD_LON
#DIRECTION
#ID
#TIMES

query = ("SELECT id FROM POSITION WHERE USER IS %d")
data_q = (user)
cursor.execute(query, data_q)
res = cursor.fetchall()

if(len(res) != 0):
    query = ("UPDATE POSITION SET COORD_LON=%f, COORD_LAT=%f,TIMES=%s WHERE USERID=%d")
    data_q = (lng, lat, timestamp, user)
    cursor.execute(query, data_q)
else:
    query = ("INSERT INTO POSITION (USERID, COORD_LON, COORD_LAT, TIMES) VALUES (%d, %f, %f, %s)")
    data_q = (user, lat, lng, timestamp)
    cursor.execute(query, data_q)

cnx.commit()
cnx.close()

#pp.print(form.values())
