<?php
function get_epgs_mytvsuper($channel, $channel_id, $dt) {
    $epgs = array();
    $msg = '';
    $success = 1;
    $start_date_str = $dt->format('Ymd');
    $end_date = clone $dt;
    $end_date->add(new DateInterval('P6D'));
    $end_date_str = $end_date->format('Ymd');
    $url = 'https://content-api.mytvsuper.com/v1/epg?network_code=' . $channel_id . '&from=' . $start_date_str . '&to=' . $end_date_str . '&platform=web';
    try {
        $res = file_get_contents($url);
        $res_j = json_decode($res, true);
        $items = $res_j[0]['item'];
        foreach ($items as $item) {
            $epg_list = $item['epg'];
            $first_line_date = 1;
            foreach ($epg_list as $li) {
                $starttime = DateTime::createFromFormat('Y-m-d H:i:s', $li['start_datetime']);
                $title = $li['programme_title_tc'];
                $title_en = $li['programme_title_en'];
                $desc = $li['episode_synopsis_tc'];
                $desc_en = $li['episode_synopsis_en'];
                $url = 'https://www.mytvsuper.com/tc/programme/' . $li['programme_path'];
                $program_date = $starttime->format('Y-m-d') if (isset($starttime)) else $dt->format('Y-m-d');
                if ($first_line_date) {
                    $last_program_date = $starttime;
                    $first_line_date = 0;
                }
                $epg = array(
                    'channel_id' => $channel['id'],
                    'starttime' => $starttime->format('Y-m-d H:i:s'),
                    'endtime' => null,
                    'title' => $title . '-' . $title_en,
                    'title_en' => $title_en,
                    'desc' => $desc,
                    'desc_en' => $desc_en,
                    'program_date' => $program_date,
                );
                $epgs[] = $epg;
            }
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
        'last_program_date' => $last_program_date->format('Y-m-d H:i:s') if (isset($last_program_date)) else $dt->format('Y-m-d H:i:s'),
        'ban' => 0,
    );
    return $ret;
}

function get_channels_mytvsuper() {
    $url = 'https://content-api.mytvsuper.com/v1/channel/list?platform=web';
    $res = file_get_contents($url);
    $res_channels = json_decode($res, true)['channels'];
    $channels = array();
    foreach ($res_channels as $li) {
        $name = $li['name_tc'];
        $name_en = $li['name_en'];
        $cn = $li['channel_no'];
        $href = 'https://www.mytvsuper.com/tc/epg/' . $cn . '/';
        $logo = $li['path'] ?? '';
        $id = $li['network_code'];
        $desc = '';
        $channel = array(
            'name' => $name,
            'name_en' => $name_en,
            'id' => array($id),
            'url' => $href,
            'source' => 'mytvsuper',
            'logo' => $logo,
            'desc' => $desc,
            'sort' => '香港',
        );
        $channels[] = $channel;
    }
    return $channels;
}
?>

