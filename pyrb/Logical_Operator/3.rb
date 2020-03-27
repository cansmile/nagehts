#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

puts("아이디를 입력해주세요.\n")
input_id = gets.chomp()
puts("비밀번호를 입력해주세요.\n")
input_pwd = gets.chomp()
real_id = "cansmile"
real_pwd = "ab"
if real_id == input_id and real_pwd == input_pwd
	puts("Welcome to my world!")
else
	puts("Wrong ID or Password!")
end