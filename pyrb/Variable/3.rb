#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

donation = 100	## 후원금
student = 10	## 학생
sponsor = 20	## 후원자

puts((donation*student)/sponsor)
