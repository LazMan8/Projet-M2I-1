<head>
    <style>
       .error-404 
        {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f7f7f7;
            color: #333;

        }


       .error-404-content 
        {
            z-index: 1;
            position: relative;

        }


       .error-404-background 
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }


       .cloud 
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150px;
            height: 150px;
            background-image: url('cloud.png');
            background-size: 100% 100%;
            animation: move-cloud 3s infinite;
        }


       .plane 
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background-image: url('plane.png');
            background-size: 100% 100%;
            animation: move-plane 3s infinite;
        }


        @keyframes move-cloud 
        {
            0%
            {
                transform: translate(-50%, -50%) translateX(0);
            }
            
            100% 
            {
                transform: translate(-50%, -50%) translateX(-100px);

            }

        }


        @keyframes move-plane 
        {
            0%
            {
                transform: translate(-50%, -50%) translateX(0);
            }

            100% 
            {
                transform: translate(-50%, -50%) translateX(100px);
            }

        }   
    </style>
</head>

<div class="error-404">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="error-404-content">
                    <h1 class="display-1"><?= $strH1?></h1>
                    <h2>Page not found!</h2>
                    <p><?=$strPar?></p>
                    <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-primary">Go back to the :</a>
                    <a href="index.php" class="btn btn-secondary">Retour a la page d'accueil</a>
                </div>
            </div>
        </div>
    </div>
    <div class="error-404-background">
        <div class="cloud">

        </div>
        <div class="plane"></div>
    </div>
</div>