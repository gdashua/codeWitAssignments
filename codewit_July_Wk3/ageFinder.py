#second assignment
import datetime


def ageFinder():
  print('Please enter your last birthday to know you exact birthdate')
  print()
  try:
    day = int(input('day: '))
    month = int(input('month: '))
    year = int(input('year: '))
    day_position = '';
    print('How old are you?')
    current_age = int(input())
    birth_year = year-current_age #gets the year you were born

    x = datetime.datetime(birth_year, month, day ) #sets the dateObject for birthday
    day = str(day)
    day_arr=list(day)

    if (day_arr[len(day)-1]) == '1':
      day_position = 'st'
    elif (day_arr[len(day)-1]) == '2':
      day_position = 'nd'
    elif (day_arr[len(day)-1]) == '3':
      day_position = 'rd'
    else:
      day_position = 'th'

    day +=day_position

    print()
    #gets the exact day, month and year from the birthday object 
    print('HURRAY!!! You birthdate is: ' + x.strftime("%A")+ ', '+day+' '+x.strftime("%B")+ ' ' +x.strftime("%Y"))
    print()
    print('You can check again or exit...')
    ageFinder()
  except:
    print()
    print('Wrong input! only positive integers are accepted,')
    ageFinder()

ageFinder()