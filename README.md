#COACHTECHフリマアプリ

coachtechスクールカリキュラム、模擬案件で実践に近い開発プログラムの案件の経験を積むテスト形式の練習

##概要

-フリマアプリ

-シンプルなフリマアプリの作成

-アイテムの出品と購入を行うためのアプリ

##環境構築

###Dockerビルド

１．
'''git@github.com:akito1012/coachtechFurima.git'''

２．DockerDesktopアプリを立ち上げる

３．
'''docker-compose up -d --build

ARM64の場合以下の文をmysqlとphpmyadminのimageの下に張り付ける

'''platform:"linux/x86_64"

###Laravel環境構築

１．
'''docker-compose exec php bash

２．
'''composer install

３．「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成

４．.envに以下の環境変数を追加

'''DB_CONNECTION=mysql
'''DB_HOST=mysql
'''DB_PORT=3306
'''DB_DATABASE=laravel_db
'''DB_USERNAME=laravel_user
'''DB_PASSWORD=laravel_pass

