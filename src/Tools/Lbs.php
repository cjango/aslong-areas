<?php

namespace AsLong\Area\Tools;

/**
 * 位置服务
 */
class Lbs
{
    /**
     * 两坐标点间距离计算
     * @Author:<C.Jason>
     * @Date:2019-04-08T13:07:26+0800
     * @param float $from_lat [起点纬度]
     * @param float $from_lng [起点经度]
     * @param float $to_lat [终点纬度]
     * @param float $to_lng [终点经度]
     * @return float 距离（米）
     */
    public function getDistance($from_lat, $from_lng, $to_lat, $to_lng)
    {
        $from_lat_rad = DEG2RAD($from_lat);
        $from_lng_rad = DEG2RAD($from_lng);
        $to_lat_rad   = DEG2RAD($to_lat);
        $to_lng_rad   = DEG2RAD($to_lng);

        $lat = ABS($from_lat_rad - $to_lat_rad);
        $lng = ABS($from_lng_rad - $to_lng_rad);

        $distance = 6378.137 * 2 * ASIN(SQRT(POW(SIN($lat / 2), 2) + COS($from_lat_rad) * COS($to_lat_rad) * POW(SIN($lng / 2), 2)));

        return round($distance * 1000, 2);
    }

}
