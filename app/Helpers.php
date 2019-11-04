<?php // Code within app\Helpers\Helper.php

namespace App ;

class Helpers 
{
    public static function handleExcel($data, $year1, $year2, $isYear)
    {
        if ($isYear) {
            $collection = collect([['year' => $year1, 'type' => 0], ['year' => $year2, 'type' => 0 ]]);
        } else {
            $collection = collect([['year' => $year1, 'type' => 1]]);            
        }
        foreach($data as $key => $row)
        {
            // check if the period is not a year
            if ($isYear) {
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
    
    public static function convertDate($year)
    {
        $parts = explode('/', $year);
        $new = $parts[1] . '-' . $parts[0] . '-' . $parts[2];
        return date('Y-m-d', strtotime($new));
    }
    
}
