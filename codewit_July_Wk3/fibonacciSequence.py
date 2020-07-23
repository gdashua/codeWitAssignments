#create an array
#append 10 and 11
#add add the two no and store the result and append the result as the next element
#add 1 to each of the previous indices and add them and append the result
#repeat the same procedure and break the loop if the result is greater than 200
#loop through the list and add and value that is odd the an initial 0-variable
#print out the result

fib_sequences = list();
  #first even number in the sequence


def sumCalc():
  fib_sequences.clear()
  fib_sequences.append(10)
  fib_sequences.append(11)
  a = 0
  b = 1
  global sumOfSeq
  global x
  sumOfSeq = 10
  try:
    print('enter the limit of the fibonnaci sequence starting from 10')
    x = int(input())
    for y in range(0,100):
      c = fib_sequences[a+y]+fib_sequences[b+y]
      if c>x:
          break #breaks the loop once the value is greater that 200
      else:
          fib_sequences.append(c)
          if c%2 == 0:
            sumOfSeq+=c #adds every member that is even to the sequence
    y=str(fib_sequences)
    print('The fibonnaci sequence from 10 to '+ str(x) +' is:\n'+y)
    print('The sum of the even numbers is: '+ str(sumOfSeq))
    print()
    
    print('Exit or try again...')
    sumCalc()
  except:
    print('Opps, only positive integers are allowed!')
    sumCalc()

sumCalc()








      


