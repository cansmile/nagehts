puts("아이디를 입력해주세요.\n")
input_id = gets.chomp()
puts("비밀번호를 입력해주세요.\n")
input_pwd = gets.chomp()
real_id = "cansmile"
real_pwd = "ab"
if real_id == input_id
	if real_pwd == input_pwd
		puts("Welcome to my world!")
	else
		puts("Wrong Password!")
	end
else
	puts("Wrong ID!")
end