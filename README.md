# Marcierge Blog

## みんなの質問コーナー
Q1. sass使いたいんですがどうしたらいいですか！  
A1. codekitを使おう！

Q2. codekit持ってない....  
A2. compassを使うか買いましょう！  

Q3. ローカルでwordpress動かしたい！  
A3. [MAMP](http://www.mamp.info/en/)や[XAMPP](https://www.apachefriends.org/jp/)がいいと思います。

Q4. サーバはどこにアップしますか？  
Q4. まだ準備中です。すいません

# deploy
## production
* bitbucketのproductionにpushすると反映されます
* [blog.ikikau.com](blog.ikikau.com)

|WPユーザ|PW|
|:----|:----|
|marcierge|pm5JzYnFbfYt3GOz|

## staging
* deploy用意中
* [staging-blog.ikikau.com](staging-blog.ikikau.com)


## ローカルテスト環境の構築(Mac)
### MAMPの設定方法

#### 1. MAMPのインストール
公式サイトからMAMPのパッケージを[ダウンロード](http://downloads4.mamp.info/MAMP-PRO/releases/3.0.5/MAMP_MAMP_PRO_3.0.5.pkg)しインストールする

#### 2. MAMPの設定をする
* MAMPを起動し「環境設定」で「ポート」タブに移動しApacheは「80」、 MySQLは「3306」にしてください
* 次に「PHP」タブに移動しPHPのバージョンを一番新しいバージョンに変更してください
* 「Apache」タブに移動しDocument Rootをプロジェクトフォルダ内の「public」に指定  
例 (/Users/hatch2/Develop/marcierge_blog/public)
* OKをおし環境設定画面を終了します
* MAMPアプリ画面の「サーバを起動」を押してウェブサーバとMySQLサーバを起動します


#### 3. MySQLに接続する
[sequel pro](http://www.sequelpro.com/)をダウンロードします

#### 4. sequel proでmampのmysqlに接続します
以下の画像のように接続情報を入力し「接続」を押してください
![mampのmysqlに接続](https://bitbucket.org/marcierge_project/marcierge_blog/downloads/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202014-05-17%2014.17.44.png)

#### 5. データベースを作成します
左上にある「データベースを選択」のプルダウンより「データベースを追加」を押して画面2のようにデータベース名に「ikikau_blog_development」、データベースのエンコード「UTF-8」を選択  
「追加」ボタンを押してデータベースを追加します
  
画面1  
![データベースを選択...](https://bitbucket.org/marcierge_project/marcierge_blog/downloads/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202014-05-17%2014.22.03.png)  
画面2  
![](https://bitbucket.org/marcierge_project/marcierge_blog/downloads/%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%83%E3%83%88%202014-05-17%2014.25.12.png) 

### ファイルを修正したけど反映されない
1. phpのキャッシュ機能が効いている可能性があるので[こちらのサイト](http://d.hatena.ne.jp/nakamura001/20131218/1387354549)を参考に設定をします