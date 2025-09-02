<x-layout>
<header><head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #666;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            background-color: #111;
            color: white;
            padding: 30px 10px;
        }

        header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
        }

        header h1 {
            margin-top: 15px;
            font-size: 2em;
        }

        main {
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        section {
            margin-bottom: 30px;
        }

        section h2 {
            color: #777;
            border-bottom: 2px solid #4a90e2;
            display: inline-block;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            background-color: #111;
            color: white;
            padding: 15px 0;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
</header>

<main>
    <body>

    <header>
        <img src="{{ asset('asset/jd.jpg') }}" alt="My Profile Picture">
        <h1>Mark Jade L. Marzan</h1>
        <p>3rd Year BSIT Student | ISPSC (Tagudin, Ilocos Sur)</p>
    </header>

    <main>
        <section>
            <h2>About Me</h2>
            <p>
                Hi everyone! I'm Mark Jade L. Marzan, but you can call me Jade for short. I was born on August 11, 2005, and I live in Pallogan, Tagudin, Ilocos Sur. I’m currently a 3rd year student at ISPSC-Tagudin Campus taking up Bachelor of Science in Information Technology. I have 3 siblings, and I’m the second oldest in the family. And in my elementary journey I study in Pallogan, Tagudin, Ilocos Sur, At my Highschool and Senior Highschool I study at Ambalayat Integrated School taking strand of ICT.
            </p>
        </section>

        <section>
            <h2>My Hobbies</h2>
            <p>
                I enjoy playing basketball and joining outdoor activities. I love spending time with my friends and family, and I’m always open to learning new things that interest me.
            </p>
        </section>

        <section>
            <h2>My Dream</h2>
            <p>
         My dream is to graduate, have a successful career, and live a life where I can provide for myself and my family.


            </p>
        </section>

        <section>
            <h2>Contact Me</h2>
            <p>
       <a href="https://www.facebook.com/share/1Ax8jA1cMc/"><img src= "fb.jpg" width="100"></a><br>
                Cellphone Number: 0948 895 5424 <br>
                Email: markjademarzan@gmail.com <br>
            </p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Mark Jade Marzan. All rights reserved. Thanls ChatGPT HAHAHA</p>
    </footer>

</body>
</main>

</x-layout>
