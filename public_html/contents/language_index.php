<?php

// 各種変数初期化
$features = [];
$engines = ['C++', 'C#', 'Java', 'VB', 'PHP', 'JS', 'Ruby', 'Python', 'Perl'];
$originalEngines = $engines;

// 全データ読み込み
$table = file_get_contents(APP_ROOT . '/contents/language.txt');
$contents = generateContents($table, $engines, $features, $engines);

// テンプレート出力準備
$smarty->assign('engines', $originalEngines);
$smarty->assign('contents', $contents);

// 全セクション準備
/*
  section(
  '導入・管理',
  [
  'インストール',
  '起動・停止',
  '管理ログイン'
  ]
  );
 */
section('engine:エンジン/run:起動', [
	'対話起動',
	]
);

// メタ
section('meta:メタ/comment:コメント', [
	'行コメント',
	'ブロックコメント',
	]
);
section('meta:メタ/include:Include', [
	'Include',
	]
);

// 変数
section('variable:変数・定数/declare:変数宣言', [
	'変数宣言',
	'グローバル変数',
	'局所変数',
	]
);
section('variable:変数・定数/literal:整数リテラル', [
	'10進',
	'16進',
	'8進',
	'2進',
	]
);
section('variable:変数・定数/const:定数等', [
	'定数',
	'列挙型',
	]
);
section('variable:変数・定数/invalid:無効値', [
	'無効値',
	'無効判定',
	]
);

// 文字・文字列
section('string:文字・文字列/string-literal:文字・文字列リテラル', [
	'文字リテラル',
	'文字列リテラル',
	]
);
section('string:文字・文字列/string-op:文字列演算', [
	'文字列代入',
	'文字列比較',
	'文字列検索',
	'文字列抽出',
	'文字列結合',
	]
);
section('string:文字・文字列/inline:変数埋め込み等', [
	'文字列内変数埋め込み',
	'ヒアドキュメント',
	]
);

// 演算
section('calc:演算/logic:論理演算', [
	'論理OR',
	'論理AND',
	'論理NOT',
	]
);
section('calc:演算/bit:ビット演算', [
	'ビットOR',
	'ビットAND',
	'ビットNOT',
	'ビットXOR',
	]
);
section('calc:演算/bool:BOOL', [
	'True定数',
	'False定数',
	'True判定',
	'False判定',
	]
);

// 制御構造
section('control:制御/cond:分岐', [
	'If分岐',
	'Switch分岐',
	]
);
section('control:制御/floop:For系ループ', [
	'Forループ',
	'ForEachループ',
	]
);
section('control:制御/wloop:While系ループ', [
	'Whileループ',
	'DoWhileループ',
	]
);
section('control:制御/jump:ジャンプ', [
	'ループ抜け',
	'ループ継続',
	]
);
section('control:制御/exception:例外', [
	'例外送出',
	'例外Catch',
	]
);

// 高度
section('ex:構造/function:関数', [
	'関数定義',
	'参照渡し',
	]
);
section('ex:構造/class:クラス', [
	'クラス定義',
	'コンストラクタ',
	'デストラクタ',
	'インスタンス化',
	]
);
section('ex:構造/opover:演算子オーバーロード', [
	'演算子オーバーロード',
	]
);

// 出力
section('io:入出力/standard:標準入出力', [
	'標準出力',
	'標準入力',
	]
);
section('io:入出力/file:ファイル入出力', [
	'ファイル出力',
	'ファイル入力',
	]
);





/*
section('logic2:演算まとめ', [
	'論理演算',
	'ビット演算',
	'四則演算',
	]
);
*/



