# Laravel復習課題

## 課題内容
<small>※この課題はLaravel Lessonで使用したプロジェクトをそのまま使用します。</small>

  - Lv1: `/gizumo_lv1`にアクセスしてブラウザに`gizumo`の文字列表示(条件としてcontroller作成・使用)
  - Lv2: `/gizumo_lv2`にアクセスしてブラウザに表示されるフォームから送信された情報をcontrollerで受取りブラウザにその内容を表示(フォーム送信先のURIは研修生任意)  
    ※フォームのテンプレはこちらで用意(lv2.blade.php)
  - Lv3: `prefecturesテーブル`を作成&初期データ(関東のみ)を用意して投入  
    |カラム|型|説明|
    |:---:|:---:|:---:|
    |id|INT|インクリメントID|
    |pref|VARCHAR|都道府県名|
    |city|VARCHAR|県庁所在地|
  - Lv4: `/gizumo_lv4`にアクセスし`prefecturesテーブル`から値を全件取得して「〇〇県の県庁所在地は××です。」と1行ずつ改行してブラウザに表示  
    ※viewテンプレはこちらで用意(lv4.blade.php)

---

※ `lv` 各ディレクトリ内のマークダウンに課題内容の詳細が記述されていますので、着手前に一読ください。

## 制限時間
- Lv1：30min
- Lv2：1h
- Lv3：1.5h
- Lv4：2h
