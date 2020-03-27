#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

puts("아이디를 입력해주세요.\n")
in_str = gets.chomp()
real_egoing = "11"
real_k8805 = "ab"
if real_egoing == in_str or real_k8805 == in_str
	puts("Hallo, k8805")
else
	puts("Who are you?")
end