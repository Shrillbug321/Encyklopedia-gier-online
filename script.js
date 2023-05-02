//Twórca Sebastian Dreszer
$(document).ready(function()
{
	//szukanie
	$("#lupa").click(function()
	{
		$("#content").load("search-result.php", {search: $("#search").val()});
	})
	//obsługa konta
	$("#loginBtn").click(function()
	{
		$("#login").load("loginform.php");
	})
	
	$("#loginForm").find("input").click(function()
	{
		this.value = "";
	})
	
	$("#newAccount").click(function()
	{
		window.location.href = "newaccount.php";
	})
	
	$("#delete").click(function()
	{
		$("#areYouSure").css( { display: "block"} );
	})
	
	$("#no").click(function()
	{
		$("#areYouSure").css( { display: "none"} );
	})
	
	$("#wrongLogin").find("button").click(function()
	{
		$("#wrongLogin").css({display: "none"});
	})
	
	$("#profileBtn").click(function()
	{
		$("#login").load("profiletile.php");
	})
	
	//ustawienia konta
	$("#changeName").click(function()
	{
		$("#settings").load("profile/changenameform.php");
	})
	
	$("#changePassword").click(function()
	{
		$("#settings").load("profile/changepasswordform.php");
	})
	
	$("#changeAvatar").click(function()
	{
		$("#settings").load("profile/changeavatarform.php");
	})
	
	$("#changeBackground").click(function()
	{
		$("#settings").load("profile/changebackgroundform.php");
	})
	
	//dodawanie
	$("select[name=\"category\"]").change(function()
	{
		$("#subcategorySel").load("game/subcategory.php", {idCategory: $(this).val()} );
		$("#subcategorySel").css( {display:"inline"} );
	})
	
	$("#howManyButton").click(function()
	{
		$("#content").load("load-image-form.php", {howMany: $("#howManyImages").val(), idgame: $("#idgame").val() } );
	})
	
	$("#howManyMoviesButton").click(function()
	{
		$("#content").load("load-movie-form.php", {howMany: $("#howManyMovies").val(), idgame: $("#idgame").val() } );
	})
})
	//galeria
	function prev(directory)
	{
		var image = document.getElementById("imageBig");
		var id = image.getAttribute("data-id");
		if (id > 1)
			id--;
		var path = directory+id+".jpg";
		image.setAttribute("src", path);
		image.setAttribute("data-id", id);
	}
	
	function next(directory, max)
	{
		var image = document.getElementById("imageBig");
		var id = image.getAttribute("data-id");
		if (id < max)
			id++;
		var path = directory+id+".jpg";
		image.setAttribute("src", path);
		image.setAttribute("data-id", id);
	}
	
	function zoom(directory, i)
	{
		var image = document.getElementById("imageBig");
		image.setAttribute("data-id", i);
		image.setAttribute("src", directory);
	}
/*Sebastian Dreszer czerwiec 2020*/