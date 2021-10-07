<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>観光地検索アプリ</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>



        <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                pause: 2000,
            });
        });
        
</script>


    <style>


            #shadow{

                font-family: Impact,serif;
                font-size:50px;
                color: white;
                text-shadow: black 1px 1px 2px ,teal 0 0 20px;  
            }

            h2{
                font-family: serif;
            }

            /*-- CSSの記述 --*/
            #pageTop {
                position: fixed;
                bottom: 20px;
                right: 20px;
            }
            #pageTop i {
                padding-top: 6px 
            }

            #pageTop a {
                display: block;
                z-index: 999;
                padding: 8px;
                border-radius: 30px;
                width: 35px;
                height: 35px;
                background-color: #9FD6D2;
                color: #ffffff;
                font-weight: bold;
                text-decoration: none;
                text-align: center;
            }
            #pageTop a:hover {
                text-decoration: none;
                opacity: 0.7;
            }

            body{
                background-color: azure;
                

            }

            #tweet {
                font-family: serif;
                font-size:30px;
                color: deepskyblue;
                text-shadow: darkslategray 1px 1px 2px ,teal 0 0 20px; 
            }
        </style>
        

    </head>

<body>
    <div id="shadow">観光地検索</div>

    <div class="slider">
    <img src="./slide/singapore-river.jpg" alt="" height="300">
	<img src="./slide/buildings.jpg" alt="" height="300">
	<img src="./slide/disney.jpg" alt="" height="300">
    <img src="./slide/venetian.jpg" alt=""  height="300">
    <img src="./slide/rough-horn.jpg" alt=""  height="300">
    </div>

    <h2>観光地検索フォーム</h2>
    <p>国名を入力してください</p>

    国名: <input type="text" id="reserchcountry" placeholder="例.フランス">
    <br>
    <br>
    <input type="button" value="検索" id="reserchButton">
    <br>
    <p id="result"></p>
    <br>

    <p id="pageTop"><a href="#"><i class="fa fa-chevron-up "></i></a></p>
   
    <script>


        const reserchButtonElement=document.getElementById("reserchButton");
        reserchButtonElement.addEventListener("click",function(){
             
             const country= document.getElementById("reserchcountry").value;//フォームに入力された国名を取得

             const resultElement=document.getElementById("result");

/*入力を繰り返す時、初期化する*/
              resultElement.innerHTML="";

             switch(country){
                 case "フランス":
                                 resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                 resultElement.innerHTML +="<h2>第1位 ルーブル美術館</h2>";
                                 resultElement.innerHTML +="<img src=./France/louvre.jpg >";

                                 resultElement.innerHTML +="<h2>第2位 ヴェルサイユ宮殿</h2>";
                                 resultElement.innerHTML +="<img src=./France/versailles.jpg >";

                                 resultElement.innerHTML +="<h2>第3位 エッフェル塔</h2>";
                                 resultElement.innerHTML +="<img src=./France/eiffel-tower.jpg>";
                                 
                                 

                                 break;

                case "ドイツ":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 ノイシュヴァンシュタイン城</h2>";
                                resultElement.innerHTML +="<img src='./German/neuschwanstein.jpg'>";

                                resultElement.innerHTML +="<h2>第2位 ケルン大聖堂</h2>";
                                resultElement.innerHTML +="<img src=./German/dom.jpg >";

                                resultElement.innerHTML +="<h2>第3位 ハイデルベルク城</h2>";
                                resultElement.innerHTML +="<img src=./German/castle.jpg>";

                                break;

                 case "スペイン":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 サグラダファミリア教会</h2>";
                                resultElement.innerHTML +="<img src='./Spain/sagrada-familia.jpg'>";

                                resultElement.innerHTML +="<h2>第2位 グエル公園</h2>";
                                resultElement.innerHTML +="<img src=./Spain/gaudi.jpg >";

                                resultElement.innerHTML +="<h2>第3位 カサ・バトリョ</h2>";
                                resultElement.innerHTML +="<img src=./Spain/barcelona.jpg>";

                                break;

                 case "イタリア":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 コロッセオ</h2>";
                                resultElement.innerHTML +="<img src='./Italy/the-colosseum.jpg'>";

                                resultElement.innerHTML +="<h2>第2位 トレヴィの泉</h2>";
                                resultElement.innerHTML +="<img src='./Italy/trevi-fountain.jpg'>";

                                resultElement.innerHTML +="<h2>第3位 サンタ・マリア・デル・フィオーレ大聖堂</h2>";
                                resultElement.innerHTML +="<img src=./Italy/florence.jpg>";

                                break;   

                  case "イギリス":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 バッキンガム宮殿</h2>";
                                resultElement.innerHTML +="<img src=./English/london.jpg>";

                                resultElement.innerHTML +="<h2>第2位 大英博物館</h2>";
                                resultElement.innerHTML +="<img src=./English/the-british.jpg>";

                                resultElement.innerHTML +="<h2>第3位 ビッグ・ベン</h2>";
                                resultElement.innerHTML +="<img src=./English/london-bridge.jpg>";

                                break;    

                   case "日本":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 伏見稲荷神社</h2>";
                                resultElement.innerHTML +="<img src=./Japan/fushimi-inari.jpg>";

                                resultElement.innerHTML +="<h2>第2位 宮島</h2>";
                                resultElement.innerHTML +="<img src=./Japan/building.jpg>";

                                resultElement.innerHTML +="<h2>第3位 清水寺</h2>";
                                resultElement.innerHTML +="<img src=./Japan/temple.jpg>";

                                break;       

                    case "韓国":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 明洞</h2>";
                                resultElement.innerHTML +="<img src=./Korea/myeongdong.jpg>";

                                resultElement.innerHTML +="<h2>第2位 東大門デザインプラザ</h2>";
                                resultElement.innerHTML +="<img src=./Korea/modern.jpg>";

                                resultElement.innerHTML +="<h2>第3位 ソウルタワー</h2>";
                                resultElement.innerHTML +="<img src=./Korea/lotte-world-tower.jpg>";

                                break; 

                     case "中国":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 天安門</h2>";
                                resultElement.innerHTML +="<img src=./China/beijing-china.jpg>";

                                resultElement.innerHTML +="<h2>第2位 故宮</h2>";
                                resultElement.innerHTML +="<img src=./China/beijing.jpg>";

                                resultElement.innerHTML +="<h2>第3位 万里の長城</h2>";
                                resultElement.innerHTML +="<img src=./China/painting.jpg>";

                                break;    

                    case "シンガポール":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 マーライオンパーク</h2>";
                                resultElement.innerHTML +="<img src=./Pole/merlion.jpg>";

                                resultElement.innerHTML +="<h2>第2位 マリーナ ベイ サンズ</h2>";
                                resultElement.innerHTML +="<img src=./Pole/marina-bay-sands.jpg>";

                                resultElement.innerHTML +="<h2>第3位 ガーデンズ・バイ・ザ・ベイ</h2>";
                                resultElement.innerHTML +="<img src=./Pole/garden.jpg>";

                                break;

                    case "オーストラリア":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 オペラハウス</h2>";
                                resultElement.innerHTML +="<img src=./Australia/sydney-opera-house.jpg>";

                                resultElement.innerHTML +="<h2>第2位 シドニー ハーバーブリッジ</h2>";
                                resultElement.innerHTML +="<img src=./Australia/sydney.jpg>";

                                resultElement.innerHTML +="<h2>第3位 エアーズロック</h2>";
                                resultElement.innerHTML +="<img src=./Australia/uluru.jpg>";

                                break; 

                    case "アメリカ":
                                resultElement.innerHTML ="「"+country+"」"+"の観光地ランキングベスト3！<br>";
                                resultElement.innerHTML +="<h2>第1位 タイムズスクエア</h2>";
                                resultElement.innerHTML +="<img src=./America/times-square.jpg>";

                                resultElement.innerHTML +="<h2>第2位 自由の女神</h2>";
                                resultElement.innerHTML +="<img src=./America/statue-of-liberty.jpg>";

                                resultElement.innerHTML +="<h2>第3位 セントラルパーク</h2>";
                                resultElement.innerHTML +="<img src=./America/central-park.jpg>";

                                break;                                                                                                                                                                          
                default:
                                resultElement.innerHTML ="該当する国はありません.";
                                break;
             
            }

            //page topボタン
            $(function(){
            var topBtn=$('#pageTop');
            topBtn.hide();

        //ボタンの表示設定
            $(window).scroll(function(){
                if($(this).scrollTop()>80){
            //---- 画面を80pxスクロールしたら、ボタンを表示する
                topBtn.fadeIn();
                }else{
            //---- 画面が80pxより上なら、ボタンを表示しない
                topBtn.fadeOut();
                } 
            });

            //ボタンをクリックしたら、スクロールして上に戻る
                topBtn.click(function(){
                $('body,html').animate({
                scrollTop: 0},500);
                return false;
                });

            });  

        },false);

    </script>

<?php
require 'TwistOAuth.phar';

$consumer_key = '8vRlXNwdw9AFH437WkrLcGKkb';
$consumer_secret = 'jdsHWgdpkGIja7BWDeSACFAHB3v2VxOgaQcabccWKljqKBsGwN';
$access_token = '2959664821-QgOfQhRY0UQ3m4M6ySnW8dfwB2ZFJfexWS2boyJ';
$access_token_secret = 'nhEav7INd1ZvVfFh6LPSIdlZ7h0dHYCVNak8Q5tCZHpEf';

$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$tweets_params = ['q' => '海外旅行  AND 楽しかった ' ,'count' => '2'];


$tweets = $connection->get('search/tweets', $tweets_params)->statuses;

echo '<div id="tweet">旅行について最新Tweet', '', '', '<br /></div>';

foreach ($tweets as $value) {
    $text = htmlspecialchars($value->text, ENT_QUOTES, 'UTF-8', false);

    // ツイート表示のHTML生成
    disp_tweet($value, $text);
}

function disp_tweet($value, $text){
    $icon_url = $value->user->profile_image_url;
    $screen_name = $value->user->screen_name;
    $updated = date('Y/m/d H:i', strtotime($value->created_at));
    $tweet_id = $value->id_str;
    $url = 'https://twitter.com/' . $screen_name . '/status/' . $tweet_id;

    
    echo '<div class="tweetbox">' . PHP_EOL;
    echo '<div class="thumb">' . '<img alt="" src="' . $icon_url . '">' . '</div>' . PHP_EOL;
    echo '<div class="meta"><a target="_blank" href="' . $url . '">' . $updated . '</a>' . '<br>@' . $screen_name .'</div>' . PHP_EOL;
    echo '<div class="tweet">' . $text . '</div>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
}
?>

</body>
</html>