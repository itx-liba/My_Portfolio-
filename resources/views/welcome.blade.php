<!DOCTYPE html>
<html>
<head>
    <title>Laiba Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            margin:0;
            height:100vh;
            background:url('{{ asset("images/bg1.jpeg") }}');
            background-size:cover;
            background-position:center;
            overflow-x:hidden;

        }

        .overlay{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,.75);
        }

        .hero-content{
            position:relative;
            z-index:2;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            text-align:center;
            color:white;
        }

        .hero-content h1{
            font-size:5rem;
            font-weight:800;
        }

        .hero-content span{
            color:#e7b65c;
        }

        .hero-content p{
            font-size:1.3rem;
            color:#d1d5db;
            margin:20px 0;
        }

        
        .enter-btn{
            background:#e7b65c;
            color:black;
            font-weight:700;
            padding:15px 40px;
            border-radius:40px;
            text-decoration:none;
            transition:.4s;
        }



    </style>

</head>

<body>

<div class="overlay"></div>

<div class="hero-content">

    <h1>
        Hi, I'm <span>Laiba</span>
    </h1>

    <p>
        Full Stack Developer | Laravel Developer
    </p>

    <a href="{{ route('portfolio') }}" class="enter-btn">
        Enter Portfolio
    </a>

</div>

</body>
</html>