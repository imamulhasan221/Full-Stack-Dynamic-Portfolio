<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
            background-color: aqua;
            justify-content: space-between;
            padding: 20px;
        }
        .nav_case{
            display: flex;
            justify-content: space-evenly;
            color: red;
        }
        .first_row{
            display: flex;
            justify-content: center;
            justify-content: space-between;


        }
        .second_row{
            display: flex;
            justify-content: space-between;
        }
        

    </style>
</head>
<body>
    <nav>
        <h1>Imamul Hasan </h1>
        <Ul class="nav_case">
            <li>
                about
            </li>

            <li>
                resarch project
            </li>

            <li>
                blog
            </li>            

            <li>
                social media 
            </li>
        </Ul>
    </nav>

    <section>
       <div class="first_row"> 
        <div class="image">
            <img src="{{asset('assets/images/img.png')}}" alt="">
        </div>

        <div class="about">
        <div>
            I'm a developer 
        </div>
      </div> 

     // new section
    
    <div class="second_row" >
        <div class="more_about">
            More about myself .
        </div>

        <div class="project">
             My project
        </div>


    </div>   
    

    </section>
</body>
</html>
