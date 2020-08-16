# headlessCmsTest

microCMSの検証用のリポジトリです。


//以下でアカウントを発行して、apiの設定を行う
https://microcms.io/

//実行方法
```
git clone https://github.com/manafukurou/headlessCmsTest.git
cd headlessCmsTest
docker-compose up -d 
```
// microCMSから取得したデータを以下に設定
public/config.php
```
define("HEADLESS_CMS_ENDPOINT", "https://xxxxxxxxxxxx.microcms.io/api/v1/xyz");//microCMSで設定したURL
define("API_KEY", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx");//microCMSから取得したkey
```
