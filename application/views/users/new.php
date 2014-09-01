<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to Kira</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <!-- JQuery before loading Bootstrap JavaScript -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Diary</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">About</a></li>
                        <li class="active"><a href="/users/users_new">Register</a></li>
                        <li><a href="/sessions/sessions_new">Login</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class='container'>
            <div id="input" class='row'>
                <div class='col-sm-6 col-sm-offset-3'>
                    <form id="process_user" action='/users/users_create/' method='post'>
                        <h2>Join</h2>
                        <p>
                            <label>Penname</label>
                            <input type="text" name="penname">
                        </p>
                        <p>
                            <label>Email (optional)</label>
                            <input type="text" name="penname">
                        </p>
                        <p>
                            <label>Password</label>
                            <input type="password" name="password">
                        </p>
                        <p>
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password">
                        </p>
                        <p class="submit">
                            <input class="btn btn-sm btn-default" type="submit" value="Register">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
