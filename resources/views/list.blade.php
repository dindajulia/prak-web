<!DOCTYPE html>
<html>

<head>
	<title> Watch List </title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="list.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

*,
*:before,
*:after{
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;
}
body{
height: 100vh;
background-image: url('bg.png');
}
.container{
width: 35%;
min-width: 950px;
position: absolute;
top: 5%; 
left: 25%;
	background: rgba(255, 255, 255, 0.808);
	border-radius: 10px;

}

h1{
    padding-left: 20px;
    padding-top: 20px;
    color: brown;
}

#newtask{
position: relative;
padding: 10px 20px;
}
#newtask input{
width: 100%;
height: 45px;
font-family: 'Poppins',sans-serif;
font-size: 15px;
border: 2px solid #d1d3d4;
padding: 12px;
color: #111111;
font-weight: 500;
position: relative;
border-radius: 5px;
}
#newtask input:focus{
outline: none;
border-color: brown;
}

#newtask button{
position: relative;
width: 10%;
height: 45px;
border-radius: 5px;
font-weight: 500;
font-size: 16px;
background-color: brown;
border: none;
color: #ffffff;
cursor: pointer;
outline: none;
}

/* SECTION TABLE */
#table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #table td, #table th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #table tr:nth-child(even){background-color: #f2f2f2;}
  
  #table tr:hover {background-color: #ddd;}
  
  #table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: brown;
    color: white;
  }



  /* SECTION BUTTON  */
  .btn {
    box-sizing: border-box;
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
    background-color: transparent;
    /* border: 2px solid #e74c3c; */
    border-radius: 0.6em;
    /* color: #e74c3c; */
    cursor: pointer;
    display: inline;
    align-self: center;
    font-size: 0.5rem;
    font-weight: 400;
    line-height: 1;
    margin: 10px;
    padding: 0.9em 0.9em;
    text-decoration: none;
    text-align: center;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
  }
  .btn:hover, .btn:focus {
    color: #fff;
    outline: 0;
  }
  
  .first {
    transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
  }
  .first:hover {
    box-shadow: 0 0 40px 40px #e74c3c inset;
  }
  .edit:hover {
    box-shadow: 0 0 40px 40px #DED93E inset;
  }
  .update:hover {
    box-shadow: 0 0 40px 40px #88CA5E inset;
  }
    </style>
</head>

<body>

	<div class="container">
		<h1> Watch List </h1>

		<form>
			<div id="newtask">
				<label>Movie Title : </label>
				<input type="text" name="name" id="inputName" required="">
			</div>

			<div id="newtask">
				<label>Movie Rating : </label>
				<input type="text" name="rating" id="inputRating" required="">
			</div>

			<div id="newtask">
				<button type="submit" id="push">Add</button><br><br>
			</div>

			<div id="newtask">
				<input id="myInput" type="text" placeholder="Search..">
			</div>
		</form>
		<br />

		<table class="table-bordered data-table" id="table">
			<thead>
				<tr>
					<th onclick="sortTable(0)">Movie Title</th>
					<th onclick="sortTable(1)">Movie Rating</th>
					<th width="200px">Action</th>
				</tr>
			</thead>
			<tbody id="myTable">
				<tr>
				</tr>
			</tbody>
		</table>

	</div>

	<script type="text/javascript">

		$("form").submit(function (e) {
			e.preventDefault();
			var name = $("input[name='name']").val();
			var rating = $("input[name='rating']").val();

			$(".data-table tbody").append("<tr data-name='" + name + "' data-rating='" + rating + "'><td>" + name + "</td><td>" + rating + "</td><td><button class='btn-edit btn edit'>Edit</button><button class='btn-delete btn first'>Delete</button></td></tr>");

			$("input[name='name']").val('');
			$("input[name='rating']").val('');
		});

		$("body").on("click", ".btn-delete", function () {
			$(this).parents("tr").remove();
		});

		$("body").on("click", ".btn-edit", function () {
			var name = $(this).parents("tr").attr('data-name');
			var rating = $(this).parents("tr").attr('data-rating');

			$(this).parents("tr").find("td:eq(0)").html('<input name="edit_name" value="' + name + '">');
			$(this).parents("tr").find("td:eq(1)").html('<input name="edit_rating" value="' + rating + '">');

			$(this).parents("tr").find("td:eq(2)").prepend("<button class='btn update btn-update'>Update</button><button class='btn btn-warning btn-xs btn-cancel'>Cancel</button>")
			$(this).hide();
		});

		$("body").on("click", ".btn-cancel", function () {
			var name = $(this).parents("tr").attr('data-name');
			var rating = $(this).parents("tr").attr('data-rating');

			$(this).parents("tr").find("td:eq(0)").text(name);
			$(this).parents("tr").find("td:eq(1)").text(rating);

			$(this).parents("tr").find(".btn-edit").show();
			$(this).parents("tr").find(".btn-update").remove();
			$(this).parents("tr").find(".btn-cancel").remove();
		});

		$("body").on("click", ".btn-update", function () {
			var name = $(this).parents("tr").find("input[name='edit_name']").val();
			var rating = $(this).parents("tr").find("input[name='edit_rating']").val();

			$(this).parents("tr").find("td:eq(0)").text(name);
			$(this).parents("tr").find("td:eq(1)").text(rating);

			$(this).parents("tr").attr('data-name', name);
			$(this).parents("tr").attr('data-rating', rating);

			$(this).parents("tr").find(".btn-edit").show();
			$(this).parents("tr").find(".btn-cancel").remove();
			$(this).parents("tr").find(".btn-update").remove();
		});


		//Sort When Click Header 
		function sortTable(n) {
			var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
			table = document.getElementById("myTable");
			switching = true;
			dir = "asc";
			while (switching) {
				switching = false;
				rows = table.rows;
				for (i = 1; i < (rows.length - 1); i++) {
					shouldSwitch = false;
					x = rows[i].getElementsByTagName("TD")[n];
					y = rows[i + 1].getElementsByTagName("TD")[n];
					if (dir == "asc") {
						if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
							
							shouldSwitch = true;
							break;
						}
					} else if (dir == "desc") {
						if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
							
							shouldSwitch = true;
							break;
						}
					}
				}
				if (shouldSwitch) {
					rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
					switching = true;
					switchcount++;
				} else {
					if (switchcount == 0 && dir == "asc") {
						dir = "desc";
						switching = true;
					}
				}
			}
		}


		//Search Data
		$(document).ready(function () {
			$("#myInput").on("keyup", function () {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function () {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
</body>
</html>