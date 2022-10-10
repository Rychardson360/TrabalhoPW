<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
            [class*= "col"]{
                border: 1px solid #e77f67;
                height: 18vw;
                border-radius: medium;
            }
            body{
              background-color: antiquewhite;
              background-repeat: no-repeat;
              background-size: cover;
              background-position: center;
            }
            #main{
              margin: 0 auto;
              text-align: center;
              border-radius: 10px;
              font-size: xx-large;
              font-family: Georgia, 'Times New Roman', Times, serif;
              font-weight: bolder;
            }
            .btn{
               background-color: chocolate;
            }
            #i01{
               background-image: url(Cozinha/interior_cozinha01.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i02{
               background-image: url(Cozinha/interior_cozinha02.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i03{
               background-image: url(Cozinha/interior_cozinha03.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i04{
               background-image: url(Quarto/interior_quarto01.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i05{
               background-image: url(Quarto/interior_quarto02.png);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i06{
               background-image: url(Quarto/interior_quarto03.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i07{
               background-image: url(Sala/interior_sala01.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i08{
               background-image: url(Sala/interior_sala02.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
            #i09{
               background-image: url(Sala/interior_sala03.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;
            }
    </style>
</head>
<body>
  <div id="main"><i>Galeria de Imóveis</i></div>
  <br>
    <div class="container">
        <div class="row">
            <div class="col" id="i01"> - </div>
            <div class="col" id="i02"> - </div>
            <div class="col" id="i03"> - </div>
        </div>
        <div class="row">
            <div class="col" id="i04"> - </div>
            <div class="col" id="i05"> - </div>
            <div class="col" id="i06"> - </div>
        </div>
        <div class="row">
            <div class="col" id="i07"> - </div>
            <div class="col" id="i08"> - </div>
            <div class="col" id="i09"> - </div>
        </div> 

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>