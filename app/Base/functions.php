<?php 
/*
   * @param string  $path 
   * @param array $data
   * @return void
*/
 function views(string $path , array $data = []):void{
    //extract the data array to use each value as variable
    extract($data);
    //start output buffering
    require_once VIEWS .'/'. $path;
}