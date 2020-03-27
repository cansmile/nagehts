#!/usr/bin/python
import cgi;
import cgitb;cgitb.enable()
print("Content-Type: text/html\n")

input_id = input("아이디를 입력해주세요.\n")
input_pwd = input("비밀번호를 입력해주세요.\n")
real_id = "cansmile"
real_pwd = "alqlfqjsgh"
if real_id == input_id:
	if real_pwd == input_pwd:
		print("Hallo!")
	else:
		print("Wrong password!")
else:
	print("Wrong ID!")
