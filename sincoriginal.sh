#!/bin/bash
clear
rm sincoriginal* > /dev/null 2>&1
echo "America/Sao_Paulo" > /etc/timezone > /dev/null 2>&1
ln -fs /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime > /dev/null 2>&1
dpkg-reconfigure --frontend noninteractive tzdata > /dev/null 2>&1
echo ""
echo -e "\033[1;36mINSTALANDO O SINCRONIZADOR GESTOR-SSH\033[0m"
echo ""
echo -e "\033[1;33mPOR FAVOR AGUARDE...\033[0m"
echo ""
sleep 1
echo -e "\033[1;31mVALIDANDO UMA LICENÇA...\033[0m"
rm *.sh* wget* *.zip sync* > /dev/null 2>&1
apt install unzip -y > /dev/null 2>&1
if [[ $(uname -m) == "aarch64" ]]; then
if [[ -f "/opt/sshplus/sshplus" ]]; then
wget bitbucket.org/nandoslayer/old/downloads/syncarm64.zip > /dev/null 2>&1
rm /opt/sshplus/plugin-sync > /dev/null 2>&1
unzip syncarm64.zip -d /opt/sshplus/ > /dev/null 2>&1
chmod 777 /opt/sshplus/*-sync > /dev/null 2>&1
[[ ! -d /opt/gestorsinc ]] && mkdir /opt/gestorsinc
wget bitbucket.org/nandoslayer/painel/downloads/sincpainel.zip > /dev/null 2>&1
rm /opt/gestorsinc/* > /dev/null 2>&1
unzip sincpainel.zip -d /opt/gestorsinc/ > /dev/null 2>&1
chmod 777 /opt/gestorsinc/*
else
[[ ! -d /opt/gestorsinc ]] && mkdir /opt/gestorsinc
wget bitbucket.org/nandoslayer/painel/downloads/sincpainel.zip > /dev/null 2>&1
rm /opt/gestorsinc/* > /dev/null 2>&1
unzip sincpainel.zip -d /opt/gestorsinc/ > /dev/null 2>&1
chmod 777 /opt/gestorsinc/*
fi
else
if [[ -f "/opt/sshplus/sshplus" ]]; then
wget bitbucket.org/nandoslayer/old/downloads/sync64.zip > /dev/null 2>&1
rm /opt/sshplus/plugin-sync > /dev/null 2>&1
unzip sync64.zip -d /opt/sshplus/ > /dev/null 2>&1
chmod 777 /opt/sshplus/*-sync > /dev/null 2>&1
[[ ! -d /opt/gestorsinc ]] && mkdir /opt/gestorsinc
wget bitbucket.org/nandoslayer/painel/downloads/sincpainel.zip > /dev/null 2>&1
rm /opt/gestorsinc/* > /dev/null 2>&1
unzip sincpainel.zip -d /opt/gestorsinc/ > /dev/null 2>&1
chmod 777 /opt/gestorsinc/*
else
[[ ! -d /opt/gestorsinc ]] && mkdir /opt/gestorsinc
wget bitbucket.org/nandoslayer/painel/downloads/sincpainel.zip > /dev/null 2>&1
rm /opt/gestorsinc/* > /dev/null 2>&1
unzip sincpainel.zip -d /opt/gestorsinc/ > /dev/null 2>&1
chmod 777 /opt/gestorsinc/*
fi
fi
service ssh restart
echo ""
echo -e "\n\033[1;32mCONCLUÍDO!\033[0m"
sleep 2
echo ""
echo -e "\033[1;34mENTRE NO PAINEL WEB E CRIE UMA CONTA SSH PRA VER SE ESTÁ TUDO OK!\033[0m"
sleep 7
cat /dev/null > ~/.bash_history && history -c && clear
rm wget* *.zip sync* > /dev/null 2>&1
clear
exit;
