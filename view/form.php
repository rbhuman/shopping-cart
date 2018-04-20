<?php
include_once('../css/bootstrap.php');
?>
</head>
<body>
<div class="container">
<h1>Insert the Item description</h1><hr/>
<button class="btn btn-info btn-xs"><a href="../model/items.php">Watch Inserted Items</a></button><br><hr/>
<div class="col-md-4 mb-3">
    <form method="post" action="view/insert.php" enctype="multipart/form-data">
    <div class="form-group ">
    <label>NAME:</label>
    <input type="text" name="name" class="form-control"/>
    <label>PRICE:</label>
    <input type="text" name="price" class="form-control"/>
    <label>Attachment:</label>
    <input type="file" name="photo" /><br/>
    <button type="submit"  class="btn btn-info">Insert into database</button>

    </div>
    </div>
    </form>
</div>
</body>
</html>
