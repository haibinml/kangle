echo '#!/bin/bash
links="http://kangle.cccyun.cn"
files="/root/s-hell"
file2="/root/s-hell/log"
file3="/root/hl-tmp"
rm -rf kanglesh*

if [ ! -d "$files" -a "$file2" -a "$file3" ];
then
mkdir $files;
chmod 755 $files;
mkdir $file2;
chmod 755 $file2;
mkdir $file3;
chmod 755 $file3;
fi

cd $file3
rm -rf $files/config
wget -q $links/config -O $files/config
wget -q $links/main.sh -O main.sh
cp -f main.sh /usr/bin/kanglesh
chmod 755 /usr/bin/kanglesh
sh main.sh'
