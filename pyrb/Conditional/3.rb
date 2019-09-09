#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

input = 11
real = 11
if real == input
	puts("hello")
else
	puts("Who are you?")
end  
