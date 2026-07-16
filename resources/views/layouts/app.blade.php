<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laiba Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root{
    --primary:#f5d444;
    --secondary:#e7b65c;
    --dark:#050505;
    --card:#111111;
    --text:#ffffff;
    --muted:#bdbdbd;
}

body{
    background:#050505;
    color:#ffffff;
    font-family:'Poppins',sans-serif;
}

/* NAVBAR */

.custom-navbar{
    background:rgba(0,0,0,.95);
    backdrop-filter:blur(10px);
    padding:18px 0;
    border-bottom:1px solid rgba(0,255,102,.15);
}

.navbar-brand{
    color:#e7b65c !important;
    font-size:2rem;
    font-weight:800;
    letter-spacing:2px;
}

.nav-link{
    color:#fff !important;
    margin:0 15px;
    text-transform:uppercase;
    font-size:14px;
    font-weight:600;
    position:relative;
}

.nav-link::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-5px;
    width:0;
    height:2px;
    background:#e7b65c;
    transition:.3s;
}

.nav-link:hover::after{
    width:100%;
}

.nav-link:hover{
    color:#e7b65c !important;
}

.hire-btn{
    background:#e7b65c;
    color:black;
    font-weight:700;
    padding:10px 24px;
    border-radius:30px;
}

.hire-btn:hover{
    background:white;
}

/* HERO */

.hero-section{
    min-height:100vh;
    display:flex;
    align-items:center;
    background:
    linear-gradient(
    rgba(0,0,0,.75),
    rgba(0,0,0,.75)),
    url('/images/bg.jpg');

    background-size:cover;
    background-position:center;
}

.hero-title{
    font-size:3rem;
    font-weight:600;
    line-height:1.1;
    text-transform:uppercase;
}

.hero-title span{
    color:var(--primary);
}

.hero-subtitle{
    color:var(--primary);
    text-transform:uppercase;
    letter-spacing:1px;
    margin-bottom:20px;
}

.hero-text{
    color:#cfcfcf;
    font-size:1.1rem;
    max-width:500px;
    margin:25px 0;
}

.hero-image{
    max-width:500px;
    filter:drop-shadow(0 0 20px rgba(231, 163, 16, 0.3));
}

/* BUTTONS */

.btn-primary{
    background:var(--primary);
    border:none;
    color:black;
    font-weight:700;
    padding:14px 30px;
    border-radius:5px;
    text-transform:uppercase;
}

.btn-primary:hover{
    background:#ffffff;
    color:black;
}

.btn-outline-light{
    border:2px solid var(--primary);
    color:var(--primary);
}

.btn-outline-light:hover{
    background:var(--primary);
    color:black;
}

p{
    color: #e7b65c;
}

/* ABOUT */

#about{
    background:#080808;
}

#about p{
    color:#cfcfcf;
    line-height:1.9;
}

/* HEADINGS */

section h2{
    color:white;
    text-transform:uppercase;
    font-weight:800;
    margin-bottom:50px;
}

section h2::after{
    content:'';
    display:block;
    width:80px;
    height:4px;
    background:var(--primary);
    margin:15px auto;
}

/* SKILLS SECTION */

#skills{
    background:#050505;
}

.skill-circle{
    width:100px;
    height:100px;
    margin:auto;

    border:6px solid #e7b65c;
    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    color:#e7b65c;
    font-size:28px;
    font-weight:700;

    box-shadow:0 0 20px rgba(0,255,102,.3);

    transition:.4s;
}

.skill-circle:hover{
    transform:scale(1.08);
    box-shadow:0 0 35px #fcbc46;
}

#skills h5{
    color:white;
    margin-top:15px;
    font-size:18px;
    font-weight:600;
}

/* PROJECTS */

#projects{
    background:#080808;
}

.project-card{
    background:#111111;
    border:1px solid rgba(0,255,102,.15);
    border-radius:10px;
    transition:.4s;
    height:100%;
}

.project-card:hover{
    transform:translateY(-10px);
    box-shadow:0 0 25px rgba(0,255,102,.2);
}

.project-card .card-body{
    color:white;
}

.project-card p{
    color:#bdbdbd;
}

/* STATS */

#stats{
    background:#050505;
}

#stats h1{
    color:var(--primary);
    font-size:4rem;
    font-weight:900;
}

#stats p{
    color:white;
}

/* CONTACT SECTION */

.green-text{
    color:#e7b65c !important;
}

.contact-section{
    background:#050505;
    padding:120px 0;
}

.contact-title{
    color:#fff;
    font-size:3rem;
    font-weight:800;
    margin-bottom:20px;
}

.contact-description{
    color:#bdbdbd;
    max-width:700px;
    margin:auto;
    line-height:1.8;
}

.contact-card{
    background:rgba(17,17,17,.8);
    border:1px solid #fcbc46;
    border-radius:20px;
    padding:40px;
    backdrop-filter:blur(15px);
    transition:.4s;
}

.contact-card:hover{
    box-shadow:0 0 30px #fcbc46;
}

.contact-item{
    padding:15px 0;
    border-bottom:1px solid rgba(255,255,255,.08);
}

.contact-item:last-child{
    border-bottom:none;
}

.contact-item h6{
    color:#fcbc46;
    font-weight:700;
}

.contact-item p{
    color:#d1d5db;
    margin:0;
}

.custom-input{
    background:#0a0a0a;
    border:1px solid #222;
    color:#fff;
    border-radius:12px;
    padding:15px;
}

.custom-input:focus{
    background:#0a0a0a;
    color:#fff;
    border-color:#e7b65c;
    box-shadow:0 0 15px #fcbc46;
}

.contact-section .btn-primary{
    background:#e7b65c;
    color:#000;
    font-weight:700;
    border:none;
    padding:12px 30px;
}

.contact-section .btn-primary:hover{
    background:#fff;
}

/* MOBILE (layout) */

@media(max-width:768px){

.hero-title{
    font-size:3rem;
    text-align:center;
}

.hero-text{
    text-align:center;
}

.hero-section{
    text-align:center;
}

.hero-image{
    margin-top:40px;
    max-width:300px;
}

}

/* ============================================
   The rules below came from home.blade.php's
   old <style> block. They are kept here, in the
   same order, because they load AFTER the rules
   above and were already overriding them for
   .hero-section, .hero-title, .hero-image,
   .hire-btn, body background, and form inputs.
   Moving them here just makes that override
   explicit instead of hidden in another file.
   ============================================ */

.overlay{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,.75);
}

body{
    margin:0;
    min-height:100vh;
    background:url('{{ asset("images/bg1.jpeg") }}');
    background-size:cover;
    background-position:center;
    overflow-x:hidden;
}

.hero-section{
    position:relative;
    z-index:2;
    min-height:100vh;
    display:flex;
    align-items:center;
    color:white;
    padding:60px 0;
}

.hero-title{
    color:#e7b65c;
    font-weight:700;
    font-size:1.1rem;
    letter-spacing:1px;
    text-transform:uppercase;
    margin-bottom:15px;
}

.hero-section h1{
    font-size:5rem;
    font-weight:800;
}

.hero-section span{
    color:#e7b65c;
}

.hero-section p{
    font-size:1.3rem;
    color:#d1d5db;
    margin:20px 0;
}

.hire-btn{
    background:linear-gradient(135deg, #e7b65c, #fcbc46);
    color:#000;
    font-weight:700;
    font-size:1rem;
    padding:14px 38px;
    border-radius:40px;
    text-decoration:none;
    display:inline-block;
    border:2px solid transparent;
    letter-spacing:.5px;
    box-shadow:0 8px 20px #fcbc46;
    transition:all .35s ease;
}

.hire-btn:hover{
    background:transparent;
    color:#e7b65c;
    border:2px solid #e7b65c;
    transform:translateY(-5px);
    box-shadow:0 15px 30px #fcbc46;
}

.hire-btn:active{
    transform:translateY(-2px);
}

.hero-image{
    width:280px;
    height:280px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid #e7b65c;
    box-shadow:0 0 25px #fcbc46;
    transition:.4s;
}

.hero-image:hover{
    transform:scale(1.05);
    box-shadow:0 0 40px #e7b65c;
}

@media (max-width: 576px){
    .hero-image{
        width:180px;
        height:180px;
    }
    .hero-subtitle{
        font-size:1.4rem;
    }
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

.enter-btn:hover{
    transform:translateY(-5px);
    background:white;
}

.about-section{
    background:#ffffff;
}

.about-card{
    background:#151416;
    padding:30px;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
    height:100%;
    border:1px solid #eef2f7;
}

.about-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(37,99,235,.15);
}

.about-heading{
    color:#e7b65c;
    font-size:24px;
    font-weight:700;
    margin-bottom:15px;
}

.about-card p{
    color:#e5e7eb;
    line-height:1.8;
}

.form-control{
    background-color: #eedfb6
}

</style>

</head>

<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>