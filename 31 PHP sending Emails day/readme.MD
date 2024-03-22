for sending emails from the local host you have to make some changes in the php.ini file

path

go to XAMPP folder and than go to PHP folder and then look for php.ini file and open it in your code editor

after that you have to make some changes in the php.ini file like the following

1. search for SMTP in you php.ini file than make the following changes in the php.ini file

;make these changes to the php.ini file

; hi i am zahid khattak (here are some changes mean you have to make some changes)
SMTP=smtp.gmail.com ;change this to smtp.gmail.com like this mean i change it to it
; http://php.net/smtp-port
smtp_port=587 ;change this port number to it like 587 by default its value is not 587 but you have to change it

; For Win32 only.
; http://php.net/sendmail-from

;sendmail_from = me@example.com ; this is the default email address from which the local server sends mails to others so you have to change it to your own email address

sendmail_from = your email ; this is i change it to mine
; For Unix only. You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path

;sendmail_path = the send email path is commented out here and nothing stored in it but you have to change it to the send email path like i did

sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t".

after that you have to go to xampp folder and than go to sendmail folder after it you have to open the sendmail.ini file in your code editor and then you have to make some changes to the sendmail.ini file also in your code editor changes are given below

in sendmail.ini file search for smtp-server and change in it like
; here you have to make some changes to the sendmail.ini file
; smtp_server=mail.mydomain.com this is the default one you have to change it

smtp_server=smtp.gmail.com ; you have to change like that

after that you have to change the smtp-port also like
; smtp_port=25 this is the default one you have to change

smtp_port=587

after that you have to uncomment or write the below lines after changing smtp_port=587

; you have to uncoment this below line
error_logfile=error.log

; after that you have to uncomment this below line also
debug_logfile=debug.log

after all thsese changes you have to provide your gmail and password as well to send an email to other by local server

go down in sendmail.ini file and make changes like
auth_username=your email
auth_password=your actual email password
