<?php // Code within app\Helpers\Helper.php

namespace App ;

class Helpers 
{
    public static function handleExcel($data)
    {
        $collection = collect([[], []]);
        foreach($data as $key => $row)
        {
            if ($row[7] == null) 
            {
                $collection->put(1, array_merge($collection[1], [0]));
            } else if (is_numeric($row[7])) 
            {
                $collection->put(1, array_merge($collection[1], [$row[7]]));
            } else 
            {
                return  False;
            }

            if ($row[6] == null) 
            {
                $collection->put(0, array_merge($collection[0], [0]));
            } else if (is_numeric($row[6])) 
            {
                $collection->put(0, array_merge($collection[0], [$row[6]]));
            } else 
            {
                return False;
            }
        }  
        return $collection;
    }          
    
}
