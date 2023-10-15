                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                #!/bin/bash
[[ $(awk -F" " '{print $2}' /usr/lib/telegram) == "@nandoslayer" ]] && {
sitedwn=bitbucket.org/nandoslayer/pweb2.0/downloads
verificar_chave(){
clear
[[ -e /etc/kernel/recweb/verweb ]] && versao=$(cat /etc/kernel/recweb/verweb) || versao="1.0.0"
[[ -e /bin/info-chave ]] && key=$(cat /bin/info-chave) || key=""
[[ $(uname -m) == "aarch64" ]] && arc=aarch64 || arc=x86_64
IP=$(wget -qO- ipv4.icanhazip.com) &>/dev/null
resultkey=$(curl -s -X POST "http://chave.imperialnet.xyz/validarchave.php"  -d key=$key -d IP=$IP -d arcsys=$arc -d veratual=$versao) &>/dev/null
if [ $(echo $resultkey | jq -r '.validate') == "Success" ] > /dev/null 2>&1
then
echo -e 'by: @nandoslayer' >/usr/lib/blockpainel
if [ ! -e "/etc/kernel/recweb/verpweb" ]; then
echo -e 1.0.0 >/etc/kernel/recweb/verpweb
verp=$(cat /etc/kernel/recweb/verpweb)
else
verp=$(cat /etc/kernel/recweb/verpweb)
fi
if [ ! -e "/etc/kernel/recweb/verweb" ]; then
echo -e 1.0.0 >/etc/kernel/recweb/verweb
verw=$(cat /etc/kernel/recweb/verweb)
else
verw=$(cat /etc/kernel/recweb/verweb)
fi
check_att
verap=$(cat /etc/kernel/recweb/attpweb)
veraw=$(cat /etc/kernel/recweb/attweb)
setup
else
rm /usr/lib/blockpainel > /dev/null 2>&1
echo -e "\033[1;31m         VOCÊ NÃO TEM PERMISSÃO        \033[0m"
read -p "Enter para retornar!"
clear && exit 1
fi
}
#================ CODIGOS ESTILOS ============|
Bold=$(tput bold)
Norm=$(tput sgr0)
Red=$(tput setaf 1)
Green=$(tput setaf 2)
Yellow=$(tput setaf 3)
Blue=$(tput setaf 4)
### CORES DA BARRA
msg() {
BRAN='\033[1;37m' && VERMELHO='\e[31m' && VERDE='\e[32m' && AMARELO='\e[33m'
AZUL='\e[34m' && MAGENTA='\e[35m' && MAG='\033[1;36m' && NEGRITO='\e[1m' && SEMCOR='\e[0m'
case $1 in
-ne) cor="${VERMELHO}${NEGRITO}" && echo -ne "${cor}${2}${SEMCOR}" ;;
-ama) cor="${AMARELO}${NEGRITO}" && echo -e "${cor}${2}${SEMCOR}" ;;
-verm) cor="${AMARELO}${NEGRITO}[!] ${VERMELHO}" && echo -e "${cor}${2}${SEMCOR}" ;;
-azu) cor="${MAG}${NEGRITO}" && echo -e "${cor}${2}${SEMCOR}" ;;
-verd) cor="${VERDE}${NEGRITO}" && echo -e "${cor}${2}${SEMCOR}" ;;
-bra) cor="${VERMELHO}" && echo -ne "${cor}${2}${SEMCOR}" ;;
-nazu) cor="${COLOR[6]}${NEGRITO}" && echo -ne "${cor}${2}${SEMCOR}" ;;
-gri) cor="\e[5m\033[1;100m" && echo -ne "${cor}${2}${SEMCOR}" ;;
"-bar2" | "-bar") cor="${VERMELHO}————————————————————————————————————————————————————" && echo -e "${SEMCOR}${cor}${SEMCOR}" ;;
esac
}
fun_bar () {
comando[0]="$1"
comando[1]="$2"
(
[[ -e $HOME/fim ]] && rm $HOME/fim
${comando[0]} -y > /dev/null 2>&1
${comando[1]} -y > /dev/null 2>&1
touch $HOME/fim
) > /dev/null 2>&1 &
tput civis
echo -ne "\033[1;33m["
while true; do
for((i=0; i<18; i++)); do
echo -ne "\033[1;31m#"
sleep 0.1s
done
[[ -e $HOME/fim ]] && rm $HOME/fim && break
echo -e "\033[1;33m]"
sleep 2s
tput cuu1
tput dl1
echo -ne "\033[1;33m["
done
echo -e "\033[1;33m]\033[1;37m -\033[1;32m OK !\033[1;37m"
tput cnorm
}
fun_prog ()
{
comando[0]="$1"
${comando[0]}  > /dev/null 2>&1 &
tput civis
echo -ne "\033[1;32m.\033[1;33m.\033[1;31m. \033[1;32m"
while [ -d /proc/$! ]
do
for i in / - \\ \|
do
sleep .1
echo -ne "\e[1D$i"
done
done
tput cnorm
echo -e "\e[1DOK"
}
print_center() {
if [[ -z $2 ]]; then
text="$1"
else
col="$1"
text="$2"
fi
while read line; do
unset space
x=$(((54 - ${#line}) / 2))
for ((i = 0; i < $x; i++)); do
space+=' '
done
space+="$line"
if [[ -z $2 ]]; then
msg -azu "$space"
else
msg "$col" "$space"
fi
done <<<$(echo -e "$text")
}
time_reboot() {
echo ""
print_center -ama "REINICIANDO EM "
echo ""
REBOOT_TIMEOUT="$1"
while [ $REBOOT_TIMEOUT -gt 0 ]; do
print_center -ne "-$REBOOT_TIMEOUT-\r"
sleep 2
: $((REBOOT_TIMEOUT--))
done
reboot
}
fun_update () {
apt update -y > /dev/null 2>&1
}
fun_upgrade () {
apt upgrade -y > /dev/null 2>&1
}
fun_atpweb () {
[[ ! -d /etc/kernel/recweb ]] && mkdir /etc/kernel/recweb
screen -r -S "bot_painel" -X quit > /dev/null 2>&1
screen -wipe 1>/dev/null 2>/dev/null
sleep 2
wget -qO- $sitedwn/cron.autobackup.sh -O /etc/kernel/recweb/cron.autobackup > /dev/null 2>&1
wget -qO- $sitedwn/cron.backup.sh -O /etc/kernel/recweb/cron.backup > /dev/null 2>&1
wget -qO- $sitedwn/cron.userteste.sh -O /etc/kernel/recweb/cron.userteste > /dev/null 2>&1
wget -qO- $sitedwn/apibot.sh -O /etc/kernel/recweb/apibot > /dev/null 2>&1
wget -qO- $sitedwn/verpweb.txt -O /etc/kernel/recweb/verpweb > /dev/null 2>&1
wget -qO- $sitedwn/verpweb.txt -O /etc/kernel/recweb/attpweb > /dev/null 2>&1
if [[ $(uname -m) == "aarch64" ]]; then
wget -qO- $sitedwn/pwebarm.sh -O /bin/pweb > /dev/null 2>&1
wget -qO- $sitedwn/botarm.sh -O /etc/kernel/recweb/bot > /dev/null 2>&1
else
wget -qO- $sitedwn/pweb64.sh -O /bin/pweb > /dev/null 2>&1
wget -qO- $sitedwn/bot64.sh -O /etc/kernel/recweb/bot > /dev/null 2>&1
fi
chmod 777 -R /etc/kernel/recweb > /dev/null 2>&1
chmod 777 /bin/pweb > /dev/null 2>&1
crontab -l > cronset > /dev/null 2>&1
echo "
@reboot bash /etc/autostart
*/1 * * * * /usr/bin/php /var/www/html/pages/system/cron.online.ssh.php
*/2 * * * * /usr/bin/php /var/www/html/pages/system/cron.php
5 */6 * * * bash /etc/kernel/recweb/cron.backup
*/1 * * * * bash /etc/kernel/recweb/cron.userteste
5 */3 * * * /usr/bin/php /var/www/html/pages/system/cron.backup.php
@daily /usr/bin/php /var/www/html/pages/system/hist.online.php
2 */3 * * * bash /etc/kernel/recweb/cron.autobackup" > cronset
crontab cronset && rm cronset > /dev/null 2>&1
service cron restart > /dev/null 2>&1
/etc/autostart
cat /dev/null > ~/.bash_history && history -c
}
autoexec () {
if grep "pweb;" /etc/profile > /dev/null; then
echo ""
echo -e "\033[1;32mDESATIVANDO AUTO EXECUÇÃO DO PWEB\033[0m"
offautpweb () {
sed -i '/pweb;/d' /etc/profile
}
echo ""
fun_bar 'offautpweb'
echo ""
echo -e "\033[1;31mAUTO EXECUÇÃO DESATIVADO!\033[0m"
sleep 2.5s
setup
else
echo ""
echo -e "\033[1;32mATIVANDO AUTO EXECUÇÃO DO PWEB\033[0m"
autpweb () {
grep -v "^pweb;" /etc/profile > /tmp/tmpass && mv /tmp/tmpass /etc/profile
echo "pweb;" >> /etc/profile
}
echo ""
fun_bar 'autpweb'
echo ""
echo -e "\033[1;32mAUTO EXECUÇÃO ATIVADO!\033[0m"
sleep 2.5s
setup
fi
}
verif_ptrs_check() {
		porta=$1
		PT=$(lsof -V -i tcp -P -n | grep -v "ESTABLISHED" | grep -v "COMMAND" | grep "LISTEN")
		for pton in $(echo -e "$PT" | cut -d: -f2 | cut -d' ' -f1 | uniq); do
			svcs=$(echo -e "$PT" | grep -w "$pton" | awk '{print $1}' | uniq)
			[[ "$porta" = "$pton" ]] && {
				echo -e "\n\033[1;31mPORTA \033[1;33m$porta \033[1;31mEM USO PELO \033[1;37m$svcs\033[0m"
				sleep 3
				fun_chuser
			}
		done
	}
fun_bar_check() {
		comando[0]="$1"
		comando[1]="$2"
		(
			[[ -e $HOME/fim ]] && rm $HOME/fim
			[[ ! -d /etc/SSHPlus ]] && rm -rf /bin/menu
			${comando[0]} >/dev/null 2>&1
			${comando[1]} >/dev/null 2>&1
			touch $HOME/fim
		) >/dev/null 2>&1 &
		tput civis
		echo -ne "\033[1;33mAGUARDE \033[1;37m- \033[1;33m["
		while true; do
			for ((i = 0; i < 18; i++)); do
				echo -ne "\033[1;31m#"
				sleep 0.1s
			done
			[[ -e $HOME/fim ]] && rm $HOME/fim && break
			echo -e "\033[1;33m]"
			sleep 1s
			tput cuu1
			tput dl1
			echo -ne "\033[1;33mAGUARDE \033[1;37m- \033[1;33m["
		done
		echo -e "\033[1;33m]\033[1;37m -\033[1;32m OK !\033[1;37m"
		tput cnorm
	}
clear
fun_chuser() {
    clear
IP_check=$(wget -qO- ipv4.icanhazip.com)
echo -e "\033[1;37m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m"
echo ""
echo -e "\E[44;1;37m          GERENCIAR CHECKUSER            \E[0m"
echo -e "\E[44;1;37m               VERSÃO 1.3                \E[0m"
echo -e "\033[1;37m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m"
    echo ""
    [[ $(netstat -nplt | grep -wc 'python3') != '0' ]] && {
			sks='\033[1;32mON'
			echo -e "\033[1;33mLink Dtunnel e Conecta4g http://$IP_check\033[1;37m:\033[1;32m$(netstat -nplt | grep 'python3' | awk {'print $4'} | cut -d: -f2 | xargs)/checkUser"
			echo ""
			echo -e "\033[1;33mLink GLTUNNEL http://$IP_check\033[1;37m:\033[1;32m$(netstat -nplt | grep 'python3' | awk {'print $4'} | cut -d: -f2 | xargs)/gl"
			echo ""
			echo -e "\033[1;33mLink AnyMod http://$IP_check\033[1;37m:\033[1;32m$(netstat -nplt | grep 'python3' | awk {'print $4'} | cut -d: -f2 | xargs)/anymod"
			echo ""
		} || {
			sks='\033[1;31mOFF'
		}
	[[ $(screen -list | grep -wc 'checkgestor') != '0' ]] && var_check="\033[1;31mDESATIVAR" || var_check="\033[1;32mATIVAR"
    echo ""
    echo -e "\033[1;31m[\033[1;36m1\033[1;31m] \033[1;37m• $var_check CHECKUSER \033[0m"
    echo -e "\033[1;31m[\033[1;36m0\033[1;31m] \033[1;37m• \033[1;33mVOLTAR\033[0m"
    echo ""
    echo -ne "\033[1;32mO QUE DESEJA FAZER \033[1;33m?\033[1;37m "
    read resposta
    if [[ "$resposta" = '1' ]]; then
	if ps x | grep -w checkgestor.py | grep -v grep 1>/dev/null 2>/dev/null; then
				clear
				echo -e "\E[41;1;37m          DESATIVANDO CHECKUSER          \E[0m"
				echo ""
				fun_socksoff() {
					for pidcheckgestor in $(screen -ls | grep ".checkgestor" | awk {'print $1'}); do
						screen -r -S "$pidcheckgestor" -X quit
					done
					[[ $(grep -wc "checkgestor.py" /etc/autostart) != '0' ]] && {
						sed -i '/checkgestor.py/d' /etc/autostart
					}
					sleep 1
					screen -wipe >/dev/null
				}
				fun_bar_check 'fun_socksoff'
				echo ""
				echo -e "\033[1;31mCHECKUSER DESATIVADO COM SUCESSO!!!\033[1;33m"
				sleep 3
				fun_chuser
			else
				clear
				apt install figlet python3-pip -y > /dev/null 2>&1
                pip3 install flask > /dev/null 2>&1
				mkdir /usr/lib/checkgestor > /dev/null 2>&1
				wget -qO- $sitedwn/checkgestor.sh -O /bin/checkgestor > /dev/null 2>&1
				wget -qO- $sitedwn/checkgestor.py -O /usr/lib/checkgestor/checkgestor.py > /dev/null 2>&1
				chmod 777 /bin/checkgestor > /dev/null 2>&1
				chmod 777 /usr/lib/checkgestor/checkgestor.py > /dev/null 2>&1
				echo -e "\E[44;1;37m           ATIVANDO CHECKUSER            \E[0m"
				echo ""
				echo -ne "\033[1;32mQUAL PORTA DESEJA ULTILIZAR \033[1;33m?\033[1;37m: "
				read porta
				[[ -z "$porta" ]] && {
					echo ""
					echo -e "\033[1;31mPorta inválida!"
					sleep 3
					clear
					fun_chuser
				}
				verif_ptrs_check $porta
				fun_inisocks() {
					sleep 1
					screen -dmS checkgestor python3 /usr/lib/checkgestor/checkgestor.py $porta;
					[[ $(grep -wc "checkgestor" /etc/autostart) = '0' ]] && {
						echo -e "netstat -tlpn | grep -w $porta > /dev/null || {  screen -r -S 'checkgestor' -X quit;  screen -dmS checkgestor python3 /usr/lib/checkgestor/checkgestor.py $porta; }" >>/etc/autostart
					} || {
						sed -i '/checkgestor/d' /etc/autostart
						echo -e "netstat -tlpn | grep -w $porta > /dev/null || {  screen -r -S 'checkgestor' -X quit;  screen -dmS checkgestor python3 /usr/lib/checkgestor/checkgestor.py $porta; }" >>/etc/autostart
					}
				}
				echo ""
				fun_bar_check 'fun_inisocks'
				echo ""
				echo -e "\033[1;32mCHECKUSER ATIVADO COM SUCESSO!!!\033[1;33m"
				sleep 3
				fun_chuser
			fi
   elif [[ "$resposta" = '0' ]]; then
        echo ""
        echo -e "\033[1;31mVoltando...\033[0m"
        sleep 1
		clear
        setup
    else
        echo ""
        echo -e "\033[1;31mOpção inválida!\033[0m"
        sleep 1
        fun_chuser
    fi
}
velocity () {
aguarde () {
comando[0]="$1"
comando[1]="$2"
(
[[ -e $HOME/fim ]] && rm $HOME/fim
[[ ! -d $HOME/speed ]] && rm -rf $HOME/speed
${comando[0]} > /dev/null 2>&1
${comando[1]} > /dev/null 2>&1
touch $HOME/fim
) > /dev/null 2>&1 &
tput civis
echo -ne "\033[1;33mAGUARDE \033[1;37m- \033[1;33m["
while true; do
for((i=0; i<18; i++)); do
echo -ne "\033[1;31m#"
sleep 0.1s
done
[[ -e $HOME/fim ]] && rm $HOME/fim && break
echo -e "\033[1;33m]"
sleep 2s
tput cuu1
tput dl1
echo -ne "\033[1;33mAGUARDE \033[1;37m- \033[1;33m["
done
echo -e "\033[1;33m]\033[1;37m -\033[1;32m OK !\033[1;37m "
tput cnorm
}
fun_tst () {
if [ -e "/usr/bin/testevelocidade" ]; then
testevelocidade --share > $HOME/speed
else
wget -qO- $sitedwn/speedtest-cli.sh -O /usr/bin/testevelocidade > /dev/null 2>&1
chmod 777 /usr/bin/testevelocidade > /dev/null 2>&1
testevelocidade --share > $HOME/speed > /dev/null 2>&1
fi
}
echo ""
echo -e "\033[1;37m◆═════════════════════════════════════════════════════════════◆\033[0m"
echo -e " \E[44;1;37m              🚀 TESTE DE VELOCIDADE DA VPS 🚀               \E[0m"
echo -e "\033[1;37m◆═════════════════════════════════════════════════════════════◆\033[0m"
echo ""
aguarde 'fun_tst'
echo ""
png=$(cat speed | sed -n '5 p' |awk -F : {'print $NF'})
down=$(cat speed | sed -n '7 p' |awk -F :  {'print $NF'})
upl=$(cat speed | sed -n '9 p' |awk -F :  {'print $NF'})
host=$(cat speed | sed -n '2 p' |awk -F :  {'print $NF'})
echo -e "\033[1;37m═══════════════════════════════════════════════════════════════\033[0m"
echo -e "\033[1;32mHOST:\033[1;37m$host"
echo ""
echo -e "\033[1;32mPING:\033[1;37m$png"
echo ""
echo -e "\033[1;32mDOWNLOAD:\033[1;37m$down"
echo ""
echo -e "\033[1;32mUPLOAD:\033[1;37m$upl"
echo ""
echo -e "\033[1;37m═══════════════════════════════════════════════════════════════\033[0m"
rm -rf $HOME/speed
}
fun_limpiarepositorios () {
##LIMPA ROOT
rm -rf /root/*.sh* > /dev/null 2>&1
##LIMPA HTML
rm -rf /var/www/html
[[ ! -d /var ]] && mkdir /var
[[ ! -d /var/www ]] && mkdir /var/www
[[ ! -d /var/www/html ]] && mkdir /var/www/html
}
fun_update () {
apt update -y > /dev/null 2>&1
apt install figlet lolcat boxes gem -y > /dev/null 2>&1
}
fun_update2 () {
apt update -y > /dev/null 2>&1
apt install figlet lolcat boxes gem -y > /dev/null 2>&1
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer
}
painel_att () {
painel_att_com () {
clear
wget -qO- $sitedwn/verweb.txt -O /etc/kernel/recweb/verweb > /dev/null 2>&1
wget -qO- $sitedwn/verweb.txt -O /etc/kernel/recweb/attweb > /dev/null 2>&1
echo ""
echo -e "           \033[1;33m● \033[1;32mATUALIZANDO LINUX, PODE DEMORAR \033[1;33m●\033[0m"
##################################
fun_bar 'fun_update2'
echo ""
clear
IP=$(wget -qO- ipv4.icanhazip.com)
passdb=$(cat /etc/kernel/recweb/sweb)
echo "America/Sao_Paulo" > /etc/timezone > /dev/null 2>&1
ln -fs /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime > /dev/null 2>&1
dpkg-reconfigure --frontend noninteractive tzdata > /dev/null 2>&1
clear
chmod 600 /etc/mysql/my.cnf > /dev/null 2>&1
echo -e "\E[44;1;37m    ATUALIZANDO O PAINEL     \E[0m"
echo ""
clear
echo ""
echo -e "           \033[1;33m● \033[1;32mFINALIZANDO A ATUALIZAÇÃO, PODE DEMORAR \033[1;33m● \033[1;33mAGUARDE...\033[0m"
cd /var/www/html || exit
find /var/www/html/ -iname "*.php" -type f -exec rm -rfv {} \; > /dev/null 2>&1
find /var/www/html/ -iname "*.html" -type f -exec rm -rfv {} \; > /dev/null 2>&1
find /var/www/html/ -iname "*.svg" -type f -exec rm -rfv {} \; > /dev/null 2>&1
find /var/www/html/ -iname "*.jpg" -type f -exec rm -rfv {} \; > /dev/null 2>&1
find /var/www/html/ -iname "*.png" -type f -exec rm -rfv {} \; > /dev/null 2>&1
find /var/www/html/ -iname "*.lock" -type f -exec rm -rfv {} \; > /dev/null 2>&1
rm -r /var/www/html/vendor/ > /dev/null 2>&1
wget $sitedwn/gestorssh.zip > /dev/null 2>&1
sleep 2
unzip -o gestorssh.zip > /dev/null 2>&1
rm -rf gestorssh.zip index.html bdgestorssh.sql > /dev/null 2>&1
(echo yes; echo yes; echo yes; echo yes) | composer require phpseclib/phpseclib:~2.0 > /dev/null 2>&1
(echo yes; echo yes; echo yes; echo yes) | composer install > /dev/null 2>&1
(echo yes; echo yes; echo yes; echo yes) | composer require "mercadopago/dx-php:2.5.3" > /dev/null 2>&1
ln -s /usr/share/phpmyadmin/ /var/www/html > /dev/null 2>&1
chmod 777 -R /var/www/html > /dev/null 2>&1
sleep 2
cd || exit
[[ ! -f /bin/ipvps ]] && echo $IP > /bin/ipvps
if [[ -e "/var/www/html/pages/system/config.php" ]]; then
accesskey=$(echo $RANDOM | md5sum | head -c 15; echo;)
sed -i "s;102030;$passdb;g" /var/www/html/pages/system/config.php > /dev/null 2>&1
sed -i "s;accesskeyhash;$accesskey;g" /var/www/html/pages/system/config.php > /dev/null 2>&1
sed -i "s;localhost;$IP;g" /var/www/html/pages/system/config.php > /dev/null 2>&1
fi
if [[ -e "/var/www/html/config/config.php" ]]; then
sed -i "s;102030;$passdb;g" /var/www/html/config/config.php > /dev/null 2>&1
fi
if [[ -e "/var/www/html/class/conexao.php" ]]; then
sed -i "s;102030;$passdb;g" /var/www/html/class/conexao.php > /dev/null 2>&1
fi
##################################
clear
crontab -l > cronset > /dev/null 2>&1
echo "
@reboot bash /etc/autostart
*/1 * * * * /usr/bin/php /var/www/html/pages/system/cron.online.ssh.php
*/2 * * * * /usr/bin/php /var/www/html/pages/system/cron.php
5 */6 * * * bash /etc/kernel/recweb/cron.backup
*/1 * * * * bash /etc/kernel/recweb/cron.userteste
5 */3 * * * /usr/bin/php /var/www/html/pages/system/cron.backup.php
@daily /usr/bin/php /var/www/html/pages/system/hist.online.php
2 */3 * * * bash /etc/kernel/recweb/cron.autobackup" > cronset
crontab cronset && rm cronset > /dev/null 2>&1
##################################
clear
[[ $(mysql -h localhost -u root -p$passdb -e "show tables" gestorssh | grep -wc app_configgl) == '0' ]] && {
uptoken=$(echo $RANDOM | md5sum | head -c 20; echo;)
mkdir /root/restaurar > /dev/null 2>&1
wget -qO- $sitedwn/gestorgl.sql -O /root/restaurar/gestorgl.sql > /dev/null 2>&1
sed -i "s;gl-gestor;$uptoken;g" /root/restaurar/gestorgl.sql > /dev/null 2>&1
mysql -h localhost -u root -p$passdb --default_character_set utf8 gestorssh < /root/restaurar/gestorgl.sql
rm -rf /root/restaurar > /dev/null 2>&1
}
mysql -u root -p$passdb -e "RENAME TABLE usuario_ssh TO conta_ssh;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE usuario ADD COLUMN accesstoken varchar(330) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' AFTER dadosdeposito;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE usuario ADD COLUMN valorrevenda decimal(10,2) NOT NULL DEFAULT '0' AFTER accesstoken;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE usuario MODIFY COLUMN valorrevenda decimal(10,2) NOT NULL DEFAULT '0' AFTER accesstoken;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE conta_ssh ADD COLUMN valorconta decimal(10,2) NOT NULL DEFAULT '0' AFTER demo;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE conta_ssh MODIFY COLUMN valorconta decimal(10,2) NOT NULL DEFAULT '0' AFTER demo;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE conta_ssh ADD COLUMN uuid text AFTER valorconta;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN logoonline varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER att;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN fundoonline varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER logoonline;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN fundoDoLogOnline varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER fundoonline;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN BackgroundLink2 varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER fundoDoLogOnline;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorUser varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER BackgroundLink2;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorGeral varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER CorUser;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorMenu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER CorGeral;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorTexto varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER CorMenu;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE acesso_servidor ADD COLUMN qtdmax int(10) NOT NULL DEFAULT '0' AFTER qtd;" gestorssh > /dev/null 2>&1
cat /dev/null > ~/.bash_history && history -c
service cron restart > /dev/null 2>&1
systemctl restart apache2 > /dev/null 2>&1
echo ""
figlet -f slant GESTOR-SSH | boxes -d cat -pa2t0b0 | lolcat -a -d 2
echo -e "\033[1;32m				                      By\033[1;36m NTECH SYSTEM\033[0m"
echo ""
echo -e "        \033[1;33m • \033[1;32mATUALIZAÇÃO CONCLUÍDA COM SUCESSO\033[1;33m • \033[0m"
echo ""
echo -e "\033[1;36m PAINEL WEB DIGITE ESSE IP NO NAVEGADOR:\033[1;37m http://$IP/\033[0m"
echo ""
echo -e "\033[1;36m LOJA DE APPS:\033[1;37m http://$IP/apps\033[0m"
echo ""
echo -e "\033[1;33m MAIS INFORMAÇÕES \033[1;31m(\033[1;36mTELEGRAM\033[1;31m): \033[1;37m@paineis\033[0m"
echo ""
echo -ne "\n\033[1;31mENTER \033[1;33mpara retornar ao \033[1;32mPWEB! \033[0m"; read
clear
pweb
exit;
}
vrs5=$(cat /etc/kernel/recweb/verpweb)
vrs6=$(wget -qO- $sitedwn/verpweb.txt)
[[ "$vrs5" != "$vrs6" ]] && echo -e "\n\033[1;31mATUALIZE PRIMEIRO O PWEB NA OPÇÃO 1!\033[0m" && sleep 4 && clear && pweb || painel_att_com
}
painel_rest () {
clear
mkdir /root/restaurar > /dev/null 2>&1
clear
echo ""
echo -e "\033[1;33mRESTAURAR BANCO DE DADOS DO PAINELWEB GESTOR-SSH!\033[0m"
echo ""
echo -e "\n\033[1;33mÉ NECESSÁRIO O PAINEL INSTALADO E O\nARQUIVO (\033[1;32mgestorssh.sql.bz2 ou gestorssh.sql\033[1;33m) NA PASTA (root/restaurar)!\033[0m\n"
echo ""
echo -ne "\033[1;32mDE UM ENTER PRA CONTINUAR...\033[0m"; read -r
bzip2 /root/restaurar/gestorssh.sql > /dev/null 2>&1
[[ ! -e /etc/kernel/recweb/sweb ]] && {
echo -e "\n\033[1;31mO PAINEL NÃO ESTÁ INSTALADO!\033[0m"
echo ""
sleep 3
echo -e "\033[1;31mRETORNANDO...\033[0m"
sleep 3
cat /dev/null > ~/.bash_history && history -c
clear
setup
exit;
}
[[ ! -e /root/restaurar/gestorssh.sql.bz2 ]] && {
echo -e "\n\033[1;31mARQUIVO (\033[1;32mgestorssh.sql.bz2 ou gestorssh.sql\033[1;31m) NÃO ENCONTRADO!\033[0m"
echo ""
sleep 3
echo -e "\033[1;31mRETORNANDO...\033[0m"
sleep 3
cat /dev/null > ~/.bash_history && history -c
clear
setup
exit;
}
passdb=$(cat /etc/kernel/recweb/sweb)
[[ $(mysql -h localhost -u root -p$passdb -e "show databases" | grep -wc gestorssh) == '0' ]] && {
echo -e "\n\033[1;31mSEU PAINELWEB NÃO É COMPATÍVEL!\033[0m"
echo ""
sleep 3
echo -e "\033[1;31mRETORNANDO...\033[0m"
sleep 3
cat /dev/null > ~/.bash_history && history -c
clear
setup
exit;
}
bunzip2 /root/restaurar/gestorssh.sql.bz2
mysql -h localhost -u root -p$passdb -e "drop database gestorssh"
mysql -h localhost -u root -p$passdb -e 'CREATE DATABASE gestorssh'
mysql -h localhost -u root -p$passdb --default_character_set utf8 gestorssh < /root/restaurar/gestorssh.sql
mysql -u root -p$passdb -e "GRANT ALL PRIVILEGES ON gestorssh.* To 'root'@'localhost' IDENTIFIED BY '$passdb';"
mysql -u root -p$passdb -e "FLUSH PRIVILEGES"
mysql -u root -p$passdb -e "RENAME TABLE usuario_ssh TO conta_ssh;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE usuario ADD COLUMN accesstoken varchar(330) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' AFTER dadosdeposito;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE usuario ADD COLUMN valorrevenda decimal(10,2) NOT NULL DEFAULT '0' AFTER accesstoken;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE usuario MODIFY COLUMN valorrevenda decimal(10,2) NOT NULL DEFAULT '0' AFTER accesstoken;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE conta_ssh ADD COLUMN valorconta decimal(10,2) NOT NULL DEFAULT '0' AFTER demo;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE conta_ssh MODIFY COLUMN valorconta decimal(10,2) NOT NULL DEFAULT '0' AFTER demo;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE conta_ssh ADD COLUMN uuid text AFTER valorconta;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e   "ALTER TABLE configuracoes ADD COLUMN logoonline varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER att;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e   "ALTER TABLE configuracoes ADD COLUMN fundoonline varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER logoonline;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e   "ALTER TABLE configuracoes ADD COLUMN fundoDoLogOnline varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER fundoonline;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN BackgroundLink2 varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER fundoDoLogOnline;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorUser varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER BackgroundLink2;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorGeral varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER CorUser;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorMenu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER CorGeral;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e "ALTER TABLE configuracoes ADD COLUMN CorTexto varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL AFTER CorMenu;" gestorssh > /dev/null 2>&1
mysql -u root -p$passdb -e   "ALTER TABLE acesso_servidor ADD COLUMN qtdmax int(10) NOT NULL DEFAULT '0' AFTER qtd;" gestorssh > /dev/null 2>&1
mysqlcheck -u root -p$passdb --auto-repair --optimize --all-databases > /dev/null 2>&1
/usr/bin/php /var/www/html/pages/system/limpador.php > /dev/null 2>&1
echo ""
echo -e "\n\033[1;32mDADOS RESTAURADO COM SUCESSO!\033[0m"
echo ""
sleep 3
echo -e "\033[1;31mRETORNANDO...\033[0m"
/etc/init.d/mysql restart > /dev/null 2>&1
/etc/init.d/apache2 restart > /dev/null 2>&1
rm -rf /root/restaurar > /dev/null 2>&1
sleep 3
cat /dev/null > ~/.bash_history && history -c
clear
setup
exit;
}
#BOT TELEGRAM
bot_telegram () {
clear
fun_botOnOff() {
[[ $(ps x | grep "bot_painel" | grep -v grep | wc -l) = '0' ]] && {
clear
echo ""
echo -e "\E[44;1;37m              ATIVAÇÃO DO BOT PWEB                 \E[0m\n"
echo -e "                \033[1;33m[\033[1;31m!\033[1;33m] \033[1;31mATENÇÃO \033[1;33m[\033[1;31m!\033[1;33m]\033[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[1;32m"
echo -e "\n\033[1;32m1° \033[1;37m- \033[1;33mPELO SEU TELEGRAM ACESSE OS SEGUINTES BOT\033[1;37m:\033[0m"
echo -e "\n\033[1;32m2° \033[1;37m- \033[1;33mBOT \033[1;37m@BotFather \033[1;33mCRIE O SEU BOT \033[1;31mOPÇÃO: \033[1;37m/newbot\033[0m"
echo -e "\n\033[1;32m3° \033[1;37m- \033[1;33mBOT \033[1;37m@userinfobot \033[1;33mE PEGUE SEU ID \033[1;31mOPÇÃO: \033[1;37m/id\033[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[1;32m"
echo ""
echo -ne "\n\033[1;32mINFORME SEU TOKEN:\033[1;37m: "; read tokenbot
[[ -z $tokenbot ]] && {
echo -e "\n\033[1;31mINFORME SEU TOKEN!"
sleep 2
cat /dev/null > ~/.bash_history && history -c
bot_telegram
exit;
}
echo -ne "\n\033[1;32mINFORME SEU ID:\033[1;37m: "; read iduser
[[ -z $iduser ]] && {
echo -e "\n\033[1;31mINFORME SEU ID!"
sleep 2
cat /dev/null > ~/.bash_history && history -c
bot_telegram
exit;
}
getBotToken(){
  echo $1 > /etc/kernel/recweb/token
}
getIdUser(){
  echo $1 > /etc/kernel/recweb/id-admin
}
getBotToken $tokenbot
getIdUser $iduser
clear
echo -e "\033[1;32mATIVANDO BOT PWEB \033[0m\n"
fun_bot1() {
[[ ! -e "/etc/kernel/recweb/bot" ]] && {
wget -qO- $sitedwn/apibot.sh -O /etc/kernel/recweb/apibot > /dev/null 2>&1
if [[ $(uname -m) == "aarch64" ]]; then
wget -qO- $sitedwn/botarm.sh -O /etc/kernel/recweb/bot > /dev/null 2>&1
else
wget -qO- $sitedwn/bot64.sh -O /etc/kernel/recweb/bot > /dev/null 2>&1
fi
chmod 777 -R /etc/kernel/recweb > /dev/null 2>&1
}
cd /etc/kernel/recweb
screen -dmS bot_painel ./bot >/dev/null 2>&1
[[ $(grep -wc "bot_painel" /etc/autostart) = '0' ]] && {
echo -e "ps x | grep 'bot_painel' | grep -v 'grep' || cd /etc/kernel/recweb && screen -dmS bot_painel ./bot && cd $HOME" >>/etc/autostart
} || {
sed -i '/bot_painel/d' /etc/autostart
echo -e "ps x | grep 'bot_painel' | grep -v 'grep' || cd /etc/kernel/recweb && screen -dmS bot_painel ./bot && cd $HOME" >>/etc/autostart
}
cd $HOME || exit
sleep 3
}
fun_bar 'fun_bot1'
[[ $(ps x | grep "bot_painel" | grep -v grep | wc -l) != '0' ]] && echo -e "\n\033[1;32m BOT PWEB ATIVADO!\033[0m" || echo -e "\n\033[1;31m ERRO! CONFIRA SUAS INFORMAÇÕES\033[0m"
sleep 2
cat /dev/null > ~/.bash_history && history -c
bot_telegram
exit;
} || {
clear
echo -e "\033[1;32mDESATIVANDO BOT PWEB... \033[0m\n"
fun_bot2() {
screen -r -S "bot_painel" -X quit
screen -wipe 1>/dev/null 2>/dev/null
[[ $(grep -wc "bot_painel" /etc/autostart) != '0' ]] && {
sed -i '/bot_painel/d' /etc/autostart
}
sleep 2
}
fun_bar 'fun_bot2'
echo -e "\n\033[1;32m \033[1;31mBOT PWEB DESATIVADO! \033[0m"
sleep 2
cat /dev/null > ~/.bash_history && history -c
bot_telegram
exit;
}
}
stsbot=$(ps x | grep "bot_painel"|grep -v grep > /dev/null && echo -e "\033[1;32m ON ◉" || echo -e "\033[1;31mOFF ○")
echo ""
echo -e "\E[44;1;37m            GERENCIAR BOT PWEB               \E[0m\n"
echo -e "             \033[1;33m[\033[1;31m!\033[1;33m] \033[1;31mATENÇÃO \033[1;33m[\033[1;31m!\033[1;33m]\033[0m"
echo -e "\033[0;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[1;32m"
echo -e "\033[1;31m[\033[1;36m01\033[1;31m] \033[1;37m• \033[1;33mGERENCIAR BOTPWEB $stsbot\033[0m"
echo -e "\033[1;31m[\033[1;36m00\033[1;31m] \033[1;37m• \033[1;33mVOLTAR\033[0m"
echo -e "\033[1;34m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\033[0m"
echo ""
echo -ne "\033[1;36mSELECIONE UMA OPÇÃO: \033[1;37m"; read -r x
case "$x" in
1|01)
fun_botOnOff
exit;
;;
0|00)
echo -e "\033[1;31mRetornando...\033[0m"
setup
exit;
;;
*)
echo -e "\n\033[1;31mOpção inválida !\033[0m"
sleep 2
bot_telegram
esac
}
#SENHA ROOT
senha_root () {
clear
passdb=$(cat /etc/kernel/recweb/sweb)
echo ""
echo -e "\E[44;1;65m    ALTERANDO SENHA ROOT     \E[0m"
echo ""
echo -e "\033[1;33mSENHA ATUAL: $passdb\033[0m"
echo ""
read -p "DIGITE UMA NOVA SENHA ROOT: " pwdroot
sizemin=$(echo ${#pwdroot})
[[ $sizemin -lt 8 ]] && {
	echo -e "\n${Red}[!] VOCÊ DIGITOU UMA PALAVRA MUITO CURTA!${Norm}\n"
	sleep 1
	echo -e "${Red}[!] USE NO MÍNIMO 8 CARACTERES!${scor}\n"
	sleep 3
	setup
break
exit 0
}
mysql -u root -p"$passdb" -e "UPDATE mysql.user SET Password=PASSWORD('$pwdroot') WHERE User='root'"
mysql -u root -p"$pwdroot" -e "GRANT ALL PRIVILEGES ON gestorssh.* To 'root'@'localhost' IDENTIFIED BY '$pwdroot';"
mysql -u root -p"$pwdroot" -e "FLUSH PRIVILEGES"
systemctl restart mariadb
echo $pwdroot > /etc/kernel/recweb/sweb
if [[ -e "/var/www/html/pages/system/config.php" ]]; then
sed -i "s;$passdb;$pwdroot;g" /var/www/html/pages/system/config.php > /dev/null 2>&1
fi
if [[ -e "/var/www/html/config/config.php" ]]; then
sed -i "s;$passdb;$pwdroot;g" /var/www/html/config/config.php > /dev/null 2>&1
fi
if [[ -e "/var/www/html/class/conexao.php" ]]; then
sed -i "s;$passdb;$pwdroot;g" /var/www/html/class/conexao.php > /dev/null 2>&1
fi
echo "root:$pwdroot" | chpasswd
echo -e "\033[1;33m • \033[1;32mSENHA ROOT ALTERADA COM SUCESSO\033[1;33m • \033[0m"
sleep 3s
clear
setup
exit;
}
ajudap () {
apt install cowsay -y > /dev/null 2>&1
clear
echo -e  "Breve teremos tutorial das opções e oque elas fazem!" | cowsay -f turtle | lolcat
echo ""
echo -ne "DE UM ENTER PRA RETORNAR..." | lolcat -a -d 1; read -r
clear
setup
exit;
}
##PAINEL REMOVE
remove_painel () {
clear
echo -e "\033[1;32m SEMPRE CONFIRME COM \033[1;37mY"
echo -e "\033[1;32m PROSSIGA COM \033[1;37mENTER"
sleep 7
service apache2 stop
apt purge apache2 "mariadb *" "php *" -y > /dev/null 2>&1
rm -rf /etc/mysql /var/lib/mysql > /dev/null 2>&1
rm -rf /var/www/html > /dev/null 2>&1
apt autoremove -y > /dev/null 2>&1
apt autoclean -y > /dev/null 2>&1
echo -e "\033[1;36mPAINEL REMOVIDO COM ÊXITO \033[1;32m[!OK]"
clear
exit;
}
oracl() {
clear
echo ""
msg -bar
msg -azu "		FIREWALL ORACLE/AWS/AZR"
msg -ama " ESSA OPÇÃO SERVE PARA VPS ORACLE/AWS/AZR E TAMBÉM"
msg -ama " PARA VPS QUE PRECISE ABRIR PORTAS NO FIREWALL!"
msg -bar
echo ""
if ps x | grep -w firewalld | grep -v grep 1>/dev/null 2>/dev/null; then
echo -e "\033[1;33mPORTAS ABERTAS\033[1;37m: \033[1;32m$(firewall-cmd --list-ports)"
else
echo -e "\033[1;31mFIREWALL DESATIVADO"
fi
echo ""
echo -e "\033[1;31m[\033[1;36m01\033[1;31m] \033[1;37m• \033[1;33mABRIR PORTA TCP \033[1;32m>\033[1;33m>\033[1;31m>\033[0m \033[0m"
echo -e "\033[1;31m[\033[1;36m02\033[1;31m] \033[1;37m• \033[1;33mFECHAR PORTA TCP \033[1;32m>\033[1;33m>\033[1;31m>\033[0m \033[0m"
echo -e "\033[1;31m[\033[1;36m03\033[1;31m] \033[1;37m• \033[1;33mABRIR PORTA UDP \033[1;32m>\033[1;33m>\033[1;31m>\033[0m \033[0m"
echo -e "\033[1;31m[\033[1;36m04\033[1;31m] \033[1;37m• \033[1;33mFECHAR PORTA UDP \033[1;32m>\033[1;33m>\033[1;31m>\033[0m \033[0m"
echo -e "\033[1;31m[\033[1;36m05\033[1;31m] \033[1;37m• \033[1;33mDESATIVAR FIREWALL \033[1;32m>\033[1;33m>\033[1;31m>\033[0m \033[0m"
echo -e "\033[1;31m[\033[1;36m00\033[1;31m] \033[1;37m• \033[1;33mVOLTAR \033[1;32m<\033[1;33m<\033[1;31m<\033[0m \033[0m"
echo ""
echo -ne "\033[1;36mSELECIONE UMA OPÇÃO: \033[1;37m"; read -r x
case "$x" in
1 | 01)
verif_portas_tcp
exit;
;;
2 | 02)
oracltcpfechar
exit;
;;
3 | 03)
verif_portas_udp
exit;
;;
4 | 04)
oracludpfechar
exit;
;;
5 | 05)
systemctl stop firewalld > /dev/null 2>&1
systemctl disable firewalld > /dev/null 2>&1
apt remove  firewalld -y > /dev/null 2>&1
apt purge firewalld -y > /dev/null 2>&1
apt autoremove -y > /dev/null 2>&1
apt autoclean -y > /dev/null 2>&1
rm -rf /etc/firewalld > /dev/null 2>&1
echo -e "\n\033[1;31mDESINSTALADO COM SUCESSO!\033[0m"
sleep 3
oracl
exit;
;;
0 | 00)
echo -e "\033[1;31mRetornando...\033[0m"
setup
exit;
;;
*)
echo -e "\n\033[1;31mOpção inválida!\033[0m"
sleep 2
oracl
esac
}
verif_portas_tcp() {
echo ""
echo -ne "\033[1;34mQUAL PORTA TCP DESEJA ABRIR \033[1;33m?\033[1;37m "
read pt
if (firewall-cmd --zone=public --query-port=$pt/tcp) 1>/dev/null 2>/dev/null; then
echo -e "\n\033[1;31mPorta \033[1;33m$pt \033[1;31mjá esta aberta!\033[0m"
sleep 3
oracl
else
oracltcp
fi
}
verif_portas_udp() {
echo ""
echo -ne "\033[1;34mQUAL PORTA UDP DESEJA ABRIR \033[1;33m?\033[1;37m "
read pt
if (firewall-cmd --zone=public --query-port=$pt/udp) 1>/dev/null 2>/dev/null; then
echo -e "\n\033[1;31mPorta \033[1;33m$pt \033[1;31mjá esta aberta!\033[0m"
sleep 3
oracl
else
oracludp
fi
}
oracltcpfechar() {
if ps x | grep -w firewalld | grep -v grep 1>/dev/null 2>/dev/null; then
echo ""
echo -ne "\033[1;34mQUAL PORTA TCP DESEJA FECHAR \033[1;33m?\033[1;37m "
read pt
echo ""
firewall-cmd --zone=public --permanent --remove-port=$pt/tcp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt fechada com sucesso!"
sleep 2
firewall-cmd --reload > /dev/null 2>&1
oracl
else
apt update -y > /dev/null 2>&1
apt install firewalld -y > /dev/null 2>&1
systemctl enable firewalld > /dev/null 2>&1
systemctl start firewalld > /dev/null 2>&1
firewall-cmd --zone=public --permanent --add-port=22/tcp > /dev/null 2>&1
echo ""
echo -ne "\033[1;34mQUAL PORTA DESEJA FECHAR \033[1;33m?\033[1;37m "
read pt
echo ""
firewall-cmd --zone=public --permanent --remove-port=$pt/tcp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt fechada com sucesso!"
sleep 2
firewall-cmd --reload > /dev/null 2>&1
oracl
fi
}
oracludpfechar() {
if ps x | grep -w firewalld | grep -v grep 1>/dev/null 2>/dev/null; then
echo ""
echo -ne "\033[1;34mQUAL PORTA UDP DESEJA FECHAR \033[1;33m?\033[1;37m "
read pt
echo ""
firewall-cmd --zone=public --permanent --remove-port=$pt/udp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt fechada com sucesso!"
sleep 2
firewall-cmd --reload > /dev/null 2>&1
oracl
else
apt update -y > /dev/null 2>&1
apt install firewalld -y > /dev/null 2>&1
systemctl enable firewalld > /dev/null 2>&1
systemctl start firewalld > /dev/null 2>&1
firewall-cmd --zone=public --permanent --add-port=22/tcp > /dev/null 2>&1
echo ""
echo -ne "\033[1;34mQUAL PORTA DESEJA FECHAR \033[1;33m?\033[1;37m "
read pt
echo ""
firewall-cmd --zone=public --permanent --remove-port=$pt/udp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt fechada com sucesso!"
sleep 2
firewall-cmd --reload > /dev/null 2>&1
oracl
fi
}
oracltcp() {
if ps x | grep -w firewalld | grep -v grep 1>/dev/null 2>/dev/null; then
firewall-cmd --zone=public --permanent --add-port=$pt/tcp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt aberta com sucesso!"
sleep 3
firewall-cmd --reload > /dev/null 2>&1
oracl
else
apt update -y > /dev/null 2>&1
apt install firewalld -y > /dev/null 2>&1
systemctl enable firewalld > /dev/null 2>&1
systemctl start firewalld > /dev/null 2>&1
firewall-cmd --zone=public --permanent --add-port=22/tcp > /dev/null 2>&1
firewall-cmd --zone=public --permanent --add-port=$pt/tcp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt aberta com sucesso!"
sleep 3
firewall-cmd --reload > /dev/null 2>&1
oracl
fi
}
oracludp() {
if ps x | grep -w firewalld | grep -v grep 1>/dev/null 2>/dev/null; then
firewall-cmd --zone=public --permanent --add-port=$pt/udp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt aberta com sucesso!"
sleep 3
firewall-cmd --reload > /dev/null 2>&1
oracl
else
apt update -y > /dev/null 2>&1
apt install firewalld -y > /dev/null 2>&1
systemctl enable firewalld > /dev/null 2>&1
systemctl start firewalld > /dev/null 2>&1
firewall-cmd --zone=public --permanent --add-port=22/tcp > /dev/null 2>&1
firewall-cmd --zone=public --permanent --add-port=$pt/udp > /dev/null 2>&1
echo -e "\n\033[1;32mPorta $pt aberta com sucesso!"
sleep 3
firewall-cmd --reload > /dev/null 2>&1
oracl
fi
}
att_pweb () {
clear
echo ""
echo -e "\E[41;1;37m         BAIXANDO ULTIMA VERSÃO        \E[0m"
echo -e " "
echo -ne "\033[1;33m[\033[1;31m ! \033[1;33m] \033[1;31mATUALIZANDO"; fun_prog 'fun_atpweb'
echo -e " "; fun_bar 'fun_update'
echo -e " "
echo -ne "\033[1;33m[\033[1;31m ! \033[1;33m] \033[1;31mCONCLUINDO"; fun_prog 'sleep 3'
sleep 2
clear
echo ""
figlet -f slant GESTOR-SSH | boxes -d cat -pa2t0b0 | lolcat -a -d 2
echo -e "\033[1;32m				                      By\033[1;36m NTECH SYSTEM\033[0m"
echo ""
echo -e "        \033[1;33m • \033[1;32mATUALIZAÇÃO CONCLUÍDA COM SUCESSO\033[1;33m • \033[0m"
echo ""
echo -e "\033[1;31m \033[1;33mCOMANDO PRINCIPAL: \033[1;32mpweb\033[0m"
echo -e "\033[1;33m MAIS INFORMAÇÕES \033[1;31m(\033[1;36mTELEGRAM\033[1;31m): \033[1;37m@paineis\033[0m"
echo ""
echo -ne "\n\033[1;31mENTER \033[1;33mPARA RETORNAR AO \033[1;32mPWEB! \033[0m"; read -r
pweb
exit;
}
repairdb () {
clear
echo ""
figlet -f slant GESTOR-SSH | boxes -d cat -pa2t0b0 | lolcat -a -d 2
echo -e "\033[1;32m				                      By\033[1;36m NTECH SYSTEM\033[0m"
echo ""
echo -e "\033[1;33mREPARAR E OTIMIZAR BANCO DE DADOS DO PAINELWEB GESTOR-SSH!\033[0m"
echo ""
echo -ne "\033[1;32mDE UM ENTER PRA CONTINUAR...\033[0m"; read -r
[[ ! -e /etc/kernel/recweb/sweb ]] && {
echo -e "\n\033[1;31mO PAINEL NÃO ESTÁ INSTALADO!\033[0m"
echo ""
sleep 3
echo -e "\033[1;31mRETORNANDO...\033[0m"
sleep 3
cat /dev/null > ~/.bash_history && history -c
clear
setup
exit;
}
passdb=$(cat /etc/kernel/recweb/sweb)
[[ $(mysql -h localhost -u root -p$passdb -e "show databases" | grep -wc gestorssh) == '0' ]] && {
echo -e "\n\033[1;31mSEU PAINELWEB NÃO É COMPATÍVEL!\033[0m"
echo ""
sleep 3
echo -e "\033[1;31mRETORNANDO...\033[0m"
sleep 3
cat /dev/null > ~/.bash_history && history -c
clear
setup
exit;
}
mysql -u root -p$passdb -e   "ALTER DATABASE gestorssh CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;" gestorssh > /dev/null 2>&1
mysqlcheck -u root -p$passdb --auto-repair --optimize --all-databases > /dev/null 2>&1
/usr/bin/php /var/www/html/pages/system/limpador.php > /dev/null 2>&1
echo ""
echo -e "\n\033[1;32mDADOS REPARADOS E OTIMIZADOS COM SUCESSO!\033[0m"
echo ""
sleep 3
echo -ne "\033[1;36mDE UM ENTER PRA RETORNAR...\033[0m"; read -r
/etc/init.d/mysql restart > /dev/null 2>&1
/etc/init.d/apache2 restart > /dev/null 2>&1
sleep 2
cat /dev/null > ~/.bash_history && hist