@extends('layouts.app')

@section('content')

@include('commons.newnavbar')


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>RakuAir</title>
        <link rel="stylesheet" href="stylesheet.css">
        
    </head>
        <header>
            <h1 class = "intrologo"><img src="images/RakuAirBlack.png" alt="rakuairlogo"><h1>
            <h1 class = "life"><p>~Comfortable Life to you all~</p></h1>

        </header>
        
        
        <body>
            
            <div class = "body1">
         
            <h1>Introduction</h1>
            <p>We have been worring about the room temperature for a long time.<br>
            Despite you want to change the temperature, lots of factors had been preventing you from doing that.<br>
            That suffering ends today. 
            Once you use RakuAir, you can set you feeling, check others.<br>
            RakuAir definitely brings great comfort to you all.<br>
               
            <!--突然ですが、「暑いなー」又は「寒いなー」と思うこと多くありませんか？　-->
            <!--そういう思いを持ちながらも、他の人を配慮してせっかくのエアコンも操作するのが躊躇されてしまいますよね。。。<br>-->
            <!--そんなお悩みを解決するのがこのRakuAirです！<br>-->
            <!--このアプリではTribeごと、Teamごとにどれだけの人が暑いや寒いと感じているか一目で分かります！<br>-->
            <!--室温を何度上げたら/下げたら良いのかということも同時に表示されるので、全ての人に快適な温度が提供されます。-->
            <!--このRakuAirによってあなたの生活は劇的に変化するのです！<br>-->
            <!--Let's try this out!!-->
            </p>
            
            <div class = "body2">
             <h1>How to Use RakuAir</h1>
             <p> You can manage everyting in very simple way.
               <!--  <ol>-->
            　　 <!--<li><p><i class="fa fa-map-marker fa-2x"></i>  : 現在のページです。使用方法、仕組みを説明します。</p></i></li>-->
               <!--  <li><p><i class="fa fa-home fa-2x"></i>  : 暑い、寒いの入力を好きな時にできます。</p></i></li>-->
               <!--  <li><p><i class="fa fa-bar-chart-o fa-2x"></i>  : 様々な視点から現在のデータを表示させます。</p></i></li>-->
               <!--  <li><p><i class="fa fa-map-marker fa-2x"></i>  : Tribeごとのマップを表示させ、それぞれの寒暖が一目で分かります。</p></i></li>-->
               <!--  <li><p><i class="fa fa-power-off fa-2x"></i>  : ログアウトします。</p></i></li>-->
               <!--  </ol>-->
                 
                 <h2>Procedure</h2>
                 <p><ol>
                     <li>1.Please choose your feeling from <i class="fa fa-home fa-2x"></i>.</li><br>
                     <li>2.Please check the feeling of your tribe.<br>
                     You can also check the feel of the team by clicking the detail box.</li><br>
                     <li>3.Plase adjust air conditionar as it says. </li><br>
                     <li>4.After adjusting, plase push"clear" button to refresh data.</li>
                 </ol></p>
             </p>
             </div>
             
                <h2>Bar in the right</h2>
             <ol>
            　　 <li><p><i class="fa fa-map-marker fa-2x"></i>  : Current page you are lokking to. You can check how it works and details.</p></i></li>
                 <li><p><i class="fa fa-home fa-2x"></i>  : You can claim your feeling whenever and whereever you like.</p></i></li>
                 <li><p><i class="fa fa-bar-chart-o fa-2x"></i>  : Showing each data from lots of perspectives.</p></i></li>
                 <li><p><i class="fa fa-map-marker fa-2x"></i>  : You can see where is comfortable using the map of training room.</p></i></li>
                 <li><p><i class="fa fa-power-off fa-2x"></i>  : Logging out.</p></i></li>
             </ol>
              
             
              <h1>Uniqueness</h1>
              <!--<p>このRakuAirでは、性別や体質等でポイントが分けられています。ポイントは、－６ポイントから６ポイントまであり、そのポイントをベースに集計や差分を出しています。-->
              <!--　　　<ol>-->
              <!--　　　  例：男性の暑がり　→　hot:1pt comfortable:0pt cold:-6pt<br>-->
              <!--　　　  　　  女性の寒がり　→　hot:6pt comfortable:0pt cold:-2pt<br>-->
              <!--　　　</ol>-->
              <!--　　例のように、ポイントを分けることによって、より正確なデータを算出することができるのです。これがRakuAirの力です！！-->
              
              <!--</p>-->
              
               <p>There is a secret in this wonderful application.  That is, point system. We make points from -6 to 6 to calculate exact data.<br>
                  The points are based on sex and body characters and so on.</p>
               
              　　　<ol>
              　　　  ex：Atsugari  Man  →　hot:1pt   comfortable:0pt   cold:-6pt<br>
              　　　  　　  Samugari Woman　→　hot:6pt   comfortable:0pt  cold:-2pt<br>
              　　　</ol>
              　<p>　As shown, RakuAir make it possible to calculate exact data. <br>
              　　THIS IS RAKUAIR.</p>
              
             
              
              </div> 
              
   
        </body>
        
        
        <div class = "footer2">
        <footer>
            <p>Now, let's say hello to RakuAir!</p>
        </footer>
        </div>
        
        
</html>
        
      