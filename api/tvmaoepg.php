<?php //某视猫EPG接口调用
/*
https://www.tvmao.com/program/SRTTV-SRTTV1-w7.html
接口：https://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php?query=CCTV1&resource_id=12520&format=json
https://epg.erw.cc/api/diyp/?ch=CCTV1&date=2023-11-07
http://iptv.xzyxx.xyz:56789/tbmaoepg.php?ch=CCTV1&date=2023-11-07
*/
error_reporting(0);
header("Content-Type:application/json;chartset=uft-8");

$ch   = strtoupper(trim($_GET['ch'])); //去除空格并格式化大写字母
$date = trim($_GET['date']); //去除空格

if (empty($ch) || empty($date)) exit(json_encode(['code' => 500, 'msg' => '参数不能为空!', 'name' => $ch, 'date' => $date, 'data' => null], JSON_UNESCAPED_UNICODE));

$chs = [ //创建数组是为了可以在自己的播放列表里使用自定义频道名称
  //'自定义频道名称' => '某视猫ID', 请自行添加，不想用数组就修改播放列表的频道名称跟某视猫ID匹配，如CCTV1某视猫ID是CCTV-1
    '汕头综合'       => '汕头新闻综合',
    '汕头经济生活'   => '汕头经济生活', //像这样的可以去掉
    '汕头文旅体育'   => '汕头文旅体育', //自定义频道名称和某视猫ID一样就不用添加到数组里
    '揭阳综合'       => '揭阳综合频道',
    '揭阳生活'       => '揭阳生活频道',
    '潮州综合'       => '潮州综合频道',
    '潮州民生'       => '潮州民生频道',
    '潮安综合'       => '潮安综合频道',
    '梅州-1'         => '梅州综合频道',
    '梅州客家生活'   => '梅州客家生活频道',
    '梅州导视'       => '梅州导视频道',
    '梅县综合'       => '梅县综合频道',
    '惠州-1'         => '惠州新闻综合',
    '惠州-2'         => '惠州公共生活',
    '肇庆综合'       => '肇庆综合',
    '肇庆生活服务'   => '肇庆生活服务',
    '清远新闻综合'   => '清远新闻综合频道',
    '清远文旅生活'   => '清远文旅生活频道',
    '中山综合'       => '中山综合频道',
    '中山香山文化'   => '中山香山文化频道',
    '中山教育'       => '中山教育频道',
    '东莞新闻综合'   => '东莞新闻综合',
    '东莞生活资讯'   => '东莞生频道',
    '河源综合'       => '河源综合频道',
    '河源公共'       => '河源公共频道',
    '汕尾新闻综合'   => '汕尾综合频道',
    '汕尾文化生活'   => '汕尾文化生活频道',
    '韶关新闻综合'   => '韶关新闻综合频道',
    '韶关绿色生活'   => '韶关绿色生活频道',
    '湛江新闻综合'   => '湛江综合频道',
    '湛江公共'       => '湛江公共频道',
    '珠海-1'         => '珠海综合频道',
    '珠海-2'         => '珠海生活频道',
    '江门综合'       => '江门综合频道',
    '江门侨乡生活'   => '江门侨乡生活',
    '茂名综合'       => '茂名综合频道',
    '茂名文化生活'   => '茂名公共频道',
    '佛山综合'       => '佛山综合频道',
    '佛山公共'       => '佛山公共频道',
    '佛山影视'       => '佛山影视频道',
    '佛山顺德'       => '佛山顺德频道',
    '佛山南海'       => '佛山南海频道',
    '广州综合'       => '广州综合频道',
    '广州新闻'       => '广州新闻频道',
    '广州竞赛'       => '广州竞赛频道',
    '广州影视'       => '广州影视频道',
    '广州法治'       => '广州法治频道',
    '南国都市'       => '南国都市频道',
    '深圳移动电视'   => '深圳移动电视频道',
    '深圳都市频道'   => '深视都市频道',
    '深圳电视剧频道' => '深视电视剧频道',
    '深圳公共频道'   => '深视公共频道',
    '深圳体育健康'   => '深视体育健康频道',
    '深圳财*生活'   => '深视财*生活频道',
    '深圳娱乐频道'   => '深圳娱乐频道',
    '深圳少儿频道'   => '深视少儿频道',
];

if (array_key_exists($ch, $chs)) $id = urlencode($chs[$ch]); else $id = $ch;

$url = "https://sp0.baidu.com/8aQDcjqpAAV3otqbppnN2DJv/api.php?query=$id&resource_id=12520&format=json";
$str = file_get_contents($url);
$res = mb_convert_encoding($str, 'UTF-8', 'UTF-8,GBK,GB2312,BIG5');
$res = stripslashes(html_entity_decode($res));
$res = json_decode($res, true);
$epgarr = $res['data'][0]['data'];
$data['channel_name'] = $id;
$data['date'] = date('Y-m-d', strtotime($date));
if (!empty($epgarr)) {
    $preview = $epgarr;
    for ($i = 0; $i < count($preview); $i++) {
        $time1 = date("Y/m/d", strtotime($preview[$i]['times']));
        $time2 = date("Y/m/d", strtotime($date));
        if ($time1 == $time2) {
            $data['epg_data'][] = array(
                "title" => $preview[$i]['title'],
                "start" => $preview[$i]['time'],
                "end"   => $preview[$i + 1]['time'],
                "date"  => $preview[$i + 1]['times'],
            );
        }
    }
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}
?>