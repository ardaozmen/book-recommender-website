<?php 
    $book_name = $_POST['book_search']; 
    $selected = $_POST['no_books']; 
    $result = exec ('C:\Users\BkaNe\AppData\Local\Microsoft\WindowsApps\python.exe .\ENGR372\Book_Recommender.py "'.$book_name.'" '.$selected.' ' );
    
    $result = str_replace(array('[',']'), "", $result);
    $result = substr_replace($result, '', 0, 1);
    //print($result);
    $result = substr_replace($result, '', -1, 1);

    
    $result = str_replace('"', "'", $result);

    $books = explode("', '", $result);
    //print_r($books);

    session_start();
    if(isset($_SESSION['username'])){
        echo '<table>';
        $i = 1;
        foreach($books as $book){
            echo '<tr><td>'.$book.'</td>';
            echo '<td><a href="#" onclcik="return false" id="a'.$i.'" data-value="'.$book.'">Add to favorite</a></td></tr>';
            echo '<script>'
            .'$("#a'.$i.'").on("click", function(e){
                var book = $(this).data("value");

                $.ajax({
                    url: "add_to_favorite.php",
                    type: "POST",
                    data: {book, book},
                    success: function(response){
                        alert("this book is added to favorite")
                    }
                });
            });'.    
            '</script>';
            $i++;
        }
        echo '</table>';
        
    }else{
        echo '<table>';
        foreach($books as $book){
            echo '<tr><td>'.$book.'</td></tr>';
        }
        echo '</table>';
    }
    
?>

