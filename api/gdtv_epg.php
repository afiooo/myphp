<?php
function get_epgs_gdtv($channel, $channel_id, $dt, $func_arg) {
    $epgs = array();
    $msg = '';
    $success = 1;
    try {
        $url = 'http://epg.gdtv.cn/f/' . $channel_id . '/' . $dt->format('Y-m-d') . '.xml';
        $res = file_get_contents($url);
        $soup = new SimpleXMLElement($res);
        $epgs_contents = $soup->xpath('//content');
        foreach ($epgs_contents as $epga) {
            $starttime = date('Y-m-d H:i:s', (int)$epga['time1']);
            $endtime = date('Y-m-d H:i:s', (int)$epga['time2']);
            $title = (string)$epga;
            $epg = array(
                'channel_id' => $channel['id'],
                'starttime' => $starttime,
                'endtime' => $endtime,
                'title' => $title,
                'desc' => '',
                'program_date' => $dt->format('Y-m-d'),
            );
            $epgs[] = $epg;
        }
    } catch (Exception $e) {
        $success = 0;
        $spidername = pathinfo(__FILE__, PATHINFO_FILENAME);
        $msg = 'spider-' . $spidername . '- ' . $e->getMessage();
    }
    $ret = array(
        'success' => $success,
        'epgs' => $epgs,
        'msg' => $msg,
        'last_program_date' => $dt->format('Y-m-d'),
        'ban' => 0,
    );
    return $ret;
}

function get_channels_gdtv() {
    $url = 'http://epg.gdtv.cn/f/1.xml';
    $res = file_get_contents($url);
    $soup = new SimpleXMLElement($res);
    $contents = $soup->xpath('//channel');
    $channels = array();
    foreach ($contents as $content) {
        $id = (string)$content['id'];
        $name = (string)$content->ctitle;
        $cdate = (string)$content->cdate;
        $channel = array(
            'name' => $name,
            'id' => array($id),
            'url' => 'http://epg.gdtv.cn/',
            'source' => 'gdtv',
            'logo' => '',
            'desc' => '',
            'sort' => '广东',
            'newestdate' => $cdate,
        );
        $channels[] = $channel;
    }
    return $channels;
}
?>
