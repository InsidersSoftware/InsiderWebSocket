import socket 

#create an INET, and streaming socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect(("http://insidersoftware.unaux.com/Directory/", 80))
serversocket.bind((ssocket.gethostname(), 80))
serversocket.listen(5)
