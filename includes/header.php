<header>
        <h1 id="title">Chess news</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="category.php?id=general">General</a></li>
                <li><a href="category.php?id=tournaments">Tournaments</a></li>
                <li><a href="unos.php">Create new article</a></li>
                <li><a href="administration.php">Administration</a></li>
            </ul>
        </nav>
</header>

<button onclick="topFunction()" id="myBtn" title="Scroll up">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
</button>

<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>