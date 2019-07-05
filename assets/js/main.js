var moveTo = new MoveTo();
var triggers = document.querySelectorAll('[class$=-trigger');
for(var i=0;i<triggers.length;i++) {
	triggers[i].addEventListener('click', function() {
		var target = document.querySelector('#' + this.className.split("-")[0].trim());
		moveTo.move(target);
	});
}