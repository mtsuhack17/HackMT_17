import googlemaps
from datetime import datetime

gmaps = googlemaps.Client(key='AIzaSyCiPziOIp5qzwu88qwiEP1GCmcHHZYNeC8')

res = gmaps.distance_matrix(origins = "704 East Street, Murfreesboro, TN 37130", destinations = "1301 E Main St, Murfreesboro, TN 37132", mode = "walking")


