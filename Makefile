main:
	echo "Hi"

serve:
	python -m SimpleHTTPServer 8000

syncUpdate:
	-git add -A
	-git commit -m 'Update at $(shell date)'
	-git push origin master
	
check-project-config:
	html5-promotion-checker ./

.PHONY: main syncUpdate
