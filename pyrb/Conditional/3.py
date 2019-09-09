#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

input = 22
real = 11
if real == input:
	print("hello")

if real != input:
	print("Who are you?")
