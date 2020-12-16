# Pré-requis

Installer python      
Installer pip    
Easyphp Devserver 17    
Lanacer Devserver, aller dans HTTP server --> server settings --> selectionner une version de php > 7 (par défault php est en version 5)

# Librairies    
	## MQTT     
		pip install paho-mqtt à faire sur la raspberry et sur l'ordinateur
		
	
	## MySQL    
		pip install pymysql    

# Database
Créer une base de donnée "users" avec 3 tables:    
		-	users : 4 colonnes , id(int), username(varchar), password(varchar), created_at(datetime)    
		-	attempt : 4 colonne , nb(int), username(varchar), password(varchar), tried_at(datetime)    
		-	datas : 1 colonne , recues(varchar)    
		
Remplir la colonne users manuellement avec au moin un compte nommé 'admin'

# Raspberry    
	## MQTT Broker
	Installation du MQTT broker sur la raspberry sudo apt-get install mosquitto

	Open the config file of MQTT $ sudo nano /etc/mosquitto/mosquitto.conf

	We want to use the default settings, to prevent the use of the MQTT by unknonw users, to set it up on port 1883, and to save the passwords on a separate file.
	for this, coment the line "include_dir etc/mosquitto/conf.d"
	and add :
	- allow_anonymous false
	- password_file /etc/mosquitto/pwfile
	- listener 1883

	ctrl + x then y to save and close

	set up the MQTT password and username
	$ sudo mosquitto_passwd -c /etc/mosquitto/pwfile "username"
	And enter your password

	(You can use the -d option to remove a user)

	Then start the Broker    
	$ sudo mosquitto //start mosquitto
	
	##MQTT Publisher

	Installer le script "publisher.py", modifier les paramètre du MQTT en accord avec ceux du broker et l'exécueter avec ```python publisher.py```