<?php
include "../../../function/favourit.php"; 
$movie_name = $_GET["movie_name"];
$sql = "SELECT * FROM `movie` WHERE title LIKE '%$movie_name%'";
$result = mysqli_query($connexion , $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
<?php
$sql1 = "SELECT * FROM `categorie` WHERE `id` = " . $row['categorie_id'];
$result1 = mysqli_query($connexion, $sql1);

if ($result1 && mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_assoc($result1);
}
?>
<tr>
    <td class='text-white'><?php echo $row["title"] ?></td>
    <td class='text-white'><?php echo $row["year_of_release"] ?></td>
    <td class='text-white'><?php echo $row["duration"] ?> min</td>
    <td class='text-white'><?php echo $row["country"] ?></td>
    <td class='text-white'><?php echo $row1["name"] ?></td>
    <td>

    <form action="show_movies.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" name="favoris" style="background: none; border: none;">
            <i class="fa-regular fa-heart" style="color: #efbd0b;"></i>
            </button>
    </form>

    <form action="show_movies.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <button type="submit" name="to_watch" style="background: none; border: none;">
        <i class="fa-solid fa-bookmark" style="color: #efbd0b;"></i>
        </button>
    </form>
    </td>
</tr>
<?php
}
?>