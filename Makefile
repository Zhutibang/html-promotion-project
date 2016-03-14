main:
	echo "Hi 🐔"

serve:
	php -S 127.0.0.1:8000 -t ./

syncUpdate:
	-git add -A
	-git commit -m 'Update at $(shell date)'
	-git push origin master
	
check-project-config:
	html5-promotion-checker ./

mirror:
	-git pull origin master
	-git remote add github git@github.com:Zhutibang/html5-promotion-project.git
	-git push github master

.PHONY: main syncUpdate check-project-config mirror 
