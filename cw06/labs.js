// JS file for lab documents

window.onload = function() {
	var links = document.getElementsByTagName("a");
	for (var i = 0; i < links.length; i++) {
		var a = links[i];
		if (a.className.match(/popup/)) {
			a.onclick = popup;
		}
	}
};

// Opens a link in a new window, in an XHTML-valid way.
// Doesn't do it if user holds Shift or Ctrl.
function popup(event) {
	if (event && (event.shiftKey || event.ctrlKey)) {
		return;
	}

	if (event && event.preventDefault) {
		event.preventDefault();
	}

	window.open(this.href, "");
	return false;
}