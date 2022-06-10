const title = document.getElementById('title');
// console.log(title.childNodes);

if (window.matchMedia("(min-width: 1280px)").matches) {
    title.childNodes[2].nodeValue = "Discover Happiness score and Health score (life expectancy) since 2015 in every country all around the world !";
}