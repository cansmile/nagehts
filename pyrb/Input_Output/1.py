#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

in_str = input("입력해주세요.")
print(in_str.capitalize() + " World!")