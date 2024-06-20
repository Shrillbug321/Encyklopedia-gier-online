//Creator Sebastian Dreszer
$(document).ready(function()
{
	//searching
	$("#lupa").click(function()
	{
		$("#content").load("searchResult.php", {search: $("#search").val()});
	})
	//account manage
	$("#loginBtn").click(function()
	{
		$("#login").load("loginForm.php");
	})
	
	$("#loginForm").find("input").click(function()
	{
		this.value = "";
	})
	
	$("#newAccount").click(function()
	{
		window.location.href = "newAccount.php";
	})
	
	$("#delete").click(function()
	{
		$("#confirmAccountDelete").css( { display: "block"} );
	})
	
	$("#no").click(function()
	{
		$("#confirmAccountDelete").css( { display: "none"} );
	})
	
	$("#wrongLogin").find("button").click(function()
	{
		$("#wrongLogin").css({display: "none"});
	})
	
	$("#profileBtn").click(function()
	{
		$("#login").load("profileTile.php");
	})
	
	//account settings
	$("#changeName").click(function()
	{
		$("#settings").load("profile/changeNameForm.php");
	})
	
	$("#changePassword").click(function()
	{
		$("#settings").load("profile/changePasswordForm.php");
	})
	
	$("#changeAvatar").click(function()
	{
		$("#settings").load("profile/changeAvatarForm.php");
	})
	
	$("#changeBackground").click(function()
	{
		$("#settings").load("profile/changeBackgroundForm.php");
	})
	
	//adding
	$("select[name=\"category\"]").change(function()
	{
		$("#subcategorySel").load("game/subcategory.php", {idCategory: $(this).val()} );
		$("#subcategorySel").css( {display:"inline"} );
	})
	
	$("#howManyButton").click(function()
	{
		$("#content").load("loadImageForm.php", {howMany: $("#howManyImages").val(), idGame: $("#idgame").val() } );
	})
	
	$("#howManyMoviesButton").click(function()
	{
		$("#content").load("loadMovieForm.php", {howMany: $("#howManyMovies").val(), idGame: $("#idgame").val() } );
	})
})
	//gallery
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