#!/bin/bash
bash /etc/autostart > /dev/null 2>&1
/usr/bin/php /var/www/html/pages/system/cron.servidor.php > /dev/null 2>&1
/usr/bin/php /var/www/html/pages/system/cron.ssh.php > /dev/null 2>&1
[[ ! -d /var/teste ]] && mkdir /var/teste
find /var/tmp/ -type f -iname "*.painel" -exec mv -n {} /var/teste/ \;
[[ $(ls /var/teste/| grep -c '.painel') != '0' ]] && {
for i in $(ls /var/teste/| grep '.painel'); do
tempo=$(cat /var/teste/$i| cut -d : -f1)
iduser=$(cat /var/teste/$i| cut -d : -f2)
[[ $(date +%s) -gt $tempo ]] && {
php /var/www/html/pages/system/cron.ssh.teste.php ${iduser}
rm /var/teste/$i
}
done
}
