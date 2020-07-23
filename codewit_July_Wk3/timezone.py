#third asignment
import datetime
import pytz

#print(dt_utcnow)

#for tz in pytz.all_timezones:
  #print(tz)
print('Welcome! Select a timezone')

def timeZoneConverter():

  print()
  dt_utcnow = datetime.datetime.now(tz=pytz.UTC) #stores a timezone aware standard time
  dt_nairobi = dt_utcnow.astimezone(pytz.timezone('Africa/Nairobi'))#converts to nairobi timezone
  dt_Alaska = dt_utcnow.astimezone(pytz.timezone('US/Alaska'))
  dt_Bangkok = dt_utcnow.astimezone(pytz.timezone('Asia/Bangkok'))
  print('For Africa/Nairobi, enter 1')
  print('For US/Alaska, enter 2')
  print('For Asia/Bangkok, enter 3')
  print()
  country = input()
  try:
    if country == '1':
        print('The current time in Nairobi is: '+str(dt_nairobi.time()))
    elif country == '2':
        print('The current time in Alaska is: '+str(dt_Alaska.time()))
        print('Exit or try again...')
        timeZoneConverter()
    elif country == '3':
        print('The current time in Bangkok is: '+str(dt_Bangkok.time()))
        timeZoneConverter()
    else:
        print('Only 1, 2 and 3 are accepted. Try again')
        timeZoneConverter()
  except:
    print('oppssy, something went wrong, ensure you enter valid input')
    timeZoneConverter()
    
timeZoneConverter()