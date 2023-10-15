                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                #!/bin/bash
[[ $(awk -F" " '{print $2}' /usr/lib/telegram) == "@nandoslayer" ]] && {
source apibot
sitedwn=bitbucket.org/nandoslayer/pweb2.0/downloads
api_bot=$(cat /etc/kernel/recweb/token)
id_admin=$(cat /etc/kernel/recweb/id-admin)
[[ -z $api_bot ]] && exit 0
[[ -z $id_admin ]] && exit 0
ShellBot.init --token "$api_bot" --monitor --return map --flush
ShellBot.username
verificar_chave(){
clear
[[ -e /etc/kernel/recweb/verweb ]] && versao=$(cat /etc/kernel/recweb/verweb) || versao="1.0.0"
[[ -e /bin/info-chave ]] && key=$(cat /bin/info-chave) || key=""
[[ $(uname -m) == "aarch64" ]] && arc=aarch64 || arc=x86_64
IP=$(wget -qO- ipv4.icanhazip.com) &>/dev/null
resultkey=$(curl -s -X POST "http://chave.imperialnet.xyz/validarbot.php"  -d key=$key -d IP=$IP -d arcsys=$arc -d veratual=$versao) &>/dev/null
if [ $(echo $resultkey | jq -r '.validate') == "Success" ] > /dev/null 2>&1
then
echo -e 'by: @nandoslayer' >/usr/lib/blockpainel
setup
else
rm /usr/lib/blockpainel > /dev/null 2>&1
clear && exit 1
fi
}
setup () {
fun_menu() {
[[ "${message_from_id[$id]}" == "$id_admin" ]] && {
local env_msg
env_msg="=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=\n"
env_msg+="<b>SEJA BEM VINDO(a) AO BOT PWEB</b>\n"
env_msg+="=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=\n\n"
env_msg+="⚠️ <i>SELECIONE UMA OPCAO ABAIXO !</i>\n\n"
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} --text "$env_msg" \
--reply_markup "$keyboard1" \
--parse_mode html
return 0
}
}
fun_ajuda() {
[[ ${message_chat_id[$id]} == "" ]] && {
id_chatuser="${callback_query_message_chat_id[$id]}"
id_name="${callback_query_from_username}"
} || {
id_chatuser="${message_chat_id[$id]}"
id_name="${message_from_username}"
}
if [[ "$id_chatuser" = "$id_admin" ]]; then
local env_msg
env_msg="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n"
env_msg+="<b>BEM VINDO(a) AO BOT PWEB</b>\n"
env_msg+="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n\n"
env_msg+="⚠️ <i>Comandos Disponiveis</i>\n\n"
env_msg+="[<b>01</b>] /menu = Exibe menu\n"
env_msg+="[<b>02</b>] /info = Exibe informacoes\n"
env_msg+="[<b>03</b>] /ajuda = Informacoes sobre opcoes\n\n"
env_msg+="⚠️ <i>Opções Disponiveis</i>\n\n"
env_msg+="• <u>INFO VPS</u> = Informacoes do servidor\n\n"
env_msg+="• <u>BACKUP</u> = Cria Backup do banco de dados\n\n"
env_msg+="• <u>OTIMIZAR</u> = Limpa o cache - ram\n\n"
env_msg+="• <u>SPEEDTESTE</u> = Teste de conexao\n\n"
env_msg+="• <u>ARQUIVOS</u> = Hospeda Arquivos\n\n"
env_msg+="• <u>AUTOBACKUP</u> = lig/Des Backup automatico\n\n"
env_msg+="• <u>AJUDA</u> = Informacoes sobre opcoes\n\n"
ShellBot.sendMessage --chat_id $id_chatuser \
--text "$(echo -e $env_msg)" \
--parse_mode html
return 0
else
ShellBot.sendMessage --chat_id $id_chatuser \
--text "$(echo -e 🚫 ACESSO NEGADO 🚫)"
return 0
fi
}
verifica_acesso() {
[[ "${message_from_id[$id]}" != "$id_admin" ]] && {
[[ "$(grep -wc ${message_from_username} $suspensos)" != '0' ]] || [[ "$(grep -wc ${message_from_username} $ativos)" == '0' ]] && {
_erro="1"
return 0
}
}
}
fun_down() {
[[ "${callback_query_from_id[$id]}" != "$id_admin" ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚫 ACESSO NEGADO 🚫"
return 0
}
[[ ! -d /tmp/file ]] && mkdir /tmp/file
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "[1] - ADICIONAR ARQUIVO\n[2] - EXCLUIR ARQUIVO\n\nInforme a opção [1-2]:" \
--reply_markup "$(ShellBot.ForceReply)"
}
infovps() {
[[ "${callback_query_from_id[$id]}" != "$id_admin" ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "$(echo -e 🚫 ACESSO NEGADO 🚫)"
return 0
}
onlinecheck=$(cat /etc/kernel/recweb/ssh.online)
contacheck=$(cat /etc/kernel/recweb/ssh.conta)
acessocheck=$(cat /etc/kernel/recweb/ssh.acesso)
system=$(cat /etc/issue.net)
name=$(cat /etc/lsb-release |grep DESCRIPTION |awk -F = {'print $2'})
codename=$(cat /etc/lsb-release |grep CODENAME |awk -F = {'print $2'})
devlike=$(cat /etc/os-release |grep LIKE |awk -F = {'print $2'})
uso=$(top -bn1 | awk '/Cpu/ { cpu = "" 100 - $8 "%" }; END { print cpu }')
modelo=$(cat /proc/cpuinfo |grep "model name" |uniq |awk -F : {'print $2'})
cpucores=$(grep -c cpu[0-9] /proc/stat)
cache=$(cat /proc/cpuinfo |grep "cache size" |uniq |awk -F : {'print $2'})
ram1=$(free -h | grep -i mem | awk {'print $2'})
ram2=$(free -h | grep -i mem | awk {'print $4'})
ram3=$(free -h | grep -i mem | awk {'print $3'})
usoram=$(free -m | awk 'NR==2{printf "0.00%\t\t", $3*100/$2 }')
PT=$(lsof -V -i tcp -P -n | grep -v "ESTABLISHED" | grep -v "COMMAND" | grep "LISTEN")
local info
info="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n"
info+="<b>INFORMAÇÕES DO SERVIDOR</b>\n"
info+="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n\n"
info+="<b>SISTEMA OPERACIONAL</b>\n"
info+="<b>Nome:</b> $name\n"
info+="<b>CodeName:</b> $codename\n"
info+="<b>Kernel:</b> $(uname -s)\n"
info+="<b>Kernel Release:</b> $(uname -r)\n"
info+="<b>Derivado do OS:</b> $devlike\n\n"
info+="<b>PROCESSADOR</b>\n"
info+="<b>Modelo:</b> $modelo\n"
info+="<b>Nucleos:</b> $cpucores\n"
info+="<b>M.Cache:</b> $cache\n"
info+="<b>Arquitetura:</b> $(uname -p)\n"
info+="<b>Ultilização:</b> $uso\n\n"
info+="<b>MEMÓRIA RAM</b>\n"
info+="<b>Total:</b> $ram1\n"
info+="<b>Em Uso:</b> $ram2\n"
info+="<b>Livre:</b> $ram3\n"
info+="<b>Ultilização:</b> $usoram\n\n"
#for porta in `echo -e "$PT" | cut -d: -f2 | cut -d' ' -f1 | uniq`; do
#svcs=$(echo -e "$PT" | grep -w "$porta" | awk '{print $1}' | uniq)
#info+="<b>Serviço $(echo -e "$svcs") </b><b>Porta $(echo -e "$porta")</b>\n"
#done
info+="\n<i>ONLINE AGORA:</i><b> $onlinecheck</b>\n<i>CONTAS SSH:</i><b> $contacheck</b>\n<i>ACESSOS SSH:</i><b> $acessocheck</b>\n"
ShellBot.sendMessage --chat_id $id_admin \
--text "$(echo -e $info)" \
--parse_mode html
return 0
}
otimizer() {
[[ "${callback_query_from_id[$id]}" != "$id_admin" ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "$(echo -e 🚫 ACESSO NEGADO 🚫)"
return 0
}
MEM1=$(free | awk '/Mem:/ {print int(100*$3/$2)}')
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🧹 LIMPANDO CACHE DO SERVIDOR"
passdb=$(cat /etc/kernel/recweb/sweb)
mysqlcheck -u root -p$passdb --auto-repair --optimize --all-databases > /dev/null 2>&1
/usr/bin/php /var/www/html/pages/system/limpador.php > /dev/null 2>&1
/etc/init.d/mysql restart > /dev/null 2>&1
/etc/init.d/apache2 restart > /dev/null 2>&1
apt-get autoclean -y
echo 3 >/proc/sys/vm/drop_caches
sync && sysctl -w vm.drop_caches=3 1>/dev/null 2>/dev/null
sysctl -w vm.drop_caches=0 1>/dev/null 2>/dev/null
swapoff -a
swapon -a
ram1=$(free -h | grep -i mem | awk {'print $2'})
ram2=$(free -h | grep -i mem | awk {'print $3'})
ram3=$(free -h | grep -i mem | awk {'print $4'})
MEM2=$(free | awk '/Mem:/ {print int(100*$3/$2)}')
res=$(expr $MEM1 - $MEM2)
local sucess
sucess="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n"
sucess+="<b>OTIMIZADO COM SUCESSO !</b>\n"
sucess+="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n\n"
sucess+="<i>Ultilizacao anterior</i> $MEM1%\n\n"
sucess+="<b>Memoria Ram Total</b> $ram1\n"
sucess+="<b>livre</b> $ram3\n"
sucess+="<b>Em uso</b> $ram2\n"
sucess+="<i>Ultilizacao atual</i> $MEM2%\n\n"
sucess+="<b>Economia de:</b> $res%"
ShellBot.sendMessage --chat_id $id_admin \
--text "$(echo -e $sucess)" \
--parse_mode html
return 0
}
speed_test() {
[[ "${callback_query_from_id[$id]}" != "$id_admin" ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "$(echo -e 🚫 ACESSO NEGADO 🚫)"
return 0
}
rm /etc/kernel/recweb/speed >/dev/null 2>&1
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚀 TESTANDO VELOCIDADE DO SERVIDOR 🚀"
if [ -e "/usr/bin/testevelocidade" ]; then
testevelocidade --share > $HOME/speed
else
wget -qO- $sitedwn/speedtest-cli.sh -O /usr/bin/testevelocidade > /dev/null 2>&1
chmod 777 /usr/bin/testevelocidade > /dev/null 2>&1
testevelocidade --share > $HOME/speed > /dev/null 2>&1
fi
png=$(cat speed | sed -n '5 p' |awk -F : {'print $NF'})
down=$(cat speed | sed -n '7 p' |awk -F :  {'print $NF'})
upl=$(cat speed | sed -n '9 p' |awk -F :  {'print $NF'})
host=$(cat speed | sed -n '2 p' |awk -F :  {'print $NF'})
lnk=$(cat speed | sed -n '10 p' |awk -F :  {'print $NF'})
local msg
msg="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n"
msg+="<b>🚀 VELOCIDADE DO SERVIDOR 🚀</b>\n"
msg+="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n\n"
msg+="<b>HOST:</b>$host\n"
msg+="<b>PING:</b>$png\n"
msg+="<b>DOWNLOAD:</b>$down\n"
msg+="<b>UPLOAD:</b>$upl\n"
ShellBot.sendMessage --chat_id $id_admin \
--text "$(echo -e $msg)" \
--parse_mode html
ShellBot.sendMessage --chat_id $id_admin \
--text "$(echo -e $lnk)" \
--parse_mode html
rm -rf $HOME/speed
return 0
}
backup_users() {
[[ "${callback_query_from_id[$id]}" != "$id_admin" ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "$(echo -e 🚫 ACESSO NEGADO 🚫)"
return 0
}
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "♻️ CRIANDO BACKUP DO BANCO DE DADOS"
cd /etc/kernel/recweb/ && bash cron.autobackup && cd /root >/dev/null 2>&1 || exit
ShellBot.sendDocument --chat_id ${id_admin} \
--document "@/root/backupsql/gestorssh.sql.bz2" \
--caption "$(echo -e "♻️ BACKUP DO BANCO DE DADOS ♻️")"
return 0
}
sobremim() {
local msg
msg="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n"
msg+="<b>🤖 BOT PWEB 🤖</b>\n"
msg+="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n\n"
msg+="<b>Desenvolvido por:</b> @nandoslayer\n"
msg+="<b>Canal Oficial:</b> @nandoslayer\n\n"
msg+="Fui criado com o propósito de fornecer informações e ferramentas para gestão em servidores 🐧 GNU/Linux 🐧.\n\n"
msg+="<b>Menu:</b> /menu\n"
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e $msg)" \
--parse_mode html
return 0
}
fun_backauto() {
[[ "${callback_query_from_id[$id]}" = "$id_admin" ]] && {
[[ ! -d /root/backupsql ]] && {
mkdir /root/backupsql
[[ $(crontab -l | grep -c "cron.autobackup") = '0' ]] && (
crontab -l 2>/dev/null
echo "2 */3 * * * cd /etc/kernel/recweb/ && bash cron.autobackup && cd /root"
) | crontab -
s
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "♻️ BACKUP AUTOMATICO ATIVADO 🟢"
return 0
} || {
[[ $(crontab -l | grep -c "cron.autobackup") != '0' ]] && crontab -l | grep -v 'cron.autobackup' | crontab -
[[ -d /root/backupsql ]] && rm -rf /root/backupsql
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "♻️ BACKUP AUTOMATICO DESATIVADO 🔴"
return 0
}
}
}
backup_auto() {
ShellBot.sendDocument --chat_id $id_admin \
--document "@/root/backupsql/gestorssh.sql.bz2" \
--caption "$(echo -e "♻️ BACKUP AUTOMATICO ♻️")"
rm /root/backupsql/gestorssh.sql.bz2
return 0
}
restaure_backup() {
[[ ${message_from_id[$id]} == ${id_admin} ]] && {
[[ "${message_document_file_name}" != 'gestorssh.sql.bz2' ]] && return 0
local file_id
file_id=${message_document_file_id[$id]}
if [[ $file_id ]]; then
[[ -e /tmp/gestorssh.sql.bz2 ]] && rm /tmp/gestorssh.sql.bz2
[[ "$(ls /tmp | grep -c '.bz2')" != '0' ]] && {
for i in $(ls /tmp | grep '.bz2'); do
rm /tmp/$i
done
}
ShellBot.getFile --file_id $file_id
if ShellBot.downloadFile --file_path "${return[file_path]}" --dir "/tmp"; then
msg='<b>♻️ ARQUIVO DE BACKUP ♻️</b>\n\n<i>O arquivo enviado é um arquivo\nde backup gestorssh.sql.bz2!</i>'
ShellBot.sendMessage --chat_id ${id_admin} \
--text "$(echo -e "$msg")" \
--parse_mode html
ShellBot.sendMessage --chat_id ${id_admin} \
--text 'Deseja restaurar ? [sim | nao]' \
--reply_markup "$(ShellBot.ForceReply)"
fi
fi
return 0
}
}
msg_bem_vindo() {
local msg
msg="✌️😃 Ola <b>${message_from_first_name[$id]}</b>\n\nSEJA BEM VINDO(a)\n\n"
msg+="Para acessar o menu\nclick ou execute [ /menu ]\n\n"
msg+="Para obter informacoes\nclick ou execute [ /ajuda ]\n\n"
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e $msg)" \
--parse_mode html
return 0
}
fun_verif_limite_rev() {
_userrev=$1
[[ "$(grep -w "$_userrev" $ativos | awk '{print $NF}')" == 'revenda' ]] && {
echo $_userrev
[[ $(grep -wc 'SUBREVENDA' /etc/bot/revenda/$_userrev/$_userrev) != '0' ]] && {
_limsomarev=$(grep -w 'SUBREVENDA' /etc/bot/revenda/$_userrev/$_userrev | awk {'print $4'} | paste -s -d + | bc)
} || {
_limsomarev='0'
}
[[ $(ls /etc/bot/revenda/$_userrev/usuarios | wc -l) != '0' ]] && {
_mlim1='0'
_meus_users="/etc/bot/revenda/$_userrev/usuarios"
for _user_ in $(ls $_meus_users); do
_mlim2=$(cat $_meus_users/$_user_ | awk -F : {'print $4'})
_mlim1=$(echo "${_mlim1} + ${_mlim2}" | bc)
done
}
[[ -z "$_mlim1" ]] && _mlim1='0'
_result=$(echo "${_limsomarev} + ${_mlim1}" | bc)
}
[[ "$(grep -w "$_userrev" $ativos | awk '{print $NF}')" == 'subrevenda' ]] && {
[[ "$(ls /etc/bot/revenda/$_userrev/usuarios | wc -l)" != '0' ]] && {
_dir_users="/etc/bot/revenda/$_userrev/usuarios"
_lim1='0'
for i in $(ls $_dir_users); do
_lim2=$(cat $_dir_users/$i | awk -F : {'print $4'})
_lim1=$(echo "${_lim1} + ${_lim2}" | bc)
done
}
[[ -z "$_lim1" ]] && _lim1='0'
_result=$(echo "${_lim1}")
}
}
fun_add_revenda() {
[[ "$(grep -wc ${callback_query_from_username} $suspensos)" != '0' ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "⚠️ VC ESTA SUSPENSO! CONTATE O ADMINISTRADOR"
return 0
}
[[ "${callback_query_from_id[$id]}" == "$id_admin" ]] || [[ "$(grep -wc ${callback_query_from_username} $ativos)" != '0' ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "👥 ADICIONAR REVENDEDOR 👥\n\nInforme o nome:" \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚫 ACESSO NEGADO 🚫"
return 0
}
}
criar_rev() {
file_rev=$1
[[ -z "$file_rev" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e Erro)"
_erro='1'
break
}
n_rev=$(sed -n '1 p' $file_rev | cut -d' ' -f2)
u_rev=$(sed -n '2 p' $file_rev | awk -F '@' {'print $2'})
l_rev=$(sed -n '3 p' $file_rev | cut -d' ' -f2)
d_rev=$(sed -n '4 p' $file_rev | cut -d' ' -f2)
[[ "${message_from_id[$id]}" = "$id_admin" ]] && {
t_rev='revenda'
} || {
t_rev='subrevenda'
echo -e "SUBREVENDA: $u_rev LIMITE_SUBREVENDA: $l_rev" >>/etc/bot/revenda/${message_from_username}/${message_from_username}
}
mkdir /etc/bot/revenda/"$u_rev"
mkdir /etc/bot/revenda/"$u_rev"/usuarios
touch /etc/bot/revenda/"$u_rev"/$u_rev
echo -e "USER: $u_rev LIMITE: $l_rev DIAS: $d_rev TIPO: $t_rev" >>$ativos
echo -e "=========================\nLIMITE_REVENDA: $l_rev\nDIAS_REVENDA: $d_rev\n=========================\n" >/etc/bot/revenda/"$u_rev"/$u_rev
sed -i '$d' $file_rev
echo -e "Vencimento: $(date "+0/Success/%Y" -d "+$d_rev days")" >>$file_rev
}
fun_del_rev() {
[[ "$(grep -wc ${callback_query_from_username} $suspensos)" != '0' ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "⚠️ VC ESTA SUSPENSO! CONTATE O ADMINISTRADOR"
return 0
}
[[ "${callback_query_from_id[$id]}" == "$id_admin" ]] || [[ "$(grep -wc ${callback_query_from_username} $ativos)" != '0' ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "🗑 REMOVER REVENDEDOR 🗑\n\nInforme o user dele [Ex: @crazy_vpn]:" \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚫 ACESSO NEGADO 🚫"
return 0
}
}
del_rev() {
_cli_rev=$1
[[ -z "$_cli_rev" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "Erro")"
return 0
}
[[ "${message_from_id[$id]}" == "$id_admin" ]] && {
[[ "$(grep -wc "$_cli_rev" $ativos)" != '0' ]] && {
[[ -e "/etc/bot/revenda/$_cli_rev/$_cli_rev" ]] && _dirsts='revenda' || _dirsts='suspensos'
[[ "$(grep -wc 'SUBREVENDA' /etc/bot/$_dirsts/$_cli_rev/$_cli_rev)" != '0' ]] && {
while read _listsub2; do
_usub="$(echo $_listsub2 | awk '{print $2}')"
[[ -e "/etc/bot/revenda/$_usub/$_usub" ]] && _dirsts2='revenda' || _dirsts2='suspensos'
_dir_users="/etc/bot/$_dirsts2/$_usub/usuarios"
[[ "$(ls $_dir_users | wc -l)" != '0' ]] && {
for _user in $(ls $_dir_users); do
piduser=$(ps -u "$_user" | grep sshd | cut -d? -f1)
kill -9 $piduser >/dev/null 2>&1
userdel --force "$_user" 2>/dev/null
grep -v ^$_user[[:space:]] /root/usuarios.db >/tmp/ph
cat /tmp/ph >/root/usuarios.db
rm /etc/bot/info-users/$_user
done
}
[[ -d /etc/bot/$_dirsts2/$_usub ]] && rm -rf /etc/bot/$_dirsts2/$_usub >/dev/null 2>&1
sed -i "/\b$_usub\b/d" $ativos
[[ $(grep -wc "$_usub" $suspensos) != '0' ]] && {
sed -i "/\b$_usub\b/d" $suspensos
}
done <<<"$(grep -w 'SUBREVENDA' /etc/bot/$_dirsts/$_cli_rev/$_cli_rev)"
}
[[ "$(ls /etc/bot/$_dirsts/$_cli_rev/usuarios | wc -l)" != '0' ]] && {
for _user in $(ls /etc/bot/$_dirsts/$_cli_rev/usuarios); do
piduser=$(ps -u "$_user" | grep sshd | cut -d? -f1)
kill -9 $piduser >/dev/null 2>&1
userdel --force "$_user" 2>/dev/null
grep -v ^$_user[[:space:]] /root/usuarios.db >/tmp/ph
cat /tmp/ph >/root/usuarios.db
rm /etc/bot/info-users/$_user
done
}
[[ -d /etc/bot/$_dirsts/$_cli_rev ]] && rm -rf /etc/bot/$_dirsts/$_cli_rev >/dev/null 2>&1
sed -i "/\b$_cli_rev\b/d" $ativos
[[ $(grep -wc "$_cli_rev" $suspensos) != '0' ]] && {
sed -i "/\b$_cli_rev\b/d" $suspensos
}
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "REMOVIDO COM SUCESSO")" \
--parse_mode html
return 0
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e ❌ REVENDEDEDOR NAO EXISTE ❌)"
return 0
}
} || {
[[ "$(grep -wc "$_cli_rev" /etc/bot/revenda/${message_from_username}/${message_from_username})" != '0' ]] && {
[[ -d /etc/bot/revenda/$_cli_rev ]] && {
[[ "$(ls /etc/bot/revenda/$_cli_rev/usuarios | wc -l)" != '0' ]] && {
for _user in $(ls /etc/bot/revenda/$_cli_rev/usuarios); do
piduser=$(ps -u "$_user" | grep sshd | cut -d? -f1)
kill -9 $piduser >/dev/null 2>&1
userdel --force "$_user" 2>/dev/null
grep -v ^$_user[[:space:]] /root/usuarios.db >/tmp/ph
cat /tmp/ph >/root/usuarios.db
rm /etc/bot/info-users/$_user
done
}
[[ -d /etc/bot/revenda/$_cli_rev ]] && rm -rf /etc/bot/revenda/$_cli_rev >/dev/null 2>&1
sed -i "/\b$_cli_rev\b/d" $ativos
sed -i "/\b$_cli_rev\b/d" /etc/bot/revenda/${message_from_username}/${message_from_username}
}
[[ -d /etc/bot/suspensos/$_cli_rev ]] && {
[[ "$(ls /etc/bot/suspensos/$_cli_rev/usuarios | wc -l)" != '0' ]] && {
for _user in $(ls /etc/bot/suspensos/$_cli_rev/usuarios); do
piduser=$(ps -u "$_user" | grep sshd | cut -d? -f1)
kill -9 $piduser >/dev/null 2>&1
userdel --force "$_user" 2>/dev/null
grep -v ^$_user[[:space:]] /root/usuarios.db >/tmp/ph
cat /tmp/ph >/root/usuarios.db
rm /etc/bot/info-users/$_user
done
}
[[ -d /etc/bot/suspensos/$_cli_rev ]] && rm -rf /etc/bot/suspensos/$_cli_rev >/dev/null 2>&1
sed -i "/\b$_cli_rev\b/d" $ativos
sed -i "/\b$_cli_rev\b/d" $suspensos
sed -i "/\b$_cli_rev\b/d" /etc/bot/revenda/${message_from_username}/${message_from_username}
}
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "REMOVIDO COM SUCESSO")" \
--parse_mode html
return 0
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e ❌ REVENDEDEDOR NAO EXISTE ❌)"
return 0
}
}
}
fun_lim_rev() {
[[ "$(grep -wc ${callback_query_from_username} $suspensos)" != '0' ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "⚠️ VC ESTA SUSPENSO! CONTATE O ADMINISTRADOR"
return 0
}
[[ "${callback_query_from_id[$id]}" == "$id_admin" ]] || [[ "$(grep -wc ${callback_query_from_username} $ativos)" != '0' ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "♾ ALTERAR LIMITE REVENDA ♾\n\nInforme o user dele [Ex: @crazy_vpn]:" \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚫 ACESSO NEGADO 🚫"
return 0
}
}
lim_rev() {
_file_lim=$1
[[ -z "$_file_lim" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "Erro")"
return 0
}
_rev_usern=$(grep -w 'Revendedor' $_file_lim | awk -F '@' {'print $2'})
new_l=$(grep -w 'Limite' $_file_lim | awk {'print $2'})
[[ -d /etc/bot/revenda/$_rev_usern ]] && {
l_old=$(grep -w 'LIMITE_REVENDA' /etc/bot/revenda/$_rev_usern/$_rev_usern | awk {'print $2'})
sed -i "/LIMITE_REVENDA/ s/$l_old/$new_l/g" /etc/bot/revenda/$_rev_usern/$_rev_usern
sed -i "/$_rev_usern/ s/LIMITE: $l_old/LIMITE: $new_l/" $ativos
[[ "${message_from_id[$id]}" != "$id_admin" ]] && {
sed -i "/\b$_rev_usern\b/ s/$l_old/$new_l/g" /etc/bot/revenda/${message_from_username}/${message_from_username}
}
echo $_rev_usern
} || {
l_old=$(grep -w 'LIMITE_REVENDA' /etc/bot/suspensos/$_rev_usern/$_rev_usern | awk {'print $2'})
sed -i "/LIMITE_REVENDA/ s/$l_old/$new_l/g" /etc/bot/suspensos/$_rev_usern/$_rev_usern
sed -i "/\b$_rev_usern\b/ s/LIMITE: $l_old/LIMITE: $new_l/" $ativos
sed -i "/\b$_rev_usern\b/ s/LIMITE: $l_old/LIMITE: $new_l/" $suspensos
[[ "${message_from_id[$id]}" != "$id_admin" ]] && {
sed -i "/\b$_rev_usern\b/ s/$l_old/$new_l/" /etc/bot/revenda/${message_from_username}/${message_from_username}
}
echo $_rev_usern
}
}
fun_dat_rev() {
[[ "$(grep -wc ${callback_query_from_username} $suspensos)" != '0' ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "⚠️ VC ESTA SUSPENSO! CONTATE O ADMINISTRADOR"
return 0
}
[[ "${callback_query_from_id[$id]}" == "$id_admin" ]] || [[ "$(grep -wc ${callback_query_from_username} $ativos)" != '0' ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "📆 ALTERAR DATA REVENDA 📆\n\nInforme o user dele [Ex: @crazy_vpn]:" \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚫 ACESSO NEGADO 🚫"
return 0
}
}
dat_rev() {
_datfile=$1
[[ -z "$_datfile" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "Erro")"
_erro='1'
return 0
}
_revd=$(grep -w 'Revendedor' $_datfile | cut -d'@' -f2)
new_d=$(grep -w 'Data' $_datfile | awk '{print $NF}')
[[ -d "/etc/bot/suspensos/$_revd" ]] && {
[[ "$(ls /etc/bot/suspensos/$_revd/usuarios | wc -l)" != '0' ]] && {
for _user in $(ls /etc/bot/suspensos/$_revd/usuarios); do
usermod -U $_user
done
}
d_old=$(grep -w 'DIAS_REVENDA' /etc/bot/suspensos/$_revd/$_revd | awk {'print $2'})
sed -i "/\b$_revd\b/ s/DIAS: $d_old/DIAS: $new_d/" $ativos
sed -i "/DIAS_REVENDA/ s/$d_old/$new_d/" /etc/bot/suspensos/$_revd/$_revd
[[ "$(grep -wc 'SUBREVENDA' /etc/bot/suspensos/$_revd/$_revd)" != '0' ]] && {
while read _listsub; do
_usub="$(echo $_listsub | awk '{print $2}')"
[[ "$(ls /etc/bot/suspensos/$_usub/usuarios | wc -l)" != '0' ]] && {
for _user in $(ls /etc/bot/suspensos/$_usub/usuarios); do
usermod -U $_user
done
}
mv /etc/bot/suspensos/$_usub /etc/bot/revenda/$_usub
sed -i "/\b$_usub\b/d" $suspensos
done <<<"$(grep -w 'SUBREVENDA' /etc/bot/suspensos/$_revd/$_revd)"
}
mv /etc/bot/suspensos/$_revd /etc/bot/revenda/$_revd
sed -i "/\b$_revd\b/d" $suspensos
sed -i "s;$new_d;$(date "+4/Success/%Y" -d "+$new_d days");" $_datfile
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "⚠️ $_revd ESTAVA SUSPENSO E FOI REATIVADO !")" \
--parse_mode html
} || {
d_old=$(grep -w 'DIAS_REVENDA' /etc/bot/revenda/$_revd/$_revd | awk {'print $2'})
sed -i "/\b$_revd\b/ s/DIAS: $d_old/DIAS: $new_d/" $ativos
sed -i "/DIAS_REVENDA/ s/$d_old/$new_d/" /etc/bot/revenda/$_revd/$_revd
sed -i "s;$new_d;$(date "+1/Success/%Y" -d "+$new_d days");" $_datfile
}
}
fun_list_rev() {
[[ "$(grep -wc ${callback_query_from_username} $suspensos)" != '0' ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "⚠️ VC ESTA SUSPENSO! CONTATE O ADMINISTRADOR"
return 0
}
if [[ "${callback_query_from_id[$id]}" == "$id_admin" ]]; then
local msg1
msg1="=×=×=×=×=×=×=×=×=×=×=×=×=×=\n📃 LISTA DE REVENDEDORES !\n=×=×=×=×=×=×=×=×=×=×=×=×=×=\n"
[[ "$(grep -wc 'revenda' $ativos)" != '0' ]] && {
while read _atvs; do
_uativ="$(echo $_atvs | awk '{print $2}')"
[[ "$(grep -wc "$_uativ" $suspensos)" == '0' ]] && _stsrev='ATIVO' || _stsrev='SUSPENSO'
msg1+="• @$_uativ - $_stsrev\n"
done <<<"$(grep -w 'revenda' /etc/bot/lista_ativos)"
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "$(echo -e "$msg1")" \
--parse_mode html
return 0
} || {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "VC NAO TEM REVENDEDORES"
return 0
}
elif [[ "$(grep -w ${callback_query_from_username} $ativos | awk '{print $NF}')" == 'revenda' ]]; then
_patch="/etc/bot/revenda"
local msg1
msg1="=×=×=×=×=×=×=×=×=×=×=×=×=\n📃 LISTA DE SUB REVENDEDORES !\n=×=×=×=×=×=×=×=×=×=×=×=×=\n"
[[ "$(grep -wc "SUBREVENDA" $_patch/${callback_query_from_username}/${callback_query_from_username})" != '0' ]] && {
while read _listsub; do
_usub="$(echo $_listsub | awk '{print $2}')"
[[ "$(grep -wc "$_usub" $suspensos)" == '0' ]] && _usts='ATIVO' || _usts='SUSPENSO'
msg1+="• @$_usub - $_usts\n"
done <<<"$(grep -w 'SUBREVENDA' $_patch/${callback_query_from_username}/${callback_query_from_username})"
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "$(echo -e "$msg1")" \
--parse_mode html
return 0
} || {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "VC NAO TEM SUB REVENDEDORES"
return 0
}
else
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚫 ACESSO NEGADO 🚫"
return 0
fi
}
fun_susp_rev() {
[[ "$(grep -wc ${callback_query_from_username} $suspensos)" != '0' ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "⚠️ VC ESTA SUSPENSO! CONTATE O ADMINISTRADOR"
return 0
}
[[ "${callback_query_from_id[$id]}" == "$id_admin" ]] || [[ "$(grep -wc ${callback_query_from_username} $ativos)" != '0' ]] && {
ShellBot.sendMessage --chat_id ${callback_query_message_chat_id[$id]} \
--text "🔒 SUSPENDER REVENDEDOR 🔒\n\nInforme o user dele [Ex: @crazy_vpn]:" \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "🚫 ACESSO NEGADO 🚫"
return 0
}
}
susp_rev() {
_revs=$1
[[ -z "$_revs" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "Erro")"
return 0
}
[[ -d "/etc/bot/suspensos/$_revs" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "O USUARIO JA ESTA SUSPENSO !")" \
--parse_mode html
return 0
}
[[ ! -d "/etc/bot/revenda/$_revs" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "O USUARIO NAO EXISTE !")" \
--parse_mode html
return 0
}
[[ "${message_from_id[$id]}" == "$id_admin" ]] && {
[[ "$(grep -wc 'SUBREVENDA' /etc/bot/revenda/$_revs/$_revs)" != '0' ]] && {
while read _listsub3; do
_usub3="$(echo $_listsub3 | awk '{print $2}')"
_dir_users="/etc/bot/revenda/$_usub3/usuarios"
[[ "$(ls $_dir_users | wc -l)" != '0' ]] && {
for _user in $(ls $_dir_users); do
usermod -L $_user
pkill -f $_user
done
}
mv /etc/bot/revenda/$_usub3 /etc/bot/suspensos/$_usub3
grep -w "$_usub3" $ativos >>$suspensos
done <<<"$(grep -w 'SUBREVENDA' /etc/bot/revenda/$_revs/$_revs)"
}
[[ "$(ls /etc/bot/revenda/$_revs/usuarios | wc -l)" != '0' ]] && {
for _user_ in $(ls /etc/bot/revenda/$_revs/usuarios); do
usermod -L $_user_
pkill -f $_user_
done
}
mv /etc/bot/revenda/$_revs /etc/bot/suspensos/$_revs
grep -w "$_revs" $ativos >>$suspensos
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "SUSPENDIDO COM SUCESSO")" \
--parse_mode html
return 0
} || {
[[ "$(grep -wc "$_revs" /etc/bot/revenda/${message_from_username}/${message_from_username})" != '0' ]] && {
[[ "$(ls /etc/bot/revenda/$_revs/usuarios | wc -l)" != '0' ]] && {
for _user_ in $(ls /etc/bot/revenda/$_revs/usuarios); do
usermod -L $_user_
pkill -f $_user_
done
}
mv /etc/bot/revenda/$_revs /etc/bot/suspensos/$_revs
grep -w "$_revs" $ativos >>$suspensos
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "SUSPENDIDO COM SUCESSO")" \
--parse_mode html
return 0
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "O SUB REVENDEDOR NAO EXISTE")" \
--parse_mode html
return 0
}
}
}
infouserbot() {
[[ $(grep -wc ${message_from_username} $ativos) != '0' ]] && {
_cont_limite=$(grep -w ${message_from_username} $ativos | awk '{print $4}')
fun_verif_limite_rev ${message_from_username}
_cont_disp=$(echo $_cont_limite - $_result | bc)
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "<b>NOME: </> ${message_from_first_name[$(ShellBot.ListUpdates)]}\n<b>USER:</>" "@${message_from_username[$(ShellBot.ListUpdates)]:-null}")\n<b>ID:</> ${message_from_id[$(ShellBot.ListUpdates)]}\nACESSO: REVENDA\n<b>LIMITE TOTAL:</b> $_cont_limite\n<b>LIMITE RESTANTE:</b> $_cont_disp" \
--parse_mode html
return 0
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "<b>NOME: </> ${message_from_first_name[$(ShellBot.ListUpdates)]}\n<b>USER:</>" "@${message_from_username[$(ShellBot.ListUpdates)]:-null}")\n<b>ID:</> ${message_from_id[$(ShellBot.ListUpdates)]} " \
--parse_mode html
return 0
}
}
fun_menurevenda() {
[[ "$(grep -wc ${callback_query_from_username} $suspensos)" != '0' ]] && {
ShellBot.answerCallbackQuery --callback_query_id ${callback_query_id[$id]} \
--text "⚠️ VC ESTA SUSPENSO! CONTATE O ADMINISTRADOR"
return 0
}
[[ "${callback_query_from_id[$id]}" == "$id_admin" ]] || [[ "$(grep -wc ${callback_query_from_username} $ativos)" != '0' ]] && {
ShellBot.editMessageText --chat_id ${callback_query_message_chat_id[$id]} \
--message_id ${callback_query_message_message_id[$id]} \
--text "SELECIONE UMA OPÇÃO ABAIXO:" \
--reply_markup "$(ShellBot.InlineKeyboardMarkup --button 'menu4')"
return 0
}
}
# LISTA MENU ADMIN
unset menu1
menu1=''
ShellBot.InlineKeyboardButton --button 'menu1' --line 1 --text 'INFO VPS' --callback_data '_infovps'
ShellBot.InlineKeyboardButton --button 'menu1' --line 2 --text 'OTIMIZAR' --callback_data '_otimizar'
ShellBot.InlineKeyboardButton --button 'menu1' --line 3 --text 'ARQUIVOS' --callback_data '_arqdown'
ShellBot.InlineKeyboardButton --button 'menu1' --line 4 --text 'SPEEDTESTE' --callback_data '_speedteste'
ShellBot.InlineKeyboardButton --button 'menu1' --line 5 --text 'BACKUP SQL' --callback_data '_backupusers'
ShellBot.InlineKeyboardButton --button 'menu1' --line 6 --text "AUTO BACKUP" --callback_data '_autobkp'
ShellBot.InlineKeyboardButton --button 'menu1' --line 7 --text 'AJUDA' --callback_data '_ajuda'
ShellBot.regHandleFunction --function fun_down --callback_data _arqdown
ShellBot.regHandleFunction --function otimizer --callback_data _otimizar
ShellBot.regHandleFunction --function speed_test --callback_data _speedteste
ShellBot.regHandleFunction --function infovps --callback_data _infovps
ShellBot.regHandleFunction --function backup_users --callback_data _backupusers
ShellBot.regHandleFunction --function fun_backauto --callback_data _autobkp
ShellBot.regHandleFunction --function fun_ajuda --callback_data _ajuda
unset keyboard1
keyboard1="$(ShellBot.InlineKeyboardMarkup -b 'menu1')"
while :; do
[[ -e "/root/backupsql/gestorssh.sql.bz2" ]] && {
backup_auto
}
#Obtem as atualizações
ShellBot.getUpdates --limit 100 --offset $(ShellBot.OffsetNext) --timeout 35
#Lista o índice das atualizações
for id in $(ShellBot.ListUpdates); do
#Inicio thread
(
ShellBot.watchHandle --callback_data ${callback_query_data[$id]}
# Requisições somente no privado.
[[ ${message_chat_type[$id]} != 'private' ]] && continue
[[ ${message_text[$id]} ]] || restaure_backup
CAD_ARQ=/tmp/cad.${message_from_id[$id]}
if [[ ${message_entities_type[$id]} == bot_command ]]; then
#Verifica se a mensagem enviada pelo usuário é um comando válido.
case ${message_text[$id]} in
*)
:
#comandos
comando=(${message_text[$id]})
[[ "${comando[0]}" = "/start" ]] && msg_bem_vindo
[[ "${comando[0]}" = "/menu" ]] && fun_menu
[[ "${comando[0]}" = "/info" ]] && infouserbot
[[ "${comando[0]}" = "/hrlp" || "${comando[0]}" = "/ajuda" ]] && fun_ajuda
[[ "${comando[0]}" = "/bot" || "${comando[0]}" = "/sobre" ]] && sobremim
;;
esac
fi
if [[ ${message_reply_to_message_message_id[$id]} ]]; then
# Analisa a interface de resposta.
case ${message_reply_to_message_text[$id]} in
'👤 CRIAR USUARIO 👤\n\nNome do usuario:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ "$(awk -F : '$3 >= 1000 { print $1 }' /etc/passwd | grep -w ${message_text[$id]} | wc -l)" != '0' ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro! USUARIO INVALIDO ❌\n\n⚠️ Informe Outro Nome..")" \
--parse_mode html
>$CAD_ARQ
break
}
[ "${message_text[$id]}" == 'root' ] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ ERRO! USUARIO INVALIDO ❌\n\n⚠️ Informe Outro Nome..")" \
--parse_mode html
>$CAD_ARQ
break
}
sizemin=$(echo -e ${#message_text[$id]})
[[ "$sizemin" -lt '4' ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro !\n\nUse no mínimo 4 caracteres\n[EX: test]")" \
--parse_mode html
>$CAD_ARQ
break
}
sizemax=$(echo -e ${#message_text[$id]})
[[ "$sizemax" -gt '10' ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro !\n\nUse no maximo 8 caracteres\n[EX: crazy]")" \
--parse_mode html
>$CAD_ARQ
break
}
echo "Nome: ${message_text[$id]}" >$CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Senha:' \
--reply_markup "$(ShellBot.ForceReply)" # Força a resposta.
;;
'Senha:')
sizepass=$(echo -e ${#message_text[$id]})
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ "$sizepass" -lt '4' ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro !\n\nUse no mínimo 4 caracteres\n[EX: 1234]")" \
--parse_mode html
>$CAD_ARQ
break
}
echo "Senha: ${message_text[$id]}" >>$CAD_ARQ
# Próximo campo.
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Limite:' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'Limite:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\nUltilize apenas numeros [EX: 1]")" \
--parse_mode html
>$CAD_ARQ
break
}
[[ "${message_from_id[$id]}" != "$id_admin" ]] && {
_limTotal=$(grep -w "${message_from_username}" $ativos | awk '{print $4}')
fun_verif_limite_rev ${message_from_username}
_limsomarev2=$(echo "$_result + ${message_text[$id]}" | bc)
[[ "$_limsomarev2" -gt "$_limTotal" ]] && {
_restant1=$(($_limTotal - $_result))
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Vc nao tem limite suficiente\n\nLimite disponivel: $_restant1 ")" \
--parse_mode html
>$CAD_ARQ
break
}
}
echo "Limite: ${message_text[$id]}" >>$CAD_ARQ
# Próximo campo.
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Validade em dias: ' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'Validade em dias:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\nUltilize apenas numeros [EX: 30]")" \
--parse_mode html
>$CAD_ARQ
break
}
info_data=$(date '+0/Success/�����%y' -d " +${message_text[$id]} days")
echo "Validade: $info_data" >>$CAD_ARQ
criar_user $CAD_ARQ
[[ "(grep -w ${message_text[$id]} /etc/passwd)" = '0' ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e ❌ Erro ao criar usuario !)" \
--parse_mode html
>$CAD_ARQ
break
}
[[ "$(ls /root/backupvps | wc -l)" != '0' ]] && {
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text '📥 ARQUIVOS DISPONIVEIS 📥\n\nDeseja baixar? Sim ou Nao?:' \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "<b>✅ CRIADO COM SUCESSO ✅</b>\n\nIP: $(cat /etc/IP)\nUSUARIO: <code>$(awk -F " " '/Nome/ {print $2}' $CAD_ARQ)</code>\nSENHA: <code>$(awk -F " " '/Senha/ {print $2}' $CAD_ARQ)</code>\nLIMITE: $(awk -F " " '/Limite/ {print $2}' $CAD_ARQ)\nEXPIRA EM: $(awk -F " " '/Validade/ {print $2}' $CAD_ARQ)" \
--parse_mode html
break
}
;;
'📥 ARQUIVOS DISPONIVEIS 📥\n\nDeseja baixar? Sim ou Nao?:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([A-Za-z]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Opcao Invalida ❌\n\n⚠️ Ultilize apenas letras [EX: sim ou nao]")" \
--parse_mode html
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "<b>✅ CRIADO COM SUCESSO ✅</b>\n\nIP: $(cat /etc/IP)\nUSUARIO: <code>$(awk -F " " '/Nome/ {print $2}' $CAD_ARQ)</code>\nSENHA: <code>$(awk -F " " '/Senha/ {print $2}' $CAD_ARQ)</code>\nLIMITE: $(awk -F " " '/Limite/ {print $2}' $CAD_ARQ)\nEXPIRA EM: $(awk -F " " '/Validade/ {print $2}' $CAD_ARQ)" \
--parse_mode html
break
}
[[ "${message_text[$id]}" = @(Sim|sim|SIM) ]] && {
msg_cli="≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\n"
msg_cli+="<b>ARQUIVOS PRE-CONFIGURADOS </b>❗\n"
msg_cli+="≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\n\n"
for _file in $(ls /root/backupvps); do
i=$(($i + 1))
msg_cli+="<b>[$i]</b> - $_file\n"
done
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "$msg_cli")" \
--parse_mode html
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Informe o Numero do Arquivo:' \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "<b>✅ CRIADO COM SUCESSO ✅</b>\n\nIP: $(cat /etc/IP)\nUSUARIO: <code>$(awk -F " " '/Nome/ {print $2}' $CAD_ARQ)</code>\nSENHA: <code>$(awk -F " " '/Senha/ {print $2}' $CAD_ARQ)</code>\nLIMITE: $(awk -F " " '/Limite/ {print $2}' $CAD_ARQ)\nEXPIRA EM: $(awk -F " " '/Validade/ {print $2}' $CAD_ARQ)" \
--parse_mode html
}
;;
'Informe o Numero do Arquivo:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Opcao Invalida ❌ \n\n⚠️ Ultilize apenas numeros [EX: 1]")" \
--parse_mode html
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "<b>✅ CRIADO COM SUCESSO ✅</b>\n\nIP: $(cat /etc/IP)\nUSUARIO: <code>$(awk -F " " '/Nome/ {print $2}' $CAD_ARQ)</code>\nSENHA: <code>$(awk -F " " '/Senha/ {print $2}' $CAD_ARQ)</code>\nLIMITE: $(awk -F " " '/Limite/ {print $2}' $CAD_ARQ)\nEXPIRA EM: $(awk -F " " '/Validade/ {print $2}' $CAD_ARQ)" \
--parse_mode html
>$CAD_ARQ
break
}
fun_download ${message_text[$id]} $CAD_ARQ
# Limpa o arquivo temporário.
>$CAD_ARQ
break
;;
'🗑 REMOVER USUARIO 🗑\n\nNome do usuario:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
fun_del_user ${message_text[$id]}
[[ "$_erro" == '1' ]] && break
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "✅ *Removido com sucesso.* 🚮" \
--parse_mode markdown
;;
'🔐 Alterar Senha 🔐\n\nNome do usuario:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
fun_verif_user ${message_text[$id]}
echo "$_erro"
[[ "$_erro" == '1' ]] && break
echo "${message_text[$id]}" >/tmp/name-s
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Nova senha:' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'Nova senha:')
sizepass=$(echo -e ${#message_text[$id]})
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ "$sizepass" -lt '4' ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro !\n\n⚠️ Use mínimo 4 caracteres [EX: 1234]")" \
--parse_mode html
break
}
alterar_senha_user $(cat /tmp/name-s) ${message_text[$id]}
[[ "$_erro" == '1' ]] && break
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "$(echo -e "=×=×=×=×=×=×=×=×=×=×=×\n<b>✅ SENHA ALTERADA !</b> !\n=×=×=×=×=×=×=×=×=×=×=×\n\n<b>Usuario:</b> $(cat /tmp/name-s)\n<b>Nova senha:</b> ${message_text[$id]}")" \
--parse_mode html
rm /tmp/name-s >/dev/null 2>&1
;;
'👥 Alterar Limite 👥\n\nNome do usuario:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
echo $_erro segundo
fun_verif_user ${message_text[$id]}
echo "$_erro"
[[ "$_erro" == '1' ]] && break
echo "${message_text[$id]}" >/tmp/name-l
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Novo limite:' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'Novo limite:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\n⚠️ Ultilize apenas numeros [EX: 1]")" \
--parse_mode html
break
}
alterar_limite_user $(cat /tmp/name-l) ${message_text[$id]}
[[ "$_erro" == '1' ]] && break
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "$(echo -e "=×=×=×=×=×=×=×=×=×=×=×\n<b>✅ LIMITE ALTERADO !</b> !\n=×=×=×=×=×=×=×=×=×=×=×\n\n<b>Usuario:</b> $(cat /tmp/name-l)\n<b>Novo Limite:</b> ${message_text[$id]}")" \
--parse_mode html
rm /tmp/name-l >/dev/null 2>&1
;;
'⏳ Alterar Data ⏳\n\nNome do usuario:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
fun_verif_user ${message_text[$id]}
[[ "$_erro" == '1' ]] && break
echo "${message_text[$id]}" >/tmp/name-d
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'informe os dias ou data:' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'informe os dias ou data:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9/]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro! Siga o exemplo\n\nDias formato [EX: 30]\nData formato [EX: 30/12/2019]")" \
--parse_mode html
break
}
alterar_data_user $(cat /tmp/name-d) ${message_text[$id]}
[[ "$_erro" == '1' ]] && break
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "$(echo -e "=×=×=×=×=×=×=×=×=×=×=×\n<b>✅ DATA ALTERADA !</b> !\n=×=×=×=×=×=×=×=×=×=×=×\n\n<b>Usuario:</b> $(cat /tmp/name-d)\n<b>Nova Data:</b> $udata")" \
--parse_mode html
rm /tmp/name-d >/dev/null 2>&1
;;
'[1] - ADICIONAR ARQUIVO\n[2] - EXCLUIR ARQUIVO\n\nInforme a opção [1-2]:')
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\n⚠️ Ultilize apenas numeros [EX: 1 ou 2]")" \
--parse_mode html
break
}
if [[ "${message_text[$id]}" = '1' ]]; then
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "📤 HOSPEDAR ARQUIVOS 📤\n\nEnvie-me o arquivo:" \
--reply_markup "$(ShellBot.ForceReply)"
elif [[ "${message_text[$id]}" = '2' ]]; then
[[ $(ls /root/backupvps | wc -l) != '0' ]] && {
msg_cli1="≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\n"
msg_cli1+="🚀<b> ARQUIVOS HOSPEDADOS </b>\n"
msg_cli1+="≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\n\n"
for _file in $(ls /root/backupvps); do
i=$(($i + 1))
msg_cli1+="<b>[$i]</b> - $_file\n"
done
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "$msg_cli1")" \
--parse_mode html
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "🗑Excluir Arquivo\nInforme o Numero do Arquivo:" \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "Nao existe arquivos disponiveis")" \
--parse_mode html
break
}
else
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Opcao Invalida")" \
--parse_mode html
break
fi
;;
'🗑Excluir Arquivo\nInforme o Numero do Arquivo:')
[[ "${message_from_id[$id]}" != "$id_admin" ]] && break
Opc1=${message_text[$id]}
echo $Opc1
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ao Excluir arquivo ! \n\n⚠️ Ultilize apenas numeros [EX: 1]")" \
--parse_mode html
break
} || {
echo "opção $Opc1"
_DirArq=$(ls /root/backupvps)
i=0
unset _Pass
while read _Arq; do
i=$(expr $i + 1)
_oP=$i
[[ $i == [1-9] ]] && i=0$i && oP+=" 0$i"
echo -e "[$i] - $_Arq"
_Pass+="\n${_oP}:${_Arq}"
done <<<"${_DirArq}"
_file=$(echo -e "${_Pass}" | grep -E "\b$Opc1\b" | cut -d: -f2)
[[ -e /root/backupvps/$_file ]] && {
rm /root/backupvps/$_file
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "✅ *Excluido com sucesso* ✅" \
--parse_mode markdown
break
} || {
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "$(echo -e "❌ Opcao invalida")"
break
}
}
;;
'📤 HOSPEDAR ARQUIVOS 📤\n\nEnvie-me o arquivo:')
if [[ "${update_id[$id]}" ]]; then
# Monitora o envio de arquivos
[[ ${message_document_file_id[$id]} ]] && file_id=${message_document_file_id[$id]} && download_file=1
# Verifica se o download está ativado.
[[ $download_file -eq 1 ]] && {
file_id=($file_id)
ShellBot.getFile --file_id "${file_id[0]}"
ShellBot.downloadFile --file_path ${return[file_path]} --dir "/tmp/file" && {
msg='*✅ Arquivo hospedado com sucesso.*\n\n'
msg+="*📤 Informações*\n\n"
msg+="*Nome*: ${message_document_file_name}\n"
msg+="*Salvo em*: /root/backupvps"
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "$msg")" \
--parse_mode markdown
mv /tmp/file/$(ls -1rt /tmp/file | tail -n1) /root/backupvps/${message_document_file_name}
break
}
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ao receber arquivo ❌")" \
--parse_mode markdown
break
}
fi
;;
'Deseja restaurar ? [sim | nao]')
Resp=${message_text[$id]}
[[ ${message_from_id[$id]} != ${id_admin} ]] && break
[[ $Resp != ?(+|-)+([a-z]) ]] && {
ShellBot.sendMessage --chat_id ${id_admin} \
--text "$(echo -e "❌ Erro ! \n\n⚠️ Ultilize apenas sim ou nao")" \
--parse_mode html
break
}
[[ "$Resp" = @(Sim|sim|SIM||s|S|) ]] && {
passdb=$(cat /etc/kernel/recweb/sweb)
filebkp=$(ls /tmp | grep '.bz2')
[[ -e /tmp/$filebkp ]] && {
mv /tmp/$filebkp /tmp/gestorssh.sql.bz2
mysql -h localhost -u root -p$passdb -e "drop database gestorssh"
mysql -h localhost -u root -p$passdb -e 'CREATE DATABASE gestorssh'
bunzip2 /tmp/gestorssh.sql.bz2
mysql -h localhost -u root -p$passdb --default_character_set utf8 gestorssh < /tmp/gestorssh.sql
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
/etc/init.d/mysql restart > /dev/null 2>&1
/etc/init.d/apache2 restart > /dev/null 2>&1
rm /tmp/gestorssh.sql
rm /tmp/$filebkp
ShellBot.sendMessage --chat_id ${id_admin} \
--text "$(echo -e "✅ Backup restaurado\ncom sucesso!")" \
--parse_mode html
break
}
}
break
;;
# FUNCOES DE GESTAO REVENDA
#
# Adicionar, remover, limite, data, suspencao, relatorio
#
'👥 ADICIONAR REVENDEDOR 👥\n\nInforme o nome:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
echo "Nome: ${message_text[$id]}" >$CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Informe o user dele [Ex: @crazy_vpn]:' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'Informe o user dele [Ex: @crazy_vpn]:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
_VAR1=$(echo -e ${message_text[$id]} | awk -F '@' {'print $2'})
[[ -z $_VAR1 ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro \n\n⚠️ Informe o user [EX: @crazy_vpn]")" \
--parse_mode html
break
}
[[ -d /etc/bot/revenda/$_VAR1 ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ O Revendedor ${message_text[$id]} ja existe")" \
--parse_mode html
break
}
echo "User: ${message_text[$id]}" >>$CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Quantas SSH ele pode criar:' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'Quantas SSH ele pode criar:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\n⚠️ Ultilize apenas numeros [EX: 10]")" \
--parse_mode html
break
}
[[ "${message_from_id[$id]}" != "$id_admin" ]] && {
_limTotal=$(grep -w "${message_from_username}" $ativos | awk '{print $4}')
fun_verif_limite_rev ${message_from_username}
_limsomarev=$(echo "$_result + ${message_text[$id]}" | bc)
[[ "$_limsomarev" -gt "$_limTotal" ]] && {
_restant1=$(($_limTotal - $_result))
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Vc nao tem limite suficiente\n\nLimite disponivel: $_restant1 ")" \
--parse_mode html
break
}
}
echo "Limite: ${message_text[$id]}" >>$CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Quantos dias de acesso:' \
--reply_markup "$(ShellBot.ForceReply)"
;;
'Quantos dias de acesso:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
echo "Validade: ${message_text[$id]}" >>$CAD_ARQ
_clientrev=$(cat $CAD_ARQ)
criar_rev $CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "✅ Criado com sucesso. ✅\n\n$(<$CAD_ARQ)\n\nBOT: @${message_reply_to_message_from_username}" \
--parse_mode html
;;
# REMOVE REVENDEDOR
'🗑 REMOVER REVENDEDOR 🗑\n\nInforme o user dele [Ex: @crazy_vpn]:')
echo -e "${message_text[$id]}" >$CAD_ARQ
_Var=$(sed -n '1 p' $CAD_ARQ | awk -F '@' {'print $2'})
[[ -z $_Var ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ User invalido")" \
--parse_mode html
break
}
del_rev $_Var
break
;;
# ALTERAR LIMITE
'♾ ALTERAR LIMITE REVENDA ♾\n\nInforme o user dele [Ex: @crazy_vpn]:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
echo -e "Revendedor: ${message_text[$id]}" >$CAD_ARQ
_Var1=$(sed -n '1 p' $CAD_ARQ | awk -F '@' {'print $2'})
[[ -z $_Var1 ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Nome invalido !")" \
--parse_mode html
break
}
[[ "${message_from_id[$id]}" == "$id_admin" ]] && {
[[ $(grep -wc $_Var1 $ativos) != '0' ]] && {
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Informe o Limite SSH:' \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Revendedor ${message_text[$id]} nao existe")" \
--parse_mode html
break
}
}
[[ $(grep -w ${message_from_username} $ativos | awk '{print $NF}') == 'revenda' ]] && {
[[ "$(grep -wc "$_Var1" /etc/bot/revenda/${message_from_username}/${message_from_username})" != '0' ]] && {
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Informe o Limite SSH:' \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ O Sub-revendedor nao existe")" \
--parse_mode html
break
}
}
;;
'Informe o Limite SSH:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\nUltilize apenas numeros [EX: 1]")" \
--parse_mode html
break
}
[[ "${message_from_id[$id]}" != "$id_admin" ]] && {
_limTotal=$(grep -w "${message_from_username}" $ativos | awk '{print $4}')
fun_verif_limite_rev ${message_from_username}
_limsomarev=$(echo "$_result + ${message_text[$id]}" | bc)
[[ $(grep -wc 'SUBREVENDA' /etc/bot/revenda/${message_from_username}/${message_from_username}) != '0' ]] && {
_limsomarev2=$(echo "$(grep -w 'SUBREVENDA' /etc/bot/revenda/${message_from_username}/${message_from_username} | awk {'print $4'} | paste -s -d + | bc)" + "${message_text[$id]}" | bc)
} || {
_limsomarev2='0'
}
[[ "$_limsomarev2" -ge "$_limTotal" ]] && {
echo $_limsomarev2
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Vc nao tem limite suficiente")" \
--parse_mode html
break
}
[[ "$_limsomarev" -gt "$_limTotal" ]] && {
[[ "$_limTotal" == "$(($_limTotal - $_result))" ]] && _restant1='0' || _restant1=$(($_limTotal - $_result))
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Vc nao tem limite suficiente\n\nLimite restante: $_restant1 ")" \
--parse_mode html
break
}
}
echo -e "Limite: ${message_text[$id]}" >>$CAD_ARQ
lim_rev $CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "$(echo -e "=×=×=×=×=×=×=×=×=×=×=×\n<b>✅ LIMITE REVENDA ALTERADO !</b> !\n=×=×=×=×=×=×=×=×=×=×=×\n\n$(<$CAD_ARQ)")" \
--parse_mode html
# ALTERAR DATA
;;
'📆 ALTERAR DATA REVENDA 📆\n\nInforme o user dele [Ex: @crazy_vpn]:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
_VAR1=$(echo -e ${message_text[$id]} | awk -F '@' {'print $2'})
[[ -z $_VAR1 ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "Revendedor ${message_text[$id]} nao existe")" \
--parse_mode html
break
}
[[ "${message_from_id[$id]}" == "$id_admin" ]] && {
[[ $(grep -wc $_VAR1 $ativos) != '0' ]] && {
echo -e "Revendedor: ${message_text[$id]}" >$CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Dias de acesso [Ex: 30]:' \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ O Revendedor ${message_text[$id]} nao existe")" \
--parse_mode html
break
}
} || {
[[ $(grep -w ${message_from_username} $ativos | awk '{print $NF}') == 'revenda' ]] && {
[[ "$(grep -wc "$_VAR1" /etc/bot/revenda/${message_from_username}/${message_from_username})" != '0' ]] && {
echo -e "Revendedor: ${message_text[$id]}" >$CAD_ARQ
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text 'Dias de acesso [Ex: 30]:' \
--reply_markup "$(ShellBot.ForceReply)"
} || {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ O SubRevendedor ${message_text[$id]} nao existe")" \
--parse_mode html
break
}
}
}
;;
'Dias de acesso [Ex: 30]:')
verifica_acesso
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\nUltilize apenas numeros [EX: 30]")" \
--parse_mode html
break
}
echo -e "Data: ${message_text[$id]}" >>$CAD_ARQ
dat_rev $CAD_ARQ
[[ "$_erro" == '1' ]] && break
ShellBot.sendMessage --chat_id ${message_from_id[$id]} \
--text "$(echo -e "=×=×=×=×=×=×=×=×=×=×=×\n<b>✅ DATA REVENDA ALTERADA !</b> !\n=×=×=×=×=×=×=×=×=×=×=×\n\n$(<$CAD_ARQ)")" \
--parse_mode html
;;
# SUSPENDER REVENDEDOR
'🔒 SUSPENDER REVENDEDOR 🔒\n\nInforme o user dele [Ex: @crazy_vpn]:')
_VAR1=$(echo -e ${message_text[$id]} | awk -F '@' {'print $2'})
[[ -z $_VAR1 ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Revendedor ${message_text[$id]} nao existe")" \
--parse_mode html
break
}
susp_rev $_VAR1
break
;;
'👤 CRIAR TESTE 👤\n\nQuantas horas deve durar EX: 1:')
verifica_acesso
echo $_erro
[[ "$_erro" == '1' ]] && break
[[ ${message_text[$id]} != ?(+|-)+([0-9]) ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Erro ! \n\nUltilize apenas numeros [EX: 1]")" \
--parse_mode html
>$CAD_ARQ
break
}
[[ "${message_from_id[$id]}" != "$id_admin" ]] && {
_limTotal=$(grep -w "${message_from_username}" $ativos | awk '{print $4}')
fun_verif_limite_rev ${message_from_username}
_limsomarev2=$(echo "$_result + 1" | bc)
[[ "$_limsomarev2" -gt "$_limTotal" ]] && {
ShellBot.sendMessage --chat_id ${message_chat_id[$id]} \
--text "$(echo -e "❌ Vc nao tem limite suficiente")" \
--parse_mode html
>$CAD_ARQ
break
}
}
fun_teste ${message_text[$id]}
;;
esac
fi
) &
done
done
}
verificar_chave
} || clear && echo -e "\E[41;1;37m         VOCÊ NÃO TEM PERMISSÃO        \E[0m" && sleep 4 && exit 0