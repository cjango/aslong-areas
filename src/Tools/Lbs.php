<?php

namespace AsLong\Area\Tools;

/**
 * 位置服务
 */
class Lbs
{
    /**
     * 距离两点计算
     * @param $from_lat, $from_lon, [起点经纬度]
     * @param $to_lat,$to_lon [终点经纬度]
     * @param $radius [可选，默认为地球的半径]
     * @return float [返回两地距离，单位千米]
     */
    public function getDistance($from_lat, $from_lon, $to_lat, $to_lon)
    {
        $radius = 6378.137;
        $rad    = floatval(M_PI / 180.0);

        $from_lat = floatval($from_lat) * $rad;
        $from_lon = floatval($from_lon) * $rad;
        $to_lat   = floatval($to_lat) * $rad;
        $to_lon   = floatval($to_lon) * $rad;

        $theta = $to_lon - $from_lon;

        $dist = acos(sin($from_lat) * sin($to_lat) +
            cos($from_lat) * cos($to_lat) * cos($theta)
        );

        if ($dist < 0) {
            $dist += M_PI;
        }

        return $dist = $dist * $radius; //返回千米
    }

}
