from datetime import date, datetime, time, timedelta
import mysql.connector
import time
import random

import glob
import os

def registro_bd(linea, fecha, hora, evento):
  con = mysql.connector.connect(user='root', password='',
								host='localhost',
								database='pruebas1')
  x = con.cursor()
  try:
	 x.execute("INSERT INTO linea"+linea+" (fecha, hora, evento) VALUES (%s, %s, %s)", [fecha, hora, evento])
	 con.commit()
  except:
	 con.rollback()
  con.close()

while True:
    inter=random.randint(3*5, 8*5)
    hoy= datetime.now();
    fecha=hoy.strftime('%Y-%m-%d')
    hora=hoy.strftime('%H:%M:%S')
    print fecha +", "+ hora + " delay next:"+str(inter)
    time.sleep(inter)

    registro_bd("1", fecha, hora, "PAN en MT, registro con delay de "+str(inter))
    registro_bd("1", fecha, hora, "OBS en MT, registro con delay de "+str(inter))
    registro_bd("2", fecha, hora, "TAS en MT, registro con delay de "+str(inter))
    registro_bd("2", fecha, hora, "CCA en MT, registro con delay de "+str(inter))
    registro_bd("3", fecha, hora, "INV en MT, registro con delay de "+str(inter))
    registro_bd("3", fecha, hora, "UNI en MT, registro con delay de "+str(inter))
    registro_bd("4", fecha, hora, "SAA en MT, registro con delay de "+str(inter))
    registro_bd("4", fecha, hora, "MAR en MT, registro con delay de "+str(inter))
    registro_bd("5", fecha, hora, "POL en MT, registro con delay de "+str(inter))
    registro_bd("5", fecha, hora, "PAN en MT, registro con delay de "+str(inter))
    registro_bd("6", fecha, hora, "ROS en MT, registro con delay de "+str(inter))
    registro_bd("6", fecha, hora, "MAR en MT, registro con delay de "+str(inter))
    registro_bd("7", fecha, hora, "ROS en MT, registro con delay de "+str(inter))
    registro_bd("7", fecha, hora, "BAR en MT, registro con delay de "+str(inter))
