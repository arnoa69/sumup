<?php

class Functions {

    /**
     * A recursive function, that reads numbers per line in file 
     * a file and sums them up. When there is another filename
     * it will be called again by the same function called sumUp()
     * 
     * Instead of using fgets or file_get_contents using file fills
     * an array, which is handy to sum the number up with array_sum
     * @param string path to file
     */
    public function sumUp($path) {
        $lines = file($path);
        $data_folder = 'data';

        echo $path . ' - ' . array_sum($lines) . '<br />';

        foreach ( $lines as $line => $val ) {
            if (!is_numeric($val)) {
                $file_name = $val;
                $file_path = $data_folder . '/' . $file_name;
                echo $this->sumUp($file_path);
            }
        }
    }
}

?>