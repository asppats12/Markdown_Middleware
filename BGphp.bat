@ECHO OFF

:RENEW
C:\wamp\bin\php\php5.5.12\php.exe -f "C:\wamp\www\webappdb\delete.php"
sleep 5
goto RENEW