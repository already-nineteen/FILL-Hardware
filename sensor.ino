#include <DHT.h>


const int pulseSensorPin = A0;
const int gasSensorPin = D1; 

#define DHTPIN D2        
#define DHTTYPE DHT11      
DHT dht(DHTPIN, DHTTYPE);

void setup() {
  Serial.begin(9600); 
  dht.begin();        
}

void loop() {

  int pulseValue = analogRead(pulseSensorPin);

  int gasValue = analogRead(gasSensorPin);

  float h = dht.readHumidity();
  float t = dht.readTemperature();

  Serial.print(pulseValue);
  Serial.print(gasValue);
  Serial.print(h);
  Serial.print(t);
  
  delay(1000);
}
