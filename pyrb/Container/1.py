#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

name = 'cansmile'
print(type(name))
print(name)
print(type(['cansmile','sunny','gangyi']))
names = ['cansmile','sunny','gangyi']
print(names[0])
print(names[1])
print(names[2])
cansmile = ['evangelist','bucheon',40,True]
cansmile[2] = 'gyeonggi'
print(cansmile)