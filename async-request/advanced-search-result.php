<?php
include('../includes/config.inc.php');
$trimSearchResult = $_POST['search'];
$search = trim($trimSearchResult);
print_r($_POST);
//$results = getArtByArtist($search);
if(isset($_POST['filter'])){
    if($_POST['filter'] == "history"){
        echo "history";
    }
    else if($_POST['filter'] == "person"){
        echo "person";
    }
    else if($_POST['filter'] == "landscape"){
        echo "landscape";
    }
    
}
// foreach($results as $key => $value)
// {
//     echo '
//         <ul class="list-group"> 
//             <a href="artist-details.php?ArtistID='.$value['ArtistID'].'"><li class="list-group-item">'.$value['Title'].'</li></a>
//              <li class="list-group-item">'.$value['Description'].'</li>
//         </ul>';
// }

// function getArtByArtist($search)
// {
//     try
//     {
//         $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $sql = "SELECT Paintings.ArtistID, Paintings.Title, Paintings.Description 
//         FROM Paintings JOIN Artists ON Paintings.ArtistID = Artists.ArtistID  
//         where Artists.FirstName Like ?
//         UNION
//         SELECT Paintings.ArtistID, Paintings.Title, Paintings.Description 
//         FROM Paintings JOIN Artists ON Paintings.ArtistID = Artists.ArtistID 
//         where Artists.LastName Like ?";
//         $result = $pdo->prepare($sql);
//         $result->bindValue(1, $search."%");
//         $result->bindValue(2, $search."%");
//         $result->execute();
//         $arts = array();
//         while ($row = $result->fetch()) {
//             $artDetails['ArtistID'] = $row['ArtistID'];
//             $artDetails['Title'] = $row['Title'];
//             $artDetails['Description'] = $row['Description'];
//             $arts[] = $artDetails;
//         }
//         $pdo = null;
//         return $arts;
//     }
//     catch (PDOException $e)
//     {
//         die($e->getMessage());
//         return null;
//     }
// }
?>