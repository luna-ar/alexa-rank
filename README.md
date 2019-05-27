# Penggunaan git remote
Langkah-langkah :
- install git di terminal :
$apt-get install git
- clone repository ke terminal :
$git clone /u/your-repository
- membuat file baru repository di terminal
$nano files.txt
- membuat graph
$alias graph='git log --all --decorate --oneline --graph'
- auto-detect account github
$git config --global user.email "you@example.com"
$git config --global user.name "Your Name"
- upload file dari repository terminal ke repository github
$git add .
- menambahkan descripsi file
$git commit -m "your descripsi"
- push file ke github
$git push
- check file repository
$git show
