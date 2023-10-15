#!/bin/bash
clear
[[ ! -d /root/backupsql ]] && mkdir /root/backupsql
rm /root/backupsql/gestorssh.sql > /dev/null 2>&1
senha=$(cat /etc/kernel/recweb/sweb)
mysqldump -u root -p$senha --default-character-set=utf8mb4 --databases gestorssh > /root/backupsql/gestorssh.sql
bzip2 -f /root/backupsql/gestorssh.sql
