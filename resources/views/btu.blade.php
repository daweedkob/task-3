@guest
    <body style='background-color: black'>
        <h1 style='color:red'>This is about page for guests only! If you want to see more <a style="color:green" href="/login">Log In</a> or if you don't have an account <a style='color:yellow' href="/register">Register</a> one for free!</h1>
    </body>
@endguest
@auth

<!DOCTYPE html>
<html id="itdc">
<head>
    <meta charset="utf-8"/>
    <title>BTU Classroom</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/res/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/res/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/res/img/favicon-16x16.png">
    <link rel="manifest" href="/res/img/manifest.json">
    <link rel="mask-icon" href="/res/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="none"/>
    <meta name="author" content="LONGMAN"/>
    	<link href="https://classroom.btu.edu.ge/res/css/default-2ed4f464ec.css?v=5" rel="stylesheet" type="text/css" media="screen" />
	<link href="https://classroom.btu.edu.ge/res/css/project-60ac87169b.css?v=5" rel="stylesheet" type="text/css" media="screen" />
	<link href="https://classroom.btu.edu.ge/res/css/print.css?v=5" rel="stylesheet" type="text/css" media="print" />
    	<script src="https://classroom.btu.edu.ge/res/js/default-dec48b9be5.js?v=5" type="text/javascript"></script>
	<script src="https://classroom.btu.edu.ge/res/js/project-de2915e69a.js?v=5" type="text/javascript"></script>


    </head>

<body>
<div class="navbar navbar-inverse navbar-static-top head_navbar custom_navbar_inner" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" style="margin-top:7px;" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".my_top_menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand BPGSquareMtavruli" id="logo" style="padding: 5px 15px;" href="#">
                <img src="https://classroom.btu.edu.ge/res/img/logo-short.svg" style="width:60px;height:40px;display:inline-block;" alt="Classroom" />
                Classroom
            </a>
        </div>

            <div class="navbar-collapse collapse navbar-right my_top_menu">
                <ul class="nav navbar-nav custom_nav_template">

                </ul>
            </div>
                    <div class="navbar-collapse collapse navbar-right my_top_menu">

	    <ul class="nav navbar-nav custom_nav_template">
        <li>
            <a href="#" title="პროფილი" class="navbar-link">
                {{ $user->name }}           </a>
        </li>
                <li>
                    <form style='padding-top:1rem' method="POST" action="{{ route('custom.logout') }}" >
                        <button class="btn btn-sm btn-danger">Log Out</button>
                    @csrf
                    <input type="hidden" name="_method"/>
                </form>
        </li>
    </ul>
    <div id="balanceModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="balanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
<div class="clear"></div>

<div class="container-fluid">
    <div class="row">
        	<div class="col-md-6 custom_margin_facultets">
	</div>
	<div class="col-md-18">
			    <fieldset>
	<legend>User Information</legend>


		<div class="">
		<table class="table table-striped table-bordered table-hover fluid">
			<thead>
				<tr>
					<th>სახელი</th>
					<th>სქესი</th>
					<th>მეილი</th>
					<th>დაბ.თარიღი</th>
				</tr>
			</thead>
			<tbody>
				<th>{{ $user->name }}</th>
				<th>{{ $user->gender }}</th>
				<th>{{ $user->email }}</th>
				<th>{{ $user->name }}</th>

			</tbody>

		</table>
	</div>
	</fieldset>	    <div class="promo-ads hidden-xs table-responsive" data-id="221" data-width="728" data-height="90"></div>
	</div>
    </div>


    <hr/>
    <footer>
        <span class="pull-left">&copy; Classroom - ბიზნესისა და ტექნოლოგიების უნივერსიტეტი</span>
        <span class="pull-right">შექმნილია David Kobalia-ს მიერ</span>
    </footer>
</div>

</body>
</html>
@endauth
