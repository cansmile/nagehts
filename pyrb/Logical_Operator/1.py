#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

in_str = input("아이디를 입력해주세요.\n")
real_egoing = "11"
real_k8805 = "ab"
if real_egoing == in_str or real_k8805 == in_str:
	print("Hallo!")
else:
	print("Who are you?")