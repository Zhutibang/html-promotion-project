main:
	echo "Hi"

serve:
	python -m SimpltHTTPServer 8000

syncUpdate:
	-git add -A
	-git commit -m 'Update at $(shell date)'
	-git push origin master

.PHONY: main syncUpdate
