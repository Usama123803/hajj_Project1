<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>How To Add and Delete Rows Dynamically Using jQuery - Techsolutionstuff</title>
<style>
    form{
        margin: 20px;
    }
    form input, button{
        padding: 5px;
    }
    table{
        width: 90%;
        margin: 20px;
		border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 10px;
        text-align: left;      	
    }
  	.delete-row, h2{
      margin:20px;
  	}
</style>

</head>
<body style="border:1px solid grey">
  	<h2>How To Add and Delete Rows Dynamically Using jQuery - Techsolutionstuff</h2>
    <form>
        <input type="text" id="name" placeholder="Name">
        <input type="text" id="email" placeholder="Email Address">
    	<input type="button" class="add-row" value="Add Row">
    </form>
    <table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox" name="record"></td>
                <td>techsolutionstuff</td>
 <td>techsolutionstuff@test.com</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="record"></td>
                <td>web developemnt</td>
                <td>web@test.com</td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="delete-row">Delete Row</button>
</body> 
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".add-row").click(function(){
            var name = $("#name").val();
            var email = $("#email").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>