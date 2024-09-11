<?php
header('Content-Type:text/plain'); //纯文本格式
error_reporting(0);
$n =[
    //央视
    "cctv1" => ["cctv1HD","v4M",1], //CCTV1综合
    "cctv2" => ["cctv2HD","v6M",1], //CCTV2财*
    "cctv3" => ["cctv3HD","v6M",1], //CCTV3综艺
    "cctv4" => ["cctv4HD","v6M",3], //CCTV4中文国际
    "cctv5" => ["cctv5HD","v6M",1], //CCTV5体育
    "cctv5p" => ["cctv5SportHD","v6M",1], //CCTV5+体育赛事
    "cctv6" => ["cctv6HD","v6M",1], //CCTV6电影
    "cctv7" => ["cctv7HD","v6M",3], //CCTV7国防军事
    "cctv8" => ["cctv8HD","v6M",1], //CCTV8电视剧
    "cctv9" => ["cctv9HD","v6M",1], //CCTV9纪录
    "cctv10" => ["cctv10HD","v6M",1], //CCTV10科教
    "cctv11" => ["cctv11HD","v6M",1], //CCTV11戏曲
    "cctv12" => ["cctv12HD","v6M",3], //CCTV12社会与法
    "cctv13" => ["CCTVNewsHD","v4M",1], //CCTV13新闻
    "cctv14" => ["cctvseHD","v6M",1], //CCTV14少儿
    "cctv15" => ["cctv15HD","v6M",1], //CCTV15音乐
    "cctv16" => ["cctv16HD","v6M",1], //CCTV16奥林匹克
    "cctv17" => ["cctv17HD","v6M",2], //CCTV17农业农村

    "bqkj" => ["bqkjHD","v6M",1], //CCTV兵器科技
    "dyjc" => ["diyijuchangHD","v4M",2], //CCTV第一剧场
    "hjjc" => ["hjjcHD","v6M",1], //CCTV怀旧剧场
    "fyjc" => ["fyjcHD","v6M",1], //CCTV风云剧场
    "fyyy" => ["fyyyHD","v6M",1], //CCTV风云音乐
    "fyzq" => ["fyzqHD","v6M",1], //CCTV风云足球
    "whjp" => ["yswhHD","v6M",1], //CCTV央视文化精品
    "nxss" => ["nvxing","v2M",1], //CCTV女性时尚
    "gefwq" => ["golfHD","v6M",1], //CCTV高尔夫网球
    "ystq" => ["ystqHD","v6M",1], //CCTV央视台球
    "yggw" => ["yggw","v2M",1], //CCTV央广购物
    "zsgw" => ["ysgw","v2M",1], //CCTV中视购物
 
    "zxs" => ["qicai","v2M",1], //种养新影-中学生
    "fxzl" => ["faxian","v2M",1], //种养新影-发现之旅
    "lgs" => ["gushi","v2M",1], //种养新影-老故事
    
    "sh" => ["shuhua","v2M",1], //书画
    "zgtq" => ["tianqiSD","v2M",1], //中国天气

    "cgtn" => ["cgtnSD","v2M",1], //CGTN
    //中国教育
    "cetv1" => ["cetv-1SD","v2M",1], //CETV1中教1台
    "cetv4" => ["cetv-4SD","v2M",1], //CETV4中教4台
    "zqjy" => ["zaojiaoHD","v6M",1], //CETV早期教育
    //CHC系列
    "chcgq" => ["chcgqdyHD","v6M",1], //CHC高清电影
    "chcdz" => ["chcdzdyHD","v6M",1], //CHC动作电影
    "chcjt" => ["chcjtyyHD","v6M",1], //CHC家庭影院
    //卫视
    "bjws" => ["beijingHD","v6M",10], //北京卫视
    "dfws" => ["shanghaiHD","v6M",3], //东方卫视
    "tjws" => ["tianjinHD","v6M",4], //天津卫视
    "cqws" => ["chongqingHD","v4M",1], //重庆卫视
    "hljws" => ["heilongjiangHD","v4M",3], //黑龙江卫视
    "jlws" => ["jilinHD","v4M",4], //吉林卫视
    "lnws" => ["liaoningHD","v6M",6], //辽宁卫视
    "nmws" => ["neimengkuSD","v2M",3], //内蒙古卫视
    "nxws" => ["ningxia","v2M",1], //宁夏卫视
    "qhws" => ["qinghaiSD","v2M",1], //青海卫视
    "hbws" => ["hebeiSD","v4M",3], //河北卫视
    "sxiws" => ["shanxiSD","v2M",1], //山西卫视
    "ahws" => ["anhuiSD","v4M",3], //安徽卫视
    "hnws" => ["henanHD","v6M",1], //河南卫视
    "hubws" => ["hubeiSD","v4M",3], //湖北卫视
    "hunws" => ["hunanHD","v6M",4], //湖南卫视
    "jxws" => ["jiangxiHD","v4M",5], //江西卫视
    "jsws" => ["jiangsuHD","v6M",1], //江苏卫视
    "zjws" => ["zhejiangHD","v6M",5], //浙江卫视
    "dnws" => ["dongnanHD","v4M",3], //东南卫视
    "gdws" => ["guangdongHD","v6M",2], //广东卫视
    "szws" => ["shenzhenHD","v6M",4], //深圳卫视
    "gxws" => ["guangxiHD","v6M",1], //广西卫视
    "ynws" => ["yunnanSD","v4M",3], //云南卫视
    "gzws" => ["guizhouHD","v6M",1], //贵州卫视
    "scws" => ["sichuanHD","v6M",2], //四川卫视
    "xjws" => ["xinjiangSD","v2M",1], //新疆卫视
    "btws" => ["bingtuanSD","v2M",1], //兵团卫视
    "xzws" => ["xizangSD","v2M",1], //西藏卫视
    "hinws" => ["hainanSD","v4M",3], //海南卫视
    "ssws" => ["sanshaSD","v2M",1], //三沙卫视
    //北京
    "bjjskj" => ["bjayjsSD","v6M",1], //北京纪实科教
    "bjkk" => ["bjkakuSD","v2M",1], //北京卡酷
    "zhtc" => ["techan","v2M",1], //中华特产
    "sthj" => ["shengtai","v2M",1], //生态环境
    "shdy" => ["diaoyu","v2M",1], //四海钓鱼
    "cmpd" => ["doxtv","v2M",1], //车迷频道
    "bxjk" => ["jiankangSD","v2M",1], //百姓健康
    "hqqg" => ["car","v2M",1], //环球奇观
    "hqly" => ["huanqiulvyou","v2M",1], //环球旅游
    "yybb" => ["youxi","v2M",1], //优优宝贝
    "jshwjx" => ["jusha","v2M",1], //聚鲨环球精选
    //上海
    "dfcj" => ["dfcj","v2M",1], //东方财*
    "hxjc" => ["hxjc_4K","v1M",1], //欢笑剧场
    "dsjc" => ["dsjcHD","v6M",1], //都市剧场
    "mlxq" => ["mlzqHD","v6M",1], //魅力足球
    "dmxc" => ["dmxcHD","v6M",1], //动漫秀场
    "yxfy" => ["yxfyHD","v6M",1], //游戏风云
    "shss" => ["shenghuo","v2M",1], //生活时尚
    "fztd" => ["fazhi","v2M",1], //法治天地
    "jsxt" => ["jinse","v2M",1], //金色学堂
    //重庆
    "cqxw" => ["CQTVNewsHD","v4M",1], //重庆新闻
    "cqkj" => ["CQTVkejiaoHD","v6M",1], //重庆科教
    "cqys" => ["cqyingshiHD","v6M",1], //重庆影视
    "cqwtyl" => ["cqwtylHD","v6M",1], //重庆文体娱乐
    "cqse" => ["cqseHD","v6M",1], //重庆少儿
    "cqsssh" => ["cqssgwHD","v6M",1], //重庆时尚生活
    "cqxnc" => ["cqggncHD","v6M",1], //重庆新农村
    "cqshyf" => ["CQTVTrendyHD","v6M",1], //重庆社会与法
    "cqyd" => ["mryyHD","v6M",1], //重庆移动
    "cqqm" => ["cqcarSD","v2M",1], //重庆汽摩
    "cgrm" => ["cqrongmei","v2M",1], //重广融媒
    "akds" => ["aikanHD","v6M",2], //爱看导视
    "hczh" => ["hechuan","v2M",4], //合川综合
    "cszh" => ["changshou","v2M",1], //长寿综合
    "yyzh" => ["youyang","v2M",2], //酉阳综合
    "yunyzh" => ["jiangjinHD","v2M",3], //云阳综合
    "tlzh" => ["tongliangzongheHD","v2M",5], //铜梁综合
    //其他
    "jygw" => ["jygw","v2M",1], //家有购物
    "xdm" => ["dongman","v2M",1], //新动漫
    "zqfw" => ["jiazheng","v2M",1], //证券服务
    "sdjy" => ["sdjiaoyuSD","v2M",1], //山东教育
    "sctx" => ["soucang","v2M",1], //收藏天下
    "gxpd" => ["guoxue","v2M",1], //国学频道
    "klcd" => ["klcdHD","v6M",1], //快乐垂钓
    "jykt" => ["jinyingSD","v6M",2], //金鹰卡通
    "xfpy" => ["xianfeng","v2M",1], //先锋乒羽
    "fsgw" => ["fsgw","v2M",1], //风尚购物
    "cftx" => ["caifu","v2M",1], //财富天下
    "tywq" => ["weiqi","v2M",1], //天元围棋
    "sypd" => ["sheying","v2M",1], //摄影频道
    "qsjl" => ["qsjlHD","v6M",1], //求索纪录
    ];
$Url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if(isset($_GET['id'])){
$id = isset($_GET['id'])?$_GET['id']:'cctv1';
$s=$_GET["s"]??$n[$id][1];
$t = round((time()-20)/10);
$Cf = "#EXTM3U\n#EXT-X-VERSION:3\n#EXT-X-MEDIA-SEQUENCE:{$t}\n#EXT-X-TARGETDURATION:11\n";
for($i=0;$i<5;$i++) {
$Cf .= "#EXTINF:10.000,\nhttp://hls.live.cqccn.com/__cl/cg:live/__c/{$n[$id][0]}/__op/default/__f/{$n[$id][2]}/{$s}/".strval($t+$i).".ts\n";
}
header("Content-Type:application/vnd.apple.mpegurl");
header("Content-Disposition:attachment;filename=$id.m3u8");
die($Cf);
}
elseif(isset($_GET['sid'])){
$sid=$_GET['sid'];
$s=$_GET['s'];
$Cf=<<<Eo
#EXTM3U
#EXT-X-VERSION:3
#EXT-X-INDEPENDENT-SEGMENTS
#EXT-X-MEDIA:TYPE=AUDIO,GROUP-ID="audio_mp4a.40.2_48000",LANGUAGE="und",NAME="a48000",AUTOSELECT=YES,DEFAULT=YES,CHANNELS="2",URI="$Url?id=$sid&s=$s"
#EXT-X-STREAM-INF:BANDWIDTH=5000000,AVERAGE-BANDWIDTH=5000000,RESOLUTION=1920x1080,CODECS="avc1.640028,mp4a.40.2",AUDIO="audio_mp4a.40.2_48000",CLOSED-CAPTIONS=NONE,FRAME-RATE=25
$Url?id=$sid
Eo;
header("Content-Type:application/vnd.apple.mpegurl");
header("Content-Disposition:attachment;filename=$sid.m3u8");
die($Cf);
}else{
$Cf=<<<Eo
CCTV1综合,$Url?sid=cctv1&s=a48k&Cf.m3u8
CCTV2财,$Url?sid=cctv2&s=a48k&Cf.m3u8
CCTV3综艺,$Url?sid=cctv3&s=a48k&Cf.m3u8
CCTV4中文国际,$Url?sid=cctv4&s=a48k&Cf.m3u8
CCTV5体育,$Url?sid=cctv5&s=a48k&Cf.m3u8
CCTV5,$Url?sid=cctv5p&s=a48k&Cf.m3u8
CCTV6电影,$Url?sid=cctv6&s=a48k&Cf.m3u8
CCTV7国防军事,$Url?sid=cctv7&s=a48k&Cf.m3u8
CCTV8电视剧,$Url?sid=cctv8&s=a48k&Cf.m3u8
CCTV9纪录,$Url?sid=cctv9&s=a48k&Cf.m3u8
CCTV10科教,$Url?sid=cctv10&s=a48k&Cf.m3u8
CCTV11戏曲,$Url?sid=cctv11&s=a48k&Cf.m3u8
CCTV12社会与法,$Url?sid=cctv12&s=a48k&Cf.m3u8
CCTV13新闻,$Url?sid=cctv13&s=a48k&Cf.m3u8
CCTV14少儿,$Url?sid=cctv14&s=a48k&Cf.m3u8
CCTV15音乐,$Url?sid=cctv15&s=a48k&Cf.m3u8
CCTV16奥林匹克,$Url?sid=cctv16&s=a48k&Cf.m3u8
CCTV17农业农村,$Url?sid=cctv17&s=a48k&Cf.m3u8
CCTV兵器科技,$Url?sid=bqkj&s=a48k_zho&Cf.m3u8
CCTV第一剧场,$Url?sid=dyjc&s=a48k&Cf.m3u8
CCTV怀旧剧场,$Url?sid=hjjc&s=a48k_zho&Cf.m3u8
CCTV风云剧场,$Url?sid=fyjc&s=a48k_zho&Cf.m3u8
CCTV风云音乐,$Url?sid=fyyy&s=a48k_zho&Cf.m3u8
CCTV风云足球,$Url?sid=fyzq&s=a48k_zho&Cf.m3u8
CCTV央视文化精品,$Url?sid=whjp&s=a48k_zho&Cf.m3u8
CCTV女性时尚,$Url?sid=nxss&s=a48k_zho&Cf.m3u8
CCTV高尔夫网球,$Url?sid=gefwq&s=a48k_zho&Cf.m3u8
CCTV央视台球,$Url?sid=ystq&s=a48k_zho&Cf.m3u8
CCTV央广购物,$Url?sid=yggw&s=a48k_zho&Cf.m3u8
CCTV中视购物,$Url?sid=zsgw&s=a48k_zho&Cf.m3u8
种养新影-中学生,$Url?sid=zxs&s=a48k_zho&Cf.m3u8
种养新影-发现之旅,$Url?sid=fxzl&s=a48k_zho&Cf.m3u8
种养新影-老故事,$Url?sid=lgs&s=a48k_zho&Cf.m3u8
书画,$Url?sid=sh&s=a48k_zho&Cf.m3u8
中国天气,$Url?sid=zgtq&s=a48k&Cf.m3u8
CGTN,$Url?sid=cgtn&s=a48k&Cf.m3u8
CETV1中教1台,$Url?sid=cetv1&s=a48k&Cf.m3u8
CETV4中教4台,$Url?sid=cetv4&s=a48k&Cf.m3u8
CETV早期教育,$Url?sid=zqjy&s=a48k_zho&Cf.m3u8
CHC系列,$Url?sid=&s=&Cf.m3u8
CHC高清电影,$Url?sid=chcgq&s=a48k_zho&Cf.m3u8
CHC动作电影,$Url?sid=chcdz&s=a48k_zho&Cf.m3u8
CHC家庭影院,$Url?sid=chcjt&s=a48k_zho&Cf.m3u8
北京卫视,$Url?sid=bjws&s=a48k&Cf.m3u8
东方卫视,$Url?sid=dfws&s=a48k&Cf.m3u8
天津卫视,$Url?sid=tjws&s=a48k&Cf.m3u8
重庆卫视,$Url?sid=cqws&s=a48k&Cf.m3u8
黑龙江卫视,$Url?sid=hljws&s=a48k&Cf.m3u8
吉林卫视,$Url?sid=jlws&s=a48k&Cf.m3u8
辽宁卫视,$Url?sid=lnws&s=a48k&Cf.m3u8
内蒙古卫视,$Url?sid=nmws&s=a48k&Cf.m3u8
宁夏卫视,$Url?sid=nxws&s=a48k&Cf.m3u8
青海卫视,$Url?sid=qhws&s=a48k&Cf.m3u8
河北卫视,$Url?sid=hbws&s=a48k&Cf.m3u8
山西卫视,$Url?sid=sxiws&s=a48k&Cf.m3u8
安徽卫视,$Url?sid=ahws&s=a48k&Cf.m3u8
河南卫视,$Url?sid=hnws&s=a48k&Cf.m3u8
湖北卫视,$Url?sid=hubws&s=a48k&Cf.m3u8
湖南卫视,$Url?sid=hunws&s=a48k&Cf.m3u8
江西卫视,$Url?sid=jxws&s=a48k&Cf.m3u8
江苏卫视,$Url?sid=jsws&s=a48k_zho&Cf.m3u8
浙江卫视,$Url?sid=zjws&s=a48k&Cf.m3u8
东南卫视,$Url?sid=dnws&s=a48k&Cf.m3u8
广东卫视,$Url?sid=gdws&s=a48k&Cf.m3u8
深圳卫视,$Url?sid=szws&s=a48k&Cf.m3u8
广西卫视,$Url?sid=gxws&s=a48k_zho&Cf.m3u8
云南卫视,$Url?sid=ynws&s=a48k&Cf.m3u8
贵州卫视,$Url?sid=gzws&s=a48k_zho&Cf.m3u8
四川卫视,$Url?sid=scws&s=a48k&Cf.m3u8
新疆卫视,$Url?sid=xjws&s=a48k&Cf.m3u8
兵团卫视,$Url?sid=btws&s=a48k&Cf.m3u8
西藏卫视,$Url?sid=xzws&s=a48k&Cf.m3u8
海南卫视,$Url?sid=hinws&s=a48k&Cf.m3u8
三沙卫视,$Url?sid=ssws&s=a48k&Cf.m3u8
北京纪实科教,$Url?sid=bjjskj&s=a48k&Cf.m3u8
北京卡酷,$Url?sid=bjkk&s=a48k&Cf.m3u8
中华特产,$Url?sid=zhtc&s=a48k_zho&Cf.m3u8
生态环境,$Url?sid=sthj&s=a48k_zho&Cf.m3u8
四海钓鱼,$Url?sid=shdy&s=a48k_zho&Cf.m3u8
车迷频道,$Url?sid=cmpd&s=a48k_zho&Cf.m3u8
百姓健康,$Url?sid=bxjk&s=a48k&Cf.m3u8
环球奇观,$Url?sid=hqqg&s=a48k_zho&Cf.m3u8
环球旅游,$Url?sid=hqly&s=a48k&Cf.m3u8
优优宝贝,$Url?sid=yybb&s=a48k_zho&Cf.m3u8
聚鲨环球精选,$Url?sid=jshwjx&s=a48k_zho&Cf.m3u8
东方财,$Url?sid=dfcj&s=a48k_zho&Cf.m3u8
欢笑剧场,$Url?sid=hxjc&s=a48k_zho&Cf.m3u8
都市剧场,$Url?sid=dsjc&s=a48k_zho&Cf.m3u8
魅力足球,$Url?sid=mlxq&s=a48k_zho&Cf.m3u8
动漫秀场,$Url?sid=dmxc&s=a48k_zho&Cf.m3u8
游戏风云,$Url?sid=yxfy&s=a48k_zho&Cf.m3u8
生活时尚,$Url?sid=shss&s=a48k_zho&Cf.m3u8
法治天地,$Url?sid=fztd&s=a48k_zho&Cf.m3u8
金色学堂,$Url?sid=jsxt&s=a48k_zho&Cf.m3u8
重庆新闻,$Url?sid=cqxw&s=a48k&Cf.m3u8
重庆科教,$Url?sid=cqkj&s=a48k_zho&Cf.m3u8
重庆影视,$Url?sid=cqys&s=a48k&Cf.m3u8
重庆文体娱乐,$Url?sid=cqwtyl&s=a48k&Cf.m3u8
重庆少儿,$Url?sid=cqse&s=a48k&Cf.m3u8
重庆时尚生活,$Url?sid=cqsssh&s=a48k&Cf.m3u8
重庆新农村,$Url?sid=cqxnc&s=a48k&Cf.m3u8
重庆社会与法,$Url?sid=cqshyf&s=a48k&Cf.m3u8
重庆移动,$Url?sid=cqyd&s=a48k_zho&Cf.m3u8
重庆汽摩,$Url?sid=cqqm&s=a48k&Cf.m3u8
重广融媒,$Url?sid=cgrm&s=a48k&Cf.m3u8
爱看导视,$Url?sid=akds&s=a48k_zho&Cf.m3u8
合川综合,$Url?sid=hczh&s=a48k_zho&Cf.m3u8
长寿综合,$Url?sid=cszh&s=a48k&Cf.m3u8
酉阳综合,$Url?sid=yyzh&s=a48k&Cf.m3u8
云阳综合,$Url?sid=yunyzh&s=a48k&Cf.m3u8
铜梁综合,$Url?sid=tlzh&s=a48k_zho&Cf.m3u8
家有购物,$Url?sid=jygw&s=a48k_zho&Cf.m3u8
新动漫,$Url?sid=xdm&s=a48k_zho&Cf.m3u8
证券服务,$Url?sid=zqfw&s=a48k_zho&Cf.m3u8
山东教育,$Url?sid=sdjy&s=a48k&Cf.m3u8
收藏天下,$Url?sid=sctx&s=a48k_zho&Cf.m3u8
国学频道,$Url?sid=gxpd&s=a48k_zho&Cf.m3u8
快乐垂钓,$Url?sid=klcd&s=a48k_zho&Cf.m3u8
金鹰卡通,$Url?sid=jykt&s=a48k&Cf.m3u8
先锋乒羽,$Url?sid=xfpy&s=a48k_zho&Cf.m3u8
风尚购物,$Url?sid=fsgw&s=a48k_zho&Cf.m3u8
财富天下,$Url?sid=cftx&s=a48k_zho&Cf.m3u8
天元围棋,$Url?sid=tywq&s=a48k_zho&Cf.m3u8
摄影频道,$Url?sid=sypd&s=a48k_zho&Cf.m3u8
求索纪录,$Url?sid=qsjl&s=a48k_zho&Cf.m3u8
Eo;
die($Cf);
}
?>