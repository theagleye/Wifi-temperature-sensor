# Nodemcu-ESP-12E-wifi-Temperature-sensor
A simple temperature sensor controlled with a simple http client using the nodemcu ESP -12E WIFI module, php, mysql and arduino.

You can checkout the video demo here: https://www.youtube.com/watch?v=my0cEr5QGAs (Bare with me here, video shooting is not a pro grade :D)

When the wifi module is turned on and connected via the Serial Monitor of Arduino IDE, it establishes the connection to the local wifi and gives the local ip address, which is used to access the html client. The html client page contains three buttons, namely: "Turn on once", "Keep it on" and "Turn off". While other buttons have self explanatory name to their function, the button "keep it on" turns the temperature sensor on and senses the temperature of the surrounding every five seconds. Every temperature reading from the sensor is converted to degree celsius in the Arduino code. 
The wifi module NODEMCU ESP-12E which is connected to the gateway thus sending its every reading to the client. PHP files "add.php" is used to display the readings sent by the sensor in the client and the file "show.php" is used to store the data into the MySQL database with every reading containing new key, its value as the value attribute and the current time as the time attribute. The database table thus has three characters for a single reading i.e. ID, Value and TimeStamp, and displays the total of 33 readings in one instance. The database is created using XAMPP under Windows 10.
Also, the LED attached to the board turns on when one of the two /ON/ buttons are pressed, and similiary /OFF/ button turns the LED off.

