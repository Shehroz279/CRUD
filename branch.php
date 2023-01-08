<?php
session_start();
if ($_SESSION["user"]=="admin") {
    require_once 'section/header.php';
    require_once 'db/connect_db.php';
?>
    <div class="bhead">
        <div class="search">
            <form method="post">
                <div class="search">
                    <div class="search-input">
                        <input type="text" id="branch" class="form-control mb-2" name="search_input" height="12" placeholder="Search By Branch Name" />
                    </div>
                    <div class="search-button">
                        <button type="submit" name="search" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="add">
            <button class="add btn btn-primary"><span id="boot-icon" class="bi bi-plus-circle-fill" style="font-size: 17px; color: rgb(255, 255, 255);"></span><a href="Branch_add.php">Add new</a></button>
        </div>
    </div>
    <br>
    <table class="table">
        <tr>

            <th>Branch ID </th>
            <th>Branch Name </th>
            <th>Branch Type</th>
            <th class="c">Contact No</th>
            <th>Action</th>
        </tr>
        <tr>
            <?php
            if (isset($_POST['search'])) {
                $branch = $_POST['search_input'];
                $query_search = "SELECT * FROM branch WHERE  Branch_Name LIKE '%$branch%'";
                $query_exe = mysqli_query($con, $query_search);
                while ($res = mysqli_fetch_array($query_exe)) { ?>

                    <td>
                        <?php echo $res['Branch_ID']; ?>
                    </td>
                    <td>
                        <?php echo $res['Branch_Name']; ?>
                    </td>
                    <td>
                        <?php echo $res['Branch_Type']; ?>
                    </td>
                    <td class="c">
                        <?php echo $res['Contact_No']; ?>
                    </td>
                    <td>
                        <a href="view.php?id=
                <?php echo $res['Branch_ID']; ?>" class="btn btn-primary">View</a>
                        <a href="view_edit.php?upd=<?php echo $res['Branch_ID']; ?>" class="btn btn-warning">Edit</a>
                        <a href="db/delete.php?del=<?php echo $res['Branch_ID']; ?>" class="btn btn-danger">Delete</a>
                    </td>
        </tr>
    <?php
                }
            } else {
                $query_all = "SELECT * FROM branch";
                $query_exe1 = mysqli_query($con, $query_all);

                while ($res1 = mysqli_fetch_array($query_exe1)) { ?>

        <td>
            <?php echo $res1['Branch_ID']; ?>
        </td>
        <td>
            <?php echo $res1['Branch_Name']; ?>
        </td>
        <td>
            <?php echo $res1['Branch_Type']; ?>
        </td>
        <td class="c">
            <?php echo $res1['Contact_No']; ?>
        </td>
        <td>
            <a href="view.php?id=
            <?php echo $res1['Branch_ID']; ?>" class="btn btn-primary b">View</a>
            <a href="view_edit.php?upd=<?php echo $res1['Branch_ID']; ?>" class="btn btn-warning b">Edit</a>
            <a href="db/delete.php?del=<?php echo $res1['Branch_ID']; ?>" class="btn btn-danger b">Delete</a>
        </td>
        </tr>
<?php
                }
            }

?>
    </table>


<?php require_once 'section/footer.php';
} else {?>
    <script>
window.location.assign("./login.php");
    </script>
<?php
}
?>