#!/usr/bin/ruby
puts <<EOS
Content-type: text/html

EOS

al = ['A','B','C','D']
puts(al.length)
al.push('E')
print(al)
al.delete_at(0)
print("\n")
print(al)
print("\n")
del(al[0])
print(al)