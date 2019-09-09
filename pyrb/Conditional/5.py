Y#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

input = 22
real_egoing = 11
real_k8805 = "ab"
if real_egoing == input:
	print("hello")
elif real_k8805 == input:
	print("Hello, k8805?")
else:
	print("Who are you?")
