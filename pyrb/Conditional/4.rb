#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

input = 11
real_egoing = 11
real_k8805 = "ab"
real = 11
if real == input
	puts("Hello, egoing?")
else
	if real_k8805 == input
		puts("Hello, k8805?")
	else
		puts("Who are you?")
	end
end
