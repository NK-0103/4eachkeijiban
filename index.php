<!DOCTYPE htme>
<html lang="ja">
    
    <head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <img src="4eachblog_logo.jpg">
    <header>
    <div class="header1">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main-container">
            <div class="left_box">
                <div class="h1_1">
                    <h1>プログラミングに役立つ掲示板</h1>
                </div>
                <div class="QA_form">
                <form method="post" action="insert.php">
                <div>
                <div class="h1_2">
                    <h2>入力フォーム</h2>
                </div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="50" name="handlename">
                    </div>
                    <br>
                <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="50" name="title">
                </div>
                <div>
                <br>
                <label>コメント</label>
                <br>
                <textarea name="comments" rows="10" cols="50"></textarea>
                </div>
                <br>
                <div>
                <input type="submit" class="submit" value="投稿する">  
                </div>   
                </form>
             

                </div>
             
            </div>
                <div class="right_box">
                <h1>人気の記事</h1>
                <ul class="rbox">
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ　Top5</li>
                    <li>HTMLの基礎</li>
                </ul>

                <h1>オススメリンク</h1>
                <ul class="rbox">
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>

                <h1>カテゴリ</h1>
                <ul class="rbox">
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
         </div>

                
    </main>
    <footer>
        copyright© internous | 4each blog the which provides A to Z about programming.

    </footer>
            
</body>
</html>
