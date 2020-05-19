<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <div class="global-container">
        
        <div class="card login-form">
            
        <div class="card-body">
        
           
                <!--
                <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                <form>
                    <h3 class="green h5">Login to Corpers Apartment</h3>

                    <!-- to error: add class "has-danger" -->
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="h3">Username or Email</label>
                        <input type="email" class="form-control form-control-lg" placeholder="adewalechukwuka@example.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="h3">Password</label>
                        <a href="#" style="float:right;font-size:12px;" class="green">Forgot password?</a>
                        <input type="password" class="form-control form-control-lg" placeholder="**********" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                    <div class="or pt-2">or sign in with your social network</div>
                    <div class="flex flex-wrap center">
                        <div class="p-1">
                            <a href="#" class="btn-floating btn-outline-secondary btn-lg gg" type="button" role="button"><i class="fa fa-google"></i>Google</a>
                        </div>
                        <div href="#" class="p-1">
                            <a href="#"  class="btn-floating btn-lg btn-fb fb" type="button" role="button"><i class="fa fa-facebook"></i> Facebook</a>
                        
                        </div>

                            <div class="p-1">
                                <a href="#" class="btn-floating btn-lg btn-tw twt" type="button" role="button"><i class="fa fa-twitter"></i>Twitter</a>
                            </div>
                        
                    </div>
                    <div class="sign-up" style="font-size: 12px;">
                        Don't have an account? <a href="#" class="green">Create One</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>