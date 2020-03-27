#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

#-*-coding: utf-8 -*-
donation = 100	## 후원금
student = 10	## 학생
sponsor = 20	## 후원자

print((donation*student)/sponsor)
