<?php
$user = \Auth::user();
$userteam = $user->team;  
?>
        

<div class = 'clearbtnparent'>
        @if($userteam == 1 || $userteam == 7)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'glyphicon glyphicon-warning-sign clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 12)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 2 || $userteam == 3 || $userteam == 4 || $userteam == 8 || $userteam == 9 || $userteam == 10)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2c' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 13 || $userteam == 14 || $userteam == 15)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2d' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        
        @elseif($userteam == 5 || $userteam == 6 || $userteam == 11 || $userteam == 21)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        
        @elseif($userteam == 16 || $userteam == 27)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
</div>
        
        
<div class = 'clearbtnparent'>
        @elseif($userteam == 17 || $userteam == 18 || $userteam == 19 || $userteam == 22 || $userteam == 23 || $userteam == 24)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3a' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 28 || $userteam == 29 || $userteam == 30)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3b' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 20 || $userteam == 25 || $userteam == 26)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3c' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 31 || $userteam == 32)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3d' ], 'method' => 'put', 'onSubmit' => 'return checkSubmit()']) !!}
                {!! Form::submit('⚠︎Adjusted', ['class' => 'clearbtnparent blink-adjusthot btn-block']) !!}
                {!! Form::close() !!}
        </div>
        
</div>
        

@endif

<script type="text/javascript">
function checkSubmit() {
	return confirm("⚠︎Did you really adjust the temperature？");
}
</script>
        </div>
