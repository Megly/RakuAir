@extends('layouts.app')

@section('content')

$sql = "insert users [hot_cold] values +1"
    
    @if (isset($_POST["sub1"])) {
        $kbn = htmlspecialchars($_POST["sub1"], ENT_QUOTES, "UTF-8");
        switch ($kbn) {
            case "登録する": echo "登録処理"; break;
            case "変更する": echo "変更処理"; break;
            default:  echo "エラー"; exit;
        }
    }

    @endif

<form method="POST" action="">
<input type="submit" value="登録する" name="sub1">　
<input type="submit" value="変更する" name="sub1">　
</form>

@endsection