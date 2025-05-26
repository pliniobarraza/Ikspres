import os
import time
import daemon
import atexit
import bluepy.btle as btle
import serial
import sys
ser = serial.Serial(
    port='/dev/ttyAMA2',
    baudrate=115200,
)
p = btle.Peripheral("9C:1D:58:13:D1:90")
s = p.getServiceByUUID("0000ffe0-0000-1000-8000-00805f9b34fb")
c = s.getCharacteristics()[0]
while True:
 c.write(bytearray(ser.read(3)),withResponse=False)

