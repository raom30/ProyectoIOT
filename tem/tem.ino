#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

#include <DHT11.h>
DHT11 dht11(D4);

/*const char* ssid = "vodafoneA390";
const char* password = "DT6P39QUNV7EPW";
const char* host = "http://192.168.0.164:8000/api";*/

const char* ssid = "wifiRafa";
const char* password = "laleche1";
const char* host = "http://floweb.es/api";

void setup()
   {
      Serial.begin(115200);
      // We start by connecting to a WiFi network
        WiFi.mode(WIFI_OFF);        //Prevents reconnection issue (taking too long to connect)
          delay(1000);
        WiFi.mode(WIFI_STA); 
              
      Serial.println();
      Serial.println();
      Serial.print("Connecting to ");
      Serial.println(ssid);
      
      WiFi.begin(ssid, password);
      
      while (WiFi.status() != WL_CONNECTED) {
      delay(500);
      Serial.print(".");
      }
      
      Serial.println("");
      Serial.println("WiFi connected");
      Serial.println("IP address: ");
      Serial.println(WiFi.localIP());
   }

void loop()
   {
       HTTPClient http;
       int err;
       float temp, hum;
       if((err = dht11.read(hum, temp)) == 0)    // Si devuelve 0 es que ha leido bien
          {
             Serial.print("Temperatura: ");
             Serial.print(temp);
             Serial.print(" Humedad: ");
             Serial.print(hum);
             Serial.println();
             String temperature = String(temp);
             String humidity = String(hum);
            String postData = "?temperature=" + temperature + "&humidity=" + humidity ;
            http.begin(host);
            http.addHeader("Content-Type", "application/x-www-form-urlencoded");
            
            int httpCode = http.POST(postData);
            
            String payload = http.getString();
           
            Serial.println(httpCode);
            Serial.println(payload);
             http.end();
             delay(1000);
          }
       else
          {
             Serial.println();
             Serial.print("Error Num :");
             Serial.print(err);
             Serial.println();
          }
 
       delay(5000);            //5 segundo
   }
