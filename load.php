<?php
require "database.php";
$sql = "SELECT id, nom, email, contenu  FROM message";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
?>
   <div class="container mt-5">
   <table border="1" class="table text-white "> 
   <tr>
   <th>ID</th>
   <th>nom</th>
   <th>email</th>
   <th>contenu message</th>
   <th>Supprimer</th>
   <th>Modifier</th>
   </tr>

   <?php
  while ($row = $result->fetch_assoc()) {
    echo "<tr class="."'text-white'>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["nom"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["contenu"] . "</td>";?>
    <td><button onclick="supprimer(<?php echo $row['id'];?>)" class="btn btn-outline-secondary">Supprimer</button></td>
    <td><button onclick="modifier(<?php echo $row['id'];?>)" class="btn btn-outline-secondary">Modifier</button></td>
   <?php echo "</tr>";
}
  ?>
  </table>
  </div>
  </div>
<?php
} else {
  //echo "pas de messages à afficher";
}
?>
