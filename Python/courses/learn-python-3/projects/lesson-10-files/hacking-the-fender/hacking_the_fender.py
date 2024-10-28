# Task 1, 12.
# Import modules
import csv
import json

# Task 2.
compromised_users = []

# Task 3, 4, 5, 6, 7.
with open('passwords.csv') as password_file:
  password_csv = csv.DictReader(password_file)
  for password_row in password_csv:
    # print(password_row['Username'])
    compromised_users.append(password_row['Username'])

# Task 8, 9, 10.
with open('compromised_users.txt', 'w') as compromised_user_file:
  for compromised_user in compromised_users:
    compromised_user_file.write(compromised_user + '\n')

# Task 13, 14, 15.
with open('boss_message.json', 'w') as boss_message:
  boss_message_dict = {
    "recipient": "The Boss",
    "message": "Mission Success"
  }
  json.dump(boss_message_dict, boss_message)

# Task 16.
with open('new_passwords.csv', 'w') as new_passwords_obj:
  slash_null_sig = """\
 _  _     ___   __  ____             
/ )( \\   / __) /  \\(_  _)            
) \\/ (  ( (_ \\(  O ) )(              
\\____/   \\___/ \\__/ (__)             
 _  _   __    ___  __ _  ____  ____  
/ )( \\ / _\\  / __)(  / )(  __)(    \\ 
) __ (/    \\( (__  )  (  ) _)  ) D ( 
\\_)(_\\/\\_/ \\___)(__\\_)(____)(____/ 
        ____  __     __   ____  _  _ 
 ___   / ___)(  )   / _\\ / ___)/ )( \\
(___)  \\___ \\/ (_/\\/    \\\\___ \\) __ (
       (____/\\____/\\_/\\_/(____/\\_)(_/
 __ _  _  _  __    __                
(  ( \\/ )( \\(  )  (  )               
/    /) \\/ (/ (_/\\/_/\\             
\\_)__)(\\____/\\____/\\____/"""
  new_passwords_obj.write(slash_null_sig)

with open('new_passwords.csv') as new_passwords_obj:
    content = new_passwords_obj.read()  # Read the content of the file
    print(content)