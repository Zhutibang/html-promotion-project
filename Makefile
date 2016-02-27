main:
	echo "Hi"

syncUpdate:
	-git add -A
	-git commit -m 'Update at $(shell date)'
	-git push origin master

.PHONY: main syncUpdate
