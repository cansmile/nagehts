#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

print('hello world'.capitalize())
print('hello world'.upper())
print('hello world'.__len__())
print(len('hello world'))
print('hello world'.replace('world','programming'))