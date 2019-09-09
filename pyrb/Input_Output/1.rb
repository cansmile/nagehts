#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

puts("입력해주세요.\n")
in_str = gets.chomp()
puts(in_str.upcase() + " World!")
