#!/bin/bash
datasemanadir=`date -d "7 day ago" '+%d-%m-%Y'`
dataontem=`date -d "1 day ago" '+%d-%m-%Y'`
dataontemdir=`date -d "1 day ago" '+%d-%m-%Y'`
datahoje=`date -d "today" '+%d-%m-%Y'`
cd /root/backupvps || exit
function deletoldbck {
if [ -d "$datasemanadir.dir" ]; then
rm -rf $datasemanadir.dir > /dev/null 2>&1
fi
}
function chkdirbck {
if [ -d "$dataontemdir.dir" ]; then
moveoldbck
else
mkdir $dataontemdir.dir > /dev/null 2>&1
chkdirbck
fi
}
function moveoldbck {
ls | grep $dataontem | xargs -d '\n' mv -t $dataontemdir.dir > /dev/null 2>&1
}
chkdirbck
deletoldbck
cd /root || exit
exit 0
