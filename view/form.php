<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1> Create Blog Post</h1>
<!to send info or get info >
<!telling it to send info>
<!this gives use the correct path to go>
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>"> 
    <div>
        <!label it tilte>
        <label for="title">Title: </label>
        <!it inputs a text that is name title>
        <input type="text" name="title" />
    </div>
    
    <div>
        <!label it post>
        <label for="post">Post: </label>
        <!the textarea name is post>
        <textarea name="post"></textarea> 
    </div>
    
    <div>
        <!how to create a submit button>
        <button type="submit">Submit</button>
        
    </div>
</form>
