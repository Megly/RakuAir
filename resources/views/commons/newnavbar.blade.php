<div class="cp_cont">
    <div class="cp_offcm01">
            <input type="checkbox" id="cp_toggle01">
            <label for="cp_toggle01"><span></span></label>
        <div class="cp_menu">
        <ul>
            <li>
                <a href="{{ route('feel.get')}}">
                   <i class="fa fa-home fa-2x"></i>
                   <span class="nav-text">Feel</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('result.get')}}">
                    <i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text">Graph</span>
                </a>
            </li>
                
            <li>
                <a href="{{ route('map.get')}}">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text">Map</span>
                </a>
            </li>
                
            <li>
                <a href="{{ route('logout.get')}}">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>  
            
            <li>
               
<p><?php
  $you = Auth::user()->feel;
 if ($you>0) {
    echo "<img class='hot' src='images/hoticon2.png'></img>";}
 elseif ($you==0) {
    echo "<img class='hot' src='images/thumbup.png'></img>";}
 else {
    echo "<img class='hot' src='images/coldicon2.png'></img>";}
    
?>
</p>

                
            </li>
            
        </ul>
        </div>
    </div>
</div>

