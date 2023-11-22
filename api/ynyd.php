<?php
error_reporting(0);
$ts = $_GET['ts'];
if(!$ts){
  $id = isset($_GET['id'])?$_GET['id']:'cctv1';
  $n = [
    //央视
    'cctv1' => 'cctv-1',//CCTV-1
    'cctv1hd' => 'hdcctv01',//CCTV-1HD
    'cctv2' => 'cctv-2',//CCTV-2
    'cctv3' => 'cctv-3',//CCTV-3
    'cctv4' => 'cctv-4',//CCTV-4
    'cctv5' => 'cctv-5',//CCTV-5
    'cctv5p' => 'hdcctv05plus',//CCTV5+
    'cctv5p2' => 'HD-3600k-1080P-yncctv05plus',//CCTV5+
    'cctv6' => 'cctv-6',//CCTV-6
    'cctv7' => 'cctv-7',//CCTV-7
    'cctv8' => 'cctv-8',//CCTV-8
    'cctv9' => 'cctv-news',//CCTV-9
    'cctv10' => 'cctv-10',//CCTV-10
    'cctv11' => 'cctv-11',//CCTV-11
    'cctv12' => 'cctv-12',//CCTV-12
    'cctv13' => 'cctv-13',//CCTV-13
    'cctv14' => 'cctv-14',//CCTV-14
    'cctv15' => 'cctv-15',//CCTV-15
    'cctv16' => 'cctv-16yn',//CCTV-16
    'cctv17' => 'cctv-17',//CCTV-17
    
    'cgtnjl' => 'cctv-9',//CGTN纪录
    'cgtnjlhd' => 'HD-3600k-1080p-ynCGTNdocu',//CGTN纪录HD
    //中国教育
    'cetv1' => 'jiaoyutv',//中国教育-1
    'cetv2' => 'SD-1500k-576P-yncetv2',//中国教育2
    'cetv4' => 'SD-2500k-576P-yncetv4',//中国教育4
    //卫视
    'bjws' => 'beijingstv',//北京卫视
    'bjhd' => 'hdbeijingstv',//北京卫视HD
    'dfws' => 'dongfangstv',//东方卫视
    'dfhd' => 'hddongfangstv',//东方卫视HD
    'tjws' => 'tianjinstv',//天津卫视
    'fjhd' => 'hdtianjinstv',//天津卫视HD
    'cqws' => 'chongqingstv',//重庆卫视
    'hljws' => 'hdheilongjiangstv',//黑龙江卫视
    'jlws' => 'jilinstv',//吉林卫视
    'lnws' => 'liaoningstv',//辽宁卫视
    'nmws' => 'neimenggustv',//内蒙古卫视
    'nxws' => 'ningxiastv',//宁夏卫视
    'gsws' => 'gansustv',//甘肃卫视
    'qhws' => 'qinghaistv',//青海卫视
    'sxws' => 'shanxi1stv',//陕西卫视
    'nlws' => 'SD-2000k-576P-nonglinstv',//农林卫视
    'hbws' => 'hebeistv',//河北卫视
    'sxiws' => 'shanxistv',//山西卫视
    'sdws' => 'shandongstv',//山东卫视
    'sdhd' => 'hdshandongstv',//山东卫视HD
    'ahws' => 'anhuistv',//安徽卫视
    'hnws' => 'henanstv',//河南卫视
    'hubws' => 'hubeistv',//湖北卫视
    'hubhd' => 'hdhubeistv',//湖北卫视HD
    'hunws' => 'hunanstv',//湖南卫视
    'hunhd' => 'hdhunanstv',//湖南卫视HD
    'jxws' => 'jiangxistv',//江西卫视
    'jxhd' => 'HD-2500k-1080P-jiangxistv',//江西卫视HD
    'jsws' => 'jiangsustv',//江苏卫视
    'jshd' => 'hdjiangsustv',//江苏卫视HD
    'zjws' => 'zhejiangstv',//浙江卫视
    'zjhd' => 'hdzhejiangstv',//浙江卫视HD
    'dnws' => 'dongnanstv',//东南卫视
    'dnhd' => 'HD-3600k-1080P-dongnanstv',//东南卫视HD
    'gdws' => 'guangdongstv',//广东卫视
    'gdhd' => 'hdguangdongstv',//广东卫视HD
    'szws' => 'shenzhenstv',//深圳卫视
    'szhd' => 'hdshenzhenstv',//深圳卫视HD
    'gxws' => 'guangxistv',//广西卫视
    'gxhd' => 'HD-3600k-1080p-ynguangxistv',//广西卫视HD
    'ynws' => 'yunnanstv',//云南卫视
    'ynws2' => 'SD-1200k-720P-yntv4',//云南卫视
    'gzws' => 'guizhoustv',//贵州卫视
    'scws' => 'sichuanstv',//四川卫视
    'kbws' => 'kamba-tv',//康巴卫视
    'xjws' => 'xinjiangstv',//新疆卫视
    'btws' => 'HD-1500k-720P-bingtuanyn',//兵团卫视
    'xzws' => 'xizangstv',//西藏卫视
    'hinws' => 'lvyoustv',//海南卫视
    //特色
    'bjkjjs' => 'HD-3600k-1080P-beijingjishi',//北京纪实科教
    'kkse' => 'kakukaton',//卡酷少儿
    'shjsrw' => 'HD-3600k-1080P-shanghaijishi',//上海纪实人文
    'hhxd' => 'xuandongkaton',//哈哈炫动
    'sdjy' => 'shandongjy',//山东教育
    'sdjy2' => 'HD-1500k-720P-haixiayn',//山东教育
    'jyjs' => 'HD-3600k-1080P-jinyingjishi',//金鹰纪实
    'jykt' => 'jinyingkaton',//金鹰卡通
    'ymkt' => 'youmankaton',//优漫卡通
    'ymkthd' => 'HD-1500k-720P-xiamenyn',//优漫卡通HD
    //云南
    'ynds' => 'yntv2',//云南都市
    'ynyl' => 'yntv3',//云南娱乐
    'ynys' => 'SD-1200k-720P-yntv5',//云南影视
    'ynkl' => 'yntv6',//云南康旅
    'yngj' => 'yntvguoji',//云南国际
    'ynse' => 'yntvshaoer',//云南少儿
    //昆明
    'km1' => 'ynkmtv1',//昆明新闻综合
    'km5' => 'ynkmtv5',//昆明影视综艺
    'km6' => 'ynkmtv6',//昆明春城民生
    'kmjy' => 'SD-2500k-576P-ynkunmingjy',//昆明教育
    'kmxd' => 'SD-1500k-576P-ynkmxundiantv',//寻甸综合
    //红河
    'hh1' => 'SD-1500k-576P-ynhonghe1',//红河州新闻综合
    'hh2' => 'SD-1500k-576P-ynhonghe2',//红河州公共
    'hhx' => 'SD-1500k-576P-ynhonghetv',//红河县综合
    'hhhk' => 'SD-2500k-576P-ynhekou',//河口综合
    'hhjs' => 'SD-1500k-576P-ynjianshui',//建水综合
    'hhky' => 'SD-2500k-576P-ynkaiyuan',//开远综合
    'hhlc' => 'SD-2500k-576P-ynlvchun',//绿春综合
    'hhmz' => 'SD-1500k-576P-ynhhmengzi',//蒙自综合
    'hhpb' => 'SD-2500k-576P-ynpingbian',//屏边综合
    'hhyy' => 'SD-2500k-576P-ynyuanyang',//元阳综合
    'hhml' => 'SD-2500k-576P-ynmile',//弥勒新闻
    'hhsp' => 'SD-1500k-576P-ynshiping',//石屏综合
    //丽江
    'ljyl' => 'SD-1500k-576P-ynljyulong',//玉龙综合
    'ljys' => 'SD-1500k-576P-ynyongshengtv',//永胜综合
    //楚雄
    'cx1' => 'SD-1500k-576P-chuxiong2',//楚雄综合
    'cx2' => 'SD-1500k-576P-chuxiong1',//楚雄文旅
    'cxs' => 'SD-1500k-576P-ynchuxiong',//楚雄市综合
    'cxlf' => 'SD-1500k-576P-ynlufeng',//禄丰综合
    'cxmd' => 'SD-1500k-576P-yncxmouding',//牟定综合
    'cxhn' => 'SD-1500k-576P-ynnanhuatv',//南华综合
    'cxsb' => 'SD-1500k-576P-ynshuangbo',//双柏综合
    'cxwd' => 'SD-1500k-576P-ynwudingtv',//武定综合
    'cxya' => 'SD-1500k-576P-yncxyaoan',//姚安综合
    'cxym' => 'SD-1500k-576P-ynyuanmoutv',//元谋综合
    'cxyr' => 'SD-1500k-576P-ynyongren',//永仁综合
    //德宏
    'dh1' => 'yndhtv1',//德宏新闻综合
    'dh2' => 'yndhtv2',//德宏文旅
    'dhms' => 'HD15-720P-YNDHMSTV-1',//芒市综合
    'dhrl' => 'SD-1500k-576P-yndhruili',//瑞丽综合
    'dhyj' => 'HD15-720P-YNDHYJTV-1',//盈江综合
    'dhlc' => 'HD15-720P-YNDHLCTV-1',//陇川综合
    'dhlh' => 'SD-1500k-576P-dhlianghexian',//梁河综合
    //保山
    'bs1' => 'SD-1000k-576P-ynbaoshanxwzh',//保山新闻综合
    'bstc' => 'SD-1500k-576P-yntengchong',//腾冲综合
    'bsll' => 'SD-1500k-576P-ynlongling',//龙陵综合
    'bsly' => 'SD-1500k-576P-ynlongyangtv',//隆阳综合
    'bssd' => 'SD-1500k-576P-ynshidian',//施甸综合
    //文山
    'ws1' => 'SD-1500k-576P-ynwenshanzh',//文山新闻综合
    'wsfn' => 'SD-1500k-576P-ynwsfuning',//富宁电视台
    'wdgn' => 'SD-1500k-576P-ynwsguangnan',//广南电视台
    'wsmg' => 'SD-1500k-576P-ynwsmaguan',//马关电视台
    'wsqb' => 'SD-1500k-576P-ynwsqiubeitv',//丘北电视台
    'wsxc' => 'SD-1500k-576P-ynwsxichoutv',//西畴电视台
    'wsys' => 'SD-1500k-576P-ynwsyanshantv',//砚山电视台
    //临沧
    'lc1' => 'HD15-720P-YNLCTV-1',//临沧综合
    'lc2' => 'HD15-720P-YNLCTV-2',//临沧公共
    'lccy' => 'SD-1500k-576P-yncangyuantv',//沧源综合
    'lcfq' => 'SD-1500k-576P-lcfengqing',//凤庆综合
    'lcgm' => 'SD-1500k-576P-lcgengma',//耿马综合
    'lclx' => 'SD-1500k-576P-lclinxiang',//临翔综合
    'lxsj' => 'SD-1200k-576P-ynlcshuangjiang',//双江综合
    'lcyd' => 'SD-1500k-576P-lcyongde',//永德综合
    'lcyx' => 'SD-1500k-576P-lcyunxian',//云县综合
    'lczk' => 'SD-1500k-576P-lczhenkang',//镇康综合
    //怒江
    'njlp' => 'SD-1200k-576P-ynlanping',//兰坪综合
    'njls' => 'SD-1200k-576P-ynlushui',//泸水综合
    //西双版纳
    'xsbn1' => 'ynxsbn1',//西双版纳新闻综合
    'xsbn2' => 'ynxsbn2',//西双版纳文化旅游
    'xsbnmh' => 'SD-1500k-576P-ynbnmenghai',//勐海综合
    //大理
    'dl1' => 'SD-1500k-576P-yndali1',//大理新闻综合
    'dl2' => 'SD-1500k-576P-yndali2',//大理文化旅游
    'dley' => 'SD-1500k-576P-yndleryuantv',//洱源综合
    'dlbc1' => 'SD-1500k-576P-ynbinchuan1',//宾川一套
    'dlbc2' => 'SD-1500k-576P-ynbinchuan2',//宾川二套
    'dlhq' => 'SD-1500k-576P-ynheqing',//鹤庆综合
    'dljc' => 'SD-1500k-576P-ynjianchuan',//剑川新闻综合
    'dlml' => 'SD-1500k-576P-ynmidu1',//弥渡综合
    'dlnj' => 'SD-1500k-576P-ynnanjian1',//南涧综合
    'dlyl' => 'SD-1500k-576P-ynyunlong1',//云龙综合
    'dlws' => 'SD-1500k-576P-yndlweishantv',//巍山综合
    'dlyb' => 'SD-1500k-576P-ynyangbitv',//漾濞新闻
    //普洱
    'pe1' => 'SD-1500k-576P-ynpuer1',//普洱新闻综合
    'pe2' => 'SD-1500k-576P-ynpuer2',//普洱经济生活
    'pe3' => 'SD-1500k-576P-ynpuer3',//普洱科教
    'pejc' => 'SD-1500k-576P-ynpejiangcheng',//江城综合
    'pelc' => 'SD-1500k-576P-ynlancangtv',//澜沧综合
    'peml' => 'SD-1500k-576P-ynpemenglian',//孟连综合
    'pesm' => 'SD-1500k-576P-ynsimaotv',//思茅综合
    //曲靖
    'qj1' => 'SD-1500k-576P-ynqujing1',//曲靖一套
    'qj2' => 'SD-1500k-576P-ynqujing2',//曲靖二套
    'qj3' => 'SD-1500k-576P-ynqujing3',//曲靖三套
    'qjlp' => 'SD-1500k-576P-ynluoping',//罗平综合
    //昭通
    'zt1' => 'SD-1500k-576P-zhaotong1',//昭通一套
    'zt2' => 'SD-1500k-576P-zhaotong2',//昭通二套
    'zt3' => 'SD-1500k-576P-zhaotong3',//昭通三套
    'ztdg' => 'SD-1500k-576P-ynztdaguantv',//大关综合
    'ztld' => 'SD-1500k-576P-ynztludiantv',//鲁甸综合
    'ztqj' => 'SD-1500k-576P-ynztqiaojiatv',//巧家综合
    'ztyf' => 'SD-1500k-576P-ynztshuifutv',//水富综合
    'ztwx' => 'SD-1500k-576P-ynztweixintv',//威信综合
    'ztyl' => 'SD-1500k-576P-ynztyiliangtv',//彝良综合
    'ztys' => 'SD-1500k-576P-ynztyongshantv',//永善综合
    //迪庆
    'dq1' => 'HD15-720P-YNDQTV-1',//迪庆综合
    'dq2' => 'HD15-720P-yndqzytv-1',//迪庆藏语
    'dqdq' => 'HD15-720P-yndqdqtv-1',//德钦综合
    'dqwx' => 'HD15-720P-yndqwxtv-1',//维西综合
    'dqxgll' => 'HD15-720P-ynxglltv-1',//香格里拉综合
    //NewTV
    'aqxj' => 'aiqingxj',//NewTV爱情喜剧
    'cmlp' => 'HD-1500k-720P-cmlapo',//NewTV潮妈辣婆
    'dzdy' => 'dongzuody',//NewTV动作电影
    'gzjc' => 'guzhuangjc',//NewTV古装剧场
    'jpzy' => 'saishijx',//NewTV金牌综艺
    'jpzyhd' => 'HD-2500k-1080P-jzongyi',//NewTV金牌综艺
    'jpdj' => 'jdaju',//NewTV精品大剧
    'jpjl' => 'jingpinjl',//NewTV精品纪录
    'jpty' => 'jtiyu',//NewTV精品体育
    'jpzh' => 'mingxingdp',//NewTV精品综合
    'jsxy' => 'jingsongxy',//NewTV惊悚悬疑
    'jyjc' => 'jiatingjc',//NewTV家庭剧场
    'jljc' => 'junlvjc',//NewTV军旅剧场
    'jspl' => 'junshipl',//NewTV军事评论
    'ybjk' => 'ljiankangyouyue',//NewTV怡伴健康
    'rbjx' => 'xiqumd',//NewTV热播精选
    'nyzf' => 'nongyezf',//NewTV农业致富
    'wbsj' => 'SD-1500k-576P-bokesen',//NewTV武搏世界
    'xwwl' => 'HD-4000k-1080P-xwwl',//NewTV炫舞未来
    'zggf' => 'SD-1500k-576P-gzkongfu',//NewTV中国功夫
    //网络
    'dbdj' => 'SD-1500k-576P-kpl',//哒哒电竞
    'dbdj2' => 'SD-1500k-576P-lpl',//哒哒电竞
    'hmdj' => 'wmyx',//黑莓电竞
    'hmdh' => 'donghuawg',//黑莓动画
    'hmdy' => 'jdianying',//黑莓电影
    ];

    $con = stream_context_create(['http'=>['method'=>"GET",'header'=>["User-Agent: 0151"]]]);
    $m3u8 = file_get_contents('http://tvindexlive02.yn.ysten.com:8080/ysten-business/live/'.$n[$id].'/1.m3u8', null, $con);
    header('Content-Type: application/vnd.apple.mpegurl');
    print_r(preg_replace("/(.*?.ts)/i","http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF']."?ts=$1",$m3u8));
    } else {
    $data = ts($ts);
    header('Content-Type: video/MP2T');
    echo $data;
    }

function ts($url){
    $ch = curl_init($url);
