<?php include('../app/scripts/signup.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notepad Lite | Signup</title>
        <meta charset="utf-8" lang="en">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <meta name="keywords" content="note pad notepad memo">
        <meta name="description" content="A simple note taking app">

        <link type="text/css" rel="stylesheet" href="../assets/content/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="../assets/content/font-awesome.min.css">
    </head>
    
    <body>
        <section class="container">
            <div class="jumbotron">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="container">
                            <?php if( isset($error)): ?>
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>

                            <?php if( isset($success)): ?>
                                <div class="alert alert-success alert-dismissable" role="alert">
                                    <?php echo $success; ?>
                                </div>
                                <?php $email=""; $auth=""; $confirm="" ?>
                            <?php endif; ?>
                        </div>  

                        <form id="signup" class="form form-validate" action="signup.php" method="post">
                            <div class="container">
                                <div class="text-center">
                                    <header class="text-center">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> Sign Up </span>
                                    </header>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label" for="email"><i class="fa fa-mail" aria-hidden="true"></i> E-mail </label>
                                                <input name="email" id="email" required class="form-control" type="email" value="
                                                <?php if( isset($email)){ echo $email; } ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label" for="auth"><i class="fa fa-key" aria-hidden="true"></i> Password </label>
                                                <input name="auth" id="auth" required data-rule-minlength="6" class="form-control" type="password" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label" for="confirm"><i class="fa fa-key" aria-hidden="true"></i> Enter password again </label>
                                                <input name="confirm" id="confirm" required data-rule-minlength="6" class="form-control" type="password" />
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <div class="form-group">
                                                <button class="btn btn-default btn-raised btn-loading-state" data-loading-text="<i class='fa fa-spinner spin'></i> Processing..." name="submit" type="submit" value="submit"><i class="fa fa-upload"></i> Signup!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>                      
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </section>

        <script src="../assets/scripts/jquery-1.12.4.min.js"></script>
        <script src="../assets/scripts/bootstrap.min.js"></script>
    </body>
</html>