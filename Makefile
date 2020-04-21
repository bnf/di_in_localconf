build-t3x-extension:
	git archive -o "$${PWD##*/}_`git describe --tags`.zip" HEAD
	@echo
	@echo "$${PWD##*/}_`git describe --tags`.zip has been created."
