           <?php  
                        $file_path= "../data/customers.txt";
                        $file_arr = file($file_path);
                        $book_arr = [];
                        foreach ($file_arr as $key => $value) {
                                foreach ($value as $key => $value) {
                                    $book_arr[] = explode(',', $value);
                                }
                        }
                        ?>