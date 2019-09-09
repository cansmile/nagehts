#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

names = ['cansmile','gyeonggi',40,true]
puts(names.class)
puts(names[0])
puts(names[1])
puts(names[2])
names[1] = 'bucheon'
print(names)