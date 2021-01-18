import paho.mqtt.client as mqttClient
import time
import random
 
def on_connect(client, userdata, flags, rc):
 
    if rc == 0:
 
        print("Connected to broker")
 
        global Connected                #Use global variable
        Connected = True                #Signal connection 
 
    else:
 
        print("Connection failed")
 
Connected = False   #global variable for the state of the connection
 
broker_address= '192.168.43.181'
port = 1883
user = 'PRD'
password = 'ECAM'
 
client = mqttClient.Client("Python")               #create new instance
client.username_pw_set(user, password=password)    #set username and password
client.on_connect= on_connect                      #attach function to callback
client.connect(broker_address, port=port)          #connect to broker
 
client.loop_start()        #start the loop
 
while Connected != True:    #Wait for connection
    time.sleep(0.1)
 
try:
    while True:
        value = random.randint(10, 30)   ## Code pour les capteurs de température
        #value = raw_input('Enter the message:')
        client.publish("python/test",value)
        time.sleep(5*60)    #Une mesure toutes les 5min
 
except KeyboardInterrupt:
 
    client.disconnect()
    client.loop_stop()

