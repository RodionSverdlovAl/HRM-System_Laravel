<?php

namespace App\Services;

class StatisticService
{
    public static function departmentsByEmployees($departments)
    {
        $data = [];
        foreach ($departments as $department) {
            $dataItem =[];
            $dataItem['department'] = $department->title;
            $dataItem['employees'] = count($department->users);
            $data[] = $dataItem;
        }
        $dataStr = "";
        foreach ($data as $item)
        {
            $dataStrItem = "['". $item['department']."',  ".$item['employees']."],";
            $dataStr.=$dataStrItem;
        }
        return $dataStr;
    }
}
