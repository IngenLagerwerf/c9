<?php    


// $diploma = $_FILES['diploma'];
// $cv = $_FILES['cv'];


    $sql = "INSERT INTO werkzoekers (baan_id, voornaam, achernaam, emaill, telfoon_nummer, motievatsie)
     Values ('$id','$voornaam','$achernaam','$emaill','$telfoon_nummer','$motievatsie')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    try{
    
    //    $stmt->execute(array(NULL,$id,$voornaam,$achernaam,$emaill,$telfoon_nummer,$diploma,$cv,$motievatsie));
        $melding = "repratie toegevoegd.";
        
    }catch(PDOException $e){
        $melding = "Kon geen repratie aanmaken.".$e->getMessage();
    }
    echo "<div hidden id='melding'>".$melding."</div>";



    $sql = "SELECT * FROM werkzoekers" ;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    foreach ($result as $key => $row)  {
        $last_id = $row['id'];

    }



//     for($i=0; $i < 1; $i++){

//     $output_dir = "upload/";

//     $RandomNum   = time();
       
//     $fileName      = str_replace(' ','-',strtolower($_FILES['diploma']['name'][$i]));
//     $ImageType      = $_FILES['diploma']['type'][$i]; /*"image/png", image/jpeg etc.*/
 
//     $fileExt = substr($fileName, strrpos($fileName, '.'));
//     $fileExt       = str_replace('.','',$fileExt);
//     $fileName      = preg_replace("/\.[^.\s]{3,4}$/", "", $fileName);
//     $NewfileName = $fileName.'-'.$RandomNum.'.'.$fileExt;
    
//     $ret[$NewfileName]= $output_dir.$NewfileName;
    
//     /* Try to create the directory if it does not exist */
//     if (!file_exists($output_dir . $last_id))
//     {
//         @mkdir($output_dir . $last_id, 0777);
//     }

//     move_uploaded_file($_FILES["diploma"]["tmp_name"][$i],$output_dir.$last_id."/".$NewfileName );

//     $id = $last_id;
//     $filename = $NewfileName;
//     $sql = "INSERT INTO fils (werkzoekers_id,  diploma) Values ('$id','$filename')"; 
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute();



//     $output_dir = "upload/";

//     $RandomNum   = time();
       
//     $cvName      = str_replace(' ','-',strtolower($_FILES['cv']['name'][$i]));
//     $ImageType      = $_FILES['cv']['type'][$i]; /*"image/png", image/jpeg etc.*/
 
//     $cvExt = substr($cvName, strrpos($cvName, '.'));
//     $cvExt       = str_replace('.','',$cvExt);
//     $cvName      = preg_replace("/\.[^.\s]{3,4}$/", "", $cvName);
//     $NewcvName = $cvName.'-'.$RandomNum.'.'.$cvExt;
    
//     $ret[$NewcvName]= $output_dir.$NewcvName;
    
//     /* Try to create the directory if it does not exist */
//     if (!file_exists($output_dir . $last_id))
//     {
//         @mkdir($output_dir . $last_id, 0777);
//     }

//     move_uploaded_file($_FILES["cv"]["tmp_name"][$i],$output_dir.$last_id."/".$NewcvName );

//     $id = $last_id;
//     $cvName = $NewcvName;
//     $sql = "INSERT INTO fils (werkzoekers_id,diploma,cv) Values ('$id','$filename','$cvName')"; 
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute();
// }





$output_dir = "upload/";/* Path for file upload */
   $fileCount = count($_FILES["image"]['name']);
   for($i=0; $i < $fileCount; $i++)
       
       {
           $RandomNum   = time();
       
           $ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][$i]));
           $ImageType      = $_FILES['image']['type'][$i]; /*"image/png", image/jpeg etc.*/
        
           $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
           $ImageExt       = str_replace('.','',$ImageExt);
           $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
           $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
           
           $ret[$NewImageName]= $output_dir.$NewImageName;
           
           /* Try to create the directory if it does not exist */
           if (!file_exists($output_dir . $last_id))
           {
               @mkdir($output_dir . $last_id, 0777);
           }

            move_uploaded_file($_FILES["image"]["tmp_name"][$i],$output_dir.$last_id."/".$NewImageName );    
            /*$insert_img = "insert into `category_images` SET `category_ads_id`='".$category_ads_id_image."', `image`='".$NewImageName."'";
             $result = $dbobj->query($insert_img);*/
             $id = $last_id;
             $ImageName = $NewImageName;
             $sql = "INSERT INTO fils (werkzoekers_id,  diploma ) Values ('$id','$ImageName')"; 
             $stmt = $pdo->prepare($sql);
             $stmt->execute();
              }
   
    //    echo "Image Uploaded Successfully";




