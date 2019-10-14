<style>
table, th, td {
  border: 1px solid black;
}
</style>
<table style="width:70%">
<a href="index.php?action=bloglinkpage">Create new blog</a>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Published date</th>
        <th>Author</th>
        <th>Username</th>
    </tr>
    <?php
         $sql="select * from blog";
         $res=$db_handle->runbase($sql); 
                    if (! empty($res)) {
                        foreach ($res as $k) {
                            ?>
          <tr>
                    <td><?php echo $k['title']; ?></td>
                    <td><?php echo $k['description']; ?></td>
                    <td><?php echo $k['published_date']; ?></td>
                    <td><?php echo $k['author']; ?></td> 
                    <td><?php echo $k['username']; ?></td> 
                    <td><a href="index.php?action=edit">Edit</a></td>
                    <td><a href="index.php?action=delete&title=<?php echo $k['title']; ?>">Delete</a></td>
          </tr>
                    <?php
                        }
                    }
                    ?>
</table