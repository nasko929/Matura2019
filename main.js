function changeWork()
{
	var work = document.getElementById("showWork");
	console.log(work);
	console.log(work.style.visibility);
	work.style.visibility = (work.style.visibility == "hidden" || work.style.visibility == "") ? ("visible") : ("hidden");
	var currButton = document.getElementById("button1");
	currButton.innerHTML = (currButton.innerHTML == "Покажи творбата") ? ("Скрий творбата") : ("Покажи творбата");
}
function changeAuthor()
{
	var author = document.getElementById("showAuthor");
	author.style.visibility = (author.style.visibility == "hidden" || author.style.visibility == "") ? ("visible") : ("hidden");
	var currButton = document.getElementById("button2");
	currButton.innerHTML = (currButton.innerHTML == "Покажи автора") ? ("Скрий автора") : ("Покажи автора");
}
function changeGenre()
{
	var genre = document.getElementById("showGenre");
	genre.style.visibility = (genre.style.visibility == "hidden" || genre.style.visibility == "") ? ("visible") : ("hidden");
	var currButton = document.getElementById("button3");
	currButton.innerHTML = (currButton.innerHTML == "Покажи жанра на творбата") ? ("Скрий жанра на творбата") : ("Покажи жанра на творбата");	
}
function Ivan(genre, chars, name)
{
	var fixedText = document.getElementById("fixedtext");
	fixedText.innerHTML = "Творба: " + name + "<br><br>Жанр: " + genre + "<br><br>Герои: ";
	if(chars.length == 2)
		fixedText.innerHTML += "няма";
	else
		fixedText.innerHTML += chars;
}