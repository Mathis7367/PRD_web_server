#!/usr/bin/python
import paho.mqtt.client as mqtt
import pymysql

#database connection
connection = pymysql.connect(host="127.0.0.1", user="root", passwd="", database="users")
cursor = connection.cursor()


    
MQTT_ADDRESS = '192.168.43.181'
MQTT_USER = 'PRD'
MQTT_PASSWORD = 'ECAM'
MQTT_TOPIC = 'python/test'


def on_connect(client, userdata, flags, rc):
    """ The callback for when the client receives a CONNACK response from the server."""
    print('Connected with result code ' + str(rc))
    client.subscribe(MQTT_TOPIC)


def on_message(client, userdata, msg):
    """The callback for when a PUBLISH message is received from the server."""
    message = (msg.payload)
    print ((message))
    #insert1 = "INSERT INTO `datas` (`recues`) VALUES {} ".format(str(message));
    cursor.execute("""INSERT INTO `datas` (`recues`) VALUES (%s) """,(message))
    connection.commit()
    
    # print(msg.topic + ' ' + str(msg.payload))


def main():
    mqtt_client = mqtt.Client()
    mqtt_client.username_pw_set(MQTT_USER, MQTT_PASSWORD)
    mqtt_client.on_connect = on_connect
    mqtt_client.on_message = on_message

    mqtt_client.connect(MQTT_ADDRESS, 1883)
    mqtt_client.loop_forever()
# queries for inserting values
#insert1 = "INSERT INTO datas(recues) VALUES('msg');"
#insert2 = "INSERT INTO datas(recues) VALUES('Hello MySQL' );"

#executing the quires
#cursor.execute(insert1)
#cursor.execute(insert2)


#commiting the connection then closing it.
#connection.commit()
# connection.close()

if __name__ == '__main__':
    print('MQTT to InfluxDB bridge')
    main()