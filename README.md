Pour Ubuntu server=

wget https://mgrosmann.vercel.app/script/setup.sh
chmod +x setup.sh
bash setup.sh

Pour Debian=

wget https://mgrosmann.vercel.app/script/debian.sh
chmod +x debian.sh
bash debian.sh

Pour tout installer=
apt update && apt install -y git
git clone https://github.com/mgrosmann/script.git
