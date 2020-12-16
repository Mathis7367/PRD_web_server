# Pré-requis

Installer python      
Installer pip    
Easyphp Devserver 17    
Lnacer Devserver, aller dans HTTP server --> server settings --> selectionner une version de php > 7 (par défault php est en version 5)

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
		
Remplir la colonne users manuellement avec au moin un compote nommé 'admin'

# Raspberry    
	Installer le script "publisher.py" et l'exécueter avec ```python publisher.py```