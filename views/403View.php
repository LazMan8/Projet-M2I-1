<head>
    <style>
        .error-403 
        {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333;
            color: #fff;

        }


        .error-403-content 
        {
            z-index: 1;
            position: relative;

        }


        .error-403-background 
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }


        .lock 
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background-image: url('lock.png');
            background-size: 100% 100%;
            animation: rotate-lock 3s infinite;
        }


        .shield 
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150px;
            height: 150px;
            background-image: url('shield.png');
            background-size: 100% 100%;
            animation: rotate-shield 3s infinite;
        }


        @keyframes rotate-lock 
        {
            0%
            {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            
            100% 
            {
                transform: translate(-50%, -50%) rotate(360deg);

            }

        }


        @keyframes rotate-shield 
        {
            0%
            {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% 
            {
                transform: translate(-50%, -50%) rotate(-360deg);
            }

        }   
    </style>
</head>

<div class="error-403">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="error-403-content">
                    <h1 class="display-1"><?= $strH1 ?></h1>
                    <h2>Acces refuser!</h2>
                    <p><?=$strPar?></p>
                    <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-primary">Go back to the :</a>
                    <a href="index.php" class="btn btn-secondary">Retour a la page d'accueil</a>
                </div>
            </div>
        </div>
    </div>
    <div class="error-403-background">
        <div class="lock">

        </div>
        <div class="shield"></div>
    </div>
</div>