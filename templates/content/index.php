
<p>Le document contiens <?= $_['total'] ?> caractères</p>
    
<div id="search">
    <form id="search-form">
        <input type="text" placeholder="" id="search-term" />
        <input type="submit" id="button1" value="Count" />
    </form>
</div>
<script>
var element = document.getElementById("button1");
element.addEventListener("click", function()
{
 alert("OK");
});
</script>
